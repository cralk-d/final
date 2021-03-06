@extends('layouts.app')
@section('content')
    <div class="container-fluid col-md-11">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-info card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img src="{{ $user->profile->profileImage()}}" class="profile-user-img img-fluid img-circle w-50" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{ $user->name }}</h3>
                        <p class="text-muted text-center">{{ $user->role }}</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Posts</b> <a class="float-right">{{ $user->posts->count() }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                        </ul>
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>
                </div>

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>

                    <div class="card-body">
                        <strong><img src="../icons/phone.svg" height="24" width="24"> Mobile number</strong>
                        <hr>
                        <p class="text-muted">
                            {{ $user->profile->phone ?? 'N/A'}}
                        </p>

                        <strong><img src="../icons/geo.svg" height="24" width="24"> Address</strong>
                        <hr>
                        <p class="text-muted">{{ $user->profile->address ?? 'N/A'}}</p>

                        <strong><img src="../icons/star.svg" height="24" width="24"> Rate</strong>
                        <hr>
                        <p class="text-muted">
                            {{ $user->profile->rate ?? 'N/A'}}
                        </p>

                        <strong><img src="../icons/file-text.svg" height="24" width="24" class="mr-1">Description</strong>
                        <hr>
                        <p class="text-muted">{{ $user->profile->description ?? 'N/A'}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        @can('update', $user->profile)
                            <a href="/p/create" class="btn btn-primary float-left">
                                <img src="../../icons/plus-circle.svg"> Add Post</a>
                        @endcan
                        @can('update', $user->profile)
                            <a href="/profile/{{$user->id}}/edit" class="btn btn-primary float-right"> <img src="../../icons/pencil-square.svg"> Edit Profile</a>
                        @endcan
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="row pt-5">
                            @foreach( $user->posts as $post)
                                <div class="container col-md-4">
                                    <a href="/p/{{ $post->id }}">
                                        <img class="img-fluid mb-3" src="/storage/{{$post->image}}" alt="Photo">
                                    </a>
                                    <div class="row pt-2">
                                        <p class="text-muted">
                                            {{ $post->description}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
