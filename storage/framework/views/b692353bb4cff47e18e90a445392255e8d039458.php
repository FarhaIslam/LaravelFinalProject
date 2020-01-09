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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
						
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
						<form class="form-horizontal" action="<?php echo e(url('/save-product')); ?>" method ="post" enctype="multipart/form-data">
							<?php echo e(csrf_field()); ?>

						  <fieldset>
							<div class="control-group">
							  
							</div>



					
							
							<div class="control-group">
							  <label class="control-label" for="text">Product name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="product_name">
							  </div>
							</div>
                            <div class="control-group">
								<label class="control-label" for="selectError3">Product category</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
								  	<option>select category</option>
								  	<?php
                                  $all_published_category=DB::table('tbl_category')
                                  ->where('publication_status',1)
                                  ->get();
                                  foreach( $all_published_category as $v_category){?>
                                 
									<option value="<?php echo e($v_category->category_id); ?>"><?php echo e($v_category->category_name); ?></option>
									   <?php } ?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError3">Manufacture name</label>
								<div class="controls">
								  <select id="selectError3" name="manufacture_id">
									<option>select manufacture</option>
									<?php
                                  $all_published_manufacture=DB::table('manufacture')
                                  ->where('publication_status',1)
                                  ->get();
                                  foreach( $all_published_manufacture as $v_manufacture){?>
                                 
									<option value="<?php echo e($v_manufacture->manufacture_id); ?>"><?php echo e($v_manufacture->manufacture_name); ?></option>
									   <?php } ?>
								  </select>
								</div>
							  </div>
							         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product Short description</label>
							  <div class="controls">
								<textarea  name="product_short_description" rows="3"></textarea>
							  </div>
							</div>
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product long description</label>
							  <div class="controls">
								<textarea  name="product_long_description" rows="3"></textarea>
							  </div>
							</div>
							
							<div class="control-group">
							  <label class="control-label" for="text">Product price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="product_price">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
							  </div>
							</div>    

							<div class="control-group">
							  <label class="control-label" for="text">Product size</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="product_size">
							  </div>
							</div>


                            <div class="control-group">
							  <label class="control-label" for="text">Product color</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="product_color">
							  </div>
							</div>
  
                              
                              <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1">
							  </div>
							</div>

                          



							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>