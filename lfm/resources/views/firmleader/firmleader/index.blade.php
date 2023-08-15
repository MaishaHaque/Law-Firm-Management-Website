@extends('firmleader.firmleader_dashboard')
@section('firmleader')
<div class="page-content">
            @php 
            $id= Auth::user()->id;
            $profileData= App\Models\User::find($id);

            @endphp
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            
            <h9 class="mb-3 mb-md-0">Welcome {{ $profileData->name }} </h9>
          </div>
          <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
              <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
              <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
            </div>
            
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-14 stretch-card">
            <div class="row flex-grow-1">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Total Cases</h6>
                      <div class="dropdown mb-2">
                        
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-12">
                        <h3 class="mb-2">4</h3>
                        <!--<div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+3.3%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div> -->
                      </div>
                      <!--<div class="col-6 col-md-12 col-xl-7">
                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Total Lawyers</h6>
                      <div class="dropdown mb-2">
                        
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-12">
                        <h3 class="mb-2">5</h3>
                        <!--<div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+3.3%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div> -->
                      </div>
                      <!--<div class="col-6 col-md-12 col-xl-7">
                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          
        </div> <!-- row -->


       


        <div class="row">
          <div class="col-lg-8 col-xl-10 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Tasks</h6>
                  
                </div>
                <div class="d-flex flex-column">
                  <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
                    
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Contact Rachel Green</h6>
                        
                      </div>
                      <p class="text-muted tx-13">Dicuss about the upcoming projects</p>
                    </div>
                  </a>


                  <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
            
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Meeting with all lawyers</h6>
                        
                      </div>
                      <p class="text-muted tx-13">Personnel meetinng at 11 am.</p>
                    </div>
                  </a>

                  <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                    
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2">Meet with Maisha Haque</h6>
                        
                      </div>
                      <p class="text-muted tx-13">Attend a client  at 3pm.</p>
                    </div>
                  </a>


                  
                </div>
              </div>
            </div>
          </div>
        </div> <!-- row -->

        

           
			</div>

@endsection