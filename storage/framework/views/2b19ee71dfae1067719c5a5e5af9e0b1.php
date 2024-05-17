<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white max-w-md w-full p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-8">Login</h1>
        <form action="<?php echo e(route('login')); ?>" method="POST" class="space-y-4">
            <?php echo csrf_field(); ?> <!-- CSRF Token -->

            <div>
                <label for="email" class="block">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email" required class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>

            <div>
                <label for="password" class="block">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password" required class="w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>

            <button type="submit" class="w-full bg-blue-700 text-white py-2 rounded-md hover:bg-blue-900 focus:outline-none focus:bg-blue-500">Login</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\myproject\resources\views/login.blade.php ENDPATH**/ ?>