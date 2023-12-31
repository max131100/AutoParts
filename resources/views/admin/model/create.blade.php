@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add car model</h1>
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
                <form action="{{route('model.store')}}" , method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Model">
                    </div>
                    <div class="form-group">
                        <select id="make" class="form-control" name="car_make_id">
                            <option value="">Select make</option>
                            @foreach ($makes as $make)
                                <option
                                    value="{{$make->id}}">{{$make->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Create">
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
        $(document).ready(function () {
            $('#make').select2({
                placeholder: "Search make...",
                allowClear: true,
            });
        });
    </script>
@endsection
