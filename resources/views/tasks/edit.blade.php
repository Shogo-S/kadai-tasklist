@extends('layouts.app')

@section('content')
<h1>id ：{{$task->id}}の編集</h1>

<!--@if (count($errors) > 0)-->
<!--    @foreach ($errors->all() as $error)-->
<!--        {{ $error }}-->
<!--    @endforeach-->
<!--@endif-->

{!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    {!! Form::label('content', '内容の編集') !!}
    <br>
    {!! Form::text('content') !!}
    <br>
    {!! Form::label('status', '状況') !!}
    <br>
    {!! Form::select('status', ['' => '選択してください', '未着手' => '未着手','順調' =>'順調', '遅延' => '遅延','完了' => '完了']) !!}
    @include('commons.common_error_message')    
    <br>
    {!! Form::submit('更新') !!}
{!! Form::close() !!}
{!! link_to_route('tasks.index','トップへ戻る') !!}
@endsection