@extends('admin.master')
@section('title')
    Danh sách bài viết
@endsection

@section('content')
    <div class="table-responsive table-card">

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const alert = document.getElementById('success-alert');
                if (alert) {
                    setTimeout(function() {
                        alert.style.display = 'none';
                    }, 3000); // 3 giây
                }
            });
        </script>


        <div class="col-xl-12 col-sm-12 col-md-12 mb-2">
            @if (session('success'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="col-xl-12 col-sm-12 col-md-12 mb-2 text-end">
            <a href="{{ route('article.create') }}" class="btn btn-info">Thêm mới +</a>
        </div>

        <table class="table table-nowrap table-striped-columns mb-0">
            <thead class="table-light">
                <tr>
                    <th>Tiêu đề</th>
                    <th>Phòng</th>
                    <th>Danh mục</th>
                    <th>Mô tả</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->room->name ?? 'Không phòng' }}</td>
                        <td>{{ $article->category->name ?? 'Không danh mục' }}</td>
                        <td>{{ $article->description }}</td>
                        <td class="d-flex gap-3">
                            <a class="btn btn-warning" href="{{ route('article.edit', $article->id) }}">Sửa</a>
                            <form action="{{ route('article.destroy', $article->id) }}" method="POST"
                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa phòng này không?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
