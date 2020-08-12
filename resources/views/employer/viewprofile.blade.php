@extends('layouts.masters')

@section('title')
   Employer show| funda of web IT
@endsection

@section('page-wrapper')

<div class="page-wrapper">
    <div class="row">
            <div class="container-fluid">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Employer Show</h5>
                            </div>
                            <table class="table" style="margin-right:500px;">
                                  <thead>
                                    <tr>
                                     
                                      <th scope="col">id</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Password</th>
                                      <th scope="col">Fname</th>
                                      <th scope="col">Secondname</th>
                                      <th scope="col">Lastname</th>
                                      <th scope="col">Age</th>
                                      <th scope="col">Number</th>
                                     
                                    </tr>
                                  </thead>
                                  @if(isset($employers) && count($employers) >0)
                                  @foreach($employers as $employer)
                                  <tbody>
                                        <tr>
                                       
                                            <th scope="row">{{$employer->id}}</th>
                                            <td>{{$employer->email}}</td>
                                            <td>{{$employer->password}}</td>
                                            <td>{{$employer->firstname}}</td>
                                            <td>{{$employer->secondname}}</td>
                                            <td>{{$employer->lastname}}</td>
                                            <td>{{$employer->age}}</td>
                                            <td>{{$employer->number}}</td>
                                         
                                        </tr>
                                        
                                        @endforeach 
            
                                        @endif 
                                      </tbody>
                                      
                                
                                  <thead>
                                      
                                      <tr>
                                            <th scope="col">Address</th>
                                            <th scope="col">Companyname</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">Reference</th>
                                            <th scope="col">purpose</th>
                                            <th scope="col">View</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    @if(isset($employers) && count($employers) >0)
                                    @foreach($employers as $employer)
                                  <tbody>
                                    <tr>
                                
                                   
                                          <th scope="row">{{$employer->address}}</th>
                                          <td>{{$employer->companyname}}</td>
                                          <td>{{$employer->country}}</td>
                                          <td>{{$employer->reference}}</td>
                                          <td>{{$employer->purpose}}</td>
                                          <td>
                                        <a href='/employer/{{$employer->id}}' class="btn btn-success">View</a>
                                          </td>
                                          <td>
                                          <a href='/employer/{{$employer->id}}/edit' class="btn btn-primary">Edit</a>
                                          </td>
                                          <td>
                                          <form action="{{ route('employer.destroy',$employer->id) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                            
                                            </form>
                                        </td>
                                       
                                   
                                    </tr>
                                    </tbody>
                                  @endforeach 
            
                                  @endif 
                            </table>
                        </div>
                    </div>
                        
                    </div>
                </div>
</div>
    @endsection
    @section('scripts')
        
    @endsection