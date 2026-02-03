<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>حملة توفير ساعات مجانية</title>
    <meta name="description" content="حملة توفير ساعات مجانية لطلبة الجامعات وأعضاء هيئة التدريس">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Styles / Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{asset('amrohub.png')}}">
</head>

<body class="bg-gray-100 min-h-screen   p-6">



    <div class="bg-white w-full h-full  rounded-2xl shadow-lg p-6">


        <h1 class="text-4xl font-bold text-center text-gray-800 mb-5">حملة توفير ساعات مجانية</h1>
        <p class="text-center mt-5  text-2xl text-green-800 mb-4">
            {{ $message }}
        </p>
    </div>



</body>

</html>