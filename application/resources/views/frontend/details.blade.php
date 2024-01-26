@extends('layouts.FrontendLayout2')
@section('script')
<meta property="og:url"  content="{{URL::to('/')}}/details/{{$product_details->id}}" />
<meta property="og:type"     content="website" />
<meta property="og:title"    content="{{$product_details->name}}" />
<meta property="og:description"   content="" />
<meta property="og:image"     content="{{URL::to('/')}}/application/storage/app/product/{{$product_details->f_pic}}" />

@endsection
@section('content')

<div class="master-wrapper-content">
        
        

<div id="color-squares-info" data-retrieve-color-squares-url="/PavilionTheme/RetrieveColorSquares" data-product-attribute-change-url="/ShoppingCart/ProductDetails_AttributeChange" data-productbox-selector=".product-item" data-productbox-container-selector=".color-squares-wrapper" data-productbox-price-selector=".prices .actual-price">
</div>


        
    
    <div class="breadcrumb">
        <ul>
            
            <li>
                <span itemscope="" itemtype="">
                    <a href="/" itemprop="url">
                        <span itemprop="title">Home</span>
                    </a>
                </span>
                <span class="delimiter">/</span>
            </li>
                <li>
                    <span itemscope="" itemtype="">
                        <a href="/shop" itemprop="url">
                            <span itemprop="title">Shop</span>
                        </a>
                    </span>
                    <span class="delimiter">/</span>
                </li>
            <li>
                <strong class="current-item">{{$product_details->name}}</strong>
                
                
            </li>
        </ul>
    </div>


            <div class="master-column-wrapper">
            
<div class="center-1">
    
    

<script type="text/javascript">
    $(function () {
        var isDonation = 'False';
        if (isDonation === 'True') {
            $('.product-code-wrapper').hide();
            $('.product-reviews-overview').hide();

            $('.qty-label').remove();
            $('.qty-input').hide();
            $('.product-details-desc-icon').hide();
            $('.delivery').hide();
            $('.two-column-wrapper').hide();
            $('.product-collateral').hide();
            $('.recently-viewed-products-grid.product-grid').hide();
            $('.enter-price-label').text('Donation Amount').css({
                color: '#F74258',
                fontWeight: 'bolder'
            });

            $('.price-range').hide().text($('.price-range').text().replace('price', 'donation'));
            $('.add-to-cart-button').css({
                padding: '0 50px'
            }).val('Donate!');
            $('.breadcrumb').hide();
            $('.enter-price-input').val('').focus();

            $('.overview-buttons').hide();
            $('.one-column-wrapper').hide();
        }
    });
</script>




<style>

    .ui-state-active,
    .ui-widget-content .ui-state-active,
    .ui-widget-header .ui-state-active,
    a.ui-button:active,
    .ui-button:active,
    .ui-button.ui-state-active:hover {
        border: 1px solid #f74258;
        background: #f74258;
        font-weight: normal;
        color: #ffffff;
    }
</style>

<style>
    .product-collateral {
        margin: 0 0 30px !important;
    }

    .product-short-description {
        padding: 20px;
        text-align: justify;
    }

    .featuretable tr td {
        border: 1px solid;
        border-color: #837b7b;
        font-family: Tahoma,Verdana, Geneva, sans-serif;
        font-size: 10pt;
        margin: 0px;
        padding: 5px;
        vertical-align: top;
        line-height: 18px;
    }

    .t10 {
        width: 10%;
    }

    .t20 {
        width: 20%;
    }

    .t30 {
        width: 30%;
    }

    .t40 {
        width: 40%;
    }

    .t50 {
        width: 50%;
    }

    .t60 {
        width: 60%;
    }

    .t70 {
        width: 70%;
    }

    .t80 {
        width: 80%;
    }

    .t90 {
        width: 90%;
    }

    .fNote {
        font-weight: 600;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 12px;
    }

    /*  Define the background color for all the ODD background rows  */
    .featuretable tr:nth-child(odd) {
        background: #fff;
    }
    /*  Define the background color for all the EVEN background rows  */
    .featuretable tr:nth-child(even) {
        background: #f0f1f2;
    }

    ul li {
        text-align: left !important;
    }
</style>

