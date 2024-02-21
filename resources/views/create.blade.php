@extends('layouts.main')

@push('head')
<title>Add Todo</title>
@endpush

@section('main-section')

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center my-5">
    <div class="h2">Add Todos</div>
    <a href="{{route('home')}}" class="btn btn-primary btn-sm">Back</a>
</div>

<!--
{{print_r($errors->all())}}
  -->
<div class="card container-fluid">
    <div class="card-body">
        <form action="{{route("store")}}" method="POST">
        @csrf
            <div class="row">
                <div class="col-md-6">
            <label for="" class="my-2 ">Name<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="name" class="form-control">
            <div class="text-danger">
@error('name')
{{$message}}
@enderror
            </div>
            </div>
            <div class="col-md-6">
            <label for="" class="my-2 ">Age<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="age" class="form-control">
            <div class="text-danger">
@error('age')
{{$message}}
@enderror
            </div>
            </div>
            <div class="col-md-6">
            <label for="" class="my-2 ">City<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="city" class="form-control">
            <div class="text-danger">
@error('city')
{{$message}}
@enderror
            </div>
            </div>
            <div class="col-md-6">
            <label for="" class="my-2 ">Work<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="work" class="form-control">
            <div class="text-danger">
@error('work')
{{$message}}
@enderror
            </div>
            </div>
            <div class="col-md-6">
            <label for="" class="my-2 ">Salary<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="salary" class="form-control">
            <div class="text-danger">
@error('salary')
{{$message}}
@enderror
            </div>
            </div>
            <div class="col-md-6">
            <label for="" class="my-2 ">Office<span class="text-danger fw-bold">*<span></label>
            <input type="text" name="office" class="form-control">
            <div class="text-danger">
@error('office')
{{$message}}
@enderror
            </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-success my-4">Add Todo</button>
            </div>
            </div>
        </form>
    </div>
</div>

</div>


@endsection