<!-- resources/views/vendor/authpackage/forgot-password.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Forgot Password</h2>

        @if(session('status'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="w-full bg-yellow-500 text-white py-2 rounded hover:bg-yellow-600 transition">Send Reset Link</button>

            <p class="mt-4 text-center text-sm">
                Remember your password? <a href="{{ route('login') }}" class="text-blue-500">Login</a>
            </p>
        </form>
    </div>
</body>
</html>
