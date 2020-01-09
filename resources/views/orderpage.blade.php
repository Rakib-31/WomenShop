@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('ordersuccess')}}" method="post">
    @csrf
        <button type="submit" class="btn float-right center btn-success">Order Now</button>
        <br><br>
        <div class="row">    
            <div class="col-6">
                <h2>Product information</h2>
                <br><br>
                <div class="form-group">
                    <label for="product">Product</label>
                    <input type="text" name="product" class="form-control" id="product" value="{{$item->image}}" required>
                </div>
                <div class="form-group">
                    <label for="prod_id">Product ID</label>
                    <input type="text" name="prod_id" class="form-control" id="prod_id" value="{{$item->id}}" required>
                </div>
                <div class="form-group">
                    <label for="prod_name">Product Name</label>
                    <input type="text" name="prod_name" class="form-control" id="prod_name" value="{{$item->name}}" required>
                </div>
                <div class="form-group">
                    <label for="prod_quan">Quantity</label>
                    <input type="text" name="prod_quan" class="form-control" id="prod_quan" value="{{$request->quantity}}" required>
                </div>
                <div class="form-group">
                    <label for="prod_color">Color</label>
                    <input type="text" name="prod_color" class="form-control" id="prod_color" value="{{$request->selection}}" required>
                </div>
                <div class="form-group">
                    <label for="prod_cost">Cost</label>  
                    <input type="text" name="prod_cost" class="form-control" id="prod_cost" value="{{$item->cost}}" required>
                </div>
            </div>
            <div class="col-6">
                <h2>Personal information</h2>
                <br><br>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" class="form-control" id="country" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="state">State/City</label>
                    <input type="text" name="state" class="form-control" id="state" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="postal">Postal code</label>
                    <input type="text" name="postal" class="form-control" id="postal" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="phone">Contact number</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="" required>
                </div>
            </div>
        </div>        
    </form>
</div>
@endsection
