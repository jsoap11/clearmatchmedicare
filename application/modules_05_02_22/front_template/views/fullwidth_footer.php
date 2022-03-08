<footer class="footer-lander">
	<div class="footer-top">
		<div class="container-fluid">
			<div class="row text-center text-md-left align-items-center">
				<div class="col-12 col-md-6 footer-left-link">
					<a href="#" data-target="#PrivacyPolicy" data-toggle="modal" class="">Privacy Policy</a>
					|
					<a href="#" data-target="#LicensingLegal" data-toggle="modal" class="">Licensing Legal</a>
					|
					<a href="<?= bs() ?>do-not-call" data-target="#DoNotCallModal" data-toggle="modal" class="">Do Not Call Policy</a>
					<p>© <?php echo date("Y");?> HealthPlanOne, LLC. All Rights Reserved</p>
				</div>
				<div class="col-12 col-md-6 text-center text-md-right mt-3 mt-lg-0 footer-copyright-block">
					<div class="footer-copyright-right-block">
						<a href="javascript:void(0)"> <!--https://www.bbb.org/us/ct/trumbull/profile/medicare/healthplanone-llc-0111-87015513#sealclick -->
							<img src="<?= bs() ?>front_assets/image/png/BBB-Accredited-Business.png" alt="">
						</a>
						<a href="javascript:void(0)"> <!--https://www.mcafeesecure.com/verify?host=medicareusa.com-->
							<img src="<?= bs() ?>front_assets/image/png/McAfee-Secure.png" class="border" style="height: 33px" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container-fluid">
			<?php echo $disclaimer;?>
		</div>
	</div>
</footer>

<!-- Do Not Call -->
<div class="modal fade" id="DoNotCallModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content">
			<?php echo $landing_do_not_call_policy;?>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-red rounded-pill mx-auto text-white px-3">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Privacy Policy -->
<div class="modal fade" id="PrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content">
			<?php echo $landing_privacy_policy;?>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-red rounded-pill mx-auto text-white px-3">CLOSE</button>
			</div>
		</div>
	</div>
</div>

<!-- Licensing & Legal -->
<div class="modal fade" id="LicensingLegal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-scrollable">
		<div class="modal-content">
			<?php echo $landing_licensing_legal;?>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-red rounded-pill mx-auto text-white px-3">Close</button>
			</div>
		</div>
	</div>
</div>
</main>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="<?= bs() ?>front_assets/js/jquery.validate.js"></script>
<script src="<?= bs() ?>front_assets/js/additional-methods.min.js"></script>
<script src="<?= bs() ?>front_assets/js/jquery.inputmask.bundle.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?= bs() ?>front_assets/js/index.js"></script>
<script src="<?= bs() ?>front_assets/js/lander.js"></script>   
<script>
	function makeTimer() {
		var endTime = new Date("08 December 2021 12:00:00 GMT+04:00");			
		endTime = (Date.parse(endTime) / 1000);

		var now = new Date();
		now = (Date.parse(now) / 1000);

		var timeLeft = endTime - now;

		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }

		$("#timer").html("Medicare Annual Enrollment Period ends in "+days+" days, "+hours+" hours, "+minutes+" minutes!");
		var dayArr = days.toString().split('');
		var hrArr = hours.toString().split('');
		var minArr = minutes.toString().split('');
		$("#newtimer").html('<p>Medicare’s Annual Election Ends in:</p> <div class="custom-time"><div><span>0</span><span>'+dayArr+'</span> <h6>Days</h6></div> <div class="colon">:</div> <div><span>'+hrArr[0]+'</span><span>'+hrArr[1]+'</span> <h6>Hours</h6></div> <div class="colon">:</div> <div><span>'+minArr[0]+'</span><span>'+minArr[1]+'</span> <h6>Minutes</h6></div></div>');
		//	$("#days").html(days + "<span> days</span>");
		//	$("#hours").html(hours + "<span> hours</span>");
		//	$("#minutes").html(minutes + "<span> minutes!</span>");
		//	$("#seconds").html(seconds + "<span>Seconds</span>");		
	}

	//	setInterval(function() { makeTimer(); }, 1000);
	$( document ).ready(function() {
		makeTimer();
	});
</script>
<style>
	#timer {
		background: #212975;
		text-align: center;
		color: #fff;
		display: flex;
		padding: 15px 20px;
		justify-content: center;
		font-size: 25px;
		line-height: 26px;
	}

	@media (max-width: 991px) {
		#timer {
			font-size: 20px;
		}
	}

	@media (max-width: 767px) {
		#timer {
			width: 100%;
			display: inline-block;
		}
		#days,
		#hours,
		#minutes {
			display: inline-block;
		}
	}

	@media (max-width: 414px) {
		#timer {
			font-size: 16px;
			line-height: 22px;
		}
	}
</style>
</body>
</html>
