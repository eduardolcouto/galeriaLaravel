<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;
use App\Files;

use App\Produto;

class ProdutoController extends Controller
{

    public function index()
    {
        //
        $produtos = Produto::all();

        return view('produtos.index',['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(ProdutoRequest $request)
    {
      $input = $request->all();

      Produto::create($input);

      return redirect()->route('produtos');
    }

    public function destroy($id)
    {
      Produto::find($id)->delete();

      return redirect()->route('produtos');
    }

    public function edit($id)
    {
      $produto = Produto::find($id);

      return view('produtos.edit',compact('produto'));
    }

    public function update(ProdutoRequest $request, $id)
    {
      $p = Produto::find($id)->update($request->all());

      return redirect()->route('produtos');
    }

    public function upload(Request $request){

      $file = $request->file;

      $imageName = md5(time()*rand(1,100)).'.'. $file->getClientOriginalExtension();

      $f = new Files();
      $f->name = $imageName;
      $f->mimeType = $file->getMimeType();
      $f->size = $file->getSize();
      $f->user_id = 1;
      $f->produto_id = $request->input('produto_id');

      $file->move(base_path() . '/public/imagens/', $imageName);
 
      $f->save();
     

      return 'OK';

    }


}
