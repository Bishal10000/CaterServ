@extends('backend.layout.auth_master')
@section('title','Register Page')
@section('main-content')
    <!-- /.register-logo -->
    <div class="card">
        <div class="card-body register-card-body">
            <p class="register-box-msg">Register a new membership</p>
            @include('backend.includes.flash_message')
            <form action="{{ route('backend.register')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Full Name" />
                    <div class="input-group-text"><span class="bi bi-person"></span></div>
                </div>
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" />
                    <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                </div>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                </div>
                @error('password')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" />
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                </div>
                @error('password_confirmation')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <!--begin::Row-->
                <div class="row">
                    <div class="col-8">

                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!--end::Row-->
            </form>

            <!-- /.social-auth-links -->
            <p class="mb-0">
                <a href="{{ route('backend.showlogin') }}" class="text-center"> I already have a membership </a>
            </p>
        </div>
        <!-- /.register-card-body -->
    </div>

@endsection

