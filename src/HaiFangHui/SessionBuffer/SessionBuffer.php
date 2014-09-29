<?php

namespace HaiFangHui\SessionBuffer;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;


class SessionBuffer {
    public function push($buffer_name, $variable) {
        $session_name = "session_buffers.{$buffer_name}";

        Session::push($session_name, $variable);

        $existing = Session::get($session_name);
        
        $capacity = Config::get("sessionbuffer::buffers.{$buffer_name}.capacity", Config::get('sessionbuffer::default_capacity', 32));

        if (is_array($existing) && count($existing) > $capacity) {
            $this->trim($session_name, $capacity);
        }
    }

    protected function trim($session_name, $capacity) {
        $buffer = Session::get($session_name);
        $new_buffer = array_slice($buffer, -$capacity);
        Session::set($session_name, $new_buffer);
        return true;
    }
}