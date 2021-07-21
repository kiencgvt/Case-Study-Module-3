@extends('admin.master')
@section('title','Add Category')
@section('content')
    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Category Image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
