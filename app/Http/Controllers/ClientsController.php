<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Entreprise;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }




    public function index(){
        $clients = Client::all();
        

        return view('clients/index', compact('clients'));
    }

    public function create()
    {
        $entreprises = Entreprise::all();
        $client = new Client();
        return view('clients.create', compact('client', 'entreprises'));
    }




    public function store()
    {
       $data= request()->validate([
            'name' =>'required',
            'email' =>'required',
            'status' =>'required',
            'entreprise_id' =>'required'
        ]);

     
            Client::create($data);

            return back();
       

    }  
    
    public function show(Client $client)
    {
       return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        $entreprises=Entreprise::all();

        return view('clients.edit', compact('client', 'entreprises'));
    }

    public function update(Client $client)
    {
        $data= request()->validate([
            'name' =>'required',
            'email' =>'required',
            'status' =>'required',
            'entreprise_id' =>'required'
        ]);

        $client->update($data);
        return redirect('clients/' . $client->id);
    }

    public function destroy(Client $client)
    {
        $client -> delete();

        return redirect('clients');
    }
}


