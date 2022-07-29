@extends('admin.layout.adminLayout')
@section('title', 'permission Show')
@section('style')

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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('permission.index') }}">permission</a></li>
                            <li class="breadcrumb-item active">permission show</li>
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
                        <div class="card">
                            <!--Alert message-->
                            @if (session('message'))
                                <div class="alert alert-success mb-sm-5 mt-sm-5">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <div class="card-header">
                                <h3 class="card-title">DataTable</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table-head-fixed table">
                                    <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <td>{{ $permission->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $permission->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Slug</th>
                                            <td>{{ $permission->slug }}</td>
                                        </tr>
                                        <tr>
                                            <th>Create at</th>
                                            <td>{{ $permission->created_at }}</td>
                                        </tr>
                                        <tr>
                                            <th>Update at</th>
                                            <td>{{ $permission->updated_at }}</td>
                                        </tr>
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
@endsection
