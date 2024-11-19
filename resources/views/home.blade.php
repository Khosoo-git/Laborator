@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to the Disinfection System</div>
<table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Duration</th>
            <th>Triggered By</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>2024-11-18</td>
            <td>10:30 AM</td>
            <td>15 minutes</td>
            <td>Admin</td>
        </tr>
    </tbody>
</table>

                <div class="card-body">
                    <p>Monitor and control your disinfection system with ease. Use the navigation above to view system status or learn more about the device.</p>
                    <a href="{{ url('/status') }}" class="btn btn-primary">View Device Status</a>
                </div>
                <div class="position-fixed">
                    <form class="float" method="POST" action="{{ route('device.control') }}">
    @csrf
    <button type="submit" class="btn btn-primary">Start Disinfection</button>
</form>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
