@extends('cms.templates.admin-cms-master')
@section('title','Admin | Home')

@section('content')


    {{--Main Content --}}
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Dashboard</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('admin.home')}}">Dashboard</a></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->


            <!-- Row -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="sm-data-box">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                <span class="txt-dark block counter"><span class="counter-anim">{{$Total_Bill}}</span></span>
                                                <span class="weight-500 uppercase-font block font-13">Total Bills</span>
                                            </div>
                                            <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                <i class="fa fa-file-text data-right-rep-icon txt-light-grey"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="sm-data-box">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                <span class="txt-dark block counter"><span class="counter-anim">{{$Total_Invoices}}</span></span>
                                                <span class="weight-500 uppercase-font block">Total Invoices</span>
                                            </div>
                                            <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                <i class="fa fa-files-o data-right-rep-icon txt-light-grey"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="sm-data-box">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                <span class="txt-dark block counter"><span class="counter-anim">4,054,876</span></span>
                                                <span class="weight-500 uppercase-font block">Totle Sales</span>
                                            </div>
                                            <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                <i class="ti-shopping-cart data-right-rep-icon txt-light-grey"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="sm-data-box">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                                                <span class="txt-dark block counter"><span class="counter-anim">4,054</span></span>
                                                <span class="weight-500 uppercase-font block">Total Purchase</span>
                                            </div>
                                            <div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
                                                <i class="icon-layers  data-right-rep-icon txt-light-grey"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">sales analytics</h6>
                            </div>
                            <div class="pull-right">
                                <div class="pull-left form-group mb-0 sm-bootstrap-select mr-15">
                                    <select class="selectpicker" data-style="form-control">
                                        <option selected value='1'>Janaury</option>
                                        <option value='2'>February</option>
                                        <option value='3'>March</option>
                                        <option value='4'>April</option>
                                        <option value='5'>May</option>
                                        <option value='6'>June</option>
                                        <option value='7'>July</option>
                                        <option value='8'>August</option>
                                        <option value='9'>September</option>
                                        <option value='10'>October</option>
                                        <option value='11'>November</option>
                                        <option value='12'>December</option>
                                    </select>
                                </div>
                                <a href="#" class="pull-left inline-block full-screen">
                                    <i class="zmdi zmdi-fullscreen"></i>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <ul class="flex-stat mb-10 ml-15">
                                    <li class="text-left auto-width mr-60">
                                        <span class="block">Expense</span>
                                        <span class="block txt-dark weight-500 font-18"><span class="counter-anim">3,24,222</span></span>
                                        <span class="block txt-success mt-5">
												<i class="zmdi zmdi-caret-up pr-5 font-20"></i><span class="weight-500">+15%</span>
											</span>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li class="text-left auto-width mr-60">
                                        <span class="block">Income</span>
                                        <span class="block txt-dark weight-500 font-18"><span class="counter-anim">1,23,432</span></span>
                                        <span class="block txt-success mt-5">
												<i class="zmdi zmdi-caret-up pr-5 font-20"></i><span class="weight-500">+4%</span>
											</span>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                                <div id="e_chart_1" class="" style="height:400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-default card-view sm-data-box-3">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Available Items</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="col-sm-6 pa-0">
										<span id="pie_chart_4" class="easypiechart" data-percent="33">
											<span class="percent block txt-dark weight-500"></span>
											<span class="block txt-success text-center">
												<i class="zmdi zmdi-caret-up pr-5 font-20"></i><span class="weight-500">+33%</span>
											</span>
										</span>
                                </div>
                                <div class="col-sm-6 pr-0">
                                    <ul class="flex-stat mb-15">
                                        <li class="text-left block no-float full-width mb-15">
                                            <span class="block">Total Items</span>
                                            <span class="block txt-dark weight-500  font-18"><span class="counter-anim">600</span></span>
                                            <div class="clearfix"></div>
                                        </li>
                                        <li class="text-left block no-float full-width">
                                            <span class="block">Remaining Items</span>
                                            <span class="block txt-dark weight-500  font-18"><span class="counter-anim">12,432</span></span>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default card-view panel-refresh">
                        <div class="refresh-container">
                            <div class="la-anim-1"></div>
                        </div>
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">top 3 products</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body row">
                                <div class="col-sm-6 pa-0">
                                    <div id="e_chart_2" class="" style="height:185px;"></div>
                                </div>
                                <div class="col-sm-6 pr-0 pt-25">
                                    <div class="label-chatrs">
                                        <div class="mb-5">
                                            <span class="clabels inline-block bg-orange mr-5"></span>
                                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font">Baverages</span>
                                        </div>
                                        <div class="mb-5">
                                            <span class="clabels inline-block bg-green mr-5"></span>
                                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font">Vegetables</span>
                                        </div>
                                        <div class="mb-5">
                                            <span class="clabels inline-block bg-yellow mr-5"></span>
                                            <span class="clabels-text font-12 inline-block txt-dark capitalize-font">Others</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -->

        </div>
    </div>


@stop
