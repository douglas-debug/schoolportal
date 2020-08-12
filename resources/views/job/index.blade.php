@extends('layouts.masters')

@section('title')
   Job show| funda of web IT
@endsection

@section('page-wrapper')

<div class="page-wrapper">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Company</th>
                            <th>Levels</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Phone</th>
                            <th>Skills</th>
                            <th>highest</th>
                            <th>Experience</th>
                            <th>Salary</th>
                            <th>Posted</th>
                            <th>City</th>
                            <th>Due Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @if(isset($jobs) && count($jobs) >0)
                    @foreach($jobs as $job)
                    <tbody>
                        <tr>
                        <td><img  style="width:100px" src="/storage/cover_images/{{$job->cover_image}}"></td>
                            <td>{{$job->company}}</td>
                            <td>{{$job->job_levels}}</td>
                            <td>{{$job->job_title}}</td>
                            <td>{{$job->short_description}}</td>
                            <td>{{$job->phone}}</td>
                            <td>{{$job->skills_requirements}}</td>
                            <td>{{$job->highest_qualification}}</td>
                            <td>{{$job->experience}}</td>
                            <td>{{$job->salary}}</td>
                            <td>{{$job->posted}}</td>
                            <td>{{$job->city}}</td>
                            <td>{{$job->due_date}}</td>
                           
                            
                            <td>
                                
                            <a href='/job/{{$job->id}}' class="fa fa-edit"></a>
                                               
                         <a href='/job/{{$job->id}}/edit' class="fa fa-eye"></a>
                        
                        <form action="{{ route('job.destroy',$job->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fa fa-trash"></button>
                          
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
@endsection

@section('scripts')
    
@endsection                 
                        
                        
                      
                       
        