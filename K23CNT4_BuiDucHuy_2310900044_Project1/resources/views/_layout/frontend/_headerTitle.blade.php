<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Bán Sản Phẩm Điện Tử</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    .header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10; 
    }
    .header + .container {
      margin-top: 140px; 
    }
  </style>
</head>
<body class="bg-gradient-to-r from-gray-700 to-indigo-900 text-white">

  <div class="header bg-gradient-to-r from-gold-500 to-purple-600">
    <div class="container mx-auto">
      <div class="flex justify-between items-center py-2 text-sm">
        <div>
          <a class="mr-4 hover:underline text-gold-300" href="{{route('bdhuser.trangchu')}}">Trang Chủ</a>
          <a class="mr-4 hover:underline text-gold-300" href="#">Tải ứng dụng</a>
          <a class="mr-4 hover:underline text-gold-300" href="#">Kết nối</a>
          <a class="mr-2" href="https://www.facebook.com/runokaa" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-facebook"></i>
            </a>
        </div>
        <div>
          <a class="mr-4 hover:underline text-gold-300" href="#"><i class="fas fa-bell"></i> Thông Báo</a>
          <a class="mr-4 hover:underline text-gold-300" href="#">
              <i class="fas fa-question-circle"></i> Hỗ Trợ
            </a>
          <a class="mr-4 hover:underline text-gold-300" href="#"><i class="fas fa-globe"></i> Tiếng Việt</a>
          <a class="mr-4 hover:underline text-gold-300" href="#">Đăng Ký</a>
          <a class="hover:underline text-gold-300" href="#">Đăng Nhập</a>
        </div>
      </div>
      <div class="flex items-center py-4">
        <div class="flex items-center">
          <a href="#">
            <img alt="logo" class="mr-2 rounded-full" height="120" src="/storage/img/san_pham/Logo.png" width="120"/>
          </a>
          <span class="text-3xl font-bold text-gold-500 animate-pulse">BDH</span>
        </div>
        <div class="flex-grow mx-4">
          <form action="#" method="GET" class="flex">
            <input class="w-full py-2 px-4 rounded-l-md text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Tìm Kiếm" type="text" name="search"/>
            <button type="submit" class="bg-gold-500 text-white py-2 px-4 rounded-r-md hover:bg-gold-600 transition duration-200">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
        <div>
          <i class="fas fa-shopping-cart text-2xl"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="container mx-auto">
  </div>
</body>
</html>