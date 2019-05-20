@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="column col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">収入</div>
                <div class="panel-body">
                    <div class="text-right">
                        <a href="{{ action('IncomeController@create') }}" class="btn btn-default btn-block">
                            収入を追加する
                        </a>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>タイトル</th>
                        <th>金額</th>
                        <th>日付</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>
                            <span class="label {{ $task->price }}">{{ $task->price }}</span>
                        </td>
                        <td>{{ $task->paid_at }}</td>
                        <td><a href="#">編集</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
