<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    // Método index de la clase UserController
    // Pedir al usuario un argumento, en este caso el id
    // Tambien podemos especificar el tipo como por ejemplo int
    // Tambien podmos especificar el tipo de dato que queremos devolver por ejemplo String
    public function index(int $user_id): view
    {

        // Mostramos el id al usuario
        // dd($user_id);

        // Mensaje que se mostrar por pantalla si se llama el método
        //return '<h1>Hola mundo desde el controlador: '.$user_id.'</h1>';


        // Eloquent
        // dd(User::all());

        // Es igual que select * from users where id = 1;
        $user = User::find($user_id);

        // dd($user);

        return view('welcome', ['user' => $user]);

    }
}
