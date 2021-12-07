<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;
use App\Models\User;

class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new produto;
        //$event->create($request->all());
        $event->idProduto = $request->id;
        $event->nomeProduto = $request->title;
        $event->quantidadeProduto = $request->quantidade;
        $event->precoProduto = $request->preco;
        //$event->date = $request->date;

        // image upload

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('C:\laravel\projeto\public\assets\bootstrap\images'), $imageName);
            
            $event->image = $imageName;
        
        }

        $event->save();
        return redirect()->route('home')->with('msg', "Produto adicionado com sucesso !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $prod = produto::all();
        return view('consulta', compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit', ['idProduto' => $idProduto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $idProduto->idProduto = $request->idProduto;
        $idProduto->nomeProduto = $request->nomeProduto;
        $idProduto->quantidadeProduto= $request->quantidadeProduto;
        $idProduto->precoProduto  = $request->precoProduto;
        $idProduto->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idProduto->delete();
        return redirect()->route('home');
    }
}
