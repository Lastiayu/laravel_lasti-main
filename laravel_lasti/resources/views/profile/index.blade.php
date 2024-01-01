@extends('template/admin')

@section('css')
    <style>
        <style>body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            padding: 30px;
            /* Increase padding for a larger card */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            /* Align text to the left */
            margin-top: 20px;
            transition: box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .profile-image {
            border-radius: 8px;
            /* Make it a square with rounded corners */
            object-fit: cover;
            width: 200px;
            /* Keep the width fixed */
            height: 200px;
            /* Keep the height fixed */
            margin: 0 auto;
            /* Center the image horizontally */
            display: block;
            /* Remove any default inline spacing */
            margin-bottom: 15px;
        }

        .user-info {
            margin: 10px 0;
            color: #555;
            font-size: 18px;
            /* Increase font size for user info */
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
    <h1>User Profile</h1>

    <div class="container">
        @foreach ($users as $user)
            <div class="card">
                <img src="{{ asset('images/users/profile3.jpg') }}" alt="Profile Picture" class="profile-image">
                <br>
                <br>
                <p class="user-info">Name: {{ $user->name }}</p>
                <p class="user-info">Email: {{ $user->email }}</p>
                <p class="user-info">Admin sejak: {{ $user->created_at->format('d M Y') }}</p>
            </div>
        @endforeach
    </div>

    {{ $users->links() }}
@endsection
