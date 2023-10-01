@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>タスク登録</h1>

            <form action="{{ route('tasks.store') }}" method="post">
                @csrf

                <div>
                    <label for="name">タスク名</label>
                    <input type="text" id="name" name="name">
                </div>

                <div>
                    <label for="description">タスク内容</label>
                    <textarea name="description" id="description"></textarea>
                </div>

                <div>
                    <label for="scheduled_start_date">開始予定日</label>
                    <input type="date" id="scheduled_start_date" name="scheduled_start_date">
                </div>
                
                <div>
                    <label for="scheduled_end_date">終了予定日</label>
                    <input type="date" id="scheduled_end_date" name="scheduled_end_date">
                </div>

                
                <input type="submit" value="登録">
                <a href="{{ route('tasks.index') }}">キャンセル</a>
            </form>
        </div>
    </div>
</div>
@endsection
