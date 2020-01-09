@extends('layouts.app')
@section('content')
<div style="width: 500px;" class="container">
    <form action="{{URL::to('update/'.$item->id)}}" method="post">
    @csrf
        <div class="form-group">
            <label for="image">Category Image</label>
            <input type="text" name="image" class="form-control" id="image" value="{{$item->image}}" required>
        </div>
        <div class="form-group">
            <label for="name">Category name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$item->name}}" required>
        </div>
        <div class="form-group">
            <label for="cost">Cost</label>
            <input type="text" name="cost" class="form-control" id="cost" value="{{$item->cost}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection