@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h3 class="mb-4">User Registration</h3>
            <form action="{{ route('register.store') }}" method="post">
                @csrf

                {{-- Name --}}
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Confirm password --}}
                <div class="mb-3">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                {{-- Phone --}}
                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                </div>

                {{-- Bio --}}
                <div class="mb-3">
                    <label>Bio</label>
                    <textarea name="bio" class="form-control">{{ old('bio') }}</textarea>
                </div>

                <button class="btn btn-primary w-100">Register</button>

            </form>
        </div>
    </div>
@endsection
