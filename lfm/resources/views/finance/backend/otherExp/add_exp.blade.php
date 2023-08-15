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

								<h6 class="card-title"> Add New Expense </h6>
                            
								<form method= "POST" action= "{{ route('store.exp') }}" class="forms-sample" >
									@csrf

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Expenditure</label>
										<input type="text" name="Expenditure" class="form-control @error('Client_Name') is-invalid @enderror">
                                        @error('Client_Name')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
									</div>

                                    <div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Amount</label>
										<input type="text" name="Amount" class="form-control">
                                        <!-- @error('Assigned_Lawyer_1_ID')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror -->

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