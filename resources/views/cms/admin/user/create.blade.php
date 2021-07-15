@extends('cms.templates.admin-cms-master')
@section('title','Admin | User | Add')

@section('content')

    {{-- Main Content of the page --}}

    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Users / Add user</h5>
                    @if(Session::has('save'))
                        {{ Session::get('save') }}
                    @endif

                    @if(Session::has('delete'))
                        {{ Session::get('delete') }}
                    @endif

                    @if(Session::has('update'))
                        {{ Session::get('update') }}
                    @endif

                    @if(Session::has('error'))
                        {{ Session::get('error') }}
                    @endif
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{route('admin.home')}}">Dashboard</a></li>
                        <li><a href="#"><span>Users</span></a></li>
                        <li class="active"><span>Add User/List of Users</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="contact-list">
                                    <div class="row">
                                        <aside class="col-lg-2 col-md-4 pr-0">
                                            <div class="mt-20 mb-20 ml-15 mr-15">
                                                <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">
                                                    Add new contact
                                                </a>
                                                <!-- Modal -->
                                                <div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myModalLabel">Add New User</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form-horizontal form-material" action="{{route('admin.user.store')}}" method="post" enctype="multipart/form-data">
                                                                    <div class="form-group">
                                                                        {{ csrf_field() }}
                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="text" class="form-control" placeholder="Type name" name="first_name" required>
                                                                            @if($errors->has('first_name'))
                                                                                <div class="error">{{ $errors->first('first_name') }}</div>
                                                                            @endif
                                                                        </div>

                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="text" class="form-control" placeholder="last_name" name="last_name" required>
                                                                            @if($errors->has('last_name'))
                                                                                <div class="error">{{ $errors->first('last_name') }}</div>
                                                                            @endif
                                                                        </div>

                                                                        <div class="col-md-12 mb-20">
                                                                            <select class="form-control" name="Role" required>
                                                                                <option selected disabled>Select role of user</option>
                                                                                @foreach($Roles as $Role)
                                                                                    <option value="{{encrypt($Role->id)}}">{{$Role->role}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            @if($errors->has('Role'))
                                                                                <div class="error">{{ $errors->first('Role') }}</div>
                                                                            @endif
                                                                        </div>

                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="email" class="form-control" placeholder="Email" name="email" required pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" title="Please enter a valid email address!">
                                                                            @if($errors->has('email'))
                                                                                <div class="error">{{ $errors->first('email') }}</div>
                                                                            @endif
                                                                        </div>

                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="password" class="form-control" placeholder="password" name="password" required>
                                                                            @if($errors->has('password'))
                                                                                <div class="error">{{ $errors->first('password') }}</div>
                                                                            @endif
                                                                        </div>

                                                                        <div class="col-md-12 mb-20">
                                                                            <input type="text" class="form-control" placeholder="Phone" name="phone_number" required pattern="^[0][0]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$"
                                                                            title="The phone number must start with 00, country code followed by 10 digits.">
                                                                            @if($errors->has('phone_number'))
                                                                                <div class="error">{{ $errors->first('phone_number') }}</div>
                                                                            @endif
                                                                        </div>

                                                                        <div class="col-md-12 mb-20">
                                                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                                <input type="file" class="upload" name="image">
                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button class="btn btn-success btn-anim"><i class="icon-rocket"></i><span class="btn-text">submit</span></button>
                                                                            <button class="btn btn-danger btn-anim"><i class="fa fa-trash-o"></i><span class="btn-text">cancel</span></button>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                            </div>
                                            <ul class="inbox-nav mb-30">
                                                @foreach($Roles as $role)
                                                <li>
                                                    <a href="#">{{$role->role}} <span class="label label-primary ml-10">{{App\User_role::where('role_id',$role->id)->count()}}</span></a>
                                                </li>
                                              @endforeach
                                            </ul>
                                        </aside>

                                        <aside class="col-lg-10 col-md-8 pl-0">
                                            <div class="panel pa-0">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body  pa-0">
                                                        <div class="table-responsive mb-30">
                                                            <table id="datable_1" class="table  display table-hover mb-30" data-page-size="10">
                                                                <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Name</th>
                                                                    <th>Last_name</th>
                                                                    <th>email Address</th>
                                                                    <th>Phone</th>
                                                                    <th>Role</th>
                                                                    <th>Created at</th>
                                                                    <th>Updated at</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($users as $user)
                                                                <tr>
                                                                    <td>{{$user->id}}</td>
                                                                    <td>{{$user->first_name}}</td>
                                                                    <td>{{$user->last_name}}</td>
                                                                    <td>{{$user->email}}</td>
                                                                    <td>{{$user->phone_number}}</td>
                                                                    <td><span class="label label-danger">{{$user->roles[0]->role}}</span></td>
                                                                    <td>{{$user->created_at}}</td>
                                                                    <td>{{$user->updated_at}}</td>
                                                                    <td><a href="javascript:void(0)" class="text-inverse pr-10" title="Edit" data-toggle="tooltip"><i class="zmdi zmdi-edit txt-warning"></i></a><a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="zmdi zmdi-delete txt-danger"></i></a></td>
                                                                </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>
    </div>

    {{-- End Main Content of the page --}}

@stop
