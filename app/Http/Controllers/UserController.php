<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\User;
//use App\User;
class UserController extends Controller
{
/*
    private $objuser;
    private $objproduto;

    public function construct()
    {
        $this->objuser=new User();
        $this->objproduto=new Produto();
    }
*/
    public function get()
    {
        $produtos = produto::all();
       // dd($produtos);
       return view('index', ['produtos'=>produtos]);
    }

/*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cadastro()
    {
        return view('cadastro');
    }

    public function editar()
    {
        return view('editar');
    }
    /*
    public function cadastro()
    {
        $User=$this->objuser->all();
        return view('cadastro', compact('User'));
    }
*/
/*
    public function store(Request $request)
{
    $cad=$this->objBook->create([
       'nome'=>$request->nome,
       'email'=>$request->email,
       'preco'=>$request->preco,
       'quantidade'=>$request->quantidade,
    ]);
    if($cad){
        return redirect('produto');
    }
}

protected $fillable=['nome','email','preco','quantidade'];

}

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     /*
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   /*  
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /*
     public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
     public function destroy($id)
    {
        //
    }
}
