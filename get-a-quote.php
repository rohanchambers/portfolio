<?php
$author = 'Rohan Chambers';
$browserDescription = 'This website is primarily designed to be an online portfolio presence for Rohan Chambers, a freelance Web Designer/Developer based in London, UK.';
$browserKeywords = 'rohan chambers, rohan, chambers, freelance front end developer, front end developer, web designer, web development, xhtml, css, html5, css3, jquery, w3c, web standards';
$browserTitle = 'Get a quote | RohanChambers.net';
$classBody = 'get-a-quote';
$thisPage='contact';
$ogtags = 'http://www.rohanchambers.net/img/global/fb_logo.png'
?>
<?php include("includes/php/header.php"); ?>
		<div id="content" class="clearfix">
			<section>
				<div id="left-col">				
		            <!-- The Quote form starts here-->
		            <?php
		                 $error             = '';
		                 $CompanyName       = '';
		                 $FullName          = '';
		                 $Email             = '';
						 $Skype             = '';
		                 $PhoneNumber       = '';
		                 $Country           = '';
		
		                 $DateOnline        = '';
		                 $DateFixedFlexible = '';
		                 $SiteDesired       = '';
		                 $Budget            = '';
		                 $checkFeatures     = '';
		                 $DescribeProject   = '';
		                 $PurposeSite       = '';
		                 $NumberPages       = '';
		                 $NumberProducts    = '';
		                 $ContentMaterial   = '';
		                 $WebsitesFan       = '';
		                 $Competitors       = '';
		                 $CommentProject    = '';
		
		                 $CurrentWebsite    = '';
		                 $DomainInfo        = '';
		                 $HostInfo          = '';
		                 $CommentHost       = '';
		
		
		                 $spamcheck = ''; // Spam check
		
		
		            if(isset($_POST['send']))
		            {
		
		            //Setting up Variables
		                 $CompanyName       = $_POST['CompanyName'];
		                 $FullName          = $_POST['FullName'];
		                 $Email             = $_POST['Email'];
		                 $Skype             = $_POST['Skype'];
		                 $PhoneNumber       = $_POST['PhoneNumber'];
		                 $Country           = $_POST['Country'];
		
		                 $DateOnline        = $_POST['DateOnline'];
		                 $DateFixedFlexible = $_POST['DateFixedFlexible'];
		                 $SiteDesired       = $_POST['SiteDesired'];
		                 $Budget            = $_POST['Budget'];
		                 //features
		                 if (isset($_POST["Features"]) && is_array($_POST["Features"])
		                 && count($_POST["Features"]) > 0)
		                 {
		                   foreach($_POST['Features']  as  $checkFeatures)  {
		                      $Features_msg .= "$checkFeatures\n";
		                   }
		                 } // END features
		
		                 $DescribeProject   = $_POST['DescribeProject'];
		                 $PurposeSite       = $_POST['PurposeSite'];
		                 $NumberPages       = $_POST['NumberPages'];
		                 $NumberProducts    = $_POST['NumberProducts'];
			                 if (trim($NumberProducts)  != '') {
								$NumberProducts_msg = '- I will sell '.$NumberProducts.' on my website';
							} else {
								$NumberProducts_msg = '';
							}
		                 //Content Material
		                 if (isset($_POST["ContentMaterial"]) && is_array($_POST["ContentMaterial"])
		                 && count($_POST["ContentMaterial"]) > 0)
		                 {
		                   foreach($_POST['ContentMaterial']  as  $checkContentMaterial)  {
		                      $ContentMaterial_msg .= "$checkContentMaterial\n";
		                   }
		                 } //END Content Material
		
		                 $WebsitesFan       = $_POST['WebsitesFan'];
		                 $Competitors       = $_POST['Competitors'];
		                 $CommentProject    = $_POST['CommentProject'];
		
		                 $CurrentWebsite    = $_POST['CurrentWebsite'];
		                 $DomainInfo        = $_POST['DomainInfo'];
		                 $HostInfo          = $_POST['HostInfo'];
		                 $CommentHost       = $_POST['CommentHost'];
		
		
		                 $spamcheck = $_POST['spamcheck'];
		
		                // Generate Error Message if a field is left blank
		                if(trim($CompanyName) == '')
		                {
		                    $error = '<div class="errormsg">Please enter your Company Name!</div>';
		                }
		                    else if(trim($FullName) == '')
		                {
		                    $error = '<div class="errormsg">Please enter your Full Name!</div>';
		                }
		            	    else if(trim($Email) == '')
		                {
		                    $error = '<div class="errormsg">Please enter your email address!</div>';
		                }
		                else if(!isEmail($Email))
		                {
		                    $error = '<div class="errormsg">You have enter an invalid e-mail address. Please, try again!</div>';
		                }
				        else if(trim($PhoneNumber) == '')
				        {
				        	$error = '<div class="errormsg">Please enter your phone number!</div>';
				        }
				        else if(!preg_match("/^[0-9]{6,}$/",$PhoneNumber))
				        {
				        	$error = '<div class="errormsg">Please enter a valid phone number!</div>';
				        }
		            	else if(trim($Country) == '')
		                {
		                    $error = '<div class="errormsg">Please enter your Country!</div>';
		                }
		          	    else if(trim($spamcheck) == '')
		                {
		                    $error = '<div class="errormsg">Please enter the number for Spam Check!</div>';
		                }
		          	    else if(trim($spamcheck) != '5')
		                {
		                     $error = '<div class="errormsg">Spam Check: The number you entered is not correct! 2 + 3 = ??</div>';
		                }
		                if($error == '')
		                {
		
		                    // the email will be sent here
		                    // make sure to change this to be your e-mail !!!
		                    $to      = "info@rohanchambers.net"; 
		
		                    // the email subject
		                    $subject = '[Questionnaire] : from ' . $FullName;
		
		                    // the mail message
		                    $msg     = "\r\n\n***Personal Datas***";
							$msg    .= "\r\n\nFrom: $FullName";
							$msg    .= "\r\nEmail: $Email";
							$msg    .= "\r\nCompany Name: $CompanyName ";
							$msg    .= "\r\nPhone Number: $PhoneNumber ";
							$msg    .= "\r\nSkype Username: $Skype ";
							$msg    .= "\r\nCountry: $Country ";
							$msg    .= "\r\n\n***Project Information:***";
							$msg    .= "\r\n\n- Launch Date: $DateOnline (Date is $DateFixedFlexible)";
							$msg    .= "\r\n\n- Site Desired: $SiteDesired ";
							$msg    .= "\r\n\n- Budget: $Budget ";
							$msg    .= "\r\n\n- Project: \r\n$DescribeProject";
							$msg    .= "\r\n\n- Purpose of the site: \r\n$PurposeSite ";
							$msg    .= "\r\n\n- Number of  pages: \r\n$NumberPages ";
							$msg    .= "\r\n\n- Features wanted: \r\n$Features_msg";
							$msg    .= "\r\n\n  $NumberProducts_msg";
							$msg    .= "\r\n\n- Content/materials provided: \r\n$ContentMaterial_msg ";
							$msg    .= "\r\n\n- Inspiration: \r\n$WebsitesFan ";
							$msg    .= "\r\n\n- Competitors: \r\n$Competitors ";
							$msg    .= "\r\n\n- Additional Comments: \r\n$CommentProject ";
							$msg    .= "\r\n\n***Web Hosting Information***";
							$msg    .= "\r\n\n- URL's Web site: $CurrentWebsite. ";
							$msg    .= "\r\n\n- Domain Information:  \r\n$DomainInfo ";
							$msg    .= "\r\n\n- Website Hosting Information: \r\n$HostInfo. ";
							$msg    .= "\r\n\n\n- Additional Comments: \r\n$CommentHost";
		
		                    mail($to, $subject, $msg, "From: $Email\r\nReply-To: $Email\r\nReturn-Path: $Email\r\n");
		            ?>
		
		                  <h1>Congratulations!!</h1>
		                  <p>Thank you <b><?=$FullName;?></b>, your message has been sent! <br />I will get back to you as soon as possible.</p>
		                  <p>Please click <a class="content" href="index.php">here</a> to go back to the home page.</p>
		                  <!--End Message Sent-->
		
		            <?php
		                }
		            }
		            if(!isset($_POST['send']) || $error != '')
		            {
		            ?>
		
		              <!-- Start Questionnaire -->
		              <form method="post" id="get-quote-form" action="#">
		              <div id="intro-content">
			              <h1>Get a Quote for your Project</h1>
			              <p>Please fill in the questionnaire below with as many details as you can so that I can understand what type/scale of a 
			              project you require and I can then provide you with an effective quote.</p>
			              <p>If you don't have the time to fill this out and just want to get in touch please send me a message from the <a href="contact.php">contact</a> page.</p>
		    		  </div>
		                <!--Error Message-->
		                <?=$error;?>
		    
		                    <h2>Personal Info</h2>
		                       <p>(Required fields <span class="required">*</span>)</p>
		                       <!-- Company Name -->
		                       <p><label>Company Name <span class="required">*</span></label>
		                       <input type="text" size="40" value="<?=$CompanyName;?>" name="CompanyName" id="q1" /></p>
		                       <!-- Full Name -->
		                       <p><label >Your Full Name: <span class="required">*</span></label>
		                       <input type="text" size="40" value="<?=$FullName;?>" name="FullName" id="q2" /></p>
		                       <!-- Email -->
		                       <p><label >E-mail:<span class="required">*</span></label>
		                       <input type="text" size="40" value="<?=$Email;?>" name="Email" id="q3" /></p>
		                       <!-- Phone -->
		                       <p><label >Phone Number <span class="required">*</span></label>
		                       <input type="text" size="40" value="<?=$PhoneNumber;?>" name="PhoneNumber" id="q4" /></p>
		                       <!-- Country -->
		                       <p><label>Country <span class="required">*</span></label>
		                       <select name="Country" id="q5" >
		                       <option></option>
		                        <option>United Kingdom</option>
		                        <option>United States</option>
		                        <option>France</option>
		                        <option>Germany</option>
		                        <option>Spain</option>
		                        <option>Abkhazia</option>
		                        <option>Afghanistan</option>
		                        <option>United Kingdom Akrotiri and Dhekelia</option>
		                        <option>Aland</option>
		                        <option>Albania</option>
		                        <option>Algeria</option>
		                        <option>American Samoa</option>
		                        <option>Andorra</option>
		                        <option>Angola</option>
		                        <option>Anguilla</option>
		                        <option>Antigua and Barbuda</option>
		                        <option>Argentina Argentina</option>
		                        <option>Armenia</option>
		                        <option>Aruba</option>
		                        <option>United Kingdom Ascension Island</option>
		                        <option>Australia</option>
		                        <option>Austria</option>
		                        <option>Azerbaijan</option>
		                        <option>The Bahamas</option>
		                        <option>Bahrain</option>
		                        <option>Bangladesh</option>
		                        <option>Barbados</option>
		                        <option>Belarus</option>
		                        <option>Belgium</option>
		                        <option>Belize</option>
		                        <option>Benin</option>
		                        <option>Bermuda</option>
		                        <option>Bhutan</option>
		                        <option>Bolivia</option>
		                        <option>Bosnia and Herzegovina</option>
		                        <option>Botswana</option>
		                        <option>Brazil</option>
		                        <option>Brunei</option>
		                        <option>Bulgaria</option>
		                        <option>Burkina Faso</option>
		                        <option>Burundi</option>
		                        <option>Cambodia</option>
		                        <option>Cameroon</option>
		                        <option>Canada</option>
		                        <option>Cape Verde</option>
		                        <option>Cayman Islands</option>
		                        <option>Central African Republic</option>
		                        <option>Chad</option>
		                        <option>Chile</option>
		                        <option>People's Republic of China</option>
		                        <option>Republic of China</option>
		                        <option>Christmas Island</option>
		                        <option>Cocos (Keeling) Islands</option>
		                        <option>Colombia</option>
		                        <option>Comoros</option>
		                        <option>Congo</option>
		                        <option>Cook Islands</option>
		                        <option>Costa Rica</option>
		                        <option>Cote d'Ivoire</option>
		                        <option>Croatia</option>
		                        <option>Cuba</option>
		                        <option>Cyprus</option>
		                        <option>Czech Republic</option>
		                        <option>Denmark</option>
		                        <option>Djibouti</option>
		                        <option>Dominica</option>
		                        <option>Dominican Republic</option>
		                        <option>Ecuador</option>
		                        <option>Egypt</option>
		                        <option>El Salvador</option>
		                        <option>Equatorial Guinea</option>
		                        <option>Eritrea</option>
		                        <option>Estonia</option>
		                        <option>Ethiopia</option>
		                        <option>Falkland Islands</option>
		                        <option>Faroe Islands</option>
		                        <option>Fiji</option>
		                        <option>Finland</option>
		                        <option>France</option>
		                        <option>French Polynesia</option>
		                        <option>Gabon</option>
		                        <option>The Gambia</option>
		                        <option>Georgia</option>
		                        <option>Germany</option>
		                        <option>Ghana</option>
		                        <option>Gibraltar</option>
		                        <option>Greece</option>
		                        <option>Greenland</option>
		                        <option>Grenada</option>
		                        <option>Guam</option>
		                        <option>Guatemala</option>
		                        <option>Guernsey</option>
		                        <option>Guinea</option>
		                        <option>Guinea-Bissau</option>
		                        <option>Guyana Guyana</option>
		                        <option>Haiti Haiti</option>
		                        <option>Honduras</option>
		                        <option>Hong Kong</option>
		                        <option>Hungary</option>
		                        <option>Iceland</option>
		                        <option>India</option>
		                        <option>Indonesia</option>
		                        <option>Iran</option>
		                        <option>Iraq</option>
		                        <option>Ireland</option>
		                        <option>Israel</option>
		                        <option>Italy</option>
		                        <option>Jamaica</option>
		                        <option>Japan</option>
		                        <option>Jersey</option>
		                        <option>Jordan</option>
		                        <option>Kazakhstan</option>
		                        <option>Kenya</option>
		                        <option>Kiribati</option>
		                        <option>North Korea</option>
		                        <option>South Korea</option>
		                        <option>Kosovo</option>
		                        <option>Kuwait</option>
		                        <option>Kyrgyzstan</option>
		                        <option>Laos</option>
		                        <option>Latvia</option>
		                        <option>Lebanon</option>
		                        <option>Lesotho</option>
		                        <option>Liberia</option>
		                        <option>Libya</option>
		                        <option>Liechtenstein</option>
		                        <option>Lithuania</option>
		                        <option>Luxembourg</option>
		                        <option>Macau</option>
		                        <option>Macedonia</option>
		                        <option>Madagascar</option>
		                        <option>Malawi</option>
		                        <option>Malaysia</option>
		                        <option>Maldives</option>
		                        <option>Mali</option>
		                        <option>Malta</option>
		                        <option>Marshall Islands</option>
		                        <option>Mauritania</option>
		                        <option>Mauritius</option>
		                        <option>Mayotte</option>
		                        <option>Mexico</option>
		                        <option>Micronesia</option>
		                        <option>Moldova</option>
		                        <option>Monaco</option>
		                        <option>Mongolia</option>
		                        <option>Montenegro</option>
		                        <option>Montserrat</option>
		                        <option>Morocco</option>
		                        <option>Mozambique</option>
		                        <option>Myanmar</option>
		                        <option>Nagorno-Karabakh</option>
		                        <option>Namibia</option>
		                        <option>Nauru</option>
		                        <option>Nepal</option>
		                        <option>Netherlands</option>
		                        <option>Netherlands Antilles</option>
		                        <option>New Caledonia</option>
		                        <option>New Zealand</option>
		                        <option>Nicaragua</option>
		                        <option>Niger</option>
		                        <option>Nigeria</option>
		                        <option>Niue</option>
		                        <option>Norfolk Island</option>
		                        <option>Turkish Republic of Northern Cyprus</option>
		                        <option>Northern Mariana</option>
		                        <option>Norway</option>
		                        <option>Pakistan</option>
		                        <option>Palau</option>
		                        <option>Palestine</option>
		                        <option>Panama</option>
		                        <option>Papua New Guinea</option>
		                        <option>Paraguay</option>
		                        <option>Peru</option>
		                        <option>Philippines</option>
		                        <option>Pitcairn Islands</option>
		                        <option>Poland</option>
		                        <option>Portugal</option>
		                        <option>Transnistria Pridnestrovie</option>
		                        <option>Puerto Rico</option>
		                        <option>Qatar</option>
		                        <option>Romania</option>
		                        <option>Russia</option>
		                        <option>Rwanda</option>
		                        <option>Saint Barthelemy</option>
		                        <option>Saint Helena</option>
		                        <option>Saint Kitts and Nevis</option>
		                        <option>Saint Lucia</option>
		                        <option>Saint Martin</option>
		                        <option>Saint Pierre and Miquelon</option>
		                        <option>Saint Vincent and the Grenadines</option>
		                        <option>Samoa</option>
		                        <option>San Marino</option>
		                        <option>S?o Tom? and Pr?ncipe</option>
		                        <option>Saudi Arabia</option>
		                        <option>Senegal</option>
		                        <option>Serbia</option>
		                        <option>Seychelles</option>
		                        <option>Sierra Leone</option>
		                        <option>Singapore</option>
		                        <option>Slovakia</option>
		                        <option>Slovenia</option>
		                        <option>Solomon Islands</option>
		                        <option>Somalia</option>
		                        <option>Somaliland</option>
		                        <option>South Africa</option>
		                        <option>South Ossetia</option>
		                        <option>Spain</option>
		                        <option>Sri Lanka</option>
		                        <option>Sudan</option>
		                        <option>Suriname</option>
		                        <option>Svalbard</option>
		                        <option>Swaziland</option>
		                        <option>Sweden</option>
		                        <option>Switzerland</option>
		                        <option>Syria</option>
		                        <option>Tajikistan</option>
		                        <option>Tanzania</option>
		                        <option>Thailand</option>
		                        <option>Timor-Leste</option>
		                        <option>Togo</option>
		                        <option>Tokelau</option>
		                        <option>Tonga</option>
		                        <option>Trinidad and Tobago</option>
		                        <option>Tristan da Cunha</option>
		                        <option>Tunisia</option>
		                        <option>Turkey</option>
		                        <option>Turkmenistan</option>
		                        <option>Turks and Caicos Islands</option>
		                        <option>Tuvalu</option>
		                        <option>Uganda</option>
		                        <option>Ukraine</option>
		                        <option>United Arab Emirates</option>
		                        <option>United Kingdom</option>
		                        <option>United States</option>
		                        <option>Uruguay</option>
		                        <option>Uzbekistan</option>
		                        <option>Vanuatu</option>
		                        <option>Vatican City</option>
		                        <option>Venezuela</option>
		                        <option>Vietnam</option>
		                        <option>British Virgin Islands</option>
		                        <option>US Virgin Islands</option>
		                        <option>Wallis and Futuna</option>
		                        <option>Western Sahara</option>
		                        <option>Yemen</option>
		                        <option>Zambia</option>
		                        <option>Zimbabwe</option>
		                       </select></p>
		    
		                       <p><strong>Optional:</strong></p>
		                       <!-- Skype Username -->
		                       <p><label >Skype Username:</label>
		                       <input type="text" size="40" value="<?=$Skype;?>" name="Skype" id="q3_skype"  /></p>
		    
		                        <br class="endOfSection" />
		    
		                      	<h2>Describe your project</h2>
		                        <!-- Launch Date -->
		                        <p><label>Launch date <small>(e.g. 08/05/2008)</small> </label>
		                        <input type="text" size="40" value="<?=$DateOnline;?>" name="DateOnline" id="q6" /></p>
		                        <!-- Date fixed or Flexible -->
		                        <p><label>Is your launch date fixed or flexible? </label>
		                        <select name="DateFixedFlexible" id="q6bis" >
		                        <option></option>
		                            <option>Fixed</option>
		                            <option>Flexible</option>
		                        </select></p>
		                        <!-- Site desired -->
		                        <p><label>Site desired</label>
		                        <select name="SiteDesired" id="q7" >
		                        <option></option>
		                            <option>Brand new Site</option>
		                            <option>Re-design of an existing website</option>
		                            <option>Maintenance or upgrade</option>
		                            <option>Template Design only</option>
		                            <option>PSD to (X)HTML/CSS Conversion</option>
		                            <option>Other, contact me.</option>
		                        </select></p>
		                        <!-- Budget -->
		                        <p><label>Project Budget</label>
		                        <select name="Budget" id="q8" >
		                        <option></option>
		                            <option>&pound;300 - &pound;500</option>
		                            <option>&pound;500 - &pound;1000</option>
		                            <option>&pound;1000 - &pound;2500</option>
		                            <option>&pound;2500 - &pound;5000</option>
		                            <option>&pound;5000 - &pound;10,000</option>
		                            <option>+&pound;10,000</option>
		                            <option>Other. Please, contact me.</option>
		                        </select></p>
		                        <!-- Project description -->
		                        <p><label>Describe briefly your dream website. <small>(e.g. Number of columns, color...)</small></label>
		                        <textarea cols="40" rows="4" name="DescribeProject" id="q9" ></textarea></p>
		                        <!-- Purpose of the site -->
		                        <p><label>What is the primary purpose of the site? <small>(e.g. To make a sell, to make an inquiry, to show your portfolio...)</small></label>
		                        <textarea cols="40" rows="4" name="PurposeSite" id="q10" ></textarea></p>
		                        <!-- Number of pages -->
		                        <p><label>How many pages are required? Could you list them all? <small>e.g. Home, About, Portfolio, Contact...</small></label>
		                        <textarea cols="40" rows="4" name="NumberPages" id="q11" ></textarea></p>
		                        <!-- Features -->
		                        <p><label>What features do you want on your website?</label></p>
		                        <div class="fright">                                        
		                        <label><input name="Features[]" type="checkbox" value="Print / Logo Design" />Print / Logo Design &amp; Branding</label>                       
		                        <label><input name="Features[]" type="checkbox" value="Multi-Media/Flash/Video" />Multi-Media/Flash/Video</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_1" value="E commerce  Shopping Cart" />E-commerce (Shopping Cart)</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_2" value="Content Management System  CMS"   />Content Management System (CMS)</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_3" value="Weblog  Blog"   /> Weblog (Blog)</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_4" value="Image Gallery"   /> Image Gallery</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_5" value="Polls"   /> Polls</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_7" value="Detailed Statistic"   /> Detailed Statistic</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_8" value="Search Functionality"   /> Search Functionality</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_9" value="Newsletter Creation"   /> Newsletter Creation</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_10" value="Event Calendar"   /> Event Calendar</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_11" value="None"   /> None</label>
		                        <label><input type="checkbox" name="Features[]" id="q12_12" value="Other, contact me"   /> Other, contact me.</label>
		                        </div>
		                        <br class="endOfSection" />
		                        <!-- Content - Materials -->
		                        <br />
		                		<p><label>Will you be providing any of the following content or materials?</label></p>
		                        <div class="fright">
		                        <label><input type="checkbox" name="ContentMaterial[]" id="q14_1" value="No - We need help with every aspect of our site"   /> No - We need help with every aspect of our site</label>
		                        <label><input type="checkbox" name="ContentMaterial[]" id="q14_2" value="No - But you can use existing Brochures/Literatures to write the content"   /> No - But you can use existing Brochures/Literatures to write the content</label>
		                        <label><input type="checkbox" name="ContentMaterial[]" id="q14_3" value="Yes - We will provide copy/text for our site"   /> Yes - We will provide copy/text for our site</label>
		                        <label><input type="checkbox" name="ContentMaterial[]" id="q14_4" value="Yes - We will provide images/graphics"   /> Yes - We will provide images/graphics</label>
		                        <label><input type="checkbox" name="ContentMaterial[]" id="q14_5" value="Yes - We will provide the Logo of our company"   /> Yes - We will provide the Logo of our company</label>
		                        <label><input type="checkbox" name="ContentMaterial[]" id="q14_6" value="Yes - We will provide video/music"   /> Yes - We will provide video/music</label>
		                        <label><input type="checkbox" name="ContentMaterial[]" id="q14_7" value="Yes - We will provide other kind of media/files"   /> Yes - We will provide other kind of media/files</label>
		                        <label><input type="checkbox" name="ContentMaterial[]" id="q14_8" value="Not Applicable"   /> Not Applicable</label>
		                        <label><input type="checkbox" name="ContentMaterial[]" id="q14_9" value="Other - Please, contact me"   /> Other - Please, contact me</label>
		                        </div>
		                        <br class="endOfSection" />
		                        <!-- Inspiration -->
		          				<p><label>URL of Web sites you like <br /><small>e.g. http://site.com</small></label>
		                        <textarea cols="40" rows="3" name="WebsitesFan" id="q15"></textarea></p>
		                        <!-- Competitors -->
		                        <p><label>Competitors URL  <br /><small>e.g. http://competitor.com</small></label>
		                        <textarea cols="40" rows="3" name="Competitors" id="q16"></textarea></p>
		                        <!-- Additional Comments -->
		                        <p><label>Additional Comments</label>
		                        <textarea cols="40" rows="3" name="CommentProject" id="q17" ></textarea></p>
		    
		                        <br class="endOfSection" />
		    
		                       <h2>Web hosting information</h2>
		                       <!-- Website url -->
		                       <p><label >Current Web site URL <br /><small>(if applicable)</small></label>
		                       <input type="text" size="40" value="<?=$CurrentWebsite;?>" name="CurrentWebsite" id="q18"  /></p>
		                       <!-- Domain Information -->
		                       <p><label>Domain Information</label>
		                       <select name="DomainInfo" id="q19" >
		                       <option></option>
		                          <option>Need to Register a Domain</option>
		                          <option>Already have a domain</option>
		                        <option>Don't know, contact me</option>
		                          <option>Not Appicable</option>
		                       </select></p>
		                       <!-- Website Hosting Information -->
		                       <p><label>Website Hosting Information</label>
		                       <select name="HostInfo" id="q20" >
		                       <option></option>
		                        <option>Need help me to find a host</option>
		                        <option>Already have a Host </option>
		                        <option>Don't know, contact me</option>
		                        <option>Not Applicable</option>
		                       </select></p>
		                       <!-- Additional Comments -->
		                       <p><label>Additional Comments</label>
		                       <textarea cols="40" rows="3" name="CommentHost" id="q21" ></textarea></p>
		    
		                        <br class="endOfSection" />
		    
		                        <h2>You are almost done!</h2>
		                        <p>Fill the field below to prevent Spams and click the 'submit' button to email the form to me.<br /><br /></p>
		                        <!-- Spam check -->
		                        <p><label>Answer the math Question: <b>2 + 3= </b></label>
		                        <input name="spamcheck" type="text" class="box" id="spamcheck" size="4" value="<?=$spamcheck;?>" /></p>
		    
		                        <br class="endOfSection" />
		                        <!--Error Message-->
		                        <?=$error;?>
		                <input name="send" type="submit" id="send" class="buttonSubmit" value="" title="Submit" />
		              </form>
		    
		              <!-- E-mail verification. Do not modify the code below this line -->
		                <?php }
		                    function isEmail($email){
		                        return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
		                    }
		                ?>
		              <!-- END QUOTE FORM -->				
				</div>	
			</section><!-- /section -->						
		</div><!-- /content -->
<?php include("includes/php/footer.php"); ?>