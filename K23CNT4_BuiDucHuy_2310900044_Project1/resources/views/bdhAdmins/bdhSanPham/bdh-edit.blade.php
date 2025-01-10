@extends('_layout.admins._master')
@section('title','Sửa thông tin sản phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('bdhadmins.bdhsanpham.bdheditsubmit')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$bdhSanPham->id}}">
                    <div class="card">
                        <div class="card-header">
                            <h2>Sửa thông tin loại sản phẩm</h2>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="bdhMaSanPham" class="col-sm-2 col-form-label">Mã Sản Phẩm:</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control" id="bdhMaSanPham" name="bdhMaSanPham" value="{{$bdhSanPham->bdhMaSanPham}}"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhTenSanPham" class="col-sm-2 col-form-label">Tên Sản Phẩm:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="bdhTenSanPham" name="bdhTenSanPham" value="{{$bdhSanPham->bdhTenSanPham}}"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhHinhAnh" class="col-sm-2 col-form-label">Hình Ảnh:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="bdhHinhAnh" name="bdhHinhAnh" value="{{$bdhSanPham->bdhHinhAnh}}"/>
                                </div>
                            <div class="mb-3 row">
                                <label for="bdhSoLuong" class="col-sm-2 col-form-label">Số Lượng:</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="bdhSoLuong" name="bdhSoLuong" value="{{$bdhSanPham->bdhSoLuong}}"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhDonGia" class="col-sm-2 col-form-label">Đơn Giá:</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="bdhDonGia" name="bdhDonGia" value="{{$bdhSanPham->bdhDonGia}}"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                                <div class="col-sm-10">
                                    @if($bdhSanPham->bdhTrangThai === 1)
                                        <input type="radio" id="bdhTrangThai1" name="bdhTrangThai" value="1" checked/>
                                        <label for="tvcTrangThai1">Hiển thị</label>
                                            &nbsp;
                                        <input type="radio" id="bdhTrangThai0" name="bdhTrangThai" value="0"/>
                                        <label for="tvcTrangThai0">Khóa</label>
                                    @else
                                        <input type="radio" id="bdhTrangThai1" name="bdhTrangThai" value="1"/>
                                        <label for="tvcTrangThai1">Hiển thị</label>
                                            &nbsp;
                                        <input type="radio" id="bdhTrangThai0" name="bdhTrangThai" value="0" checked/>
                                        <label for="tvcTrangThai0">Khóa</label>
                                    @endif
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