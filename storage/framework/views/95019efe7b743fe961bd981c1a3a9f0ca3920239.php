<?php $__env->startSection('content'); ?>


<section id="cart_items">
		<div class="container">
			

			<div class="register-req">
				<p>Please fillup the form</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Shipping</p>
							<div class="form-one">
								<form action="<?php echo e(url('/save-shipping-details')); ?>" method="post">
									<?php echo e(csrf_field()); ?>

									
									<input type="text" name="shipping_email" placeholder="Email*">
									<input type="text" name="shipping_first_name" placeholder="First Name *">
									<input type="text" name="shipping_last_name" placeholder="Last Name *">
									<input type="text" name="shipping_address" placeholder="Address  *">
									<input type="text" name="shipping_mobile_number" placeholder="Mobile Number">
									<input type="text" name="shipping_city" placeholder="City *">
										<button type="submit" class="btn btn-default" value="Done">Done</button>
								</form>
							</div>
							<div class="form-two">
							
							</div>
						</div>
					</div>
									
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			
		</div>
	</section> <!--/#cart_items-->

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>