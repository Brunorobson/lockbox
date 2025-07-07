<?php

use App\Models\Usuario;
use Core\Database;
use Core\Validacao;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $database = new Database(config('database'));

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
        view('login');
        exit();
    }

    // 2. fazer consulta ao banco de dados
    $usuario = $database->query(
        query: "select * from usuarios where email = :email",
        class: Usuario::class,
        params: compact('email')
    )->fetch();

    if ($usuario && !password_verify($_POST['senha'], $usuario->senha)) {
        $_SESSION['auth'] = $usuario;
        flash()->push('mensagem', 'Você está logado ' . $usuario->nome);
        header('location: /');
        exit();
    } else {
        flash()->push('validacoes', ['email' => ['Usuario ou senha incorretas!']]);
    }
}

view('login');
