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
                                    <h2>Orders</h2>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <ol class="breadcrumb">
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
                                                        <th>Client Name</th>
                                                        <th>Total Quantity</th>
                                                        <th>Total Amount</th>
                                                        <th>Product Name</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $order)
                                                        <tr>
                                                            <td>
                                                                {{ $order->ClientName }}
                                                            </td>
                                                            <input type="hidden" value="{{ $order->Id }}" id="Orderid" name="Orderid">
                                                            <td>{{ $order->Totalquantity }}</td>
                                                            <td>{{ $order->Totalamount }}</td>
                                                            <td>
                                                                {{ $order->ProductName }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ url('/admin/order/' . $order->Id) }}" class="btn btn-outline-primary">{{ $order->Status }}</a>
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
