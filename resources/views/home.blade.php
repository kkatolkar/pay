<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('layouts.header')
<style>
    .loader{
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background:url({{asset('images/loading.gif')}}) no-repeat center center rgba(0,0,0,0.25)
    }

</style>
<body class="stretched no-transition">
<section id="page-title">
            <div class="container clearfix">
                <h1>Payment</h1>
                <ol class="breadcrumb">
                 <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange nomargin" style="color:white">Back</a>
                </ol>
            </div>
</section>
<div class="loader"></div>
<section id="content">

    <div class="card divcenter noradius noborder" style="max-width: 500px;">
        <p>Pay for your insurance policy with the click of a button. Please use the form below to begin making your payment for your policy to Alpha Direct Insurance Company. If you don't know your policy number, please enter your FULL NAME in the policy number field.</p>
        <div class="card-body" style="padding: 40px;">
            <form id="redopayment" name="form" class="nobottommargin" action="{{url('pay')}}" method="post">
                {{csrf_field()}}
                <h4>Policy Payment Screen</h4>
                <div class="form-group">
                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full name" required aria-required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="cellphone" id="cellphone" placeholder="Cell phone" required aria-required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="policy_number" id="policy_number" placeholder="Policy number" required aria-required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="premium" id="premium" placeholder="Premium amount" required aria-required="true">
                </div>
                <div class="center">
                    <button style="margine-right:2%" class="button button-3d button-alpha-blue" type="submit">Submit</button>
                    <button type="reset" class="button button-center button-3d button-alpha-orange">Reset</button>
                </div>
            </form>
        </div> 
    </div>
</section>
<section id="payment_form">
    <div id="payment_form_Response"></div>
</section>
@include('layouts.footer')
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
<script>
    $(document).ready(function() {
        $('.loader').css("display", "none");
        $("#redopayment").validate({
            rules: {
                full_name : {
                    required: true,
                    lettersonly: true,
                    maxlength: 50
                },
                cellphone : {
                    required: true,
                    maxlength: 8,
                    digits: true,
                },
                policy_number : {
                    required: true,
                    maxlength: 25,
                    alphanumeric: true,
                },
                premium : {
                    required: true,
                    maxlength: 15,
                },
            },
            messages : {
                policy_number: {
                    required: "Please enter policy number",
                    alphanumeric : "Please enter correct policy number"

                },
                premium: {
                    required: "Please enter premium amount"
                },
                full_name :{
                    required : "Please enter Full name"
                },
                cellphone : {
                    required : "Please enter your cellphone number without std code",
                    maxlength: "Please enter your 8 digit cellphone number",
                    digits: "Please enter your 8 digit cellphone number",
                }
            },
            submitHandler: function(){ 
                const policyNumber = $('#policy_number').val();
                const premium = $('#premium').val();
                $.ajax({
                    //headers: { "Access-Control-Allow-Origin": "*" },
                    type: 'GET',
                    beforeSend: function() {
                        $('.loader').css("display","block");
                    },
                    jsonpCallback: 'callback',
                    url: "{{env('PAY_URL')}}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        policyNumber : policyNumber,
                        premium : premium,
                    },
                    dataType: 'jsonp',
                    success: function (response) {
                        
                        $('.loader').css("display", "none");
                        $('#content').css("display", "none");
                        $('#payment_form_Response').html(response.message); 
                        $("form[name='ccf']").submit();
                    },
                    error:function(error){
                       
                        $('.loader').css("display", "none");
                    }
                });
            }
        });
        jQuery.validator.addMethod("lettersonly", function(value, element) { 
             return this.optional(element) || /^[a-z\s]+$/i.test(value);
            }, "Please enter only letters"); 

    });
</script>
</body>
</html>