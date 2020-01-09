@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="$item->image">
        </div>
        <div class="col-6">
            <form action="{{URL::to('order/'.$item->id)}}" method="get">
                <p><b>Product-ID:</b> {{$item->id}}</p>
                <h2>{{$item->name}}</h2>
                <b>Quantity:</b> <input type="text" name="quantity" class="form-control" id="quantity" value="" required>
                <br>
                <b>Color:</b> 
                <select name="selection">
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Green">Green</option>
                </select><br><br>
                <b>Price:</b>  BDT - {{$item->cost}}
                <br><br><br><br><br>
                <button type="submit" class="btn btn-success">Buy now</button>
                <button type="submit" class="btn btn-danger">Add To Cart</button>
            </form>
        </div>
    </div>

    <br><br><br><br>

    <div>
        <hr/>
        <h2>Product Details</h2>
        <p>fgjfgviuyvjuytjfddfytfjghgfdhhvhvhghhghgcgfcgffyfgvhghgcgvghvghcgv</p>
    </div>

    <br><br><br><br>

    <div>
        <hr/>
        <h2>Customer Review</h2>
        <p>fgjfgviuyvjuytjfddfytfjghgfdhhvhvhghhghgcgfcgffyfgvhghgcgvghvghcgv</p>
    </div>
</div>
@endsection
