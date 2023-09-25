@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>TOP</h1>

            <div id="cards">
                <div class="card">
                    <h2>体調管理</h2>
                    <p>日々の体調の管理ができます。</p>
                    <a href="{{ asset('/conditions/index') }}"><button>使ってみる</button></a>
                </div>

                <div class="card">
                    <h2>タスク管理</h2>
                    <p>タスクを可視化し、抜け漏れを防ぐことができます。</p>
                    <a href="#"><button>使ってみる</button></a>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
