
@extends('layouts.FrontendLayout2')

@section('content')
<div class="breadcrumb">
            <ul>
                <li>
                    <a href="/" title="Top">Top</a>
                    <span class="delimiter">/</span>
                </li>
                <li>
                        <a href="/offers" title="Exciting Offers">Exciting Offers</a>
                        <span class="delimiter">/</span>
                </li>
                <li>
                        <a href="/winter-collection-3" title="Winter Collection">Winter Collection</a>
                        <span class="delimiter">/</span>
                </li>
                <li>
                        <strong class="current-item">Gents Winter Collection</strong>
                </li>
            </ul>
        </div>
        <div class="page-title">
        <h1>{{$productss[0]->name}}</h1>
    </div>
<div class="product-grid nop7SpikesAjaxFiltersGrid ajaxBusyPanelParent" style="position: relative;">
            <div class="item-grid">
                 @foreach($productss as $product)
                @if($product)
                @php
                    $products=DB::table('products')->where('cat_ids',$product->id)->paginate(21);
                @endphp
                @foreach($products as $product) 
                    <div class="item-box">
                      
                            <div class="product-item" data-productid="{{$product->id}}">
                                
                                <div class="picture">
                                    <a href="{{route('details',['product_id'=>$product->id])}}" title="Stylish Casual Long Sleeve Hoodie for Men-P19">
                                        <img alt="Stylish Casual Long Sleeve Hoodie for Men-P19" src="{{URL::to('/')}}/application/storage/app/product/{{$product->f_pic}}" title="{{$product->name}}">
                                    </a>
                                </div>
                                <div class="details">
                                    <div class="color-squares-wrapper"></div>
                                    <h2 class="product-title">
                                        <a href="{{route('details',['product_id'=>$product->id])}}">{{$product->name}}</a>
                                    </h2>
                                    <div class="add-info">
                                        
                                        <div class="prices">
                                            <span class="price actual-price">Tk {{$product->price}}</span>
                                                                        </div>
                                        
                            
                                        <div class="description">
                                            Complete your winter collection with this Stylish Casual Long Sleeve Hoodie. This hoodie is warm and cozy and it will keep your ears protected from the cold breezes of the season. So, buy it at the best price.
                                        </div>
                            
                                        <div class="buttons-lower btn-group" style="width:100%">
                                            <form action="{{URL::to('/')}}/carts/{{$product->id}}" method="post" novalidate="novalidate" style="width: 100%!important;">
                                                    @csrf                                                   
                                                    <input type="hidden" value="{{$product->price}}" name="product_price">
                                                    <input type="hidden" value="{{$product->id}}" name="product_id">
                                                    <input id="product_buy_item_quantity-value1544" type="hidden" name="qty" value="1">
                                                    <button type="submit" title="ADD TO CART" style="width:100%" >
                                                        <i class=" fa fa-shopping-cart"></i>
                                                    </button>
                                                </form>
                                                
                                                <a href="{{URL::to('/')}}/buynow/{{$product->id}}" style="width: 100%!important;">
                                                    <button type="button" title="BUY NOW" >
                                                    <i class=" fa fa-shopping-basket"></i>
                                                </button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                    @endforeach
                @endif
                @endforeach
                    
                   
            </div>
        <!--<div class="productPanelAjaxBusy" style="display: none;"></div><div class="clear"></div><div class="infinite-scroll-loader">Loading More Products</div></div>-->
        <div class="col-12">
            {{$products->links()}}
        </div>
        
        
<script src="{{URL::to('/')}}/css/new/slider-asset/js/jquery.min.js"></script>
         </section>

        <!--content area end-->
@endsection