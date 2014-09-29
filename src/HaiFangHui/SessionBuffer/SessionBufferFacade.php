<?php

namespace HaiFangHui\SessionBuffer;

use Illuminate\Support\Facades\Facade;

class SessionBufferFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'session_buffer';
    }
}