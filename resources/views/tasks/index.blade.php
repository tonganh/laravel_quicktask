@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>CRUD Tasks</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('tasks.create') }}"> {{__("common.create_new_task")}} </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p></p>
</div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>{{__("common.show")}}</th>
        <th>{{__("common.task_content")}}</th>
        <th>{{__("common.actions")}}</th>
    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td>{{ ++$offset }}</td>
        <td>{{ $task->task_title }}</td>
        <td>{{ $task->task_content }}</td>
        <td>
            <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">{{__("common.show")}}</a>

                <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">{{__("common.edit")}}</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">{{__("common.delete")}}</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
