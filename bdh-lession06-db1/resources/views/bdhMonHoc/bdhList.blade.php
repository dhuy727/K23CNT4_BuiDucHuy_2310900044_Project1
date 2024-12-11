<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDH - Danh sách môn học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách môn học</h1>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã môn học</th>
                        <th>Tên môn học</th>
                        <th>Số tiết</th>
                        <th class="text-center">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt=0;
                    @endphp
                    @foreach ($bdhMonHocs as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <th>{{$stt}}</th>
                        <td>{{$item->BDHMAMH}}</td>
                        <td>{{$item->BDHTENMH}}</td>
                        <td>{{$item->BDHSOTIET}}</td>
                        <td class="text-center">
                            <a href="/monhoc/detail/{{$item->BDHMAMH}}"
                                    class="btn btn-success">
                                    Chi tiết</a>
                            <a href="/monhoc/edit/{{$item->BDHTENMH}}"
                                    class="btn btn-primary">
                                    Sửa</a>
                            <a href="/monhoc/delete/{{$item->BDHMAMH}}"
                                    class="btn btn-danger"
                                    onclick="return confirm('Bạn muốn xóa không?');">
                                    Xóa </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5">
                            <h3>Tổng số môn học: {{$bdhMonHocs->count()}}</h3>
                        </th>
                    </tr>
                </tfoot>
            </table>
    </section>
</body>
</html>