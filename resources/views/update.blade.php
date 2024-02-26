@extends('layouts.main')

@push('head')
<title>Update Todo</title>
@endpush

@section('main-section')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center my-5">
    <div class="h2">Update Todos</div>
    <a href="{{route('home')}}" class="btn btn-primary btn-sm">Back</a>
</div>
<div class="card container-fluid">
    <div class="card-body">
        <form action="{{route("updateData")}}" method='GET'>
          @csrf
            <div class="row">
                <div class="col-md-6">
            <label for="" class="my-2 ">Name<span class="text-danger fw-bold" >*<span></label>
            <input type="text" name="name" class="form-control" value="{{$todo->name}}">
            </div>
            <div class="col-md-6">
            <label for="" class="my-2 ">Age<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="age" class="form-control" value="{{$todo->age}}">
            </div>
            <div class="col-md-6">
            <label for="" class="my-2 ">City<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="city" class="form-control" value="{{$todo->city}}">
            </div>
            <div class="col-md-6">
            <label for="" class="my-2 ">Work<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="work" class="form-control" value="{{$todo->work}}">
            </div>
            <div class="col-md-6">
            <label for="" class="my-2 ">Salary<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="salary" class="form-control" value="{{$todo->salary}}">
            </div>
            <div class="col-md-6">
            <label for="" class="my-2 ">Office<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="office" class="form-control" value="{{$todo->office}}">
            </div>
            <input type="hidden" name="id" value="{{$todo->id}}">
            <div class="col-md-12">
                <button class="btn btn-success my-4">Update Todo</button>
            </div>
            </div>
        </form>
    </div>
</div>

</div>


@endsection