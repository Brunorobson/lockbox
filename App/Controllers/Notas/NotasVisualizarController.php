<?php

namespace App\Controllers\Notas;

class NotasVisualizarController
{
    public function mostrar()
    {
        session()->set('mostrar', true);
        return redirect('/notas');
    }

    public function esconder()
    {
        session()->forget('mostrar');
        return redirect('/notas');
    }
}