<!--product breadcrumb-->



<div class="page product-details-page">
    <div class="page-body">
        
<!--<form action="/stylish-casual-long-sleeve-hoodie-for-men-p19" id="product-details-form" method="post" novalidate="novalidate">            -->
<div itemscope="" itemtype="http://schema.org/Product" data-productid="144404">
                <div class="product-essential">
                    <div class="details-picture-wrapper">
                        






    <input type="hidden" class="cloudZoomAdjustPictureOnProductAttributeValueChange" data-productid="144404" data-isintegratedbywidget="true">
        <input type="hidden" class="cloudZoomEnableClickToZoom">
    <div class="gallery sevenspikes-cloudzoom-gallery">
        <div class="picture-wrapper">
            <div class="picture" id="sevenspikes-cloud-zoom" data-zoomwindowelementid="cloudZoomWindowElement" data-selectoroftheparentelementofthecloudzoomwindow=".overview" data-defaultimagecontainerselector=".product-essential .gallery" data-zoom-window-width="500" data-zoom-window-height="400">
                <a data-full-image-url="{{URL::to('/')}}/application/storage/app/product/{{$product_details->f_pic}}" class="picture-link" id="zoom1">
                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$product_details->f_pic}}" alt="Stylish Casual Long Sleeve Hoodie for Men-P19" class="cloudzoom" id="cloudZoomImage" itemprop="image" data-cloudzoom="appendSelector: '.picture-wrapper', zoomOffsetX: -6, zoomOffsetY: 0, autoInside: 850, tintOpacity: 0, zoomWidth: 500, zoomHeight: 400, easing: 3, touchStartDelay: true, zoomFlyOut: false, disableZoom: 'auto'" style="user-select: none;">
                </a>
            </div>
        </div>
    </div>

                        
                    </div>

                    <div class="overview"><div id="cloudZoomWindowElement" style="position: absolute;"></div>
                        

                        

                        <div class="product-name">
                            <h1 itemprop="name">
                                {{$product_details->name}}
                            </h1>
                        </div>

                        <!--SKU, MAN, GTIN, vendor-->
                        <div class="product-code-wrapper">
                            <div class="additional-details">
    
        <!--<div class="sku">-->
        <!--    <span class="label">Product Code:</span>-->
        <!--    <span class="value" itemprop="sku" id="sku-144404">M-1155-144404</span>-->
        <!--</div>-->
        </div>
                        </div>

                        <!--reviews-->
                        
    <div class="product-reviews-overview">
        <div class="product-review-box">
            <div class="rating">
                <div style="width: 0%">
                </div>
            </div>
        </div>

            <!--<div class="product-no-reviews">-->
            <!--    <a href="/productreviews/144404">Be the first to review this product</a>-->
            <!--</div>-->
    </div>


                    <div class="">
                        <div class="price-wrapper">
                            <!--price & add to cart-->

	<div class="prices" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
	        <div class="					product-price
">

	            
				<span itemprop="price" content="{{$product_details->price}}" class="price-value-144404">
	                Tk {{$product_details->price}}
	            </span>
	        </div>
	            <meta itemprop="priceCurrency" content="BDT">
	</div>

                        </div>

                        <!--rental info-->

                        
                            <!--<div class="product-vendor">-->
                            <!--    <span class="label">Merchant:</span>-->
                            <!--    <span class="value"><a href="/postoffice-shopping">Postoffice Shopping</a></span>-->
                            <!--</div>-->

                        <!--manufacturers-->
                        

                        <!--sample download-->
                        
                        <!--attributes-->

    <!--<div class="attributes">-->
    <!--    <dl>-->
    <!--            <dt id="product_attribute_label_59548" style="width: 40px;">-->
    <!--                <label class="text-prompt">-->
    <!--                    Size-->
    <!--                </label>-->
    <!--                    <span class="required">*</span>-->
    <!--                                </dt>-->
    <!--            <dd id="product_attribute_input_59548">-->
    <!--                            <ul class="option-list">-->
    <!--                                    <li>-->
    <!--                                        <input id="product_attribute_59548_810117" type="radio" name="product_attribute_59548" value="810117" onclick="attribute_change_handler_144404()">-->
    <!--                                        <label for="product_attribute_59548_810117">M</label>-->
    <!--                                    </li>-->
    <!--                                    <li>-->
    <!--                                        <input id="product_attribute_59548_810118" type="radio" name="product_attribute_59548" value="810118" onclick="attribute_change_handler_144404()">-->
    <!--                                        <label for="product_attribute_59548_810118">L</label>-->
    <!--                                    </li>-->
    <!--                                    <li>-->
    <!--                                        <input id="product_attribute_59548_810119" type="radio" name="product_attribute_59548" value="810119" onclick="attribute_change_handler_144404()">-->
    <!--                                        <label for="product_attribute_59548_810119">XL</label>-->
    <!--                                    </li>-->
    <!--                            </ul>-->
    <!--            </dd>-->
    <!--    </dl>-->
    <!--</div>-->
        <script type="text/javascript">
            function attribute_change_handler_144404() {
                $.ajax({
                    cache: false,
                    url: '/shoppingcart/productdetails_attributechange?productId=144404&validateAttributeConditions=False&loadPicture=True',
                    data: $('#product-details-form').serialize(),
                    type: 'post',
                    success: function (data) {
                        if (data.price) {
                            $('.price-value-144404').text(data.price);
                        }
                        //if (data.oldprice) {
                            $('.old-price-144404').text(data.oldprice);
                        //}
                        if (data.sku) {
                            $('#sku-144404').text(data.sku);
                        }
                        if (data.mpn) {
                            $('#mpn-144404').text(data.mpn);
                        }
                        if (data.gtin) {
                            $('#gtin-144404').text(data.gtin);
                        }
                        if (data.stockAvailability) {
                            $('#stock-availability-value-144404').text(data.stockAvailability);
                        }
                        if (data.enabledattributemappingids) {
                            for (var i = 0; i < data.enabledattributemappingids.length; i++) {
                                $('#product_attribute_label_' + data.enabledattributemappingids[i]).show();
                                $('#product_attribute_input_' + data.enabledattributemappingids[i]).show();
                            }
                        }
                        if (data.disabledattributemappingids) {
                            for (var i = 0; i < data.disabledattributemappingids.length; i++) {
                                $('#product_attribute_label_' + data.disabledattributemappingids[i]).hide();
                                $('#product_attribute_input_' + data.disabledattributemappingids[i]).hide();
                            }
                        }
                        if (data.pictureDefaultSizeUrl) {
                            $('#main-product-img-144404').attr("src", data.pictureDefaultSizeUrl);
                        }
                        if (data.pictureFullSizeUrl) {
                            $('#main-product-img-lightbox-anchor-144404').attr("href", data.pictureFullSizeUrl);
                        }

                        $.event.trigger({ type: "product_attributes_changed", changedData: data });
                    }
                });
            }
        </script>

                        <!--gift card-->

                        <!--availability-->
                        
                        <!--add to cart-->

    <div class="add-to-cart">
                    <div class="add-to-cart-panel">
                <label class="qty-label" for="addtocart_144404_EnteredQuantity">Qty:</label>
                <form action="{{URL::to('/')}}/carts/{{$product_details->id}}" method="post" novalidate="novalidate" style="width: 100%!important;">
                                                    @csrf                                                   
                                                    <input type="hidden" value="{{$product_details->price}}" name="product_price">
                                                    <input type="hidden" value="{{$product_details->id}}" name="product_id">
                                                    <!--<input id="product_buy_item_quantity-value1544" type="hidden" name="qty" value="1">-->
                                                    
<input class="qty-input" id="addtocart_144404_EnteredQuantity" name="qty" type="number" value="1" >                    <br><br><br>
                    
                    <button type="submit" id="add-add-to-cart-button-144404" class="add-add-to-cart-button" data-productid="144404" >
                        <i style="padding-right:10px" class=" fa fa-shopping-cart"></i>ADD TO CART
                    </button>
                    
                    </form>
                    <a href="{{URL::to('/')}}/buynow/{{$product_details->id}}" style="width: 100%!important;">
                    <button type="button" id="add-to-cart-button-144404" class="buy-now-button" data-productid="144404" >
                        <i style="padding-right:10px" class=" fa fa-shopping-basket"></i>BUY NOW
                    </button>
                    </a>
                        <!--<button type="button" id="add-to-wishlist-button-144404" data-productid="144404" onclick="AjaxCart.addproducttocart_details('/addproducttocart/details/144404/2', '#product-details-form');return false;"><i style="padding-right:10px" class=" fa fa-heart"></i>ADD TO WISHLIST</button>-->

            </div>
        
    </div>

                        <!--wishlist, compare, email a friend-->
                        <div class="overview-buttons">
                            

                            

                            <!--<span class="product-details-hotline"><i class="fa fa-mobile" aria-hidden="true"></i>ঘরে থাকুন, সুস্থ থাকুন</span>-->

                            
                        </div>

                        
                    </div>
                        
                    </div>
                    <div class="overview-bottom">
                        <div class="product-details-desc-icon">
                                <div class="topic-block">
            <div class="topic-block-title">
                
                        <h2>Product details right content</h2>

               
            </div>
        <div class="topic-block-body">
            
        </div>
    </div>

                        </div>
                        <!--sharing-->

<div class="product-social-buttons">
    <label>Share:</label>
    <ul class="social-sharing">
        <li class="twitter">
            <!-- Twitter -->
            <a href="javascript:openShareWindow('http://twitter.com/share?url=https://giftmart.express/details/{{$product_details->id}}')">
                <span class="flip"></span>
                <span class="flop"></span>
            </a>
        </li>
        <li class="facebook">
            <!-- Facebook -->
            <a href="javascript:openShareWindow('http://www.facebook.com/sharer.php?u=https://giftmart.express/details/{{$product_details->id}}')">
                <span class="flip"></span>
                <span class="flop"></span>
            </a>
        </li>
        <li class="pinterest">
            <!-- Pinterest -->
            <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                <span class="flip"></span>
                <span class="flop"></span>
            </a>
        </li>
        <li class="google">
            <!-- Google+ -->
            <a href="javascript:openShareWindow('https://plus.google.com/share?url=https://giftmart.express/details/{{$product_details->id}}')">
                <span class="flip"></span>
                <span class="flop"></span>
            </a>
        </li>
    </ul>

    <script>
        function openShareWindow(url) {
            var winWidth = 520;
            var winHeight = 400;
            var winTop = (screen.height / 2) - (winHeight / 2);
            var winLeft = (screen.width / 2) - (winWidth / 2);

            window.open(url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
        }
    </script>
</div>
                        <!--delivery-->
                        
                    </div>
                </div>

                




                    <div class="one-column-wrapper">
                        


    <div id="quickTabs" class="productTabs  ui-tabs ui-widget ui-widget-content ui-corner-all" data-ajaxenabled="false" data-productreviewsaddnewurl="/ProductTab/ProductReviewsTabAddNew/144404" data-productcontactusurl="/ProductTab/ProductContactUsTabAddNew/144404" data-couldnotloadtaberrormessage="Couldn't load this tab.">
        

<div class="productTabs-header">
    <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="quickTab-description" aria-labelledby="ui-id-1" aria-selected="true">
                <a href="#quickTab-description" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Summary</a>
            </li>
            <!--<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="quickTab-2" aria-labelledby="ui-id-2" aria-selected="false">-->
            <!--    <a href="#quickTab-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Purchase &amp; Delivery</a>-->
            <!--</li>-->
            <!--<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="quickTab-6" aria-labelledby="ui-id-3" aria-selected="false">-->
            <!--    <a href="#quickTab-6" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">Refund Policy</a>-->
            <!--</li>-->
            <!--<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="quickTab-4" aria-labelledby="ui-id-4" aria-selected="false">-->
            <!--    <a href="#quickTab-4" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4">Replace Policy</a>-->
            <!--</li>-->
        
        
    </ul>
</div>
<div class="productTabs-body">
        <div id="quickTab-description" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
            


<div class="full-description" itemprop="description">
    {!! $product_details->brief !!}
</div>
        </div>
        <div id="quickTab-2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
            


<div class="custom-tab">
    <p><strong>Purchase Step</strong></p>
<ul class="commonTabInfo">
<li>Select number of product you want to buy.</li>
<li>Click on&nbsp;<strong>Buy Now</strong>&nbsp;button.</li>
<li>If you are a new user, please click on Sign Up. Then sign up by providing the required information.</li>
<li>Use your user name &amp; password if you are a registered customer.</li>
<li>Choose your payment (Check out) method.</li>
<li>Follow required instruction based on payment method.</li>
<li>Full advance Payment is required for the delivery outside Dhaka.·&nbsp;</li>
<li>Order confirmation and delivery completion are subject to product availability. For Further details,&nbsp;<a href="https://priyoshop.com/orders-stock-availability-and-pricing"><strong>click</strong>&nbsp;here</a>.</li>
<li>Once sold, the product cannot be returned &amp; replaced until it has a warranty.</li>
<li>Please check your product at the time of delivery.</li>
<li>Disclaimer: Product color may slightly vary due to photography, lighting sources or your monitor settings.</li>
<li>The product will deliver based on product availability. For further details&nbsp;<a href="https://priyoshop.com/shipping-returns"><strong>Click&nbsp;</strong>here</a>.</li>
<li>Requested respected customers&nbsp;to refrain from buying excessive goods after being panicked. We are unable to entertain any bulk quantity during COVID-19.&nbsp;<strong>Delivery may delay due to&nbsp;COVID-19.</strong></li>
</ul>
<p>&nbsp;</p>
<p><strong>How to pay:</strong></p>
<ul>
<li>Cash on Delivery</li>
<li>Mobile Payment: bKash, Nagad, Rocket</li>
<li>Card - Visa, Master, Amex, Nexus, Online Banking</li>
<li>EMI</li>
<li>Nexus Pay</li>
</ul>
<p>You can make your purchases on&nbsp;<strong>PriyoShop&nbsp;</strong>and get delivery<strong>&nbsp;</strong>from anywhere in the world. Delivery charge varies according to customers' country. In case of paid order, PriyoShop.com cannot be held liable if customer does not receive it within 2 months.</p>
<p style="text-align: justify;">&nbsp;</p>
<p><strong>Customer Service of PriyoShop:&nbsp;</strong>Email: support@priyoshop.com</p>
</div>
        </div>
        <div id="quickTab-6" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
            


<div class="custom-tab">
    <p style="text-align: justify;">১) বিকাশ, নগদ কিংবা ডেবিট/ক্রেডিট কার্ড দিয়ে প্রি-পেমেন্ট করে অর্ডার করলে, পেমেন্ট ভেরিফিকেশনের ৭২&nbsp;ঘন্টার মধ্যে সাপ্লাইয়ার পণ্য প্রদানে ব্যর্থ হলে স্বয়ংক্রিয়ভাবে অর্ডার বাতিল হয়ে রিফান্ড প্রসেস শুরু হবে।</p>
<p style="text-align: justify;">In case suppliers can't deliver product by&nbsp;72 hours from payment verification while pre-payment order via bKash, Nagad or debit/credit card payment, order will be automatically cancelled and refund process will start.</p>
<p style="text-align: justify;">২) অতঃপর সর্বোচ্চ ১০ কর্মদিবসের মধ্যে যে মাধ্যমে মূল্য পরিশোধ করা হয়েছে ঐ মাধ্যমেই শুধুমাত্র প্রদত্ত অর্থ (পেইড এমাউন্ট) ফেরত দেয়া হবে।</p>
<p style="text-align: justify;">Then paid amount will be refunded only via the same channel/method of payment within maximum 10 working days.</p>
<p style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;">৩) বিকাশ, নগদ রিফান্ডের ক্ষেত্রে হরতাল/লকডাউন/রিচার্জ পয়েন্ট খোলা সাপেক্ষ সময় বিলম্ব হতে পারে।</span></p>
<p style="text-align: justify;">bKash and Nagad refund can be delayed due to strike/hartal/lockdown/recharge point open.</p>
<p style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;">৪) কার্ড রিফান্ডের ক্ষেত্রে কার্ড ইস্যু ব্যাংক ও গেটওয়ে পার্টনারের নির্ধারিত সময় লাগতে পারে।</span></p>
<p style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;">It may take time for card refund as per required duration of card issuer bank and gateway partner.</span></p>
<p style="text-align: justify;">৫) রিফান্ড প্রসেসের মধ্যে কাস্টমার স্বেচ্ছায় চাইলে অর্ডার পরিবর্তন করতে পারবে।</p>
<p style="text-align: justify;">Customer can change his/her order during the timeframe of refund process.</p>
<p style="text-align: justify;"><strong><span class="sf5mxxl7 nvdbi5me oygrvhab ditlmg2l kvgmc6g5 knj5qynh tbxw36s4 pq6dq46d">‍</span>বি:দ্র:&nbsp;১০ আগষ্ট ২০২১ তারিখ হতে অর্ডারকৃত প্রতিটি অর্ডাররের জন্য উপরোক্ত পলিসি কার্যকর হবে।</strong></p>
<p style="text-align: justify;">&nbsp;</p>
</div>
        </div>
        <div id="quickTab-4" aria-labelledby="ui-id-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
            


