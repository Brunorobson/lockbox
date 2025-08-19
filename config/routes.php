<?php


use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\LogoutController;
use App\Controllers\Middlewares\AuthMiddleware;
use App\Controllers\Middlewares\GuestMiddleware;
use App\Controllers\Notas\AtualizarController;
use App\Controllers\Notas\CriarController;
use App\Controllers\Notas\DeletarController;
use App\Controllers\Notas\IndexController as NotasIndexController;
use App\Controllers\Notas\NotasVisualizarController;
use App\Controllers\RegisterController;
use Core\Route;

(new Route())

    ->get('/', IndexController::class, GuestMiddleware::class)
    ->get('/login', [LoginController::class, 'index'], GuestMiddleware::class)
    ->post('/login', [LoginController::class, 'login'], GuestMiddleware::class)

    ->get('/registrar', [RegisterController::class, 'index'], GuestMiddleware::class)
    ->post('/registrar', [RegisterController::class, 'register'], GuestMiddleware::class)



    ->get('/logout', LogoutController::class, AuthMiddleware::class)
    ->get('/notas', NotasIndexController::class, AuthMiddleware::class)
    ->get('/notas/criar', [CriarController::class, 'index'], AuthMiddleware::class)
    ->post('/notas/criar', [CriarController::class, 'store'], AuthMiddleware::class)
    ->put('/nota', AtualizarController::class, AuthMiddleware::class)
    ->delete('/nota', DeletarController::class, AuthMiddleware::class)

    ->get('/mostrar', [NotasVisualizarController::class, 'mostrar'], AuthMiddleware::class)
    ->get('/esconder', [NotasVisualizarController::class, 'esconder'], AuthMiddleware::class)
    ->run();

die();

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if (!$controller) $controller = 'index';

if (! file_exists("../controllers/{$controller}.controller.php")) {
    abort(404);
}

require "../Controllers/{$controller}.controller.php";
