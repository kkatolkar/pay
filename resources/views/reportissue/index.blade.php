@extends('layouts.app')
@section('content')
    <body class="stretched">
    <section id="page-title">
        <div class="container clearfix">
            <h1>Report Issue</h1>
            <ol class="breadcrumb">

              <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange nomargin" style="color:white">Back</a>
            </ol>
        </div>
    </section>
    <section id="content">
        <div class="content-wrap nopadding">
            <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0;"></div>
            <div class="section nobg full-screen nopadding nomargin">
                <div class="container-fluid vertical-middle divcenter clearfix">
                    <div class="card divcenter noradius noborder" style="max-width: 400px;">
                        <div class="card-header">
                            <h4 class="mb-0">Report Issue</h4>
                        </div>
                        <div class="card-body" style="background-color: #f9f9f9;">
                            <form id="contact" name="form" class="nobottommargin" action="{{url('savereportissue')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                </div><br>
                                <div class="form-group">
                                    <label>Description:</label>
                                    <input type="text" class="form-control" name="desc" id="desc" placeholder="Description">
                                </div><br>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
                                </div><br>

                                <div class="center">

                                    <button class="button button-3d button-black nomargin" id="submit"  name="submit" type="submit" value="SUBMIT">Submit</button>

                                    <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange">Back</a>
                                </div>
                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#contact").validate({
            rules: {
                title : {
                    required: true,
                },
                desc: {
                    required: true,

                },
                email: {
                    required: true,
                    email: true
                },

            },
            messages : {
                title: {
                    required: "Please enter title"
                },
                desc: {
                    required: "Please enter discription",

                },
                email: {
                    email: "The email should be in the format: abc@domain.com"
                },

            }
        });
    });
</script>
@endsection
