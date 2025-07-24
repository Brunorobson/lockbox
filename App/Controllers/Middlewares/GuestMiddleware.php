<?php

namespace App\Controllers\Middlewares;

class GuestMiddleware
{

    public function handle()
    {
        if (auth()) {
            return redirect('/notas');
        }
    }
}
