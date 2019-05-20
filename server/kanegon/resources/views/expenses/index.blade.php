@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="column col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">支出</div>
                <div class="panel-body">
                    <div class="text-right">
                        <a href="{{ action('ExpenseController@create') }}" class="btn btn-default btn-block">
                            支出を追加する
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
                        <td>{{ $task->purchased_at }}</td>
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
