<x-layout>
    <section id="students" class="mt-5">
        <div class="container">
            <h2 class="text-center mb-4">All Students</h2>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>ST{{ $student->student_id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->contact_number}}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>