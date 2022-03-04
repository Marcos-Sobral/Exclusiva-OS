<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateRequest;
use App\Models\produto;
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
  public function consulta()
    {
        $prod =produto::all();
        return view('consulta', compact('prod'));
    }

/*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
/*
    public function store(Request $request ){
        dd($request);
     }*/


     public function store(Request $request ){
        $event = new produto;
        //$event->create($request->all());
        $event->id = $request->id;
        $event->nomeProduto = $request->title;
        $event->quantidadeProduto = $request->quantidade;
        $event->precoProduto = $request->preco;
        //$event->date = $request->date;

        // image upload

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('images'), $imageName);
            
            $event->image = $imageName;
        
        }

        $event->save();
        return redirect()->route('home')->with('msg', "Produto adicionado com sucesso !");
      }
      
/*
     public function store(Request $request ){
        produto::create($request->all());
        return redirect()->route('index-home');
      }
      */
    public function create()
    {
        return view('create');
    }

   /* public function editar($id)
    {
        $event = produto::findOrFail($id);
        return view('index-editar', ['event' => $event]);
    }
*/
    public function edit($id)
{
    $prod = produto::find($id);
    if(!$prod){
        return redirect()->route('home');
    }

    return view('editar', compact('prod'));
}
 

    public function update(StoreUpdateRequest $request, $id)
    {
        $prod = produto::find($id);

        dd($id);

        if(!$prod){
            return redirect()->back();
        }

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('images'), $imageName);
            
            $event->image = $imageName;
        
        }

        $prod->update($request->all());
        return redirect()->route('home')->with('msg', "Produto alterado com sucesso !");
    }

   /* public function update(StoreUpdateRequest $request, $id)
    {
        $prod = produto::find($id);
        if(!$prod){
            return redirect()->back();
        }
        $prod->id = $request->id;
        $prod->nomeProduto = $request->nomeProduto;
        $prod->quantidadeProduto= $request->quantidadeProduto;
        $prod->precoProduto  = $request->precoProduto;
        $prod->save();
        return redirect()->route('home');
    }
*/
    public function destroy($id)
    {
        produto::findOrFail($id)->delete();
        return redirect()->route('home')->with('msg', "Produto excluido com sucesso !");
    }
/*
/*
    public function edit ($idProduto)
    {
        return view('editar', ['idProduto' => $idProduto]);
    }*/
    
    /*public function update (Request $request, idProduto $idProduto)
    {
        $idProduto->idProduto = $request->idProduto;
        $idProduto->nomeProduto = $request->nomeProduto;
        $idProduto->quantidadeProduto= $request->quantidadeProduto;
        $idProduto->precoProduto  = $request->precoProduto;
        $idProduto->save();

        return redirect()->route('consulta');

    }*/



  /*public function edit ($idProduto)
    {

         $event = produto::all();
         //$event = $request->all();
         auth()->produto()->update($event);
         $update = auth()->produto()->update($event);
     dd($idProduto);
         if($update)
         return redirect()->route('edit');
    }
*/

/*
    public function destroy($idProduto)
    {
        produto::findOrFail($idProduto)->delete();

        return redirect ('destroy')->with('msg','Informaçao excluída !');
    }


       /* public function edit($idProduto)
    {
        
        Event::findOrFail($request->idProduto)->update($request->all());
        return redirect('consulta')->with('msg', 'Editado com sucesso !');

    }

 */

        /*public function show($idProduto)
    {
        $produ = produto::findOrFail($idProduto);

        $prod = users::where('id', $produ->id)->first()->toArray();

        return view('consulta',['produ' => $produ, 'prod' => $prod]);
    }*/

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
}