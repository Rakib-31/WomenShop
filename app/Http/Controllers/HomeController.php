<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Categorie;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        echo "error something";
        return view('welcome');
    }

    public function frontDecision(){
        if(Auth::user()){
            $category = Categorie::all();
            return view('welcome',compact('category'));
        }
        else{
            echo "not working blal bala";
            return view('auth.login');
        }
    }

    public function addCategory(){
        return view('newcategory');
    }

    public function insertCategory(Request $request){
        $validateData = $request->validate([
            'name' => 'required | max:25 | min:5 | unique:categories',
            'cost' => 'required',
        ]);

        $category = new Categorie;
        $category->name = $request->name;
        $category->cost = $request->cost;
        $category->save();
        return redirect('/');
    }
}
