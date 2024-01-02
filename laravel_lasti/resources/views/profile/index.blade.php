@extends('template/admin')

@section('css')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 30px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            /* Ubah dari 'center' ke 'flex-start' */
            min-height: 100vh;
        }

        .card {
            background-color: #fff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25);
            text-align: left;
            margin: 19px;
            /* Ubah margin menjadi 10px */
            transition: box-shadow 0.3s ease-in-out;
            width: 350px;
            max-width: 80%;
            background: linear-gradient(45deg, #ffffff, #f0f0f0);
            transition: box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.3);
        }

        .profile-image {
            border-radius: 50%;
            object-fit: cover;
            width: 180px;
            height: 180px;
            margin: 0 auto;
            display: block;
            margin-bottom: 30px;
        }

        .user-info {
            margin: 15px 0;
            color: #555;
            font-size: 20px;
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
            @if ($user->role == 1)
                <div class="card">
                    <img src="{{ asset('images/users/profile3.jpg') }}" alt="Profile Picture" class="profile-image">
                    <br>
                    <br>
                    <p class="user-info">Name: {{ $user->name }}</p>
                    <p class="user-info">Email: {{ $user->email }}</p>
                    <p class="user-info">Admin sejak: {{ $user->created_at->format('d M Y') }}</p>
                </div>
            @endif
        @endforeach
    </div>

    {{ $users->links() }}
@endsection
