<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Multistep Indicator -->
<section>
   <nav>
		<ol class="cd-breadcrumb triangle">
			<li><a href="<?php echo base_url('index.php/LandingController/demand'); ?>"><em>Order</em></a></li>
			<li><a href="<?php echo base_url('index.php/LandingController/location'); ?>">Location</a></li>
			<li><a href="<?php echo base_url('index.php/LandingController/payment'); ?>">Payment</a></li>
			<li class="current"><a href="<?php echo base_url('index.php/LandingController/share');?>">Invite Friends</a></li>
			<li><a href="<?php echo base_url('index.php/LandingController/preview');?>">Preview</a></li>
		</ol>
   </nav>
</section>   		