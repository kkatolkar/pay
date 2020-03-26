@extends('layouts.app')
@section('content')
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/components/bs-filestyle.css') }}" />
<body class="stretched">
<section id="page-title">
            <div class="container clearfix">
                <h1>Customer KYC</h1>
                 <ol class="breadcrumb">
                  <a href="{{url('/')}}" class="button button-center button-3d button-alpha-orange nomargin" style="color:white">Back</a>
                </ol>
            </div>
        </section>

        <section id="content">
            <div class="card divcenter noradius noborder" style="max-width: 600px;">
                <div class="card-body" style="padding: 40px;">
                    <form id="form" name="form" class="nobottommargin" action="#" method="post">
                        <h4>Enter customer details</h4>

                        <div class="form-group">
                            <label>Omang:</label>
                            <input type="file" id="omang_front" name="omang_front" class="file-loading required" data-show-preview="false" />
                        </div>
                        <div class="form-group">
                            <label>Omang Back:</label>
                            <input type="file" id="omang_back" name="omang_back" class="file-loading required" data-show-preview="false" />
                        </div>
                        <div class="form-group">
                            <label>Passport:</label>
                            <input type="file" id="passport" name="passport" class="file-loading required" data-show-preview="false" />
                        </div>
                        <div class="form-group">
                            <label>Proof of residence:</label>
                            <input type="file" id="residence_proof" name="residence_proof" class="file-loading required" data-show-preview="false" />
                        </div>
                        <div class="form-group">
                            <label>PassProof of income:</label>
                            <input type="file" id="income_proof" name="income_proof" class="file-loading required" data-show-preview="false" />
                        </div>
                        <div class="form-group">
                            <label>Drivers Licence:</label>
                            <input type="file" id="drivers_licence" name="drivers_licence" class="file-loading required" data-show-preview="false" />
                        </div>
                        
                        <br>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label> ID Type</label>
                                <select class="form-control required" name="id-type" id="id-type">
                                    <option value="">-- Select One --</option>
                                    <option value="Omang">Omang</option>
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Freelance">Freelance</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                        <label>Policy Number</label>
                            <input type="text" class="form-control" name="policy-no" id="policy-no" placeholder="Policy Number" required aria-required="true">
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
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>       
<script src="{{ asset('js/components/bs-filestyle.js') }}"></script>
<script>
    jQuery(document).ready( function(){
        $("#form").validate({
            
        });
        $("#omang_front").fileinput({
            required: true,
            browseClass: "btn btn-secondary",
            browseIcon: "",
            removeClass: "btn btn-danger",
            removeLabel: "",
            removeIcon: "<i class='icon-trash-alt1'></i>",
            showUpload: false
        });

        $("#omang_back").fileinput({
            required: true,
            browseClass: "btn btn-secondary",
            browseIcon: "",
            removeClass: "btn btn-danger",
            removeLabel: "",
            removeIcon: "<i class='icon-trash-alt1'></i>",
            showUpload: false
        });
        $("#passport").fileinput({
            required: true,
            browseClass: "btn btn-secondary",
            browseIcon: "",
            removeClass: "btn btn-danger",
            removeLabel: "",
            removeIcon: "<i class='icon-trash-alt1'></i>",
            showUpload: false
        });

        $("#residence_proof").fileinput({
            required: true,
            browseClass: "btn btn-secondary",
            browseIcon: "",
            removeClass: "btn btn-danger",
            removeLabel: "",
            removeIcon: "<i class='icon-trash-alt1'></i>",
            showUpload: false
        });
        $("#drivers_licence").fileinput({
            required: true,
            browseClass: "btn btn-secondary",
            browseIcon: "",
            removeClass: "btn btn-danger",
            removeLabel: "",
            removeIcon: "<i class='icon-trash-alt1'></i>",
            showUpload: false
        });
        $("#income_proof").fileinput({
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
