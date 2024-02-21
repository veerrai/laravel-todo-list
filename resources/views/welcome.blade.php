@extends('layouts.main')

@push('head')
<title>Todo List App</title>
@endpush

@section('main-section')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center my-5">
    <div class="h2">All Todos</div>
    <a href="{{route("create")}}" class="btn btn-success btn-sm">Add Todo</a>
</div>

<!-- 
{{print_r($todos)}}

 -->
<table class="table table-stripped table-primary container-fluid table-hover">
    <thead>
        <tr>
    <th>Name<span class="text-danger fw-bold">*<span></th>
    <th>Age<span class="text-danger fw-bold">*<span></th>
    <th>City<span class="text-danger fw-bold">*<span></th>
    <th>Work<span class="text-danger fw-bold">*<span></th>
    <th>Salary<span class="text-danger fw-bold">*<span></th>
    <th>Office<span class="text-danger fw-bold">*<span></th>
    <th>Action<span class="text-danger fw-bold">*<span></th>
    </tr>
    </thead>

    <tbody>
        @foreach ($todos as $todo)
        <tr valign="middle">
        <td>{{$todo->name}}</td>
        <td>{{$todo->age}}</td>
        <td>{{$todo->city}}</td>
        <td>{{$todo->work}} </td>
        <td>{{$todo->salary}}</td>
        <td>{{$todo->office}}</td>        
<td>
   <a class="btn btn-success btn-sm" href="{{route('edit', $todo->id)}}">Edit</a>
    <a class="btn btn-danger btn-sm" href="{{route('delete', $todo->id)}}">Delete</a>
</td>
</tr>
        @endforeach
       
    </tbody>
</table>
</div>


@endsection