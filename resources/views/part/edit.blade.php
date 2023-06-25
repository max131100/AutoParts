@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit part</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{route('part.update', $part->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="name" value="{{$part->name}}" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" value="{{$part->description}}" class="form-control" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <input type="number" step="0.01" name="price" value="{{$part->price}}" class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <input type="number" name="qty_on_hand" value="{{$part->qty_on_hand}}" class="form-control" placeholder="Quantity">
                    </div>
                    <div class="form-group">
                        <select id="cars" class="form-control" name="compatible_cars[]" multiple>
                            @foreach ($cars as $car)
                                <option
                                    @foreach ($part->cars as $partCar)
                                        {{$car->id === $partCar->id ? 'selected' : ''}}
                                    @endforeach
                                    value="{{$car->id}}">{{$car->make->name}} {{$car->model->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Edit">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('scripts')
    <script>
        jQuery.noConflict();
        $(document).ready(function() {
            $('#cars').select2({
                placeholder: 'Select compatible cars',
                allowClear: true
            })
        });
    </script>
@endsection
