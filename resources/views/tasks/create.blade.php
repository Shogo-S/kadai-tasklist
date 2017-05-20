@extends('layouts.app')

@section('content')
<h1>タスクの新規追加</h1>

<!--@if (count($errors) > 0)-->
<!--    @foreach ($errors->all() as $error)-->
<!--        {{ $error }}-->
<!--    @endforeach-->
<!--@endif-->

{!! Form::model('message.create', ['route' => 'tasks.store']) !!}
    {!! Form::label('content', '新規タスク') !!}
    <br>
    {!! Form::text('content') !!}
    <br>
    {!! Form::label('status', '状況') !!}
    <br>
    {!! Form::select('status', ['' => '選択してください', '未着手' => '未着手','順調' =>'順調', '遅延' => '遅延','完了' => '完了']) !!}
     @include('commons.common_error_message')
     <br>
    {!! Form::submit('追加') !!}
{!! Form::close() !!}
{!! link_to_route('tasks.index','トップへ戻る') !!}
@endsection