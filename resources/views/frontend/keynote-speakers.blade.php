<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keynote Speakers</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        strong {
            font-size: 1.2em;
            color: #333;
        }

        p {
            margin: 10px 0;
            color: #555;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Enhanced navigation bar styles */
        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        
        <a href="{{ route('contact-us') }}">Contact</a>
    </nav>

    <h1>Keynote Speakers</h1>

    <ul>
        @foreach ($keynoteSpeakers as $speaker)
        <li>
            <strong>{{ $speaker->firstname }} {{ $speaker->lastname }}</strong>
            <p>{{ $speaker->description }}</p>
            @if ($speaker->website)
            <p>Website: <a href="{{ $speaker->website }}" target="_blank">{{ $speaker->website }}</a></p>
            @endif
        </li>
        @endforeach
    </ul>
</body>

</html>
