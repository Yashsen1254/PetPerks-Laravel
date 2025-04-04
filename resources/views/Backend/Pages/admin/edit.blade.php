@extends('Backend.layout.main')

@section('content')

    <body>
        <!-- page-wrapper Start-->
        <!-- tap on top starts-->
        <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
        <!-- tap on tap ends-->
        <!-- loader-->
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            <!-- Page Body Start-->
            <div class="page-body-wrapper">
                <div class="page-body">
                    <div class="container-fluid">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <h2>Update Admin</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container-fluid starts-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header card-no-border pb-0">
                                    </div>
                                    <div class="card-body">
                                        <form class="row g-3" action="{{ url('admin/admin/'.$admin->Id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-md-4 position-relative">
                                                <label class="form-label" for="validationTooltip01">Name</label>
                                                <input class="form-control" value="{{$admin->Name}}" type="text" placeholder="Name" id="Name" name="Name">
                                            </div>
                                            <div class="col-md-4 position-relative">
                                                <label class="form-label" for="validationTooltip02">Username</label>
                                                <input class="form-control" value="{{$admin->Username}}" type="text" placeholder="Username" id="Username" name="Username">
                                            </div>
                                            <div class="col-md-4 position-relative">
                                                <label class="form-label" for="validationTooltipUsername">Email</label>
                                                <input class="form-control" value="{{$admin->Email}}" type="email" placeholder="Email" id="Email" name="Email">
                                            </div>
                                            <div class="col-md-6 position-relative">
                                                <label class="form-label" for="validationTooltip03">Password</label>
                                                <input class="form-control" id="Password" value="{{$admin->Password}}" type="password" placeholder="Password" name="Password">
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Submit form </button>
                                            </div>
                                        </form>
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
