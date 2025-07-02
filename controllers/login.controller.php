<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $validacao = Validacao::validar([
        'email' => [
            'required',
            'email'
        ],
        'senha' => [
            'required'
        ]
    ], $_POST);

    if ($validacao->naoPassou()) {
        header('location: /login');
        exit();
    }

    // 2. fazer consulta ao banco de dados
    $usuario = $database->query(
        query: "select * from usuarios where email = :email",
        class: Usuario::class,
        params: compact('email')
    )->fetch();

    if ($usuario) {
        if (!password_verify($_POST['senha'], $usuario->senha)) {
            flash()->push('validacoes_login', ['Usuario ou Senha incorretas!']);
            header('location: /login');
            exit();
        }


        $_SESSION['auth'] = $usuario;
        flash()->push('mensagem', 'Você está logado ' . $usuario->nome);
        header('location: /');
        exit();
    }
}

view('login');