<div class="custom-tab">
    <ul>
<li>
<div class="clearfix _o46 _3erg _29_7 direction_ltr text_align_ltr">
<div id="js_7xc" class="_3058 _ui9 _hh7 _6ybn _s1- _52mr _3oh-" data-tooltip-content="Monday 9:26pm" data-hover="tooltip" data-tooltip-position="left">
<div class="_aok _7i2m" tabindex="0"><span class="_3oh- _58nk">Please check your products in front of riders or courier service agents.</span></div>
</div>
</div>
</li>
<li>Product will be replaced if it has any defect by its manufacturer.</li>
<li>Customer needs to inform us&nbsp;within&nbsp;24 hours&nbsp;from the date of delivery*.</li>
<li>Products must be with the tags intact and in their original packaging, in an unwashed and undamaged condition.</li>
<li>Replacement for products is subject to inspection and checking by PriyoShop team.</li>
<li>Replacement cannot be possible if the product is burnt, damaged by short circuit, damaged due to neglect, improper usage,&nbsp;or broken by customer.</li>
<li>Innerwear and product of clearance sale cannot be replaced.</li>
</ul>
</div>
        </div>
    
    
</div>
    </div>
 

                         
                    </div>

                <!--<div class="product-collateral">-->
                <!--        <div class="product-short-description">-->
                <!--            <p>Complete your winter collection with this Stylish Casual Long Sleeve Hoodie. This hoodie is warm and cozy and it will keep your ears protected from the cold breezes of the season. So, buy it at the best price.</p>-->
                <!--        </div>-->
                <!--</div>-->
<h4 style="background: #f74258;
color: white;
width: 149px;
padding: 10px;
font-weight: bold;
text-align: center;
margin: 0;
font-size: 18px;">Description</h4>
                <div class="product-collateral">
                    
                        <div class="full-description" itemprop="description">
                            {!! $product_details->description !!}
                        </div>
                    

                    
                        <div class="product-tags-box">
        <!--<div class="title">-->
        <!--    <strong>Product tags</strong>-->
        <!--</div>-->
        <!--<div class="product-tags-list">-->
        <!--    <ul>-->
        <!--            <li class="tag">-->
        <!--                <a href="/producttag/683/hoodie" class="producttag">-->
        <!--                    hoodie</a> <span>(202)</span></li>-->
        <!--            <li class="separator">,</li>-->
        <!--            <li class="tag">-->
        <!--                <a href="/producttag/835/hoody" class="producttag">-->
        <!--                    hoody</a> <span>(328)</span></li>-->
        <!--            <li class="separator">,</li>-->
        <!--            <li class="tag">-->
        <!--                <a href="/producttag/38143/stylish-hoodie" class="producttag">-->
        <!--                    stylish hoodie</a> <span>(22)</span></li>-->
        <!--            <li class="separator">,</li>-->
        <!--            <li class="tag">-->
        <!--                <a href="/producttag/47037/buy-hoodie" class="producttag">-->
        <!--                    buy hoodie</a> <span>(170)</span></li>-->
        <!--            <li class="separator">,</li>-->
        <!--            <li class="tag">-->
        <!--                <a href="/producttag/166677/buy-cotton-hoodie-online" class="producttag">-->
        <!--                    buy cotton hoodie online</a> <span>(97)</span></li>-->
        <!--            <li class="separator">,</li>-->
        <!--            <li class="tag">-->
        <!--                <a href="/producttag/166678/buy-hudy" class="producttag">-->
        <!--                    buy hudy</a> <span>(97)</span></li>-->
        <!--            <li class="separator">,</li>-->
        <!--            <li class="tag">-->
        <!--                <a href="/producttag/177157/long-sleeve-hoodie" class="producttag">-->
        <!--                    long sleeve hoodie</a> <span>(19)</span></li>-->
        <!--            <li class="separator">,</li>-->
        <!--            <li class="tag">-->
        <!--                <a href="/producttag/177158/stylish-casual-long-sleeve-hoodie-for-men-" class="producttag">-->
        <!--                    stylish casual long sleeve hoodie for men-</a> <span>(14)</span></li>-->
        <!--    </ul>-->
        <!--</div>-->
    </div>


                </div>
                
                

            </div>
