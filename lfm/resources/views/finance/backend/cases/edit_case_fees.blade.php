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

								<h6 class="card-title"> Edit Case Fees </h6>
                <p class="text-muted mb-3">{{ $efcases->Client_Name }}</p>
								<div class="row mb-3">
                            
								<form method= "POST" action= "{{ route('upfees.case') }}" class="forms-sample" >
									@csrf

                    <input type="hidden" name="id" value="{{ $efcases->id }}">  

                                    


                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Total_Fees</label>
										<input type="text" name="Total_Fees" class="form-control @error('Total_Fees') is-invalid @enderror" value="{{ $efcases->Total_Fees }}">
                                        <!-- @error('Files')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Paid</label>
										<input type="text" name="Paid" class="form-control @error('Paid') is-invalid @enderror" value="{{ $efcases->Paid }}">
                                        <!-- @error('Judge')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->
									</div>

                                    <div class="mb-3">
										
										<input type="hidden" name="Due" class="form-control @error('Due') is-invalid @enderror" value="{{ $efcases->Due }}">
                                        <!-- @error('Opposition_Lawyer')
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