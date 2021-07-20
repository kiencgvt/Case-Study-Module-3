@extends('collaborators.layouts.master')

@section('content')
            <div class="col-md-8 mb-3">
                <div class="rounded shadow-sm p-4 bg-white">
                    <h5 class="mb-4">Chỉnh sửa món ăn</h5>
                    <div id="edit_profile">
                        <div>
                            <form method="post" action="{{ route('collab.update',$food->id) }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Anh</label>
                                    <input type="file" class="form-control" name="image" placeholder="Enter image" value="{{asset('storage/'.$food->image)}}">
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Tên món ăn</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$food->name}}">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputNumber1">Gía món ăn</label>
                                    <input type="text" class="form-control" name="price" placeholder="Enter price" value="{{$food->price}}">
                                    @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gía khuyến mãi</label>
                                    <input type="text" class="form-control" name="promotion_price" placeholder="Enter promotion_price" value="{{$food->promotion_price}}">
                                    @error('promotion_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phí dịch vụ</label>
                                    <input type="text" class="form-control" name="service_charge" placeholder="Enter service_charge" value="{{$food->service_charge}}">
                                    @error('service_charge')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên cửa hàng</label>
                                    <select class="form-control" name="shop_id" >
                                        @foreach($shops as $shop)
                                            <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('shop_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Thể loại</label>
                                    <select class="form-control" name="category_id" >
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thời gian chuẩn bị</label>
                                    <input type="text" class="form-control" name="preparation_time" placeholder="Enter preparation_time" value="{{$food->preparation_time}}">
                                    @error('preparation_time')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Thẻ</label>
                                    <input type="text" class="form-control" name="tag" placeholder="Enter tag" value="{{$food->tag}}">
                                    @error('tag')
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



