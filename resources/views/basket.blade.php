@extends('layouts.app')

@section('title', 'Корзина' )

@section('content')

    <div class="container py-1 pb-120">
        <div class="container px-5">
@foreach ($order->products as $product)
            <div class="border-bottom border-top">
                <div class="card-body p-4">

                    <div class="row d-flex justify-content-between align-items-center ">                        
                        <div class="col-md-2 col-lg-2 col-xl-2">
                            <a href="{{route('product', ['categories', $product->category->code,$product->code])}}" alt="">
                            <img src="img_app/product/origin/{{ $product->image }}" class="img-fluid " alt="Товар {{ $product->name }}"></a>
                        </div>

                        <div class="col-md-10 col-lg-10 col-xl-10">
                            <div class="text-end">
                                                                    
                    <form action="{{ route('basket-remove', $product) }}"  method="POST">  
                        @csrf
                        @method('POST')
                                <button type="submit" class="btn-close">
                                    <span>&#10005;</span>
                                </button>
                    </form> 
                            </div>

                            <div class="text-start">
                                <p class="lead mb-2 lightgray fst-italic fw-300 fs-20">{{ $product->sub_name }}</p>
                            </div>

                            <div class="d-flex justify-content-between">

                                <div><span class="black fst-normal fw-700 fs-25">{{ $product->name }}</span></div>

                                <div class="d-flex">
                                    
                    <form action="{{ route('basket-add', $product) }}"  method="POST">  
                        @csrf
                        @method('POST')
                                    <button class="btn btn-counter w-35 h-35"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="bi bi-dash"></i>
                                    </button>
                    </form> 

                                    <input id="form1" min="0" name="quantity" value="{{$product->pivot->quantity}}" type="number"
                                        class="form-control form-control-sm fs-17 black fw-400 w-60 border-0 text-center" />
                                        

                    <form action="{{ route('basket-add', $product) }}"  method="POST">  
                        @csrf
                        @method('POST')
                                    <button class="btn btn-counter w-35 h-35"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="bi bi-plus"></i>
                                    </button>
                    </form> 
                                </div>

                                <div class="offset-lg-1">
                                   <!-- <h5 class="mb-0 lightbrown fw-600 fs-24 fst-normal">{{ $product->price }} ₽ (за шт.) </h5> -->
                                    <h5 class="mb-0 lightbrown fw-600 fs-24 fst-normal">{{ $product->getPriceForCount() }} ₽ </h5>
                                </div>
                                <div>&nbsp;</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    
@endforeach

            <div class="pb-120">&nbsp;</div>

            <div class="d-flex justify-content-around align-self-center">
                <div class="fw-400 fs-24 fstl-normal black">Итог</div>
                <div>
                    <h5 class="mb-0 lightbrown fw-600 fs-24 fst-normal">{{ $order->getFullPrice() }} ₽</h5>
                </div>
                <div><a href="{{ route('basket-place') }}" alt="В корзину"
                        class="btn-link prl-35 pbt-20 upcase fw-500 white fs-18 text-decoration-none border-radius-5 morelightgra bg-brown">
                        Оформить заказ</a></div>
            </div>
        </div>
    </div>

    <div class="clearfixfull">&nbsp;</div>

    
@endsection