@extends('user.layouts.master')
@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="box-title">Profile Information</h4>
                            <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-bell"></i> Edit Profile</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                @if($user->photo == null)
                                    <img src="{{ asset('/public/images/user.png') }}" alt=".." width="10%">
                                @else
                                    <img src="{{ asset('public/images/avatar' .$user->photo) }}" alt="...">
                                @endif
                                </div>
                                <div class="col-md-8">
                                    <table class="table">
                                        <tr>
                                            <td>Name:</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Blood:</td>
                                            <td>{{ $user->blood }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone:</td>
                                            <td>{{ $user->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Address:</td>
                                            <td>{{ $user->address }}</td>
                                        </tr>
                                        <tr>
                                            <td>District:</td>
                                            <td>{{ $user->district }}</td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth:</td>
                                            <td>{{ $user->date_of_birth }}</td>
                                        </tr>
                                        <tr>
                                            <td>Last Donate Date:</td>
                                            <td>{{ $user->last_donate_date }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>    

@endsection