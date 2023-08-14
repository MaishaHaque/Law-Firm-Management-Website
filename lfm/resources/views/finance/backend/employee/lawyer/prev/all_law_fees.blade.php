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
                        <th> ID</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Salary</th>
                        <th>Status</th>

                        
                      </tr>
                    </thead>
                    <tbody>


                    @foreach($alllawfees as $key => $item)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->role }}</td>
                        <td>{{ $item->salary  }}</td>
                        <td class="btn btn-outline-primary">{{ $item->status }}</td>
                        
                        <td>
                <a href="{{ route('detailslawfees.case', $item->id)}}" class="btn btn-inverse-info"> Details </a>
                <a href="{{ route('editlawfees.case', $item->id)}}" class="btn btn-inverse-warning"> Update </a>
                
                
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