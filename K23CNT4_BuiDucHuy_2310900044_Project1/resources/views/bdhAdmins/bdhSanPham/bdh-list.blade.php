@extends('_layout.admins._master')
@section('title','Danh sách sản phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <div class="d-flex w-100 justify-content-between">
                    <h1>DANH SÁCH SẢN PHẨM</h1>
                    <a href="{{route('bdhadmins.bdhsanpham.bdhcreate')}}" class="btn btn-success">Thêm mới</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Mã loại</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bdhSanPham as $item)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$item->bdhMaSanPham}}</td>
                            <td>{{$item->bdhTenSanPham}}</td>
                            <td>{{$item->bdhHinhAnh}}</td>
                            <td>{{$item->bdhSoLuong}}</td>
                            <td>{{$item->bdhDonGia}}</td>
                            <td>{{$item->bdhMaLoai}}</td>
                            <td>{{$item->bdhTrangThai}}</td>
                            <td>
                                <a href="/bdh-admins/bdh-san-pham/bdh-detail/{{$item->id}}">View</a>
                                <a href="/bdh-admins/bdh-san-pham/bdh-edit/{{$item->id}}">Edit</a>   
                                <a href="/bdh-admins/bdh-san-pham/bdh-delete/{{$item->id}}" 
                                onclick="return confirm('Bạn có chắc chắn xóa không')">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="9">Chưa có thông tin sản phẩm</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection