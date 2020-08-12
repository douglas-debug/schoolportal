@extends('layouts.master')

@section('title')
    Register role Edit| funda of web IT
@endsection

@section('page-wrapper')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-header">
                            <h1>Edit Role Register For Users</h1>
                        </div>
                <div class="card-body">
                <form action="/role_register_update/{{$users->id}}" method="POST">
                      {{csrf_field()}}
                      {{method_field('PUT')}}
                        <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{$users->name}}" placeholder="First Name Here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email" value="{{$users->email}}" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 text-right control-label col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="mobile_number" value="{{$users->mobile_number}}"placeholder=" Enter your Phone Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-sm-3 text-right control-label col-form-label">City</label>
                                <div class="col-sm-9">
                                 
                                    <select name="city" style="height:50px;width:680px;">
                                        <?php
                                        if ( $users->city != ""){
                                            echo "<option selected = 'selected'  value='{{ $users->city}}'> $users->city</option>";
                                        }
                                    ?>
                                    <option name="city">London UK</option>
                                    <option name="city">Newyork, USA</option>
                                    <option name="city">Seoul, Korea</option>
                                    <option name="city">Beijing, China</option>
                                    <option name="city">Lagos, Nigeria</option>
                                    <option name="city">Ibadan, Nigeria</option>
                                    <option name="city">Rivers, Nigeria</option>
                                    <option name="city">Abuja, Nigeria</option>
                                    </select>
                                   
                            </div>  
                                       
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/role_register" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection
<!-- ============================================================== -->
