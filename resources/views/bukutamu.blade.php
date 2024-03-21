@extends('layout.main')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8">Guest Book</h1>
    <form action="/submit" method="POST" class="w-full max-w-lg mx-auto">
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <!-- Name Field -->
            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name"
                    class="w-full px-4 py-2 leading-tight text-gray-700 border rounded-md shadow-sm appearance-none focus:outline-none focus:shadow-outline">
            </div>
            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email"
                    class="w-full px-4 py-2 leading-tight text-gray-700 border rounded-md shadow-sm appearance-none focus:outline-none focus:shadow-outline">
            </div>
            <!-- Message Field -->
            <div class="mb-6">
                <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
                <textarea id="message" name="message" rows="4"
                    class="w-full px-4 py-2 leading-tight text-gray-700 border rounded-md shadow-sm appearance-none focus:outline-none focus:shadow-outline"
                    placeholder="Enter your message"></textarea>
            </div>
        </div>
        <!-- Submit Button -->
        <div class="flex justify-center">
            <button type="button" id="submit-button"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </div>
    </form>
</div>

<div id="thank-you-alert" class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white rounded-lg p-8">
        <h2 class="text-2xl mb-4">Thank you for your visit!</h2>
        <button id="close-alert"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Close</button>
    </div>
</div>

<script>
    document.getElementById('submit-button').addEventListener('click', function() {
        document.getElementById('thank-you-alert').classList.remove('hidden');
    });

    document.getElementById('close-alert').addEventListener('click', function() {
        document.getElementById('thank-you-alert').classList.add('hidden');
    });
</script>
@endsection
