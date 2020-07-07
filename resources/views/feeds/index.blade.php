@extends('layouts.app')
@section('content')
    <div class="container col-md-12">
        <div class="row justify-content-center">
            <div class="card col-lg-11">
                <div class="card-header">
                  <h3 class="card-title">User Feedback</h3>
                </div>
                <div class="card-body">
                    <table id="feeds" class="table table-bordered table-striped table-hover">

                        <thead>
                            <tr>
                                <td>Sno</td>
                                <td>Names</td>
                                <td>Email</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $feeds as $feed)
                            <tr>
                                <td> {{ $feed->id }} </td>
                                <td> {{ $feed->user->name }} </td>
                                <td> {{ $feed->user->email }} </td>
                                <td> {{ $feed->created_at }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pt-4">

                        <div class="col-12 d-flex justify-content-center">
                            {{ $feeds->links() }}
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
