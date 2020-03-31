@extends('layouts.app')
@section('content')
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
            <form id="redopayment" name="form" class="nobottommargin" action="" method="post">
                <h4>Pay for the Policy</h4>
                <div class="form-group">
                    <input type="text" class="form-control" name="policy_number" id="policy_number" placeholder="Policy number" required aria-required="true">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="premium" id="premium" placeholder="Premium amount" required aria-required="true">
                </div>
                <div class="center">
                    <button style="margine-right:2%" class="button button-3d button-alpha-blue" id="submit"  name="submit" type="submit" value="SUBMIT">Submit</button>
                    <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange">Back</a>
                </div>
            </form>
        </div>
        
    </div>
</section>
<section id="payment_form">
    <div id="payment_form_Response"></div>
</section>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"></script>
<script>
    $(document).ready(function() {
        
        $("#redopayment").validate({
            submitHandler: function(form) {
            const policyNumber = $('#policy_number').val();
            const premium = $('#premium').val();
            $.ajax({

                type: 'post',
                beforeSend: function() {
                    $('.loader').css("display","block");
                },
                url: "{{env('PAY_URL')}}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    policyNumber : policyNumber,
                    premium : premium,
                },
                cors: true ,
                secure: true,
          headers: {
            'Access-Control-Allow-Origin': '*',
          },
                dataType: 'html',
                success: function (response) {
                    console.log(response);
                        $('.loader').css("display", "none");
                        $('#content').css("display", "none");
                        $('#payment_form_Response').html(response);
                        $("form[name='ccf']").submit();
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
@endsection
