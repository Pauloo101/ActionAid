@extends('layouts.app')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Donate</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Donate</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <form method="POST" action="{{route('pay')}}" accept-charset="UTF-8" class="form-horizontal" role="form">
                            @csrf
                        <div class="card-header">
                            <h5 class="card-title">
                                <div class="callout callout-info">
                                    <h5><i class="fa fa-info"></i> Note:</h5>
                                    Give Monthly sets up for you ‘Regular Giving’:
                                    a recurring Monthly debit on your payment-card as sign-on to
                                    Action Aids’s Social Justice support to the Rights of : Women & safe city,
                                    child & Girl’s to Education. Psychosocial support to displaced
                                    victims of insurgences Relief in emergencies and Building resilience of rural
                                    communities
                                </div>
                            </h5>
                            <hr/>
                            <h6>While: Give Once is a 'One-off Donation</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <a tabindex="0" role="button" class="btn btn-outline-warning active"
                                       data-toggle="popover" data-trigger="focus"
                                       title="Give monthly selected" data-content="Monthly recurring charges"  data-placement="left">
                                        Give Monthly
                                        <input type="radio" name="metadata" value="{{ json_encode($array = ['key_name' => 'Monthly',]) }}" checked/></a>
                                    <a tabindex="0" role="button" class="btn btn-outline-info" data-toggle="popover"
                                       data-trigger="focus" title="Give Once selected" data-content="The charges is once">
                                        Give Once
                                        <input type="radio" name="metadata" value="{{ json_encode($array = ['key_name' => 'once',]) }}" /></a>
                                </div>
                            </div>
                            <hr style="max-width: 50px; border-width: 3px; border-color: #f05f40"/>
                            <input type="hidden" name="email" value="{{ Auth::user()->email}}">
                            <input type="hidden" name="first_name" value="{{ Auth::user()->name}}">
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                            {{--<input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" >--}}
                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">
                            <div class="text-center">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-danger active">
                                        ₦ 2000
                                        <input type="radio" name="amount" checked value="200000"/>
                                    </label>
                                    <label class="btn btn-outline-dark">
                                        ₦ 3000
                                        <input type="radio" name="amount" value="300000" />
                                    </label>
                                    <label class="btn btn-outline-info">
                                        ₦ 5000
                                        <input type="radio" name="amount" value="500000" />
                                    </label>
                                    <label class="btn btn-outline-success">
                                        ₦ 10,000
                                        <input type="radio" name="amount" value="1000000" />
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button class="btn btn-outline-success" type="submit"> Pay</button>
                            {{--<button class="btn" style="border-color: #555555"> Other Amount</button>--}}
                        </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    {{--<pay></pay>--}}


    {{--<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">--}}
        {{--<div class="row" style="margin-bottom:40px;">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<p>--}}
                {{--<div>--}}
                    {{--Lagos Eyo Print Tee Shirt--}}
                    {{--₦ 2,950--}}
                {{--</div>--}}
                {{--</p>--}}
                {{--<input type="hidden" name="email" value="hello@gmail.com"> --}}{{-- required --}}
                {{--<input type="hidden" name="orderID" value="345">--}}
                {{--<input type="hidden" name="amount" value="800000"> --}}{{-- required in kobo --}}
                {{--<input type="hidden" name="quantity" value="1">--}}
                {{--<input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > --}}{{-- For other necessary things you want to add to your payload. it is optional though --}}
                {{--<input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> --}}{{-- required --}}
                {{--<input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> --}}{{-- required --}}
                {{--{{ csrf_field() }} --}}{{-- works only when using laravel 5.1, 5.2 --}}

                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}{{-- employ this in place of csrf_field only in laravel 5.0 --}}


                {{--<p>--}}
                    {{--<button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">--}}
                        {{--<i class="fa fa-plus-circle fa-lg"></i> Pay Now!--}}
                    {{--</button>--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}

@stop