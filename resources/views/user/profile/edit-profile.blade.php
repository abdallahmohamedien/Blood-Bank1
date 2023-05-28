@extends('user.layouts.master')
@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="box-title">Edit Profile Information</h4>
                            <a href="{{ route('profile.index', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-bell"></i>View Profile</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8 offset-2">
                                    <form action="{{ route('profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Blood</label>
                                            <select  name="blood" class="form-control">
                                                <option value="">Select Your Blood</option>
                                                <option value="A+" {{ $user->blood == 'A+'? 'selected': '' }} >A+</option>
                                                <option value="A-" {{ $user->blood == 'A-'? 'selected': '' }}>A-</option>
                                                <option value="B+" {{ $user->blood == 'B+'? 'selected': '' }}>B+</option>
                                                <option value="B-" {{ $user->blood == 'B-'? 'selected': '' }}>B-</option>
                                                <option value="O+" {{ $user->blood == 'O+'? 'selected': '' }}>O+</option>
                                                <option value="O-" {{ $user->blood == 'O-'? 'selected': '' }}>O-</option>
                                                <option value="AB+" {{ $user->blood == 'AB+'? 'selected': '' }}>AB+</option>
                                                <option value="AB-" {{ $user->blood == 'AB-'? 'selected': '' }}>AB-</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="number" name="phone" class="form-control" value="{{ $user->phone }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">District</label>
                                            <input type="text" name="district" class="form-control" value="{{ $user->district }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Date Of Birth</label>
                                            <input type="date" name="date" class="form-control" value="{{ $user->date_of_birth }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Profile</label>
                                            <input type="file" name="photo" class="form-control">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>    

@endsection