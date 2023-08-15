@extends('finance.finance_dashboard')
@section('finance')
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
                    <a class="pt-1px d-none d-md-block text-body" href="#">{{  $dlfcases->name }}</a>
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
                  <h6 class="card-title mb-0">ID</h6>
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
                <p>{{   $dlfcases->id  }}</p>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Name</label>
                  <p class="text-muted">{{  $dlfcases->name }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email</label>
                  <p class="text-muted"> {{$dlfcases->email}}</p>
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
                          <p>Salary</p>
                        </div>
                      </div>
                      
                      <div class="dropdown">
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mb-3 tx-14"> {{  $dlfcases->salary  }}</p>
                  </div>
                  
                </div>
              </div>


              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        
                      

                        <div class="ms-2">
                          <p>Position</p>
                        </div>
                      </div>
                      
                      <div class="dropdown">
                        
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="mb-3 tx-14"> {{  $dlfcases->position  }}</p>
                  </div>
                  
                </div>
              </div>

             




            <!-- ------ -->



              
            </div>
          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->
          <div class="d-none d-xl-block col-xl-3">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card rounded">
                  <div class="card-body">
                    <h6 class="card-title">Employee Status</h6>
                    <div class="row ms-0 me-0">

                    <div class="mt-3">
                      <label class="tx-11 fw-bolder mb-0 text-uppercase">Status</label>
                      <p class="text-muted"> {{ $dlfcases->status }}</p>
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
                    <h6 class="card-title">Date</h6>

                    <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center hover-pointer">										
                        <div class="ms-2">
                          <p>Joined</p>
                          <p class="tx-11 text-muted"> {{  $dlfcases->created_at }}</p>
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