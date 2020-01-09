@extends('layouts.app')
@section('content')

<div class="row">

<div clss="col-3 text-center">
    <table class="text-center table border mt-4 bg-light" style="width: 10rem; margin-left: 20px;">
        <th><p class="h5"><b>Category</b></p></th>
        <tr class="text-center"><td>Sharee</td></tr>
        <tr><td><a href="#">clothing</a></td></tr>
        <tr><td>fashioneries</td></tr>
        <tr><td>Sharee</td></tr>
        <tr><td>Sharee</td></tr>
        <tr><td>Sharee</td></tr>
        <tr><td>Sharee</td></tr>
        <tr><td>Sharee</td></tr>
        <tr><td>Sharee</td></tr>
    </table>

</div>

<div class="container col-9">

    <br><br>

    <div class="row">
        @foreach($category as $row)
        <div class="col mt-4 col-sm-2">
            <a href="{{URL::to('product/'.$row->id)}}" style="underline: none;">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRQ-ZU6dwyZVLrd-dxazJXG0ThEG9zEgGaN_SIR_eE4hMjxf9x5">
                    <div class="card-body">
                        <h4 class="card-title">{{$row->name}}</h4>
                        <p class="card-text">BDT-{{$row->cost}}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection
