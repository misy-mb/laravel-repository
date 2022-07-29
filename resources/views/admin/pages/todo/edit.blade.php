@extends('admin.layout.adminLayout')
@section('title', 'edit todo')
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
                            <li class="breadcrumb-item"><a href="#">todo</a></li>
                            <li class="breadcrumb-item active">todo edit</li>
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
                            <a href="{{ route('todo.index') }}" type="submit" class="btn btn-success">All todo</a>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">todo</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{ route('todo.update', $todo->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Name</label>
                                        <input type="text" class="form-control" name="text"
                                            value="{{ $todo->text }}" id="text" placeholder="Enter todo">
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Completed</label>
                                        <input type="text" class="form-control" name="completed"
                                            value="{{ $todo->completed }}" id="slug" placeholder="Enter completed">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">User</label>
                                        <input type="text" class="form-control" name="user_id"
                                               value="{{ $todo->user_id }}" id="user_id" placeholder="Enter user id">
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
