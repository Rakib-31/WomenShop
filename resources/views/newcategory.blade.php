@extends('layouts.app')
@section('content')
<div style="width: 500px;" class="container">
    <form action="{{route('cat')}}" method="post">
    @csrf
        <div class="form-group">
            <label for="name">Category name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="cost">Cost</label>
            <input type="text" name="cost" class="form-control" id="cost" placeholder="" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection