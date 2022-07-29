@extends('admin.layout.adminLayout')
@section('title', 'Create role')
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
                            <li class="breadcrumb-item"><a href="#">User</a></li>
                            <li class="breadcrumb-item active">User Create</li>
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
                            <a href="{{ route('user.index') }}" type="submit" class="btn btn-outline-warning">All Role</a>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Permission</label>
                                        <div class="select2-purple">
                                            <select class="select2" multiple="multiple" data-placeholder="Select Permission"
                                                name=" roles[]" data-dropdown-css-class="select2-purple"
                                                style="width: 100%;">
                                                @foreach ($roles as $id => $roles)
                                                    <option value="{{ $id }}"
                                                        {{ in_array($id, old('roles', [])) || (isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>
                                                        {{ $roles }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Enter name">
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Email</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Enter password">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-success"><i class="fas fa-save mr-1"
                                            aria-hidden="true"></i>Save</button>
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
