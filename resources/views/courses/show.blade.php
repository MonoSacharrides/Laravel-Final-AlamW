@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-back d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div class="feedback">
            <h1>{{ $course->course_name }} - Feedback</h1>
            <p>Instructor: {{ $course->teacher }}</p>
        </div>
        <div class="text-center mt-2 back-btn">
            <a href="javascript:history.back()" class="btn p-2.5 bg-primary text-white backbtn">Back</a>
        </div>
    </div>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="/courses/{{ $course->id }}/feedback" method="POST" class="mb-4">
        @csrf
        <div class="form-group">
            <label for="rating">Rating</label>
            <div class="star-rating" id="starRating">
                @for ($i = 1; $i <= 5; $i++)
                    <span class="star" data-value="{{ $i }}">★</span>
                @endfor
            </div>
            <input type="hidden" name="rating" id="rating" required>
        </div>
        <div class="form-group">
            <label for="feedback">Feedback</label>
            <textarea name="feedback" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="anonymous" class="form-check-input" id="anonymous">
            <label class="form-check-label" for="anonymous">Submit as Anonymous</label>
        </div>
        <button type="submit" class="btn btn-success">Submit Feedback</button>
    </form>

    <hr>

    <h2>Previous Feedback</h2>
    @foreach($course->feedbacks as $feedback)
        <div class="feedback mt-3 border p-3 rounded">
            <p><strong>Rating:</strong>
                <span class="star-rating">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="star {{ $i <= $feedback->rating ? 'rated' : '' }}">★</span>
                    @endfor
                </span>
            </p>
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center">
                <p>{{ $feedback->anonymous ? 'Anonymous' : 'Student' }} says: {{ $feedback->feedback }}</p>

                <!-- Edit and Delete Buttons -->
                <div class="mt-2 mt-sm-0">
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="collapse" data-target="#editFeedback{{ $feedback->id }}">
                        Edit
                    </button>

                    <form action="/feedback/{{ $feedback->id }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>

            <!-- Edit Feedback Form -->
            <div id="editFeedback{{ $feedback->id }}" class="collapse mt-2">
                <form action="/feedback/{{ $feedback->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <div class="star-rating" id="starRatingEdit{{ $feedback->id }}">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="star {{ $i <= $feedback->rating ? 'rated' : '' }}" data-value="{{ $i }}">★</span>
                            @endfor
                        </div>
                        <input type="hidden" name="rating" id="ratingEdit{{ $feedback->id }}" value="{{ $feedback->rating }}" required>
                    </div>
                    <div class="form-group">
                        <label for="feedback">Feedback</label>
                        <textarea name="feedback" class="form-control" rows="3" required>{{ $feedback->feedback }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-warning btn-sm">Update</button>
                </form>
            </div>
        </div>
        <hr>
    @endforeach
</div>
@endsection

<style>
    .container-back {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 10px;
    }

    .star-rating {
        display: inline-block;
        direction: ltr;
    }

    .star {
        font-size: 24px;
        color: #ddd;
        cursor: pointer;
        transition: color 0.2s ease;
    }

    .star.rated {
        color: gold;
    }

    @media (max-width: 576px) {
        .container-back {
            flex-direction: column;
            align-items: flex-start;
        }

        .back-btn {
            margin-top: 10px;
        }

        .feedback {
            text-align: left;
        }

        .feedback.mt-3 {
            margin-top: 1rem;
        }

        .feedback .d-flex {
            flex-direction: column;
        }
    }

    @media (min-width: 576px) {
        .feedback .d-flex {
            flex-direction: row;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        function handleStarClick(starsContainer, ratingInput) {
            const stars = starsContainer.querySelectorAll('.star');

            stars.forEach((star) => {
                star.addEventListener('click', function () {
                    const rating = this.getAttribute('data-value');
                    ratingInput.value = rating;

                    stars.forEach((s, i) => {
                        if (i < rating) {
                            s.classList.add('rated');
                        } else {
                            s.classList.remove('rated');
                        }
                    });
                });
            });
        }

        const starRating = document.getElementById('starRating');
        const ratingInput = document.getElementById('rating');
        handleStarClick(starRating, ratingInput);


        @foreach($course->feedbacks as $feedback)
            const starRatingEdit = document.getElementById('starRatingEdit{{ $feedback->id }}');
            const ratingInputEdit = document.getElementById('ratingEdit{{ $feedback->id }}');
            handleStarClick(starRatingEdit, ratingInputEdit);
        @endforeach
    });
</script>
