<div class="nav-item dropdown">
    <a href="{{ route('menu') }}" class="nav-link dropdown-toggle" data-toggle="dropdown">Menu Categories</a>
    <div class="dropdown-menu">
        <a href="{{ route('menu') }}" class="dropdown-item">All Menu Items</a>
        
        @foreach($food_categories as $category)
            <a href="{{ route('menu', ['category' => $category]) }}" class="dropdown-item">
                {{ $category }}
            </a>
        @endforeach
    </div>
</div>
<a href="{{ route('about') }}" class="nav-item nav-link">About</a>
<a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
<a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
<a href="{{ route('booking.form') }}" class="nav-item nav-link">Booking</a>
<a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>