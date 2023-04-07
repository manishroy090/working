<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itema;

class IndexController extends Controller
{
    public function index(){

        $items=Itema::all();
        
        return view('main.index',['items'=>$items]);
    }
    public function store(Request $request){
        Itema::create($request->all());
        $view= view('main.index');
        return ["response"=>'Added Successfully','view'=>$view];

    }
}
