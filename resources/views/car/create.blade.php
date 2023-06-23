@extends('layout.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add car</h1>
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
                <form action="{{route('car.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <select id="model" class="form-control" name="car_model_id">
                            @foreach ($models as $model)
                                <option
                                    value="{{$model->id}}" data-make-id="{{$model->make->id}}">{{$model->name}} {{$model->make->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="year" class="form-control">
                            <option value="">Select year</option>
                            @php
                                $currentYear = date('Y');
                                $startYear = 1970;
                            @endphp
                            @for ($year = $currentYear; $year >= $startYear; $year--)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                    <input type="hidden" id="car_make_id" name="car_make_id">
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
        $(document).ready(function() {
            $('#model').select2({
                placeholder: 'Select make',
                allowClear: true
            }).on('change', function() {
                var makeId = $(this).find(':selected').data('make-id');
                $('#car_make_id').val(makeId);
            });
        });
    </script>
@endsection

