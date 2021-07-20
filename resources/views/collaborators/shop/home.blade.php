@extends('collaborators.layouts.master')

@section('content')
    <div class="col-md-8 mb-3">
        <h1>Danh sách cửa hàng</h1>
        <a href="{{route('shop.create')}}">Add Shop</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Address</th>
                <th scope="col">Collaborator Name</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($shops as $key=>$shop)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td><img src="{{asset('storage/'.$shop->image)}}" alt="" width="70px"></td>
                    <td>{{$shop->address}}</td>
                    <td>{{\App\Models\User::find($shop->user_id)->name}}</td>
                    <td>{{$shop->name}}</td>
                    <td><a href="{{ route('shop.edit',$shop->id) }}" class="btn btn-success">Update</a>
                    </td>
                    <td><a href="{{ route('shop.delete',$shop->id) }}" onclick="return confirm('Xóa cửa hàng này?')" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
