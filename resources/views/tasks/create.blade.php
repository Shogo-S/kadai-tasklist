@extends('layouts.app')

@section('content')
<h1>タスクの新規追加</h1>

{!! Form::model('message.create', ['route' => 'tasks.store']) !!}
    {!! Form::label('content', '新規タスク') !!}
    {!! Form::text('content') !!}
    {!! Form::submit('追加') !!}
{!! Form::close() !!}
{!! link_to_route('tasks.index','トップへ戻る') !!}
@endsection