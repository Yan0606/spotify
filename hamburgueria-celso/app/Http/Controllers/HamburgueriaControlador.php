<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class HamburgueriaControlador extends Controller
{
    public function index(){
        
        $nome = "Bruno";
        $sobrenome = "Lima";
        $lista = ["x-salada","x-tudo","x-baguncinha"];
        return view('home', 
            [
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'lista' => $lista
            ]);
    }


    public function verCardapio(){
        return view('cardapio');
    }

    //CADASTRANDO CLIENTE(USUARIO) AQUI!!!
    public function cadastrar(Request $request){

        $cliente = new Usuario;

        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->password = $request->password;

        $cliente->save();

        return redirect('/cliente');
    }

    public function verClientes(){

        $clientes = Usuario::all();
        return view('cliente', ['clientes' => $clientes]);
    }

    public function verHome(){
        return view('home');
    }
}
