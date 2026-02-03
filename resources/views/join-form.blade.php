<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>توفير مساحة عمل مجانية
        في عمرو هب</title>
    <meta name="description" content="حملة توفير ساعات مجانية لطلبة الجامعات وأعضاء هيئة التدريس">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <!-- Styles / Scripts -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{asset('amrohub.png')}}">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center p-6">

    <div class="grid grid-cols-1  md:grid-cols-2 gap-4">
        <div class="h-full">
            <div class=" border-blue-700 border bg-white overflow-hidden w-full   rounded-xl shadow-lg  mb-2"
                style="">
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


            <form class="space-y-4 storeForm" method="post" action="{{route('join-requests.store')}}">

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
                        required />
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
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
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
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
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
                        required />
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
                        required />
                </div>

                <!-- الدور -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        الجنس <span class="text-red-700">*</span>
                    </label>
                    <select name="gender"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option @selected(old('gender')==="male" ) value="male">ذكر</option>
                        <option @selected(old('gender')==="female" ) value="female">أنثي</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        الدور / الوظيفة <span class="text-red-700">*</span>
                    </label>
                    <select
                        name="type"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required>
                        <option @selected(old('type')==="student" ) value="student">طالب جامعي</option>
                        <option @selected(old('type')==="teacher" ) value="teacher">أكاديمي / محاضر</option>
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
                        name="specialization" />
                </div>

                <!-- زر الإرسال -->
                <button
                    disabled
                    type="submit"
                    class="disabled:bg-gray-400 disabled:cursor-not-allowed disabled:opacity-75 sentBtn w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                    إرسال الطلب

                    <svg id="joinBtnLoader" class="hidden inline w-8 h-8 w-8 h-8 text-neutral-tertiary animate-spin fill-brand" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                        <path d="M272 112C272 85.5 293.5 64 320 64C346.5 64 368 85.5 368 112C368 138.5 346.5 160 320 160C293.5 160 272 138.5 272 112zM272 528C272 501.5 293.5 480 320 480C346.5 480 368 501.5 368 528C368 554.5 346.5 576 320 576C293.5 576 272 554.5 272 528zM112 272C138.5 272 160 293.5 160 320C160 346.5 138.5 368 112 368C85.5 368 64 346.5 64 320C64 293.5 85.5 272 112 272zM480 320C480 293.5 501.5 272 528 272C554.5 272 576 293.5 576 320C576 346.5 554.5 368 528 368C501.5 368 480 346.5 480 320zM139 433.1C157.8 414.3 188.1 414.3 206.9 433.1C225.7 451.9 225.7 482.2 206.9 501C188.1 519.8 157.8 519.8 139 501C120.2 482.2 120.2 451.9 139 433.1zM139 139C157.8 120.2 188.1 120.2 206.9 139C225.7 157.8 225.7 188.1 206.9 206.9C188.1 225.7 157.8 225.7 139 206.9C120.2 188.1 120.2 157.8 139 139zM501 433.1C519.8 451.9 519.8 482.2 501 501C482.2 519.8 451.9 519.8 433.1 501C414.3 482.2 414.3 451.9 433.1 433.1C451.9 414.3 482.2 414.3 501 433.1z" />
                    </svg>
                </button>


            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(window).on('load', function() {
            $('.sentBtn').attr('disabled', false)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });



        $(document).on('submit', '.storeForm', function(e) {
            e.preventDefault()
            $('.sentBtn').attr('disabled', true)
            $('#joinBtnLoader').removeClass('hidden')
            const form = $(this)

            $.post("{{route('join-requests.store')}}", form.serialize(), function(response) {


                Toastify({
                    text: response.message,
                    duration: 5000,
                    newWindow: true,
                    close: true,
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "linear-gradient(to right, rgb(0, 176, 155), rgb(150, 201, 61))",

                    },
                }).showToast();
                form.trigger('reset');

            }).fail(function(response) {

                let errors = response.responseJSON.errors


                Object.keys(errors).forEach(key => {
                    errors[key].forEach(error => {
                        Toastify({
                                text: error,
                                duration: 5000,
                                close: true,
                                stopOnFocus: true, // Prevents dismissing of toast on hover
                                style: {
                                    background: "linear-gradient(to right, rgb(255, 95, 109), rgb(255, 195, 113))",
                                    color: "#000000ff",
                                }
                            })
                            .showToast();


                        // console.log(error)
                    });
                    // console.log(error)

                });
            }).always(function() {
                $('#joinBtnLoader').addClass('hidden')
                $('.sentBtn').attr('disabled', false)
            });

        })
    </script>
</body>

</html>