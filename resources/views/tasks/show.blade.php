@extends('layouts.app')

@section('content')
    @if ($task)
        <h1>id:{{$task->id}}の詳細ページ</h1>
            <p>
                {{$task->content}}
            </p>
            <p>
                {!! link_to_route('tasks.edit', '内容を編集', ['id' => $task->id]) !!}
            </p>
                {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除') !!}
                {!! Form::close() !!}
                {!! link_to_route('tasks.index','トップへ戻る') !!}
            </p>
    @else
        <h1>存在しないページです</h1>
            <p>
                {!! link_to_route('tasks.index','トップへ戻る') !!}
            </p>

    @endif
@endsection