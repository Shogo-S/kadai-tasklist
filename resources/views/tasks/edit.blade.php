@extends('layouts.app')

@section('content')
<h1>id ：{{$task->id}}の編集</h1>

{!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    {!! Form::label('content', '内容の編集') !!}
    {!! Form::text('content') !!}
    {!! Form::submit('更新') !!}
{!! Form::close() !!}
{!! link_to_route('tasks.index','トップへ戻る') !!}
@endsection