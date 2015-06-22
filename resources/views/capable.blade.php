@extends('app')

@section('htmlheader_title')
    Kkita
@endsection
@section('contentheader_title')
    Kkita
@endsection
@section('contentheader_description')
    We are capable of more
@endsection


@section('main-content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in for real!
                    {{session('id')}}
				</div>

                {{--<div class="row">--}}
                    {{--<div class="col-lg-3 col-xs-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-aqua">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>150</h3>--}}
                                {{--<p>New Orders</p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-bag"></i>--}}
                            {{--</div>--}}
                            {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div><!-- ./col -->--}}
                    {{--<div class="col-lg-3 col-xs-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-green">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>53<sup style="font-size: 20px">%</sup></h3>--}}
                                {{--<p>Bounce Rate</p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-stats-bars"></i>--}}
                            {{--</div>--}}
                            {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div><!-- ./col -->--}}
                    {{--<div class="col-lg-3 col-xs-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-yellow">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>44</h3>--}}
                                {{--<p>User Registrations</p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-person-add"></i>--}}
                            {{--</div>--}}
                            {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div><!-- ./col -->--}}
                    {{--<div class="col-lg-3 col-xs-6">--}}
                        {{--<!-- small box -->--}}
                        {{--<div class="small-box bg-red">--}}
                            {{--<div class="inner">--}}
                                {{--<h3>65</h3>--}}
                                {{--<p>Unique Visitors</p>--}}
                            {{--</div>--}}
                            {{--<div class="icon">--}}
                                {{--<i class="ion ion-pie-graph"></i>--}}
                            {{--</div>--}}
                            {{--<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
                        {{--</div>--}}
                    {{--</div><!-- ./col -->--}}
                {{--</div>--}}
			</div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>99</h3>
                        <p>Redox</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-edit"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->


            {{--<div class="box box-solid bg-teal-gradient">--}}
                {{--<div class="box-header">--}}
                    {{--<i class="fa fa-th"></i>--}}
                    {{--<h3 class="box-title">Sales Graph</h3>--}}
                    {{--<div class="box-tools pull-right">--}}
                        {{--<button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>--}}
                        {{--<button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="box-body border-radius-none">--}}
                    {{--<div class="chart" id="line-chart" style="height: 250px;"></div>--}}
                {{--</div><!-- /.box-body -->--}}
                {{--<div class="box-footer no-border">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">--}}
                            {{--<input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC"/>--}}
                            {{--<div class="knob-label">Mail-Orders</div>--}}
                        {{--</div><!-- ./col -->--}}
                        {{--<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">--}}
                            {{--<input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC"/>--}}
                            {{--<div class="knob-label">Online</div>--}}
                        {{--</div><!-- ./col -->--}}
                        {{--<div class="col-xs-4 text-center">--}}
                            {{--<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC"/>--}}
                            {{--<div class="knob-label">In-Store</div>--}}
                        {{--</div><!-- ./col -->--}}
                    {{--</div><!-- /.row -->--}}
                {{--</div><!-- /.box-footer -->--}}
            {{--</div>--}}
		</div>

	</div>
</div>
@endsection
