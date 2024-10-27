<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 p-0">
<div class="flex justify-center mt-10 mx-auto mr-[600px] rounded-lg shadow-lg w-[400px] h-[500px] border-2">
    <form action="{{ url('/form3') }}" method="POST">
        @csrf
        <h1 class="font-bold text-center text-[20px] mb-[23px]">Material Order</h1>
        
        <label>Work Order Number:</label>
        <select name="order_id" id="order_id" required>
        @foreach($orders as $order)
            <option value="{{ $order->Work_order_number }}">{{ $order->Work_order_number }}</option>
        @endforeach
        </select>
        
        <label class="block">Material:</label>
        @foreach($materials as $material)
        <label class="block">
            <input type="radio" name="material_id" value="{{ $material->id }}"  required/> {{ $material->names }}
        </label>
        @endforeach
        <br>
        <label>Percentage:</label>
        <input type="number" name="percentage" class="border-2 block" required />
        <button type="submit"
            class="block bg-blue-400 py-2 rounded-lg w-full uppercase font-bold mt-[6px]">Submit</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const workOrderNumber = localStorage.getItem('work_order_number'); // Retrieve from local storage
        if (workOrderNumber) {
            document.getElementById('work_order_number').innerText = workOrderNumber; // Display it
        } else {
            document.getElementById('work_order_number').innerText = 'No work order number set';
        }
    });
</script>

</body>

</html>
