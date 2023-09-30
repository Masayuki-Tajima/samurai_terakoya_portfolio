@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

@if(session('flash_message'))
    <p>{{ session('flash_message') }}</p>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table border="1">
                <tr>
                    <th>日付</th>
                    <th>天気</th>
                    <th>気圧</th>
                    <th>体調スコア</th>
                    <th>コメント</th>
                </tr>
                @foreach($conditions as $condition)
                <tr>
                    <td>{{ $condition['filled_date'] }}</td>
                    <td></td>
                    <td></td>
                    <td>{{ $condition['score'] }}</td>
                    <td>{{ $condition['comment'] }}</td>
                </tr>
                @endforeach
            </table>

            <a href="{{ route('conditions.create') }}">体調登録</a>
        </div>
    </div>
</div>
@endsection
