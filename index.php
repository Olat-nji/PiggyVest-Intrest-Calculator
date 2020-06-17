<!DOCTYPE html>
<html lang="en">
<head>
	<title>PiggyVest Intrest Calculator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" id="insta-form" method="post">
				<span class="contact100-form-title">
					Calculate Intrest
				</span>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Service *</span>
					<div>
						<select class="js-select2" name="service">
							<option>Please choose</option>
							<option>Piggybank</option>
							<option>SafeLock</option>
							<option>Target</option>
							<option>Flex</option>
							<option>Flex Dollar</option>
							<option>Investify</option>
							
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
			
				
				<div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
					
					<span
						 class="label-input100 ">PERIOD</span>
						 <br>
						(<span
						 class="label-input100 texte"></span>)
						

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type-time" value="today" checked="checked">
							<label class="label-radio100" for="radio1">
								Today
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type-time" value="thisweek">
							<label class="label-radio100" for="radio2">
								This week
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="type-time" value="thismonth">
							<label class="label-radio100" for="radio3">
								This month
							</label>
						</div>
						
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="type-time" value="thisyear">
							<label class="label-radio100" for="radio3">
								This Year
							</label>
						</div>
					</div>

					<div class="wrap-input100 validate-input bg1" data-validate="Please Type amount">
					<span class="label-input100">Daily Savings *</span>
					<input class="input100" type="number" name="amount" placeholder="Enter amount of daily savings">
				</div>
				
				</div>

			

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		

			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please choose") {
						$('.js-show-service').slideUp();
					}else if($(this).val() == "Piggybank") {
					$('.js-show-service').slideUp();
					$('.texte').text('10% per annum on Piggybank');
					$('.js-show-service').slideDown();
					}else if($(this).val() == "SafeLock") {
						$('.js-show-service').slideUp();
						$('.texte').text('Up to 15.5% per annum on SafeLock');
						$('.js-show-service').slideDown();
					}else if($(this).val() == "Target") {
						$('.js-show-service').slideUp();
						$('.texte').text('10% per annum on Target');
						$('.js-show-service').slideDown();
					}else if($(this).val() == "Flex") {
						$('.js-show-service').slideUp();
						$('.texte').text('10% per annum on Flex');
						$('.js-show-service').slideDown();
					}else if($(this).val() == "Flex Dollar") {
						$('.js-show-service').slideUp();
						$('.texte').text('6% per annum on Flex Dollar');
						$('.js-show-service').slideDown();
					}else if($(this).val() == "Investify") {
						$('.js-show-service').slideUp();
						$('.texte').text('Up to 25% on Investify');
						$('.js-show-service').slideDown();
					}
					
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script>
						jQuery(document).ready(function(){
                          
                        
						jQuery("#insta-form").submit(function(e){
                            
                           
        		 

                                          
								e.preventDefault();
								var formData = jQuery(this).serialize();
                                      
                       $.ajax({
                           
									type:"POST",
									url:"process.php",
									data:formData,
                           
									success: function(response){
									if($.isNumeric(response))
									{	
                                        
             alert('Your intrest is ₦'+response);
									  
									}else
									{
                                  alert (response);
                              
                                        
                                      
  
   
                                        
                                        
                                        //alert(response);
                                         
									
									 }
									
                      }
								});
								return false;
							});
									
							
						});							
							
				
						</script>
</body>
</html>
