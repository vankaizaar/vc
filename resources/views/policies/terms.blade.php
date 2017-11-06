<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Talent Guru') }} - Privacy Policy</title>
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

                                        <h1>Terms & Conditions</h1>

                                        <h3>Content Licensing</h3>
                                        <p>The text, trademarks, trade names, trade dress, service marks, logos, images, graphics, photos, video files, application functionality, or any other digital media, and their arrangement on this Website ("Content") may be subject to patent, copyright, trademark and other intellectual property protection. Access to and use of this Website is solely for your personal use, information, education, entertainment, or enlightenment. You may download, copy or print the Content of this Website for your personal non-commercial use only, and unless otherwise permitted by a separate written agreement between you and us, you must not copy, distribute, or modify the Content, or repost the Content to another Website. No right, title or interest in any of the Content of this Website is transferred to you as a result of any downloading, copying, printing or use of this Website or its Content. Nothing contained on this Website or in these Terms serves to grant to you, by implication or otherwise, any license or right to use any Content without our written permission or the written permission of such third party (as applicable) that may own or license the Content.</p>
                                        <h3>No Endorsement or Liability for User-Generated or Third-Party Content</h3>
                                        <p>Although third-party materials ("Submission(s)") may be posted on this Website, the posting of those Submissions does not constitute our endorsement of those Submissions. We are not responsible or liable for any claim, including, without limitation, loss or injury to real, tangible, or intellectual property, violations of personal privacy or privacy rights, actual, direct, indirect, incidental, consequential or punitive damages, personal injury, or wrongful death in connection with third-party or user-generated Submissions.</p>
                                        <h3>Copyright Infringement</h3>
                                        <p>Pursuant to our rights under the Digital Millennium Copyright Act ("DMCA"), 17 U.S.C. §512, we have designated a copyright agent to receive copyright infringement notices for claims of infringement related to materials found on this Website. Our copyright agent is Alex Torrenegra. The agent can be reached at: <a href="mailto:support@xxxxx.com">support@xxxx.com</a>.</p>
                                        <h3>DMCA Infringement Notification</h3>
                                        <p>To be effective, infringement notifications sent to our copyright agent must include the following:</p>
                                        <ol>
                                            <li>A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed;</li>
                                            <li>Identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site.</li>
                                            <li>Identification of the material or content that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or have access disabled, and information reasonably sufficient to permit us to locate the material;</li>
                                            <li>Information reasonably sufficient to permit us to contact the complaining party, including address, telephone number and email address where the complaining party may be contacted;</li>
                                            <li>The following statement: "I have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law"; and</li>
                                            <li>The following statement: "The information in this notification is accurate, and under penalty of perjury, I swear that I am the copyright owner or that I am authorized to act on behalf of the owner of an exclusive right that is allegedly infringed."</li>
                                        </ol>
                                        <p>Upon receipt of the written notification containing the information as outlined in 1 through 6 above:</p>
                                        <ol>
                                            <li>We will remove or disable access to the content that is alleged to be infringing;</li>
                                            <li>We will forward the written notification to the alleged infringer; and</li>
                                            <li>We will take reasonable steps to promptly notify the alleged infringer that we have removed or disabled access to the content.</li>
                                        </ol>
                                        <h3>DMCA Infringement Counter Notification</h3>
                                        <p>Pursuant to the DMCA, after the alleged infringer receives a notice of infringement from us, the alleged infringer will have the opportunity to respond to us with a counter notification ("Counter Notification"). To be effective, a Counter Notification must be a written communication provided to our copyright agent, and must include the following:</p>
                                        <ol>
                                            <li>A physical or electronic signature of the subscriber;</li>
                                            <li>Identification of the material that has been removed or to which access has been disabled and the location at which the material appeared before it was removed or access disabled;</li>
                                            <li>The following statement: "I swear under penalty of perjury that it is my good faith belief that the material identified above was removed or disabled as a result of mistake or misidentification of the material to be removed or disabled"; and</li>
                                            <li>The alleged infringer's name, address, and telephone number, and a statement that the alleged infringer consents to the jurisdiction of the federal district court for the judicial district in which the subscriber's address is located, or if the subscriber's address is outside of the United States, any judicial district in which we may be found, and that the subscriber will accept service of process from the person who provided notification or an agent of such person.</li>
                                        </ol>
                                        <p>Upon the copyright agent's receipt of a Counter Notification containing the information as outlined in 1 through 4 above, the DMCA provides that the removed material will be restored or access re-enabled. We will comply with this requirement as required by law, provided that our copyright agent has not received notice from the original complaining party that an action has been filed seeking a court order to restrain the subscriber from engaging in infringing activity relating to the material on our network.</p>
                                        <h3>Prohibited Use and Access</h3>
                                        <p>You are prohibited from using or accessing the Website or its Content for any unlawful, obscene, or immoral purpose, or any purpose that is likely to cause liability to yourself or others, including without limitation:</p>
                                        <ol class="list-letter">
                                            <li>to solicit others to perform or participate in any unlawful acts;</li>
                                            <li>to violate any international, federal, or state regulations, rules, laws, or local ordinances;</li>
                                            <li>to infringe upon or violate our intellectual property rights or the intellectual property rights or privacy rights of others;</li>
                                            <li>to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability;</li>
                                            <li>to submit false or misleading information;</li>
                                            <li>to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of this Website, other websites, or the Internet;</li>
                                            <li>to collect or track the personal information of others;</li>
                                            <li>to spam, phish, pharm, pretext, or otherwise contact users of this Website;</li>
                                            <li>to spider, crawl, or scrape the Content of this Website;</li>
                                            <li>to interfere with or circumvent the security features of this Website, other websites, or the Internet.</li>
                                        </ol>
                                        <p>We reserve the right to terminate your use of the Website for using or accessing the site in any prohibited manner.</p>
                                        <h3>Website Updates and Accuracy</h3>
                                        <p>We undertake no obligation to update, amend or clarify information on this Website, including, without limitation, pricing or product information, except as required by law. No specified update or refresh date applied on this Website should be taken to indicate that all information on the Website has been modified or updated. Please remember when reviewing information on this Website that such information may not represent the complete information available on a subject. In addition, subsequent events or changes in circumstances may cause existing information on this Website to become inaccurate or incomplete.</p>
                                        <p>On occasion, information on this Website may contain errors, including, without limitation, typographical errors, inaccuracies, or omissions related to product availability, special offers, product promotions, product descriptions, or product shipping charges and transit times. We reserve the right to, at any time and without prior notice, correct any errors, inaccuracies or omissions and to change or update information or cancel orders if any information on the Website is inaccurate (including after you have submitted your points for redemption).</p>
                                        <p>This Section is not intended to limit the disclaimer in Section 7.</p>
                                        <h3>Limitations on Liability</h3>
                                        <p>YOU ACKNOWLEDGE, BY YOUR USE OF THIS WEBSITE: (1) THAT YOUR USE OF THIS WEBSITE IS AT YOUR SOLE RISK; AND (2) THAT WE WILL NOT BE LIABLE FOR ANY DAMAGES OF ANY KIND RELATED TO YOUR USE OF OR INABILITY TO USE OUR WEBSITE, INCLUDING, WITHOUT LIMITATION, FAILURE OF PERFORMANCE, ERROR, OMISSION, INTERRUPTION, COMPUTER VIRUS, OR NETWORK OR INTERNET FAILURE, OR INCLUDING, WITHOUT LIMITATION, DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL, COMPENSATORY OR CONSEQUENTIAL DAMAGES, LOST PROFITS OR LOSS OF OR DAMAGE TO PROPERTY WHETHER THE ALLEGED LIABILITY IS BASED ON CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY OR ANY OTHER BASIS, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. IN NO EVENT WILL OUR, OUR AFFILIATES', AGENTS', LICENSORS' OR SUPPLIERS' TOTAL LIABILITY FOR ANY CLAIMS RELATED TO THIS WEBSITE EXCEED 50 DOLLARS.</p>
                                        <p>BECAUSE SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF INCIDENTAL OR CONSEQUENTIAL DAMAGES, OUR AFFILIATES', AGENTS', LICENSORS' AND SUPPLIERS' DAMAGES IN SUCH JURISDICTIONS ARE HEREBY LIMITED TO THE EXTENT PERMITTED BY LAW.</p>
                                        <h3>Disclaimer</h3>
                                        <p>THE CONTENT PROVIDED ON THIS WEBSITE IS PROVIDED "AS IS" AND "WITH ALL FAULTS." WE MAKE NO WARRANTY OR REPRESENTATION, EITHER EXPRESS OR IMPLIED, AS TO ITS USE, AVAILABILITY, CONTENT ACCURACY, APPROPRIATENESS OR PERFORMANCE OF THIS WEBSITE. AS A USER, YOU ASSUME ALL RISKS AND RESPONSIBILITIES FOR YOUR USE OR NON-USE OF THE WEBSITE, AND WE MAKE NO REPRESENTATION THAT THE CONTENT APPEARING ON OR DOWNLOADED FROM THIS WEBSITE IS COMPATIBLE WITH YOUR COMPUTER OR FREE FROM ERROR OR VIRUSES. NONE OF OUR EMPLOYEES, AGENTS OR REPRESENTATIVES IS AUTHORIZED TO MODIFY OR AMEND THIS WARRANTY. TO THE EXTENT ALLOWABLE BY EXISTING LAW, WE DISCLAIM ALL OTHER WARRANTIES, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, WITH RESPECT TO THIS WEBSITE AND ITS CONTENT. SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF INCIDENTAL OR CONSEQUENTIAL DAMAGES, OR LIMITATION ON HOW LONG AN IMPLIED WARRANTY LASTS, SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU.</p>
                                        <p>WE RESERVE THE RIGHT TO ALTER OR REMOVE WEBSITE CONTENT, OR SUSPEND OR TERMINATE YOUR USE IN ANY WAY, AT ANY TIME, FOR ANY REASON, WITHOUT PRIOR NOTIFICATION, AND WE WILL NOT BE LIABLE IN ANY WAY FOR POSSIBLE CONSEQUENCES OF THAT ACTION.</p>
                                        <h3>Indemnification</h3>
                                        <p>YOU AGREE TO INDEMNIFY AND HOLD US, OUR DIRECTORS, OFFICERS, EMPLOYEES, AGENTS, BUSINESS PARTNERS AND AFFILIATES HARMLESS FROM AND AGAINST ANY AND ALL CLAIMS, DAMAGES, COSTS AND EXPENSES, INCLUDING ATTORNEY FEES, ARISING FROM OR RELATED TO YOUR USE OF THIS WEBSITE OR BREACH OF THESE TERMS.</p>
                                        <h3>Termination</h3>
                                        <p>The Terms will remain in effect until you cease using the Website. Notwithstanding anything in the Terms to the contrary, the parties understand and agree that all terms and conditions of these Terms that may require continued performance, compliance, or effect beyond the termination date of the Terms will survive termination of these Terms and will be enforceable by the parties. We may also terminate these Terms at any time and may do so immediately without notice, and accordingly deny you access to this Website, if in our sole discretion, you fail to comply with any term or provision of these Terms. Upon any termination of these Terms, you must promptly destroy all materials downloaded or otherwise obtained from this Website, as well as copies of such materials, whether made under these Terms or otherwise, unless otherwise permitted by separate written agreement with us.</p>
                                        <h3>Arbitration</h3>
                                        <p>All disputes arising out of or relating to these Terms (including its formation, performance, interpretation, applicability, enforceability or alleged breach) or your use of our Website will be exclusively resolved under confidential binding arbitration held in California in accordance with the rules and procedures of the American Arbitration Association ("AAA"). The parties shall request that AAA appoint a single arbitrator. The award rendered by the arbitrator will be binding and may be entered as a judgment in, and enforced by, any court of competent jurisdiction. To the fullest extent permitted by applicable law, no arbitration under these Terms will be joined to an arbitration involving any other party subject to these Terms, whether through class arbitration proceedings or otherwise. Notwithstanding the foregoing, we will have the right to seek injunctive or other equitable relief in state or federal courts located in California to enforce these terms or prevent an infringement of a third party's rights. In the event equitable relief is sought, each party hereby irrevocably submits to the personal jurisdiction of such court.</p>
                                        <h3>Governing Law</h3>
                                        <p>These Terms will be governed by and construed in accordance with the laws of California, without regard to its conflicts of law rules. For all disputes arising out of or relating to these Terms that cannot be resolved as specified under Section 10,  you submit to exclusive personal jurisdiction and venue of the state and federal courts located in Santa Clara County, California.</p>
                                        <h3>U.S. Federal Government International Sanctions</h3>
                                        <p>In accordance to U.S. law we will not export to or acquire services with residents in the following countries: Burma, Cuba, Iran , North Korea, Sudan and Syria. We also reserve the right to not export or contract services with any person in the world that is subject to sanctions and embargoes as dictated by the United States Department of Treasury or any other implementing U.S. Government Agency.</p>
                                        <h3>Notice</h3>
                                        <p>When you visit this Website or send e-mails to us, you are communicating with us electronically, and by doing so, you consent to receive communications from us electronically. We will communicate with you by e-mail or by posting notices on this Website. You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing. You may e-mail notices to: <a href="mailto:support@xxxxxxx.com">support@xxxxxxx.com</a>.</p>
                                        <h3>Privacy Policy</h3>
                                        <p>You agree to comply with the terms of the <a href="{{ url('/privacy-policy') }}">Website's Privacy Policy</a>, which is incorporated by reference into these Terms.</p>
                                        <h3>Other</h3>
                                        <p>By agreeing to these Terms, you represent that you are at least the age of majority in your state of residence or geopolitical jurisdiction, or that you are the age of majority in your state of residence or geopolitical jurisdiction. These Terms are effective as of the Effective Date. None of our employees, agents or representatives are authorized to modify or amend these Terms. Unless specifically mentioned herein, the provisions and conditions of these Terms constitute the entire agreement between you and us related to the use of the Website and supersede any prior agreements or understandings not incorporated in these Terms. Certain users may have other contracts with us, and in cases of any conflict between the terms of such contracts and these Terms, the terms of the other contract will apply.</p>

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
                                        <li><a href="{{ url('about') }}">About {{ config('app.name', 'Talent Guru') }}</a></li>
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
