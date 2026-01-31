@extends('layouts.app')

@section('title', 'Home — Registration App')

@section('content')

    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-text">
                <h1>Secure User Management</h1>
                <p>
                    A clean Laravel application with authentication,
                    profile management, and admin control — built using
                    real industry standards.
                </p>

                <div class="actions">
                    <a href="{{ route('register') }}" class="btn primary">Get Started</a>
                    <a href="{{ route('login') }}" class="btn outline">Login</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="{{ asset('assets/images/hero.png') }}" alt="Application preview">
            </div>
        </div>
    </section>
@endsection
