@extends('layouts.default')

@section('content')
    <h1>{{ $product->name }}</h1>
    <img src="{{ asset('storage/' . $storage->image_path) }}" alt="{{ $product->name }}" style="max-width: 100%; height: auto;">
    <p>{{ $product->description }}</p>
    <!-- 他の詳細情報 -->
@endsection