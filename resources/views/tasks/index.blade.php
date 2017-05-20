@extends('layouts.app')

@section('content')

<h1>タスク一覧</h1>
    <table>
        <tr>
            <th>id</th>
            <th>内容</th>
            <th>状況</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>
            {!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}
            </td>
            <td>
            {{$task->content}}
            </td>
            <td>
            {{($task->status)}}
            </td>
        </tr>
        @endforeach
    </table>

{!! link_to_route('tasks.create', '新規追加') !!}

@endsection