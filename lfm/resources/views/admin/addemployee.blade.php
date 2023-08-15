<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Lawfirm</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <!-- Additional CSS styles -->
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet" />

    <!-- Background Image CSS -->
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1528747008803-f9f5cc8f1a64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGxhd3llcnxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;

        }
        /* Add this style for sticky footer */
        .content {
            flex: 1;
        }
        .hidden-dropdown {
            display: none;
            }

    </style>
</head>
<body>
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-4">
                    <h1 class="display-7 fw-bold">Add/Update Employee</h1>
                    <form id="addEmployeeForm" method="POST" action="{{ route('admin.addEmployee') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="actionType" class="font-semibold">Choose Action:</label>
                            <select id="actionType" name="actionType" class="border rounded p-2">
                                <option value="add">Add New Employee</option>
                                <option value="update">Update Existing Employee</option>
                            </select>
                        </div>

                        <!-- Hidden dropdown for updating existing employee -->
                        <div id="selectEmployeeDiv" class="mb-4 hidden-dropdown">
                            <label for="employeeName" class="font-semibold">Select Employee:</label>
                            <select id="employeeName" name="employeeName" class="border rounded p-2">
                                <option value="" selected disabled>Select an Employee</option>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="employeeNameInput" class="font-semibold">Employee Name:</label>
                            <input type="text" id="employeeNameInput" name="employeeNameInput" class="border rounded p-2">
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="font-semibold">Phone:</label>
                            <input type="text" id="phone" name="phone" class="border rounded p-2">
                        </div>
                        <div class="mb-4">
                            <label for="address" class="font-semibold">Address:</label>
                            <input type="text" id="address" name="address" class="border rounded p-2">
                        </div>
                        <div class="mb-4">
                            <label for="role" class="font-semibold">Role:</label>
                            <input type="text" id="role" name="role" class="border rounded p-2">
                        </div>
                        <div class="mb-4">
                            <label for="position" class="font-semibold">Position:</label>
                            <input type="text" id="position" name="position" class="border rounded p-2">
                        </div>
                        <button type="submit" class="btn btn-primary">Add/Update Employee</button>
                    </form>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if($errors->has('employeeNameInput') || $errors->has('phone') || $errors->has('address') || $errors->has('role') || $errors->has('position'))
                    <div class="alert alert-danger">
                        All fields must be entered to add a new employee.
                    </div>
                @endif
            </div>
        </div>
    </header>
</body>
<script>
    const actionTypeDropdown = document.getElementById('actionType');
    const selectEmployeeDiv = document.getElementById('selectEmployeeDiv');
    const employeeNameInput = document.getElementById('employeeNameInput');
    const employeeNameDropdown = document.getElementById('employeeName');
    const addEmployeeForm = document.getElementById('addEmployeeForm');

    actionTypeDropdown.addEventListener('change', function() {
        if (this.value === 'update') {
        selectEmployeeDiv.classList.remove('hidden-dropdown');
        employeeNameInput.classList.add('hidden-input');
        employeeNameInput.value = ''; // Clear the input value
        employeeNameDropdown.required = true;
        employeeNameInput.required = false;
        
        } else if (this.value === 'add') {
            selectEmployeeDiv.classList.add('hidden-dropdown');
            employeeNameInput.classList.remove('hidden-input');
            employeeNameInput.setAttribute('name', 'employeeNameInput'); // Add input to form submission
            employeeNameDropdown.required = false;
            employeeNameInput.required = true;
            employeeNameDropdown.selectedIndex = 0; // Reset the selected index
        }
    });

    employeeNameDropdown.addEventListener('change', function() {
    const selectedEmployeeId = this.value;
    
    if (selectedEmployeeId) {
        addEmployeeForm.action = "{{ route('admin.addEmployee') }}" + "?employeeName=" + selectedEmployeeId;
    } else {
        addEmployeeForm.action = "{{ route('admin.addEmployee') }}";
    }
});

</script>
</html>