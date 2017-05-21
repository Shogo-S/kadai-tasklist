@extends('layouts.app')

@section('content')
<div class="col-sm-offset-2 col-lg-offset-3">
    <h1>タスク一覧</h1>
        <div class="col-sm-8 col-lg-6">
            <table class = "table">
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
        </div>
        <div class="clearfix"></div>
    
    {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}
</div>
@endsection