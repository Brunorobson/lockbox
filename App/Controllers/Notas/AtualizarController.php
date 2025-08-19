<?php

namespace App\Controllers\Notas;

use App\Models\Nota;
use Core\Database;
use Core\Validacao;

class AtualizarController
{
    public function __invoke()
    {
        $validacao = Validacao::validar(
            array_merge([
                'titulo' => ['required', 'min:3', 'max:100'],
                'id' => ['required']
            ], session()->get('mostrar') ? ['nota' => ['required']] : []),
            request()->all()
        );

        if ($validacao->naoPassou()) {
            return redirect('/notas?id=' . request()->post('id'));
        }

        Nota::update(
            id: request()->post('id'),
            titulo: request()->post('titulo'),
            nota: encrypt(request()->post('nota'))
        );

        flash()->push('mensagem', 'Registro atualizado com sucesso!');
        return redirect('/notas');
    }
}
