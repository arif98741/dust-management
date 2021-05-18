@extends('backend.layouts.app')
@section('title','MY Payment List')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">MY Payment List</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{ url('user/add-payment') }}">Add Payment</a>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">

            <div class="container-fluid">

                @include('backend.includes.flash')
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 20%">SL</th>
                        <th style="width: 20%">Payment Type</th>
                        <th style="width: 20%">Amount</th>
                        <th style="width: 20%">Request Date</th>
                        <th style="width: 20%">Status</th>
                    </tr>

                    @foreach($requests as $key=> $request)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $request->payment_type }}</td>
                            <td>{{ $request->amount }}</td>
                            <td>{{ date('d-m-Y h:iA',strtotime($request->created_at)) }}</td>
                            <td>
                                @if($request->status=='pending')
                                    <a href="#" class="btn btn-warning">{{ ucfirst($request->status) }}</a>

                                @else
                                    <a href="#" class="btn btn-success">{{ ucfirst($request->status) }}</a>
                                @endif
                            </td>
                        </tr>

                    @endforeach
                </table>

            </div>
            <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection
