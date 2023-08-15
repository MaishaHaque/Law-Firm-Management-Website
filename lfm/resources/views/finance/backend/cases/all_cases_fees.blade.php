@extends('finance.finance_dashboard')
@section('finance')


<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
            
						<!-- <li class="breadcrumb-item"><a href="#">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Data Table</li> -->
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Case Fees</h6>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Case ID</th>
                        <th>Client Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    @foreach($afcases as $key => $item)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->Client_Name}}</td>
                        <td class="btn btn-outline-primary">{{ $item->Payment_Status }}</td>
                        
                        <td>
                <a href="{{ route('detailsfees.case', $item->id)}}" class="btn btn-inverse-info"> Details </a>
                <a href="{{ route('editfees.case', $item->id)}}" class="btn btn-inverse-warning"> Update </a>
                
                
                        </td>
                      </tr>
                    @endforeach()  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>

@endsection