<?php

use Core\Database;
use Core\Validacao;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $database = new Database(config('database'));

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
        view('registrar');
        exit();
    }


    $database->query(
        query: "insert into usuarios (nome, email, senha) values (:nome, :email, :senha)",
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
        ]
    );

    flash()->push('mensagem', 'Usuário cadastrado com sucesso');
    header('location: /login');
    exit();
}

view('registrar');
