@extends('backend.layouts.app')
@section('title','Dashboard')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">My Request List</h1>
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
                        <th style="width: 20%">Waste Type</th>
                        <th style="width: 20%">Amount</th>
                        <th style="width: 20%">Collection Address</th>
                        <th style="width: 20%">Request Date</th>
                        <th style="width: 20%">Status</th>
                    </tr>

                    @foreach($requests as $key=> $request)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $request->dust_type }}</td>
                            <td>{{ $request->amount }}</td>
                            <td>{{ $request->collection_address }}</td>
                            <td>{{ date('d-m-Y h:iA',strtotime($request->created_at)) }}</td>
                            <td>{{ ucfirst($request->status) }}</td>
                        </tr>

                    @endforeach
                </table>

            </div>
            <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection
