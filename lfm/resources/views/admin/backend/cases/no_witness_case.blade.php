@extends('admin.admin_dashboard')
@section('admin')


<div class="page-content">


				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">No Witness Cases</h6>
                
                <div class="table-responsive">

                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Case ID</th>
                        <th>Client Name</th>
                        <th>Assigned Lawyer 1 ID</th>
                        <th>Assigned Lawyer 2 ID</th>
                        <th>Witness</th> 
                      </tr>
                    </thead>
                    <tbody>


                    @foreach($nwcases as $key)
                      <tr>
                        <td>{{ $key->id}}</td>
                        <td>{{ $key->Client_Name}}</td>
                        <td>{{ $key->Assigned_Lawyer_1_ID}}</td>
                        <td>{{ $key->Assigned_Lawyer_2_ID}}</td>
                
                
                
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