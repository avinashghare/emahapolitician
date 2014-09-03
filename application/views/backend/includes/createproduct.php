<div class="row" style="padding:1% 0">
	<div class="col-md-12">
		<div class="pull-right">
			<a href="<?php echo site_url('site/viewproduct'); ?>" class="btn btn-primary pull-right"><i class="icon-long-arrow-left"></i>&nbsp;Back</a>
		</div>
	</div>
</div>
<?php     print_r($user);
echo $user[1];?>
<div class="row">
	<div class="col-lg-12">
	    <section class="panel">
		    <header class="panel-heading">
				 Product Details
			</header>
			<div class="panel-body">
			  <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/createproductsubmit');?>" enctype= "multipart/form-data">
				
<!--
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">jhbjh</label>
				  <div class="col-sm-4">
				  <select multiple id="e1" style="width:300px">
                      
                        <option value="Am">Amalapuram</option>
                        <option value="An">Anakapalli</option>
                        <option value="Ak">Akkayapalem</option>
                        <option value="WY">Wyoming</option>
                    </select>
                <input type="checkbox" id="checkbox" >Select All

					<input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name');?>">
				  </div>
				</div>
-->
				
				
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Name</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name');?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Alias</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="alias" value="<?php echo set_value('alias');?>">
				  </div>
				</div>
				
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Shop</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('shop',$shop,set_value('shop'),'id="select4" class="chzn-select form-control"');
					?>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Meta Title</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="metatitle" value="<?php echo set_value('metatitle');?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Meta Description</label>
				  <div class="col-sm-4">
<!--				  <textarea name="description" form="usrform"  rows="20" cols="5"><?php echo set_value('description');?></textarea>-->
					<input type="text" id="normal-field" class="form-control" name="metadescription" value="<?php echo set_value('metadescription');?>">
				  </div>
				</div>

				
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Stock</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="stock" value="<?php echo set_value('stock');?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">EAN</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="ean" value="<?php echo set_value('ean');?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Tax</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="tax" value="<?php echo set_value('tax');?>">
				  </div>
				</div>
				
            
				<div class=" form-group">
				  <label class="col-sm-2 control-label">&nbsp;</label>
				  <div class="col-sm-4">
				  <button type="submit" class="btn btn-primary">Save</button>
				  <a href="<?php echo site_url('site/viewmall'); ?>" class="btn btn-secondary">Cancel</a>
				</div>
				</div>
			  </form>
			</div>
		</section>
	</div>
</div>
<script>
    $(document).ready(function() { 
$("#e1").select2();
$("#checkbox").click(function(){
    if($("#checkbox").is(':checked') ){
        $("#e1 > option").prop("selected","selected");
        $("#e1").trigger("change");
    }else{
        $("#e1 > option").removeAttr("selected");
         $("#e1").trigger("change");
     }
});

$("#button").click(function(){
       alert($("#e1").val());
});
    })
</script>