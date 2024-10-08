<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Feedback System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary p-2">
        <a href="{{ route('home') }}" class="home navbar-brand text-light fs-4">Home</a>
        <a class="navbar-brand text-light fs-4" href="{{ route('courses') }}">Course Feedback</a>
    </nav>
    <div class="content ">
        @yield('content')
    </div>
</body>
</html>
