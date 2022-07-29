@extends('admin.layout.adminLayout')
@section('title', 'role')
@section('style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>DataTables</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Role</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="text-left mb-3">
                            <a href="{{ route('role.create') }}" type="submit" class="btn btn-outline-success"><i
                                    class="fas fa-plus mr-1"></i>Create New</a>
                        </div>
                        @if (session('message'))
                            <div class="alert alert-success mb-sm-5 mt-sm-5">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session('delete'))
                            <div class="alert alert-danger mb-sm-5 mt-sm-5">
                                {{ session('delete') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Slug</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($role as $rl)
                                            <tr>
                                                <td>{{ $rl->id }}</td>
                                                <td>{{ $rl->name }}</td>
                                                <td>
                                                    @foreach ($rl->permissions as $key => $item)
                                                        <span class="badge badge-info ">{{ $item->name }}</span>
                                                    @endforeach
                                                </td>
                                                <td>{{ $rl->slug }}</td>
                                                <td>
                                                    <form action="{{ route('role.destroy', $rl->id) }}" method="Post">
                                                        <a class="btn btn-outline-success"
                                                            href="{{ route('role.edit', $rl->id) }}"><i
                                                                class="fas fa-edit"></i></a>
                                                        <a class="btn btn-outline-info"
                                                            href="{{ route('role.show', $rl->id) }}"><i
                                                                class="fas fa-eye"></i></a>
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-outline-danger"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
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
                "buttons": ["print"]
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
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
@endsection
