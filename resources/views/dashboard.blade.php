@extends('layouts.app')

@section('content')
    <div class="container-col-md-9">
        <div class="container-fluid col-md-10">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><img src="../icons/person.svg" height="54" width="54"></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Profile</span>
                            <span class="info-box-number"> 10<small>%</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><img src="../icons/people-fill.svg" height="54" width="54"></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Landlords</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><img src="../icons/image.svg" height="54" width="54"></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Posts</span>
                            <span class="info-box-number">760</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><img src="../icons/people.svg" height="54" width="54"></span>
                        <div class="info-box-content">
                            <span class="info-box-text">New Members</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Latest Members</h3>
                            <div class="card-tools">
                                <span class="badge badge-danger">8 New Members</span>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><img src="../icons/dash-square.svg" height="20" width="20">
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><img src="../icons/x-square.svg" height="20" width="20"></button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="../img/user1-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                                <li>
                                    <img src="../img/user8-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Norman</a>
                                    <span class="users-list-date">Yesterday</span>
                                </li>
                                <li>
                                    <img src="../img/user7-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Jane</a>
                                    <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                    <img src="../img/user6-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">John</a>
                                    <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                    <img src="../img/user2-160x160.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander</a>
                                    <span class="users-list-date">13 Jan</span>
                                </li>
                                <li>
                                    <img src="../img/user5-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Sarah</a>
                                    <span class="users-list-date">14 Jan</span>
                                </li>
                                <li>
                                    <img src="../img/user4-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Nora</a>
                                    <span class="users-list-date">15 Jan</span>
                                </li>
                                <li>
                                    <img src="../img/user3-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Nadia</a>
                                    <span class="users-list-date">15 Jan</span>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="">View All Users</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mb-3 bg-warning">
                        <span class="info-box-icon"><i class="fas fa-tag"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Inventory</span>
                            <span class="info-box-number">5,200</span>
                        </div>
                    </div>
                    <div class="info-box mb-3 bg-success">
                        <span class="info-box-icon"><i class="far fa-heart"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Mentions</span>
                            <span class="info-box-number">92,050</span>
                        </div>
                    </div>
                    <div class="info-box mb-3 bg-danger">
                        <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Downloads</span>
                            <span class="info-box-number">114,381</span>
                        </div>
                    </div>
                    <div class="info-box mb-3 bg-info">
                        <span class="info-box-icon"><i class="far fa-comment"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Direct Messages</span>
                            <span class="info-box-number">163,921</span>
                        </div>
                    </div>
                    <div class="info-box mb-3 bg-warning">
                        <span class="info-box-icon"><i class="far fa-comment"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Direct Messages</span>
                            <span class="info-box-number">163,921</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Latest Orders</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Item</th>
                                        <th>Status</th>
                                        <th>Popularity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($orders as $order)
                                                <td><a href="pages/examples/invoice.html">{{ $order->id }}</a></td>
                                                <td>{{ $order->user->name }}</td>
                                                <td><span class="badge badge-success">{{ $order->status}}</span></td>
                                                <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recently Added Products</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <li class="item">
                                    <div class="product-img">
                                        <img src="../img/default-150x150.png" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Samsung TV<span class="badge badge-warning float-right">$1800</span>
                                        </a>
                                        <span class="product-description">
                                    Samsung 32" 1080p 60Hz LED Smart HDTV.
                                </span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <img src="../img/default-150x150.png" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Bicycle<span class="badge badge-info float-right">$700</span></a>
                                        <span class="product-description">26" Mongoose Dolomite Men's 7-speed, Navy Blue.</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <img src="../img/default-150x150.png" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">Xbox One
                                            <span class="badge badge-danger float-right">$350</span>
                                        </a>
                                        <span class="product-description">Xbox One Console Bundle with Halo Master Chief Collection.</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <img src="../img/default-150x150.png" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">PlayStation 4<span class="badge badge-success float-right">$399</span></a>
                                        <span class="product-description">PlayStation 4 500GB Console (PS4)</span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <img src="../img/default-150x150.png" alt="Product Image" class="img-size-50">
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript:void(0)" class="product-title">PlayStation 4<span class="badge badge-success float-right">$399</span></a>
                                        <span class="product-description">PlayStation 4 500GB Console (PS4)</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">View All Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-bottom">
        <strong>Copyright &copy; {{ date('Y')}} <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        <div class="float-right d-none d-sm-inline-block"> <b>Version</b> 3.0.4</div>
    </footer>
@endsection
