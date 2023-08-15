<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class AssignRoomController extends Controller
{
    public function showAssignRoomForm()
    {
        $availableRooms = Room::all();
        return view('admin.assign_room', compact('availableRooms'));
    }

    public function assignRoom(Request $request)
    {
        $roomId = $request->input('roomName');
        $room = Room::find($roomId);

        if ($room) {
            $assignFor = $request->input('assignFor');
            $eventDate = $request->input('eventDate');

            if (empty($assignFor) || empty($eventDate)) {
                return redirect()->back()->with('error', 'Failed to assign room.');
            }

            $room->assign_state = 1;
            $room->assigned_for = $assignFor;
            $room->event_date = $eventDate;
            $room->save();

            return redirect()->back()->with('success', 'Room assigned successfully.');
        }

        return redirect()->back()->with('error', 'Failed to assign room.');
    }

    public function unassignRoom(Request $request)
    {
        $roomId = $request->input('roomName');
        $room = Room::find($roomId);

        if ($room) {
            $room->assign_state = 0;
            $room->assigned_for = null;
            $room->event_date = null;
            $room->save();

            return redirect()->back()->with('success', 'Room unassigned successfully.');
        }

        return redirect()->back()->with('error', 'Failed to unassign room.');
    }
}
