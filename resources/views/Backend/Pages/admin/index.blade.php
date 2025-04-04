@extends('Backend.layout.main')

@section('content')

    <body>
        <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            <div class="page-body-wrapper">
                <div class="page-body">
                    <div class="container-fluid">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <h2>Admins</h2>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <ol class="breadcrumb">
                                        <a href="/admin/admin/create" class="btn btn-outline-primary">Add</a>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container-fluid starts-->
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Zero Configuration  Starts-->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header pb-0 card-no-border">
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display" id="basic-1">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($admins as $admin)
                                                        <tr>
                                                            <td>{{ $admin->Name }}</td>
                                                            <td>{{ $admin->Username }}</td>
                                                            <td>{{ $admin->Email }}</td>
                                                            <td>{{ $admin->Password }}</td>
                                                            <td>
                                                                <a
                                                                    href="{{ url('admin/admin/' . $admin->Id . '/edit') }}" class="btn btn-outline-primary">Edit</a>
                                                            </td>
                                                            <td>
                                                                <a
                                                                    href="{{ url('admin/admin/' . $admin->Id . '/delete') }}" class="btn btn-outline-danger">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
