@extends('collaborators.layouts.master')
@section('content')
    <h1>Danh sách món ăn</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Promotion_price</th>
            <th scope="col">Service_charge</th>
            <th scope="col">Shop_id</th>
            <th scope="col">Category_id</th>
            <th scope="col">Require_date</th>
            <th scope="col">Tag</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>

        </tr>
        </thead>
        <tbody>
        @foreach($foods as $key=>$food)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td><img src="{{asset('storage/'.$food->image)}}" alt="" width="150px"></td>
                <td>{{$food->name}}</td>
                <td>{{$food->price}}</td>
                <td>{{$food->promotion_price}}</td>
                <td>{{$food->service_charge}}</td>
                <td>{{$food->shop_id}}</td>
                <td>{{$food->category_id}}</td>
                <td>{{$food->require_date}}</td>
                <td>{{$food->tag}}</td>
                <td><a href="{{ route('collab.edit',$food->id) }}" class="btn btn-success">Sửa</a></td>
                <td><a href="{{ route('collab.delete',$food->id) }}" class="btn btn-danger">Xóa</a></td>

            </tr>
        @endforeach

        </tbody>
    </table>
        {{$foods->links()}}
@endsection

