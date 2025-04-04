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
                                    <h2>Product</h2>
                                </div>
                                <div class="col-sm-6 col-12">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container-fluid starts-->
                    <div class="container-fluid product-wrapper">
                        <div class="product-grid">
                            <div class="feature-products">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="product-sidebar">
                                            <div class="filter-section">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h6 class="mb-0 f-w-600">
                                                            <a href="./product/create">Add Product</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper-grid">
                                <div class="row list-collection">
                                    @foreach ($products as $product)
                                    <div class="col-xl-3 col-sm-6 xl-4">
                                        <div class="card">
                                            <div class="product-box">
                                                <div class="product-img">
                                                    <img class="img-fluid" src="{{url('uploads/products/'.$product->Image)}}" alt="" />
                                                    
                                                </div>
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header border-bottom-0">
                                                                <div class="product-box row">
                                                                    <div class="product-img col-lg-6">
                                                                        <img class="img-fluid"src="{{url('uploads/products/'.$product->Image)}}" alt="" />
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-details">
                                                    <a href="product-page.html">
                                                        <h4>{{$product->Name}}</h4>
                                                    </a>
                                                    <p>{{$product->Description}}</p>
                                                    <div class="product-price"><span>{{$product->Price}} </span>
                                                    </div>
                                                    <a href="{{url('admin/product/'.$product->Id.'/edit')}}" class="btn btn-outline-primary">Update</a>
                                                    <a href="{{url('admin/product/'.$product->Id.'/delete')}}" class="btn btn-outline-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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
