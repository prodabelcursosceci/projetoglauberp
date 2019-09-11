<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TesteController extends Controller
{
    //
    public function index(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'nome'=>'required|max:10'
        ]);

        
        if($validator->fails()) {
            //dd($validator->errors());
            $errors = $validator->errors()->all();
        }
        $nome = $req->nome;
        $ola = 'mundo!';

        echo "Hello wooorld, $nome<br />";
        //return view('index', ['ola'=>'mundo']);
        return view('index', compact(['nome','ola','errors']));
    }

    public function index2($nome2, $idade=null)
    {
        echo "Hello wooorld, $nome2, idade: $idade";
        return view('welcome');
    }

    public function indexPost(Request $req)
    {
        return "Postei! $req->telefone";
    }
}
