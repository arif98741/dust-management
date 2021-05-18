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
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="100">
                    <form method="post" action="{{ url('user/add-new-request') }}" class="form-outline-style-v1"
                          id="contactForm">
                        @method('post')
                        @csrf
                        <div class="form-group row mb-0">

                            <div class="col-lg-6 form-group">
                                <div class="form-group">
                                    <label for="name">Waste Type</label>
                                    <select name="dust_type" class="form-control" id="">
                                        <option value="">Select Waste Type</option>
                                        <option value="Home Dust">Home Waste</option>
                                        <option value="Industrial Garbage">Industrial Garbage</option>
                                        <option value="Farming Dust">Farming Waste</option>
                                        <option value="Cattle Garbage">Cattle Garbage</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    @if ($errors->has('dust_type'))
                                        <span class="help-block">
                                            <strong class="text-red">{{ $errors->first('dust_type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name">Amount</label>
                                    <input name="amount" value="{{ old('amount') }}" type="text"
                                           class="form-control"
                                           id="name">
                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                            <strong class="text-red">{{ $errors->first('amount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name">Amount Unit</label>
                                    <select name="dust_unit" class="form-control" id="">
                                        <option value="">Select Unit</option>
                                        <option value="KG">KG</option>
                                        <option value="Ton">Ton</option>
                                        <option value="Liter">Liter</option>
                                    </select>
                                    @if ($errors->has('dust_unit'))
                                        <span class="help-block">
                                            <strong class="text-red">{{ $errors->first('dust_unit') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-lg-6 form-group">
                                <div class="form-group">
                                    <label for="name">Collection Address</label>
                                    <input name="collection_address" value="{{ old('collection_address') }}" type="text"
                                           class="form-control"
                                           id="name">
                                    @if ($errors->has('collection_address'))
                                        <span class="help-block">
                                            <strong class="text-red">{{ $errors->first('collection_address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="name">My Availability</label>
                                    <select name="my_availability" class="form-control" id="">
                                        <option value="">Select Availability</option>
                                        <option value="Yes">Yes</option>
                                        <option value="NO">NO</option>

                                    </select>
                                    @if ($errors->has('my_availability'))
                                        <span class="help-block">
                                            <strong class="text-red">{{ $errors->first('my_availability') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="col-md-12 d-flex align-items-center">
                                <input type="submit" class="btn btn-primary mr-3" value="Send Request">
                                <span class="submitting"></span>
                            </div>

                        </div>

                    </form>
                    <div id="form-message-warning" class="mt-4"></div>
                    @if(Session::has('alert-success'))
                        <div id="form-message-success">
                            {{Session::get('alert-class') }}
                        </div>
                    @else
                        <div id="form-message-warning" class="mt-4">
                            {{ session()->get('alert-warning') }}
                        </div>

                    @endif


                </div>
            </div>
            <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection
