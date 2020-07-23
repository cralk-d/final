@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">LIST OF USERS</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="owners" class="table table-bordered table-striped table-hover">
                            <tr>
                                <th>S/No</th>
                                <th>Fullnames</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td> {{$user->profile->phone}}</td>
                                <td>{{$user->role}}</td>
                                <td>
                                    <button class="btn btn-primary"><i class="fas fa-pen"></i> Edit</button>
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button> </td>
                            </tr>
                            
                            @endforeach
                        </table>{!! $users->links() !!}
                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection
