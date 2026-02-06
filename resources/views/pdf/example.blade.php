<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        .container {
            padding: 20px;
        }

        h1 {
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        <p><strong>Date:</strong> {{ $date }}</p>

        <table>
            <tr>
                <th>Name</th>
                <th>Course</th>
            </tr>
            <tr>
                <td>{{ $name ?? 'N/A' }}</td>
                <td>{{ $course ?? 'N/A' }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
