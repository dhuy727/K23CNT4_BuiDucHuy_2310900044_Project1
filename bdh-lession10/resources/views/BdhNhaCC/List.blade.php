<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhà cung cấp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sách nhà cung cấp</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã nhà cung cấp</th>
                    <th>Tên nhà cung cấp</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @forelse ($bdhNhaCCs as $item)
                @php
                    $stt++;
                @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->$bdhMaNCC}}</td>
                        <td>{{$item->$bdhTenNCC}}</td>
                        <td>{{$item->$bdhDiaChi}}</td>
                        <td>{{$item->$bdhDienThoai}}</td>
                        <td>{{$item->$bdhemail}}</td>
                        <td>{{$item->$bdhstatus}}</td>
                        <td>
                            View / edit / delete
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">Chưa có dữ liệu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <button class="btn btn-primary">Thêm mới</button>
    </section>
</body>
</html>