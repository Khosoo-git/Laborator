@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">System Status</div>
                <div class="card-body">
                    <p>Status: <span class="text-success">Active</span></p>
                    <p>Cycle Duration: 15 minutes</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Recent Cycles</div>
                <div class="card-body">
                    <ul>
                        <li>Cycle 1: Completed at 10:30 AM</li>
                        <li>Cycle 2: Completed at 12:00 PM</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Alerts</div>
                <div class="card-body">
                    <p>No alerts currently.</p>
                </div>
            </div>
        </div>
        <div>
    <h3>Device Status</h3>
    <p id="status">Loading...</p>
</div>

    </div>
</div>
@endsection
