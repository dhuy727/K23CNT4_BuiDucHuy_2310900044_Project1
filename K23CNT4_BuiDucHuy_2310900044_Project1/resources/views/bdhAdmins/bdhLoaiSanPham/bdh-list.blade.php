@extends('_layout.admins._master')
@section('title','Danh sách loại sản phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <div class="d-flex w-100 justify-content-between">
                    <h1>Danh sách loại sản phẩm</h1>
                    <a href="{{route('bdhadmins.bdhLoaiSanPham.bdhcreate')}}" class="btn btn-success">Thêm mới</a>
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
                                <a href="/bdh-admins/bdh-loai-san-pham/bdh-detail/{{$item->id}}">Xem</a>
                                <a href="/bdh-admins/bdh-loai-san-pham/bdh-edit/{{$item->id}}">Sửa</a>   
                                
                                <a href="/bdh-admins/bdh-loai-san-pham/bdh-delete/{{$item->id}}"
                                    onclick="return confirm('Bạn có chắc chắn xóa không')"
                                    >
                                    Xóa</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th colspan="5">Chưa có thông tin loại sản phẩm</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection