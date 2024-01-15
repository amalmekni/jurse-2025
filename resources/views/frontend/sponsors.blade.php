<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsors</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px auto;
            max-width: 600px;
        }

        li {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        li:hover {
            transform: scale(1.05);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        p {
            margin: 10px 0 0;
            color: #666;
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
    <h1>Sponsors</h1>

    <ul>
        @foreach ($Sponsors as $sponsor)
            <li>
                <img src="{{ $sponsor->src }}" alt="{{ $sponsor->alt }}">
                <p>Order: {{ $sponsor->spo_order }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
