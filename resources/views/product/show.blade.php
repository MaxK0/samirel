@extends('layout')

@section('content')
    <section class="product__single">
        <div class="container">
            <div class="product__single-block">
                <h1 class="product__single-title">{{ $product->title }}</h1>

                <div class="product__single-image-wrapper">
                    <img src="{{ $product->photo_url }}" alt="{{ $product->title }}" class="product__single-image">
                </div>

                <div class="product__single-content">
                    <div class="product__specs">
                        <div class="spec__item">
                            <span class="spec__label">Вес:</span>
                            <span class="spec__value">{{ $product->weight }} кг</span>
                        </div>

                        <div class="spec__item">
                            <span class="spec__label">Температурный режим:</span>
                            <span class="spec__value">{{ $product->temp_min }}°C - {{ $product->temp_max }}°C</span>
                        </div>

                        <div class="spec__item">
                            <span class="spec__label">Срок годности:</span>
                            <span class="spec__value">{{ $product->shelf_life }} дней</span>
                        </div>

                        @if($product->quantity_big)
                            <div class="spec__item">
                                <span class="spec__label">Большие упаковки:</span>
                                <span class="spec__value">{{ $product->quantity_big }} шт</span>
                            </div>
                        @endif

                        @if($product->quantity_medium)
                            <div class="spec__item">
                                <span class="spec__label">Средние упаковки:</span>
                                <span class="spec__value">{{ $product->quantity_medium }} шт</span>
                            </div>
                        @endif

                        @if($product->quantity_small)
                            <div class="spec__item">
                                <span class="spec__label">Маленькие упаковки:</span>
                                <span class="spec__value">{{ $product->quantity_small }} шт</span>
                            </div>
                        @endif
                    </div>

                    @if($product->categories->count() > 0)
                        <div class="product__categories">
                            <h3 class="categories__title">Категории:</h3>
                            <div class="categories__list">
                                @foreach($product->categories as $category)
                                    <span class="category__badge">{{ $category->title }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($product->tags->count() > 0)
                        <div class="product__tags">
                            <h3 class="tags__title">Теги:</h3>
                            <div class="tags__list">
                                @foreach($product->tags as $tag)
                                    <span class="tag__badge">{{ $tag->title }}</span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    @if($product->text)
                        <div class="product__description">
                            <h3 class="description__title">Описание:</h3>
                            <div class="description__text">
                                {!! nl2br(e($product->text)) !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
