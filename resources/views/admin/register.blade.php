@extends('layouts.master')

@section('title')
    Register role| funda of web IT
@endsection

@section('page-wrapper')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tables</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
      <div class="card-body">
        @if (session('message'))
          <div class="alert alert-success">
            {{ session('message') }}
          </div>
            @endif
            <h5 class="card-title"> Role Of Register </h5>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        </div>
          
          <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>User Type</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Action</th>
                         

                         
                         
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        @foreach ($users as $row)
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>-{{$row->usertype}}</td>
                        <td>{{$row->email}}</td>
                        <td>@if($row->status == 0)Disapproved @else Approved @endif
                        <button class="btn btn-secondary"><a href="{{route('status',['id' =>$row->id])}}">
                          @if($row->status == 1)Disapproved @else Approved @endif
                        </a></button>
                      </td>
                      <td>
                        <a href="/role_edit/{{$row->id}}" class="btn btn-success fa fa-edit" data-toggle="tut-tip"></a>
                            <form action="/role-delete/{{$row->id}}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE')}}
                                <!--<input type="hidden" name="id" type="">-->
                           <button type="submit" onClick='javascript: return confirm(\"Do you really want to do this\")' 
                           title='Click to Delete' class="btn btn-danger fa fa-trash">Delete</button>
                            </form>           
                          </td> 
                         </tr>
                      @endforeach
                    </tbody>
                  </table>
                     
          </div>

      </div>
  </div>
    
    
    

@endsection

@section('scripts')
    
@endsection