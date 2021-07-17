@extends('collaborators.layouts.master')
@section('content')
    <h1>Danh sách món ăn</h1>

    <a href="{{route('collab.create')}}">Thêm mới món ăn</a>
    <nav class="navbar navbar-light bg-light" >
        <form class="form-inline" action=" {{route('collab.search')}}" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Promotion_price</th>
            <th scope="col">Service_charge</th>
            <th scope="col">Shop</th>
            <th scope="col">Category</th>
            <th scope="col">Preparation_time</th>
            <th scope="col">Tag</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($foods as $key=>$food)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td><img src="{{asset('storage/'.$food->image)}}" alt="" style="max-width: 70px"></td>
                <td>{{$food->name}}</td>
                <td>{{$food->price}}</td>
                <td>{{$food->promotion_price}}</td>
                <td>{{$food->service_charge}}</td>
                <td>{{$food->shop_id}}</td>
                <td>{{$food->category_id}}</td>
                <td>{{$food->preparation_time}}</td>
                <td>{{$food->tag}}</td>
                <td><a href="{{ route('collab.edit',$food->id) }}" class="btn btn-success">Update</a></td>
                <td><a href="{{ route('collab.delete',$food->id) }}" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không')">Delete</a></td>

            </tr>
        @endforeach

        </tbody>
    </table>
      
@endsection

