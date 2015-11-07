<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImagensController extends Controller
{
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
