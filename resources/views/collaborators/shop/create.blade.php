@extends('collaborators.layouts.master')

@section('content')

    <div class="col-md-8 mb-3">
        <div class="rounded shadow-sm p-4 bg-white">
            <h5 class="mb-4">Thêm mới cửa hàng</h5>
            <div id="edit_profile">
                <div>
                    <form method="post" action="{{route('shop.store')}}"  enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">ảnh cửa hàng</label>
                            <input type="file" class="form-control" name="image" placeholder="Enter image">
                        </div>
                        <div class="form-group">
                            <label for="storeName">Tên cửa hàng</label>
                            <input type="text" class="form-control" name="name" id="storeName">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ cửa hàng</label>
                            <input type="text" class="form-control" name="address" id="address">
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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



