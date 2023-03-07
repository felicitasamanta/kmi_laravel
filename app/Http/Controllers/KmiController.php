<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KmiController extends Controller
{
  public function index() {
     // dd('labas');
        return view('kmi');
  }

  public function result(Request $request) {

      $height = $request -> height;
      $weight = $request -> weight;
      $kmi = round($weight/($height/100)**2, 1);
      return view('result', [
          'height' => $height,
          'weight' => $weight,
          'kmi' => $kmi

          ]);
  }
}
