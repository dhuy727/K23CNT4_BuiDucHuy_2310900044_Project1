@extends('_layout.admins._master')
@section('title','Danh sách loại sản phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách loại sản phẩm</h1>
                <a href="{{route('bdhadmins.bdhLoaiSanPham.bdhcreate')}}" class="btn"></a>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bdhLoaiSanPham as $item)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$item->bdhMaLoai}}</td>
                        <td>{{$item->bdhTenLoai}}</td>
                        <td>{{$item->bdhTrangThai}}</td>
                        <td>
                            view / edit / delete
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="5">Chưa có thông tin sản phẩm</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection