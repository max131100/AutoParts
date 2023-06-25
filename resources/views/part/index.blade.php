@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Parts</h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('part.create')}}" class="btn btn-primary">Add part</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Article</th>
                                    <th>Manufacturer</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Category</th>
                                    <th>Compatible Cars</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($parts as $part)
                                    <tr>
                                        <td>{{$part->id}}</td>
                                        <td><a href="{{route('part.show', $part->id)}}">{{$part->name}}</a></td>
                                        <td>{{$part->description}}</td>
                                        <td>{{$part->article}}</td>
                                        <td>{{$part->manufacturer->name}}</td>
                                        <td>{{$part->price}}</td>
                                        <td>{{$part->qty_on_hand}}</td>
                                        <td>{{$part->category->title}}</td>
                                        <td>
                                            @foreach($part->cars as $car)
                                                {{$car->make->name}} {{$car->model->name}},<br>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
