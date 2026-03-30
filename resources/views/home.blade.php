<!DOCTYPE html>

<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Amro Hub | عمرو هب - مساحتك للإنتاج والإبداع</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&amp;display=swap"
        rel="stylesheet" />
    <link href="
https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css
" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandBlue: '#005494',
                        brandGreen: '#45B76A',
                        brandDark: '#1a1a1a',
                    },
                    fontFamily: {
                        tajawal: ['Tajawal', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <style data-purpose="base-typography">
        body {
            font-family: 'Tajawal', sans-serif;
            scroll-behavior: smooth;
        }

        .text-gradient {
            background: linear-gradient(90deg, #005494, #45B76A);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-pattern {
            background-color: #ffffff;
            background-image: radial-gradient(#005494 0.5px, transparent 0.5px), radial-gradient(#005494 0.5px, #ffffff 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
            opacity: 0.05;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-900 overflow-x-hidden">
    <!-- BEGIN: MainHeader -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 shadow-sm"
        data-purpose="site-navigation">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <img alt="Amro Hub Logo" class="w-auto h-14" data-purpose="header-logo"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRsBTibEm_aEQBUdxbSogYcPWAsMG70Y1xVSSjXDUY_aIFf6qKc3KqvLUPMEXkesFKWPsLOMEvSSP1R-ygpdSqH9z0MesX4YNlzi06BE24CVIPzQXcNHaeb9AUJ6PRs79Mpow461Pj4_1BQbgnEHhhd7HOaQ_TGFV5BZBiQ3G50KaBHQVW1-_BjCdCNvK6y1h0QK7663sItyalN3LlZzFuXgT9mU7-3gfPdXH0mbMVfHQY7WfAENTDxpKUMm4ETdTahw3RuVPKwBU" />
                <span class="text-2xl font-extrabold text-brandBlue hidden sm:block">عمرو هب</span>
            </div>
            <div class="hidden md:flex items-center gap-8">
                <a class="font-medium hover:text-brandBlue transition-colors" href="#about">من نحن</a>
                <a class="font-medium hover:text-brandBlue transition-colors" href="#features">المميزات</a>
                <a class="font-medium hover:text-brandBlue transition-colors" href="#pricing">الاشتراكات</a>
                <a class="font-medium hover:text-brandBlue transition-colors" href="#testimonials">آراء العملاء</a>
                <a class="font-medium hover:text-brandBlue transition-colors" href="#contact-section">اتصل بنا</a>
            </div>
            <div class="flex items-center gap-4">
                <a class="text-brandBlue border-2 border-brandBlue px-6 py-2.5 rounded-full font-bold hover:bg-brandBlue/5 transition-all"
                    href="#login">
                    تسجيل الدخول
                </a>
                <a class="bg-brandBlue text-white px-6 py-2.5 rounded-full font-bold hover:bg-brandBlue/90 transition-all shadow-md"
                    href="#pricing">
                    احجز مكانك
                </a>
            </div>
        </nav>
    </header>
    <!-- END: MainHeader -->
    <main>
        <!-- BEGIN: HeroSection -->
        <section class="relative py-16 lg:py-24 overflow-hidden bg-white" data-purpose="hero-banner">
            <div class="absolute inset-0 hero-pattern pointer-events-none"></div>
            <div
                class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-[600px] h-[600px] bg-brandBlue/10 rounded-full blur-3xl">
            </div>
            <div
                class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-brandGreen/10 rounded-full blur-3xl">
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="text-right order-2 lg:order-1">
                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brandBlue/10 text-brandBlue font-bold text-sm mb-6">
                            <span class="w-2 h-2 rounded-full bg-brandBlue animate-pulse"></span>
                            مساحة العمل الأفضل للمستقلين والطلاب
                            مساحة العمل الأفضل للمستقلين والطلاب
                        </div>
                        <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-tight mb-6">
                            Amro Hub <br /> مساحتك <span class="text-brandBlue">للإنتاج والإبداع</span>
                        </h1>
                        <p class="text-xl text-slate-600 mb-10 max-w-xl leading-relaxed">
                            انضم إلى مجتمع حيوي يجمع بين التكنولوجيا والراحة. نوفر لك بيئة عمل متكاملة مع إنترنت فائق
                            وكهرباء مستقرة لتتفرغ لإبداعك فقط.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a class="px-10 py-5 bg-brandBlue text-white font-bold rounded-2xl shadow-xl shadow-brandBlue/30 hover:-translate-y-1 transition-all text-lg"
                                href="#pricing">
                                ابدأ رحلتك الآن
                            </a>
                            <a class="px-10 py-5 bg-white border-2 border-slate-100 text-slate-700 font-bold rounded-2xl hover:bg-slate-50 transition-all text-lg"
                                href="#about">
                                من نحن
                            </a>
                        </div>
                        <div class="mt-12 flex items-center gap-6">
                            <div class="flex -space-x-3 space-x-reverse">
                                <div class="w-12 h-12 rounded-full border-2 border-white bg-slate-200"></div>
                                <div class="w-12 h-12 rounded-full border-2 border-white bg-slate-300"></div>
                                <div class="w-12 h-12 rounded-full border-2 border-white bg-slate-400"></div>
                                <div
                                    class="w-12 h-12 rounded-full border-2 border-white bg-brandBlue flex items-center justify-center text-white text-xs font-bold">
                                    +50</div>
                            </div>
                            <p class="text-sm text-slate-500 font-medium">انضم إلى أكثر من 50 مبدعاً يعملون معنا يومياً
                            </p>
                        </div>
                    </div>
                    <div class="relative order-1 lg:order-2">
                        <div class="relative w-full aspect-square max-w-lg mx-auto">
                            <div
                                class="absolute top-10 right-0 w-24 h-24 bg-brandGreen/20 rounded-2xl rotate-12 animate-bounce transition-all duration-1000 flex items-center justify-center text-4xl shadow-lg backdrop-blur-sm">
                                💡</div>
                            <div
                                class="absolute bottom-10 left-0 w-20 h-20 bg-brandBlue/20 rounded-full -rotate-12 animate-pulse flex items-center justify-center text-3xl shadow-lg backdrop-blur-sm">
                                ☕</div>
                            <div class="absolute top-1/2 -left-10 w-16 h-16 bg-brandDark/10 rounded-full animate-bounce flex items-center justify-center text-2xl shadow-lg backdrop-blur-sm"
                                style="animation-delay: 0.5s">💻</div>
                            <div
                                class="w-full h-full bg-gradient-to-br from-brandBlue/5 to-brandGreen/5 rounded-[3rem] border-2 border-slate-50 shadow-2xl overflow-hidden flex items-center justify-center relative p-8">
                                <svg class="w-full h-full text-brandBlue/80" fill="none" viewbox="0 0 200 200"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="currentColor" height="60" rx="4" width="100" x="50"
                                        y="80"></rect>
                                    <rect fill="#ffffff" height="50" rx="2" width="90" x="55" y="85">
                                    </rect>
                                    <path d="M50 140h100l10 10H40l10-10z" fill="#cbd5e1"></path>
                                    <circle cx="80" cy="50" fill="#45B76A" r="10"></circle>
                                    <path d="M60 75q20-15 40 0" stroke="#45B76A" stroke-width="8"></path>
                                    <circle cx="120" cy="50" fill="#005494" r="10"></circle>
                                    <path d="M100 75q20-15 40 0" stroke="#005494" stroke-width="8"></path>
                                    <path d="M100 20v20M130 30l-10 10M70 30l10 10" stroke="#fbbf24"
                                        stroke-linecap="round" stroke-width="3"></path>
                                </svg>
                                <div
                                    class="absolute bottom-12 right-12 bg-white p-4 rounded-xl shadow-xl border border-slate-100 flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-green-500 flex items-center justify-center text-white">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24">
                                            <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs text-slate-400 font-bold">الحالة</p>
                                        <p class="text-sm font-bold text-slate-800">كهرباء مستمرة 24/7</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: HeroSection -->
        <!-- BEGIN: AboutSection -->
        <section class="py-20 bg-white" data-purpose="about-section" id="about">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="text-right">
                        <div
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brandGreen/10 text-brandGreen font-bold text-sm mb-6">
                            <span class="w-2 h-2 rounded-full bg-brandGreen"></span>
                            تعرف علينا عن قرب
                        </div>
                        <h2 class="text-4xl font-extrabold text-slate-900 leading-tight mb-8">
                            عمرو هب: المساحة <br /><span class="text-brandBlue">الأولى للإبداع</span> في خانيونس
                        </h2>
                        <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                            تأسست <strong>عمرو هب (Amro Hub)</strong> لتكون الوجهة الرئيسية والمفضلة للمستقلين
                            (Freelancers) والطلاب في قلب مدينة خانيونس. نحن ندرك التحديات التي تواجه المبدعين في البحث
                            عن بيئة عمل هادئة ومستقرة.
                        </p>
                        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                            من موقعنا الاستراتيجي في <strong>شارع شبير بمنطقة البلد</strong>، نقدم تجربة فريدة تجمع بين
                            رفاهية المكان وااحترافية التجهيزات. نحن لسنا مجرد مساحة عمل، بل مجتمع متكامل يدعم الإنتاجية
                            ويحفز على الابتكار.
                        </p>
                        <div class="flex flex-col sm:flex-row items-center gap-6">
                            <div class="flex items-center gap-4 w-full sm:w-auto">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-slate-50 flex items-center justify-center text-3xl shadow-sm border border-slate-100">
                                    📍</div>
                                <div>
                                    <p class="text-sm font-bold text-slate-400">العنوان</p>
                                    <p class="text-brandBlue font-extrabold">خانيونس - البلد - شارع شبير</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 w-full sm:w-auto">
                                <div
                                    class="w-14 h-14 rounded-2xl bg-slate-50 flex items-center justify-center text-3xl shadow-sm border border-slate-100">
                                    🎯</div>
                                <div>
                                    <p class="text-sm font-bold text-slate-400">رؤيتنا</p>
                                    <p class="text-brandGreen font-extrabold">تمكين جيل المبدعين الرقمي</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white group">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-brandBlue/40 to-transparent mix-blend-multiply transition-opacity group-hover:opacity-60">
                            </div>
                            <img alt="Professional Coworking Space" class="w-full h-[500px] object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9uZKmsSUVAOs4hLZDJx2gGjQuvcYIOpmureYIR0tR-Y0e4oThOl8w9MotQ_bk4Rp8jwfsrY6pm2UHvRBlCA4VaW1NnUnOp1gp_XeJuiSeh0LjIznxXEyCZOIwx9yA-Co_VqcV7h7jH6RChPgu5dlE0f_26bT2IGvTWDRXEbGpn67ICUdNiXcjJ-9DEuaGB2cY550mQVtSaMQ1fOoa15133qwIVnVQR7yEIIZzYokaGzVm05I9RfCzbZdXI8kYVjygWBlsJeZuCEg" />
                            <div
                                class="absolute bottom-8 right-8 bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-xl border border-white/20">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 bg-brandGreen rounded-xl flex items-center justify-center text-white shadow-lg">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24">
                                            <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-brandGreen">بيئة احترافية</p>
                                        <p class="font-extrabold text-slate-900">تجهيزات عالمية</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Decorative Elements -->
                        <div class="absolute -z-10 -top-6 -left-6 w-32 h-32 bg-brandBlue/10 rounded-full blur-2xl">
                        </div>
                        <div
                            class="absolute -z-10 -bottom-6 -right-6 w-48 h-48 bg-brandGreen/10 rounded-full blur-3xl">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: AboutSection -->
        <!-- BEGIN: FeaturesSection -->
        <section class="py-20 bg-slate-50" data-purpose="features-grid" id="features">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-extrabold text-slate-900 mb-4">لماذا تختار Amro Hub؟</h2>
                    <p class="text-slate-600 max-w-2xl mx-auto">نوفر لك كل ما تحتاجه للتركيز على عملك وتطوير مشاريعك في
                        بيئة احترافية.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div
                        class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-slate-100 text-center">
                        <div
                            class="w-16 h-16 bg-blue-50 text-brandBlue rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-brandBlue">إنترنت فائق السرعة</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">اتصال ثابت وسريع جداً يلبي احتياجات المبرمجين
                            والمصممين.</p>
                    </div>
                    <div
                        class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-slate-100 text-center">
                        <div
                            class="w-16 h-16 bg-green-50 text-brandGreen rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-brandGreen">كهرباء مستمرة</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">وداعاً للانقطاعات، نوفر أنظمة طاقة احتياطية
                            تضمن استمرارية عملك.</p>
                    </div>
                    <div
                        class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-slate-100 text-center">
                        <div
                            class="w-16 h-16 bg-blue-50 text-brandBlue rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-brandBlue">هدوء تام</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">بيئة محفزة للتركيز بعيداً عن ضجيج المقاهي
                            التقليدية.</p>
                    </div>
                    <div
                        class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow border border-slate-100 text-center">
                        <div
                            class="w-16 h-16 bg-green-50 text-brandGreen rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-brandGreen">ركن المشروبات</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">تشكيلة من المشروبات والمنبهات لتبقيك بكامل
                            نشاطك طوال اليوم.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: FeaturesSection -->
        <!-- BEGIN: PricingSection -->
        <section class="py-20 bg-white" data-purpose="subscription-plans" id="pricing">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-extrabold text-slate-900 mb-4">خطط الاشتراك المرنة</h2>
                    <p class="text-slate-600">اختر الباقة التي تناسب احتياجاتك وجدولك الزمني.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                    <!-- Hourly Plan -->
                    <div
                        class="flex flex-col p-8 bg-white border border-slate-200 rounded-3xl hover:border-brandBlue transition-all hover:shadow-xl group">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">ساعة واحدة</h3>
                        <div class="flex items-baseline gap-1 mb-8"><span
                                class="text-4xl font-extrabold text-brandBlue">4 شيكل</span><span
                                class="text-slate-400 text-sm">/للساعة</span></div>
                        <ul class="space-y-4 mb-10 flex-grow">
                            <li class="flex items-center gap-3 text-slate-600"><span
                                    class="text-brandGreen text-xl font-bold">✓</span> <span class="text-sm">إنترنت
                                    مفتوح</span></li>
                            <li class="flex items-center gap-3 text-slate-600"><span
                                    class="text-brandGreen text-xl font-bold">✓</span> <span class="text-sm">كهرباء
                                    مضمونة</span></li>
                        </ul>
                        <button
                            class="w-full py-4 px-4 rounded-2xl font-bold border-2 border-brandBlue text-brandBlue group-hover:bg-brandBlue group-hover:text-white transition-all shadow-sm">احجز
                            الآن</button>
                    </div>
                    <!-- Daily Plan -->
                    <div
                        class="flex flex-col p-8 bg-white border border-slate-200 rounded-3xl hover:border-brandBlue transition-all hover:shadow-xl group">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">اشتراك يومي</h3>
                        <div class="flex items-baseline gap-1 mb-8"><span
                                class="text-4xl font-extrabold text-brandBlue">25 شيكل</span><span
                                class="text-slate-400 text-sm">/يومياً</span></div>
                        <ul class="space-y-4 mb-10 flex-grow">
                            <li class="flex items-center gap-3 text-slate-600"><span
                                    class="text-brandGreen text-xl font-bold">✓</span> <span class="text-sm">الوصول
                                    الكامل 12 ساعة</span></li>
                            <li class="flex items-center gap-3 text-slate-600"><span
                                    class="text-brandGreen text-xl font-bold">✓</span> <span class="text-sm">ركن
                                    المشروبات مجاناً</span></li>
                        </ul>
                        <button
                            class="w-full py-4 px-4 rounded-2xl font-bold border-2 border-brandBlue text-brandBlue group-hover:bg-brandBlue group-hover:text-white transition-all shadow-sm">احجز
                            الآن</button>
                    </div>
                    <!-- Weekly Plan -->
                    <div
                        class="flex flex-col p-8 bg-brandBlue text-white border border-brandBlue rounded-3xl shadow-2xl shadow-brandBlue/30 relative transform hover:scale-[1.02] transition-transform">
                        <div
                            class="absolute -top-4 right-1/2 translate-x-1/2 bg-brandGreen text-white px-5 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest shadow-lg">
                            الأكثر طلباً</div>
                        <h3 class="text-lg font-bold mb-2">اشتراك أسبوعي</h3>
                        <div class="flex items-baseline gap-1 mb-8"><span class="text-4xl font-extrabold">130
                                شيكل</span><span class="text-blue-200 text-sm">/أسبوعياً</span></div>
                        <ul class="space-y-4 mb-10 flex-grow">
                            <li class="flex items-center gap-3"><span
                                    class="text-brandGreen text-xl font-bold">✓</span> <span class="text-sm">خصم 20%
                                    عن اليومي</span></li>
                            <li class="flex items-center gap-3"><span
                                    class="text-brandGreen text-xl font-bold">✓</span> <span class="text-sm">مكان مخصص
                                    وخزنة خاصة</span></li>
                            <li class="flex items-center gap-3"><span
                                    class="text-brandGreen text-xl font-bold">✓</span> <span class="text-sm">إنترنت
                                    عالي الأولوية</span></li>
                        </ul>
                        <button
                            class="w-full py-4 px-4 rounded-2xl font-bold bg-white text-brandBlue hover:bg-slate-100 transition-all shadow-md">احجز
                            الآن</button>
                    </div>
                    <!-- Monthly Plan -->
                    <div
                        class="flex flex-col p-8 bg-white border border-slate-200 rounded-3xl hover:border-brandBlue transition-all hover:shadow-xl group">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">اشتراك شهري</h3>
                        <div class="flex items-baseline gap-1 mb-8"><span
                                class="text-4xl font-extrabold text-brandBlue">400 شيكل</span><span
                                class="text-slate-400 text-sm">/شهرياً</span></div>
                        <ul class="space-y-4 mb-10 flex-grow">
                            <li class="flex items-center gap-3 text-slate-600"><span
                                    class="text-brandGreen text-xl font-bold">✓</span> <span class="text-sm">وصول غير
                                    محدود 24/7</span></li>
                            <li class="flex items-center gap-3 text-slate-600"><span
                                    class="text-brandGreen text-xl font-bold">✓</span> <span class="text-sm">متاح 7
                                    أيام في الأسبوع</span></li>
                        </ul>
                        <button
                            class="w-full py-4 px-4 rounded-2xl font-bold border-2 border-brandBlue text-brandBlue group-hover:bg-brandBlue group-hover:text-white transition-all shadow-sm">احجز
                            الآن</button>
                    </div>
                </div>
                <!-- Student Special Offer CTA -->
                <div class="relative max-w-5xl mx-auto">
                    <div
                        class="bg-gradient-to-l from-brandGreen/5 to-emerald-50 border-2 border-brandGreen/20 rounded-[2.5rem] p-8 lg:p-12 flex flex-col md:flex-row items-center gap-8 shadow-sm">
                        <div
                            class="w-24 h-24 lg:w-32 lg:h-32 bg-white rounded-3xl shadow-lg border border-brandGreen/10 flex items-center justify-center text-5xl lg:text-6xl animate-pulse">
                            🎓
                        </div>
                        <div class="flex-grow text-center md:text-right">
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brandGreen text-white text-[10px] font-bold uppercase tracking-widest mb-4">
                                عرض خاص للطلاب فقط
                            </div>
                            <h3 class="text-3xl font-extrabold text-slate-900 mb-4">باقة الطالب الذكي</h3>
                            <p class="text-lg text-slate-600 max-w-2xl leading-relaxed">
                                وفّر أكثر مع باقتنا المخصصة للدراسة والتركيز. احصل على <span
                                    class="font-bold text-brandGreen">30 ساعة مرنة</span> صالحة لمدة شهر كامل.
                            </p>
                        </div>
                        <div class="flex flex-col items-center gap-4 min-w-[200px]">
                            <div class="text-center">
                                <span class="block text-4xl font-black text-brandGreen">100 شيكل</span>
                                <span class="text-slate-400 text-sm font-medium">/ 30 ساعة</span>
                            </div>
                            <button
                                class="w-full py-4 px-8 rounded-2xl font-extrabold bg-brandGreen text-white hover:bg-brandGreen/90 transition-all shadow-lg shadow-brandGreen/20 text-lg">
                                اشترك الآن
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: PricingSection -->
        <!-- BEGIN: TestimonialsSection -->
        <section class="py-24 bg-slate-50" id="testimonials">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brandBlue/10 text-brandBlue font-bold text-sm mb-4">
                        <span>⭐</span>
                        قصص نجاح من مجتمعنا
                    </div>
                    <h2 class="text-4xl font-extrabold text-slate-900 mb-4">آراء العملاء</h2>
                    <p class="text-slate-600 max-w-2xl mx-auto">نفخر بكوننا جزءاً من مسيرة نجاح العديد من المستقلين
                        والطلاب في خانيونس.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 flex flex-col h-full">
                        <div class="flex gap-1 text-yellow-400 mb-6">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed italic mb-8 flex-grow">"أفضل مكان للعمل في خانيونس بلا
                            منازع. الهدوء والإنترنت السريع والكهرباء المتوفرة دائماً ساعدتني على إنجاز مشاريعي البرمجية
                            في وقت قياسي."</p>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-brandBlue/10 flex items-center justify-center font-bold text-brandBlue">
                                أ.م</div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">أحمد محمود</h4>
                                <p class="text-xs text-slate-500">مبرمج تطبيقات</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 flex flex-col h-full">
                        <div class="flex gap-1 text-yellow-400 mb-6">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed italic mb-8 flex-grow">"باقة الطلاب كانت منقذة لي خلال
                            فترة الامتحانات. الجو المحفز والمجتمع الراقي جعل الدراسة ممتعة وأكثر إنتاجية. شكراً عمرو
                            هب!"</p>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-brandGreen/10 flex items-center justify-center font-bold text-brandGreen">
                                س.خ</div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">سارة خالد</h4>
                                <p class="text-xs text-slate-500">طالبة هندسة</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-slate-100 flex flex-col h-full">
                        <div class="flex gap-1 text-yellow-400 mb-6">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-slate-600 leading-relaxed italic mb-8 flex-grow">"كمصممة جرافيك، أحتاج لهدوء تام
                            وتركيز عالي. وجدت في Amro Hub كل ما أحتاجه، بالإضافة إلى ركن القهوة المميز الذي يجدد نشاطي
                            دائماً."</p>
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-brandBlue/10 flex items-center justify-center font-bold text-brandBlue">
                                ن.ر</div>
                            <div>
                                <h4 class="font-bold text-slate-900 text-sm">نور راشد</h4>
                                <p class="text-xs text-slate-500">مصممة جرافيك</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: TestimonialsSection -->
        <!-- BEGIN: ContactSection -->
        <section class="py-24 bg-white" id="contact-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-brandBlue rounded-[3rem] overflow-hidden shadow-2xl relative">
                    <div class="absolute inset-0 hero-pattern opacity-10 pointer-events-none"></div>
                    <div class="grid lg:grid-cols-2">
                        <!-- Contact Info -->
                        <div class="p-12 lg:p-20 text-white relative z-10 flex flex-col justify-center">
                            <h2 class="text-4xl font-extrabold mb-6 leading-tight">تواصل معنا الآن</h2>
                            <p class="text-blue-100 text-lg mb-12 max-w-md">نحن هنا للإجابة على جميع استفساراتكم
                                ومساعدتكم في اختيار الباقة الأنسب لكم. لا تترددوا في زيارتنا أو الاتصال بنا.</p>
                            <div class="space-y-8">
                                <div class="flex items-start gap-6">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-2xl">
                                        📍</div>
                                    <div>
                                        <h4 class="font-bold text-white mb-1">موقعنا</h4>
                                        <p class="text-blue-100 text-sm">خانيونس - البلد - شارع شبير</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-6">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-2xl">
                                        📞</div>
                                    <div>
                                        <h4 class="font-bold text-white mb-1">رقم الهاتف</h4>
                                        <p class="text-blue-100 text-sm" dir="ltr">002-010-XXXX-XXXX</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-6">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-2xl">
                                        ✉️</div>
                                    <div>
                                        <h4 class="font-bold text-white mb-1">البريد الإلكتروني</h4>
                                        <p class="text-blue-100 text-sm">info@amrohub.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Form -->
                        <div class="bg-white p-12 lg:p-20 relative z-10">
                            <form action="#" class="space-y-6 contact-us-form" method="POST">
                                @csrf
                                <div class="grid sm:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2"
                                            for="name">الاسم بالكامل</label>
                                        <input
                                            class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brandBlue focus:ring-2 focus:ring-brandBlue/20 outline-none transition-all"
                                            id="name" name="name" placeholder="أدخل اسمك" type="text" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2" for="phone">رقم
                                            الجوال</label>
                                        <input
                                            class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brandBlue focus:ring-2 focus:ring-brandBlue/20 outline-none transition-all"
                                            id="phone" name="phone" placeholder="05XXXXXXXX" type="tel" />
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2"
                                        for="subject">الموضوع</label>
                                    <select
                                        class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brandBlue focus:ring-2 focus:ring-brandBlue/20 outline-none transition-all appearance-none bg-white"
                                        id="subject" name="subject">
                                        <option value="inquiry">استفسار عام</option>
                                        <option value="subscription">طلب اشتراك</option>
                                        <option value="event">تنظيم فعالية</option>
                                        <option value="complaint">اقتراح أو شكوى</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2"
                                        for="message">رسالتك</label>
                                    <textarea
                                        class="w-full px-5 py-4 rounded-xl border border-slate-200 focus:border-brandBlue focus:ring-2 focus:ring-brandBlue/20 outline-none transition-all h-32 resize-none"
                                        id="message" name="message" placeholder="كيف يمكننا مساعدتك؟"></textarea>
                                </div>
                                <button
                                    class="w-full py-5 bg-brandBlue text-white font-extrabold rounded-2xl shadow-xl shadow-brandBlue/20 hover:bg-brandBlue/90 hover:-translate-y-1 transition-all text-lg"
                                    type="submit">
                                    إرسال الرسالة
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: ContactSection -->
    </main>
    <!-- BEGIN: Footer -->
    <footer class="bg-slate-900 text-slate-300 py-16" data-purpose="main-footer" id="contact">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-12 mb-12 border-b border-slate-800 pb-12">
                <div>
                    <div class="flex items-center gap-2 mb-6">
                        <img alt="Amro Hub" class="h-12 w-auto brightness-0 invert"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqqpewpuONQF58c6tYuazEtGUuYa10RonovS5mfqwHQeKlTdfzrlGZaak5uxjy83BAB2JbwR2tmEJdizHOLhYCYIN-N2qCFtIEte2IhAaEMG5wY8JFmRaEIMt0lRcV_qJC519H2sjUIy28jGPkQTRp0QRiS9ac-jcQ4ixq6szr3l9pb-edR0IQYRj4Ja51xZk6kmna49xfx_6eG0Lnxh6VIe-C9CMUkXbf9A8DOnPYaNDhskv5uiZaUrw-k8fkdGjEl5ZQfxXXj04" />
                        <span class="text-2xl font-bold text-white">عمرو هب</span>
                    </div>
                    <p class="text-sm leading-relaxed mb-6">
                        المساحة الرائدة في توفير بيئة عمل مريحة ومحفزة في قلب المدينة. نحن نهتم بكل التفاصيل لراحتكم
                        وإنتاجيتكم.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">روابط سريعة</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a class="hover:text-brandGreen transition-colors" href="#about">عن المركز</a></li>
                        <li><a class="hover:text-brandGreen transition-colors" href="#pricing">باقات الاشتراك</a></li>
                        <li><a class="hover:text-brandGreen transition-colors" href="#testimonials">آراء العملاء</a>
                        </li>
                        <li><a class="hover:text-brandGreen transition-colors" href="#contact-section">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">تابعونا</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-center gap-4">
                            <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-brandBlue transition-colors"
                                href="#">FB</a>
                            <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-pink-600 transition-colors"
                                href="#">IG</a>
                            <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-sky-500 transition-colors"
                                href="#">TW</a>
                            <a class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-blue-700 transition-colors"
                                href="#">IN</a>
                        </li>
                        <li class="pt-4">
                            <p class="text-xs text-slate-500">انضم لنشرتنا الإخبارية للحصول على آخر العروض</p>
                            <div class="mt-2 flex">
                                <input
                                    class="bg-slate-800 border-none rounded-r-lg px-4 py-2 text-xs w-full outline-none focus:ring-1 focus:ring-brandGreen"
                                    placeholder="البريد الإلكتروني" type="email" />
                                <button
                                    class="bg-brandGreen text-white px-4 py-2 rounded-l-lg text-xs font-bold">اشترك</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 text-sm text-slate-500">
                <p>© 2023 Amro Hub. جميع الحقوق محفوظة.</p>
                <div class="flex items-center gap-6">
                    <a class="hover:text-white transition-colors" href="#">سياسة الخصوصية</a>
                    <a class="hover:text-white transition-colors" href="#">شروط الخدمة</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: Footer -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        $('.contact-us-form').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: '{{ route('api.contact-requests.store') }}',
                type: 'POST',
                data: formData,
                success: function(response) {
                    $('.contact-us-form')[0].reset();
                    toastr.success(response.message);
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    if (typeof errors === "undefined") {
                        toastr.error("فشلت العملية  ");
                    } else {
                        $.each(errors, function(key, value) {
                            toastr.error(value[0]);
                        });
                    }
                }
            });
        });
    });
</script>

</html>
