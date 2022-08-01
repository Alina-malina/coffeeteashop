<div class="col m-20 d d-flex flex-column unsafe-center border border-2 border-radius-10">
                <img src="{{ url('img_app/product/origin/' . $product->image) }}" title="Товар 1" class="w-340 h-314" />
                <h4 class="mb-0 lh-22 pl-14 pt-50 fs-20 fw-700 black">
                    <p class="brown text-decoration-none">
                    {{$product->name}} 
        </p>

                </h4>
                <h3 class="pt-5px mb-0 lh-22 pl-14 fs-17 fw-300 lightgray fst-italic">           
                {{$product->sub_name}} 
            </h3>
                <p class="pt-15 mb-0 lh-22 pl-14  fs-15 fw-300 darkblack fst-normal align-center">
                    {{$product->description}}
                </p>
                <p class="mb-0 lh-22 pl-14 pt-50 fs-20 fw-700 black">
                {{$product->weight}} грамм
            </p>
                <h3 class="pt-50 mb-0 lh-22 pl-14  fs-15 fw-700 lightbrown fst-normal">{{$product->price}} ₽</h3>

                <p class="pt-20 pb-2">
                    <form action="{{ route('basket-add', $product) }}"  method="POST">
                    @method('POST')
                    <button type="submit" title="Корзина"
                        class="btn-basket"><i class="bi bi-cart3 w-20 h-20"></i>
                    </button> 
                    @csrf 
                    </form>                
                </p>
            </div>