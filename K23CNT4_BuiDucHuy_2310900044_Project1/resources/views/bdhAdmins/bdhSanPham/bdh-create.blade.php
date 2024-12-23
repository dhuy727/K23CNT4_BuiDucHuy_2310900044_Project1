@extends('_layout.admins._master')
@section('title','Danh sách sản phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('bdhadmins.bdhsanpham.bdhcreatesubmit')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h2>Thêm mới sản phẩm</h2>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="bdhMaSanPham" class="col-sm-2 col-form-label">Mã sản phẩm:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="bdhMaSanPham" name="bdhMaSanPham"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhTenSanPham" class="col-sm-2 col-form-label">Tên sản phẩm:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="bdhTenSanPham" name="bdhTenSanPham"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhHinhAnh" class="col-sm-2 col-form-label">Hình ảnh:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="bdhHinhAnh" name="bdhHinhAnh"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhSoLuong" class="col-sm-2 col-form-label">Số lượng:</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="bdhSoLuong" name="bdhSoLuong"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhDonGia" class="col-sm-2 col-form-label">Đơn giá:</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="bdhDonGia" name="bdhDonGia"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhMaLoai" class="col-sm-2 col-form-label">Mã loại</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="bdhMaLoai" name="bdhMaLoai"/>
                                </div>
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
                            <button class="btn btn-success">Ghi lại</button>
                            <a href="{{route('bdhadmins.bdhsanpham')}}" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection