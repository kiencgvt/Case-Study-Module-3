@extends('collaborators.layouts.master')

@section('content')

    <div class="col-md-8 mb-3">
        <div class="rounded shadow-sm p-4 bg-white">
            <h5 class="mb-4">Thêm mới cửa hàng</h5>
            <div id="edit_profile">
                <div>
                    <form method="post" action="{{route('shop.store')}}"  enctype="multipart/form-data" >
                        @csrf
                        <img style="width: 40px" src="{{asset('storage/'.$shop->image)}}" alt="ảnh lỗi">
                        <div class="form-group">
                            <label for="exampleInputName1">ảnh cửa hàng</label>
                            <input type="file" class="form-control" name="image" placeholder="Enter image">
                        </div>
                        <div class="form-group">
                            <label for="storeName">Tên cửa hàng</label>
                            <input type="text" value="{{$shop->name}}" class="form-control" name="name" id="storeName">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ cửa hàng</label>
                            <input type="text" class="form-control" value="{{$shop->name}}" name="address" id="address">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection



