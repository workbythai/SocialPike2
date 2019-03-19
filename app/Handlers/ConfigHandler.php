<?php

namespace App\Handlers;

class ConfigHandler
{
    public function userField()
    {
        return auth()->guard('admin')->user()->id;
    }
}
