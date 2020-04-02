<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('layouts.header')
<body class="stretched">
<section id="page-title">
            <div class="container clearfix">
                <h1>Payment</h1>
                <ol class="breadcrumb">
                 <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange nomargin" style="color:white">Back</a>
                </ol>
            </div>
</section>
<section id="content">
    <div class="card divcenter noradius noborder" style="max-width: 500px;">
        <div class="card-body" style="padding: 40px;">
            <form id="redopayment" name="form" class="nobottommargin" action="{{url('pay')}}" method="post">
                {{csrf_field()}}
                <h4>Pay for the Policy</h4>
                <div class="form-group">
                    <input type="text" class="form-control" name="policy_number" id="policy_number" placeholder="Policy number" required aria-required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="premium" id="premium" placeholder="Premium amount" required aria-required="true">
                </div>
                <div class="center">
                    <button style="margine-right:2%" class="button button-3d button-alpha-blue" type="submit">Submit</button>
                    <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange">Back</a>
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
        
        $("#redopayment").validate({
            rules: {
                policy_number : {
                    required: true,
                },
                premium : {
                    required: true,
                },
            },
            messages : {
                policy_number: {
                    required: "Please enter policy number"
                },
                premium: {
                    required: "Please enter premium amount"
                },
            },
            submitHandler: function(){ 
                const policyNumber = $('#policy_number').val();
                const premium = $('#premium').val();
                $.ajax({
                    headers: { "Access-Control-Allow-Origin": "*" },
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
                        console.log(response);
                      /*   $('.loader').css("display", "none");
                        $('#content').css("display", "none");
                        $('#payment_form_Response').html(response.message); */
                       // $("form[name='ccf']").submit();
                    },
                    error:function(error){
                       
                        $('.loader').css("display", "none");
                    }
                });
            }
        });
       

    });
</script>
</body>
</html>