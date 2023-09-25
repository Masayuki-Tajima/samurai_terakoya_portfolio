@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>体調登録</h1>

            <form action="{{ route('conditions.store') }}" method="post">
                @csrf

                <div>
                    <label for="date">登録したい日付</label>
                    <input type="date" id="date" name="date">
                </div>
                
                <div>
                    <label for="score">体調スコア</label>
                    <select id="score" name="score">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                
                <div>
                    <label for="comment">コメント</label>
                    <textarea name="comment" id="comment"></textarea>
                </div>
                
                <input type="submit" value="登録">
                <a href="{{ route('conditions.index') }}">キャンセル</a>
            </form>
        </div>
    </div>
</div>
@endsection
