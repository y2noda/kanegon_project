@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="column col-md-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-right">
                        <a href="{{ action('ExpenseController@index') }}" class="btn btn-default btn-block">
                            支出
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-right">
                        <a href="{{ action('IncomeController@index') }}" class="btn btn-default btn-block">
                            収入
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
