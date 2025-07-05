@extends('admin.layout')
@section('title', 'Reports')
@section('page-title', 'Reports')
@section('content')
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="stats-card">
            <div class="d-flex align-items-center">
                <div class="stats-icon me-3" style="background: #764ba2;">
                    <i class="fas fa-users"></i>
                </div>
                <div>
                    <h3 class="mb-1">{{ $stats['total_guests'] }}</h3>
                    <p class="text-muted mb-0">Total Guests</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stats-card">
            <div class="d-flex align-items-center">
                <div class="stats-icon me-3" style="background: #43e97b;">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div>
                    <h3 class="mb-1">{{ $stats['completed'] }}</h3>
                    <p class="text-muted mb-0">Completed</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stats-card">
            <div class="d-flex align-items-center">
                <div class="stats-icon me-3" style="background: #f093fb;">
                    <i class="fas fa-clock"></i>
                </div>
                <div>
                    <h3 class="mb-1">{{ $stats['pending'] }}</h3>
                    <p class="text-muted mb-0">Pending</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stats-card">
            <div class="d-flex align-items-center">
                <div class="stats-icon me-3" style="background: #00b894;">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <div>
                    <h3 class="mb-1">${{ number_format($stats['total_payments'], 2) }}</h3>
                    <p class="text-muted mb-0">Total Payments</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-md-4 mb-3">
        <div class="stats-card">
            <h5>Today's Guests</h5>
            <h3>{{ $stats['today_guests'] }}</h3>
            <p class="text-muted mb-0">Payments: ${{ number_format($stats['today_payments'], 2) }}</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="stats-card">
            <h5>This Month's Guests</h5>
            <h3>{{ $stats['month_guests'] }}</h3>
            <p class="text-muted mb-0">Payments: ${{ number_format($stats['month_payments'], 2) }}</p>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="stats-card">
            <h5>All Time</h5>
            <h3>{{ $stats['total_guests'] }}</h3>
            <p class="text-muted mb-0">Payments: ${{ number_format($stats['total_payments'], 2) }}</p>
        </div>
    </div>
</div>
@endsection 