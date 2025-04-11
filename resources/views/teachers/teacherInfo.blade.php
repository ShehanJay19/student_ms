<x-layout> 
  
    <section id="student-info" class="mt-5">
        <div class="container">
            <div class="row">
         
                <div class="col-md-4 text-center">
                    <img src="{{ asset('images/teacher.jpg') }}" alt="Teacher Image" class="img-fluid rounded-circle" style="max-width: 100%; height: auto;">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-4">Teacher Information</h2>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>ID:</strong> ST{{ $teacher->teacher_id }}</li>
                        <li class="list-group-item"><strong>Name:</strong> {{ $teacher->name }}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{ $teacher->contact_number }}</li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </section>

</x-layout>