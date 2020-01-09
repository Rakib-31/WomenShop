<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Categorie;
use App\Order;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
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
        $category = Categorie::all();
        return view('welcome',compact('category'));
    }

    public function addProduct(){
        if(Auth::user()){
            $category = Categorie::all();
            return view('adminpage',compact('category'));
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
            'image' => 'required',
            'name' => 'required | max:25',
            'cost' => 'required',
        ]);

        $category = new Categorie;
        $category->image = $request->image;
        $category->name = $request->name;
        $category->cost = $request->cost;
        $category->save();
        return redirect('/');
    }

    public function show($id){
        $item = Categorie::findorfail($id);
        return response()->json($item);
    }

    public function deleteItem($id){
        $item = Categorie::findorfail($id);
        $item->delete();
        
        $notification = Array(
            'message'=>'successfully deleted',
            'alert-type'=>'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function edit($id){
        $item = Categorie::findorfail($id);
        return view('update',compact('item'));
    }

    public function update(Request $request, $id){
        $item = Categorie::findorfail($id);
        $item->name = $request->name;
        $item->cost = $request->cost;
        $item->save();
        
        $notification = Array(
            'message'=>'successfully updated',
            'alert-type'=>'success'
        );

        return Redirect('/')->with($notification);
    }

    public function product($id){
        $item = Categorie::findorfail($id);
        return view('productview', compact('item'));
    }

    public function order(Request $request, $id){
        $item = Categorie::findorfail($id);
        return view('orderpage', compact(['request','item']));
    }

    public function ordersuccess(Request $request){
        $validateData = $request->validate([
            'product' => 'required',
            'prod_id' => 'required | unique:orders',
            'prod_name' => 'required',
            'prod_quan' => 'required',
            'prod_color' => 'required',
            'prod_cost' => 'required',
            'name' => 'required | min:3',
            'email' => 'required',
            'country' => 'required',
            'state' => 'required',
            'postal' => 'required',
            'phone' => 'required',
        ]);
        $order = new Order;
        $order->product = $request->product;
        $order->prod_id = $request->prod_id;
        $order->prod_name = $request->prod_name;
        $order->prod_quan = $request->prod_quan;
        $order->prod_color = $request->prod_color;
        $order->prod_cost = $request->prod_cost;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->country = $request->country;
        $order->state = $request->state;
        $order->postal = $request->postal;
        $order->phone = $request->phone;
        $order->save();
        return redirect('/');
    }
}
