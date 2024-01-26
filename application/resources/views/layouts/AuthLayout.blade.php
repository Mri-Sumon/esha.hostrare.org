<?php $settings=App\Settings::where('id',1)->first();?>
<!DOCTYPE html>
<html class="html-home-page"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{$settings->name}} - {{$settings->tagline}}</title>
    
    <meta name="title" content="{{$settings->tagline}}">
    <meta name="description" content="Online shopping in Bangladesh for men, women &amp;amp; kids. Buy dress, gift item, beauty products, unique items, jewelry, watch, electronics at giftmart.express">
    <meta name="keywords" content="Online shop in Bangladesh, online shopping site in Bangladesh, online shop in Bangladesh, Online Shop Bangladesh, Gifts to Bangladesh, online shopping store, online shopping store Bangladesh, Deals,Priyo, Discounts, Discount, Best deals dhaka, best deals bangladesh, cheapest iphone in bangladesh, cheap electronics bangladesh, restaurants dhaka, electronics dhaka, dhaka electronics, travel bangladesh, travel offers, bangladesh travel, bangladesh tour, discount products, fashion dhaka, cafe dhaka, dhaka cafes, send gifts bangladesh, send gift to bangladesh, bangladesh gift, bangladeshi gift, gift bangladesh, bangladesh online shopping, gift for bangladesh, online gift delivery shop, send flowers to dhaka, send cakes chocolates, fruits, sharee, greeting cards to Bangladesh, bangladesh wedding gifts, gift to bangladesh on eid, gift to bangladesh on valentine day, Cheap tabs, ecommerce bangaldesh, free antivirus, online shopping bd, deals dhaka,  প্রিয়শপ">
    <meta name="generator" content="nopCommerce">
    <meta property="og:title" content="{{$settings->tagline}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{URL::to('/')}}">
    <meta property="og:image" content="{{URL::to('/')}}/application/storage/app/slider/525967.png">
    <meta property="og:description" content="Online shopping in Bangladesh for men, women &amp;amp; kids. Buy dress, gift item, beauty products, unique items, jewelry, watch, electronics at giftmart.express">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{URL::to('/')}}/assets/css.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{URL::to('/')}}/application/storage/app/slider/525967.png"/>
    
    


    <!-- Google code for Analytics tracking -->
<!--<script src="{{URL::to('/')}}/assets/312987619202131.js" async=""></script>-->
<script type="text/javascript" async="" src="{{URL::to('/')}}/assets/atrk.js"></script>


    <link href="{{URL::to('/')}}/assets/yzap_tth7_hxvqa6s9rnq2zuz_2xfev-l5k8dyu-67o1.css" rel="stylesheet">


    

    <script src="{{URL::to('/')}}/assets/qnylfqrh3tpf8pckrtzlssiv_6vlvkjgjrxkjvbnvzm1.js"></script>

<script src="{{URL::to('/')}}/assets/bootstrap.min.js" type="text/javascript"></script>

    <link href="{{URL::to('/')}}/assets/custom.css" rel="stylesheet" type="text/css">
    
    
    
    
    
<link rel="shortcut icon" href="{{URL::to('/')}}/application/storage/app/slider/1691195804.png">
    <!--Powered by nopCommerce - http://www.nopCommerce.com-->
    <!-- Start Alexa Certify Javascript -->
    <!--<script type="text/javascript">-->
    <!--    _atrk_opts = { atrk_acct: "prBMj1a8y100GO", domain: "giftmart.express", dynamic: true };-->
    <!--    (function () { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(as, s); })();-->
    <!--</script>-->
    <!--<noscript><img src="" style="display: none" height="1" width="1" alt="" /></noscript>-->
    <!-- End Alexa Certify Javascript -->
</head>
<body style="background: #81ade4; background-image: url('https://billing.khantradeinternational.com/asset/bgsky.jpg');">
    


@yield('content')



</body>

</html>