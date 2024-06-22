<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    @vite('resources/css/app.css')
    <style>
        .id-card-container {
            position: relative;
            width: 850px;
            height: 500px;
            background: url('{{ asset('storage/Kartu IKA.png') }}') no-repeat center center;
            background-size: cover;
            border-radius: 10px;
            overflow: hidden;
        }

        .profile-picture {
            position: absolute;
            top: 30px;
            right: 30px;
            width: 200px;
            height: 250px;
            border-radius: 10px;
            object-fit: cover;
        }

        .details {
            position: absolute;
            bottom: 30px;
            left: 30px;
            color: #000;
            font-family: Arial, sans-serif;
        }

        .details .name {
            font-size: 2em;
            font-weight: bold;
        }

        .details .info {
            font-size: 1.5em;
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="id-card-container">
        <img src="{{ $alumni->profile_picture }}" alt="Profile Picture" class="profile-picture">
        <div class="details">
            <div class="name">{{ $alumni->full_name }}</div>
            <div class="info">FMIPA {{ $alumni->entry_year }} | {{ $alumni->program_study }}</div>
        </div>
    </div>
</body>

</html>
