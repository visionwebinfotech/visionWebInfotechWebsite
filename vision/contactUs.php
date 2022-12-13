 <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
						<div id="error-message" class="text-danger"></div>
						<div id="success-message" class="text-success"></div>
                        <h3>Contact With Us</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><!-- id="contactForm" novalidate <form action="enquiry_form_controller.php" method="post" >--->
                    
					 <form id="addForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your First Name *" id="first_name" name="first_name" required placeholder="Please enter your name.">
									<span id="error_first_name" class="text-danger"></span>
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Last Name *" id="last_name" name="last_name" required data-validation-required-message="Please enter your last name.">
									<span id="error_last_name" class="text-danger"></span>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email_id" name="email_id" required data-validation-required-message="Please enter your email address.">
									<span id="error_email_id" class="text-danger"></span>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="mobile_number" name="mobile_number" required data-validation-required-message="Please enter your phone number.">
                                   <span id="error_mobile_number" class="text-danger"></span>
								   <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
									<span id="error_message" class="text-danger"></span>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
								<input type="submit" id="save-button" class="btn btn-primary" value="Submit">
                               <!-- <button type="submit" class="btn btn-primary">Send Message</button>  onclick="return validate();"-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Contact info</h4>
                        <ul>
                             
                             <li><strong>E-mail : <a href="mailto:visionwebinfotech1@gmail.com" class="">visionwebinfotech1@gmail.com</a></li>
							<li><strong>Mobile : </strong> <a href="tel:9188288 22251">+9188288 22251</a></li>
                            <li><strong>Web : </strong> www.visionwebinfotech.com</li>
							<li><strong>Address : </strong> 201, Matruchaya Soc, M.K.Road, Navpada, Thane West,Pin: 400602</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="footer-contact-info">
                        <h4>Working Hours</h4>
                        <ul>
                            <li><strong>Mon-Sat :</strong> 10 am to 7 pm</li>
                            <li><strong>Sunday :</strong> Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-md-12">
                    <div class="footer-contact-info">
					 <h4>We are here on Google Map <i class="fa fa-map-marker"></i></h4>
					<iframe style="width:100%"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15072.609411035215!2d72.96155682071164!3d19.188546908015528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b918ca9d9177%3A0xff1a2d830fa07983!2sNaupada%2C%20Thane%20West%2C%20Thane%2C%20Maharashtra%20400602!5e0!3m2!1sen!2sin!4v1669115055053!5m2!1sen!2sin" width="600" height="450" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>			
			</div>		
        </div>
       </section> 
	   
	   <form id="addForm">
          First Name : <input type="text" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Last Name : <input type="text" id="lname">
          
        </form>
	   
	   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#save-button").on("click",function(e){
      e.preventDefault();
	 
      var fname = $("#first_name").val();
      var lname = $("#last_name").val();
	  var emailid = $("#email_id").val();
	  var mobileNumber = $("#mobile_number").val();
	  var message = $("#message").val();
	  
      if(fname == "" || lname == "" emailid == "" || mobileNumber == ""){
        $("#error-message").html("All fields are required.").slideDown();
        $("#success-message").slideUp();
      }else{
        $.ajax({
          url: "ajax-insert.php",
          type : "POST",
          data : {first_name:fname, last_name: lname, email_id: emailid, mobile_number: mobileNumber, message: message},
          success : function(data){
            if(data == 1){
              $("#addForm").trigger("reset");
              $("#success-message").html("Data Inserted Successfully.").slideDown();
              $("#error-message").slideUp();
            }else{
              $("#error-message").html("Can't Save Record.").slideDown();
              $("#success-message").slideUp();
            }

          }
        });
      }

    });
  });	
</script>
	  
	   <script>

function validate() {
  if($.trim(jQuery('#first_name').val())==''){
        //document.getElementById("error_first_name").innerHTML="Please Enter First name";
		$("#error_first_name").html("Please Enter First name");
         jQuery('#first_name').focus();
         return false;
     }else if(!isNaN($('#first_name').val())) {
        document.getElementById('error_first_name').innerHTML="Please enter proper name ";
        $('#first_name').focus();
        return false;
    }else{
       document.getElementById("error_first_name").innerHTML="";
         }
		 
		 if($.trim(jQuery('#last_name').val())==''){
        $("#error_last_name").html("Please Enter last name");
         jQuery('#last_name').focus();
         return false;
     }else if(!isNaN($('#last_name').val())) {
        document.getElementById('error_last_name').innerHTML="Please enter proper last name ";
        $('#last_name').focus();
        return false;
    }else{
       document.getElementById("error_last_name").innerHTML="";
         }
		 
		 if($.trim(jQuery('#email_id').val())==''){
        document.getElementById("error_email_id").innerHTML="Please Enter email id";
         jQuery('#email_id').focus();
         return false;
     }else{
       document.getElementById("error_email_id").innerHTML="";
         }
		 
		 if($.trim(jQuery('#mobile_number').val())==''){
        document.getElementById("error_mobile_number").innerHTML="Please Enter Mobile Number";
         jQuery('#mobile_number').focus();
         return false;
     }else if(isNaN($('#mobile_number').val())) {
        document.getElementById('error_mobile_number').innerHTML="Please enter number only ";
        $('#mobile_number').focus();
        return false;
    }else if($("#mobile_number").val().length!=10) {
        document.getElementById('error_mobile_number').innerHTML="Please enter 10 digit Mobile Number";
        $('#mobile_number').focus();
        return false;
    }else{
       document.getElementById("error_mobile_number").innerHTML="";
         }
		 /*
		 if($.trim(jQuery('#message').val())==''){
        document.getElementById("error_message").innerHTML="Please Enter some message";
         jQuery('#message').focus();
         return false;
     }else{
       document.getElementById("error_message").innerHTML="";
         }
		 */
}
</script> 
	   