@extends('admin-main.master')
@section('title')
    Thêm Phòng
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Thêm Phòng</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.room.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Tên Phòng *</label>
                                <input type="text" name="name" class="form-control" required>
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
                                <label for="service" class="form-label">Chọn Dịch Vụ *</label>
                                <select name="service_id" id="service" class="form-select">
                                    <option value="">Chọn dịch vụ</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->service_type }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="service_details" class="form-label">Chi Tiết Dịch Vụ</label>
                                <div id="service_details" class="p-2 border rounded">
                                    <!-- Thông tin dịch vụ sẽ hiển thị ở đây -->
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="price" class="form-label">Giá *</label>
                                <input type="text" name="price" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="image" class="form-label">Hình Ảnh *</label>
                                <input type="file" name="image" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="price" class="form-label">Địa chỉ *</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label for="user_id" class="form-label">Người cho thuê *</label>
                                <select name="user_id" class="form-select">
                                    <option value="">Chọn</option>
                                    @foreach ($landlords as $landlord)
                                        <option value="{{ $landlord->id }}">{{ $landlord->name }}</option>
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
    <script>
        $(document).ready(function() {
            $('#service').change(function() {
                var serviceId = $(this).val();
                if (serviceId) {
                    $.ajax({
                        url: `/admin/service/${serviceId}`,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            var detailsHtml = `
                                <p><strong>Loại dịch vụ:</strong> ${data.service_type}</p>
                                <p><strong>Giá điện:</strong> ${data.electric}</p>
                                <p><strong>Giá nước:</strong> ${data.water}</p>
                                <p><strong>Wifi:</strong> ${data.wifi}</p>
                                <p><strong>Giá vệ sinh:</strong> ${data.garbage}</p>
                                <p><strong>Dịch vụ khác:</strong> ${data.other}</p>
                            `;
                            $('#service_details').html(detailsHtml);
                        },
                        error: function() {
                            $('#service_details').html('<p class="text-danger">Không thể lấy thông tin dịch vụ.</p>');
                        }
                    });
                } else {
                    $('#service_details').html('');
                }
            });
        });
    </script>
@endsection
