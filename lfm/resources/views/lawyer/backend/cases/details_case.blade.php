@extends('lawyer.lawyer_dashboard')
@section('lawyer')
<div class="page-content">

        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="position-relative">
                
                <div class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                  
                  
                </div>
              </div>
              <div class="d-flex justify-content-center p-3 rounded-bottom">
                <ul class="d-flex align-items-center m-0 p-0">
                  <!--<li class="d-flex align-items-center active">
                    <i class="me-1 icon-md text-primary" data-feather="columns"></i>
                    <a class="pt-1px d-none d-md-block text-primary" href="#">Timeline</a>
                  </li>-->
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="user"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">{{  $dcases->Client_Name }}</a>
                  </li>

                  <li class="ms-3 ps-3 border-start d-flex align-items-center"> </li>
                  
                  <!--
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="users"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Friends <span class="text-muted tx-12">3,765</span></a>
                  </li>
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="image"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Photos</a>
                  </li>
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="video"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Videos</a>
                  </li>
                  -->
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row profile-body">


          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h6 class="card-title mb-0">Case ID</h6>
                  <!-- 
                  <div class="dropdown">
                    <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="git-branch" class="icon-sm me-2"></i> <span class="">Update</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View all</span></a>
                    </div>
                  </div>
                  -->
                </div>
                <p>{{   $dcases->id  }}</p>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Name</label>
                  <p class="text-muted">{{  $dcases->Client_Name }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email</label>
                  <p class="text-muted"> {{$dcases->Client_Email}}</p>
                </div>
                <!--
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">me@nobleui.com</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
                  <p class="text-muted">www.nobleui.com</p>
                </div>
                <div class="mt-3 d-flex social-links">
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="github"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="twitter"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="instagram"></i>
                  </a>
                </div>
                -->
              </div>
            </div>
          </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-6 middle-wrapper">
            <div class="row">


              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        
                      

                        <div class="ms-2">
                          <p>Opposition</p>
                        </div>
                      </div>
                      
                      <div class="dropdown">
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mb-3 tx-14"> {{  $dcases->Opposition  }}</p>
                  </div>
                  
                </div>
              </div>


              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        
                      

                        <div class="ms-2">
                          <p>Opposition Lawyer</p>
                        </div>
                      </div>
                      
                      <div class="dropdown">
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mb-3 tx-14"> {{  $dcases->Opposition_Lawyer  }}</p>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        
                      

                        <div class="ms-2">
                          <p>Judge</p>
                        </div>
                      </div>
                      
                      <div class="dropdown">
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mb-3 tx-14"> {{  $dcases->Judge  }}</p>
                  </div>
                  
                </div>
              </div>





              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        
                      

                        <div class="ms-2">
                          <p>Witness</p>
                        </div>
                      </div>
                      
                      <div class="dropdown">
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mb-3 tx-14"> {{  $dcases->Witness  }}</p>
                  </div>
                  
                </div>
              </div>





              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        
                      

                        <div class="ms-2">
                          <p>Files</p>
                        </div>
                      </div>
                      
                      <div class="dropdown">
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mb-3 tx-14"> {{  $dcases->Files  }}</p>
                  </div>
                  
                </div>
              </div>



              
            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
          <div class="d-none d-xl-block col-xl-3">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-body">
                    <h6 class="card-title">Assigned Lawyers</h6>
                    <div class="row ms-0 me-0">

                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">Lawyer 1</label>
                      <p class="text-muted"> {{ $dcases->Assigned_Lawyer_1_ID }}</p>
                    </div>

                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">Lawyer 2</label>
                      <p class="text-muted"> {{ $dcases->Assigned_Lawyer_2_ID }}</p>
                    </div>


                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">Paralegal</label>
                      <p class="text-muted"> {{ $dcases->Paralegal_ID  }}</p>
                    </div>
                      <!--
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-2">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-0">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-0">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      <a href="javascript:;" class="col-md-4 ps-1 pe-1">
                        <figure class="mb-0">
                          <img class="img-fluid rounded" src="https://via.placeholder.com/96x96" alt="">
                        </figure>
                      </a>
                      -->
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-body">
                    <h6 class="card-title">Dates</h6>

                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center hover-pointer">										
                        <div class="ms-2">
                          <p>Next Court Date</p>
                          <p class="tx-11 text-muted"> {{  $dcases->Next_Court_Date }}</p>
                        </div>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center hover-pointer">										
                        <div class="ms-2">
                          <p>Opening Date</p>
                          <p class="tx-11 text-muted"> {{  $dcases->Opening_Date }}</p>
                        </div>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center hover-pointer">										
                        <div class="ms-2">
                          <p>Closing Date</p>
                          <p class="tx-11 text-muted"> {{  $dcases->Closing_Date }}</p>
                        </div>
                      </div>
                    </div>


                    


                    

                  </div>
                </div>
              </div>



              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-body">
                    <h6 class="card-title">Status</h6>

                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center hover-pointer">										
                        <div class="ms-2">
                  
                          <p class="tx-11 text-muted"> {{  $dcases->Assign_Status }}</p>
                        </div>
                      </div>
                    </div>


                    


                    


                    

                  </div>
                </div>
              </div>




            </div>
          </div>
          <!-- right wrapper end -->
        </div>

			</div>
<!-- ============================================================================================ -->


<script type="text/javascript">
    $(document).ready(function(){
        $("#image").change(function(e){
            var reader = new FileReader();
            reader.onload =function(e){
                $('#showImage').attr('src',e.target.result);

            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
    
</script>





@endsection