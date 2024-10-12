{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-back">
        <h1>Edit Feedback</h1>
        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Back</a>
    </div>
    <form action="{{ route('feedback.update', $feedback->id) }}" method="POST" class="mb-4">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="rating">Rating</label>
            <div class="star-rating" id="starRating">
                @for ($i = 1; $i <= 5; $i++)
                    <span class="star {{ $i <= $feedback->rating ? 'rated' : '' }}" data-value="{{ $i }}">★</span>
                @endfor
            </div>
            <input type="hidden" name="rating" id="rating" value="{{ $feedback->rating }}" required>
        </div>

        <div class="form-group">
            <label for="feedback">Feedback</label>
            <textarea name="feedback" class="form-control" rows="5" required>{{ $feedback->feedback }}</textarea>
        </div>

        <button type="submit" class="btn btn-success mt-2">Update Feedback</button>
    </form>
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
        transition: color 0.2s ease;
    }
    .star.rated {
        color: gold;
    }
    .container-back {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 10px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('rating');

        stars.forEach(star => {
            star.addEventListener('click', function () {
                const rating = this.getAttribute('data-value');
                ratingInput.value = rating;

                stars.forEach(s => {
                    s.classList.remove('rated');
                    if (s.getAttribute('data-value') <= rating) {
                        s.classList.add('rated');
                    }
                });
            });
        });
    });
</script>  --}}
