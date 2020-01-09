<?php $__env->startSection('admin_content'); ?>

<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
						
					</div>
                    <p class="alert-success">


                    	<?php
                    	$message = Session::get('message');
                    	if($message)
                    		echo "$message";
                    	Session::put('message',null);

                         

    ?>

                    </p>


                       <div class="box-content">
						<form class="form-horizontal" action="<?php echo e(url('/save-category')); ?>" method ="post">
							<?php echo e(csrf_field()); ?>

						  <fieldset>
							<div class="control-group">
							  
							</div>



					
							
							<div class="control-group">
							  <label class="control-label" for="text">Category name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="category_name">
							  </div>
							</div>

							         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Category description</label>
							  <div class="controls">
								<textarea  name="category_description" rows="3"></textarea>
							  </div>
							</div>
                              
                              <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1">
							  </div>
							</div>

                          



							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Category category</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>