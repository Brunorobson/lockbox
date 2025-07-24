<?php

namespace App\Controllers;

use Core\Database;
use Core\Validacao;

class RegisterController
{
    public function index()
    {
        return view('registrar', template: 'guest');
    }

    public function register()
    {
        $validacao = Validacao::validar([
            'nome' => ['required'],
            'email' => [
                'required',
                'email',
                'confirmed',
                'unique:usuarios'
            ],
            'email_confirmacao' => [
                'required',
                'email'
            ],
            'senha' => [
                'required',
                'min:8',
                'max:32',
                'strong'
            ]
        ], $_POST);




        if ($validacao->naoPassou()) {
            return view('registrar');
        }

        $database = new Database(config('database'));

        $database->query(
            "insert into usuarios (nome, email, senha) values (:nome, :email, :senha)",
            [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
            ]
        );


        flash()->push('mensagem', 'Usuário cadastrado com sucesso');
        return redirect('login');
    }
}
