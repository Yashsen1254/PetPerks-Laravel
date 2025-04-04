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
                                    <h2>Admin Dashboard</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container-fluid starts-->
                    <div class="container-fluid default-dashboard">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-4 proorder-xxl-2 col-sm-6 box-col-6">
                                <div class="card earning-card">
                                    <div class="card-header pb-0 card-no-border">
                                        <div class="header-top">
                                            <h3>Total Product</h3>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-center gap-3">
                                            <h2>{{$totalProduct}}</h2>
                                            <br><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 proorder-xxl-2 col-sm-6 box-col-6">
                                <div class="card earning-card">
                                    <div class="card-header pb-0 card-no-border">
                                        <div class="header-top">
                                            <h3>Total Category</h3>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-center gap-3">
                                            <h2>{{$totalCategory}}</h2>
                                            <br><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 proorder-xxl-2 col-sm-6 box-col-6">
                                <div class="card earning-card">
                                    <div class="card-header pb-0 card-no-border">
                                        <div class="header-top">
                                            <h3>Total Client</h3>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-center gap-3">
                                            <h2>{{$totalClient}}</h2>
                                            <br><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 proorder-xxl-2 col-sm-6 box-col-6">
                                <div class="card earning-card">
                                    <div class="card-header pb-0 card-no-border">
                                        <div class="header-top">
                                            <h3>Total Order</h3>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-center gap-3">
                                            <h2>{{$totalOrder}}</h2>
                                            <br><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-4 proorder-xxl-2 col-sm-6 box-col-6">
                                <div class="card earning-card">
                                    <div class="card-header pb-0 card-no-border">
                                        <div class="header-top">
                                            <h3>Total Revenue</h3>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-center gap-3">
                                            <h2>{{$totalRevenue}}</h2>
                                            <br><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery-->

    </body>

    </html>
@endsection
