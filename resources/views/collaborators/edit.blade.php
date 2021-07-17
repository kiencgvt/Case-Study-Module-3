@extends('collaborators.layouts.master')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Chỉnh sửa món ăn</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('collab.update') }}" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Anh món ăn</label>
                        <input type="file" class="form-control" name="image"  value="{{asset('storage/'.$food->image)}}" required>

                    </div>
                    <div class="form-group">
                        <label>Tên món ăn</label>
                        <input type="text" class="form-control" name="name" value="{{$food->name}}" required >

                    </div>
                    <div class="form-group">
                        <label>Gía khuyến mãi</label>
                        <input type="text" class="form-control" name="promotion_price" value="{{$food->promotion_price}}" required >
                    </div>
                    <div class="form-group">
                        <label>Phí dịch vụ</label>
                        <input type="text" class="form-control" name="service_charge" value="{{$food->service_charge}}"  required>
                    </div>
                    <div class="form-group">
                        <label>Tên cửa hàng </label>
                        <select class="form-control" name="category_id" required >
                            @foreach($shops as $shop)
                                <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group">
                        <label>Thể loại</label>
                        <select class="form-control" name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày giao hàng đến</label>
                        <input type="text" class="form-control" name="require_date" value="{{$food->require_date}}" required >

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Thẻ</label>
                        <input type="text" class="form-control" name="tag" value="{{$food->tag}}" required >
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection



