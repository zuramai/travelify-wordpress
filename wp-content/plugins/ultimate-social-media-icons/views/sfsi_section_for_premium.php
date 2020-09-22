<style type="text/css">
	.slide{
		width: 100%;
	    border: 1px solid #00C95E;
	    padding: 20px 10px 14px 20px;
	    text-align: center;
	    float: left;
	    background: #fff;
	    margin-bottom: 25px;
	}
	#sectionPremium{
		margin: 50px auto;
    	text-align: center;
    	width: 55%;
	}
	.premiumButtonsContainer {
	    float: right;
	    width: 41%;
	}		
	.premiumComponent{
	    width: 55%;
	    padding: 12px;
	    display: inline-block;
	    text-align: center;
	    font-size: 25px;
	    line-height: 28px;
	    cursor: pointer;
	    float: left;
		min-height: 74px;	    
	}
	.premiumTxt {
	    line-height: 40px;
	    color: #000;
	    font-weight: 500;
		font-size: 30px;	    
	}	
	.premiumSection1 .premiumTxt {
	    width: 100%;
	    text-align: center;
		font-size: 39px;
		line-height: 50px;    		    
	}
	.premiumSection2 .premiumTxt{
		vertical-align: middle;
	    text-align: center;
	    min-height: 80px;
	    line-height: 80px;
	    color: #fff;
	    font-weight: 500;
	    letter-spacing: 2px;	 	
	}
	.premiumSection2 {
	    vertical-align: top;
		background-image: url(<?php echo SFSI_PLUGURL; ?>images/yesBtnBg.png);
		background-repeat: no-repeat;		
		width: 41%;
		padding: 18px 12px 24px 12px;		    
	}
	.premiumSection3 {
		vertical-align: top;
		background-image: url(<?php echo SFSI_PLUGURL; ?>images/noBtnBg.png);
		background-repeat: no-repeat;		
		width: 41%;
    	padding-top: 34px;
    	margin-left: 9px;	    
	}
	#premiumSlide3 .premiumSection1{
		width: 100%;
	}
	.premiumSection3 .premiumTxt{
		color: #fff;
	}
	#premiumSlide1 .premiumSection1 .premiumTxt:nth-child(1){
		font-size: 39px;
	}		
	#premiumSlide1 .premiumSection3 .premiumTxt:nth-child(2){
		line-height: 21px;
	}	
	.premiumSection3 .premiumTxt:nth-child(2),.premiumSection3 .premiumTxt:nth-child(3){
    	font-size: 16px;
    	line-height: 20px;
	}
	.premFrTxt{
		cursor: default;
	}
	#premiumSlide1 .premFrTxt{
		padding-top: 2px;
	}
	.txtb{
		font-size 39px;
	}
	#premiumSlide2 .premiumSection3 {
		padding-top:20px;
		padding-bottom: 20px;		
	}
	.show{
		display: block;
	}
	.hide{
		display: none;
	}
	.premiumFeatures {
		float: left;
		margin-top: 15px;
		margin-left: 48px;
		width: 64%;
	}
		.premiumFeatures ul{
		    float: left;
		    width: 45%;
		    text-align: left;
		    line-height: 38px;
		    font-size: 23px;
		    list-style-image: url(<?php echo SFSI_PLUGURL; ?>images/tick.png);
		    font-weight: 600;
		    color: #000;
		    margin-right: 27px;
		}
		.premiumFeatures ul li{
			padding-left:4px;
		}
		.premiumFeatures ul:nth-child(2) li:last-child span{
			color: #00b050;
		}
		.premiumImg {
    		float: left;
		}
		.chkbutton{
		    /* float: left; */
		    width: 90%;
		    /* margin-top: 40px; */
		    /* margin-bottom: 20px; */
		    text-align: center;
		    margin: 0px auto;		
		}
	.chkbutton a {
	    width: 98%;
	    background: rgb(0,200,83);
	    float: left;
	    color: white;
	    text-decoration: none;
	    padding: 13px 4px 13px 5px;
	    margin: 24px 0 7px 0;
	    font-weight: 600;
	    letter-spacing: 2px;
	    font-size: 32px;    
	}
	.priceTxt {
	    text-align: center;
	    font-size: 19px;
	    clear: both;	
	}
	.premFrTxt span{
		text-decoration: underline;
	}
	#premiumSlide1 .premFrTxt .premiumTxt:nth-child(2){
		width: 88%;
    	line-height: 24px;
	}
	.premiumImg img {
		width: 70%;
    	margin-top: 6px;
	}
	#premiumSlide3 .premiumSection1 .premiumTxt:first-child span{
		text-decoration: underline;
	}
	.linkPremium{
		cursor: pointer;
	}

	@media screen and (min-width: 360px) and (max-width: 360px){
		.wapper { width: 95%; padding: 0px;}

		#sectionPremium { width: 90%;margin: 50px 5px;}
		.premiumComponent{ width: 88%;}
		.premiumButtonsContainer { float: left;width: 100%;margin-top: 10px;}
		.premiumSection2,.premiumSection3{ width: 39%;}
		#premiumSlide2 .premiumSection1 .premiumTxt { font-size: 22px;line-height: 30px;width: 100%; }
		#premiumSlide1 .premiumSection1 .premiumTxt:nth-child(1) {font-size: 26px;}
		#premiumSlide1 .premFrTxt .premiumTxt:nth-child(2) {width: 78%;line-height: 24px;font-size: 26px;}
		#premiumSlide2 .premiumSection1 {padding-bottom: 0px;}
		#premiumSlide2 .premiumSection1 .premiumButtonsContainer { margin-top: 10px;}				
		.premiumFeatures {  margin-left: 6px;width: 100%;}
		.premiumFeatures ul { width: 60%;float: left;font-size: 18px;margin: 0px auto;}

		#premiumSlide3 .premiumSection1 {width: 89%;}
		#premiumSlide3 .premiumSection1 .premiumTxt { width: 100%;font-size: 30px;line-height: 40px;}
		#premiumSlide3 .premiumSection1 strong { width: 95%;text-align: center;float: left;}
		.priceTxtwidth { width:79%;text-align: center;margin: 0px auto; }
		.chkbutton { width:95%;}
		.priceTxt {  margin: 0 auto;width: 74%;line-height: 23px;font-size: 15px;}
		#premiumSlide3 .premiumButtonsContainer {width: 97% !important;}		
	}


	@media only screen and (min-width: 414px) and (max-width: 736px) and (orientation : landscape) {
		#sectionPremium {   
			width: 90%;
    		margin: 50px 5px;
    	}
		.premiumButtonsContainer {
    		float: left;
    		width: 48%;
		}
		.premiumSection1 {
			width: 53%;
		}
		.premiumSection1 .premiumTxt{
			font-size: 24px;
    		line-height: 39px;
		}
		#premiumSlide1 .premiumSection1 .premiumTxt:nth-child(1) {
		    font-size: 24px;
		}
		#premiumSlide1 .premFrTxt .premiumTxt:nth-child(2) {
		    width: 81%;
		    line-height: 24px;
		}				
		.premiumSection2,.premiumSection3{
			width: 40%;
		}
		.wapper {padding: 15px;}
		
		#premiumSlide1 .premiumSection1, #premiumSlide2 .premiumSection1{
			width: 47%;
		}
		.premiumFeatures{
			margin-left: 6px;
    		width: 58%;
		}
		.premiumFeatures ul{
			width: 49%;font-size: 18px;margin-right: 0px;
		}
		#premiumSlide3 .premiumSection1 .premiumTxt{
			font-size: 34px;
		}
		.priceTxt{
			width: 85%;
    		margin: 0 auto;
    		line-height: 23px;
    		font-size: 14px;			
		}
	}

	@media only screen and (min-width: 414px) and (max-width: 736px) and (orientation : portrait){
		#sectionPremium {   
			width: 90%;
    		margin: 50px 5px;
    	}
		.premiumButtonsContainer {
    		float: left;
    		width: 100%;
		}
		.premiumSection1 {
			width: 53%;
		}
		#premiumSlide1 .premiumSection1 {
			margin-bottom: 10px;
		}
		#premiumSlide3 .premiumSection1{
			width: 86%;
		}
		.premiumSection1 .premiumTxt{
			font-size: 24px;
    		line-height: 39px;
		}
		#premiumSlide1 .premiumSection1 .premiumTxt:nth-child(1) {
		    font-size: 24px;
		}
		#premiumSlide1 .premFrTxt .premiumTxt:nth-child(2) {
		    width: 81%;
		    line-height: 24px;
		}				
		.premiumSection2,.premiumSection3{
			width: 40%;
		}
		.wapper {padding: 15px;}
		
		#premiumSlide1 .premiumSection1, #premiumSlide2 .premiumSection1{
			width: 100%;
		}
		.premiumFeatures{
		    width: 66%;
		    margin: 0px auto;
		    text-align: center;
		    float: none;
		}
		.premiumFeatures ul {
		    width: 100%;
		    font-size: 20px;
		    margin-bottom: 12px;
		    float: left;
		    margin-left: 7px;
		    margin-top: 16px;
		}
		#premiumSlide3 .premiumSection1 .premiumTxt{
			font-size: 29px;
		}
		.priceTxt{
			width: 85%;
    		margin: 0 auto;
    		line-height: 23px;
    		font-size: 14px;			
		}
	}

	/*iPad*/
	@media screen and (min-width: 768px) and (max-width: 1024px){
		#sectionPremium { width: 95%;margin: 50px 5px;}
		.premiumComponent{ width: 50%;}
		.premiumButtonsContainer { float: left;width: 46%;}
		.premiumSection2,.premiumSection3{ width: 38%;}
		#premiumSlide2 .premiumSection1 .premiumTxt { font-size: 26px; }
		#premiumSlide1 .premiumSection1 .premiumTxt:nth-child(1) {
    		font-size: 26px;
		}
		#premiumSlide1 .premFrTxt .premiumTxt:nth-child(2) {
		    width: 83%;
		    line-height: 24px;
		    font-size: 26px;
		}				
		.premiumFeatures { margin-left: 6px;width: 58%;}
		.premiumFeatures ul {width: 50%;float: left;margin-right: 0px;font-size: 18px;}
		#premiumSlide3 .premiumSection1 .premiumTxt { width: 98%;font-size: 30px;}
		#premiumSlide3 .premiumSection1 strong { width: 95%;text-align: center;float: left;}
		.priceTxtwidth { width:79%;text-align: center;margin: 0px auto; }
		.chkbutton {width:95%;}
		.priceTxt {margin: 0 auto;width: 79%;}
		#premiumSlide3 .premiumButtonsContainer {width: 97% !important;}

		.wapper { padding: 28px; }	
	}

	@media screen and (min-width: 768px) and (max-width: 1024px) and (orientation : landscape) {
		#sectionPremium {
		    width: 90% !important;
		}
		.premiumButtonsContainer {
			width: 40%;
		}
		#premiumSlide1  .premiumSection1 {
			width: 53% !important;
		}
		.premiumFeatures {
		    width: 62% !important;
		}
		#premiumSlide3 .premiumButtonsContainer {
		    width: 100% !important;
		}
		#premiumSlide3 .premiumSection1 {
		    width: 100%;
		}								
	}

	/*iPad Pro*/
	@media screen and (min-width: 1024px) and (max-width: 1366px){
		#sectionPremium { width: 85%;margin: 50px auto;}
		.premiumComponent{ width: 48%;}
		.premiumButtonsContainer { float: left;}
		.premiumSection2,.premiumSection3{ width: 40%;}
		.premiumFeatures { margin-left: 6px;width: 58%;}
		.premiumFeatures ul {width: 50%;float: left;margin-right: 0px;font-size: 19px;}
		#premiumSlide3 .premiumSection1 .premiumTxt { width: 94%}
		#premiumSlide3 .premiumSection1 strong { width: 95%;text-align: center;float: left;}
		.priceTxtwidth { width:79%;text-align: center;margin: 0px auto; }
		.chkbutton {width:95%;}
		.priceTxt {margin: 0 auto;width: 79%;}
	}
	@media screen and (min-width: 1024px) and (max-width: 1366px) and (orientation : landscape) {
		#sectionPremium {
		    width: 80%;
		}
		.premiumButtonsContainer {
		    float: right;
		}
		.premiumComponent {
		    width: 56%;
		}
		#premiumSlide3 .premiumSection1 {
			width: 95%;
		}
		.premiumFeatures{
			width: 69%;
		}
		.premiumSection2,.premiumSection3{ width: 38%;}
		.premiumFeatures ul {
		    width: 50%;
		    float: left;
		    margin-right: 0px;
		    font-size: 23px;
		    line-height: 40px;
		}				
	}				
