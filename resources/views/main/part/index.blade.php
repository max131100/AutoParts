@extends('layouts.main')
@section('content')
    <div class="row">
        @foreach($parts as $part)
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$part->name}}</h5>
                        <form action="{{ route('user.cart.add') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="part_id" value="{{$part->id}}">
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        </form>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Price: </b>{{$part->price}}$</li>
                            <li class="list-group-item"><b>Mnf: </b>{{$part->manufacturer->name}}</li>
                            <li class="list-group-item"><b>Compatible cars: </b></li>
                            @foreach($part->cars as $car)
                                <li class="list-group-item"><b>{{$car->make->name}} {{$car->model->name}}</b></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div>
        {{$parts->withQueryString()->links()}}
    </div>
@endsection
