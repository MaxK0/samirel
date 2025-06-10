@extends('layout')

@section('content')
    <section class="products__section">
        <div class="container">
            <div class="products__categories desktop-categories">
                <a href="{{ route('products') }}" class="btn-main-small">Все</a>
                @foreach($categories as $category)
                    <a href="{{ route('products', ['category_id' => $category->id]) }}" class="btn-main-small">{{ $category->title }}</a>
                @endforeach
            </div>
            <!-- Мобильная версия (видна на <768px) -->
            <div class="mobile-categories">
                <select class="select" onchange="window.location.href=this.value">
                    <option value="{{ route('products') }}">Все категории</option>
                    @foreach($categories as $category)
                        <option value="{{ route('products', ['category_id' => $category->id]) }}"
                            {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="products">
                @foreach($products as $product)
                    <div class="products__block">
                        <img src="{{ $product->photo_url }}" alt="{{ $product->title }}">
                        <div class="products__info">
                            <a href="{{ route('products.show', $product) }}" class="link-content">
                                <h5>{{ $product->title }}</h5>
                            </a>
                            <div class="products__tags">
                                @foreach($product->tags as $tag)
                                    <p>{{ $tag->title }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
