<x-layout>
    <div>
        <h4>{{ $quiz->title }}</h4>

        <form action="{{ route('quizzes.score', $quiz) }}" method="POST" id="quiz-form">
            @csrf
            <ul class="list-group list-group-flush">
                @foreach ($quiz->questions as $question)
                    <li class="list-group-item">
                        <h6>{{ $loop->iteration }}. {{ $question->question_text }}</h6>
                        @foreach ($question->choices as $choiceIndex => $choice)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]"
                                    value="{{ $choice->id }}" id="choice{{ $choice->id }}" required>
                                <label class="form-check-label" for="choice{{ $choice->id }}">
                                    {{ chr(65 + $choiceIndex) }}. {{ $choice->choice_text }}
                                </label>
                            </div>
                        @endforeach
                    </li>
                @endforeach
            </ul>

            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#confirmationModal">
                    Submit
                </button>
            </div>

            <!-- Confirmation Modal -->
            <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to submit the quiz?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layout>
