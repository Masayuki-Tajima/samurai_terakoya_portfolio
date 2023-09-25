@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <a href="{{ route('conditions.create') }}">体調登録</a>
        </div>
    </div>
</div>
@endsection
