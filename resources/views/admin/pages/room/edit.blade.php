@extends('admin.master')
@section('title')
    Sửa phòng
@endsection

@section('content')
    <form action="{{ route('room.update', $room->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Tên phòng</label>
            <input type="text" class="form-control" name="name" value="{{ $room->name }}" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Loại danh mục</label>
            <select name="category_id" class="form-select">
                <option value="">Chọn loại danh mục</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $room->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="service_id" class="form-label">Dịch vụ</label>
            <select class="form-select" name="service_id" id="service_id" required>
                <option value="">Chọn dịch vụ</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}" {{ $service->id == $room->service_id ? 'selected' : '' }}>
                        {{ $service->service_type }}
                    </option>
                @endforeach
            </select>
        </div>

        <div id="service_details" class="mt-3">
            @if ($room->service_id)
                <p><strong>Loại dịch vụ:</strong> {{ $room->service->service_type }}</p>
                <p><strong>Giá điện:</strong> {{ $room->service->electric }}</p>
                <p><strong>Giá nước:</strong> {{ $room->service->water }}</p>
                <p><strong>Wifi:</strong> {{ $room->service->wifi }}</p>
                <p><strong>Giá vệ sinh:</strong> {{ $room->service->garbage }}</p>
                <p><strong>Dịch vụ khác:</strong> {{ $room->service->other }}</p>
            @endif
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" name="image">
            <img src="{{ asset('storage/' . $room->image) }}" alt="Current Image" width="100" class="mt-2">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea class="form-control" name="description" required>{{ $room->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input type="number" class="form-control" name="price" value="{{ $room->price }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" name="address" value="{{ $room->address }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Trạng thái</label>
            <select name="status" class="form-select">
                <option value="1" {{ $room->status ? 'selected' : '' }}>Còn phòng</option>
                <option value="0" {{ !$room->status ? 'selected' : '' }}>hết phòng</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Hiển thị thông tin dịch vụ đã chọn khi tải trang
            const serviceId = "{{ $room->service_id }}";
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
                        $('#service_details').html(
                            '<p class="text-danger">Không thể lấy thông tin dịch vụ.</p>');
                    }
                });
            }

            // Cập nhật thông tin dịch vụ khi thay đổi
            $('#service_id').change(function() {
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
                            $('#service_details').html(
                                '<p class="text-danger">Không thể lấy thông tin dịch vụ.</p>'
                                );
                        }
                    });
                } else {
                    $('#service_details').html('');
                }
            });
        });
    </script>
@endsection
