@extends('layout')

@section('content')
    <section class="review">
        <div class="container">
            <h2>Обратная связь</h2>
            <form action="{{ route('reviews.store') }}" method="POST" class="form">
                @csrf

                <div class="form__block">
                    <label for="name" class="label">Имя</label>
                    <input type="text" name="name" class="input" required placeholder="Иван">
                </div>
                <div class="form__block">
                    <label for="email" class="label">Email</label>
                    <input type="email" name="email" class="input" required placeholder="ivan@gmail.com">
                </div>
                <div class="form__block">
                    <label for="theme" class="label">Тема</label>
                    <input type="text" name="theme" class="input" required placeholder="Качество продукта">
                </div>
                <div class="form__block">
                    <label for="message" class="label">Сообщение</label>
                    <textarea name="message" class="input" rows="5" required placeholder="Сообщение"></textarea>
                </div>
                <button type="submit" class="btn-main">Отправить</button>
            </form>
        </div>
    </section>
@endsection
