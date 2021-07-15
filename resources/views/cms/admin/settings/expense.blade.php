@extends('cms.templates.admin-cms-master')
@section('title','Admin | Expense | Add')

@section('content')




    {{-- Main Content  --}}
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Add Expense Type</h5>
                    @if(Session::has('delete'))
                        {{ Session::get('delete') }}
                    @endif

                    @if(Session::has('save'))
                        {{ Session::get('save') }}
                    @endif

                    @if(Session::has('error'))
                        {{ Session::get('error') }}
                    @endif
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('admin.home')}}">Dashboard</a></li>
                        <li><a href="#"><span>Settings</span></a></li>
                        <li class="active"><span>Expense Type</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -> Start getting information of the employee -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <form action="{{route('admin.expense_type.store')}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Expense Type</label>
                                                <input type="text" id="expense_type" name="name" class="form-control" placeholder="Add Expense Type">
                                                @if($errors->has('name'))
                                                    <div class="error">{{ $errors->first('name') }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="pull-right mr-15 clearfix">
                                            <div class="form-group">
                                                <button class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">Insert</span></button>
                                                <button class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">cancel</span></button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="form-wrap">
                                    <table class="table table-hover table-bordered mb-0">
                                        <thead>
                                        <tr>
                                            <th>Types of Expense</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($expenseType as $expenses)
                                        <tr>
                                            <td>{{$expenses->name}}</td>
                                            <td class="text-nowrap"><a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                </a> <a href="{{route('admin.expense_type.destroy', ['id'=>encrypt($expenses->id)])}}" data-toggle="tooltip" data-original-title="Close"><i class="fa fa-close text-danger"></i></a></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row -> End of getting information of the employees -->
        </div>
    </div>
    {{--  End Main Content  --}}
@stop
