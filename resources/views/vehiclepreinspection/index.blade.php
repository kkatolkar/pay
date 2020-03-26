@extends('layouts.app')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/components/bs-filestyle.css') }}" />
<body class="stretched">
<section id="page-title">
            <div class="container clearfix">
                <h1>Pre Inspection</h1>
                <ol class="breadcrumb">
                 <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange nomargin" style="color:white">Back</a>
                </ol>
            </div>
        </section>
        <section id="content">
            <div class="card divcenter noradius noborder" style="max-width: 500px;">
                <div class="card-body" style="padding: 40px;">
                    <form id="form" name="form" class="nobottommargin" action="#" method="post">
                        <h4>Enter vehicle plate information</h4>
    
                        <div class="form-group">
                            <label>Front:</label>
                            <input type="file" id="image_front" name="image_front" class="file-loading required" data-show-preview="false" />
                        </div>
                        <div class="form-group">
                            <label>Back:</label>
                            <input type="file" id="image_back" name="image_back" class="file-loading required" data-show-preview="false" />
                        </div> 
                        
                        <div class="form-group">
                            <label>Right:</label>
                            <input type="file" id="image_right" name="image_right" class="file-loading required" data-show-preview="false" />
                        </div>
                        <div class="form-group">
                            <label>Left:</label>
                            <input type="file" id="image_left" name="image_left" class="file-loading required" data-show-preview="false" />
                        </div> 

                        <br>
                        <div class="form-group">
                        <label>Vehicle Plate</label>
                            <input type="text" class="form-control" name="vehicle-plate" id="vehicle-plate" placeholder="Vehicle Plate" required aria-required="true">
                        </div>
                        <br>

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
<script src="{{ asset('js/components/bs-filestyle.js') }}"></script>
<script>
    jQuery(document).ready( function(){
        $("#form").validate({
            
        });
        $("#image_front").fileinput({
            required: true,
            browseClass: "btn btn-secondary",
            browseIcon: "",
            removeClass: "btn btn-danger",
            removeLabel: "",
            removeIcon: "<i class='icon-trash-alt1'></i>",
            showUpload: false
        });

        $("#image_back").fileinput({
            required: true,
            browseClass: "btn btn-secondary",
            browseIcon: "",
            removeClass: "btn btn-danger",
            removeLabel: "",
            removeIcon: "<i class='icon-trash-alt1'></i>",
            showUpload: false
        });
        $("#image_right").fileinput({
            required: true,
            browseClass: "btn btn-secondary",
            browseIcon: "",
            removeClass: "btn btn-danger",
            removeLabel: "",
            removeIcon: "<i class='icon-trash-alt1'></i>",
            showUpload: false
        });

        $("#image_left").fileinput({
            required: true,
            browseClass: "btn btn-secondary",
            browseIcon: "",
            removeClass: "btn btn-danger",
            removeLabel: "",
            removeIcon: "<i class='icon-trash-alt1'></i>",
            showUpload: false
        });
    })
</script>
</body>
@endsection
