<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $guests = Guest::whereNull('deleted_at')->orderBy('created_at', 'desc')->get();
        
        $stats = [
            'total_guests' => $guests->count(),
            'completed' => $guests->where('check_in_status', true)->count(),
            'pending' => $guests->where('check_in_status', false)->count(),
            'total_payments' => $guests->sum('paid_amount'),
            'checked_in_today' => $guests->where('created_at', '>=', now()->startOfDay())->count(),
            'pending_checkins' => $guests->where('check_in_status', false)->count(),
            'completed_checkins' => $guests->where('check_in_status', true)->count(),
        ];

        return view('admin.dashboard', compact('guests', 'stats'));
    }

    public function showGuest($id)
    {
        $guest = Guest::whereNull('deleted_at')->findOrFail($id);
        return view('admin.guest-details', compact('guest'));
    }

    public function updateGuestStatus(Request $request, $id)
    {
        $guest = Guest::whereNull('deleted_at')->findOrFail($id);
        $status = $request->status;
        if ($status === 'completed') {
            $guest->check_in_status = true;
        } elseif ($status === 'pending') {
            $guest->check_in_status = false;
        }
        $guest->save();

        return back()->with('success', 'Guest status updated successfully');
    }

    public function edit($id)
    {
        $guest = Guest::whereNull('deleted_at')->findOrFail($id);
        return view('admin.edit-guest', compact('guest'));
    }

    public function update(Request $request, $id)
    {
        $guest = Guest::whereNull('deleted_at')->findOrFail($id);
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'country_code' => 'nullable',
            'address' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'zip_code' => 'nullable',
        ]);
        $guest->update($data);
        return redirect()->route('admin.guest.show', $guest->id)->with('success', 'Guest updated successfully');
    }

    public function destroy($id)
    {
        $guest = Guest::whereNull('deleted_at')->findOrFail($id);
        $guest->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Guest deleted successfully');
    }

    public function reports()
    {
        $today = now()->startOfDay();
        $month = now()->startOfMonth();

        $guests = Guest::all();
        $stats = [
            'total_guests' => $guests->count(),
            'completed' => $guests->where('check_in_status', true)->count(),
            'pending' => $guests->where('check_in_status', false)->count(),
            'total_payments' => $guests->sum('paid_amount'),
            'today_guests' => $guests->where('created_at', '>=', $today)->count(),
            'today_payments' => $guests->where('created_at', '>=', $today)->sum('paid_amount'),
            'month_guests' => $guests->where('created_at', '>=', $month)->count(),
            'month_payments' => $guests->where('created_at', '>=', $month)->sum('paid_amount'),
        ];
        return view('admin.reports', compact('stats'));
    }
} 