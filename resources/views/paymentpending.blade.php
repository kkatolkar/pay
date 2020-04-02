<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('layouts.header')
<body class="stretched">
<section id="page-title">
            <div class="container clearfix">
                <h1>Payment status awaited</h1>
                <ol class="breadcrumb">
                 <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange nomargin" style="color:white">Back</a>
                </ol>
            </div>
</section>
<section id="content" style="margin-bottom: 0px;">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="col_full">
                <div class="heading-block center nobottomborder">
                    <h2>It looks like the payment confirmation from bank is taking a bit more time, Please be patient. Please note your transaction id {{ app('request')->input('p2') }}. Please use it for future reference.</h2>
                    <span></span>
                </div>
            </div>
    </div>
</section>
@include('layouts.footer')
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
</body>
 
