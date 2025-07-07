<div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h1 class="text-primary">Cater<span class="text-dark">Serv</span></h1>
                    <p class="lh-lg mb-4">{{ $setting->slogan ?? 'Book CaterServ For Your Dream Event' }}</p>
                    <div class="footer-icon d-flex">
                        <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href="{{ $setting->facebook ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href="{{ $setting->twitter ?? '#' }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ $setting->instagram ?? '#' }}" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                        <a href="{{ $setting->linkedin ?? '#' }}" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="mb-4">Special Facilities</h4>
                    <div class="d-flex flex-column align-items-start">
                        <a class="text-body mb-3" href="#"><i class="fa fa-check text-primary me-2"></i>Cheese Burger</a>
                        <a class="text-body mb-3" href="#"><i class="fa fa-check text-primary me-2"></i>Sandwich</a>
                        <a class="text-body mb-3" href="#"><i class="fa fa-check text-primary me-2"></i>Panner Burger</a>
                        <a class="text-body mb-3" href="#"><i class="fa fa-check text-primary me-2"></i>Special Sweets</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="mb-4">Contact Us</h4>
                    <div class="d-flex flex-column align-items-start">
                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i> {{ $setting->address ?? '123 Street, New York, USA' }}</p>
                        <p><i class="fa fa-phone-alt text-primary me-2"></i> {{ $setting->phone ?? '+012 3456 7890' }}</p>
                        <p><i class="fas fa-envelope text-primary me-2"></i> {{ $setting->email ?? 'info@example.com' }}</p>
                        <p><i class="fa fa-clock text-primary me-2"></i> 24/7 Hours Service</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="mb-4">Social Gallery</h4>
                    <div class="row g-2">
                        @for($i = 1; $i <= 6; $i++)
                        <div class="col-4">
                            <img src="{{ asset('assets/frontend/img/menu-0'.$i.'.jpg') }}" class="img-fluid rounded-circle border border-primary p-2" alt="">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Copyright -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>{{ $setting->website_title ?? 'CaterServ' }}</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 my-auto text-center text-md-end text-white">
                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
            </div>
        </div>
    </div>
</div>