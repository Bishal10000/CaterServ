<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Event;
use App\Models\MenuItem;
use App\Models\Testimonial;
use App\Models\TeamMember;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $setting;

    public function __construct()
    {
        // Get settings or create empty object with defaults
        $this->setting = Setting::first() ?? $this->defaultSettings();
        view()->share('setting', $this->setting);
    }

    private function defaultSettings()
    {
        return (object) [
            'website_title' => 'CaterServ',
            'slogan' => 'Book CaterServ For Your Dream Event',
            'logo_top' => 'assets/frontend/img/logo.png',
            'logo_bottom' => null,
            'favicon' => 'assets/frontend/img/favicon.ico',
            'address' => 'V23 Street, New York, USA',
            'phone' => '+012 3456 7890',
            'email' => 'info@example.com',
            'facebook' => '#',
            'twitter' => '#',
            'youtube' => '#',
            'linkedin' => '#',
            'instagram' => '#',
            'google_map' => '',
        ];
    }

    public function index()
{
    // Get data for homepage sections
    $services = Service::take(8)->get();
    $events = Event::latest()->take(6)->get();
    $testimonials = Testimonial::all();
    $teamMembers = TeamMember::take(4)->get();
    $popularMenuItems = MenuItem::where('is_special', true)->take(4)->get();

    return view('frontend.home', compact(
        'services',
        'events',
        'testimonials',
        'teamMembers',
        'popularMenuItems'
    ));
}
    public function about()
    {
        $teamMembers = TeamMember::all();
        return view('frontend.about', compact('teamMembers'));
    }

    public function services()
    {
        $services = Service::all();
        return view('frontend.services', compact('services'));
    }

    public function events()
    {
        $events = Event::latest()->paginate(9);
        return view('frontend.events', compact('events'));
    }

    public function menu()
    {
        // Get menu items grouped by category
        $menuItems = MenuItem::all()->groupBy('category');
        $categories = ['Starter', 'Main Course', 'Drinks', 'Offers', 'Our Special'];
        
        return view('frontend.menu', compact('menuItems', 'categories'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function showBookingForm()
    {
        $services = Service::all();
        $eventTypes = ['Wedding', 'Corporate', 'Cocktail', 'Buffet', 'Small Event'];
        
        return view('frontend.booking', compact('services', 'eventTypes'));
    }

    public function storeBooking(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'event_type' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'event_date' => 'required|date|after:today',
            'guest_count' => 'required|integer|min:10',
            'vegetarian_option' => 'required|boolean',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email',
            'special_requests' => 'nullable|string',
        ]);

        // Add default status
        $validated['status'] = 'pending';

        if (Booking::create($validated)) {
            return redirect()->back()->with('success', 'Your booking has been submitted successfully! We will contact you soon.');
        }

        return redirect()->back()->with('error', 'Booking failed. Please try again.');
    }
}
