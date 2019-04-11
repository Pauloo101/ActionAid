<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Act!onAid | Request Invoice</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">
</head>
<body onload="window.print();">
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Act!on Aid
                    <small class="float-right">Date: {{$date}}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>Act!on Aid</strong><br>
                    Abeokuta<br>
                    Ogun State,<br>
                    Phone: 00000000 <br>
                    Email: hello@actionaid.com
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong>{{Auth::user()->name}}</strong><br>
                    Home Address : <br>
                    Street:<br>
                    Phone: <br>
                    Email: {{Auth::user()->email}}
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Receipt no # {{$donate->receipt_no}}</b><br>
                <br>
                <b>Date:</b> {{$donate->created_at}}<br>

                <b>Account:</b> {{$donate->amount}}<br>
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Receipt number</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th>Method of Payment</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$donate->receipt_no}}</td>
                            <td>{{$donate->amount}}</td>
                            <td>{{$donate->category}}</td>
                            <td>{{$donate->channel}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </section>

</div>
<!-- ./wrapper -->
</body>
</html>
