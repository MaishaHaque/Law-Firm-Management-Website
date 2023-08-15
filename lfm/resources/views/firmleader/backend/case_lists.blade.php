@extends('firmleader.firmleader_dashboard')
@section('firmleader')


<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page">Case List</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                
               
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Client_Name</th>
                       
                        <th>Assigned_Lawyer_1_ID</th>
                        <th>Assigned_Lawyer_2_ID</th>
                        <th>Status<th>
                      </th>
                    </thead>
                    <tbody>
                      @foreach($value as $key => $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->Client_Name}}</td>
                        
                        <td>{{ $item->Assigned_Lawyer_1_ID}}</td>
                        <td>{{ $item->Assigned_Lawyer_2_ID}}</td>
                        <td>{{ $item->status}}</td>
                        <td>
        <a href="{{ route('edit.cases',$item->id)}}" class="btn btn-inverse-warning">Edit</a>
        

        
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>










@endsection