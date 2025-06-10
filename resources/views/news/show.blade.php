@extends('layout')

@section('content')
    <section class="news__single">
        <div class="container">
            <div class="news__single-block">
                <h1 class="news__single-title">{{ $news->title }}</h1>

                <div class="news__single-meta">
                    <span class="news__single-date">{{ $news->formatted_date }}</span>
                </div>

                <img src="{{ $news->photo_url }}" alt="{{ $news->title }}" class="news__single-image">

                <div class="news__single-content">

                    <div class="news__single-text">
                        {!! nl2br(e($news->description)) !!}
                    </div>

                    @if(!empty($news->links))
                        <div class="news__single-links">
                            <h3>Ссылки по теме:</h3>
                            <ul>
                                @foreach($news->links as $link)
                                    <li><a href="{{ $link['url'] }}" target="_blank">{{ $link['title'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
