<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Your Property</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="container max-w-md w-full p-8 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-8">List Your Property</h1>
        <form method="post" action="<?php echo e(route('list.store')); ?>" class="space-y-4">
            <?php echo csrf_field(); ?> <!-- CSRF Token -->
           
            <div>
                <label for="propertyName" class="form-label">Property Name</label>
                <input type="text" id="propertyName" name="propertyName" placeholder="Property name" required class="form-input w-full">
            </div>

            <div>
                <label for="propertyOwner" class="form-label">Property Owner</label>
                <input type="text" id="propertyOwner" name="propertyOwner" placeholder="Property owner" required class="form-input w-full">
            </div>

            <div>
                <label for="amenities" class="form-label">Amenities</label>
                <input type="text" id="amenities" name="amenities" placeholder="Amenities" class="form-input w-full">
            </div>

            <div>
                <label for="sqfeet" class="form-label">Square Feet</label>
                <input type="number" id="sqfeet" name="sqfeet" placeholder="Square feet" required class="form-input w-full">
            </div>

            <div>
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" placeholder="Description" class="form-input w-full"></textarea>
            </div>

            <div>
                <label for="price" class="form-label">Price</label>
                <input type="number" id="price" name="price" placeholder="Price" step="0.01" required class="form-input w-full">
            </div>

            <div class="flex justify-between">
                <button type="submit" class="px-4 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-900 focus:outline-none focus:bg-blue-500">Submit</button>
                <button type="button" onclick="window.location='<?php echo e(route('home')); ?>'" class="px-4 py-2 bg-red-700 text-white rounded-md hover:bg-red-900 focus:outline-none focus:bg-red-500">Back</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\myproject\resources\views/list.blade.php ENDPATH**/ ?>