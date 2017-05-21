@extends('layouts.app')

@section('content')
<h1 class="col-sm-offset-2 col-lg-offset-3">タスクの新規追加</h1>

<!--@if (count($errors) > 0)-->
<!--    @foreach ($errors->all() as $error)-->
<!--        {{ $error }}-->
<!--    @endforeach-->
<!--@endif-->

{!! Form::model('message.create', ['route' => 'tasks.store']) !!}
    <div class="row">
        <div class="col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            <div class='form-group'>
                {!! Form::label('content', '新規タスク') !!}
                {!! Form::text('content',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status', '状況') !!}
                {!! Form::select('status', ['' => '選択してください', '未着手' => '未着手','順調' =>'順調', '遅延' => '遅延','完了' => '完了'], ['class' => 'form-control']) !!}
                <span class="label label-warning">必須</span>
            </div>
             @include('commons.common_error_message')
            <div class="form-group">
                {!! Form::submit('追加', ['class'=>'btn btn-primary']) !!}
            </div>
{!! Form::close() !!}
        </div>
     </div>


@endsection