@extends('admin.layout.adminLayout')
@section('title', 'edit slider')
@section('style')

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="text-left mb-3">
                            <a href="{{ route('slider.index') }}" type="submit" class="btn btn-outline-success">All
                                Slider</a>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Slider</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{ route('slider.update', $slider->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $slider->title }}" id="title" placeholder="Enter Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="subtitle"
                                            value="{{ $slider->subtitle }}" id="subtitle" placeholder="Enter subtitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Description</label>
                                        <textarea class="form-control" name="description" id="description">{{ $slider->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Link</label>
                                        <input type="text" class="form-control" name="link"
                                            value="{{ $slider->link }}" id="link" placeholder="Enter link">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Thumbnail</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="thumbnail" value="{{ $slider->thumbnail }}"
                                                    class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>

                                        </div>
                                        <img class="mt-3" src="{{ asset('storage/slider/' . $slider->thumbnail) }}"
                                            width="100" height="60" />
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer text-right">
                                    <button class="btn btn-success"><i class="fas fa-save mr-1"
                                            aria-hidden="true"></i>Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
