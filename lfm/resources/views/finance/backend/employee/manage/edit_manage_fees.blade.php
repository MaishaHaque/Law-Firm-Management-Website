@extends('finance.finance_dashboard')
@section('finance')
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

								<h6 class="card-title"> Edit Managing Partner Salary </h6>
                <p class="text-muted mb-3">{{ $emfcases->name }}</p>
								<div class="row mb-3">
                            
								<form method= "POST" action= "{{ route('upmanagefees.case') }}" class="forms-sample" >
									@csrf

                    <input type="hidden" name="id" value="{{ $emfcases->id }}">  

                                    


                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Salary</label>
										<input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror" value="{{ $emfcases->salary }}">
                                        <!-- @error('Files')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Position</label>
										<input type="text" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ $emfcases->position }}">
                                        <!-- @error('Judge')
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