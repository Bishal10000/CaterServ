<?php

namespace App\Http\Controllers\Backend;

use App\Models\Booking;
use App\Models\Service;
use App\Models\MenuItem;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'bookings' => Booking::count(),
            'services' => Service::count(),
            'menuItems' => MenuItem::count(),
            'testimonials' => Testimonial::count(),
        ];

        $recentBookings = Booking::latest()->take(5)->get();
        $popularServices = Service::withCount('bookings')
                                ->orderBy('bookings_count', 'desc')
                                ->take(5)
                                ->get();

        return view('admin.dashboard', compact('stats', 'recentBookings', 'popularServices'));
    }
}