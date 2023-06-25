@extends('layout.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add part</h1>
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
                <form action="{{route('part.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <input type="text" name="article" class="form-control" placeholder="Article">
                    </div>
                    <div class="form-group">
                        <select id="manufacturer" class="form-control" name="manufacturer_id">
                            @foreach ($manufacturers as $manufacturer)
                                <option
                                    value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" step="0.01" name="price" class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <input type="number" name="qty_on_hand" class="form-control" placeholder="Quantity">
                    </div>
                    <div class="form-group">
                        <select id="category" class="form-control" name="category_id">
                            @foreach ($categories as $category)
                                <option
                                    value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="cars" class="form-control" name="compatible_cars[]" multiple>
                            @foreach ($cars as $car)
                                <option
                                    value="{{$car->id}}">{{$car->make->name}} {{$car->model->name}}</option>
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
        $(document).ready(function() {
            $('#category').select2({
                placeholder: 'Select category',
                allowClear: true
            })
            $('#manufacturer').select2({
                placeholder: 'Select manufacturer',
                allowClear: true
            })
            $('#cars').select2({
                placeholder: 'Select compatible cars',
                allowClear: true
            })
        });
    </script>
@endsection

