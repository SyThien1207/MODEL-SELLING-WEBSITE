@extends('layout.home')
@section('product')
<div class="products">
             <div class="product-grid">
        @foreach ($product_new as $product_item)
            <div class="col-md">
                <x-product-card :productitem="$product_item"/>
            </div>
        @endforeach
    </div>
               </div>

@endsection 
