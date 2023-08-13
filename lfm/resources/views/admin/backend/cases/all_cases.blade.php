@extends('admin.admin_dashboard')
@section('admin')


<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                <a href="{{  route('add.case') }}" class="btn btn-inverse-info"> Add Case </a>
						<!-- <li class="breadcrumb-item"><a href="#">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Data Table</li> -->
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Cases</h6>
                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Case ID</th>
                        <th>Client Name</th>
                        <th>Assigned Lawyer 1 ID</th>
                        <th>Assigned Lawyer 2 ID</th>
                        <th>Paralegal ID</th>
                        <th>Opening Date</th>
                        <th>Closing Date</th>
                        <th>Files</th>
                        <th>Judge</th>
                        <th>Opposition Lawyer</th>
                        <th>Next Court Date</th>
                        <th>Opposition</th>
                        <th>Witness</th>
                      </tr>
                    </thead>
                    <tbody>


                    @foreach($acases as $key => $item)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->Client_Name}}</td>
                        <td>{{ $item->Assigned_Lawyer_1_ID}}</td>
                        <td>{{ $item->Assigned_Lawyer_2_ID}}</td>
                        <td>{{ $item->Paralegal_ID}}</td>
                        <td>{{ $item->Opening_Date}}</td>
                        <td>{{ $item->Closing_Date}}</td>
                        <td>{{ $item->Files}}</td>
                        <td>{{ $item->Judge}}</td>
                        <td>{{ $item->Opposition_Lawyer}}</td>
                        <td>{{ $item->Next_Court_Date}}</td>
                        <td>{{ $item->Opposition}}</td>
                        <td>{{ $item->Witness}}</td>
                        <td>
                <a href="{{ route('edit.case', $item->id)}}" class="btn btn-inverse-warning"> Edit </a>
                
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