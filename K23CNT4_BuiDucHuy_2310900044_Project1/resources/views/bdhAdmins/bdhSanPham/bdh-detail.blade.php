@extends('_layout.admins._master')

@section('title', 'Chi Tiết Sản Phẩm')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chi Tiết Sản Phẩm</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <b>Mã sản phẩm:</b> {{ $bdhsanpham->bdhMaSanPham }}
                    </p>
                    <p class="card-text">
                        <b>Tên sản phẩm:</b> {{ $bdhsanpham->bdhTenSanPham }}
                    </p>
                    <p class="card-text">
                        <b>Hình Ảnh:</b><br>
                        <img src="{{ asset('storage/' . $bdhsanpham->bdhHinhAnh) }}" alt="Sản phẩm {{ $bdhsanpham->bdhMaSanPham }}" width="200" class="img-fluid">
                    </p>
                    <p class="card-text">
                        <b>Số Lượng:</b> {{ $bdhsanpham->bdhSoLuong }}
                    </p>
                    <p class="card-text">
                        <b>Đơn Giá:</b> {{ number_format($bdhsanpham->bdhDonGia, 0, ',', '.') }} VND
                    </p>
                    <p class="card-text">
                        <b>Mã Loại:</b> {{ $bdhsanpham->bdhMaLoai }}
                    </p>
                    <p class="card-text">
                        <b>Trạng Thái:</b>
                        @if($bdhsanpham->bdhTrangThai == 0)
                            <span class="badge bg-danger">Khóa</span>
                        @else
                            <span class="badge bg-success">Hiển Thị</span>
                        @endif
                    </p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('bdhadmins.bdhsanpham') }}" class="btn btn-primary">Quay lại danh sách</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection