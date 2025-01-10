@extends('_layout.admins._master')
@section('title','Xem Thông Tin Loại Sản Phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header">
                            <h1>Chi Tiết Loại Sản Phẩm</h1>
                        </div>
                        <div class="card-body">

                            <p class="card-text">
                                <b>Mã Loại:</b>
                                {{$bdhloaisanpham->bdhMaLoai}}
                            </p>
                            <p class="card-text">
                                <b>Tên Loại:</b>
                                {{$bdhloaisanpham->bdhTenLoai}}
                            </p>
                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$bdhloaisanpham->bdhTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('bdhadmins.bdhloaisanpham')}}" class="btn btn-primary">Quay lại</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection