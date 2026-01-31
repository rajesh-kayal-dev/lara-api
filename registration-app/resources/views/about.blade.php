@extends('layouts.app')

@section('title', 'About — Registration App')

@section('content')

<section class="content container">

    <h1>About This Project</h1>

    <p>
        This Registration App is a full-stack web application built using Laravel
        with a focus on clean architecture, security, and real-world development practices.
        The goal of this project is to demonstrate how authentication, authorization,
        and user management are implemented in a professional Laravel application.
    </p>

    <h2>Project Features</h2>
    <ul>
        <li>User registration with validation</li>
        <li>Secure login and logout</li>
        <li>Session-based authentication</li>
        <li>User profile management</li>
        <li>Admin-only user management (CRUD)</li>
        <li>Role-based access control using middleware</li>
        <li>Clean separation of concerns (Admin vs User)</li>
    </ul>

    <h2>Technology Stack</h2>

    <h3>Backend</h3>
    <ul>
        <li><strong>PHP 8.2</strong> — Core backend language</li>
        <li><strong>Laravel 12</strong> — MVC framework</li>
        <li><strong>Eloquent ORM</strong> — Database interaction</li>
        <li><strong>MySQL</strong> — Relational database</li>
        <li><strong>Middleware</strong> — Authentication and role protection</li>
    </ul>

    <h3>Frontend</h3>
    <ul>
        <li><strong>Blade Templates</strong> — Server-side rendering</li>
        <li><strong>HTML5</strong> — Semantic markup</li>
        <li><strong>CSS3</strong> — Custom styling</li>
        <li><strong>JavaScript</strong> — Light interactivity</li>
    </ul>

    <h3>Security</h3>
    <ul>
        <li>Password hashing using Laravel’s built-in hashing</li>
        <li>CSRF protection for all forms</li>
        <li>Session regeneration after login</li>
        <li>Role-based authorization using custom middleware</li>
    </ul>

    <h2>Project Structure</h2>
    <p>
        The project follows Laravel’s recommended directory structure.
        Controllers are separated by responsibility (Auth, Profile, Admin),
        middleware is registered using Laravel 12’s bootstrap configuration,
        and assets are organized inside the public directory for clarity.
    </p>

    <h2>About the Developer</h2>
    <p>
        My name is <strong>Rajesh</strong>. I am an MCA student with a strong interest
        in backend development and Laravel.
    </p>

    <p>
        The focus of this project is not just functionality,
        but clarity, maintainability, and professional coding standards.
    </p>

</section>

@endsection
