<x-layout>
    <head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
    <section id="students" class="mt-5">
        <div class="container">
            <h2 class="text-center mb-4">All Students</h2>
            <ul class="list-group">
                @foreach ($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>ID:</strong> ST{{ $student->student_id }} <br>
                            <strong>Name:</strong> {{ $student->name }} <br>
                            <strong>Phone:</strong> {{ $student->contact_number }}
                        </div>
                        <a href="{{ url('/students' . $student->student_id) }}" class="btn btn-primary btn-sm">More Details</a>
                       
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</x-layout>