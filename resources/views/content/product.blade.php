@extends('layouts.frontend')
@section('content')
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="back-links">
                <p><a href="{{ route('home.index') }}">Home</a>/<a href="{{ route('home.product', $product->id) }}">Product</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="cont-desc span_1_of_2">
                <div class="product-details">
                    <div class="grid images_3_of_2">
                        <div id="container">
                            <div id="products_example">
                                <div id="products">
                                    <div class="slides_container">
                                        @foreach($product->images as $image)
                                        <a href="#" target="_blank"><img src="{{url($image->name)}}" alt=" " /></a>
                                        @endforeach      
                                    </div>
                                    <div class="price price-red">
                                      <p>Giá: <span>{!!number_format($product->price,0,",",".") . 'đ'!!}</span> </p>
                                    </div>
                                    <div class="add-cart" id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}">                              
                                      <h4><a href="#">Add to Cart</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc span_3_of_2">
                        <h2>{{$product->name}}</h2>
                        <div class="share-desc">
                            <ul class="parameter">
                              <li>
                                <span>Màn Hình:</span>
                                <div>{{$product->screen}}</div>
                              </li>
                              <li>
                                <span>Hệ điều hành:</span>
                                <div>{{$product->system}}</div>
                              </li>
                              <li>
                                <span>Camera sau:</span>
                                <div>{{$product->bcamera}} MB</div>
                              </li>
                              <li>
                                <span>Camera trước:</span>
                                <div>{{$product->fcamera}} MB</div>
                              </li>
                              <li>
                                <span>CPU:</span>
                                <div>{{$product->cpu}}</div>
                              </li>
                              <li>
                                <span>Ram:</span>
                                <div>{{$product->ram}} GB</div>
                              </li>
                              <li>
                                <span>Bộ nhớ trong:</span>
                                <div>{{$product->rom}} GB</div>
                              </li>
                              <li>
                                <span>Thẻ nhớ:</span>
                                <div>Hỗ trợ tối đa {{$product->smenory}} GB</div>
                              </li>
                              <li>
                                <span>Pin:</span>
                                <div>{{$product->pin}} mAh</div>
                              </li>
                            </ul>
                            
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="description">
                  <h2>Mô tả sản phẩm</h2>
                  <p>{{$product->description}}</p>
                </div>
                <div class="product_desc">
                  <div id="horizontalTab">
                      <ul class="resp-tabs-list">
                          <li>
                              @if(!(Auth::check())) 
                                <p>Bạn vui lòng đăng nhập để nhận xét sản phẩm này</p>
                                <a href="{{ route('users.login') }}">Login</a>
                                <a href="{{ route('users.register') }}">Register</a>
                              @endif
                          </li>
                          
                            @if (session('status'))
                                <div class="alert alert-info" style="color:red">{{session('status')}}</div>
                            @endif
                          <li><h3>Nhận xét {{ $product->name }}</h3></li>
                          <hr>
                              <div class="your-review">
                                  <form action="{{ route('comments.create') }}" method="post">
                                      {{ csrf_field() }}
                                      <input type="hidden" name="product_id" value="{{$product->id}}">
                                      @if(Auth::check())
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                      @endif
                                      <div>
                                          <span><label>Tiêu đề<span class="red">*</span></label></span>
                                          <span><input type="text" name="name" placeholder="Nhập tiêu đề ..."></span>
                                      </div>
                                      <div>
                                          <span><label>Nhận xét<span class="red">*</span></label></span>
                                          <span><textarea name="content"></textarea></span>
                                      </div>
                                      <div>
                                          <span><input type="submit" value="Gửi nhận xét"></span>
                                      </div>
                                  </form>
                              </div>
                              <hr><br>
                          <div class="clear"></div>
                      </ul>
                      <div class="resp-tabs-container">
                        <div class="review">
                          <h2>Khách hàng nhận xét</h2>
                            @foreach($comments as $comment)
                              <h4>Bởi:{{ $comment->user->username }}</h4>
                              <p>{{ $comment->content }}</p>
                            @endforeach 
                        </div>
                    </div>
                  </div>
                </div>
                <div class="content_bottom">
                    <div class="heading">
                        <h3>Sản phẩm tương tự</h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="section group">
                  @foreach($products as $product2)
                    <div class="grid_1_of_4 images_1_of_4">
                      <a href="{{ route('home.product', $product->id) }}">
                        @foreach($product2->images as $image)
                        <img src="{{url($image->name)}}" alt="product" height="150px" />
                        @endforeach
                      </a>
                      <h2>{{$product2->name}}</h2>
                        <div class="price-details">
                           <div class="price-number">
                                <p><span class="rupees price-red">{!!number_format($product2->price,0,",",".") . 'đ'!!}</span></p>
                            </div>
                        <div class="add-cart" id="{{$product2->id}}" data-name="{{$product2->name}}" data-price="{{$product2->price}}">                              
                          <h4><a href="#">Add to Cart</a></h4>
                        </div>
                        <div class="sosanh">
                          <a href="/products/compare?pd_1={{$product->id}}&pd_2={{$product2->id}}">So Sánh</a>
                        </div>
                        <div class="clear"></div>
                        </div>
                         
                    </div>
                  @endforeach
              </div>
              {{ $products->links() }}
            </div>
            <div class="rightsidebar span_3_of_1">
                <h2>CATEGORIES</h2>
                <ul class="side-w3ls">
                    @foreach($categories as $category)
                    <li><a href="{{route('categories.showproduct', $category->id)}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection