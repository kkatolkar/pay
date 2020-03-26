<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>AlphaDirect</title>
    <style>
        #header.sticky-header #header-wrap {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #fff0 !important;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, .1) */
       }
        .fbox-effect .fbox-icon i:hover,
        .fbox-effect:hover .fbox-icon i {
            background-image: linear-gradient(to bottom right, red, yellow);
            color: #fff;
        }
        .dark .heading-block:not(.not-dark) h1,
        .dark .heading-block:not(.not-dark) h2,
        .dark .heading-block:not(.not-dark) h3,
        .dark .heading-block:not(.not-dark) h4,
        .dark .emphasis-title:not(.not-dark) h1,
        .dark .emphasis-title:not(.not-dark) h2 {
            color: #000000;
        }
    </style>
</head>

<body class="stretched">

    <div id="wrapper" class="clearfix">
        <header id="header" class="transparent-header ">
            <div id="header-wrap">
                <div class="container clearfix">
                    <div id="primary-menu-trigger" style="display: none;"><i class="icon-reorder"></i></div>

                    <div id="logo" style="
                    width: 100%;">
                        <a href="{{ url('/') }}" class="standard-logo" data-dark-logo="images/alpha_l_2.png"><img src="images/alphadirect_logo.png" style="margin-left: auto;margin-right:auto;display: block;" alt="Canvas Logo"></a>
                        <a href="{{url('/')}}" class="retina-logo" data-dark-logo="images/alpha_l_2.png"><img src="images/alphadirect_logo.png" height="-4%" alt="Canvas Logo"></a>
                    </div>

                    <nav id="primary-menu">
                    </nav>
                </div>
            </div>
        </header>
        <section id="slider" class="slider-element full-screen slider-parallax slider-parallax-visible" style="background: url({{asset('images/clouds2.png')}}) 0% 0% / cover no-repeat; height: 600px;" data-height-xl="600" data-height-lg="500" data-height-md="400" data-height-sm="300"
            data-height-xs="350">
            <div class="slider-parallax-inner" style="height: 600px; transform: translateY(-146px);">
                <div class="container clearfix">
                    <div class="vertical-middle dark center" style="position: absolute; top: 50%; width: 100%; padding-top: 0px; padding-bottom: 0px; margin-top: -81px; opacity: 0.179833;">
                        <div class="heading-block nobottommargin center">
                            <h1>Activate your Tsosologo</h1>
                            <h1>Instant insurance Product Now!</h1>
                            <h3 style="font-size:22px;text-color:black;">It takes less than 5 minutes</h3>
                            <h3 style="text-color:black;">
                                <span class="text-rotater nocolor" data-separator="|" data-rotate="flipInX" data-speed="3500">
<h3 class="t-rotate morphext"><span class="animated flipInX">car insurance|Household contents insurance|Business insurance|Bus insurance|Truck insurance |Workers insurance</span>
                            </h3>
                            </span>
                            </h3>
                        </div>
                    </div>
                </div>
        </section>
        <section id="content" style="background-image:url(images/clouds2.png)">
            <div class="content-wrap" style="padding: 28px 0">
                <div class="container clearfix">
                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="{{route('activate')}}"><i class="i-alt noborder icon-shop" title="Activate Tsosologo"></i></a>
                            </div>
                            <h3>Activate Tsosologo <i class="icon-line2-info" data-toggle="modal" data-target="#tsosologo"></i>
                            </h3>
                        </div>
                        <div class="modal fade" id="tsosologo" tabindex="-1" role="dialog" aria-labelledby="tsosologoLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="tsosologoLabel">Activate Tsosologo</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Activate</h4>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="{{route('redopayment')}}"><i class="i-alt noborder icon-repeat" title="Redo Payment"></i></a>
                            </div>
                            <h3>Redo Payment <i class="icon-line2-info" data-toggle="modal" data-target="#redo"></i></h3>
                        </div>
                        <div class="modal fade" id="redo" tabindex="-1" role="dialog" aria-labelledby="redoLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="redoLabel">Redo Payment</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Pay</h4>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_fourth nobottommargin ">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="{{route('reportissue')}}"><i class="i-alt noborder icon-ticket-alt" title="Report Issue"></i></a>
                            </div>
                            <h3>Report Issue <i class="icon-line2-info" data-toggle="modal" data-target="#report"></i></h3>

                        </div>
                        <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="reportLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="reportLabel">Report issue</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>issue</h4>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_fourth nobottommargin col_last">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="{{route('getaquote')}}"><i class="i-alt noborder icon-users2" title="Create Lead"></i></a>
                            </div>
                            <h3>Get a callback <i class="icon-line2-info" data-toggle="modal" data-target="#lead"></i></h3>
                        </div>
                        <div class="modal fade" id="lead" tabindex="-1" role="dialog" aria-labelledby="leadLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="leadLabel">Create Lead</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Lead</h4>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="line bottom "></div>
                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="{{route('customerkyc')}}"><i class="i-alt noborder icon-archive1" title="Customer KYC"></i></a>
                            </div>
                            <h3>Customer KYC <i class="icon-line2-info" data-toggle="modal" data-target="#kyc"></i></h3>
                        </div>
                        <div class="modal fade" id="kyc" tabindex="-1" role="dialog" aria-labelledby="kycLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="kycLabel">Customer KYC</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>KYC</h4>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="{{route('vehiclepreinspection')}}"><i class="i-alt noborder icon-folder-check" title="Vehicle Preinspection"></i></a>
                            </div>
                            <h3>Vehicle Pre-inspection <i class="icon-line2-info" data-toggle="modal" data-target="#vehicle"></i></h3>

                        </div>
                        <div class="modal fade" id="vehicle" tabindex="-1" role="dialog" aria-labelledby="vehicleLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="vehicleLabel">Vehicle Pre-inspection</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Inspection</h4>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="{{route('editpolicy')}}"><i class="i-alt noborder icon-edit1" title="Vehicle Preinspection"></i></a>
                            </div>
                            <h3>Edit your policy <i class="icon-line2-info" data-toggle="modal" data-target="#policyedit"></i></h3>

                        </div>
                        <div class="modal fade" id="policyedit" tabindex="-1" role="dialog" aria-labelledby="policyeditLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="policyedit">Edit your Policy</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Edit</h4>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_fourth nobottommargin col_last">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <a href="{{route('contactus')}}"><i class="i-alt noborder icon-line-mail" title="Vehicle Preinspection"></i></a>
                            </div>
                            <h3>Contact Us <i class="icon-line2-info" data-toggle="modal" data-target="#contact"></i></h3>
                        </div>
                        <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="contactLabel">Conatct Us</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Details</h4>
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


        </section>

        <footer id="footer" class="dark" style="background: url('images/footer-bg.jpg') repeat fixed; background-size: 100% 100%;">
            <div id="copyrights">
                <div class="container clearfix">
                    <div class="col_full nobottommargin center" style="color:white">
                        <div class="copyrights-menu copyright-links clearfix">
                        </div>
                        Copyright 2020. Alpha Direct Insurance Company (Pty) Ltd. All Rights Reserved. Alpha Direct Insurance Company (Proprietary) Limited is an Authorised Financial Services Provider | NBFIRA License No. 2/9/179</div>
                </div>
            </div>
            </div>
        </footer>
        </div>

        <div id="gotoTop" class="icon-angle-up"></div>

        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/functions.js')}}"></script>

</body>

</html>