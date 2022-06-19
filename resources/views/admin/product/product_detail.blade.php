@extends('layout.app')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-4">
                <div id="carouselExample" class="carousel carousel-dark slide pointer-event" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExample" data-bs-slide-to="0" class=""></li>
                        <li data-bs-target="#carouselExample" data-bs-slide-to="1" class="active" aria-current="true"></li>
                        <li data-bs-target="#carouselExample" data-bs-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block ms-auto me-auto w-50 h-100" src="{{asset('template/img/elements/21.png')}}" alt="First slide">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block ms-auto me-auto w-50 h-100" src="{{asset('template/img/elements/22.png')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block ms-auto me-auto w-50 h-100" src="{{asset('template/img/elements/23.png')}}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <h4 class="card-header">Chi tiết sản phẩm</h4>
                    <div class="container">
                        <div class="row">
                            <p>Tên sản phẩm: <strong>SeaFood</strong></p>
                        </div>
                        <div class="row">
                            <p>Giá bán: <strong>19,000,000 VNĐ</strong></p>
                        </div>
                        <div class="row">
                            <p>Giá sale: <strong>19,000,000 VNĐ</strong></p>
                        </div>
                        <div class="row">
                            <p>Danh mục: <strong>Mobile</strong></p>
                        </div>
                        <div class="row">
                            <p>Mô tả: <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos eveniet
                                    expedita explicabo mollitia nemo numquam, obcaecati vel veniam voluptatibus. Amet cumque,
                                    ducimus earum expedita nemo pariatur porro provident sunt!</strong></p>
                        </div>
                        <div class="row">
                            <p>Trạng thái: <strong class="text-success">Đang bán</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
