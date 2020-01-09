@extends('layouts.app')
@section('content')
        <div>

            <div class="container">
            

                <a href="{{route('newcategory')}}"><button class="btn btn-primary">Add Category</button></a>

            <br><br>

            <div class="row">
                @foreach($category as $row)
                <div class="col mt-4 col-sm-2">
                    <a href="#">
                    <div class="card" style="width: 10rem;">
                        <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRQ-ZU6dwyZVLrd-dxazJXG0ThEG9zEgGaN_SIR_eE4hMjxf9x5">
                        <div class="card-body">
                        <h4 class="card-title">{{$row->name}}</h4>
                        <p class="card-text">BDT-{{$row->cost}}</p>
                        </div>
                        <a href="{{URL::to('edit/'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{URL::to('view/'.$row->id)}}" class="btn btn-sm btn-success">View</a>
                        <a href="{{URL::to('delete/'.$row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                    </a>
                </div>
                @endforeach
                </div>
            </div>
</div>
@endsection
