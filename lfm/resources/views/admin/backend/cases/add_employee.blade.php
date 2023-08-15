@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
        <div class="row profile-body">
          <!-- left wrapper start -->
          <!-- left wrapper end -->

          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <!-- Newly added-->
                <div class="card">
              <div class="card-body">

								<h6 class="card-title"> Add New Employee </h6>
                            
								<form method= "POST" action= "{{ route('store.employee') }}" class="forms-sample" >
									@csrf

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Name</label>
										<input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">E-mail</label>
										<input type="text" name="mail" class="form-control">
                                        <!-- @error('Assigned_Lawyer_1_ID')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">User Name</label>
										<input type="text" name="username" class="form-control" >
                                        <!-- @error('Assigned_Lawyer_2_ID')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Role</label>
										<input type="text" name="role" class="form-control">
                                        <!-- @error('Paralegal_ID')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Position</label>
										<input type="text" name="position" class="form-control @error('Opening_Date') is-invalid @enderror">
                                        @error('Opening_Date')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
									</div>

                                    

                                    

                                    

                                   


                                    


                                    







        

                        
									<button type="submit" class="btn btn-primary me-2">Save Changes</button>
									<!-- <button class="btn btn-secondary">Cancel</button> -->
								</form>

              </div>
            </div>

                </div>
              </div>

            </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->

        </div>

</div>






@endsection