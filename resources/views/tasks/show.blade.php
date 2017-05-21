@extends('layouts.app')

@section('content')
    <div class="col-sm-offset-2 col-lg-offset-3">
            @if ($task)
                <h1>id:{{$task->id}}の詳細ページ</h1>
                    <div class="col-sm-8 col-lg-6">
                        <table class="table">
                            <tr>
                                <th>
                                    内容
                                </th>
                                <td>
                                    {{$task->content}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    状況
                                </th>
                                <td>
                                    {{$task->status}}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                    <div>
                        <p>
                            {!! link_to_route('tasks.edit', '内容を編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
                        </p>
                            {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            <!--{!! link_to_route('tasks.index','トップへ戻る', null, ['class' => 'btn btn-info']) !!}-->
                        </p>
                    </div>
            @else
                <h1>存在しないページです</h1>
                    <p>
                        {!! link_to_route('tasks.index','トップへ戻る', null, ['class' => 'btn btn-info']) !!}
                    </p>
        
            @endif
    </div>
@endsection