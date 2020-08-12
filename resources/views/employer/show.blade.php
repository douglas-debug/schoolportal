@extends('layouts.masters')

@section('title')
   Employer View| funda of web IT
@endsection

@section('page-wrapper')

<div class="page-wrapper">
        <div class="container">
                <div class="row">
                    
                    <div class="col sm-4">
                  <div class="contain-fluid">
               <h1>Employer view profile</h1>
                </div>      
             <h5>{{$employer->email}}</h5>
             <hr>
             <h5>{{$employer->password}}</p>
             <hr>
             <h5>{{$employer->firstname}}</h5>
             <hr>
             <h5>{{$employer->secondname}}</h5>
             <hr>
             <h5>{{$employer->lastname}}</h5>
             <hr> 
             <h5>{{$employer->age}}</h5>
             <hr> 
             <h5>{{$employer->number}}</h5>
             <hr> 
             <h5>{{$employer->address}}</h5>
             <hr> 
             <h5>{{$employer->companyname}}</h5>
             <hr> 
             <h5>{{$employer->country}}</h5>
             <hr> 
             <h5>{{$employer->reference}}</h5>
             <hr> 
             <h5>{{$employer->purpose}}</h5>
             <hr> 
             <small style="color:aquamarine">Date created -{{$employer->created_at}}</small>
             <br>
             <a href="/employer" class="btn btn-primary ">Go Back To Show</a>
                    </div>
                </div>
</div>
@endsection

@section('scripts')
    
@endsection