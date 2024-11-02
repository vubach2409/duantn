@extends('admin.master')
@section('title')
    Thêm bài viết
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Thêm Phòng</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <label for="title" class="form-label">Tiêu đề *</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="category" class="form-label">Danh Mục *</label>
                                <select name="category_id" class="form-select">
                                    <option value="">Chọn danh mục</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="room" class="form-label">Phòng *</label>
                                <select name="room_id" class="form-select">
                                    <option value="">Chọn Phòng</option>
                                    @foreach ($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="description" class="form-label">Mô tả *</label>
                                <textarea name="description" class="form-control" rows="4" required></textarea>
                            </div>

                            <div class="col-sm-12 col-md-12 mb-2 text-end">
                                <button type="submit" class="btn btn-success ">Thêm mới</button>
                                <button type="reset" class="btn btn-warning">Nhập lại</button>
                                <button type="reset" class="btn btn-info" onclick="window.history.back()">Quay lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
@endsection
