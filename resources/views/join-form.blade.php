<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>توفير مساحة عمل مجانية
        في عمرو هب</title>
    <meta name="description" content="تبرّع من أكاديميين من الخارج لتوفير ساعات عمل مجانية
مخصّصة للطلاب الجامعيين والأكاديميين عبر عمرو هب.

🔹 4 ساعات عمل مجانية أسبوعيًا
⏱️ الحد الأدنى: 20 دقيقة يوميًا
⏱️ الحد الأقصى: ساعتان يوميًا

بيئة هادئة ✨
إنترنت ثابت 🌐
كهرباء تساعد على الإنجاز ⚡

لأن التعليم يستحق الدعم 💙

📍 خان يونس – وسط البلد – شارع شبير
📞 0594099356">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" type="image/png" href="{{asset('amrohub.png')}}">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center p-6">
{{--    <img  alt="amro Hub" class="h-auto max-w-full" width="200" height="200" src="{{asset('amrohub.png')}}">--}}

<div class="grid grid-cols-1  md:grid-cols-2 gap-4">
    <div class="h-full">
        <div class=" border-blue-700 border bg-white overflow-hidden w-full   rounded-xl shadow-lg  mb-2"
             style=""
        >
            <img alt="amro banner" src='{{asset('banner.jpg')}}'>
        </div>
        <div class=" border-white-700 border bg-white w-full  rounded-xl shadow-lg p-6 ">
            <div class="   items-center p-4 md:p-6">
                <h1 class="text-4xl font-bold text-center text-gray-800 mb-5">
                    حملة توفير ساعات مجانية
                </h1>
                <p class="text-center   text-gray-800 mb-4">


                    يعلن "عمرو هب" عن إطلاق حملة توفير ساعات عمل مجانية لطلبو الجامعات وأعضاء هيئة التدريس وذلك بتبرّع
                    كريم من أكاديميين بالخارج.
                </p>
                <h2 class="text-2xl font-bold  text-gray-800 mb-3"> تفاصيل الحملة:
                </h2>


                <p class="   text-gray-800 mb-2">
                    ⏱️ متاح لكل مستفيد 4 ساعات أسبوعيًا.
                </p>
                <p class="text-gray-800 mb-2">⏱️ الحد الأدنى للجلسة: 20 دقيقة.</p>
                <p class=" text-gray-800 mb-2">⏱️ الحد الأقصى للجلسة: ساعتان.</p>
                <p class=" text-gray-800 mb-2"> 🚫 استخدام وقت الجلسة في أي أنشطة غير أكاديمية سيحرم المستفيد من الحملة.</p>


                <p class=" text-gray-700 mb-2">✨ بيئة هادئة </p>
                <p class=" text-gray-700 mb-2">🌐 إنترنت ثابت </p>
                <p class=" text-gray-700 mb-2"> ⚡ كهرباء تساعد على الإنجاز</p>
                <p class=" text-gray-700 mb-2"> 💙 لأن التعليم يستحق الدعم </p>
                <p class=" text-gray-700 mb-2">📍 خان يونس – وسط البلد – شارع شبير</p>
                <p class=" text-gray-700 mb-2">📞 0594099356</p>


            </div>
        </div>

    </div>

    <div class="bg-white w-full h-full  rounded-2xl shadow-lg p-6">

        @if(session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50  " role="alert">
                <span class="font-medium">نجاح!</span> {{session('success')}}
            </div>

        @endif

        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-white-800 rounded-lg bg-red-50 dark:bg-red-800 dark:text-red-400"
                 role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="space-y-4" method="post" action="{{route('join-requests.store')}}">

            @csrf
            <!-- الاسم الكامل -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    الاسم الكامل
                    <span class="text-red-700">*</span>
                </label>
                <input
                    type="text"
                    name="name"
                    value="{{old('name')}}"
                    placeholder="أدخل اسمك الكامل"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                />
            </div>


            <!-- ساعات التوفر -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    رقم الهاتف
                    <span class="text-red-700">*</span>

                </label>
                <input
                    type="text"
                    placeholder="056xxxxx00"
                    required
                    value="{{old('phone')}}"

                    name="phone"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    البريد الالكتروني
                    <span class="text-red-700">*</span>

                </label>
                <input
                    type="email"
                    placeholder="email@gmail.com"
                    required
                    value="{{old('email')}}"

                    name="email"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
            </div>

            <!-- الجامعة -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    اسم الجامعة
                    <span class="text-red-700">*</span>

                </label>
                <input
                    type="text"
                    placeholder="أدخل اسم الجامعة"
                    name="university"
                    value="{{old('university')}}"

                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                />
            </div>
            <!-- الجامعة -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    الرقم الوظيفي
                    /
                    الرقم الجامعي
                    <span class="text-red-700">*</span>

                </label>
                <input
                    type="text"
                    name="university_id"
                    value="{{old('university_id')}}"

                    placeholder="أدخل الرقم الوظيفي/ الرقم الجامعي"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                />
            </div>

            <!-- الدور -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    الجنس <span class="text-red-700">*</span>
                </label>
                <select name="gender"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                >
                    <option @selected(old('gender') === "male") value="male">ذكر</option>
                    <option @selected(old('gender') === "female") value="female">أنثي</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    الدور / الوظيفة <span class="text-red-700">*</span>
                </label>
                <select
                    name="type"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
                    <option @selected(old('type') === "student") value="student">طالب جامعي</option>
                    <option @selected(old('type') === "teacher")  value="teacher">أكاديمي / محاضر</option>
                </select>
            </div>

            <!-- التخصص -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    التخصص الدراسي
                    <span class="text-red-700">*</span>
                </label>
                <input
                    type="text"
                    value="{{old('specialization')}}"
                    required
                    placeholder="مثلاً: علوم الحاسوب"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    name="specialization"
                />
            </div>

            <!-- زر الإرسال -->
            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition"
            >
                إرسال الطلب
            </button>

        </form>
    </div>
</div>


</body>
</html>
