@section('content')
<body class="stretched">
<section id="page-title">
            <div class="container clearfix">
                <h1>Thank You</h1>
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
                    <h2>Thank You for your payment.</h2>
                    <span>Please note that your transaction id is {{ app('request')->input('p2') }}. Use it for future references. </span>
                </div>
            </div>
    </div>
</section>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
</body>
@endsection
