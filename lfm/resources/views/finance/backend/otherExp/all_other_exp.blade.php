@extends('finance.finance_dashboard')
@section('finance')


<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
            
						<!-- <li class="breadcrumb-item"><a href="#">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Data Table</li> -->
					</ol>
				</nav>
        <a href="{{ route('add.exp')}}" class="btn btn-inverse-warning"> Add </a>
        
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Other Expenses</h6>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Case ID</th>
                        <th>Expenditure</th>
                        <th>Amount</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                    @foreach($allexp as $key => $item)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->Expenditure}}</td>
                        <td>{{ $item->Amount }}</td>
                        
                        <td>
                <!-- <a href="{{ route('add.exp', $item->id)}}" class="btn btn-inverse-warning"> Add </a> -->
                
                
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