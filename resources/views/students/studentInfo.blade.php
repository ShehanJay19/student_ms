<x-layout> 
  
        <section id="student-info" class="mt-5">
            <div class="container">
                <div class="row">
                    <!-- Student Image -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('images/student.jpg') }}" alt="Student Image" class="img-fluid rounded-circle" style="max-width: 100%; height: auto;">
                    </div>
                    <!-- Student Details -->
                    <div class="col-md-8">
                        <h2 class="mb-4">Student Information</h2>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>ID:</strong> ST{{ $student->student_id }}</li>
                            <li class="list-group-item"><strong>Name:</strong> {{ $student->name }}</li>
                            <li class="list-group-item"><strong>Phone:</strong> {{ $student->contact_number }}</li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    
</x-layout>