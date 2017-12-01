<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'TalentGuru') }} - Privacy Policy</title>
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-flash.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/bar-ui/css/bar-ui.css')}}" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    </head>
    <body>
        <div id="app">
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ url('/') }}"><img src="{{asset('images/logo.png')}}"></a>
                        </div>
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-3">
                            @if (Auth::guard('web_artist')->guest())
                            <a href="{{ url('/artist_register') }}" class="account-management"><i class="glyphicon glyphicon-pencil"></i>Upload demo</a>
                            <a href="{{ url('/artist_login') }}" class="account-management"><i class="glyphicon glyphicon-log-in"></i>Login</a>
                            @else
                            <a href="{{ url('/artist_home') }}" class="account-management pull-right"><i class="glyphicon glyphicon-user"></i>Your Profile</a>
                            @endif
                        </div>
                    </div>
                </div>
            </header>
            <section class="content">
                <div class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li>
                                <a href="{{ url('/') }}#tab_default_1"  class="text-uppercase">
                                    Home</a>
                            </li>

                            <li>
                                <a href="{{ url('/') }}#tab_default_4"  class="text-uppercase">
                                    FAQ</a>
                            </li>                            
                            <li>
                                <a href="{{ url('/') }}#tab_default_5"  class="text-uppercase">
                                    Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <section class="spaced2">

                                <h3 class="text-center" style="margin-top: 0">Privacy policy</h3>

                                <p>This privacy policy ("Policy") describes how Website Operator ("Website Operator", "we", "us" or "our") collects, protects and uses the personally identifiable information ("Personal Information") you ("User", "you" or "your") may provide on the <a target="_blank" rel="nofollow" href="https://talentguru.africa">https://talentguru.africa</a> website and any of its products or services (collectively, "Website" or "Services"). It also describes the choices available to you regarding our use of your personal information and how you can access and update this information. This Policy does not apply to the practices of companies that we do not own or control, or to individuals that we do not employ or manage.</p>

                                <h4>Collection of personal information</h4>

                                <p>We receive and store any information you knowingly provide to us when you create an account, publish content, fill any online forms on the Website.  When required this information may include your email address, name, phone number, address,  or other Personal Information. You can choose not to provide us with certain information, but then you may not be able to take advantage of some of the Website's features.</p>

                                <h4>Collection of non-personal information</h4>

                                <p>When you visit the Website our servers automatically record information that your browser sends. This data may include information such as your device's IP address, browser type and version, operating system type and version, language preferences or the webpage you were visiting before you came to our Website, pages of our Website that you visit, the time spent on those pages, information you search for on our Website, access times and dates, and other statistics.</p>

                                <h4>Managing personal information</h4>

                                <p>You are able to access, add to, update and delete certain Personal Information about you. The information you can view, update, and delete may change as the Website or Services change. When you update information, however, we may maintain a copy of the unrevised information in our records. We will retain your information for as long as your account is active or as needed to provide you Services. Some information may remain in our private records after your deletion of such information from your account. We will retain and use your information as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements. We may use any aggregated data derived from or incorporating your Personal Information after you update or delete it, but not in a manner that would identify you personally.</p>

                                <h4>Use of collected information</h4>

                                <p>Any of the information we collect from you may be used to  personalize your experience; improve our Website; improve customer service and respond to queries and emails of our customers; send notification emails such as password reminders, updates, etc;  run and operate our Website and Services. Non-personal information collected is used only to identify potential cases of abuse and establish statistical information regarding Website usage. This statistical information is not otherwise aggregated in such a way that would identify any particular user of the system.</p>

                                <h4>Children</h4>

                                <p>We do not knowingly collect any personal information from children under the age of 13. If you are under the age of 13, please do not submit any personal information through our Website or Service. We encourage parents and legal guardians to monitor their children's Internet usage and to help enforce this Policy by instructing their children never to provide personal information through our Website or Service without their permission. If you have reason to believe that a child under the age of 13 has provided personal information to us through our Website or Service, please contact us.</p>

                                <h4>Newsletters</h4>

                                <p>We offer electronic newsletters to which you may voluntarily subscribe at any time. You may choose to stop receiving our newsletter or marketing emails by following the unsubscribe instructions included in these emails or by contacting us. However you will continue to receive essential transactional emails.</p>

                                <h4>Cookies</h4>

                                <p>The Website uses "cookies" to help personalize your online experience. A cookie is a text file that is placed on your hard disk by a web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you. We may use cookies to collect, store, and track information for statistical purposes to operate our Website and Services. You have the ability to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the features of the Website and Services.</p>

                                <h4>Advertisement</h4>

                                <p>We may display online advertisements and we may share aggregated and non-identifying information about our customers that we collect through the registration process or through online surveys and promotions with certain advertisers. We do not share personally identifiable information about individual customers with advertisers. In some instances, we may use this aggregated and non-identifying information to deliver tailored advertisements to the intended audience.</p>

                                <h4>Information security</h4>

                                <p>We secure information you provide on computer servers in a controlled, secure environment, protected from unauthorized access, use, or disclosure. We maintain reasonable administrative, technical, and physical safeguards in an effort to protect against unauthorized access, use, modification, and disclosure of personal information in its control and custody. However, no data transmission over the Internet or wireless network can be guaranteed. Therefore, while we strive to protect your personal information, you acknowledge that (i) there are security and privacy limitations of the Internet which are beyond our control; (ii) the security, integrity, and privacy of any and all information and data exchanged between you and our Website cannot be guaranteed; and (iii) any such information and data may be viewed or tampered with in transit by a third-party, despite best efforts.</p>

                                <h4>Data breach</h4>

                                <p>In the event we become aware that the security of the Website has been compromised or users Personal Information has been disclosed to unrelated third parties as a result of external activity, including, but not limited to, security attacks or fraud, we reserve the right to take reasonably appropriate measures, including, but not limited to, investigation and reporting, as well as notification to and cooperation with law enforcement authorities. In the event of a data breach, we will make reasonable efforts to notify affected individuals if we believe that there is a reasonable risk of harm to the user as a result of the breach or if notice is otherwise required by law. When we do we will post a notice on the Website, send you an email, get in touch with you over the phone.</p>

                                <h4>Legal disclosure</h4>

                                <p>We will disclose any information we collect, use or receive if required or permitted by law, such as to comply with a subpoena, or similar legal process, and when we believe in good faith that disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, or respond to a government request. In the event we go through a business transition, such as a merger or acquisition by another company, or sale of all or a portion of its assets, your user account and personal data will likely be among the assets transferred.</p>

                                <h4>Changes and amendments</h4>

                                <p>We reserve the right to modify this privacy policy relating to the Website or Services at any time, effective upon posting of an updated version of this Policy on the Website. When we do we will  revise the updated date at the bottom of this page. Continued use of the Website after any such changes shall constitute your consent to such changes. Policy was created with <a style="color:#222" target="_blank" title="Generate privacy policy" href="https://www.websitepolicies.com/privacy-policy-generator">WebsitePolicies.com</a></p>

                                <h4>Acceptance of this policy</h4>

                                <p>You acknowledge that you have read this Policy and agree to all its terms and conditions. By using the Website or its Services you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to use or access the Website and its Services.</p>

                                <h4>Contacting us</h4>

                                <p>If you have any questions about this Policy, please contact us.</p>

                                <p>This document was last updated on November 15, 2017</p>                                       

                            </section>
                        </div>
                        </section>
                    </div>
                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="{{ url('/') }}"><img class="img-responsive" src="{{asset('images/footer-logo.png')}}"></a>
                                </div>
                                <!--<div class="col-md-3">
                                    <h4>Additional Services</h4>
                                    <ul class="footer-menu">
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                        <li><a href="#">Link</a></li>
                                    </ul>
                                </div>-->
                                <div class="col-md-3">
                                    <h4>Company Information</h4>
                                    <ul class="footer-menu">
                                        <!--<li><a href="{{ url('about') }}">About {{ config('app.name', 'Talent Guru') }}</a></li>-->
                                        <li><a href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                                        <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>                            
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h4>Social Media</h4>
                                    <ul class="footer-menu">
                                        <li><a href="https://www.facebook.com/Talentguruafrica-1780916165535105/" target="new"><i class="fa fa-facebook-square"></i></a> <a href="https://www.instagram.com/talentguruafrica/" target="new"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-right"><small>(C) 2017 Voice Cast Audio Limited. All rights reserved.&nbsp; </small></p>
                                </div>
                            </div>
                        </div>
                    </footer>       
                    <script src="{{asset('js/app.js')}}"></script>
                    <script type="text/javascript">
            @if (Session::has('success'))
            swal({title: "Success!",
                text: "{{Session::get('success')}}",
                type: "success",
                timer: 3000,
                confirmButtonColor: "#43ABDB"
            }).catch(swal.noop);
            @endif
                    @if (Session::has('error'))
            swal({title: "Error!",
                text: "{{Session::get('success')}}",
                type: "error",
                timer: 3000,
                confirmButtonColor: "#43ABDB"
            }).catch(swal.noop);
            @endif
                    </script>  
                    <!-- Global site tag (gtag.js) - Google Analytics -->
                    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110233202-1"></script>
                    <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-110233202-1');
                    </script>

                    </body>
                    </html>
