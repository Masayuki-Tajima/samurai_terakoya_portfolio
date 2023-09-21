@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>体調登録</h1>

            <form action="" method="post">
                <label>登録したい日付</label>
                <input type="date" id="date">
            </form>
        </div>
    </div>
</div>
@endsection
