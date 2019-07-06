<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() 
    {
        $clients = \App\Client::all();
        return view('client.index', compact('clients'));
    }
    public function store()
    {
        $client = new \App\Client();        
        $client->nome = request('nome');
        $client->cpf = request('cpf');
        $client->save();
        
        return redirect('/clients');
    }
}
