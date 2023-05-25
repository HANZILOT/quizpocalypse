<x-layout>
    <x-message />
    <div class="table-responsive">
        @if ($quizzes->isEmpty())
            <div class="alert alert-info text-center">
                No quizzes found.
            </div>
        @else
            <table class="table table-striped table-hover" style="vertical-align: middle;">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">BSIT 3A</th>
                        <th scope="col">Quiz Title</th>
                        <th class="col-1 text-center">Score</th>
                        <th class="col-1 text-center">Items</th>
                        <th scope="col-3" class="col-3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quizzes as $quiz)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}.</th>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://avatars.githubusercontent.com/HANZILOT"
                                        class="d-none d-sm-inline-block" style="width: 60px; border-radius: 50%;">
                                    <div class="title">
                                        <p>
                                            <a href="https://github.com/HANZILOT" class="text-decoration-none"
                                                target="_blank">@HANZILOT</a>
                                        </p>
                                        <p><b>Benedict Reyes</p>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $quiz->title }}</td>
                            <td class="text-center">
                                @if ($quiz->displayScore() === 'Not Taken')
                                    <span class="text-danger">{{ $quiz->displayScore() }}</span>
                                @else
                                    <span class="text-success">{{ $quiz->displayScore() }}</span>
                                @endif
                            </td>
                            <td class="text-center">{{ $quiz->questions_count }}</td>
                            <td>
                                <a href="{{ route('quizzes.show', $quiz) }}" class="btn btn-primary btn-sm">
                                    Take Quiz
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layout>
