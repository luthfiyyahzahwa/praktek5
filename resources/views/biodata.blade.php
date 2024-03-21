@extends('layout.main')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold mb-4">Biodata</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Personal Information -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">Personal Information</h2>
            <p><strong>Name:</strong> Luthfiyyah Zahwa Maitari</p>
            <p><strong>Date of Birth:</strong> May 29, 2004</p>
            <p><strong>Address:</strong> Jl. Urai Bawadi</p>
            <p><strong>Email:</strong> h1101221008@student.untan.ac.id</p>
            <p><strong>Phone:</strong> 087709190558</p>
        </div>

        <!-- Education -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">Education</h2>
            <p><strong>Degree:</strong> Bachelor of Science in Computer Science</p>
            <p><strong>Institution:</strong> University of Example</p>
            <p><strong>Year of Graduation:</strong> 2012</p>
        </div>

        <!-- Work Experience -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Work Experience</h2>
            <p><strong>Position:</strong> Software Engineer</p>
            <p><strong>Company:</strong> ABC Technologies</p>
            <p><strong>Duration:</strong> 2012 - Present</p>
            <p><strong>Responsibilities:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>
@endsection
