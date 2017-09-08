<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'VoiceCast') }} - Privacy Policy</title>
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
                            <a href="{{ url('/artist_register') }}" class="account-management"><i class="glyphicon glyphicon-pencil"></i>Sign up</a>
                            <a href="{{ url('/artist_login') }}" class="account-management"><i class="glyphicon glyphicon-log-in"></i>Login</a>
                            @else
                            <a href="{{ url('/artist_home') }}" class="account-management pull-right"><i class="glyphicon glyphicon-user"></i>Your Profile</a>
                            @endif
                        </div>
                    </div>
                </div>
            </header>
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="artist-content">
                                <div class="panel panel-success">               
                                    <div class="panel-body">

                                        <h1>Privacy Policy</h1>

                                        <p><small>Last updated: Sep 1, 2017</small></p>
                                        <p>By visiting and using the VoiceCast Inc. website (owned and operated by VoiceCast Inc.) ("<strong>VoiceCast Inc.</strong>", "<strong>we</strong>", "<strong>us</strong>" or "<strong>our</strong>") and located at the url <<a href="https://xxxxxxxxx.com/">xxxxxxxxx.com</a>> (the "<strong>Site</strong>"), you agree to accept the practices described in this privacy policy (the "<strong>Privacy Policy</strong>"). If you do not agree to the terms of this Privacy Policy, please do not use the Site. This Privacy Policy is part of, and is governed by, the terms and conditions set forth in the VoiceCast Inc. Terms of Use.</p>
                                        <p>VoiceCast Inc. reserves the right to modify this Privacy Policy at any time, so each time you use the Site, you should check the date of this Privacy Policy (which appears above) and review any changes that have been made since your last visit to the Site. Where appropriate or required by law, we shall affirmatively notify you of any changes to this Privacy Policy.</p>
                                        <p>We want to develop relationships with our customers based on respect and integrity. We are aware of the trust and confidence you demonstrate when you visit the Site and provide us with information. This Privacy Policy is posted to demonstrate our commitment to protecting your privacy online.</p>
                                        <ol>
                                            <li>
                                                <strong>Information Collection By VoiceCast Inc..</strong>
                                                <ol class="list-letter">
                                                    <li>
                                                        <strong>Information You Directly and Voluntarily Provide to Us: </strong>
                                                        We collect the following types of personal information (collectively, "<strong>Personal Information</strong>") that you voluntarily provide through the Site.                        <ul class="bullet">
                                                            <li><strong>Personal Identifiers</strong>. A "Personal Identifier" is information that can be used to identify and/or contact a natural person and includes name, postal address, telephone number, or email address.</li>
                                                            <li><strong>Other Personal Information</strong>. "Other Personal Information" is information combined with Personal Identifiers that may include credit card information, purchase history, correspondence sent to us through the Site or information regarding your tastes and preferences. In addition, when you register with the Site we ask you to create a unique user ID and password which will be associated with the Personal Identifiers you have provided.</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <strong>How We Directly Collect Personal Information: </strong>
                                                        There are a number of different ways that we collect Personal Information from you. These may include:                        <ul class="bullet">
                                                            <li><strong>Purchases</strong>. We collect your Personal Information when purchase VoiceCast Inc. products through the Site. We will require sufficient information to complete your purchase, which will include your name, postal address, email address, telephone number and credit card information.</li>
                                                            <li><strong>Customer Support</strong>. You may provide us with Personal Information when you call or email us to request technical assistance with our products or information that you would like to receive about our products.</li>
                                                            <li><strong>Email/Direct Mail Campaigns That You Approve</strong>. If you elect to receive promotional communications from us, from time to time we may contact you with information about new products, promotions or special offers. If you want to stop receiving promotional communications from us, you can follow the unsubscribe instructions at the bottom of a promotional email or contact us at <a href="mailto:support@xxxxxx.com">support@xxxxxx.com</a>.</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <strong>Information That We Automatically Collect From Your Computer: </strong>
                                                        We (or service providers on our behalf) may automatically collect information from you using "cookies" or "web beacons". Cookies are small amounts of data that are stored within your computer's Internet browser and that are accessed and recorded by the websites that you visit so that they can recognize the same browser navigating online at a later time. Web beacons are web page elements that can recognize certain types of information on your computer such as cookies and the time and date of a page viewed.                        <p>Information collected by cookies and web beacons may include, without limitation:</p>
                                                        <ul class="bullet">
                                                            <li>the pages you visit within the Site;</li>
                                                            <li>the date and time of your visit to the Site;</li>
                                                            <li>the websites you visit before or after visiting the Site;</li>
                                                            <li>the Internet Protocol (IP) address used to connect your computer to the Internet;</li>
                                                            <li>your computer and connection information such as your browser type and version, operating system and platform; and/or</li>
                                                            <li>your purchase history.</li>
                                                        </ul>
                                                        <p>We may use data gathered automatically from your computer to help us recognize you as a previous visitor to the Site, to serve relevant online advertising to you or to analyze trends and statistics to improve your experience of the Site. You can set your browser to reject cookies or to notify you when you are sent a cookie. You can also purchase and download software that will allow you to visit the Site without providing the information gathered by cookies. You are welcome to use the Site if you use such software, but your experience while visiting the Site may not be optimal.</p>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                <strong>Collection of Information by Third Parties.</strong>
                                                <p>We use Google Analytics, a web analytics service provided by Google, Inc. ("Google"), to collect information about your use of the Site. Google may use cookies to collect information about what content you view, what purchases you make, the social media features you access, what websites you visit immediately prior to visiting the Site, and your system information and geographic information. The information generated by the Google cookies about your use of the Site (including your IP address) will be transmitted to and stored by Google. The information collected by Google allows us to analyze your use of the Site.</p>
                                                <p>If you visit the Site from a third-party website the third-party website may give you a unique code, cookie or graphic which will uniquely identify you. This will only happen if you link directly from a third party website to the Site. Your activities on the Site while such a code is active may be reported back to the third party website. The presence of a third party navigation bar at the top of any page on the Site is an indication that the third party website may be able to see your activity on the Site.</p>
                                                <p>The Site may include third-party advertising, links to other websites, and other content from third-party businesses. These third-party sites, businesses, and advertisers, or advertising companies working on their behalf, may use web beacons and cookies to measure the effectiveness of their ads, personalize or optimize advertising content and to track users who click on the links made available through the Site. We do not have access to or control over web beacons or cookies that these third parties may use. We are not responsible for the privacy practices or the content of these third-party websites. You are encouraged to review the privacy policies of the different websites you visit.</p>
                                                <p>Some third-party advertising companies may provide a mechanism to opt-out of their technology. For more information about the opt out process, you may visit the Network Advertising Initiative website, available at <a href="http://www.networkadvertising.org/managing/opt_out.asp" target="_blank">http://www.networkadvertising.org/managing/opt_out.asp</a>.</p>
                                                <p>We may also provide social media features through the Site that enable you to share information with your social networks and to interact with VoiceCast Inc. on various social media sites. Your use of these features may result in the collection or sharing of information about you by these sites, depending on the feature. We encourage you to review the privacy policies and settings on the social media sites with which you interact to make sure you understand the information that may be collected, used, and shared by those sites.</p>
                                            </li>
                                            <li>
                                                <strong>Use of Information Collected By Us.</strong>
                                                <p>We use the information described above to process and fulfill any orders you place through the Site, including to send you emails to confirm your order status, to communicate with you and to send you information by email, postal mail, telephone or other means about our products, services, and promotions, unless you have directed us not to contact you with promotional communications. We may also use this information for our own statistical or analytical purposes, including to help us develop and improve our Site and/or products, and to tailor our Site to your interests.</p>
                                            </li>
                                            <li>
                                                <strong>Sharing of Information with Third Parties.</strong>
                                                Except as expressly provided in this Privacy Policy, we will not rent, sell or otherwise disclose your Personal Information to unrelated or unaffiliated third parties without your consent.                <p>
                                                <ol class="list-letter">
                                                    <li>
                                                        <strong>Service Providers: </strong>
                                                        We may employ other companies or individuals ("<strong>Service Providers</strong>") to provide certain services to us or on our behalf, such as operating and supporting the Site, processing payments and fulfilling orders you place through the Site, analyzing data, or performing marketing or consulting services. These Service Providers will only have access to the information needed to perform these limited functions on our behalf and are required to provide your Personal Information with at least the same level of protection and security as we use on the Site. Such Service Providers are prohibited from using your Personal Information for any purpose other than the purpose for which the applicable Service Provider was engaged by us and/or as stated in this Privacy Policy. Any Service Providers that use data received from us may only do so in accordance with this Privacy Policy.                    </li>
                                                    <li>
                                                        <strong>Credit Card Companies: </strong>
                                                        If you place an order through the Site, the information you provide will be transmitted to your credit card company to verify and authorize your purchase.                    </li>
                                                    <li>
                                                        <strong>Third Party Marketing Partners: </strong>
                                                        We may, from time to time, share your Personal Information with a few carefully selected third party marketing partners that we believe offer products or services that may be of interest to you.                    </li>
                                                    <li>
                                                        <strong>Law Enforcement and Protection of Users: </strong>
                                                        To the extent permitted by law, we will disclose Personal Information to government authorities or third parties pursuant to a legal request, subpoena or other legal process. We may also use or disclose your information as permitted by law to perform charge verifications, report or collect debts owed, fight fraud or protect our rights or property as well as those of our affiliates or customers. You should be aware that, following disclosure to any third party, your Personal Information may be accessible by others to the extent permitted or required by applicable law.                    </li>
                                                </ol>
                                                </p>
                                            </li>
                                            <li>
                                                <strong>Additional Privacy Protections for Children Using the Internet.</strong>
                                                <p>The Site is a general audience website and is not directed to children under the age of 13. We will never knowingly collect Personal Information from children under the age of 13 without verifiable parental consent. If you are under the age of 13, please do not provide us with Personal Information of any kind whatsoever. If we become aware that a user is under the age of 13 and has submitted Personal Information without verifiable parental consent, we will remove his or her Personal Information from our files. We understand that children may not fully understand all of the provisions of this Privacy Policy or make informed decisions about the choices that are made available to adult users of the Site. We encourage parents and guardians to spend time with their children online and to be familiar with the websites they visit.</p>
                                            </li>
                                            <li>
                                                <strong>Security.</strong>
                                                <p>We will take all steps reasonably necessary to ensure your Personal Information is treated securely and in accordance with this Privacy Policy. We use appropriate security measures to protect against the loss, misuse or alteration of your Personal Information. All pages within our checkout process and areas containing Personal Information are secured using SSL (Secure Socket Layer) technology, which encrypts data between our computer and yours. No computer system is fully secure, however, and there are inherent risks associated with Internet transactions. To make sure your Internet browser is using the latest security features, you may want to download the most recent version of it, which should have full SSL support.</p>
                                            </li>
                                            <li>
                                                <strong>Corrections/Information Removal.</strong>
                                                <p>If your name, e-mail or postal address, telephone number or other Personal Information changes, you may update, correct or omit the relevant information by contacting us at <a href="mailto:support@xxxxxx.com">support@xxxxxx.com</a>.</p>
                                            </li>

                                            <li>
                                                <strong>Your California Privacy Rights.</strong>
                                                <p>California Civil Code Section 1798.83, also known as the "Shine The Light" law, permits our customers who are California residents to request and obtain from us once a year, free of charge, information about the Personal Information (if any) we disclosed to third parties for direct marketing purposes in the preceding calendar year. If applicable, this information would include a list of the categories of Personal Information that was shared with these third parties and the names and addresses of the third parties with which we shared information in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to: VoiceCast</p>
                                            </li>
                                            <li>
                                                <strong>Business Transfer.</strong>
                                                <p>In the event that VoiceCast Inc. is sold, has its assets acquired or transferred, whether voluntarily or involuntarily, or merges or becomes affiliated with any other division, individual or entity, any customer information owned or under the control of VoiceCast Inc. may be one of the transferred assets. We reserve the right, as part of such transaction, to transfer or assign the Personal Information and other information we have collected from users of the Site.</p>
                                            </li>
                                            <li>
                                                <strong>Limitations On Liability.</strong>
                                                <p>IN NO EVENT WILL BUNNY INC. OR ITS AFFILIATES, LICENSEES OR ANY PARTY INVOLVED IN CREATING, PRODUCING OR DELIVERING THE SITE OR the related PRODUCTS OR SERVICES BE LIABLE IN ANY MANNER WHATSOEVER FOR ANY INCIDENTAL, CONSEQUENTIAL, INDIRECT, SPECIAL OR PUNITIVE DAMAGES ARISING OUT OF YOUR ACCESS, USE OR INABILITY TO USE THE SITE, OR IN CONNECTION WITH ANY FAILURE OR PERFORMANCE, ERROR, OMISSION, INTERRUPTION, DEFECT, DELAY IN OPERATION OR TRANSMISSION, COMPUTER VIRUS OR LINE OR SYSTEM FAILURE (INCLUDING LOSS OF PROFITS, LOSS OF BUSINESS OR DATA, BUSINESS INTERRUPTION, AND DAMAGES THAT RESULT FROM INACCURACY OF THE INFORMATION OR INCONVENIENCE, DELAY, OR LOSS OF THE USE OF THE SITE). THE FOREGOING LIMITATIONS APPLY WHETHER THE ALLEGED LIABILITY IS BASED ON CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY OR ANY OTHER BASIS, EVEN IF BUNNY INC. OR ITS AFFILIATES OR ANY OTHER PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
                                            </li>
                                            <li>
                                                <strong>Use of Information Outside of Your Country of Residence.</strong>
                                                <p>The Site is directed to users located in the Kenya. If you are located outside of the Kenya and choose to provide your Personal Information to us, you should be aware that VoiceCast Inc. may transfer your Personal Information to the Kenya and process it there. The privacy laws in the Kenya may not be as protective as those in your jurisdiction. Your consent to this Privacy Policy followed by your submission of such information represents your agreement to such transfer.</p>
                                            </li>
                                            <li>
                                                <strong>Governing Law.</strong>
                                                <p>This Privacy Policy and any disputes relating hereto are governed by the laws of the State of New York without regard to principles of conflicts of laws, and by using the Site, you consent to the exclusive jurisdiction of the state and federal courts in New York for resolution of any disputes relating to this Privacy Policy and/or the Site and waive any objection thereto.</p>
                                            </li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
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
                                        <li><a href="{{ url('about') }}">About Voice Cast</a></li>
                                        <li><a href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                                        <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>                            
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h4>Social Media</h4>
                                    <ul class="footer-menu">
                                        <li><a href="#"><i class="fa fa-facebook-square"></i></a> <a href="#"><i class="fa fa-twitter-square"></i></a> <a href="#"><i class="fa fa-instagram"></i></a></li>                           
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
                    </body>
                    </html>
