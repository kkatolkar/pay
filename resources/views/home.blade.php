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
    <?php
    $is_paymentProcess = null;
    if (isset($_REQUEST['id'])) {
        $is_paymentProcess = $_REQUEST['id'];
    }
    ?>
    <div class="card divcenter noradius noborder" style="max-width: 500px;">
        <p>Pay for your insurance policy with the click of a button. Please use the form below to begin making your payment for your policy to Alpha Direct Insurance Company. If you don't know your policy number, please skip it and  enter your FULL NAME in the full name field.</p>
        <div class="card-body" style="padding: 40px;">
            <form id="redopayment" name="form" class="nobottommargin" action="{{url('pay')}}" method="post">
                {{csrf_field()}}
                <h4>Policy Payment Screen</h4>
                <div class="form-group">
                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full name" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="cellphone" id="cellphone" placeholder="Cell phone" required aria-required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="policy_number" id="policy_number" placeholder="Policy number">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="premium" id="premium" placeholder="Premium amount" required aria-required="true">
                </div>
                <div class="center">
                    <button type="reset" class="button button-center button-3d button-alpha-orange">Reset</button>
                    <button style="margine-right:2%" class="button button-3d button-alpha-blue" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <p>Please email <a href="mailto:accounts@alphadirect.co.bw">accounts@alphadirect.co.bw</a> if you have any questions.</>
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

        $(document).bind("contextmenu",function(e){
            return false;     //disabled mouse right click
        });
        $('.loader').css("display", "none");
        $("#redopayment").validate({
            rules: {
                full_name : {
                    required: function(element){
                        return $("#policy_number").val()=="";
                    },
                    lettersonly: true,
                    maxlength: 50
                },
                cellphone : {
                    required: true,
                    maxlength: 8,
                    digits: true,
                },
                policy_number : {
                    required: function(element){
                        return $("#full_name").val()=="";
                    },
                    maxlength: 25,
                    alphanumeric: true,
                },
                premium : {
                    required: true,
                    number: true,
                    maxlength: 15,
                },
            },
            messages : {
                policy_number: {
                    required: "Please enter policy number",
                    alphanumeric : "Please enter correct policy number"

                },
                premium: {
                    required: "Please enter premium amount",
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
                const cellphone = $('#cellphone').val();
                const full_name = $('#full_name').val();
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
                        cellphone : cellphone,
                        full_name : full_name,
                    },
                    dataType: 'jsonp',
                    success: function (response) {

                        // $('.loader').css("display", "none");
                        //$('#content').css("display", "none");
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


        var is_paymentProcess = '{{$is_paymentProcess}}';
        var url = "{{env('POST_URL')}}";
        if(is_paymentProcess != null){
            $.ajax({
                beforeSend: function() {
                    $('.loader').css("display","block");
                },
                jsonpCallback: 'callback',
                url:url,
                type:'GET',
                data:{id:is_paymentProcess,_token:'{{csrf_token()}}'},
                success:function(e){
                    if(e.count > 0){
                        $('#full_name').val(e.data.firstName+' '+ e.lastName).attr('disabled',true);
                        $('#cellphone').val(e.data.cellphone).attr('disabled',true);
                        $('#policy_number').val(e.data.policyNumber).attr('disabled',true);
                        $('#premium').val(e.data.balance).attr('disabled',true);
                    }else {
                        $('#full_name').val('').attr('disabled',false);
                        $('#cellphone').val('').attr('disabled',false);
                        $('#policy_number').val('').attr('disabled',false);
                        $('#premium').val('').attr('disabled',false);
                    }
                    $('.loader').css("display", "none");
                },
                error:function(error){

                    $('.loader').css("display", "none");
                }

            });
        }

    });
</script>
</body>
</html>