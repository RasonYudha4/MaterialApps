<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Material Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Order Material Table</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="py-2 px-4 border border-black">Client Name</th>
                        <th class="py-2 px-4 border border-black">Materials</th>
                        <th class="py-2 px-4 border border-black">Days</th>
                        <th class="py-2 px-4 border border-black">Percentage</th>
                        <th class="py-2 px-4 border border-black">Finished date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr class="hover:bg-gray-100">
                            @foreach($materials as $material)
                                @if($material->id == $order->materialId)
                                    <td class="py-2 px-4 border border-gray-300">{{$order->order->Client}}</td>
                                    <td class="py-2 px-4 border border-gray-300">{{$material->names}}</td>
                                    <td class="py-2 px-4 border border-gray-300">{{$material->days}}</td>
                                    <td class="py-2 px-4 border border-gray-300">{{$order->Percentage}}</td>
                                    <td class="py-2 px-4 border border-gray-300">{{$order->Finished_date}}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>