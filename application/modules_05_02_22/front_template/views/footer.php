    <!--footer-->
    <footer class="bg-blue1 foot">
        <div class="top-footer-block">
            <div class="container container-full footer-logo-block">
                <div class="row text-white">
                    <div class="col-12 col-md-12 col-xl-3 text-muted footer-logo">
                        <a class="navbar-brand" href="<?= bs() ?>"><img class="w-100" src="<?= bs() ?>front_assets/image/png/CMM-logo-white.png"></a>
                    </div>
                    <div class="col-12 col-md-9 col-xl-6 d-md-block footer-info-block">
                        <span class="text-decoration-none text-white more-info">
                            <b class="need">Need more information?</b> <span class="text-white">Speak to a Licensed Sales Agent</span> <br> 
							<span class="button-block  d-md-none">
								<a class="number dynamic_phoneno" href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>">CALL NOW!</a>
							</span>
							<h5 class="d-none dynamic_phoneno"><b><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></b><b>/TTY 711</b></h5>
							<span class="button-block d-none d-md-inline">
								<a class="number dynamic_phoneno" href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>"><b><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></b></a><b>/TTY 711</b>
							</span>
							<span class="text-white"><?php displayTime(); ?></span>
                        </span>
                    </div>
                    <div class="col-12 col-md-3 col-xl-3 find-plan d-none">
                        <a class="btn btn bg-gold text-white" href="<?= bs() ?>find-a-plan">
                            FIND A PLAN
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="container container-full footer-link-block">
                <div class="row text-white">
                    <div class="col-12 col-md-3 col-lg-3 col-xl-3 footer-menu">
                        <h5 class="footer-menu-heading">PRODUCTS</h5>
                        <div class="footer-submenu">
							<ul>
								<li><a href="<?= bs() ?>medicare-part-d" class="text-decoration-none"> Medicare Part D Plans</li>
								<li><a href="<?= bs() ?>medicare-supplement" class="text-decoration-none"> Medicare Supplement Plans</a></li>
								<li><a href="<?= bs() ?>medicare-advantage" class="text-decoration-none"> Medicare Advantage Plans</a></li>
								<li><a href="<?= bs() ?>blog/medicare/medicare-plan-finder" class="text-decoration-none"> Medicare Plan Finder</a></li>
								<li><a href="<?php echo bs();?>medicare-glossary" class="text-decoration-none"> Medicare Glossary</a></li>
							</ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-xl-3 footer-menu">
                        <h5 class="footer-menu-heading">HELPFUL CONTENT</h5>
                        <div class="footer-submenu">    
							<ul>
								<li><a href="<?= bs() ?>blog/medicare/what-is-medicare" class="text-decoration-none"> What is Medicare</a></li>
								<li><a href="<?= bs() ?>blog/medicare/apply-for-medicare" class="text-decoration-none"> Apply for Medicare</a></li>
								<li><a href="<?= bs() ?>blog/medicare/medicare-enrollment" class="text-decoration-none"> Medicare Enrollment</a></li>
								<li><a href="<?= bs() ?>medicare-carriers" class="text-decoration-none"> Medicare Carriers</a></li>
								<li><a href="<?= bs() ?>medicare-by-state" class="text-decoration-none"> Medicare by State</a></li>
							</ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 col-lg-2 col-xl-3 footer-menu">
                        <h5 class="footer-menu-heading">COMPANY</h5>
                        <div class="footer-submenu">   
							<ul>
								<li><a href="<?= bs() ?>about-us" class="text-decoration-none"> About Us</a></li>
								<li><a href="https://www.hpone.com/careers.aspx" target="_blank" class="text-decoration-none" rel=”nofollow”> Careers</a></li>
								<li><a href="<?= bs() ?>contact-us" class="text-decoration-none"> Contact Us</a></li>
								<li><a href="<?= bs() ?>privacy-policy" class="text-decoration-none"> Privacy Policy</a></li>
								<li><a href="<?= bs() ?>licensing-legal" class="text-decoration-none"> Licensing Legal</a></li>
								<li><a href="<?= bs() ?>do-not-call" class="text-decoration-none"> Do Not Call Policy</a></li>
								<li><a href="<?= bs() ?>terms-of-service" class="text-decoration-none"> Terms of Service</a></li>
							</ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xl-3 footer-menu">
                        <h5 class="footer-menu-heading">MEDICARE BY STATE</h5>
                        <div class="footer-submenu d-md-none">
                            <ul class="state-list-group">
                                <li><a href="<?= bs() ?>medicare-by-state/alabama">Alabama</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/alaska">Alaska</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/arizona">Arizona</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/arkansas">Arkansas</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/california">California</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/colorado">Colorado</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/connecticut">Connecticut</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/delaware">Delaware</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/florida">Florida</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/georgia">Georgia</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/hawaii">Hawaii</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/idaho">Idaho</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/illinois">Illinois</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/indiana">Indiana</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/iowa">Iowa</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/kansas">Kansas</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/kentucky">Kentucky</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/louisiana">Louisiana</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/maine">Maine</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/maryland">Maryland</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/massachusetts">Massachusetts</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/michigan">Michigan</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/minnesota">Minnesota</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/mississippi">Mississippi</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/missouri">Missouri</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/montana">Montana</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/nebraska">Nebraska</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/nevada">Nevada</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/new-hampshire">New Hampshire</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/new-jersey">New Jersey</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/new-mexico">New Mexico</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/new-york">New York</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/north-carolina">North Carolina</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/north-dakota">North Dakota</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/ohio">Ohio</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/oklahoma">Oklahoma</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/oregon">Oregon</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/pennsylvania">Pennsylvania</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/rhode-island">Rhode Island</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/south-carolina">South Carolina</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/south-dakota">South Dakota</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/tennessee">Tennessee</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/texas">Texas</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/utah">Utah</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/vermont">Vermont</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/virginia">Virginia</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/washingtondc">Washington D.C.</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/washington">Washington</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/west-virginia">West Virginia</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/wisconsin">Wisconsin</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/wyoming">Wyoming</a></li>
                            </ul>
                        </div>
                        <div class="footer-submenu d-none d-md-block">
                            <p>
							<a href="<?= bs() ?>medicare-by-state/alabama">AL</a>,
                                <a href="<?= bs() ?>medicare-by-state/alaska">AK</a>,
                                <a href="<?= bs() ?>medicare-by-state/arizona">AZ</a>,
                                <a href="<?= bs() ?>medicare-by-state/arkansas">AR</a>,
                                <a href="<?= bs() ?>medicare-by-state/california">CA</a>,
                                <a href="<?= bs() ?>medicare-by-state/colorado">CO</a>,
                                <a href="<?= bs() ?>medicare-by-state/connecticut">CT</a>,
                                <a href="<?= bs() ?>medicare-by-state/delaware">DE</a>,
                                <a href="<?= bs() ?>medicare-by-state/washingtondc">DC</a>,
                                <a href="<?= bs() ?>medicare-by-state/florida">FL</a>,
                                <a href="<?= bs() ?>medicare-by-state/georgia">GA</a>,
                                <a href="<?= bs() ?>medicare-by-state/hawaii">HI</a>,
                                <a href="<?= bs() ?>medicare-by-state/idaho">ID</a>,
                                <a href="<?= bs() ?>medicare-by-state/illinois">IL</a>,
                                <a href="<?= bs() ?>medicare-by-state/indiana">IN</a>,
                                <a href="<?= bs() ?>medicare-by-state/iowa">IA</a>,
                                <a href="<?= bs() ?>medicare-by-state/kansas">KS</a>,
                                <a href="<?= bs() ?>medicare-by-state/kentucky">KY</a>,
                                <a href="<?= bs() ?>medicare-by-state/louisiana">LA</a>,
                                <a href="<?= bs() ?>medicare-by-state/maine">ME</a>,
                                <a href="<?= bs() ?>medicare-by-state/maryland">MD</a>,
                                <a href="<?= bs() ?>medicare-by-state/massachusetts">MA</a>,
                                <a href="<?= bs() ?>medicare-by-state/michigan">MI</a>,
                                <a href="<?= bs() ?>medicare-by-state/minnesota">MN</a>,
                                <a href="<?= bs() ?>medicare-by-state/mississippi">MS</a>,
                                <a href="<?= bs() ?>medicare-by-state/missouri">MO</a>,
                                <a href="<?= bs() ?>medicare-by-state/montana">MT</a>,
                                <a href="<?= bs() ?>medicare-by-state/nebraska">NE</a>,
                                <a href="<?= bs() ?>medicare-by-state/nevada">NV</a>,
                                <a href="<?= bs() ?>medicare-by-state/new-hampshire">NH</a>,
                                <a href="<?= bs() ?>medicare-by-state/new-jersey">NJ</a>,
                                <a href="<?= bs() ?>medicare-by-state/new-mexico">NM</a>,
                                <a href="<?= bs() ?>medicare-by-state/new-york">NY</a>,
                                <a href="<?= bs() ?>medicare-by-state/north-carolina">NC</a>,
                                <a href="<?= bs() ?>medicare-by-state/north-dakota">ND</a>,
                                <a href="<?= bs() ?>medicare-by-state/ohio">OH</a>,
                                <a href="<?= bs() ?>medicare-by-state/oklahoma">OK</a>,
                                <a href="<?= bs() ?>medicare-by-state/oregon">OR</a>,
                                <a href="<?= bs() ?>medicare-by-state/pennsylvania">PA</a>,
                                <a href="<?= bs() ?>medicare-by-state/rhode-island">RI</a>,
                                <a href="<?= bs() ?>medicare-by-state/south-carolina">SC</a>,
                                <a href="<?= bs() ?>medicare-by-state/south-dakota">SD</a>,
                                <a href="<?= bs() ?>medicare-by-state/tennessee">TN</a>,
                                <a href="<?= bs() ?>medicare-by-state/texas">TX</a>,
                                <a href="<?= bs() ?>medicare-by-state/utah">UT</a>,
                                <a href="<?= bs() ?>medicare-by-state/vermont">VT</a>,
                                <a href="<?= bs() ?>medicare-by-state/virginia">VA</a>,
                                <a href="<?= bs() ?>medicare-by-state/washington">WA</a>,
                                <a href="<?= bs() ?>medicare-by-state/west-virginia">WV</a>,
                                <a href="<?= bs() ?>medicare-by-state/wisconsin">WI</a>,
                                <a href="<?= bs() ?>medicare-by-state/wyoming">WY</a>
							</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container-full">
            <hr class="footer-border">
        </div>
        <div class="container footer-copyright-block container-full">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-5 col-xl-5 footer-copyright-left-block">
                    <p>© 2022 HealthPlanOne, LLC, All Rights Reserved. <a href="<?= bs() ?>sitemap.xml">Site Map</a></p>
                </div>
                <div class="col-12 col-md-3 col-lg-3 col-xl-3 footer-copyright-middle-block">
                    <div class="d-flex justify-content-flex-end justify-content-center justify-content-md-end justify-content-xl-start">
                        <a href="https://www.facebook.com/ClearMatchMedicare" class="text-decoration-none" target="_blank"  rel=”nofollow”>
                            <img class="" src="<?= bs() ?>front_assets/image/png/facebook-square.png">
                        </a>
                        <a href="https://twitter.com/clear_match" class="text-decoration-none ml-3" target="_blank"  rel=”nofollow”>
                            <img class="" src="<?= bs() ?>front_assets/image/png/twitter-square.png">
                        </a>
                        <a href="https://www.instagram.com/clearmatchmedicare/" class="text-decoration-none ml-3" target="_blank"  rel=”nofollow”>
                            <img class="" src="<?= bs() ?>front_assets/image/png/instagram-square.png">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 col-xl-4 text-lg-right footer-copyright-right-block">
                    <a href="javascript:void(0)"><img class="" src="<?= bs() ?>front_assets/image/png/BBB-Accredited-Business.png"></a>
                    <a href="javascript:void(0)"><img class="" src="<?= bs() ?>front_assets/image/png/McAfee-Secure.png"></a>
                </div>
            </div>
        </div>
    </footer>

    <section class="footer-bottom">
        <div class="container container-full">
            						<p>
                            The ClearMatch Medicare website is operated by HealthPlanOne, LLC a licensed health insurance agency based in Connecticut; in California d/b/a ClearMatch Medicare Insurance Agency, license #OF30784. HealthPlanOne, is a licensed and certified representative of Medicare Advantage HMO, PPO and PFFS organizations and stand-alone prescription drug plans with a Medicare contract. ClearMatch™ Medicare is not affiliated with the federal government. Enrollment in any plan depends on contract renewal.
                        </p>
                        <p>
                            For a complete list of available plans please contact 1-800-MEDICARE (TTY users should call 1-877-486-2048), 24 hours a day/7 days a week or consult www.medicare.gov.
                        </p>
