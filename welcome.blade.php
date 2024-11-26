<!DOCTYPE html>
<html lang="en">
<head>    
    <!-- Essential Meta Tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph Meta Tags for Social Media -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="CyberPOZ - Best POS System in Bangladesh">
	<meta property="og:image" content="{{ asset('assets/landing_asset/images/og-image.png') }}">
	<meta property="og:description" content="CyberPOZ is Bangladesh's most advanced POS software designed for retail, restaurants, and small businesses. Manage sales, inventory, and customers seamlessly with our affordable solutions.">
	<meta property="og:url" content="https://cyberpoz.com">
	<meta property="og:site_name" content="CyberPOZ">
	<meta property="og:image:secure_url" content="{{ asset('assets/landing_asset/images/og-image.png') }}">
	<meta property="og:locale" content="en_BD">

    <!-- SEO Meta Tags -->
	<meta name="keywords" content="POS system Bangladesh, best POS software in Bangladesh, retail management software, restaurant POS, inventory software Bangladesh, point of sale system, small business software, POS Bangladesh price, CyberPOZ POS, top POS for small businesses, sales tracking software">
	<meta name="description" content="CyberPOZ is the leading POS software in Bangladesh. Designed for small to large businesses, it offers seamless inventory management, sales tracking, and customer insights at an affordable price.">
	<meta name="title" content="CyberPOZ - Best POS Software in Bangladesh">

    <!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('landing_asset') }}/images/favicon.png" type="image/x-icon">

    <!-- Canonical URL -->
	<link rel="canonical" href="https://cyberpoz.com">

    <!-- Robots Meta Tag -->
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">

    <!-- Geo-Targeting for Bangladesh -->
	<meta name="geo.region" content="BD">
	<meta name="geo.placename" content="Bangladesh">
	<meta name="geo.position" content="23.6850;90.3563">
	<meta name="ICBM" content="23.6850, 90.3563">

    <!-- Structured Data (Schema.org) -->
	<script type="application/ld+json">
		{
    		"@context": "https://schema.org",
    		"@type": "SoftwareApplication",
    		"name": "CyberPOZ",
    		"description": "CyberPOZ is the best POS software in Bangladesh, offering seamless inventory management, sales tracking, and customer relationship tools for small to large businesses.",
    		"operatingSystem": "Windows, macOS, Linux, Android",
    		"applicationCategory": "BusinessApplication",
    		"offers": {
        		"@type": "Offer",
        		"priceCurrency": "BDT",
        		"price": "500",
        		"url": "https://cyberpoz.com/pricing"
    				},
    		"aggregateRating": {
        		"@type": "AggregateRating",
        		"ratingValue": "4.8",
        		"reviewCount": "150"
    				},
    		"publisher": {
        		"@type": "Organization",
        		"name": "CyberPOZ",
        		"url": "https://cyberpoz.com"
    					}
		}
	</script>

    <!-- Additional Meta for Bangladesh Target -->
	<meta name="language" content="en, bn">
	<meta name="country" content="Bangladesh">
	<meta name="distribution" content="local">
	<meta name="rating" content="general">
	<meta name="revisit-after" content="7 days">

    <!-- Additional Meta for Performance -->
	<meta name="author" content="CyberPOZ Team">
	<meta name="theme-color" content="#FF6600">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;family=Work+Sans:wght@300;600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:wght@100;300;400;600;700&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;600&amp;display=swap" rel="stylesheet"> 
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{ asset('assets/landing_asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing_asset/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing_asset/css/tabler.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing_asset/css/animate.css') }}">    
    <link rel="stylesheet" href="{{ asset('assets/landing_asset/css/wow/animate.css') }}">    
    <link rel="stylesheet" href="{{ asset('assets/landing_asset/css/venobox.min.css') }}">    
    <link rel="stylesheet" href="{{ asset('assets/landing_asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing_asset/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/landing_asset/css/variable.css') }}">

    <title>CyberPOZ</title>
