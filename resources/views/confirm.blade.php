<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body style="background-color: rgba(64,59,59,0.4);">
<div class="row text-center" style="padding: 188px;">
    <div class="col">
        <div class="card shadow-lg">
            <div class="card-header">
                <h5>{{Auth::user()->name}}, thank you for your Donation</h5>
                <h6>Please follow the instruction below to generate your receipt </h6>
            </div>
            <div class="card-body text-left">
                <h4 class="card-title">Step 1</h4>
                <p class="card-text">Log into your email and click on inbox click on the mail from Act!on Aid</p>
                <h4 class="card-title">Step 2</h4>
                <p class="card-text">click on print receipt</p>
                <div class="row">
                    <div class="col text-center"><label style="margin-bottom: 0px;">Or</label>
                        <hr style="margin-top: 8px;" />
                    </div>
                </div>
                <h5 class="card-title">Print from your dashboard</h5>
                <a class="card-link" href="/home">Home</a>
                <form method="GET" action="{{route('receipt')}}">
                    <input hidden value="{{$receipt_no}}" name="receipt_no">
                    <button class="card-link btn btn-outline-success" type="submit" >Print now</button>
                </form>
                </div>
        </div>
    </div>
</div>
</body>
</html>