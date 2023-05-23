<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Lista de todos los clientes
     */
    public function index()
    {
        $clients= Client::all();//devuelve todos los clientes
        //Ya NO retornamos vista sino una respuesta en formato .json
        return response()->json($clients);
        //devuelve una respuesta en json
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //AQUI NO SE DEBE ESPECIFICAR NADA YA QUE EL FRONT SE OCUPA
    }

    /**
     * 1-CUANDO SE QUIERE CREAR UN PRODUCTO EN POSTMAN,en el Headers de postman, se debe crear una fila con el atributo key : Accept y value: application/json
     * 2-EN EL BODY , SE DEBE ESPECIFICAR QUE ES FORMATO JSON, YA QUE DE MANERA PRETERMINADA ESTA EN FORMATO TEXT 
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->name= $request->name;
        $client->email= $request->email;
        $client->phone= $request->phone;
        $client->address= $request->address;
        $client->save();
        //UNA BUENA PRACTICA ES MANDARLE UN MENSAJE DE QUE SE HA CREADO
        $data=[
            'message'=>'Cliente fue creado exitosamente',
            'client'=>$client
        ];
        return response()->json($data);
    }

    /**
     * SI ENVIA UNA SOLICITUD DE VER A SOLO UN CLIENTE 
     */
    public function show(Client $client)
    {
        return response()->json($client);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $client->name= $request->name;
        $client->email= $request->email;
        $client->phone= $request->phone;
        $client->address= $request->address;
        $client->save();
        //UNA BUENA PRACTICA ES ENVIARLE UN MENSAJE QUE SE HA ACTUALIZADO
        $data=[
            'message'=>'El cliente se ha actualizado exitosamente',
            'cliente'=>$client
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        $data=[
            'message'=>'El cliente ha sido eliminado',
            'client'=>$client
        ];
        return response()->json($data);
    }
}