</head>
<body>

    <header class="header top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="javascript:void(0)">
                    <img src="{{ asset('assets/landing_asset/images/cyberpoz.png') }}" alt="image">
                </a>
                <button class="navbar-toggler" onclick="toggleSidebar(this)" type="button" data-toggle="collapse" data-target="#navbarList"
                    aria-controls="navbarList" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarList">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">হোম</a></li>
						<li><a class="nav-link" href="#aboutUs">আমাদের সম্পর্কে</a></li>
						<li><a class="nav-link" href="#advantage">বৈশিষ্ট্য</a></li>
						<li><a class="nav-link" href="#pricing">প্রাইসিং</a></li>
						<li><a class="nav-link" href="#faqs">প্রায়শই জিজ্ঞাসা</a></li>
						{{-- <li><a class="nav-link" href="#">প্রশ্নাবলী</a></li> --}}
						<li><a class="nav-link" href="#contactUs">যোগাযোগ</a></li>
						<li><a class="nav-link" href="{{ route('login') }}">লগইন/রেজিস্টার</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="slider-section" id="home" style="position: relative">
        <div class="row m-column-reverse">
            <div class="col-md-12 col-lg-6 col-sm-12" style="margin-top: 15px; position: relative">    
                <div class="slick-slide">
                    <div class="slick-item">    
                        <p class="slide-title"><span class="color-text">ফ্রি</span> ট্রায়াল সহ শুরু করুন</p>
                        <p class="slide-text">এক মাসের জন্য CyberPOZ এর সমস্ত প্রিমিয়াম ফিচার ব্যবহার করে আপনার ব্যবসাকে স্মার্ট করুন।</p>
                        <a class="btn btn-slide" href="{{ route('business.getRegister') }}">ফ্রি ট্রায়াল</a>    
                    </div>
                    <div class="slick-item">
                        <p class="slide-title">রিয়েল-টাইম <span class="color-text">রিপোর্টিং</span></p>
                        <p class="slide-text">রিয়েল-টাইম সেলস, ইনভেন্টরি এবং পারফরমেন্স রিপোর্ট আপনার ব্যবসার প্রতিটি মুহূর্তে সিদ্ধান্ত নেওয়াকে সহজ করে।</p>
                        <a class="btn btn-slide" href="javascript:void(0)">আরো জানুন</a>
                    </div>
                    <div class="slick-item">
                        <p class="slide-title">ক্লাউড-বেজড <span class="color-text">ডেটা সিকিউরিটি</span></p>
                        <p class="slide-text">আপনার সমস্ত ডেটা সুরক্ষিত রাখুন এবং যেকোনো ডিভাইস থেকে এক্সেস করুন। ক্লাউড স্টোরেজ এবং মাল্টি-লেয়ার সিকিউরিটি নিশ্চিত করুন।</p>
                        <a class="btn btn-slide" href="#contactUs">যোগাযোগ করুন</a>
                    </div>
                </div>                    
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12">
                <div class="slide-video">
                    <img src="{{ asset('assets/landing_asset/images/new/10.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="section aboutus-section" id="aboutUs" style="background: #EAF3FA">
        <div class="container">
            <div class="row align-items-center">                
                <div class="col-lg-6 col-md-6 wow animate__fadeInUp">
                    <img src="{{ asset('assets/landing_asset/images/new/5.jpg') }}" class="img-fluid about-img" alt="img">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-6 wow animate__fadeInUp">
                    <p class="section-title">আমাদের <span class="color-text">সম্পর্কে</span></p>
                    <p class="about-text">CyberPOZ একটি আধুনিক ও কার্যকরী সফটওয়্যার সমাধান যা ব্যবসা প্রতিষ্ঠানকে সহজে ডিজিটালাইজ করতে সহায়তা করে। আমরা বাজারের তুলনায় সাশ্রয়ী মূল্যে উচ্চমানের সফটওয়্যার ও ডিভাইস সরবরাহ করি। আপনার ব্যবসা ডিজিটাল করতে এবং কার্যক্ষমতা বাড়াতে আজই আমাদের সাথে যোগাযোগ করুন।</p>    
                </div>                
            </div>
    
        </div>
    </div>

    <div class="section advantage-section" id="advantage">
        <div class="container">
            <div class="row text-center wow animate__fadeInUp">
                <div class="col-12">
                    <p class="section-title">CyberPOZ ব্যবহারের <span class="color-text">সুবিধাসমূহ</span></p>
                </div>
            </div>
    
            <div class="row">
                <div class="col-md-12 col-lg-5 col-sm-12 hide-in-sm advantage-items wow animate__fadeInUp">
                    <ul class="nav nav-tabs tab-btn-h flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item tab-btn-m" data-id="imgChang1">
                            <button class="nav-link btn-features active" id="homeq-tab" data-bs-toggle="pill" data-bs-target="#homeq" type="button" role="tab" aria-controls="homeq" aria-selected="true">
                                <i class="ti ti-calculator"></i> দ্রুত হিসাব
                            </button>
                        </li>
                        <li class="nav-item tab-btn-m" data-id="imgChang2">
                            <button class="nav-link btn-features" id="menu1q-tab" data-bs-toggle="pill" data-bs-target="#menu1q" type="button" role="tab" aria-controls="menu1q" aria-selected="true">
                                <i class="ti ti-device-desktop-cog"></i> টেকনোলজি
                            </button>
                        </li>
                        <li class="nav-item tab-btn-m" data-id="imgChang3">
                            <button class="nav-link btn-features" id="menu2q-tab" data-bs-toggle="pill" data-bs-target="#menu2q" type="button" role="tab" aria-controls="menu2q" aria-selected="true">
                                <i class="ti ti-clock"></i> সময় ও খরচ সাশ্রয়
                            </button>
                        </li>
                        <li class="nav-item tab-btn-m" data-id="imgChang4">
                            <button class="nav-link btn-features" id="menu3q-tab" data-bs-toggle="pill" data-bs-target="#menu3q" type="button" role="tab" aria-controls="menu3q" aria-selected="true">
                                <i class="ti ti-file"></i> পরিবেশ বান্ধব
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-7 col-sm-12 mob-hide2 wow animate__fadeInUp">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div id="homeq" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="homeq-tab" tabindex="0">
                            <br>
                            <p class="tab-pane-text">CyberPOZ স্বয়ংক্রিয় হিসাব প্রযুক্তি ব্যবহার করে দ্রুত এবং নির্ভুল ট্রানজেকশন প্রসেস নিশ্চিত করে। একটি ট্রানজেকশন করলে তা সাথে সাথেই বিভিন্ন পর্যায়ে আপডেট হয়ে যায়। ইনভয়েস জেনারেশন থেকে শুরু করে রিপোর্টিং পর্যন্ত সব কাজ সহজেই সম্পন্ন হয়।</p>
                        </div>
                        <div id="menu1q" class="container tab-pane fade" role="tabpanel" aria-labelledby="menu1q-tab" tabindex="0"><br>
                            <p class="tab-pane-text">CyberPOZ সর্বাধুনিক প্রযুক্তি এবং ক্লাউড-ভিত্তিক প্ল্যাটফর্ম ব্যবহার করে তৈরি। এতে রয়েছে উন্নত ডেটা এনক্রিপশন এবং মাল্টি-লেয়ার সিকিউরিটি, যা আপনার ব্যবসার গুরুত্বপূর্ণ ডেটা সুরক্ষিত রাখে। এটি ডেস্কটপ, মোবাইল এবং ট্যাবলেটের মাধ্যমে সহজেই ব্যবহারযোগ্য।</p>
                        </div>
                        <div id="menu2q" class="container tab-pane fade" role="tabpanel" aria-labelledby="menu2q-tab" tabindex="0"><br>
                            <p class="tab-pane-text">CyberPOZ-এর স্বয়ংক্রিয় অপারেশন সিস্টেম আপনার ব্যবসার মূল্যবান সময় এবং খরচ উভয়ই সাশ্রয় করে। রিয়েল-টাইম রিপোর্টিং এবং দ্রুত প্রসেসিং ফিচারের মাধ্যমে ব্যবসায়িক সিদ্ধান্ত গ্রহণ আরও সহজ এবং কার্যকর হয়।</p>
                        </div>
                        <div id="menu3q" class="container tab-pane fade" role="tabpanel" aria-labelledby="menu3q-tab" tabindex="0"><br>
                            <p class="tab-pane-text">CyberPOZ সম্পূর্ণ কাগজহীন সল্যুশন প্রদান করে। সমস্ত হিসাব-নিকাশ, লেনদেন এবং রিপোর্টিং ডিজিটালি সংরক্ষণ করা হয়, ফলে কাগজের ব্যবহার হ্রাস পায় এবং পরিবেশবান্ধব ব্যবসা পরিচালনা সম্ভব হয়।</p>
                        </div>
                    </div>
                </div>    

            </div>
    
        </div>
    </div>

    <div class="section use-section" style="background: #EAF3FA">
        <div class="container">
            <div class="row text-center wow animate__fadeInUp">
                <div class="col-12">
                    <p class="section-title">আপনি কেন <span class="color-text">CyberPOZ</span> ব্যবহার করবেন? </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-5 col-sm-12 wow animate__fadeInUp">
                    <img src="{{ asset('assets/landing_asset/images/new/12.png') }}" alt="about" class="w-100">
                </div>
                <div class="col-md-12 col-lg-7 col-sm-12 wow animate__fadeInUp use-main-body" style="margin-top: 100px;">
                    <ul class="ul-soft">
                        <li class="use-text">আপনার প্রতিষ্ঠানের একাধিক কম্পিউটার এক প্ল্যাটফর্মে সংযুক্ত করে, একটি সফটওয়ারের মাধ্যমে পরিচালনা করা সহজ।</li>
                        <li class="use-text">আপনি অনলাইনের মাধ্যমে যেকোনো স্থান থেকে রিয়েল-টাইমে CyberPOZ-এর মাধ্যমে সেলস, ইনভেন্টরি এবং রিপোর্ট দেখতে পারবেন।</li>
                        <li class="use-text">আপনার ব্যবসায়ের অনাকাঙ্ক্ষিত ক্ষতির ঝুঁকি হ্রাস করে এবং অপচয় কমায়।</li>
                        <li class="use-text">হিসাবের স্বচ্ছতা নিশ্চিত হওয়ায় আপনি সবসময় চিন্তামুক্ত থাকতে পারবেন এবং সঠিক সিদ্ধান্ত গ্রহণ করতে পারবেন।</li>
                    </ul>
                </div>
            </div>
        </div>
    
    
    </div>

    <div class="section feature-section">
        <div class="container">
            <div class="row text-center wow animate__fadeInUp">
                <div class="col-12">
                    <p class="section-title"><span class="color-text">হিসাব হোক স্বচ্ছ</span> ও ঝামেলা বিহীন</p>
                    <p class="feature-title-text">আয়-ব্যয় এর হিসাব, লেনদেনকারির তথ্য ও স্মার্ট রিপোর্ট!</p>
                </div>
            </div>
    
            <div class="row feature-main-body" style="margin-top: 60px;">
                <div class="col-md-4 wow animate__fadeInUp">
                    <div class="row feature-box" style="text-align: center">
                        <div class="d-flex" style="align-items: center; justify-content:center">
                            <i class="ti ti-book text-icon"></i>
                            <div class="text-title">
                                <p class="feature-text-title">ডেইলি বুক</p>
                            </div>
                        </div>
    
    
                        <div class="col-12 mar-t-10">
                            <p class="feature-text">এখানে দৈনন্দিন আর্থিক লেনদেনের বিবরণ এবং বিগত দিনের হিসাব খুঁজে পাওয়া যায়। এটি আপনাকে দ্রুত এবং সহজে পূর্ববর্তী রেকর্ড দেখতে সাহায্য করবে।</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow animate__fadeInUp">
                    <div class="row feature-box" style="text-align: center">
                        <div class="d-flex" style="align-items: center; justify-content:center">
                            <i class="ti ti-report-money text-icon"></i>
                            <div class="text-title">
                                <p class="feature-text-title">লেজার</p>
                            </div>
                        </div>
                        <div class="col-12 mar-t-10">
                            <p class="feature-text">এখানে আপনি ক্রেতা বা ব্যাংক লেজার সহজেই দেখতে পাবেন। লেজার অনুসন্ধান এবং অডিটিংয়ের জন্য এটি খুবই কার্যকর এবং ঝামেলামুক্ত।</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow animate__fadeInUp">
                    <div class="row feature-box" style="text-align: center">
                        <div class="d-flex" style="align-items: center; justify-content:center">
                            <i class="ti ti-building-warehouse text-icon"></i>
                            <div class="text-title">
                                <p class="feature-text-title">স্টক ম্যানেজমেন্ট</p>
                            </div>
                        </div>
                        <div class="col-12 mar-t-10">
                            <p class="feature-text">স্টকের তালিকা, পরিমাণ, এবং মূল্য নিরীক্ষণের সুবিধা। নির্দিষ্ট তারিখ অনুযায়ী স্টক মিলানোর কাজ সহজ এবং দ্রুত হয়ে যাবে।</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow animate__fadeInUp">
                    <div class="row feature-box" style="text-align: center">
                        <div class="d-flex" style="align-items: center; justify-content:center">
                            <i class="ti ti-user-hexagon text-icon"></i>
                            <div class="text-title">
                                <p class="feature-text-title">এমপ্লয়ি ম্যানেজমেন্ট</p>
                            </div>
                        </div>
                        <div class="col-12 mar-t-10">
                            <p class="feature-text">কর্মচারীদের বেতন নির্ধারণ, সময়মত পরিশোধ, এবং বকেয়া বেতন ব্যবস্থাপনা সহজ করে। এটি কর্মী ব্যবস্থাপনায় স্বচ্ছতা নিশ্চিত করে।</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow animate__fadeInUp">
                    <div class="row feature-box" style="text-align: center">
                        <div class="d-flex" style="align-items: center; justify-content:center">
                            <i class="ti ti-building-bank text-icon"></i>
                            <div class="text-title">
                                <p class="feature-text-title">ব্যাংক অ্যাকাউন্ট ম্যানেজমেন্ট</p>
                            </div>
                        </div>
                        <div class="col-12 mar-t-10">
                            <p class="feature-text">আপনার ব্যাংক লেনদেনের তথ্য এবং চেক ক্লিয়ারিং ট্র্যাক করার জন্য আদর্শ। একাধিক ব্যাংক অ্যাকাউন্ট পরিচালনার কাজ সহজ এবং সুশৃঙ্খল হবে।</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow animate__fadeInUp">
                    <div class="row feature-box" style="text-align: center">
                        <div class="d-flex" style="align-items: center; justify-content:center">
                            <i class="ti ti-cash-register text-icon"></i>
                            <div class="text-title">
                                <p class="feature-text-title">ট্রানজেকশন সেশন</p>
                            </div>
                        </div>
                        <div class="col-12 mar-t-10">
                            <p class="feature-text">ব্যবসার বিভিন্ন লেনদেন (কাস্টমার, সাপ্লায়ার, ব্যালেন্স) সহজে সংগঠিত এবং সংরক্ষিত রাখা যায়। এটি আপনার ব্যবসার সকল তথ্য সুরক্ষিত রাখে।</p>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>

    <div class="section usable-section" style="background: #EAF3FA">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 col-sm-12">
                    <div class="row">
                        <div class="col-12 wow animate__fadeInUp">
                            <p class="section-title">
                                <span class="color-text">যেসব প্রতিষ্ঠানে</span> 
                                এই সফটওয্যারটি ব্যবহার
                                <span class="color-text">করতে পারবেন</span>
                            </p>
                        </div>
                        <div class="col-12 usable-items wow animate__fadeInUp" style="margin-top: 20px;">
                            <button class="btn">কর্পোরেট কোম্পানী</button>
                            <button class="btn">ট্রান্সপোর্ট এজেন্সি</button>
                            <button class="btn">বিভিন্ন খামার</button>
                            <button class="btn">দোকান</button>
                            <button class="btn">ট্রেডিং বিজনেস</button>
                            <button class="btn">জেনারেল স্টোর</button>
                            <button class="btn">শো রুম</button>
                        </div>
                        <div class="col-12 wow animate__fadeInUp">
                            <p class="usable-info">এছাড়াও কাপড়ের দোকান, জুতা ব্যবসা, কসমেটিকস দোকান, জেনারেল স্টোর এবং আরও অনেক ধরণের ব্যবসার জন্য CyberPOZ ব্যবহারযোগ্য। এটি আপনার ব্যবসার সবধরনের কার্যক্রম সহজ ও স্বচ্ছ করতে সহায়তা করে।</p>
                        </div>
    
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-sm-12 px-0 wow animate__fadeInUp">
                    <img src="{{ asset('assets/landing_asset/images/new/15.png') }}" alt="" class="w-100 mt-3 m-mt-0">
                </div>
            </div>
        </div>
    </div>

    <div class="section priceplan-section" id="pricing">
        <div class="container">
            <div class="row text-center wow animate__fadeInUp">
                <div class="col-12">
                    <p class="section-title"><span class="color-text">CyberPOZ</span> - আপনার ব্যবসার জন্য সাশ্রয়ী সমাধান</p>
                    <p class="price-text">অধিক কার্যক্ষমতা এবং ব্যবসায়িক সফলতার জন্য সেরা বিনিয়োগ! CyberPOZ এর পরিকল্পনাগুলি আপনার ব্যবসার চাহিদা অনুযায়ী সাজানো হয়েছে।<br/>সাশ্রয়ী মূল্য এবং প্রিমিয়াম ফিচারের সমন্বয়ে আপনার ব্যবসা পরিচালনা হোক আরও সহজ।</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-between m-flex-wrap">
                    <!-- Plan 1 -->
                    <div class="priceplan-box wow animate__fadeInUp">
                        <p class="priceplan-item price-text-1">স্বপ্ন</p>
                        <p class="mb-0 priceplan-item price-text-2"><span class="taka-symbol">৳</span> <span class="number">৫০০</span></p>
                        <p class="priceplan-item price-text-3 fs-16 font-bold">প্রতি মাস</p>
                        <p class="priceplan-item price-text-5 fs-18">ইনস্টলেশন ফি নেই</p>
                        <ul class="priceplan-features">
                            <li><span class="number">১</span>টি আউটলেট</li>
                            <li><span class="number">১</span>টি রেজিস্টার</li>
                            <li>বেসিক ইনভেন্টরি ম্যানেজমেন্ট</li>
                            <li>আনলিমিটেড পণ্য</li>
                            <li>স্ট্যান্ডার্ড রিপোর্ট</li>
                            <li><span class="number">৭</span> দিনের ট্রায়াল</li>
                        </ul>
                        <center><p><a href="#" class="priceplan-item price-text-6">বিস্তারিত দেখুন</a></p></center>
                        <a href="{{ route('business.getRegister') }}" type="button" class="btn btn-price">শুরু করুন</a>
                    </div>

                    <!-- Plan 2 -->
                    <div class="priceplan-box wow animate__fadeInUp">
                        <p class="priceplan-item price-text-1">সাহস</p>
                        <p class="mb-0 priceplan-item price-text-2"><span class="taka-symbol">৳</span> <span class="number">১০০০</span></p>
                        <p class="priceplan-item price-text-3 fs-16 font-bold">প্রতি মাস</p>
                        <p class="priceplan-item price-text-5 fs-18">ইনস্টলেশন ফি নেই</p>
                        <ul class="priceplan-features">
                            <li><span class="number">২</span>টি আউটলেট</li>
                            <li><span class="number">৪</span>টি রেজিস্টার</li>
                            <li>উন্নত ইনভেন্টরি ম্যানেজমেন্ট</li>
                            <li>আনলিমিটেড পণ্য ও ক্যাটেগরি</li>
                            <li>রিয়েল-টাইম রিপোর্ট</li>
                            <li><span class="number">৭</span> দিনের ট্রায়াল</li>
                        </ul>
                        <center><p><a href="#" class="priceplan-item price-text-6">বিস্তারিত দেখুন</a></p></center>
                        <a href="{{ route('business.getRegister') }}" type="button" class="btn btn-price">শুরু করুন</a>
                    </div>

                    <!-- Plan 3 -->
                    <div class="priceplan-box wow animate__fadeInUp">
                        <p class="priceplan-item price-text-1">উদ্যোগ</p>
                        <p class="mb-0 priceplan-item price-text-2"><span class="taka-symbol">৳</span> <span class="number">২০০০</span></p>
                        <p class="priceplan-item price-text-3 fs-16 font-bold">প্রতি মাস</p>
                        <p class="priceplan-item price-text-5 fs-18">ইনস্টলেশন ফি নেই</p>
                        <ul class="priceplan-features">
                            <li><span class="number">৩</span>টি আউটলেট</li>
                            <li><span class="number">৬</span>টি রেজিস্টার</li>
                            <li>সাপ্লায়ার ম্যানেজমেন্ট</li>
                            <li>মাল্টি-লোকেশন ইনভেন্টরি</li>
                            <li>বিস্তারিত আর্থিক রিপোর্ট</li>
                            <li><span class="number">১৪</span> দিনের ট্রায়াল</li>
                        </ul>
                        <center><p><a href="#" class="priceplan-item price-text-6">বিস্তারিত দেখুন</a></p></center>
                        <a href="{{ route('business.getRegister') }}" type="button" class="btn btn-price">শুরু করুন</a>
                    </div>

                    <!-- Plan 4 -->
                    <div class="priceplan-box wow animate__fadeInUp">
                        <p class="priceplan-item price-text-1">সফল</p>
                        <p class="mb-0 priceplan-item price-text-2"><span class="taka-symbol">৳</span> <span class="number">৫০০০</span></p>
                        <p class="priceplan-item price-text-3 fs-16 font-bold">প্রতি মাস</p>
                        <p class="priceplan-item price-text-5 fs-18">ইনস্টলেশন ফি নেই</p>
                        <ul class="priceplan-features">
                            <li><span class="number">৫</span>টি আউটলেট</li>
                            <li><span class="number">৮</span>টি রেজিস্টার</li>
                            <li>কাস্টমাইজেবল মডিউল</li>
                            <li>উন্নত নিরাপত্তা ব্যবস্থা</li>
                            <li>কাস্টম রিপোর্ট</li>
                            <li><span class="number">১৪</span> দিনের ট্রায়াল</li>
                        </ul>
                        <center><p><a href="#" class="priceplan-item price-text-6">বিস্তারিত দেখুন</a></p></center>
                        <a href="{{ route('business.getRegister') }}" type="button" class="btn btn-price">শুরু করুন</a>
                    </div>

                    <!-- Custom Plan -->
                    <div class="priceplan-box wow animate__fadeInUp custom-box">
                        <p class="priceplan-item price-text-1" style="margin-top: 40px;">কাস্টম</p>
                        <p class="priceplan-item price-text-3">আপনার চাহিদা অনুযায়ী</p>
                        <p class="priceplan-item price-text-4"><img src="{{ asset('landing_asset') }}/images/Group%2052.svg" alt="" style="width: 20px; height: 20px;"> সম্পূর্ণ কাস্টমাইজড</p>
                        <ul class="priceplan-features">
                            <li>কাস্টম আউটলেট এবং রেজিস্টার</li>
                            <li>কাস্টম ইনভেন্টরি ফিচার</li>
                            <li>কাস্টম রিপোর্ট এবং ইন্টিগ্রেশন</li>
                            <li>ডেডিকেটেড অ্যাকাউন্ট ম্যানেজার</li>
                        </ul>
                        <a type="button" class="btn btn-price-bt" href="#contactUs">যোগাযোগ করুন</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
    <div class="section achievement-section" style="background: #EAF3FA">
        <div class="container">
    
            <div class="row wow animate__fadeInUp">
                <div class="col-12">
                    <p class="section-title mb-4 text-center">আমাদের <span class="color-text">প্রাপ্তি</span></p>
                </div>    
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between m-p-0" style="padding: 0px 70px;">                    
                    <div class="achievement-box wow animate__fadeInUp">
                        <p class="achievement-img"><img src="{{ asset('assets/landing_asset/images/achievement/successfull-business.png') }}" alt=""></p>
                        <p class="achievement-text">120+</p>
                        <p class="achievement-text-2">সফল ব্যবসা</p>
                    </div>
    
                    <div class="achievement-box wow animate__fadeInUp">
                        <p class="achievement-img"><img src="{{ asset('assets/landing_asset/images/achievement/users.png') }}" alt=""></p>
                        <p class="achievement-text">150+</p>
                        <p class="achievement-text-2">ব্যবহারকারী</p>
                    </div>
    
                    <div class="achievement-box wow animate__fadeInUp">
                        <p class="achievement-img"><img src="{{ asset('assets/landing_asset/images/achievement/lending.png') }}" alt=""></p>
                        <p class="achievement-text">10,000+</p>
                        <p class="achievement-text-2">লেনদেন</p>
                    </div>
    
                    <div class="achievement-box wow animate__fadeInUp">
                        <p class="achievement-img"><img src="{{ asset('assets/landing_asset/images/achievement/product-managed.png') }}" alt=""></p>
                        <p class="achievement-text">50,000+</p>
                        <p class="achievement-text-2">পণ্য ম্যানেজড</p>
                    </div>    
                </div>
            </div>
        </div>
    </div>    

    <div class="section partner-section">
        <div class="container">
    
            <div class="row wow animate__fadeInUp">
                <div class="col-12">
                    <p class="section-title text-center">আমাদের <span class="color-text">পার্টনার্স</span></p>
                </div>    
            </div>
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-center">
                    <img src="{{ asset('assets/landing_asset/images/new/WebXpress.png') }}" alt="" class="item-img wow animate__fadeInUp">
                    <img src="{{ asset('assets/landing_asset/images/new/GraphicsHat.png') }}" alt="" class="item-img wow animate__fadeInUp">    
                </div>
            </div>
        </div>
    </div>

    <div class="section faq-section" id="faqs" style="background: #EAF3FA">
        <div class="container">
            <div class="row wow animate__fadeInUp">
                <div class="col-12">
                    <p class="section-title mb-4 pb-2 text-center">প্রায়শই <span class="color-text">জিজ্ঞাসা</span></p>
                </div>
            </div>
            <div class="row align-items-center wow animate__fadeInUp">
                <div class="col-lg-7 col-md-7">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <a class="accordion-item btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        CyberPOZ কি?
                                    </a>
                                </h5>
                            </div>
    
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    CyberPOZ একটি আধুনিক পয়েন্ট অফ সেল (POS) এবং ব্যবসা ম্যানেজমেন্ট সিস্টেম, যা ছোট থেকে বড় সব ধরনের ব্যবসার জন্য ডিজাইন করা হয়েছে। এটি আপনাকে সেলস, ইনভেন্টরি, এবং কর্মচারী ব্যবস্থাপনা সহজ করতে সহায়তা করে।
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="accordion-item btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        CyberPOZ কি ধরনের ব্যবসার জন্য উপযুক্ত?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    CyberPOZ রিটেইল স্টোর, রেস্টুরেন্ট, কসমেটিকস শপ, গার্মেন্টস ব্যবসা, গ্রোসারি শপ এবং অন্যান্য খুচরা ব্যবসার জন্য উপযুক্ত। মাল্টি-লোকেশন ব্যবসার জন্যও এটি কার্যকর।
                                </div>
                            </div>
                        </div>
    
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="accordion-item btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        CyberPOZ কি ক্লাউড-ভিত্তিক?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    হ্যাঁ, CyberPOZ সম্পূর্ণ ক্লাউড-ভিত্তিক। এর মাধ্যমে আপনি যেকোনো ডিভাইস থেকে আপনার ব্যবসার তথ্য দেখতে এবং পরিচালনা করতে পারবেন।
                                </div>
                            </div>
                        </div>
    
                        <div class="card">
                            <div class="card-header" id="headingThree4">
                                <h5 class="mb-0">
                                    <a class="accordion-item btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                        CyberPOZ ব্যবহার করতে কি বিশেষ কোনো যন্ত্রের প্রয়োজন?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordionExample">
                                <div class="card-body">
                                    না, CyberPOZ ব্যবহার করতে শুধু একটি কম্পিউটার, ল্যাপটপ, ট্যাবলেট অথবা মোবাইল ডিভাইসের প্রয়োজন। এছাড়া, একটি প্রিন্টার এবং ক্যাশ ড্রয়ার থাকলে সেটআপ আরও কার্যকর হয়।    
                                </div>
                            </div>
                        </div>
    
                        <div class="card">
                            <div class="card-header" id="headingThree5">
                                <h5 class="mb-0">
                                    <a class="accordion-item btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                        CyberPOZ এর খরচ কত?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5" data-parent="#accordionExample">
                                <div class="card-body">
                                    CyberPOZ-এর মূল্য পরিকল্পনা আপনার ব্যবসার আকার ও প্রয়োজন অনুযায়ী সাজানো হয়েছে। মাসিক প্যাকেজ শুরু হয় মাত্র ৳৫০০ থেকে। বিস্তারিত জানতে আমাদের মূল্য পরিকল্পনা দেখুন।
                                </div>
                            </div>
                        </div>
    
                        <div class="card">
                            <div class="card-header" id="headingThree6">
                                <h5 class="mb-0">
                                    <a class="accordion-item btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                      CyberPOZ এ কি ডেটা নিরাপত্তা আছে?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree6" class="collapse" aria-labelledby="headingThree6" data-parent="#accordionExample">
                                <div class="card-body">
                                    হ্যাঁ, CyberPOZ মাল্টি-লেয়ার সিকিউরিটি দিয়ে সুরক্ষিত। সকল ডেটা এনক্রিপ্টেড থাকে এবং স্বয়ংক্রিয় ব্যাকআপের সুবিধাও রয়েছে।
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="faq-right">
                        <img src="{{ asset('assets/landing_asset/images/new/1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-section" style="background: #28282B">
        <div class="container">
            <div class="row wow animate__fadeInUp">
                <div class="col-md-12">
                    <div class="subscribe-text">
                        <p class="sub-title-1">ইমেইল সাবস্ক্রাইব</p>
                        <p class="email-text">সবার আগে জানুন নতুন ফিচার, অফার এবং ব্যবসা পরিচালনার টিপস। আপনার ব্যবসাকে আরও আধুনিক এবং কার্যকরী করতে প্রয়োজনীয় সব তথ্য সরাসরি আপনার ইনবক্সে!</p>
                    </div>

                    <div class="subscribe-form">
                        <form id="subscribe2" method="post">
                            <input class="form-control" id="subscribe_email" name="email" placeholder="Enter your email" required="" type="email">
                            <button type="button" class="btn subscribe-btn" onclick="addSubscriber(this)">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row" id="contactUs" style="margin-top: 75px;">
                <div class="col-md-12 col-lg-4 col-sm-12 wow animate__fadeInUp">
                    <p class="sub-title">যোগাযোগ</p>
                    <div class="footer-item">
                        <div class="footer-item-img">
                            <i class="ti ti-map-pin"></i>
                        </div>
                        <div class="footer-text">
                            <span class="footer-item-text">06/08, West Dhanmondi R/A, Bosila Mohammadpur, Dhaka - 1207</span>
                        </div>
                    </div>

                    <div class="footer-item">
                        <div class="footer-item-img">
                            <i class="ti ti-phone"></i>
                        </div>
                        <div class="footer-text">
                            <span class="footer-item-phone">+880 9638 667701</span>
                        </div>
                    </div>

                    <div class="footer-item">
                        <div class="footer-item-img">
                            <i class="ti ti-mail"></i>
                        </div>
                        <div class="footer-text">
                            <span class="footer-item-text">support@cyberpoz.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-sm-12 foot-row wow animate__fadeInUp">
                    <p class="sub-title">সফটয়্যার গাইডলাইন</p>

                    <div class="guideline">                                                                        
                        <div class="guideline-body">
                            <a class="my-video-links guideline-item" data-autoplay="true" data-vbtype="video" href="#"><i class="ti ti-square-arrow-right"></i> কীভাবে প্রোডাক্ট এড করবেন?</a>
							<a class="my-video-links guideline-item" data-autoplay="true" data-vbtype="video" href="#"><i class="ti ti-square-arrow-right"></i> কীভাবে প্রোডাক্ট ডিলিট করবেন?</a>
							<a class="my-video-links guideline-item" data-autoplay="true" data-vbtype="video" href="#"><i class="ti ti-square-arrow-right"></i> কীভাবে প্রোডাক্ট রিটার্ন করবেন?</a>
							<a class="my-video-links guideline-item" data-autoplay="true" data-vbtype="video" href="#"><i class="ti ti-square-arrow-right"></i> কীভাবে ব্যাংকে টাকা জমা দিবেন?</a>
							<a class="my-video-links guideline-item" data-autoplay="true" data-vbtype="video" href="#"><i class="ti ti-square-arrow-right"></i> কীভাবে ব্যাংকের টাকা ট্রান্সফার করবেন?</a>
							<a class="my-video-links guideline-item" data-autoplay="true" data-vbtype="video" href="#"><i class="ti ti-square-arrow-right"></i> কীভাবে প্রোডাক্ট ক্রয় করবেন?</a>                                                                                                                                            
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-4 col-sm-12 foot-row foot-pro wow animate__fadeInUp">
                    <p class="sub-title">আমাদের অন্ান্য প্রোডাক্ট</p>
                    <div class="footer-other">
                        <a href="#" class="other-item d-block"><i class="ti ti-exposure"></i> পস সিস্টেম (POS System)</a>
						<a href="#" class="other-item d-block"><i class="ti ti-school"></i> স্কুল ম্যানেজমেন্ট</a>
						<a href="#" class="other-item d-block"><i class="ti ti-building-hospital"></i> হাসপাতাল ম্যানেজমেন্ট</a>
						<a href="#" class="other-item d-block"><i class="ti ti-garden-cart"></i> ই-কমার্স (ব্যবসা-টু-গ্রাহক)</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright-section" style="background: #28282B">
        <div class="container">
            <div class="footer-body d-flex flex-wrap align-items-center justify-content-between ">
                <div class="common-footer img">
                    <a href="javascript:void(0)"><img src="{{ asset('assets/landing_asset/images/cyberpoz-footer.png') }}" alt="" class="foot-img"></a>
                </div>
                <div class="footer-left common-footer">
                    <p class="footer-company-name">© 2024 CyberPOZ. All Rights Reserved</p>
                </div>
                <div class="footer-icon common-footer">
                    <a href="javascript:void(0)" target="_blank">
                        <i class="ti ti-brand-facebook"></i>
                    </a>
                    <a href="javascript:void(0)" target="_blank">
                        <i class="ti ti-brand-youtube"></i>
                    </a>
                    <a href="javascript:void(0)" target="_blank">
                        <i class="ti ti-brand-x"></i>
                    </a>                    
                    <a href="javascript:void(0)" target="_blank">
                        <i class="ti ti-brand-linkedin"></i>
                    </a>                    
                </div>

            </div>
        </div>
    </div>    
    
    <script src="{{ asset('assets/landing_asset/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/landing_asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/landing_asset/js/bootstrap.min.js') }}"></script>    
    <script src="{{ asset('assets/landing_asset/js/slick.min.js') }}"></script>    
    <script src="{{ asset('assets/landing_asset/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/landing_asset/js/venobox.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/landing_asset/js/script.js') }}"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <script> 

        $(document).ready(function(){

            new WOW().init(); 

            new VenoBox({
                selector: '.my-video-links',
            });
                                    
        });

        function toggleSidebar(obj){
            $('#navbarList').toggle();
        }

        function addSubscriber(obj){    

            let email = $('#subscribe_email').val();
            let route = `{{ route('add-customer-newsletters') }}`;
            let editFilterEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                      
            if (!email) {              
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Email is required!",
                });
                return false;
            } 
            if (!editFilterEmail.test(email)) {              
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Please enter a valid Email!!!",
                });
                return false;
            } 
            
            $.ajax({
                type: 'POST',
                url: route,
                data: {
                    _token: '{!! csrf_token() !!}',
                    email: email,
                },
                success: function(response) {        
                                                
                    if(response.status == 1){
                        Swal.fire({
                            title: "Done!",
                            text: response.message,
                            icon: "success"
                        });
                    }else{                                                    
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                        });
                    }
                },
                error: function(error) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong!",
                    });
                }
            });
        }
        
    </script>

</body>
</html>
