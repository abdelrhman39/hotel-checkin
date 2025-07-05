<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Details - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: white;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            border-radius: 8px;
            margin: 2px 0;
            transition: all 0.3s ease;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }
        .main-content {
            background: #f8f9fa;
            min-height: 100vh;
        }
        .detail-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: none;
        }
        .guest-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: white;
            font-weight: bold;
        }
        .info-item {
            padding: 15px 0;
            border-bottom: 1px solid #e9ecef;
        }
        .info-item:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: 600;
            color: #6c757d;
            margin-bottom: 5px;
        }
        .info-value {
            color: #212529;
        }
        .status-badge {
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }
        .status-pending {
            background: #fff3cd;
            color: #856404;
        }
        .status-completed {
            background: #d1edff;
            color: #0c5460;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0">
                <div class="sidebar p-3">
                    <div class="text-center mb-4">
                        <i class="fas fa-hotel fa-2x mb-2"></i>
                        <h5>Admin Panel</h5>
                    </div>
                    
                    <nav class="nav flex-column">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-tachometer-alt me-2"></i>
                            Dashboard
                        </a>
                        <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-users me-2"></i>
                            Guests
                        </a>
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-chart-bar me-2"></i>
                            Reports
                        </a>
                        {{-- <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-cog me-2"></i>
                            Settings
                        </a> --}}
                        <hr class="my-3">
                        <a class="nav-link" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i>
                            Logout
                        </a>
                    </nav>
                </div>
                
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10">
                <div class="main-content p-4">
                    <!-- Header -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="{{ route('admin.dashboard') }}" class="text-decoration-none">
                                            <i class="fas fa-arrow-left me-1"></i>Back to Dashboard
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">Guest Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="row">
                        <!-- Guest Information -->
                        <div class="col-lg-8">
                            <div class="detail-card mb-4">
                                <div class="card-header bg-white border-0 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="guest-avatar me-4">
                                            {{ strtoupper(substr($guest->first_name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <h4 class="mb-1">{{ $guest->first_name }} {{ $guest->last_name }}</h4>
                                            <p class="text-muted mb-0">Guest ID: {{ $guest->id }}</p>
                                            <span class="status-badge {{ $guest->check_in_status ? 'status-completed' : 'status-pending' }}">
                                                {{ $guest->check_in_status ? 'Completed' : 'Pending' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <div class="info-label">Email Address</div>
                                                <div class="info-value">{{ $guest->email }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <div class="info-label">Phone Number</div>
                                                <div class="info-value">{{ $guest->phone }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <div class="info-label">Date of Birth</div>
                                                <div class="info-value">{{ $guest->date_of_birth ?? 'Not provided' }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <div class="info-label">Nationality</div>
                                                <div class="info-value">{{ $guest->nationality ?? 'Not provided' }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <div class="info-label">Passport Number</div>
                                                <div class="info-value">{{ $guest->passport_number ?? 'Not provided' }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <div class="info-label">Room Type</div>
                                                <div class="info-value">{{ $guest->room_type ?? 'Not selected' }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <div class="info-label">Check-in Date</div>
                                                <div class="info-value">{{ $guest->created_at->format('F j, Y') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-item">
                                                <div class="info-label">Check-in Time</div>
                                                <div class="info-value">{{ $guest->created_at->format('g:i A') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            @if($guest->extras || $guest->special_requests)
                                <div class="detail-card">
                                    <div class="card-header bg-white border-0 py-3">
                                        <h5 class="mb-0">Additional Information</h5>
                                    </div>
                                    <div class="card-body">
                                        @if($guest->extras)
                                            <div class="info-item">
                                                <div class="info-label">Selected Extras</div>
                                                <div class="info-value">{{ $guest->extras }}</div>
                                            </div>
                                        @endif
                                        
                                        @if($guest->special_requests)
                                            <div class="info-item">
                                                <div class="info-label">Special Requests</div>
                                                <div class="info-value">{{ $guest->special_requests }}</div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Actions Sidebar -->
                        <div class="col-lg-4">
                            <div class="detail-card">
                                <div class="card-header bg-white border-0 py-3">
                                    <h5 class="mb-0">Actions</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        @if(!$guest->check_in_status)
                                            <form method="POST" action="{{ route('admin.guest.status', $guest->id) }}" class="d-inline">
                                                @csrf
                                                <input type="hidden" name="status" value="completed">
                                                <button type="submit" class="btn btn-success w-100">
                                                    <i class="fas fa-check me-2"></i>
                                                    Mark as Completed
                                                </button>
                                            </form>
                                        @else
                                            <form method="POST" action="{{ route('admin.guest.status', $guest->id) }}" class="d-inline mb-2">
                                                @csrf
                                                <input type="hidden" name="status" value="pending">
                                                <button type="submit" class="btn btn-warning w-100">
                                                    <i class="fas fa-undo me-2"></i>
                                                    Mark as Pending
                                                </button>
                                            </form>
                                        @endif
                                        
                                        <a href="{{ route('admin.guest.edit', $guest->id) }}" class="btn btn-outline-info w-100 mb-2">
                                            <i class="fas fa-edit me-2"></i>
                                            Edit Guest
                                        </a>
                                        
                                        <form action="{{ route('admin.guest.destroy', $guest->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this guest?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger w-100">
                                                <i class="fas fa-trash me-2"></i>
                                                Delete Guest
                                            </button>
                                        </form>
                                        
                                        <a href="mailto:{{ $guest->email }}" class="btn btn-outline-primary">
                                            <i class="fas fa-envelope me-2"></i>
                                            Send Email
                                        </a>
                                        
                                        <a href="tel:{{ $guest->phone }}" class="btn btn-outline-info">
                                            <i class="fas fa-phone me-2"></i>
                                            Call Guest
                                        </a>
                                        
                                        <button class="btn btn-outline-secondary" onclick="window.print()">
                                            <i class="fas fa-print me-2"></i>
                                            Print Details
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Stats -->
                            <div class="detail-card mt-3">
                                <div class="card-header bg-white border-0 py-3">
                                    <h5 class="mb-0">Check-in Summary</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <div class="border-end">
                                                <h4 class="text-primary mb-1">{{ $guest->created_at->format('j') }}</h4>
                                                <small class="text-muted">Day</small>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="text-success mb-1">{{ $guest->created_at->format('M') }}</h4>
                                            <small class="text-muted">Month</small>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <small class="text-muted">Check-in completed in</small>
                                        <div class="h5 text-primary mb-0">
                                            {{ $guest->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 