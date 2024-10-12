{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Feedback for {{ $course->course_name }}</h1>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <h2>Previous Feedback</h2>
    @foreach($feedbacks as $feedback)
        <div class="feedback mt-3 border p-3 rounded">
            <p><strong>Rating:</strong>
                <span class="star-rating">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="star {{ $i <= $feedback->rating ? 'rated' : '' }}">★</span>
                    @endfor
                </span>
            </p>
            <p>{{ $feedback->anonymous ? 'Anonymous' : 'Student' }} says: {{ $feedback->feedback }}</p>
            <a href="{{ route('feedback.edit', $feedback->id) }}" class="btn btn-warning btn-sm">Edit</a>
        </div>
        <hr>
    @endforeach
</div>
@endsection

<style>
    .star-rating {
        display: inline-block;
    }
    .star {
        font-size: 24px;
        color: #ddd;
        cursor: pointer;
    }
    .star.rated {
        color: gold;
    }
</style>  --}}
