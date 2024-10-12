<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Feedback System</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .cf {
            margin-left: auto;
        }
        .home {
            margin-left: 10px;
            position: relative;
            overflow: hidden;
            color: #f8f9fa;
            transition: color 0.3s ease;
        }
        .home::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 3px;
            background: #FFD700;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        .home:hover {
            color: #FFD700;
        }
        .home:hover::after {
            transform: translateY(0);
        }
        .icon{
            color: white;
            font-size: 30px;
            margin-bottom: 9px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary p-2">
        <a href="#"><i class='icon bx bx-message-square-dots mt-2' ></i></a>
        <a href="{{ route('home') }}" class="home navbar-brand text-light fs-4">Home</a>
        <a class="cf navbar-brand text-light fs-4 opacity-75">MonoSaccharides</a>
    </nav>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>

