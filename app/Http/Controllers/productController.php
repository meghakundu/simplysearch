<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    //

    public function search(Request $request)
   {
    $search = $request->input('search');
    $results = Product::where('name', 'like', "%$search%")
               ->orWhere('brand','like',"%$search%")->get();

    return view('index', ['results' => $results]);
   }


}
