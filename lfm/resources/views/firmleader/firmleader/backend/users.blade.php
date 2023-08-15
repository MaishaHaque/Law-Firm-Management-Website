@extends('firmleader.firmleader_dashboard')
@section('firmleader')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page">Personnel</li>
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
                        <th>Name</th>
                        <th>User_Name</th>
                        <th>Email<th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Assigned_cases</th>
                        <th>Status<th>
                      </th>
                    </thead>
                    <tbody>
                      @foreach($data as $key => $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->username}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->phone}}</td>
                        <td>{{ $item->role}}</td>
                        <td>{{ $item->assigned_cases}}</td>
                        <td>{{ $item->status}}</td>
                        
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