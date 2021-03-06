@extends('larasnap::layouts.app', ['class' => 'employee-create'])
@section('title','Employee Management')
@section('content')
<!-- Page Heading  Start-->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Add Employee</h1>
</div>
<!-- Page Heading End-->				  
<!-- Page Content Start-->				  
<div class="row">
   <div class="col-xl-12">
      <div class="card shadow mb-4">
         <div class="card-body">
            <div class="card-body">
               <a href="{{ route('employee.index') }}" title="Back to Permission List" class="btn btn-warning btn-sm"><i aria-hidden="true" class="fa fa-arrow-left"></i> Back to Employee List
               </a> 
               <br> <br> 
               <form method="POST" action="{{ route('employee.store') }}"  class="form-horizontal" autocomplete="off" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="name" class="control-label">Name<small class="text-danger required">*</small></label> 
                           <input name="name" type="text" id="name" class="form-control" value="{{ old('name') }}">
                           @error('name')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror 							
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="label" class="control-label">email<small class="text-danger required">*</small></label> 
                           <input name="email" type="text" id="email" class="form-control" value="{{ old('email') }}">
                           @error('email')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror 							
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="label" class="control-label">Designation<small class="text-danger required">*</small></label> 
                           <input name="designation" type="text" id="designation" class="form-control" value="{{ old('designation') }}">
                           @error('designation')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror 							
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="file" class="control-label">Profile Image<small class="text-danger required">*</small></label> 
                           <input name="file" type="file" id="designation" class="form-control" value="{{ old('file') }}">
                           @error('file')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror 							
                        </div>
                     </div>

                    
                     <div class="col-md-4">
                        <div class="form-group">
                           <input type="submit" value="Save" class="btn btn-primary">
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