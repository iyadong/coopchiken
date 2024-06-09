<!-- resources/views/devices/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Perangkat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .device-list {
            list-style-type: none;
            padding: 0;
        }

        .device-list li {
            background-color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .device-list li:hover {
            background-color: #f9f9f9;
            transform: translateY(-2px);
        }

        .device-name {
            color: #333;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Perangkat</h1>

        @if ($devices->isEmpty())
            <p>Tidak ada perangkat ditemukan.</p>
        @else
            <ul class="device-list">
                @foreach ($devices as $device)
                    <li>
                        <span class="device-name">{{ $device->name }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
