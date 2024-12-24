<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester {{ $semesterData->number }} - Subjects</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Computer Science</h1>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="text-sm bg-red-500 px-3 py-1 rounded hover:bg-red-600 transition">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </header>
    <div class="min-h-screen p-6">
        <!-- Container -->
        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
            <!-- Header -->
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Semester {{ $semesterData->number }}</h1>
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Subjects</h2>

            <!-- Subjects List -->
            @if ($subjects->count())
                <ul class="space-y-4">
                    @foreach ($subjects as $subject)
                        <li>
                            <a href="{{ route('subject', $subject->id) }}"
                                class="block p-4 bg-blue-50 rounded-lg shadow hover:bg-blue-100 transition">
                                <h3 class="text-lg font-semibold text-gray-700">{{ $subject->name }}</h3>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500 text-center mt-4">No subjects available for this semester.</p>
            @endif

            <!-- Back Button -->
            <div class="mt-6">
                <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline">
                    Back to Semesters
                </a>
            </div>
        </div>
    </div>
</body>

</html>
