
<?php $home_selected = '';$news_selected = '';$connect_selected = '';$forum_selected = '';$we_selected = '';$intouch_selected = '';switch($secondary_selected){case 'founders': $founders_selected = 'selected';			 break;case 'staff': $staff_selected = 'selected';			 break;case 'fees': $fees_selected = 'selected';			 break;case 'result': $result_selected = 'selected';			 break;
case 'tutorials' : $tutorials_selected = 'selected';
			 break; case 'admission': $admission_selected = 'selected';			 break;}?><div id="secondary-menu">	<ul class="secondary-menu-list">		<li class="secondary-menu-list-element"><a class="secondary-menu-option <?php echo $founders_selected;?>" href=""><span>Founders</span></a></li>		<li class="secondary-menu-list-element"><a class="secondary-menu-option <?php echo $staff_selected;?>" href=""><span>Staff Information</span></a></li>		<li class="secondary-menu-list-element"><a class="secondary-menu-option <?php echo $fees_selected;?>" href=""><span>Fees</span></a></li>		<li class="secondary-menu-list-element">			<a class="secondary-menu-option <?php echo $result_selected;?> " href=""><span>Result</span></a>			<?php include 'submenu-result.php' ?>					</li>
		<li class="secondary-menu-list-element tutorials">
			<a class="secondary-menu-option <?php echo $tutorials_selected;?>" href=""><span>Tutorials</span></a>
			<?php include 'submenu-tutorials.php' ?>
			
		</li>		<li class="secondary-menu-list-element"><a class="secondary-menu-option <?php echo $admission_selected;?>" href="school-admission.php"><span>Admission</span></a></li>	</ul></div>

