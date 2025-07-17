@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Help & Support</h2>
        <p>If you're having trouble using the Car Product Management System, you're in the right place!</p>

        <h4>Frequently Asked Questions:</h4>
        <ul>
            <li>💡 <strong>How do I add a new car?</strong> <br> Go to the Cars page and click "Add New Car".</li>
            <li>💡 <strong>How can I update car details?</strong> <br> Click the Edit button next to the car.</li>
            <li>💡 <strong>Where are images stored?</strong> <br> Uploaded images are stored in `public/car_images`.</li>
        </ul>

        <p>Still need help? Contact <a href="mailto:support@example.com">support@example.com</a>.</p>
    </div>
@endsection
