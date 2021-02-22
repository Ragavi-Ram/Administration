@extends('larasnap::layouts.app', ['class' => 'employee-edit'])
@section('title','Employee Management')
@section('content')
<!-- Page Heading  Start-->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Edit Employee</h1>
</div>
<!-- Page Heading End-->				  
<!-- Page Content Start-->				  
<div class="row">
   <div class="col-xl-12">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="card-body">
               <a href="{{ route('employee.index') }}" title="Back to Role List" class="btn btn-warning btn-sm"><i aria-hidden="true" class="fa fa-arrow-left"></i> Back to Employee List
               </a> 
               <br> <br> 
               <form method="POST" action="{{ route('employee.update', $employee->id) }}" class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
			   @csrf
			   @method('PUT')
               <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="name" class="control-label">Name<small class="text-danger required">*</small></label> 
                           <input name="name" type="text" id="name" class="form-control lower-case" value="{{ old('name', $employee->name) }}">
                           @error('name')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror 							
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="email" class="control-label">email<small class="text-danger required">*</small></label> 
                           <input name="email" type="text" id="email" class="form-control" value="{{ old('email', $employee->email) }}">
                           @error('email')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror 							
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="designation" class="control-label">Designation<small class="text-danger required">*</small></label> 
                           <input name="designation" type="text" id="designation" class="form-control" value="{{ old('designation', $employee->designation) }}">
                           @error('designation')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror 							
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="file" class="control-label">Profile Image<small class="text-danger required">*</small></label> 
                           <input name="file" type="file" id="designation" class="form-control" value="{{ old('file') }}">
                           <div class='col-lg-6'><img target="_blank" src="{{ asset('storage/image/'.$employee['profile_image']) }}"style="max-width:60px;"/></div>
                           @error('file')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror 							
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <input type="submit" value="Update" class="btn btn-primary">
                        </div>
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