@extends('larasnap::layouts.app', ['class' => 'employee-index'])
@section('title','employee Management')
@section('content')
<!-- Page Heading  Start-->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Employee</h1>
</div>
<!-- Page Heading End-->				  
<!-- Page Content Start-->				  
<div class="row">
   <div class="col-xl-12">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="card-body">
				<form  method="POST" action="{{ route('employee.index') }}" id="list-form" class="form-inline my-2 my-lg-0" autocomplete="off">
                    @method('POST')
                    @csrf
			   <div class="col-md-2 pad-0">
            @canAccess('employee.create')
                        <a href="{{ route('employee.create') }}" title="Add New Employee" class="btn btn-primary btn-sm"><i aria-hidden="true" class="fa fa-plus"></i> Add New Employee
                        </a>
            @endcanAccess
			   </div>
				<!-- list filters -->
				<div class="col-md-10 filters">
					@include('larasnap::list-filters.employee')
				</div>	
				<!-- list filters -->
               <br> <br> 
               <div class="table-responsive">
                  <table class="table">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>email</th>
                           <th>Designation</th>
                           <th>Profile Image</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
					@forelse($employees as $employee)	
                        <tr>
                           <td>{{ $employee->id }}</td>
                           <td>{{ $employee->name }}</td>
                           <td>{{ $employee->email }}</td>
                           <td>{{ $employee->designation }}</td>
                           <td><img  src="{{asset('/storage/image/'.$employee->profile_image)}}" width="100px" height="100px"></td>
                           <td>
						       @showData('employee', $employee->name)
                               @canAccess('employee.edit')
							  <a href="{{ route('employee.edit', $employee->id) }}" title="Edit Employee"><button class="btn btn-primary btn-sm" type="button"><i aria-hidden="true" class="fa fa-pencil-square-o"></i></button></a>
                               @endcanAccess
                              
                               @canAccess('employee.destroy')
                               <a href="#" onclick= "return individualDelete('{{ $employee->id }}')" title="Delete Employee"><button class="btn btn-danger btn-sm" type="button"><i aria-hidden="true" class="fa fa-trash"></i></button></a>
                               @endcanAccess
							   @endshowData
                           </td>
                        </tr>
						@empty
						<tr>
							<td class="text-center" colspan="12">No Role found!</td>
						</tr>
						@endforelse

                     </tbody>
                  </table>
                  <div class="pagination">
					
				  </div>
               </div>
			   </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Page Content End-->				  
@endsection