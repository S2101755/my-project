<!-- listings.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listings</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="py-8 text-center">
        <h1 class="text-3xl font-bold mb-8">Listings</h1>
    </div>
    <div class="container mx-auto">
        <table class="w-full border-collapse border border-gray-300 mb-8">
            <thead>
                <tr class="bg-gray-200">
                    <th class="py-2 px-4 border">PropertyName</th>
                    <th class="py-2 px-4 border">Name of Owner</th>
                    <th class="py-2 px-4 border">Amenities</th>
                    <th class="py-2 px-4 border">Size in SqFeet</th>
                    <th class="py-2 px-4 border">Description</th>
                    <th class="py-2 px-4 border">Price</th>
                    <th class="py-2 px-4 border">Posted on</th>
                    <th class="py-2 px-4 border">Rent</th>
                </tr>
            </thead>
            <tbody>
                @foreach($forrent as $listing)
                <tr>
                    <td class="py-2 px-4 border">{{ $listing->propertyName }}</td>
                    <td class="py-2 px-4 border">{{ $listing->propertyOwner }}</td>
                    <td class="py-2 px-4 border">{{ $listing->amenities }}</td>
                    <td class="py-2 px-4 border">{{ $listing->sqfeet }}</td>
                    <td class="py-2 px-4 border">{{ $listing->description }}</td>
                    <td class="py-2 px-4 border">{{ $listing->price }}</td>
                    <td class="py-2 px-4 border">{{ $listing->created_at }}</td>
                    <td class="py-2 px-4 border"><button class="bg-green-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">
                            Contact Seller
                        </button>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-between">
        <button type="button" onclick="window.location='{{ route('home') }}'" class="px-4 py-2 bg-red-700 text-white rounded-md hover:bg-red-900 focus:outline-none focus:bg-red-500">Back</button>
        </div>
    </div>
</body>
</html>
