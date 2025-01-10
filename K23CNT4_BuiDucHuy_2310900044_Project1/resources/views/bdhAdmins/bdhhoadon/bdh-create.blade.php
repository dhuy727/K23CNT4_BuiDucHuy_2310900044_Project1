@extends('_layout.admins._master')
@section('title','Tạo Hóa Đơn mới')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('bdhadmin.bdhhoadon.bdhCreateSubmit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm mới hóa đơn</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="bdhMaHoaDon" class="form-label">Mã hóa đơn</label>
                                <input type="text" class="form-control" id="bdhMaHoaDon" name="bdhMaHoaDon">
                            </div>
                            <div class="mb-3">
                                <label for="bdhMaKhachHang" class="form-label">Mã khách hàng</label>
                                <input type="text" class="form-control" id="bdhMaKhachHang" name="bdhMaKhachHang">
                            </div>
                            <div class="mb-3">
                                <label for="bdhNgayHoaDon" class="form-label">Ngày hóa đơn</label>
                                <input type="date" class="form-control" id="bdhNgayHoaDon" name="bdhNgayHoaDon">
                            </div>
                            <div class="mb-3">
                                <label for="bdhHoTenKhanhHang" class="form-label">Họ và tên khách</label>
                                <input type="text" class="form-control" id="bdhHoTenKhanhHang" name="bdhHoTenKhanhHang">
                            </div>
                            <div class="mb-3">
                                <label for="bdhTongGiaTri" class="form-label">Tổng giá trị</label>
                                <input type="number" class="form-control" id="bdhTongGiaTri" name="bdhTongGiaTri">
                            </div>
                            <div class="mb-3">
                                <label for="bdhTongGiaTri" class="form-label">Tổng giá trị</label>
                                <input type="number" class="form-control" id="bdhTongGiaTri" name="bdhTongGiaTri">
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="bdhTrangThai1" name="bdhTrangThai" value="1"/>
                                    <label for="tvcTrangThai1">Hiển thị</label>
                                        &nbsp;
                                    <input type="radio" id="bdhTrangThai0" name="bdhTrangThai" value="0"/>
                                    <label for="tvcTrangThai0">Khóa</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Thêm</button>
                            <a href="{{ route('bdhadmins.bdhhoadon') }}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection