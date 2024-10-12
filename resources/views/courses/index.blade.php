@extends('layouts.app')

@section('content')
<div class="container">
    <div class="btn-container">
        <h1 class="courses text-center p-2">Courses</h1>
        <div class="text-center mt-2 mb-4 back-btn">
            <a href="{{ url()->previous() }}" class="back">
                <button class="btn btn-primary mt-2 ">Back</button>
            </a>
        </div>
    </div>
    <div class="row">
        @foreach($courses as $course)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-4 shadow p-3 bg-body-tertiary rounded">
                    <div class="card-body text-center">
                        <h5>{{ $course->course_name }}</h5>
                        <p>Instructor: {{ $course->teacher }}</p>
                        <a href="/courses/{{ $course->id }}" class="btn btn-primary">Give Feedback</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

<style>
    .btn-container {
        display: flex;
        justify-content: center; /* Center the title and back button */
        align-items: center;
        margin-top: 10px;
        flex-direction: column; /* Stack items on smaller screens */
    }

    .courses {
        text-align: center; /* Center the title text */
        margin: 0; /* Remove fixed margins for better responsiveness */
    }

    @media (min-width: 768px) {
        .btn-container {
            justify-content: space-between;
            flex-direction: row; /* Horizontal layout for larger screens */
        }
    }

    .back {
        width: 100%; /* Make the back button full width */
    }

    .card-body h5 {
        font-size: 1.25rem; /* Adjust title font size for readability */
    }

    .card-body p {
        font-size: 1rem; /* Adjust description font size */
    }

    .card {
        min-height: 200px; /* Ensure cards have a minimum height */
    }

    /* Add styles for the back button to enhance visibility on mobile */
    .btn-primary {
        padding: 10px; /* Add padding for better touchability */
        font-size: 1rem; /* Make font size slightly larger */
    }
</style>
