<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<div class="flex justify-center mt-10 ml-[600px] mr-[600px] rounded-lg shadow-lg h-[300px] border-2">
    <form action="{{ url('/form3') }}" method="POST">
        @csrf
        <h1 class="font-bold text-center text-[20px] mb-[23px]">Material Order</h1>
        
        <label>Work Order Number:</label>
        <p id="work_order_number"></p> <!-- Change ID to work_order_number -->
        
        <label>Material:</label>
        @foreach($materials as $material)
            <label class="block">
                <input type="checkbox" name="material_id" onclick="toggleInput('material1', this)"
                    value="{{$material->id}}" /> {{$material->names}}
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
