@extends('layouts.app')
@section('content')
        <div>

            <div class="container">
            

                <a href="{{route('newcategory')}}"><button class="btn btn-primary">Add Category</button></a>
            </div>
            <br><br>
            <div style="width: 500px;" class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th align="center" scope="col">Option</th>
                            <th align="center" scope="col">Place</th>
                            <th align="center" scope="col">Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $row)
                        <tr>
                            <td scope="row"><input type="radio"/></td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->cost}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
