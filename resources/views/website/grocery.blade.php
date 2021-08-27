@extends('website.layout')
@section('content')

<main>
    <header class="row tm-welcome-section">
        <marquee>Notice: আপনাদের করোনার লোকডাউন মুহূর্তকে আনন্দময় করার জন্য Food Garage সকাল ১০ টা থেকে রাত ৯ টা
            পর্যন্ত খোলা থাকবে
        </marquee>
    </header>

    <div class="tm-paging-links">
        <nav>
            <ul>
                <li class="tm-paging-item"><a href="#" class="tm-paging-link active">Tea</a></li>
                
            </ul>
        </nav>
    </div>

    <!-- Gallery  to show all the items categorywise-->
    <div class="row tm-gallery">
        <!-- gallery page 1 only for tea items -->
        <div id="tm-gallery-page-tea" class="tm-gallery-page">
            @if($tea_items->isEmpty())
            <h3>no item available....</h3>
            @else
            @foreach($tea_items as $item)
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                @if($item->disable)
                      <img src="{{$item->image}}" alt="Image" class="img-fluid tm-gallery-img" onclick="disableModalOpen()" />
                @else
                     <img src="{{$item->image}}" alt="Image" class="img-fluid tm-gallery-img" onclick="modalOpen('{{$item->name}}',{{$item->price - $item->offer}},{{$item->restaurant_id}})" /> 
                @endif
                    <figcaption>
                        <h4 class="tm-gallery-title">{{$item->name}}</h4>
                        <p class="sub-title">{{$item->restaurant_name}}</p>
                        <div class="ratings">
                            @for($i = 0; $i < $item->ratings; $i++)
                                <span class="fa fa-star checked"></span>
                                @endfor
                                @for($i = $item->ratings; $i < 5; $i++) <span class="fa fa-star"></span>
                                    @endfor
                        </div>
                          @if($item->disable)
                             <button class="order-button" onclick="disableModalOpen()">Order
                            Now</button>
                        @else
                            <button class="order-button" onclick="modalOpen('{{$item->name}}',{{$item->price - $item->offer}},{{$item->restaurant_id}})">Order
                            Now</button>
                        @endif
                        @if($item->offer)
                        <p class="tm-gallery-price">৳ {{$item->price - $item->offer}} / ৳ <del>{{$item->price}}</del></p>
                        @else
                        <p class="tm-gallery-price">৳ {{$item->price}} </p>
                        @endif

                    </figcaption>
                </figure>
            </article>
            @endforeach
            @endif
        </div> <!-- gallery page 1 only for tea items -->

    </div>
    <div class="tm-section tm-container-inner">
        <div class="row">
            <div class="col-md-6">
                <figure class="tm-description-figure">
                    <img src="website/img/Food-Garage.svg" alt="Image" class="img-fluid" style="width: 530px; height: 256px;" />
                </figure>
            </div>
            <div class="col-md-6">
                <div class="tm-description-box">
                    <h4 class="tm-gallery-title">Join our foodgarage team!</h4>
                    <p class="tm-mb-45">We are looking for more restaurants to come forward to join us as our
                        partner. We are also looking for young energetic people to join us as delivery men. You
                        can <a rel="nofollow" href="{{url('/contact')}}">talk to us</a> for additional
                        information and details. Thank you.</p>
                    <a href="{{url('/about')}}" class="tm-btn tm-btn-default tm-right">Read More</a>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <form action="{{route('order')}}" method="POST">
        @csrf
            <div class="modal-head">
                <img src="website/img/logo.gif" alt="Logo" />
                <p style="text-align: center;">We are proceeding your order..!</h3>
            </div>
            <div class="form-group">
                <p class="form-label">Item Name</p>
                <input type="text" name="item_name" id="itemName" class="form-control" placeholder="Item Name" required="" readonly />
            </div>
            
            <div class="form-group">
                <p class="form-label">Name</p>
                <input type="text" name="customer_name" id="customerName" class="form-control" placeholder="Name" required="" />
            </div>
            <div class="form-group">
                <p class="form-label">Mobile</p>
                <input type="text" name="mobile" id="customerMobile" class="form-control" placeholder="Mobile no." required="" />
            </div>
            <div class="form-group">
                <p class="form-label">Address</p>
                <input type="text" name="address" id="customerAddress" class="form-control" placeholder="Address" required="" />
            </div>
            <div class="form-group">
                <p class="form-label">Quantity</p>
                <input type="number" name="quantity" id="orderQuantity" class="form-control" placeholder="Quantity" required="" value="1" />
            </div>
            <div class="form-group">
                <p class="form-label">Coupon</p>
                <input type="text" name="coupon" id="coupon" class="form-control" placeholder="Coupon" />
            </div>
            <div class="form-group">
                <p class="form-label">Payment</p>
                <label class="paymentContainer">Cash On Delivery
                    <input type="radio" name="payment" value="cash on delivery" onclick="hideBkashInputField()">
                    <span class="checkmark"></span>
                </label>
                <label class="paymentContainer">Bkash
                    <input type="radio" name="payment" value="bkash" onclick="showBkashInputField()">
                    <span class="checkmark"></span>
                </label>
                <input type="text" name="bkashTransID" id="bkashTransID" class="form-control" placeholder="Transection ID" />

            </div>
            <div class="form-group">
                <p class="form-label">Total Cost</p>
                <input type="text" id="orderPrice" class="form-control" placeholder="Total Cost" required="" readonly />
                <p style="color: brown;">Pay: 01710519031(bKash-Personal/Send Money)</p>
            </div>
            <input type="text" name="restaurant_id" id="restaurant_id"  hidden required=""/>
            <input type="number" name="total_cost" id="total_cost" hidden  required=""/>

            <div class="form-group tm-d-flex">
                <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
                    Submit
                </button>
            </div>
        </form>
    </div>

</div>

<div id="disableModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close" id='close_disable_modal'>&times;</span>
            <div class="modal-head">
                <img src="website/img/logo.gif" alt="Logo" />
                <p style="text-align: center;">We are proceeding your order..!</h3>
            </div>
            <h3 style="text-align: center;">Sorry, this product is not available at this moment..!</h3>
            
    </div>

</div>


@endsection
