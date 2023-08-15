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

								<h6 class="card-title"> Add New Case </h6>
                            
								<form method= "POST" action= "{{ route('store.case') }}" class="forms-sample" >
									@csrf

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Client Name</label>
										<input type="text" name="Client_Name" class="form-control @error('Client_Name') is-invalid @enderror">
                                        @error('Client_Name')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Assigned Lawyer 1 ID</label>
										<input type="text" name="Assigned_Lawyer_1_ID" class="form-control">
                                        <!-- @error('Assigned_Lawyer_1_ID')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Assigned Lawyer 2 ID</label>
										<input type="text" name="Assigned_Lawyer_2_ID" class="form-control" >
                                        <!-- @error('Assigned_Lawyer_2_ID')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Paralegal ID</label>
										<input type="text" name="Paralegal_ID" class="form-control">
                                        <!-- @error('Paralegal_ID')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Opening Date</label>
										<input type="text" name="Opening_Date" class="form-control @error('Opening_Date') is-invalid @enderror">
                                        @error('Opening_Date')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Closing Date</label>
										<input type="text" name="Closing_Date" class="form-control">
                                        <!-- @error('Closing_Date')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Files</label>
										<input type="text" name="Files" class="form-control">
                                        <!-- @error('Files')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Judge</label>
										<input type="text" name="Judge" class="form-control">
                                        <!-- @error('Judge')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Opposition Lawyer</label>
										<input type="text" name="Opposition_Lawyer" class="form-control ">
                                        <!-- @error('Opposition_Lawyer')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>


                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Next Court Date</label>
										<input type="text" name="Next_Court_Date" class="form-control">
                                        <!-- @error('Next_Court_Date')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>


                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Opposition</label>
										<input type="text" name="Opposition" class="form-control">
                                        <!-- @error('Opposition')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>


                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Witness</label>
										<input type="text" name="Witness" class="form-control">
                                        <!-- @error('Witness')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
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