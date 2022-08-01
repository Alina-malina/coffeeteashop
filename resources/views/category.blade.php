@extends('layouts.app')

@section('title', 'Категория товара ')

@section('content')

@if($category->code == 'coffee')
    
<!-- Coffees -->
    <div class="container pt-160 pb-51" id="coffee">
        <h2 class="fw-700 fs-36 fstl-normal lh-44 upcase black align-center">Кофе</h2>
    <p>Всего товаров: {{$category->products->count()}}</p>
    </div>

    <div class="row justify-content-lg-between">
   @foreach($category->products as $product)
        @include('layouts.cart', compact('product'))
    @endforeach
    </div>
    
    <!-- Tea  -->
@elseif($category->code == 'tea')
    <div class="container pt-160 pb-51" id="tea">
        <h2 class="fw-700 fs-36 fstl-normal lh-44 upcase black align-center">Чай</h2>
    </div>
    
    <div class="row justify-content-lg-between">
     @foreach($category->products as $product)
        @include('layouts.cart', compact('product'))
    @endforeach
    </div>
    
@endif
    
@endsection