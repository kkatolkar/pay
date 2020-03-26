@extends('layouts.app')
@section('content')
<body class="stretched">
<section id="page-title">
            <div class="container clearfix">
                <h1>Get a Quote </h1>
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
                        <h4 class="mb-0">Get a Quote</h4>
                    </div>
                        <div class="card-body" style="background-color: #f9f9f9;">
                            <form id="form" name="form" class="nobottommargin" action="#" method="post">
                                <div class="form-group">
                                <label>First name</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="First name">
                                </div>
                                <div class="form-group">
                                <label>Last name</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="Last name">
                                </div>
                                <div class="form-group">
                                <label>Cellphone </label>
                                    <input type="text" class="form-control" name="cellphone" placeholder="Cellphone">
                                </div>
                                <div class="form-group">
                                <label>Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <p style="margine-bottom:2px !important;"><input type="checkbox"  name="terms"> Customer has purchased tsosologo</p>
                                <p><input type="checkbox" name="agree"> I accept to be <u>alphadirect</u> and their partners</p>
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
</div>
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#form").validate({
            rules: {
                firstname : {
                    required: true,
                },
                lastname: {
                    required: true,

                },
                contact: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },

            },
            messages : {
                firstname: {
                    required: "Please enter firstname"
                },
                lastname: {
                    required: "Please enter lastname",
                },

                contact: {
                    required: "Please enter contact no",
                },
                email: {
                    email: "The email should be in the format: abc@domain.com"
                },

            }
        });
    });
</script>
</body>
@endsection
