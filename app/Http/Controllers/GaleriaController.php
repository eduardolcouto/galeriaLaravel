<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Requests\GaleriaRequest;
use App\Http\Controllers\Controller;

use App\Galeria;

class GaleriaController extends Controller
{
    public function index()
    {
        //
        $galerias = Galeria::where('user_id',Auth::user()->id)->get();

        return view('galeria.index',['galerias' => $galerias]);
    }

    public function create()
    {
        return view('galeria.create');
    }

    public function store(GaleriaRequest $request)
    {
      $input = $request->all();

      Galeria::create($input);

      return redirect()->route('galeria.index');
    }

    public function destroy($id)
    {
      Galeria::find($id)->delete();

      return redirect()->route('galeria.index');
    }

    public function edit($id)
    {
      $galeria = Galeria::find($id);

      return view('galeria.edit',compact('galeria'));
    }

    public function update(GaleriaRequest $request, $id)
    {
      $g = Galeria::find($id)->update($request->all());

      return redirect()->route('galeria.index');
    }
}
