@extends('admin.master')
@section('title','Edit')
@section('content')
    <h3>Edit Category</h3>
    <div class="container">
    <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
