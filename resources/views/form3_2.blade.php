<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex justify-center mt-10 ml-[600px] mr-[600px] mt-[160px] rounded-lg shadow-lg h-[300px] border-2">
    <form action="{{ url('') }}" method="POST" class="mt-[28px]">
        @csrf
        <h1 class="font-bold text-center text-[20px] mb-[12px]">Material Order</h1>
        <select name="work_order_number" id="orderNo" required>
            <option value="">---Select orderNo---</option>
            @foreach($orders as $order)
                <option value="{{ $order->id }}">{{ $order->Work_order_number }}</option>
            @endforeach
        </select><br>

        <label class="block">Materials:</label>
        <label class="block">
            <input type="checkbox" name="materials[material1][checked]" value="1" onchange="toggleInput('material1', this)" /> Material 1
            <input type="number" name="materials[material1][days]" placeholder="Days" class="border-2 hidden" id="material1" />
        </label>
        
        <label class="block">
            <input type="checkbox" name="materials[material2][checked]" value="1" onchange="toggleInput('material2', this)" /> Material 2
            <input type="number" name="materials[material2][days]" placeholder="Days" class="border-2 hidden" id="material2" />
        </label>

        <label class="block">
            <input type="checkbox" name="materials[material3][checked]" value="1" onchange="toggleInput('material3', this)" /> Material 3
            <input type="number" name="materials[material3][days]" placeholder="Days" class="border-2 hidden" id="material3" />
        </label>

        <button type="submit" class="block bg-blue-400 py-2 rounded-lg w-full uppercase font-bold mt-[6px]">Submit</button>
    </form> 
</div>

<script>
    function toggleInput(materialId, checkbox) {
        const inputField = document.getElementById(materialId);
        if (checkbox.checked) {
            inputField.classList.remove('hidden');
            inputField.required = true; 
        } else {
            inputField.classList.add('hidden');
            inputField.value = ''; 
            inputField.required = false;  
        }
    }
</script>
</body>
</html>
