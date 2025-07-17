<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Product Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Google Font: Inter --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Custom CSS (external or internal) --}}
    <style>
        :root {
            --primary: #007bff;
            --danger: #e74c3c;
            --success: #28a745;
            --light-bg: #f4f6f9;
            --dark-text: #2c3e50;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            padding-top: 80px;
        }

        h1, h2, h3 {
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .btn {
            border-radius: 6px;
            padding: 10px 18px;
            font-weight: 500;
        }

        .btn-primary { background: var(--primary); border-color: var(--primary); }
        .btn-primary:hover { background: #0056b3; }

        .btn-danger { background: var(--danger); border-color: var(--danger); }
        .btn-danger:hover { background: #c0392b; }

        .btn-success { background: var(--success); border-color: var(--success); }
        .btn-success:hover { background: #218838; }

        .alert {
            border-radius: 6px;
            padding: 12px 20px;
            font-weight: 500;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px 15px;
            border: 1px solid #dee2e6;
        }

        table th {
            background-color: var(--primary);
            color: #fff;
        }

        table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        table tr:hover {
            background-color: #e2f0ff;
        }

        form label {
            font-weight: 600;
            margin-top: 1rem;
        }

        form input[type="text"],
        form input[type="file"],
        form textarea,
        form select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ced4da;
            border-radius: 6px;
        }

        form textarea {
            resize: vertical;
        }

        .footer {
            background: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            font-size: 14px;
            color: #888;
            border-top: 1px solid #ddd;
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary) !important;
        }

        .nav-link {
            font-weight: 500;
            color: #333 !important;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: var(--primary) !important;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">CarManager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/cars') }}">Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/help') }}">Help</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="container my-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    <div class="footer">
        &copy; {{ date('Y') }} Car Product Management System. All rights reserved.
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
