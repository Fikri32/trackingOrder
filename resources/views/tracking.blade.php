@extends('layouts.master')

@section('content')
<div class="container">


<br>
<br>
<br>
<br>
<br>
<section class="page-title blog-page" style="background-image: url({{asset('assets/images/background/page-title-9.jpg')}}">
    <div class="container">
        <div class="content-box">
            <h1>Order Tracking</h1>
        </div>
    </div>
</section>
<!-- page-title-two end -->


<!-- blog-classic -->
<section class="blog-single sidebar-page-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side centred">
                <div class="blog-single-content  ">
                    <div class="comments-form-area ">
                        <h2 class="group-title">TRACK YOUR ORDER</h2>
                        <div class="text"> Now you can track your order easily</div>
                        <form action="{{route('tracking.index')}}" method="GET" class="comment-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="po" placeholder="Your PO Number" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group message-btn">
                                    <button type="submit">Track Your Order</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            {{-- {{var_dump($tracking)}} --}}
            @if ($tracking)
                
            
            <div class="row col-lg-12 col-md-12 col-sm-12">
                <figure class="image-box">
                    <img src="{{asset('assets/images/Screenshot_1.png')}}"  alt="">
                </figure>
                <div class="col-lg-3">
                    <table class="table table-bordered">
                        <tr>
                            <td>PO Number : {{$tracking->no_po}} </td>
                        </tr>
                        <tr>
                            <td>Customer Name :  </td>
                        </tr>
                        <tr>
                            <td>Order Date : </td>
                        </tr>
                        <tr>
                            <td>Order Status : </td>
                        </tr>
                        <tr>
                            <td>Order Quantity : </td>
                        </tr>
                        <tr>
                            <td>Delivery Date : </td>
                        </tr>
                        
                    </table>    
                </div>
            </div>
            @endif
            
        </div>
    </div>
</section>
<!-- blog-classic end -->
</div>
@endsection