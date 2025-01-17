@extends('_layout.frontend.user')

@section('title', 'Trang Chủ')

@section('content-body')
    <div class="container">
        <h1>Trang Chủ</h1>
    
        <p>Đây là giao diện người dùng, nơi bạn có thể xem thông tin và tương tác với các tính năng của website.</p>

        <div class="row">
            @foreach ($bdhsanphams as $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="{{ asset('storage/' . $sanPham->ndkHinhAnh) }}" class="card-img-top product-img" alt="{{ $sanPham->ndkTenSanPham }}"> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{$item->bdhTenSanPham}}</h5>
                            <p class="card-text"><strong>{{ number_format($item->bdhDonGia, 0, ',', '.') }} VND</strong></p>
                            <p class="card-text"><small class="text-muted">Số lượng còn lại: {{ $item->ndkSoLuong }}</small></p>
                            
                            {{-- <a href="{{ route('ndkuser.show', $sanPham->id) }}" class="btn btn-primary btn-sm">Xem Chi Tiết</a> --}}

                            {{-- <a href="{{route('')}} "   
                               class="btn btn-success btn-sm" 
                              >
                                <i class="fa fa-shopping-cart"></i> Mua
                            </a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- <div class="d-flex justify-content-center mt-3">
        {{ $item->links('pagination::bootstrap-5') }}
    </div> --}}
@endsection

<style>
    .product-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .card-body {
        text-align: center;
    }

    .btn-primary, .btn-success, .btn-warning {
        margin-top: 10px;
    }

    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    @media (max-width: 767px) {
        .product-img {
            height: 200px;
        }
    }

    .add-to-cart-btn {
        background-color: #ff9800;
        color: white;
    }

</style>