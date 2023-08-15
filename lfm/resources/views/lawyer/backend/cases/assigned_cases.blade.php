@extends('lawyer.lawyer_dashboard')
@section('lawyer')


<div class="page-content">


				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Assigned Cases</h6>
                
                <div class="table-responsive">

                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Case ID</th>
                        <th>Client Name</th>
                      </tr>
                      </tr>
                    </thead>
                    <tbody>


                    @foreach($asscases as $key)
                      <tr>
                        <td>{{ $key->id}}</td>
                        <td>{{ $key->Client_Name}}</td>
                    
                        <td>
                        <a href="{{ route('info.case', $key->id)}}" class="btn btn-inverse-info"> Details </a>
                        <a href="{{ route('edit.case', $key->id)}}" class="btn btn-inverse-warning"> Edit </a>
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