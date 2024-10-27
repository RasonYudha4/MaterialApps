<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex justify-center align-center mt-[225px] ml-[600px] mr-[600px] rounded-lg shadow-lg h-[215px] border-2">
        <form action="{{ url('/form1') }}" method="POST">
            @csrf
            <h1 class="font-bold flex justify-center align-center text-[20px] mb-[12px]">Order</h1>
            <label>Client:</label>
            <input type="text" name="Client" class="border-2 block" required/> 
            <label class="block">Work Date:</label>
            <input type="date" name="Work_date" class="border-2" required/>
            <button type="submit" class="block bg-blue-400 py-2 rounded-lg w-full uppercase font-bold transition duration-300 mt-[6px]">Submit</button>
        </form>
    </div>
</body>
</html>