<p>PLEASE NOTE: Medicare Supplement insurance is available to those age 65 and older enrolled in Medicare Parts A and B and, in some states, to those under age 65 eligible for Medicare due to disability, ALS (Amyotrophic Lateral Sclerosis also known as Lou Gehrig’s disease) or End-Stage Renal disease.</p>

			<p>Medicare supplement plans cannot be held with Medicare Advantage plans.</p>
			
                           <p> The purpose of this communication is the solicitation of insurance. Contact will be made by an insurance agent/producer or insurance company.
                        </p>
                        <p>
                            Medicare supplement plans are not connected with or endorsed by the U.S. Government or the federal Medicare program.
                        </p>
                        <p>
                            The Centers for Medicare and Medicaid Services (CMS) does not review or approve Medicare Supplement plan information.
                        </p>
						<p>
							MULTIPLAN_HP1CMMWEB_2022 <br>Last Updated 06/21/2021
						</p>
        </div>
    </section>

    <!--scroll-top-->
    <div>
        <a class="scroll-top rounded-circle bg-gold text-white" href="#"><small><i class="fa fa-chevron-up fa-lg"></i></small></a>
    </div>  
</main>

    <!-- bootstrap 4.4.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="<?= bs() ?>front_assets/bootstrap-4.5.2/js/bootstrap.min.js"></script>
    <!-- page-scrollreveal-3.3.2 -->
    <script src="<?= bs() ?>front_assets/page-scrollreveal-3.3.2/scrollreveal.min.js"></script>
    <!-- Swiper Slider -->
    <script src="<?= bs() ?>front_assets/swiper-master/package/js/swiper.min.js"></script>

	<script src="<?= bs() ?>front_assets/js/jquery.validate.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="<?= bs() ?>front_assets/js/additional-methods.min.js"></script>
	<script src="<?= bs() ?>front_assets/js/jquery.inputmask.bundle.js"></script>

    <!-- javascript.js --> 
    <script src="<?= bs() ?>front_assets/js/common.js"></script>          
    <script src="<?= bs() ?>front_assets/js/index.js"></script>  
    <script>
		$(document).ready(function() {
            $('.common-block .common-subblock ol li a').click(function () {
                console.log('here')
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 150
                        }, 1000);
                        return false;
                    }
                }
            });
        });
        // swiper-master    
        var swiper3 = new Swiper( '.swiper3', {
            spaceBetween: 10,
            loop: false,
            slidesPerView: 1,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }, 

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                clickable: true,
            },
            
            // Responsive breakpoints
            breakpoints: {
                // when window width is <= 480px
                480: {
                    slidesPerView: 1,
					slidesPerGroup: 1,
                    spaceBetween: 20
                },
                // when window width is <= 640px
                767: {
                    slidesPerView: 2,
					slidesPerGroup: 2,
                    spaceBetween: 20
                },
                // when window width is <= 640px
                1025: {
                    slidesPerView: 3,
					slidesPerGroup: 3,
                    spaceBetween: 20
                }
            }, 
        } );
		setTimeout(function(){
			$(".replace_phoneno").html('<a href="<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a>');
		}, 200);
		//document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
<?php
	date_default_timezone_set('America/New_York');
	$info = getdate();
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){

	if($info['hours'] > 8 && $info['hours'] < 19 && $info['wday'] !=0 && $info['wday'] !=6){
?>

<script type = "text/javascript" src = 'https://home-c6.incontact.com/inContact/ChatClient/js/embed.min.js'></script>

<script type ="text/javascript">

	icPatronChat.init({serverHost:'https://home-c6.incontact.com',bus_no:4593299,poc:'c267ec61-c70d-496f-95a8-bf35244d11c6',params:['FirstName','Last name','first.last@company.com',555-555-5555]});

</script>
<?php 
	} }
?>
<!--style type="text/css">
    body{
        -webkit-user-select:none;
        -webkit-touch-callout:none;
             -moz-user-select:none;
             -ms-user-select:none;
             user-select:none;   
  
       }
  
</style-->
</body>
</html>
   
