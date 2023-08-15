@extends('lawyer.lawyer_dashboard')
@section('lawyer')
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

								<h6 class="card-title"> Edit Case </h6>
                            
								<form method= "POST" action= "{{ route('editas.case') }}" class="forms-sample" >
									@csrf

                                    <input type="hidden" name="id" value="{{ $ecases->id }}">

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Client Name</label>
										<input type="text" name="Client_Name" class="form-control @error('Client_Name') is-invalid @enderror" value="{{ $ecases->Client_Name }}">
                                        @error('Client_Name')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
									</div>


                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Files</label>
										<input type="text" name="Files" class="form-control @error('Files') is-invalid @enderror" value="{{ $ecases->Files }}">
                                        <!-- @error('Files')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Judge</label>
										<input type="text" name="Judge" class="form-control @error('Judge') is-invalid @enderror" value="{{ $ecases->Judge }}">
                                        <!-- @error('Judge')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Opposition Lawyer</label>
										<input type="text" name="Opposition_Lawyer" class="form-control @error('Opposition_Lawyer') is-invalid @enderror" value="{{ $ecases->Opposition_Lawyer }}">
                                        <!-- @error('Opposition_Lawyer')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>


                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Next Court Date</label>
										<input type="text" name="Next_Court_Date" class="form-control @error('Next_Court_Date') is-invalid @enderror" value="{{ $ecases->Next_Court_Date }}">
                                        <!-- @error('Next_Court_Date')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>


                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Opposition</label>
										<input type="text" name="Opposition" class="form-control @error('Opposition') is-invalid @enderror" value="{{ $ecases->Opposition }}">
                                        <!-- @error('Opposition')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>


                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Witness</label>
										<input type="text" name="Witness" class="form-control @error('Witness') is-invalid @enderror" value="{{ $ecases->Witness }}">
                                        <!-- @error('Witness')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                  <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Status</label>
										<input type="text" name="Assign_Status" class="form-control @error('Assign_Status') is-invalid @enderror" value="{{ $ecases->Assign_Status }}">
                                         @error('Assign_Status')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
									</div>

                  <!--<div class="mb-3">
										<label class="form-label">Status</label>
                    <div>

                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="Assign_Status" id="Assign_Status" value="{{ $ecases->Assign_Cases }}">
                        <label class="form-check-label" for="Assign_Status1">
                        {{ $ong }}
                        </label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="Assign_Status" id="Assign_Status"  value="{{ $ecases->Assign_Cases }}">
                        <label class="form-check-label" for="Assign_Status" >
                        {{ $comp }}
                        </label>
                      </div> -->


                      
                      
                    </div>
                  </div>
                <!--<div class="mb-3">
									<label class="form-label">Status</label>
									<select class="js-example-basic-single form-select" data-width="100%" name="Assign_Status">
										<option   value="{{ $ecases->Assign_Status }}">{{ $ong }}</option>
										<option   value="{{ $ecases->Assign_Status }}">{{ $comp }}</option>
									</select>
								</div> -->




        

                        
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