<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateRequest;
use App\Models\Produto;
use App\Models\User;

class UserController extends Controller
{
    private $objUser;
    private $objProduto;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objProduto = new Produto();
    }

    public function consulta()
    {
        $prod = Produto::all();
        return view('consulta', compact('prod'));
    }

    public function store(Request $request)
    {
        $produto = new Produto;
        $produto->id = $request->id;
        $produto->nomeProduto = $request->title;
        $produto->quantidadeProduto = $request->quantidade;
        $produto->precoProduto = $request->preco;
    
        // Upload de imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('images'), $imageName);
            $produto->image = 'images/' . $imageName;  // Adicionar caminho completo
        }
    
        $produto->save();
        return redirect()->route('home')->with('msg', "Produto adicionado com sucesso!");
    }

    public function create()
    {
        return view('create');
    }

    public function edit($id)
    {
        $prod = Produto::find($id);
        if (!$prod) {
            return redirect()->route('home');
        }
        return view('editar', compact('prod'));
    }

    public function update(StoreUpdateRequest $request, $id)
    {
        $prod = Produto::find($id);
        if (!$prod) {
            return redirect()->back();
        }

        // Upload de imagem
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('images'), $imageName);
            $prod->image = 'images/' . $imageName;  // Adicionar caminho completo
        }

        $prod->update($request->all());
        return redirect()->route('home')->with('msg', "Produto alterado com sucesso!");
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();
        return redirect()->route('home')->with('msg', "Produto excluído com sucesso!");
    }
}
