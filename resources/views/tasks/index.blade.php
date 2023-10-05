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
                    <th>開始予定日</th>
                    <th>終了予定日</th>
                </tr>
                @foreach($tasks as $task)
                {{-- タスクの削除用モーダル --}}
                @include('modals.delete_task')

                <tr>
                    <td>{{ $task['name'] }}</td>
                    <td>{{ $task['scheduled_start_date']}}</td>
                    <td>{{ $task['scheduled_end_date']}}</td>
                    <td><a href="{{ route('tasks.edit', $task) }}">編集</a></td>
                    <td>
                        <form action="{{ route('tasks.destroy', $task) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

            <a href="{{ route('tasks.create') }}">タスク登録</a>
        </div>
    </div>
</div>
@endsection
