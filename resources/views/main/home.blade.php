@extends('layouts.main')
@section('content')
    <h1>Search parts</h1>
    <form action="{{route('user.part.index')}}" method="GET">
        <div class="form-group mb-3">
            <input class="form-control form-control-lg"
                   name="name" type="text" placeholder="Search by part name" aria-label=".form-control-lg example">
        </div>
        <div class="form-group mb-3">
            <input class="form-control form-control-lg"
                   name="article" type="text" placeholder="Search by part article"
                   aria-label=".form-control-lg example">
        </div>
        <div class="form-group mb-3">
            <select class="form-select" name="category_id" aria-label="Default select example">
                <option selected disabled>Search by category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <select class="form-select" name="car" aria-label="Default select example">
                <option selected disabled>Search by car</option>
                @foreach($cars as $car)
                    <option value="{{$car->id}}">{{$car->make->name}} {{$car->model->name}} {{$car->year}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Search">
    </form>
@endsection