</style>

<script type="text/javascript">

	jQuery(document).ready(function(){
		
		jQuery("#premiumSlide1 .premiumSection2 .premiumTxt").click(function(){
			jQuery("#premiumSlide1").removeClass("show");
			jQuery("#premiumSlide1").addClass("hide");			
			jQuery("#premiumSlide2").removeClass("hide");
			jQuery("#premiumSlide2").addClass("show");			
		});

		jQuery("#premiumSlide1 .premiumSection3 .premiumTxt").click(function(){
			jQuery("#premiumSlide1").removeClass("show");
			jQuery("#premiumSlide1").addClass("hide");			
			jQuery("#premiumSlide3").removeClass("hide");
			jQuery("#premiumSlide3").addClass("show");

			jQuery("#premiumSlide3 .premiumSection1 .premiumTxt:first-child").text("Then make your site much better with our");			
		});

		jQuery("#premiumSlide2 .premiumSection2 .premiumTxt").click(function(){
			jQuery("#premiumSlide2").removeClass("show");
			jQuery("#premiumSlide2").addClass("hide");			
			jQuery("#premiumSlide3").removeClass("hide");
			jQuery("#premiumSlide3").addClass("show");
		});

		jQuery("#premiumSlide2 .premiumSection3 .premiumTxt").click(function(){
			jQuery("#premiumSlide2").removeClass("show");
			jQuery("#premiumSlide2").addClass("hide");			
			jQuery("#premiumSlide3").removeClass("hide");
			jQuery("#premiumSlide3").addClass("show");

			jQuery("#premiumSlide3 .premiumSection1 .premiumTxt:first-child").html("Then do <span>yourself</span> a favor by getting our");				
		});

		jQuery(".linkPremium").click(function(){
			window.open('https://www.ultimatelysocial.com/usm-premium/?utm_source=usmi_settings_page&utm_campaign=do_you_like_your_website&utm_medium=banner','_blank');
		});	
	});
