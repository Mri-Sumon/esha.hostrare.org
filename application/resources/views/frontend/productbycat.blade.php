@extends('layouts.FrontendBttexLayout')
@section('content')
<style>
    .card-information{
        margin-top:25px!important;
    }
.nav2 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 245px;
    background-color: #fff;
    /* position: fixed; */
    z-index: 2!important;
    

}
.nav2 ul li {min-width: 200px; font-size:14px;}
.nav2 ul li a {display: block; color: #000; text-decoration: none; padding: 10px 0 10px 10px; font-size:12px;}
.nav2 ul li:hover > a {color: red; background-color: #fff; }

.nav2 .dropdown-content {
	min-width: 150px;
    display: none;
	left: 245px;
    float:left;
    position: absolute;
	font-size:14px;
	margin-top: -48px;
	box-shadow: 0 3px 18px 2px rgb(0 0 0 / 20%);
	border-radius:10px!important;
	padding-top:10px;
	padding-bottom:10px;
}
.nav2 .dropdown-content a {
    background-color: #fff;
    color: black;
    text-decoration: none;
    display: block;
    text-align: left;
	padding: 10px 0 10px 10px;
	text-transform:uppercase!important
}
.nav2 .dropdown:hover > .dropdown-content {
    display: inline-block;
}
@media only screen and (max-width: 426px) {
    .nav2 .block-categories-slider{
        display:none!important;
    }
}
.mtabs .nav-item.show .nav-link, .nav-tabs .nav-link.active
    background-color: red!important;
    color: white!important;
}

</style>

<main id="MainContent" class="wrapper-body content-for-layout focus-none" role="main" tabindex="-1">
                    <div id="shopify-section-template--14613441478746__banner" class="shopify-section"><link href="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/component-collection-hero.css?v=147281718098538120451685518094" rel="stylesheet" type="text/css" media="all">
<div data-section-id="template--14613441478746__banner" data-section-type="header-collection" id="HeaderCollectionSection-template--14613441478746__banner" data-section="template--14613441478746__banner"><div class="collection-header container" style="; --desc-color: ;"><div class="collection-breadcrumb text-left" style="--breadcrumb-color-mb: ; --breadcrumb-color: #999999;--breadcrumb-bg: ;--breadcrumb-bg-mb: #f6f6f6">
                    

<link href="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/component-breadcrumb.css?v=103005064124491561301673419717" rel="stylesheet" type="text/css" media="all">
<breadcrumb-component class="breadcrumb-container style--line_clamp_1">
        <nav class="breadcrumb breadcrumb-" role="navigation" aria-label="breadcrumbs">
        <a class="link home-link" href="/">Home</a><span class="separate" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg></span>
                    <span class="bd-title"><span><a href="/collections/new-in" title="">{{$category->name}}</a></span></span><span class="observe-element" style="width: 1px; height: 1px; background: transparent; display: inline-block; flex-shrink: 0;"></span>
        </nav>
    </breadcrumb-component>
    <script type="text/javascript">
        if (typeof breadcrumbComponentDeclare == 'undefiend') {
            class BreadcrumbComponent extends HTMLElement {
                constructor() {
                    super();
                }

                connectedCallback() {
                    this.firstLink = this.querySelector('.link.home-link')
                    this.lastLink = this.querySelector('.observe-element')
                    this.classList.add('initialized');
                    this.initObservers();
                }

                static createHandler(position = 'first', breadcrumb = null) {
                    const handler = (entries, observer) => {
                        entries.forEach(entry => {
                            if (breadcrumb == null) return observer.disconnect();
                            if (entry.isIntersecting ) {
                                breadcrumb.classList.add(`disable-${position}`);
                            } else {
                                breadcrumb.classList.remove(`disable-${position}`);
                            }
                        })
                    }
                    return handler;
                }

                initObservers() {
                    const scrollToFirstHandler = BreadcrumbComponent.createHandler('first', this);
                    const scrollToLastHandler = BreadcrumbComponent.createHandler('last', this);
                    
                    this.scrollToFirstObserver = new IntersectionObserver(scrollToFirstHandler, { threshold: 1 });
                    this.scrollToLastObserver = new IntersectionObserver(scrollToLastHandler, { threshold: 0.6 });

                    this.scrollToFirstObserver.observe(this.firstLink);
                    this.scrollToLastObserver.observe(this.lastLink);
                }
            }   

            window.addEventListener('load', () => {
                customElements.define('breadcrumb-component', BreadcrumbComponent);
            })

            var breadcrumbComponentDeclare = BreadcrumbComponent;
        }
    </script>
                </div><div class="collection-content collection-content-1"></div>
    </div>
</div>
<style type="text/css" media="screen">
    #HeaderCollectionSection-template--14613441478746__banner{padding-top: 0px;padding-bottom: 0px}#HeaderCollectionSection-template--14613441478746__banner .collection-description{max-width: %;}
    @media (max-width: 1024px) {#HeaderCollectionSection-template--14613441478746__banner{padding-top: 0px;padding-bottom: 0px}#HeaderCollectionSection-template--14613441478746__banner > .collection-header{padding-left: 15px;padding-right: 15px}}
    @media (max-width: 550px) {#HeaderCollectionSection-template--14613441478746__banner{padding-top: 0px;padding-bottom: 0px}}
</style></div>

<div id="shopify-section-template--14613441478746__product-grid" class="shopify-section">
    <link href="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/component-grid.css?v=14116691739327510611685517362" rel="stylesheet" type="text/css" media="all">

<link href="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/component-product-listing.css?v=155588165449619321881688523380" rel="stylesheet" type="text/css" media="all">

<style type="text/css" media="screen">:root {--sidebar-heading-font: var(--font-heading-family);--body-bg: rgba(0,0,0,0);}body { background: var(--body-bg)}#CollectionSection-template--14613441478746__product-grid{padding-top: 0px;padding-bottom: 0px}#CollectionSection-template--14613441478746__product-grid .sidebarBlock-heading{font-family: var(--sidebar-heading-font);font-size: 14px;font-weight: 700;text-transform: uppercase}@media (max-width: 1024px) {#CollectionSection-template--14613441478746__product-grid{padding-top: 0px;padding-bottom: 0px}}
    @media (max-width: 550px) {#CollectionSection-template--14613441478746__product-grid{padding-top: 0px;padding-bottom: 0px}}
</style>
<div data-section-id="template--14613441478746__product-grid" data-section-type="collection" id="CollectionSection-template--14613441478746__product-grid" 
data-section="template--14613441478746__product-grid" class="collection-default"><div class="container">
    <div class="halo-collection-content halo-grid-content sidebar--layout_vertical">
        <link href="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/component-main-sidebar.css?v=63410274165268300231686298669" rel="stylesheet" type="text/css" media="all">
        
                <div class="page-sidebar page-sidebar-left page-sidebar--vertical sidebar--layout_1" id="halo-sidebar">
                    <button type="button" class="halo-sidebar-close" data-close-sidebar="" role="button"><span class="visually-hidden">Close</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path></svg></button>
                    <div class="halo-sidebar-header text-left"><span class="title">Sidebar</span></div>
                    <div class="halo-sidebar-wrapper custom-scrollbar">
                        <div class="sidebarBlock sidebar-categories sidebarBlock-collapse"><div class="sidebarBlock-headingWrapper">
                            <h2 class="sidebarBlock-heading is-clicked">Categories</h2>
                            <?php $cats=\DB::table('cats')->where('parent','0')->get();?>
                        <nav class="nav2">
                            <ul>
                                @foreach($cats as $cat)
                                <?php $subcats=\DB::table('cats')->where('parent',$cat->id)->get();?>
                            	<li @if(count($subcats)>0) class="dropdown" @endif> 
                            	<a href="{{URL::to('/')}}/shop/cat/{{$cat->id}}" style=" text-transform:uppercase!important;"> 
                            	<table border="0">
                            	    <tr>
                            	        <td>@if($cat->faicon!='')<i class="fa {{$cat->faicon}}" aria-hidden="true" style="font-size:20px;"></i>@endif  </td>
                            	        <td style="font-size: 14px; padding-left: 8px;">{{$cat->name}} </td>
                            	        <td>
                            	            @if(count($subcats)>0)
                                        	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" style="color:#000!important;" class="icon icon-caret"><path d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z"></path></svg>
                                        	@endif
                            	        </td>
                            	    </tr>
                            	</table>
                            	
                            	
                            	
                            	</a>
                            	    @if(count($subcats)>0)
                            		<ul class="dropdown-content">
                            		    @foreach($subcats as $subcat)
                            			<li class="dropdown"><a href="{{URL::to('/')}}/shop/cat/{{$subcat->id}}">{{$subcat->name}}</a>
                            				<!--<ul class="dropdown-content">-->
                            				<!--	<li class="dropdown"><a href="">Menu item 111</a>-->
                            				<!--		<ul class="dropdown-content">-->
                            				<!--			<li class="dropdown"><a href="">Menu item 1111</a>-->
                            				<!--				<ul class="dropdown-content">-->
                            				<!--					<li class="dropdown"><a href="">Menu item 11111</a>-->
                            				<!--					</li>-->
                            				<!--					<li>-->
                            				<!--						<a href="">Menu item 11112</a>-->
                            				<!--					</li>-->
                            				<!--					<li>-->
                            				<!--						<a href="">Menu item 11113</a>-->
                            				<!--					</li>-->
                            				<!--					<li>-->
                            				<!--						<a href="">Menu item 11114</a>-->
                            				<!--					</li>-->
                            				<!--				</ul>-->
                            				<!--			</li>-->
                            				<!--			<li class="dropdown"><a href="">Menu item 1112</a>-->
                                <!--            <ul class="dropdown-content">-->
                                <!--              <li class="dropdown"><a href="">Menu item 11121</a>-->
                                <!--              </li>-->
                                <!--              <li>-->
                                <!--                <a href="">Menu item 11122</a>-->
                                <!--              </li>-->
                                <!--              <li>-->
                                <!--                <a href="">Menu item 11123</a>-->
                                <!--              </li>-->
                                <!--              <li>-->
                                <!--                <a href="">Menu item 11124</a>-->
                                <!--              </li>-->
                                <!--            </ul>                -->
                            				<!--			</li>-->
                            				<!--		</ul>-->
                            				<!--	</li>-->
                            				<!--	<li>-->
                            				<!--		<a href="">Menu item 112</a>-->
                            				<!--	</li>-->
                            				<!--	<li>-->
                            				<!--		<a href="">Menu item 113</a>-->
                            				<!--	</li>-->
                            				<!--</ul>-->
                            			</li>
                            			@endforeach
                            		</ul>
                            		@endif
                            	</li>
                            	@endforeach
                              
                            </ul>
                            </nav>
                        </div>
            <div class="sidebarBlock-contentWrapper" style="display: block;"><div class="sidebarBlock-content">
                <ul class="all-categories-list list-unstyled" role="menu">
                    <?php $cats=DB::table('cats')->where('parent','0')->get();?>
                                            @foreach($cats as $cat)
                            <li class="navPages-item" role="menuitem">
                                <a class="navPages-action link link-underline" href="{{URL::to('/')}}/shop/cat/{{$cat->id}}" aria-label="link">
                                    <span class="text">{{$cat->name}}</span>
                                </a>
                            </li>
                            @endforeach
                            </ul>
            </div></div></div>
<link href="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/component-filter.css?v=21081614795820932751688523525" rel="stylesheet" type="text/css" media="all">
    
<script src="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/collection-filters-form.js?v=2721753687665845561688523466" defer="defer"></script>
                    </div>
                </div>
                <div class="page-content" id="CollectionProductGrid">
                    <div class="articleLookbook-block" style="--lookbook-margin-bottom: 25px" ;="">
                        <h2 class="mt-0">{{$category->name}}</h2>
                            <!--<div class="articleLookbook-item"><a class="image image-zoom image-adapt adaptive_height" role="link" aria-disabled="true" style="padding-top: 34.40860215053764%"><img src="//new-ella-demo.myshopify.com/cdn/shop/files/category-default-1_00b1dab9-e8be-4a5f-9a83-6eea99ab29bd.jpg?v=1658131588&amp;width=1100" alt="" srcset="//new-ella-demo.myshopify.com/cdn/shop/files/category-default-1_00b1dab9-e8be-4a5f-9a83-6eea99ab29bd.jpg?v=1658131588&amp;width=375 375w, //new-ella-demo.myshopify.com/cdn/shop/files/category-default-1_00b1dab9-e8be-4a5f-9a83-6eea99ab29bd.jpg?v=1658131588&amp;width=550 550w, //new-ella-demo.myshopify.com/cdn/shop/files/category-default-1_00b1dab9-e8be-4a5f-9a83-6eea99ab29bd.jpg?v=1658131588&amp;width=750 750w, //new-ella-demo.myshopify.com/cdn/shop/files/category-default-1_00b1dab9-e8be-4a5f-9a83-6eea99ab29bd.jpg?v=1658131588&amp;width=1100 1100w" height="320" sizes="100vw">-->
                            <!--            </a><h1 class="articleLookbook-title text-left" style="--lb-fontsize-title: 24px;--lb-margin-top-title: 30px;--lb-title-color: #232323;--lb-title-text-transform: none">New In</h1><div class="articleLookbook-des text-left" style="--lb-fontsize-des: 12px;--lb-line-height-des: 22px;--lb-margin-top-des: 12px;--lb-title-des: #3c3c3c"><span>Nullam aliquet vestibulum augue non varius. Cras cosmo congue an melitos. Duis tristique del ante le maliquam praesent murna de tellus laoreet cosmopolis. Quisque hendrerit nibh an purus</span></div></div>-->
                        </div>
                        
                        
                        <link href="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/component-toolbar.css?v=115703157736635468261685517381" rel="stylesheet" type="text/css" media="all">
<!--<toolbar-item class="toolbar" data-toolbar="" data-id="template--14613441478746__product-grid"><div class="toolbar-wrapper toolbar-mobile">-->
<!--            <div class="toolbar-item toolbar-sidebar" data-sidebar="">-->
<!--                <span class="toolbar-icon icon-filter"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 368.167 368.167" aria-hidden="true" focusable="false" role="presentation" class="icon icon-sidebar"><path d="M248.084,96.684h12c4.4,0,8-3.6,8-8c0-4.4-3.6-8-8-8h-12c-4.4,0-8,3.6-8,8C240.084,93.084,243.684,96.684,248.084,96.684 z"></path><path d="M366.484,25.484c-2.8-5.6-8.4-8.8-14.4-8.8h-336c-6,0-11.6,3.6-14.4,8.8c-2.8,5.6-2,12,1.6,16.8l141.2,177.6v115.6 c0,6,3.2,11.2,8.4,14c2.4,1.2,4.8,2,7.6,2c3.2,0,6.4-0.8,9.2-2.8l44.4-30.8c6.4-4.8,10-12,10-19.6v-78.8l140.8-177.2 C368.484,37.484,369.284,31.084,366.484,25.484z M209.684,211.884c-0.8,1.2-1.6,2.8-1.6,4.8v81.2c0,2.8-1.2,5.2-3.2,6.8 l-44.4,30.8v-118.8c0-2.8-1.2-5.2-3.2-6.4l-90.4-113.6h145.2c4.4,0,8-3.6,8-8c0-4.4-3.6-8-8-8h-156c-0.4,0-1.2,0-1.6,0l-38.4-48     h336L209.684,211.884z"></path></svg> <span class="filter-text text">Filter</span></span>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="toolbar-wrapper">-->
<!--        <div class="results-count"><span class="results" style=""><span class="count">356</span> results</span></div><div class="toolbar-col toolbar-colLeft">-->
<!--                <label class="toolbar-label">View as</label>-->
<!--                <div class="toolbar-item toolbar-viewAs clearfix" data-view-as="">-->
<!--                    <span class="toolbar-icon icon-mode icon-mode-list" data-col="1" role="button" aria-label="List" tabindex="0"></span>-->
<!--                    <span class="toolbar-icon icon-mode icon-mode-grid grid-2" data-col="2" role="button" aria-label="Grid 2" tabindex="0"></span>-->
<!--                    <span class="toolbar-icon icon-mode icon-mode-grid grid-3" data-col="3" role="button" aria-label="Grid 3" tabindex="0"></span>-->
<!--                    <span class="toolbar-icon icon-mode icon-mode-grid grid-4 active" data-col="4" role="button" aria-label="Grid 4" tabindex="0"></span>-->
<!--                    <span class="toolbar-icon icon-mode icon-mode-grid grid-5" data-col="5" role="button" aria-label="Grid 5" tabindex="0"></span>-->
<!--                </div>-->
<!--            </div><div class="toolbar-col toolbar-colRight"><div class="toolbar-item toolbar-limitView clearfix" data-limited-view="">-->
<!--                        <label class="toolbar-label">Items per page</label>-->
<!--                        <div class="toolbar-dropdown limited-view hidden-on-mobile">-->
<!--                            <div class="label-tab" data-toggle="dropdown" aria-expanded="false" role="button" tabindex="0">-->
<!--                                <span class="label-text" name="paginateBy">20-->
<!--</span>-->
<!--                                <span class="halo-icon-dropdown icon-dropdown" role="none"></span>-->
<!--                            </div>-->
<!--                            <ul class="dropdown-menu list-unstyled hidden-on-mobile">-->
<!--                                <li data-limited-view-item=""><span class="text" data-value="10">10</span></li>-->
<!--                                <li data-limited-view-item=""><span class="text" data-value="15">15</span></li>-->
<!--                                <li data-limited-view-item="" class="is-active"><span class="text" data-value="20">20</span></li>-->
<!--                                <li data-limited-view-item=""><span class="text" data-value="25">25</span></li>-->
<!--                                <li data-limited-view-item=""><span class="text" data-value="30">30</span></li>-->
<!--                                <li data-limited-view-item=""><span class="text" data-value="50">50</span></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div><div class="toolbar-item toolbar-sort clearfix" data-sorting="">-->
<!--                        <label class="toolbar-label" data-ur="">Sort by</label>-->
<!--                        <div class="toolbar-dropdown filter-sortby">-->
<!--                            <div class="label-tab hidden-on-mobile" data-toggle="dropdown" aria-expanded="false" role="button" tabindex="0"><span class="label-text">Date, old to new</span><span class="halo-icon-dropdown icon-dropdown" role="none"></span>-->
<!--                            </div>-->
<!--                            <ul class="dropdown-menu list-unstyled hidden-on-mobile"><li data-sort-by-item=""><span class="text" data-href="manual" data-value="manual">Featured</span>-->
<!--                                    </li><li data-sort-by-item=""><span class="text" data-href="best-selling" data-value="best-selling">Best selling</span>-->
<!--                                    </li><li data-sort-by-item=""><span class="text" data-href="title-ascending" data-value="title-ascending">Alphabetically, A-Z</span>-->
<!--                                    </li><li data-sort-by-item=""><span class="text" data-href="title-descending" data-value="title-descending">Alphabetically, Z-A</span>-->
<!--                                    </li><li data-sort-by-item=""><span class="text" data-href="price-ascending" data-value="price-ascending">Price, low to high</span>-->
<!--                                    </li><li data-sort-by-item=""><span class="text" data-href="price-descending" data-value="price-descending">Price, high to low</span>-->
<!--                                    </li><li class="is-active" data-sort-by-item=""><span class="text" data-href="created-ascending" data-value="created-ascending">Date, old to new</span>-->
<!--                                    </li><li data-sort-by-item=""><span class="text" data-href="created-descending" data-value="created-descending">Date, new to old</span>-->
<!--                                    </li></ul>-->
<!--                            <div class="label-tab hidden-on-desktop" data-mobile="mobile" data-toggle="dropdown">-->
<!--                                <span class="label-text">Sort</span>-->
<!--                                <span class="halo-icon-dropdown icon-dropdown" role="none"></span>-->
<!--                            </div>-->
                            
<!--                        </div>-->
<!--                    </div></div></div>-->
<!--    <div class="toolbar-wrapper toolbar-mobile"><div class="toolbar-item toolbar-viewAs clearfix" data-view-as-mobile="">-->
<!--                <span class="toolbar-icon icon-mode icon-mode-list" data-col="1" role="button" aria-label="List" tabindex="0"></span>-->
<!--                <span class="toolbar-icon icon-mode icon-mode-grid grid-2" data-col="2" role="button" aria-label="Grid 2" tabindex="0"></span>-->
<!--                <span class="toolbar-icon icon-mode icon-mode-grid grid-3" data-col="3" role="button" aria-label="Grid 3" tabindex="0"></span>-->
<!--                <span class="toolbar-icon icon-mode icon-mode-grid grid-4 active" data-col="4" role="button" aria-label="Grid 4" tabindex="0"></span>-->
<!--                <span class="toolbar-icon icon-mode icon-mode-grid grid-5" data-col="5" role="button" aria-label="Grid 5" tabindex="0"></span>-->
<!--            </div></div>-->

<!--    <div class="dropdown-menu hidden-on-desktop" data-sorting="" data-mobile="mobile">-->
<!--        <div class="dropdown-menu-header">-->
<!--            <h2 class="dropdown-menu-title"><span class="text">Sort by:</span></h2>-->
<!--            <div class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 256.000000 256.000000" preserveAspectRatio="xMidYMid meet" class="close-mobile-modal"><g transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M34 2526 c-38 -38 -44 -76 -18 -116 9 -14 265 -274 568 -577 l551 -553 -551 -553 c-303 -303 -559 -563 -568 -577 -26 -40 -20 -78 18 -116 38 -38 76 -44 116 -18 14 9 274 265 578 568 l552 551 553 -551 c303 -303 563 -559 577 -568 40 -26 78 -20 116 18 38 38 44 76 18 116 -9 14 -265 274 -568 578 l-551 552 551 553 c303 303 559 563 568 577 26 40 20 78 -18 116 -38 38 -76 44 -116 18 -14 -9 -274 -265 -577 -568 l-553 -551 -552 551 c-304 303 -564 559 -578 568 -40 26 -78 20 -116 -18z"></path></g></svg></div>-->
<!--        </div>-->
<!--        <ul class="dropdown-menu-body list-unstyled"><li data-sort-by-item=""><span class="text" data-href="manual" data-value="manual">Featured</span>-->
<!--                </li><li data-sort-by-item=""><span class="text" data-href="best-selling" data-value="best-selling">Best selling</span>-->
<!--                </li><li data-sort-by-item=""><span class="text" data-href="title-ascending" data-value="title-ascending">Alphabetically, A-Z</span>-->
<!--                </li><li data-sort-by-item=""><span class="text" data-href="title-descending" data-value="title-descending">Alphabetically, Z-A</span>-->
<!--                </li><li data-sort-by-item=""><span class="text" data-href="price-ascending" data-value="price-ascending">Price, low to high</span>-->
<!--                </li><li data-sort-by-item=""><span class="text" data-href="price-descending" data-value="price-descending">Price, high to low</span>-->
<!--                </li><li class="is-active" data-sort-by-item=""><span class="text" data-href="created-ascending" data-value="created-ascending">Date, old to new</span>-->
<!--                </li><li data-sort-by-item=""><span class="text" data-href="created-descending" data-value="created-descending">Date, new to old</span>-->
<!--                </li></ul>-->
<!--    </div>-->
<!--</toolbar-item>-->
<script src="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/toolbar.js?v=153218025396885985031685517368" defer="defer"></script>
<div class="collection">
<ul class="productListing productGrid column-4 list-4 list-unstyled" id="main-collection-product-grid" data-id="template--14613441478746__product-grid">
    @foreach($productbycatid as $productbycatiditem)
    <li class="product">
        <div class="product-item" data-product-id="6617630965850" >
            <div class="card ajax-loaded">
                <div class="card-product">
                        <div class="card-product__wrapper">
                            
                        <div class="card-media card-media--adapt media--hover-effect has-compare media--loading-effect" style="padding-bottom: 100%;">
                                        <img src="{{URL::to('/')}}/application/storage/app/product/{{$productbycatiditem->f_pic}}"  sizes="(min-width: 1100px) 1200px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="{{$productbycatiditem->name}}" size="1200" loading="lazy" class="motion-reduce lazyloaded" >
                                        <img src="{{URL::to('/')}}/application/storage/app/product/{{$productbycatiditem->f_pic}}" sizes="(min-width: 1100px) 780px, (min-width: 750px) calc((100vw - 130px) / 2), calc((100vw - 50px) / 2)" alt="(Product 1) Sample - Clothing And Accessory Boutiques For Sale" size="780" loading="lazy" class="motion-reduce lazyloaded">
                                        <span class="data-lazy-loading"></span>
                                        <div class="media-loading" data-title="Ella">Ella</div>
                                        <a class="card-link" href="{{URL::to('/')}}/details/{{$productbycatiditem->id}}" title="{{$productbycatiditem->name}}"></a>
                        </div>  
                        <div class="card-product__group group-right"><div class="card-product__group-item card-wishlist">
                            <button type="button" title="Add to wishlist" class="wishlist-icon show-mb" data-wishlist="" data-wishlist-handle="naminos-dementus-a-dincidunto" data-product-id="6617630965850"><span class="text">Add to wishlist</span> <svg aria-hidden="true" viewBox="0 0 512 512" class="icon icon-wishlist w-h-"><g><g><path d="M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25 c-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25 c-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7 c31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574 c2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431 c53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351 C512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646 c-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245 C79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659 c2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66 c15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351 C482,254.358,413.255,312.939,309.193,401.614z"></path></g></g></svg></button>
                        </div>
                        <div class="card-product__group-item card-quickview card-quickviewIcon show-mb">
                            <!--<button type="button" title="Quick View" class="quickview-icon" data-product-id="6617630965850" data-open-quick-view-popup="" data-product-handle="naminos-dementus-a-dincidunto"><span class="text">Quick View</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" aria-hidden="true" focusable="false" role="presentation" class="icon icon-eyes"><path d=" M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035 c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201 C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418 c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418 C447.361,287.923,358.746,385.406,255.997,385.406z"></path><path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275  s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516 s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path></svg></button>-->
                        </div>
        </div>
        <div class="card-action has-compare">
            <div class="card-information">
                <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2">
                    <div class="card-vendor">
                            <span class="visually-hidden">Vendor:</span>
                            <a href="#" title="Sodling">Sodling</a></div>
                    </div>
                    <h3 class="card__heading">
                        <a class="card-title link-underline card-title-ellipsis card-title-change" href="{{URL::to('/')}}/details/{{$productbycatiditem->id}}"
                        data-product-title="{{$productbycatiditem->name}}">{{$productbycatiditem->name}} <span data-change-title=""> </span></a>
                    </h3>
                </div>
            </div>
        </div>
            
        </div>
    </div>
    </li>
    @endforeach

</ul>

<link href="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/component-pagination.css?v=25948791488963924751664963794" rel="stylesheet" type="text/css" media="all">
<div class="pagination-wrapper text-center">
        <nav class="pagination style--1 text-center" role="navigation" aria-label="Pagination">
            <div class="pagination-page-item pagination-page-total">
                <span>Showing</span>
                <span data-total-start="">1</span>
                <span>-</span><span data-total-end="">20</span><span> of 356 total</span><div class="pagination-total-progress">
                    <span style="width: 5%" class="pagination-total-item"></span>
                </div>
            </div><div class="pagination-page-item pagination-page-infinite">
                    <a class="button button--secondary" href="/collections/new-in?page=2" data-href="/collections/new-in?page=2" data-infinite-scrolling="" data-load-more="Show More" data-loading-more="Show More">Show More
</a>
                </div></nav>
    </div>
</div></div>
        </div></div><div class="loading-overlay loading-overlay--custom">
        <div class="loading-overlay__spinner" aria-label="Loading..."><svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle></svg></div>
    </div>
</div>



<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "CollectionPage",
        "name": "New In",
        "url": "https://new-ella-demo.myshopify.com/collections/new-in",
        "description": "Nullam aliquet vestibulum augue non varius. Cras cosmo congue an melitos. Duis tristique del ante le maliquam praesent murna de tellus laoreet cosmopolis. Quisque hendrerit nibh an purus"
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://new-ella-demo.myshopify.com"
        },
        {
            "@type": "ListItem",
            "position": 2,
            "name": "New In",
            "item": "https://new-ella-demo.myshopify.com/collections/new-in"
        }]
    }
    </script>

</div><div id="shopify-section-template--14613441478746__product-recently-viewed" class="shopify-section halo-recently-viewed-block-sections"><style type="text/css" media="screen">.section-block-template--14613441478746__product-recently-viewed,
        .section-block-template--14613441478746__product-recently-viewed .halo-block-header .title .text {
            background: #ffffff;
        }

        
            .section-block-template--14613441478746__product-recently-viewed .halo-block-header {
                border-top: 1px solid #e8e8e8;
            }
         

        

         

        

        .section-block-template--14613441478746__product-recently-viewed .halo-block-header .title {
            color: #232323;
            font-size: 18px;
            margin-top: 26px;
            margin-bottom: 3px;
            /*text-transform: unset;*/
        }

        .section-block-template--14613441478746__product-recently-viewed .halo-block-header .title:before {
            background-color: #232323;
            
                display: none;
            
        }

        

        .section-block-template--14613441478746__product-recently-viewed .block-title--style2 .title {
            padding-bottom: 3px;
        }/* Start: Scroll Layout */
        .section-block-template--14613441478746__product-recently-viewed .products-flex {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            user-select: none;
            padding-bottom: 45px;
            overflow: auto;
            overflow-y: clip;
            gap: 30px;
            padding-right: 60px;
        }

        body.layout_rtl .section-block-template--14613441478746__product-recently-viewed .products-flex {
            padding-left: 60px;
            padding-right: 0;
        }

        .section-block-template--14613441478746__product-recently-viewed .products-flex .product {
            flex-shrink: 0;
            flex-grow: 0;
            padding: 0;
        }

        .section-block-template--14613441478746__product-recently-viewed .halo-block-content.is-scroll {
            overflow: hidden;
        }

        .section-block-template--14613441478746__product-recently-viewed .products-flex::-webkit-scrollbar {
            height: var(--scrollbar-height, 3px);
            cursor: pointer;
        }

        .section-block-template--14613441478746__product-recently-viewed .products-flex::-webkit-scrollbar-track {
            background: var(--scrollbar-track-color, #dadada);
        }

        .section-block-template--14613441478746__product-recently-viewed .products-flex::-webkit-scrollbar-thumb {
            background: var(--scrollbar-thumb-color, #000);
        }

        .section-block-template--14613441478746__product-recently-viewed .products-flex::-webkit-scrollbar-thumb:hover {
            background: var(--scrollbar-thumb-hover-color, #333);
        }

        .section-block-template--14613441478746__product-recently-viewed .products-flex.active .product {
            pointer-events: none;
        }

        /* End: Scroll Layout */

        @media (max-width: 1024px) {
            .section-block-template--14613441478746__product-recently-viewed .products-flex {
                --count: 2!important;
                gap: 15px;
            }
            
            .section-block-template--14613441478746__product-recently-viewed .products-flex .product {
                padding: 0 7px;
            }

            .section-block-template--14613441478746__product-recently-viewed .products-flex {
                scroll-snap-type: x mandatory;
                padding-bottom: 0;
            }
        
            .section-block-template--14613441478746__product-recently-viewed .halo-product-block .products-flex .product {
                scroll-snap-align: start;
            }
        }

        @media (max-width: 767px) {
            .section-block-template--14613441478746__product-recently-viewed {
                padding-top: 0px;
                padding-bottom: 0px;
            }

            .section-block-template--14613441478746__product-recently-viewed .halo-block-header .title {
                font-size: 18px;
            }

            .section-block-template--14613441478746__product-recently-viewed .products-flex .product {
                
                    flex-basis: calc(100% / var(--count));
                    width: calc(100% / var(--count));
                
            }
        }

        @media (min-width: 551px){
            .section-block-template--14613441478746__product-recently-viewed .products-grid {
                margin-left: calc(var(--grid-gap) * (-1));
                margin-right: calc(var(--grid-gap) * (-1));
            }

            .section-block-template--14613441478746__product-recently-viewed .products-grid .product {
                padding-right: var(--grid-gap);
                padding-left: var(--grid-gap);
                margin: 0 0 calc(var(--grid-gap) * 2) !important;
            }
        }

        @media (min-width: 1025px) {
            .section-block-template--14613441478746__product-recently-viewed .products-carousel .product {
                padding-right: var(--grid-gap);
                padding-left: var(--grid-gap);
            }

            
        }

        @media (min-width: 768px) and (max-width: 1199px) {
            .section-block-template--14613441478746__product-recently-viewed {
                padding-top: 0px;
                padding-bottom: 0px;
            }
        }

        @media (min-width: 768px) {
            .section-block-template--14613441478746__product-recently-viewed .products-flex .product  {
                
                    flex-basis: calc(100% / var(--count));
                    width: calc(100% / var(--count));
                
            }
        }

        @media (min-width: 1200px) {
            .section-block-template--14613441478746__product-recently-viewed {
                padding-top: 0px;
                padding-bottom: 0px;
            }
        }
    </style>
    <div class="halo-block halo-product-block halo-recently-viewed-block section-block-template--14613441478746__product-recently-viewed" id="halo-recently-viewed-block-template--14613441478746__product-recently-viewed" data-recently-viewed-block="" data-limit="10" data-layout="slider" sectionid="template--14613441478746__product-recently-viewed" data-image-ratio="adapt" data-swipe="false" style="--grid-gap: 15.0px">
        <div class="container"><div class="halo-block-header text-center block-title--style1">
                    <h3 class="title">
                        <span class="text">Recently Viewed Products</span>
                    </h3>
                </div><div class="halo-block-content "><div class="recentlyViewed-row products-carousel column-5" data-item-to-show="5" data-item-dots="false" data-item-dots-mb="true" data-item-arrows="true" data-item-arrows-mb="false" id="recently-viewed-products-list-2">
                <div class="product">
                            <div class="product-item product-item--loadingNoInfo">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper">
                <div class="card-media animated-loading" style="padding-bottom: 133%"><div class="media-loading" data-title="Ella">Ella</div></div>
            </div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2 animated-loading">
                      <div class="card-vendor"><span class="visually-hidden">Vendor:</span> Vendor</div>
                    </div><a class="card-title link-underline animated-loading capitalize card-title-ellipsis" role="link" aria-disabled="true"><span class="text">Example product title</span></a>
                <div class="card-price animated-loading"><div class="price price--sold-out ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$19.99</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$19.99</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>
</div>
            </div>
        </div>
    </div>
</div>
                        </div><div class="product">
                            <div class="product-item product-item--loadingNoInfo">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper">
                <div class="card-media animated-loading" style="padding-bottom: 133%"><div class="media-loading" data-title="Ella">Ella</div></div>
            </div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2 animated-loading">
                      <div class="card-vendor"><span class="visually-hidden">Vendor:</span> Vendor</div>
                    </div><a class="card-title link-underline animated-loading capitalize card-title-ellipsis" role="link" aria-disabled="true"><span class="text">Example product title</span></a>
                <div class="card-price animated-loading"><div class="price price--sold-out ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$19.99</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$19.99</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>
</div>
            </div>
        </div>
    </div>
</div>
                        </div><div class="product">
                            <div class="product-item product-item--loadingNoInfo">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper">
                <div class="card-media animated-loading" style="padding-bottom: 133%"><div class="media-loading" data-title="Ella">Ella</div></div>
            </div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2 animated-loading">
                      <div class="card-vendor"><span class="visually-hidden">Vendor:</span> Vendor</div>
                    </div><a class="card-title link-underline animated-loading capitalize card-title-ellipsis" role="link" aria-disabled="true"><span class="text">Example product title</span></a>
                <div class="card-price animated-loading"><div class="price price--sold-out ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$19.99</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$19.99</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>
</div>
            </div>
        </div>
    </div>
</div>
                        </div><div class="product">
                            <div class="product-item product-item--loadingNoInfo">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper">
                <div class="card-media animated-loading" style="padding-bottom: 133%"><div class="media-loading" data-title="Ella">Ella</div></div>
            </div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2 animated-loading">
                      <div class="card-vendor"><span class="visually-hidden">Vendor:</span> Vendor</div>
                    </div><a class="card-title link-underline animated-loading capitalize card-title-ellipsis" role="link" aria-disabled="true"><span class="text">Example product title</span></a>
                <div class="card-price animated-loading"><div class="price price--sold-out ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$19.99</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$19.99</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>
</div>
            </div>
        </div>
    </div>
</div>
                        </div><div class="product">
                            <div class="product-item product-item--loadingNoInfo">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper">
                <div class="card-media animated-loading" style="padding-bottom: 133%"><div class="media-loading" data-title="Ella">Ella</div></div>
            </div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2 animated-loading">
                      <div class="card-vendor"><span class="visually-hidden">Vendor:</span> Vendor</div>
                    </div><a class="card-title link-underline animated-loading capitalize card-title-ellipsis" role="link" aria-disabled="true"><span class="text">Example product title</span></a>
                <div class="card-price animated-loading"><div class="price price--sold-out ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$19.99</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$19.99</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>
</div>
            </div>
        </div>
    </div>
</div>
                        </div><div class="product">
                            <div class="product-item product-item--loadingNoInfo">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper">
                <div class="card-media animated-loading" style="padding-bottom: 133%"><div class="media-loading" data-title="Ella">Ella</div></div>
            </div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2 animated-loading">
                      <div class="card-vendor"><span class="visually-hidden">Vendor:</span> Vendor</div>
                    </div><a class="card-title link-underline animated-loading capitalize card-title-ellipsis" role="link" aria-disabled="true"><span class="text">Example product title</span></a>
                <div class="card-price animated-loading"><div class="price price--sold-out ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$19.99</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$19.99</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>
</div>
            </div>
        </div>
    </div>
</div>
                        </div><div class="product">
                            <div class="product-item product-item--loadingNoInfo">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper">
                <div class="card-media animated-loading" style="padding-bottom: 133%"><div class="media-loading" data-title="Ella">Ella</div></div>
            </div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2 animated-loading">
                      <div class="card-vendor"><span class="visually-hidden">Vendor:</span> Vendor</div>
                    </div><a class="card-title link-underline animated-loading capitalize card-title-ellipsis" role="link" aria-disabled="true"><span class="text">Example product title</span></a>
                <div class="card-price animated-loading"><div class="price price--sold-out ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$19.99</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$19.99</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>
</div>
            </div>
        </div>
    </div>
</div>
                        </div><div class="product">
                            <div class="product-item product-item--loadingNoInfo">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper">
                <div class="card-media animated-loading" style="padding-bottom: 133%"><div class="media-loading" data-title="Ella">Ella</div></div>
            </div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2 animated-loading">
                      <div class="card-vendor"><span class="visually-hidden">Vendor:</span> Vendor</div>
                    </div><a class="card-title link-underline animated-loading capitalize card-title-ellipsis" role="link" aria-disabled="true"><span class="text">Example product title</span></a>
                <div class="card-price animated-loading"><div class="price price--sold-out ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$19.99</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$19.99</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>
</div>
            </div>
        </div>
    </div>
</div>
                        </div><div class="product">
                            <div class="product-item product-item--loadingNoInfo">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper">
                <div class="card-media animated-loading" style="padding-bottom: 133%"><div class="media-loading" data-title="Ella">Ella</div></div>
            </div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2 animated-loading">
                      <div class="card-vendor"><span class="visually-hidden">Vendor:</span> Vendor</div>
                    </div><a class="card-title link-underline animated-loading capitalize card-title-ellipsis" role="link" aria-disabled="true"><span class="text">Example product title</span></a>
                <div class="card-price animated-loading"><div class="price price--sold-out ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$19.99</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$19.99</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>
</div>
            </div>
        </div>
    </div>
</div>
                        </div><div class="product">
                            <div class="product-item product-item--loadingNoInfo">
    <div class="card">
        <div class="card-product">
            <div class="card-product__wrapper">
                <div class="card-media animated-loading" style="padding-bottom: 133%"><div class="media-loading" data-title="Ella">Ella</div></div>
            </div>
        </div>
        <div class="card-information">
            <div class="card-information__wrapper text-center"><div class="card-information__group card-information__group-2 animated-loading">
                      <div class="card-vendor"><span class="visually-hidden">Vendor:</span> Vendor</div>
                    </div><a class="card-title link-underline animated-loading capitalize card-title-ellipsis" role="link" aria-disabled="true"><span class="text">Example product title</span></a>
                <div class="card-price animated-loading"><div class="price price--sold-out ">
    <dl><div class="price__regular"><dd class="price__last"><span class="price-item price-item--regular"><span class="money">$19.99</span></span></dd>
        </div>
        <div class="price__sale"><dd class="price__compare"><s class="price-item price-item--regular"></s></dd><dd class="price__last"><span class="price-item price-item--sale"><span class="money">$19.99</span></span></dd></div>
        <small class="unit-price caption hidden">
            <dt class="visually-hidden">Unit price</dt>
            <dd class="price__last"><span></span><span aria-hidden="true">/</span><span class="visually-hidden">&nbsp;per&nbsp;</span><span></span></dd>
        </small>
    </dl>
</div>
</div>
            </div>
        </div>
    </div>
</div>
                        </div></div></div>
        </div>
    </div>
    <script src="//new-ella-demo.myshopify.com/cdn/shop/t/196/assets/recently-viewed-product.js?v=166542025565451574291692946214" type="text/javascript"></script>
    <script type="text/javascript">
        Shopify.Products.recordRecentlyViewed();

        var cookieValue = $.cookie('shopify_recently_viewed');

        if (!(cookieValue !== null && cookieValue !== undefined && cookieValue !== "")){
            $('#halo-recently-viewed-block-template--14613441478746__product-recently-viewed').remove();
        } else {
            var recentlyViewed = $(this.popup);

            var limit = 10,
                expireDay = 1;

            const handler = (entries, observer) => {
                if (!entries[0].isIntersecting || entries[0].target.matches('.ajax-loaded')) return;
                entries[0].target.classList.add('ajax-loaded');
                Shopify.Products.showRecentlyViewed({
                    howManyToShow: limit,
                    wrapperId: 'recently-viewed-products-list-2', 
                    templateId: 'recently-viewed-product-block',
                    layout: 'slider',
                    swipe: false,
                    media: 'adapt',
                    onComplete: function() {
                        if (window.location.pathname.indexOf('/products/') !== -1) {
                            $.cookie('shopify_recently_viewed', cookieValue, { expires: expireDay, path: "/", domain: window.location.hostname });
                        }
                    }
                });
            }

            this.recentlyViewedBlock = document.querySelector('[data-recently-viewed-block]');

            const config = {
                threshold: 0.25,
            }

            new IntersectionObserver(handler.bind(this.recentlyViewedBlock), ({}, config)).observe(this.recentlyViewedBlock);
        }
    </script></div>
                </main>
@endsection