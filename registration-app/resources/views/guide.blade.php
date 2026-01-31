@extends('layouts.app')

@section('title', 'Guide — Registration App')

@section('content')

<section class="banner">
    <div class="container">
        <h1>User Guide</h1>
        <p>A clear and simple explanation on how to use the Registration App.</p>
        <img src="{{ asset('assets/images/guide-banner.png') }}" alt="Guide Banner">
    </div>
</section>

<section class="content container">

    <h2>1. Overview</h2>
    <p>
        This application provides secure user registration, login, profile management, 
        and admin tools for managing users. All features are built with clarity, 
        purpose, and industry standards.
    </p>

    <h2>2. How to Register</h2>
    <ol>
        <li>Open the registration page using the Register button on the home page.</li>
        <li>Fill in your name, email, password, and phone number.</li>
        <li>Submit the form to create your account.</li>
        <li>After successful registration, proceed to login.</li>
    </ol>

    <h2>3. How to Login</h2>
    <ol>
        <li>Open the Login page.</li>
        <li>Enter your registered email and password.</li>
        <li>If credentials are correct, you will be redirected to your profile section.</li>
    </ol>

    <h2>4. Editing Your Profile</h2>
    <ol>
        <li>After login, open the Profile page from navigation.</li>
        <li>Edit your name, phone number, and bio.</li>
        <li>Save the changes.</li>
    </ol>

    <h2>5. Admin Features</h2>
    <p>
        Admin users have access to an additional section for managing all users.
        Features include:
    </p>
    <ul>
        <li>Viewing all registered users</li>
        <li>Editing any user’s profile</li>
        <li>Deleting a user</li>
    </ul>

    <h2>6. Logging Out</h2>
    <p>
        Use the Logout button on the navigation bar to securely exit your session. 
        This ensures no unauthorized access to your account.
    </p>

</section>

@endsection