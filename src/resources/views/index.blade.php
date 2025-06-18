@extends('layouts.default')

@section('content')
<h3>商品一覧</h3>
<a href="{{ route('register') }}" class="register-btn" style="
    display: inline-block;
    padding: 10px 20px;
    background-color:rgb(239, 184, 4);
    color: white;
    border-radius: 4px;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
">
    +商品を追加
</a>
<div class="product-list">
    @foreach($products as $product)
        <div class="product-item" style="margin-bottom: 20px;">
            <a href="{{ route('products.show', $product->id) }}">
                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" style="width:200px; height:auto;">
            </a>
            <h4>{{ $product->name }}</h4>
            <h4>{{ $product->price}}</h4>
        </div>
    @endforeach
</div>
@endsection