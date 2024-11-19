<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        return view('home'); // Render the home page
    }

    public function getStatus()
    {
        
           return response()->json([
            'status' => 'Online',
            'last_updated' => now()->toDateTimeString()
        ]);
    }

    public function getObjectInfo()
    {
        return response()->json(['object' => 'No objects detected']); // Example object info
    }
    public function control(Request $request)
{
    // Logic to send start/stop commands to your device
    return redirect()->back()->with('success', 'Command sent successfully!');
}

}

