<?php

/*Main admin layout*/

class Layout
{
	public function Admin_Layout()
	{	
	    $af  = (get_option('twi_twe_pos') == 'af')  ? 'SELECTED' : '';
		$bf  = (get_option('twi_twe_pos') == 'bf')  ? 'SELECTED' : '';	
		$fnb = (get_option('twi_twe_pos') == 'fnb') ? 'SELECTED' : '';
		
		$home = (get_option('twi_twe_home') == true) ? 'CHECKED' : '';
		$page = (get_option('twi_twe_page') == true) ? 'CHECKED' : '';
		$post = (get_option('twi_twe_post') == true) ? 'CHECKED' : '';
		
		$ver  = (get_option('twi_twe_layout') == 'vertical') ? 'SELECTED' : '';
		$hor  = (get_option('twi_twe_layout') == 'horizontal') ? 'SELECTED' : '';
		$none  = (get_option('twi_twe_layout') == 'none') ? 'SELECTED' : '';

		$en  = (get_option('twi_twe_lang') == 'en') ? 'SELECTED' : '';
		$fr  = (get_option('twi_twe_lang') == 'fr') ? 'SELECTED' : '';
		$de  = (get_option('twi_twe_lang') == 'de') ? 'SELECTED' : '';
		$es  = (get_option('twi_twe_lang') == 'es') ? 'SELECTED' : '';
		$jp  = (get_option('twi_twe_lang') == 'ja') ? 'SELECTED' : '';
		
		$twitter = (get_option('twi_twe_account') != '') ? get_option('twi_twe_account') : '';
	    $related = (get_option('twi_twe_rel_account') != '') ? get_option('twi_twe_rel_account') : '';
	    $rel_des = (get_option('twi_twe_rel_des') != '') ? get_option('twi_twe_rel_des') : '';
		
		$custom     = (get_option('twi_twe_tweet_t') != false) ? 'CHECKED' : '';
		$page_url   = (get_option('twi_twe_tweet_t') == false) ? 'CHECKED' : '';
		$tweet_text = (get_option('twi_twe_tweet_t') != false) ? get_option('twi_twe_tweet_t') : '';
		
		$right = (get_option('twi_twe_align') == 'right') ? 'SELECTED' : '';
		$left = (get_option('twi_twe_align') == 'left') ? 'SELECTED' : '';

		$Block = 
		'
		
		<div class="wrap">
		<script src="'. plugins_url('js/jquery.js',__FILE__).'" type = "text/javascript"></script>
		<script src="'. plugins_url('js/live_pre.js',__FILE__).'" type = "text/javascript"></script>
		   <form action="" method="post" id="form">
				<table>
				
					<tr valign="top">
						<td width="400px">
							<div>
								<img class="icon32" style="height:32px; width:auto;" src="'.plugins_url('images/settings_32.png',__FILE__).'" title="Settings" alt="Icon"> 
								<h2>General Settings:</h2>
								<table>
									<tr>
									  <td>Button Position: </td>
									  <td>
										<select name="pos" id="pos">
										  <option value="af"  '.$af.'>After Content</option>
										  <option value="bf"  '.$bf.'>Before Content</option>
										  <option value="fnb" '.$fnb.'>After And Before</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>Show in Home:</td>
									  <td>
										 <input type="checkbox" name="home" id="home" value="true" '.$home.'/>
									  </td>
									</tr>
									<tr>
									  <td>Show in Posts:</td>
									  <td>
										 <input type="checkbox" name="post" id="post" value="true" '.$post.'/>
									  </td>
									</tr>
									<tr>
									  <td>Show in Pages:</td>
									  <td>
										 <input type="checkbox" name="page" id="page" value="true" '.$page.'/>
									  </td>
									</tr>
									<tr>
									  <td>Button Layout: </td>
									  <td>
										<select name="layout" id="layout">
										  <option value="vertical" '.$ver.'>Vertical count</option>
										  <option value="horizontal" '.$hor.'>Horizontal count</option>
										  <option value="none" '.$none.'>No Count</option>
										</select>
									  </td>
									</tr>
									<tr>
									  <td>Button Alignment: </td>
									  <td>
										<select name="align" id="align">
										  <option value="right" '.$right.'>Right</option>
										  <option value="left" '.$left.'>Left</option>
										</select>
									  </td>
									</tr>
									<tr>
									<tr>
									  <td>Language: </td>
									  <td>
										<select name="language" id="language">
										  <option value="en" '.$en.'>English</option>
										  <option value="fr" '.$fr.'>French</option>
										  <option value="de" '.$de.'>German</option>
										  <option value="es" '.$es.'>Spanish</option>
										  <option value="ja" '.$jp.'>Japanese</option>
										</select>
									  </td>
									</tr>
									<tr>
										<td>Twitter Account</td>
										<td>
										<input type = "text" id = "twitter_account" name = "twitter_account" placeholder = "Twitter Username" 
										size="30" value = "'.$twitter.'"/>
										</td>
									</tr>
									<tr>
										<td>Related Account</td>
										<td>
										<input type = "text" id = "related_account" name = "related_account" placeholder = "Related Twitter Account" 
										size = "30"  value = "'.$related.'"/>
										</td>
									</tr>
									<tr>
										<td>Related Account Description:</td>
										<td>
										<input type = "text" id = "related_des" name = "related_des" placeholder = "Related Account Description" 
										size = "30" value = "'.$rel_des.'"/>
										</td>
									</tr>
									<tr>
										<td>Tweet Text:</td>
										<td>
										<input type="radio" name="tweet_t" id="tweet_t" value="custom" '.$custom.'/>
										<input type = "text" id = "tweet_text" name = "tweet_text" placeholder = "Custom Tweet Text" 
										size = "30" value = "'.$tweet_text.'"/><br>
										<input type="radio" name="tweet_t" id="tweet_t" value="url" '.$page_url.'/>
										<span>The title of the page the button is on.</span>
										</td>
									</tr>
									<tr>
										<td>
											<input name="submit" class="button-primary" type="submit" value="Save Settings" 
											style="cursor: pointer;" id="submit" title="Save Settings" />
										</td>
									</tr>
								</table>
							</div>
						</td>
						<td width="400px">
							<div>
								<img class="icon32" style="height:32px; width:auto;" 
								src="'.plugins_url('images/preview_32.png',__FILE__).'" title="Settings" alt="Icon"> 
								<h2>Live Preview:</h2>
								<div id="live" align="center"></div>
							</div>
						</td>
					</tr>
				</table>
		   </form>
		   
		</div>
		
		';
		
		echo $Block;
		
		
		
		}
		
	}

?>