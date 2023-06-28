@extends('layouts.main')
@section('content')
    <h1>{{auth()->user()->name}}'s Cart</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Part</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        @php
            $totalPrice = 0;
        @endphp
        @foreach($parts as $part)
        <tr>
            @php
                $totalPrice += $part->price;
            @endphp
            <td>{{$part->name}}</td>
            <td>{{$part->price}}</td>
            <td><form action="{{ route('user.cart.delete')}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="part_id" value="{{$part->id}}">
                <button type="submit" class="btn btn-danger">Remove</button>
            </form></td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2"></td>
            <td>Total Price: {{$totalPrice}}</td>
        </tr>
        </tfoot>
    </table>
@endsection
