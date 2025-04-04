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
                                    <h2>Add Product</h2>
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
                                        <form class="row g-3" action="{{ url('./admin/product/store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-4 position-relative">
                                                <label class="form-label" for="validationTooltip01">Name</label>
                                                <input class="form-control" type="text" placeholder="Name" id="Name" name="Name">
                                            </div>
                                            <div class="col-md-4 position-relative">
                                                <label class="form-label" for="validationTooltip02">Description</label>
                                                <input class="form-control" type="text" placeholder="Description" id="Description" name="Description">
                                            </div>
                                            <div class="col-md-4 position-relative">
                                                <label class="form-label" for="validationTooltipUsername">Price</label>
                                                <input class="form-control" type="number" placeholder="Price" id="Price" name="Price">
                                            </div>
                                            <div class="col-md-6 position-relative">
                                                <label class="form-label" for="validationTooltip03">Image</label>
                                                <input class="form-control" type="file" placeholder="Image" id="Image" name="Image">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="select">Category </label>
                                                <select class="form-select" id="Categoryid" name="Categoryid">
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->Id }}">{{ $category->Name }}</option>
                                                    @endforeach
                                                </select>
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
