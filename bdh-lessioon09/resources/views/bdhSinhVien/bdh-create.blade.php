<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới học sinh</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        input{
            border-radius: 0 !important;
        }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{route('bdhSinhSien.bdhCreateSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="bdhMaSV" class="col-sm-2 col-form-label">Mã sinh viên</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="bdhMaSV" value="" name="bdhMaSV">
                        </div>
                    <div class="mb-3 row">
                        <label for="bdhHoSV" class="col-sm-2 col-form-label">Họ sinh viên</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="bdhHoSV" value="" name="bdhHoSV">
                        </div>
                    <div class="mb-3 row">
                        <label for="bdhTenSV" class="col-sm-2 col-form-label">Tên sinh viên</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="bdhTenSV" value="" name="bdhTenSV">
                        </div>
                    <div class="mb-3 row">
                        <label for="bdhPhai" class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="bdhPhai" value="" name="bdhPhai">
                        </div>
                    <div class="mb-3 row">
                        <label for="bdhNgaySinh" class="col-sm-2 col-form-label">Ngày sinh</label>
                        <div class="col-sm-10">
                          <input type="date"  class="form-control" id="bdhNgaySinh" value="" name="bdhNgaySinh">
                        </div>
                    <div class="mb-3 row">
                        <label for="bdhNoiSinh" class="col-sm-2 col-form-label">Nơi sinh</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="bdhNoiSinh" value="" name="bdhNoiSinh">
                        </div>
                    <div class="mb-3 row">
                        <label for="bdhMaKH" class="col-sm-2 col-form-label">Mã khoa</label>
                        <div class="col-sm-10">
                            <select name="bdhMaKH" id="bdhMaKH">
                                <option value="">--Chọn khoa--</option>
                                <option value="AV">Anh Văn</option>
                                <option value="TH">Tin học</option>
                                <option value="TR">Triết học</option>
                            </select>
                        </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Thêm mới</button>
                    <a href="/bdh-sinhviens" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
