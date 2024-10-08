<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Feedback System - Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Course Feedback System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('departments') }}">Department</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to the Course Feedback System</h1>
            <p class="lead">Your feedback matters. Help us improve your learning experience.</p>
            <a href="{{ route('departments') }}" class="btn btn-light btn-lg mt-3">Go to Department</a>

        </div>
    </header>


    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">About Our Feedback System</h2>
            <div class="row">
                <div class="col-lg-6">
                    <h3>What is Course Feedback?</h3>
                    <p>The Course Feedback System allows students to provide valuable insights into the strengths and areas for improvement of their courses. Your input helps shape the future of education by ensuring the highest standards of teaching and learning are maintained.</p>
                </div>
                <div class="col-lg-6">
                    <h3>Why Your Feedback Matters</h3>
                    <p>Feedback helps instructors understand how students perceive the course content, teaching methods, and overall experience. By sharing your thoughts, you contribute to enhancing the quality of the educational experience for future students.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-light text-center py-4">
        <p>&copy; 2024 Course Feedback Management System. All rights reserved.</p>
    </footer>



    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
