<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí están las rutas para manejar el login y registro de usuarios.
| Puedes agregar más rutas protegidas utilizando el middleware 'auth'.
|
*/

// Ruta de la página de inicio
Route::get('/', function () {
    return view('index'); // Cambia esto a la vista que prefieras
});

// Rutas para el registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register'); // Mostrar el formulario de registro
Route::post('/register', [RegisterController::class, 'register']); // Manejar el envío del formulario de registro

// Rutas para el login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Mostrar el formulario de login
Route::post('/login', [LoginController::class, 'login']); // Manejar el envío del formulario de login

// Ruta para cerrar sesión (ahora usando POST)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Cerrar sesión

