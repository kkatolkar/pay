@extends('layouts.app')
@section('content')
<body class="stretched">
<section id="page-title">
            <div class="container clearfix">
                <h1>Contact us</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">contact</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Form</li>
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
                                    <h4 class="mb-0">Contact Us</h4>
                                </div>
                        <div class="card-body" style="background-color: #f9f9f9;">
                            <form id="contact" name="form" class="nobottommargin" action="{{url('savecontact')}}" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                <label>First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                <label>Last name</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                <label>Phone</label>
                                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Cellphone number">
                                </div>
                                <div class="form-group">
                                <label>Email</label>
                                    <input type="email" id="email" name="email" class="form-control required email" placeholder="Email Address">
                                </div>
                                <div class="center">
                                    <button style="margine-right:2%" class="button button-3d button-alpha-blue" id="submit"  name="submit" type="submit" value="SUBMIT">Submit</button>
                                    <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#contact").validate({
            rules: {
                firstname : {
                    required: true,
                },
                lastname: {
                    required: true,
                },
                contact: {
                    required:true,
                },
                email: {
                    required: true,
                    email: true
                },

            },
            messages : {
                firstname: {
                    required: "Firstname can not be blank",
                },
                lastname: {
                    required: "Please enter lastname",

                },
                contact: {
                  require: "Please enter conact number",
                },
                email: {
                    email: "The email should be in the format: abc@domain.com"
                },

            }
        });
    });
</script>
@endsection
