@extends('_layout.admins._master')
@section('title','Sửa thông tin loại sản phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('bdhadmins.bdhloaisanpham.bdheditsubmit')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$bdhLoaiSanPham->id}}">
                    <div class="card">
                        <div class="card-header">
                            <h2>Sửa thông tin loại sản phẩm</h2>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="bdhMaLoai" class="col-sm-2 col-form-label">Mã loại:</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control" id="bdhMaLoai" name="bdhMaLoai" value="{{$bdhLoaiSanPham->bdhMaLoai}}"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhTenLoai" class="col-sm-2 col-form-label">Tên loại:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="bdhTenLoai" name="bdhTenLoai" value="{{$bdhLoaiSanPham->bdhTenLoai}}"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bdhTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                                <div class="col-sm-10">
                                    @if($bdhLoaiSanPham->bdhTrangThai === 1)
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
                            <a href="{{route('bdhadmins.bdhloaisanpham')}}" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection