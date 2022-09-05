@extends('users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Detail User Data</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("common.username")}} :</strong>
            {{ $user->username }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("common.email_address")}}:</strong>
            {{ $user->email }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("common.first_name")}}:</strong>
            {{ $user->first_name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__("common.last_name")}}:</strong>
            {{ $user->last_name }}
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>No</th>
                <th>{{__("common.username")}}</th>
                <th>{{__("common.email_address")}}</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $task->task_title }}</td>
                <td>{{ $task->task_content }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection