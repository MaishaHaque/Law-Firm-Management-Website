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
        .hidden-button {
        display: none;
    }

    .button-container {
        display: flex;
        justify-content: center;
    }
    </style>
</head>
<body>
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-4">
                    <h1 class="display-7 fw-bold">Manage and Assign Rooms</h1>
                    <form action="{{ route('admin.assignRoom') }}" method="POST">
                        @csrf
                    <div class="mb-4">
                        <label for="roomName" class="font-semibold">Select a Room:</label>
                        <select id="roomName" name="roomName" class="border rounded p-2">
                            <option value="" selected disabled>Select a Room</option>
                            @foreach ($availableRooms as $room)
                                @if ($room->assign_state == 0)
                                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                                @else
                                    <option value="{{ $room->id }}">{{ $room->name }} (Booked)</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div id="assignForSection" class="mb-4 hidden-dropdown" style="display: none;">
                        <label for="assignFor" class="font-semibold">Assign For:</label>
                        <input type="text" id="assignFor" name="assignFor" class="border rounded p-2">
                    </div>
                    <div id="eventDateSection" class="mb-4 hidden-dropdown" style="display: none;">
                        <label for="eventDate" class="font-semibold">Event Date:</label>
                        <input type="date" id="eventDate" name="eventDate" class="border rounded p-2">
                    </div>

                    <button type="submit" id="assignRoomButton" class="btn btn-primary">Assign Room</button>
                    <button type="button" id="unassignRoomButton" class="btn btn-secondary hidden-dropdown">Unassign Room</button>
                    </form>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </header>
</body>

<script>
    const roomNameDropdown = document.getElementById('roomName');
    const assignForSection = document.getElementById('assignForSection');
    const eventDateSection = document.getElementById('eventDateSection');
    const assignRoomButton = document.getElementById('assignRoomButton');
    const unassignRoomButton = document.getElementById('unassignRoomButton');
    const buttonContainer = document.querySelector('.button-container');

    roomNameDropdown.addEventListener('change', function() {
        const selectedRoom = this.options[this.selectedIndex].text;

        if (selectedRoom.includes('(Booked)')) {
            assignForSection.style.display = 'none';
            eventDateSection.style.display = 'none';
            assignRoomButton.classList.add('hidden-button');
            unassignRoomButton.classList.remove('hidden-button');
        } else {
            assignForSection.style.display = 'block';
            eventDateSection.style.display = 'block';
            assignRoomButton.classList.remove('hidden-button');
            unassignRoomButton.classList.add('hidden-button');
        }
    });

    unassignRoomButton.addEventListener('click', function() {
        const selectedRoomId = roomNameDropdown.value;

        if (selectedRoomId) {
            window.location.href = "{{ route('admin.unassignRoom') }}" + "?roomName=" + selectedRoomId;
        }
    });
</script>





</html>

