<li class="menu">
        <a href="{{URL::to('dashboard')}}" @if(request()->segment(1)=='dashboard') data-active="true"  aria-expanded="true" @endif  class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <span>Dashboard</span>
            </div>
            <!--<div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>-->
        </a>
        <!--<ul class="collapse submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
            <li class="active">
                <a href="index.html"> Sales </a>
            </li>
            <li>
                <a href="index2.html"> Analytics </a>
            </li>
        </ul>--->
</li>
@if(Auth::user()->utype=='ADM')
@php
    $permissioarr=explode(',',Auth::user()->permissions);
@endphp
@if(in_array("products", $permissioarr)===true)
<li class="menu">
        <a href="#elements" data-toggle="collapse" @if(request()->segment(1)=='products' || request()->segment(1)=='addproduct') data-active="true"  aria-expanded="true" class="dropdown-toggle" @else aria-expanded="false" class="dropdown-toggle collapsed" @endif >
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                <span>Product</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled @if(request()->segment(1)=='products'  || request()->segment(1)=='addproduct') show @endif" id="elements" data-parent="#accordionExample">
            <li>
                <a href="{{URL::to('products')}}"> All Products </a>
            </li>
            <li>
                <a href="{{route('admin.addproduct')}}"> Add New Products </a>
            </li>
        </ul>
</li>
@endif
@if(in_array("orders", $permissioarr)===true)
<li class="menu">
    <a href="{{URL::to('admin/order')}}" @if(request()->segment(2)=='order') data-active="true"  aria-expanded="true" @endif class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                <span>Orders</span>
        </div>
    </a>
</li>
@endif
@if(in_array("address", $permissioarr)===true)
<li class="menu">
    <a href="{{URL::to('admin/shipping-different')}}" @if(request()->segment(2)=='shipping-different') data-active="true"  aria-expanded="true" @endif class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                <span>Shipping Addresses</span>
        </div>
    </a>
</li>
@endif
@if(in_array("transactions", $permissioarr)===true)
<li class="menu">
    <a href="{{URL::to('admin/transaction')}}" @if(request()->segment(2)=='transaction') data-active="true"  aria-expanded="true" @endif class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                <span>Transactions</span>
        </div>
    </a>
</li>
@endif
@if(in_array("categories", $permissioarr)===true)
<li class="menu">
        <a href="#category" data-toggle="collapse" @if(request()->segment(1)=='category' || request()->segment(1)=='addcategory') data-active="true"  aria-expanded="true" class="dropdown-toggle" @else aria-expanded="false" class="dropdown-toggle collapsed" @endif>
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                <span>Category</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled  @if(request()->segment(1)=='category'  || request()->segment(1)=='addcategory') show @endif" id="category" data-parent="#accordionExample">
            <li>
                <a href="{{URL::to('category')}}"> All Categories </a>
            </li>
            <li>
                <a href="{{URL::to('addcategory')}}"> Add New Categories </a>
            </li>
        </ul>
</li>
@endif
@if(in_array("pages", $permissioarr)===true)
<li class="menu">
        <a href="#page" data-toggle="collapse" @if(request()->segment(1)=='pages') data-active="true"  aria-expanded="true" class="dropdown-toggle" @else aria-expanded="false" class="dropdown-toggle collapsed" @endif>
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                <span>Pages</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled @if(request()->segment(1)=='pages') show @endif" id="page" data-parent="#accordionExample">
            <li>
                <a href="{{URL::to('pages')}}"> All Pages </a>
            </li>
            <li>
                <a href="{{URL::to('/')}}/pages/create"> Add New Pages </a>
            </li>
        </ul>
</li>
@endif
@if(in_array("posts", $permissioarr)===true)
<li class="menu">
        <a href="#posts" data-toggle="collapse" @if(request()->segment(1)=='posts') data-active="true"  aria-expanded="true" class="dropdown-toggle" @else aria-expanded="false" class="dropdown-toggle collapsed" @endif>
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                <span>Videos</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled @if(request()->segment(1)=='posts') show @endif" id="posts" data-parent="#accordionExample">
            <li>
                <a href="{{URL::to('posts')}}"> All Videos </a>
            </li>
            <li>
                <a href="{{URL::to('/')}}/posts/create"> Add New Videos </a>
            </li>
        </ul>
</li>
@endif
@if(in_array("pictures", $permissioarr)===true)
<li class="menu">
        <a href="#Pictures" data-toggle="collapse" @if(request()->segment(1)=='medias') data-active="true"  aria-expanded="true" class="dropdown-toggle" @else aria-expanded="false" class="dropdown-toggle collapsed" @endif>
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-move"><polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg>
                <span>Pictures</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled @if(request()->segment(1)=='medias') show @endif" id="Pictures" data-parent="#accordionExample">
            <li>
                <a href="{{URL::to('medias')}}"> All Pictures </a>
            </li>
            <li>
                <a href="{{URL::to('/')}}/medias/create"> Upload New Picture </a>
            </li>
        </ul>
</li>
@endif

@if(in_array("settings", $permissioarr)===true)
<li class="menu">
    <a href="{{URL::to('cheque')}}" @if(request()->segment(1)=='settings') data-active="true"  aria-expanded="true" @endif class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
            <span>Cheque Prepare</span>
        </div>
    </a>
</li>
@endif

@if(in_array("settings", $permissioarr)===true)
<li class="menu">
    <a href="{{URL::to('settings')}}" @if(request()->segment(1)=='settings') data-active="true"  aria-expanded="true" @endif class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                <span>Setting</span>
        </div>
    </a>
</li>
@endif

@if(in_array("themes", $permissioarr)===true)
<li class="menu">
        <a href="#themes" data-toggle="collapse" @if(request()->segment(1)=='themes') data-active="true"  aria-expanded="true" class="dropdown-toggle" @else aria-expanded="false" class="dropdown-toggle collapsed" @endif>
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-move"><polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg>
                <span>Themes</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled @if(request()->segment(1)=='themes') show @endif" id="themes" data-parent="#accordionExample">
            <li>
                <a href="{{URL::to('themes')}}"> All Themes </a>
            </li>
            <li>
                <a href="{{URL::to('/')}}/themes/create"> Upload New Theme </a>
            </li>
        </ul>
</li>
@endif
@if(in_array("bkash", $permissioarr)===true)
<li class="menu">
    <a href="{{URL::to('bkashs')}}" @if(request()->segment(1)=='bkashs') data-active="true"  aria-expanded="true" @endif class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                <span>Bkash</span>
        </div>
    </a>
</li>
@endif
@if(in_array("users", $permissioarr)===true)
<li class="menu">
        <a href="#Users" data-toggle="collapse" @if(request()->segment(1)=='users') data-active="true"  aria-expanded="true" class="dropdown-toggle" @else aria-expanded="false" class="dropdown-toggle collapsed" @endif>
            <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                <span>Users</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled @if(request()->segment(1)=='users') show @endif" id="Users" data-parent="#accordionExample">
            <li>
                <a href="{{URL::to('users')}}"> All Users </a>
            </li>
            <li>
                <a href="{{URL::to('/')}}/users/create"> Add New Users </a>
            </li>
        </ul>
</li>
@endif
@else
<li class="menu">
    <a href="{{URL::to('user/order')}}" @if(request()->segment(1)=='user') data-active="true"  aria-expanded="true" @endif class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                <span>Orders</span>
        </div>
    </a>
</li>
@endif
