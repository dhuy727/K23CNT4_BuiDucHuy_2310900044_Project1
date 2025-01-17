<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        body {
            background: #f7f7f7; 
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .wrapper {
            width: 100%;
            background: #fff;
            min-height: 100vh;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .content-body {
            padding: 20px;
        }

        header {
            background: #007bff;
            color: white;
            padding: 15px 20px;
            font-size: 1.8em;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        footer {
            background: #007bff;
            color: white;
            padding: 15px 20px;
            text-align: center;
            margin-top: 40px;
        }

        .navbar-custom {
            background-color: #343a40;
        }

        .navbar-custom .nav-link {
            color: white;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .container-fluid {
            padding: 0;
        }

        .container-fluid .content-wrapper {
            padding: 20px;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

    </style>
</head>

<body>

    <header>
        @include('_layout.frontend._headerTitle') 
    </header>

    @include('_layout.frontend._menu') 

    <div class="container-fluid">
        <div class="wrapper">
            <section class="content-body">
                @yield('content-body')
            </section>
        </div>
    </div>

    <footer>
        <p>&copy; Đại học Nguyễn Trãi</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>