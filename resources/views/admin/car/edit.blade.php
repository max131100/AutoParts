@extends('admin.layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit car ({{$car->make->name}} {{$car->model->name}})</h1>
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
                <form action="{{route('car.update', $car->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <select name="year" class="form-control">
                            <option value="">Select year</option>
                            @php
                                $currentYear = date('Y');
                                $startYear = 1970;
                            @endphp
                            @for ($year = $currentYear; $year >= $startYear; $year--)
                                <option
                                    {{$car->year === $year ? 'selected' : ''}}
                                    value="{{ $year }}">{{ $year }}</option>
                            @endfor
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
