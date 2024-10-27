<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex justify-center mt-10 ml-[600px] mr-[600px] mt-[160px] rounded-lg shadow-lg h-[250px] border-2">
    <form action="{{ url('/form2') }}" method="POST" class="mt-[28px]">
        @csrf
        <h1 class="font-bold text-center text-[20px] mb-[12px]">Create Material</h1>
        <label for="material_name">Material Name</label>
        <input type="text" name="material_name" class="border-2 block" required>
        <label for="material_name">Days</label>
        <input type="text" name="days" class="border-2 block" required>

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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const workOrderNumber = "{{ session('Work_order_number') }}"; // Get session variable
        if (workOrderNumber) {
            localStorage.setItem('workOrderNumber', workOrderNumber); // Save to local storage
        }
    });
</script>

</script>
</body>
</html>
