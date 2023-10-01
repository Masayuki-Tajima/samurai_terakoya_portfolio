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
                    <th>タスク</th>
                </tr>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task['name'] }}</td>
                </tr>
                @endforeach
            </table>

            <a href="{{ route('tasks.create') }}">タスク登録</a>
        </div>
    </div>
</div>
@endsection
