<?php

namespace App\Controllers\Middlewares;

class AuthMiddleware
{

    public function handle()
    {
        if (!auth()) {
            return redirect('/login');
        }
    }
}
