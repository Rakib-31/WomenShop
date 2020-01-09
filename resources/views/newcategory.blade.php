@extends('layouts.app')
@section('content')
<div style="width: 500px;" class="container">
    <form action="{{route('cat')}}" method="post">
    @csrf
        <div class="form-group">
            <label for="image">Category Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="" required>
        </div>
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



<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <form action="{{route('cat')}}" method="post">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input name="image" type="text" class="form-control" id="image" required url>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" id="title" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input name="description" type="text" class="form-control" id="description" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="card float-right" style="width: 20rem;">
                <img class="card-img-top" src="image.value">
                <div class="card-body">
                    <h4 class="card-title" id="store">
                        
                    </h4>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("title").oninput = () => {
        const input = document.getElementById('title');
        console.log(input.value);
        const output = document.getElementById('store');

        // Trying to insert text into 'output'.
        output.innerText = input.value;
        };
    </script>
</div>
@endsection