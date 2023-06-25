@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Part</h1>
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
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{route('part.edit', $part->id)}}" class="btn btn-primary">Edit part</a>
                            </div>
                            <form action="{{route('part.delete', $part->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$part->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$part->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>{{$part->description}}</td>
                                    </tr>
                                    <tr>
                                        <td>Article</td>
                                        <td>{{$part->article}}</td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer</td>
                                        <td>{{$part->manufacturer->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>{{$part->price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td>{{$part->qty_on_hand}}</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>{{$part->category->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Compatible cars</td>
                                        <td>
                                        @foreach($part->cars as $car)
                                            {{$car->make->name}} {{$car->model->name}}, <br>
                                        @endforeach
                                        </td>
                                    </tr>
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
