@extends('layouts.app')
{{--dashboard--}}
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>₦ {{$total->sum(function ($total){
                            return $total;
                            })}}</h3>
                            <p>Total Amount </p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-money-bill"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$total->count()}}</h3>

                            <p>Total Donations</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-sort-numeric-up"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Education support</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Current Victims of Insurgence</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">OverView</h4>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover dataTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Donation Category</th>
                                    <th>Amount</th>
                                    <th>Method of Payment</th>
                                    <th>Date</th>
                                    <th>Print</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donate as $temp)
                                <tr>
                                    <td>{{$temp->receipt_no}}</td>
                                    <td>{{$temp->category}}</td>
                                    <td>{{$temp->amount}}</td>
                                    <td>{{$temp->channel}}</td>
                                    <td>{{$temp->created_at}}</td>
                                    <td><a class="btn btn-info" href="{{route('donate.show',$temp->id)}}">
                                            <i class="fa fa-print"></i>
                                        </a></td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
@section('scripts')

    {{--<script src="{{asset('/js/jquery.min.js')}}"></script>--}}

    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@stop
