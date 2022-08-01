@extends('layouts.app')

@section('title', 'Товар')

@section('content')

    <div class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="masthead-device-mockup w-550 h-500">
                        <img src="/img_app/product/4.png" alt="Остров
                            Дракона">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3 fw-700 fs-36 fstl-normal lh-67 pb-30 text-center black">
                           123</h1>
                        <p class="lead pt-30 fw-300 fs-24 fstl-normal lh-37 pb-51 darkblack text-left">Листья собираются
                            ранней весной. Чай получается нежным, хорошо дополняется молочными нотками.</p>

                        <p class="fw-300 fs-24 fstl-normal lh-37 midgray">Страна</p>
                        <p class="pb-18 fw-300 fs-24 fstl-normal lh-10 black">Китай</p>

                        <p class="fw-300 fs-24 fstl-normal lh-37 midgray">Вид</p>
                        <p class="pb-18 fw-300 fs-24 fstl-normal lh-10 black">Зеленый чай</p>

                        <p class="fw-300 fs-24 fstl-normal lh-37 midgray">Основные ноты</p>
                        <p class="pb-18 fw-300 fs-24 fstl-normal lh-10 black">Сливочный крем, Свежее сено</p>

                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                            <div class="text-center text-lg-start">
                                <p class="fw-300 fs-24 fstl-normal lh-37 midgray">Вес</p>
                                <p class="pb-18 fw-300 fs-24 fstl-normal lh-10 black">30 г</p>
                            </div>
                            <p class="pl-250 fw-700 fs-30 fstl-normal lh-10 brown">455 ₽</p>
                        </div>
                        <p class="pt-50"><a href="{{ url('/basket') }}" alt="В корзину" class="btn-link prl-35 pbt-20 upcase fw-500 white fs-24 text-decoration-none border-radius-5 morelightgra bg-brown">В корзину</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfixfull">&nbsp;</div>
    
@endsection