</script>	

<div id="sectionPremium">

	 <div id="premiumSlide1" class="show slide">

		<div class="premiumSection1 premiumComponent premFrTxt">
			<div class="premiumTxt">Do you love <img src="<?php echo SFSI_PLUGURL; ?>images/heart.png"></div>
			 <div class="premiumTxt"><span>your</span> website?</div>
		</div>

		<div class="premiumButtonsContainer">

			<div class="premiumSection2 premiumComponent"><div class="premiumTxt">Yes!</div></div>

			<div class="premiumSection3 premiumComponent">
				<div class="premiumTxt">No,</div>			
				<div class="premiumTxt">it's horrible</div>						
			</div>
		</div>

	 </div>

	 <div id="premiumSlide2" class="hide slide">

		<div class="premiumSection1 premiumComponent premFrTxt">
			<div class="premiumTxt txtb">And things you love should</div>
			<div class="premiumTxt"><strong>only get the best,</strong> right?</div>
		</div>

		<div class="premiumButtonsContainer">
			<div class="premiumSection2 premiumComponent"><div class="premiumTxt">Yes!</div></div>

			<div class="premiumSection3 premiumComponent">
				<div class="premiumTxt">No,</div>			
				<div class="premiumTxt">it’s only about</div>
				<div class="premiumTxt">me me me</div>						
			</div>			
		</div>
	 	
	 </div>

	 <div id="premiumSlide3" class="hide slide">

		<div class="premiumSection1 premiumComponent premFrTxt">
			<div class="premiumTxt">Then give your site a treat with our</div>
			<div class="premiumTxt"><strong>premium plugin</strong></div>
		</div>

		<div class="premiumButtonsContainer" style="width: 100%;">			
			<div class="premiumImg"><img src="<?php echo SFSI_PLUGURL; ?>images/ultimate-icon.png" /></div>
			<div class="premiumFeatures">
				<ul>
					<li>Better design</li>
					<li>Faster loading</li>
					<li>Mobile optimized</li>
					<li>Better placement</li>															
				</ul>

				<ul>
					<li>More platforms</li>
					<li>Friendly support</li>
					<li>More shares</li>
					<li>…and <span class="linkPremium">so much more</span></li>															
				</ul>				
			</div>			
		</div>

			<div class="premiumTxt chkbutton"><a href="https://www.ultimatelysocial.com/usm-premium/?utm_source=usmi_settings_page&utm_campaign=do_you_like_your_website&utm_medium=banner" target="_blank">Check it out ></a></div>
			<div class="premiumTxt priceTxt">To make it available for all people pricing is <strong>super-fair</strong>, starting at 15.98 USD only</div>
	 </div>
</div>	 



<!-- <div class="pop-overlay read-overlay" >
    <div class="pop_up_box sfsi_pop_up"  >
        <img src="<?php echo SFSI_PLUGURL; ?>images/close.jpg" id="close_popup" class="sfsicloseBtn" />
        <h4 id="readmore_text">Note: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h4>
</div>
</div> -->