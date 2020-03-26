@extends('layouts.app')
@section('content')
<body class="stretched">
<section id="page-title">
            <div class="container clearfix">
                <h1>Edit Policy  </h1>
                <ol class="breadcrumb">
                  <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange nomargin" style="color:white">Back</a>
                </ol>
            </div>
</section>
<section id="content">
    <div class="card divcenter noradius noborder" style="max-width: 500px;">
        <div class="card-body" style="padding: 40px;">
            <form id="form" name="form" class="nobottommargin" action="#" method="post">
                <h4>Edit Policy</h4>
                <div class="form-group">
                    <input type="text" class="form-control" name="vehicle-plate" id="vehicle-plate" placeholder="Vehicle Plate" required aria-required="true">
                </div>
                <div class="center">
                    <button style="margine-right:2%" class="button button-3d button-alpha-blue" id="submit"  name="submit" type="submit" value="SUBMIT">Submit</button>
                    <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange">Back</a>
                </div>
            </form>
        </div>
        
    </div>
</section>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script>
    $(document).ready(function() {
        $("#form").validate({
            rules: {
                vehicleplate : {
                    required: true,
                }
            },
            messages : {
                Vehicleplate: {
                    required: "Please enter vehicle plate"
                }
            }
        });
    });
</script>
</body>
@endsection
