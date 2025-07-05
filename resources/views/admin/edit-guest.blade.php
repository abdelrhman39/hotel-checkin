@extends('admin.layout')
@section('title', 'Edit Guest')
@section('page-title', 'Edit Guest')
@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.guest.update', $guest->id) }}">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $guest->first_name) }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $guest->last_name) }}" required>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $guest->email) }}">
                </div>
                <div class="col-md-2 mb-3">
                    <label for="country_code" class="form-label">Country Code</label>
                    <input type="text" class="form-control" id="country_code" name="country_code" value="{{ old('country_code', $guest->country_code) }}">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $guest->phone) }}">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $guest->address) }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $guest->city) }}">
                </div>
                {{-- <div class="col-md-4 mb-3">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{ old('state', $guest->state) }}">
                </div> --}}
                <div class="col-md-4 mb-3">
                    <label for="zip_code" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ old('zip_code', $guest->zip_code) }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="{{ route('admin.guest.show', $guest->id) }}" class="btn btn-secondary ms-2">Cancel</a>
        </form>
    </div>
</div>
@endsection 