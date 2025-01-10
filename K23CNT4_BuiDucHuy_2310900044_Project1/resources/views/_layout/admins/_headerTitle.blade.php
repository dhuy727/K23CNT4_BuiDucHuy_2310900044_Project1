<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        header {
            background-color: gray;
            color: white;
            padding: 10px 0;
        }
        .logo img {
            max-height: 50px;
            border-radius: 5px;
        }
        .nav-link {
            color: white;
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: red;
        }

        .search-form .form-control {
            border-radius: 20px 0 0 20px;
        }
        .search-form .btn {
            border-radius: 0 20px 20px 0;
            background-color: #ffcd39;
            color: #343a40;
            border: none;
        }
        .account-info {
            font-size: 14px;
        }

        .account-info a {
            color: white;
            text-decoration: none;
            margin-left: 10px;
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }

        .account-info a:hover {
            color: brown;
        }
    </style>
</head>
<body>
<header>
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="/bdh-admins">
                <img src="{{ asset('storage/img/san_pham/Logo.png') }}" alt="Logo">
            </a>
        </div>

        <nav class="d-flex align-items-center">
            <a href="/bdh-admins" class="nav-link">Trang chủ</a>
            <a href="/bdh-admins/bdhdanhsachquantri/bdhsanpham" class="nav-link">Sản phẩm</a>
            <a href="/bdh-admins/bdh-khach-hang" class="nav-link">Liên hệ</a>
        </nav>

        {{-- <form action="{{ route('bdhuser.searchAdmins') }}" method="GET" class="search-form d-flex">
            <input type="text" class="form-control" placeholder="Tìm kiếm" name="search">
            <button type="submit" class="btn">
                <i class="fas fa-search"></i>
            </button>
        </form> --}}

        <div class="account-info d-flex align-items-center">
            <span>Xin chào</span>
            <a href="{{ route('admins.bdhLogin') }}">Đăng xuất</a>
        </div>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>