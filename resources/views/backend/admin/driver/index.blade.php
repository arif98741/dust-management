@extends('backend.layouts.app')
@section('title','List Driver')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">View Drivers</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                @include('backend.includes.flash')
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-12">

                                <div class="card card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($drivers as $key=>$driver)
                                            <tr>
                                                <td> {{ ++$key }}
                                                </td>
                                                <td>{{ $driver->name }}</td>
                                                <td>{{ $driver->email }}</td>
                                                <td>{{ $driver->user_profile->mobile }}</td>
                                                <td>{{ $driver->user_profile->address }}</td>
                                                <td>
                                                    <a href="{{ route('admin.driver.edit',$driver->id) }}" class="btn btn-success btn-sm">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- /.col (left) -->
                            <div class="col-md-6">
                                <div class="card card-primary">

                                </div>

                            </div>
                        </div>

                    </div>
                </section>
            </div>
    </div>
@endsection