<!--</form>-->
        
            <div class="recently-viewed-products-grid product-grid">
        <div class="title">
            <strong>Related products</strong>
        </div>
        
            <div class="item-grid">
        @foreach($related_product as $r_product)
                <div class="item-box">
                    <div class="product-item" data-productid="144404">
                        
                        <div class="picture">
                            <a href="{{route('details',['product_id'=>$r_product->id])}}" title="{{$r_product->name}}">
                                <img alt="{{$r_product->name}}" src="{{URL::to('/')}}/application/storage/app/product/{{$r_product->f_pic}}" title="{{$r_product->name}}">
                            </a>
                        </div>
                        <div class="details">
                            <div class="color-squares-wrapper"></div>
                            <h2 class="product-title">
                                <a href="{{route('details',['product_id'=>$r_product->id])}}">{{$r_product->name}}</a>
                            </h2>
                            <div class="add-info">
                                
                                <div class="prices">
                                    <span class="price actual-price">Tk {{$r_product->price}}</span>
                                                                </div>
                                
                    
                                <div class="description">
                                    {{$r_product->brief}}
                                </div>
                    
                                <div class="buttons-lower btn-group" style="width:100%">
                                        <form action="{{URL::to('/')}}/carts/{{$r_product->id}}" method="post" novalidate="novalidate" style="width: 100%!important;">
                                                    @csrf                                                   
                                                    <input type="hidden" value="{{$r_product->price}}" name="product_price">
                                                    <input type="hidden" value="{{$r_product->id}}" name="product_id">
                                                    <input id="product_buy_item_quantity-value1544" type="hidden" name="qty" value="1">
                                                    <button type="submit" title="ADD TO CART" style="width:100%" >
                                                        <i class=" fa fa-shopping-cart"></i>
                                                    </button>
                                                </form>
                                                
                                                <a href="{{URL::to('/')}}/buynow/{{$r_product->id}}" style="width: 100%!important;">
                                                    <button type="button" title="BUY NOW" >
                                                    <i class=" fa fa-shopping-basket"></i>
                                                </button></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
            </div>
    </div>

    </div>
</div>

    
</div>

        </div>
        
    </div>





























<script>

    function SeeMoreProducts(category_id)
    {
        document.getElementById("BtnSeeMore").innerHTML = 'Please Wait';
        serverPage = 'http://www.kalerhaat.com/ovation/more_new_related_products/' + category_id;
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                $("#Product_AjaxRelated").append(xmlhttp.responseText);
                document.getElementById("moreProductArea").setAttribute("style", "display: none;");

//                $('html, body').animate({scrollTop: $("#relatedProductID").position().top}, 'slow');
                $("#relatedProductID").focus();


            }
        }
        xmlhttp.send(null);

    }

</script>    


    


<script src="{{URL::to('/')}}/css/new/slider-asset/js/jquery.min.js"></script>
<script src="{{URL::to('/')}}/css/new/slider-asset/js/owl.carousel.min2.js"></script>

<script>

    $(document).ready(function () {
        //owl carousel

        if ($('.product-category').hasClass('owl-carousel')) {

            $('.owl-carousel').owlCarousel({
                items: 1,
                nav:true,
                dots: true,
                autoplay: false,
                slideBy: 1,
                loop: true
                
            })
        }

    });
</script>
         </section>

        <!--content area end-->

@endsection