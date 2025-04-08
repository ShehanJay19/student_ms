<x-layout>
    <head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
    <section id="teachers" class="mt-5">
        <div class="container">
            <h2 class="text-center mb-4">All Students</h2>
            <ul class="list-group">
                @foreach ($teachers as $teacher)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>ID:</strong>TE{{ $teacher->teacher_id }} <br>
                            <strong>Name:</strong> {{ $teacher->name }} <br>
                            <strong>Phone:</strong> {{ $teacher->contact_number }}
                        </div>
                        <a href="{{ url('/students' . $teacher->teacher_id) }}" class="btn btn-primary btn-sm">More Details</a>
                       
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</x-layout>