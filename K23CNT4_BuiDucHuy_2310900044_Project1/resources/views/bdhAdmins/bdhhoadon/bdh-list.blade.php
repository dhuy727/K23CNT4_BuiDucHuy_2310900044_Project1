@extends('_layout.admins._master')
@section('title','Danh Sách Hóa Đơn')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Hóa Đơn</h1>
                <a href="/bdh-admins/bdh-hoa-don/bdh-create" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Hóa Đơn</th>
                        <th>Mã Khách hàng</th>
                        <th>Ngày Hóa Đơn</th>
                        <th>Họ Tên Khách Hàng</th>
                        <th>Tổng Giá Trị</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($bdhhoadons as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td>{{$stt }}</td>
                            <td>{{$item->bdhMaHoaDon }}</td>
                            <td>{{$item->bdhMaKhachHang }}</td>
                            <td>{{$item->bdhNgayHoaDon }}</td>
                            <td>{{$item->bdhHoTenKhachHang}}</td>
                            <td>{{number_format($item->bdhTongGiaTri, 0, ',', '.')}} VND</td>
                            <td>
                                @if($item->bdhTrangThai == 0)
                                    <span class="badge bg-primary">Chờ Sử Lý</span>
                                @elseif($item->bdhTrangThai == 1)
                                    <span class="badge bg-warning">Đang Sử Lý</span>
                                @else
                                    <span class="badge bg-success">Đã Hoàn Thành</span>
                                @endif
                            </td>
                            <td class="text-center">    
                                <div class="btn-group" role="group">
                                    <a href="/bdh-admins/bdh-hoa-don/bdh-detail/{{$item->id}}" class="btn btn-success btn-sm">Xem
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="/bdh-admins/bdh-hoa-don/bdh-edit/{{$item->id}}" class="btn btn-primary btn-sm">Sửa
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="/bdh-admins/bdh-hoa-don/bdh-delete/{{$item->id}}" class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Bạn muốn xóa Mã Khách Hàng này không? ID: {{ $item->id }}');">Xóa
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">
                                Chưa có thông tin Khách Hàng 
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection