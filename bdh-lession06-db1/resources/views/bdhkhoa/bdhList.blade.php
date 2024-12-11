<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDH - danh sách khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container border my-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã khoa</th>
                    <th>Tên khoa</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @foreach ($bdhKhoas as $item)
                        @php
                            $stt++;
                        @endphp
                    <tr>
                        <th>{{$stt}}</th>
                        <td>{{$item->BDHMAKH}}</td>
                        <td>{{$item->BDHTENKH}}</td>
                        <td>
                            <a href="/khoas/detail/{{$item->BDHMAKH}}" class="btn btn-success">
                                Chi tiết
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="/khoas/edit/{{$item->BDHMAKH}}" class="btn btn-primary">
                                Sửa
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a href="/khoa/delete/{{$item->BDHMAKH}}" class="btn btn-danger"
                                onclick="return confirm('Bạn muốn xóa không?');">
                                Xóa </a>
                                <a href="/khoa/delete/{{$item->BDHMAKH}}" class="btn btn-danger"
                                    onclick="return confirm('Bạn muốn xóa không?');">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/khoas/insert" class="btn btn-primary">Thêm mới</a>
    </section>
</body>
</html>
