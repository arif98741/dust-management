@extends('backend.layouts.app')
@section('title','Add Payment')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Payment</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">

            <div class="container-fluid">

                @include('backend.includes.flash')
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="100">
                    <form method="post" action="{{ url('user/add-payment') }}" class="form-outline-style-v1"
                          id="contactForm">
                        @method('post')
                        @csrf
                        <div class="form-group row mb-0">

                            <div class="col-lg-6 form-group">
                                <div class="form-group">
                                    <label for="name">Payment Type</label>
                                    <select name="payment_type" class="form-control" id="">
                                        <option value="">Select Payment Type</option>
                                        <option value="Bkash">Bkash</option>
                                        <option value="Nagad">Nagad</option>
                                        <option value="Rocket">Rocket</option>
                                        <option value="Credit Card">Credit Card</option>
                                    </select>
                                    @if ($errors->has('payment'))
                                        <span class="help-block">
                                            <strong class="text-red">{{ $errors->first('payment') }}</strong>
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

                            </div>
                            <div class="col-md-12 d-flex align-items-center">
                                <input type="submit" class="btn btn-primary mr-3" value="Submit Payment">
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
