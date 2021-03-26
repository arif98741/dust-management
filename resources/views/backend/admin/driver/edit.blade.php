@extends('backend.layouts.app')
@section('title','Update Driver')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update Driver</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <section class="content">
                    <div class="container-fluid">

                        <div class="card card-default">

                        </div>

                        <div class="row">

                            <div class="col-md-12">

                                <div class="card card-info">
                                    <form role="form" action="{{ route('admin.driver.update',$driver->id) }}"
                                          method="post">
                                        @method('PUT') @csrf
                                        <div class="card-header">
                                            <h3 class="card-title">Driver Saving Form</h3>
                                        </div>
                                        <div class="card-body">
                                            <!-- Color Picker -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name"
                                                               value="@if(!empty(old('name'))){{ old('name') }} @else {{$driver->name}} @endif"
                                                               class="form-control my-colorpicker1">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                        <strong
                                                            class="text-warning">{{ $errors->first('name') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" name="email"
                                                               value="@if(!empty(old('email'))){{ old('email') }} @else {{$driver->email}} @endif"
                                                               class="form-control my-colorpicker1">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                       <strong
                                                           class="text-warning">{{ $errors->first('email') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="text" name="password" value=""
                                                               class="form-control my-colorpicker1">
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                        <strong
                                                            class="text-warning">{{ $errors->first('password') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Mobile</label>
                                                        <input type="text" name="mobile"
                                                               value="@if(!empty(old('mobile'))){{ old('mobile') }} @else {{$driver->user_profile->mobile}} @endif"
                                                               class="form-control my-colorpicker1">
                                                        @if ($errors->has('mobile'))
                                                            <span class="help-block">
                                                        <strong
                                                            class="text-warning">{{ $errors->first('mobile') }}</strong>
                                                    </span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea name="address" id="" cols="30" rows="4"
                                                                  class="form-control">@if(!empty(old('address'))){{ old('address') }} @else {{$driver->user_profile->address}} @endif</textarea>
                                                        @if ($errors->has('address'))
                                                            <span class="help-block">
                                                        <strong
                                                            class="text-warning">{{ $errors->first('address') }}</strong>
                                                    </span>
                                                        @endif

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                </div>
                                </form>
                                <!-- /.card -->
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
