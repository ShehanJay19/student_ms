<x-layout>
    <section id="students" class="mt-5">
        <div class="container">
            <h2 class="text-center mb-4">All Students</h2>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>CO{{ $course->course_id }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->course_description}}</td>
                      
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>