<div class="nav-item dropdown">
    <a href="{{ route('frontend.menu') }}" class="nav-link dropdown-toggle" data-toggle="dropdown">
        Menu Categories
    </a>
    <div class="dropdown-menu">
        <a href="{{ route('frontend.menu') }}" class="dropdown-item">All Menu Items</a>
        
        @foreach($food_categories as $category)
            <a href="{{ route('frontend.menu', ['category' => $category]) }}" class="dropdown-item">
                {{ $category }}
            </a>
        @endforeach
    </div>
</div>

<a href="{{ route('frontend.about') }}"    class="nav-item nav-link">About</a>
<a href="{{ route('frontend.services') }}" class="nav-item nav-link">Services</a>
<a href="{{ route('frontend.events') }}"   class="nav-item nav-link">Events</a>
<a href="{{ route('frontend.booking') }}"  class="nav-item nav-link">Booking</a>
<a href="{{ route('frontend.contact') }}"  class="nav-item nav-link">Contact</a>
