@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>CRUD users</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}">{{__("common.create_new_users")}}</a>
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
        <th>{{__("common.username")}}</th>
        <th>{{__("common.email_address")}}</th>
        <th>{{__("common.first_name")}}</th>
        <th>{{__("common.last_name")}}</th>
        <th>{{__("common.actions")}}</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ ++$offset }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->first_name }}</td>
        <td>{{ $user->last_name }}</td>
        <td>
            <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">{{__("common.show")}}</a>

                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">{{__("common.edit")}}</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">{{__("common.delete")}}</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $users->links() !!}

@endsection
