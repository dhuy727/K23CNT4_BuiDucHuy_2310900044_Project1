<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDH - danh sách khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <table>
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
                                Chi tiết</a>
                            <a href="/khoas/edit/{{$item->BDHMAKH}}" class="btn btn-primary">
                                Sửa</a>
                            <a href="/khoa/delete/{{$item->BDHMAKH}}" class="btn btn-danger"
                                onclick="return confirm('Bạn muốn xóa không?');">
                                 Xóa </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>
