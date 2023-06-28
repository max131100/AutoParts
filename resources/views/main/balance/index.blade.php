@extends('layouts.main')
@section('content')
    <h1>Your balance is: {{$user->balance}}</h1>
    <form action="{{route('user.balance.add')}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <input type="number" step="0.01" name="amount" placeholder="amount">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Add">
        </div>
    </form>
@endsection
