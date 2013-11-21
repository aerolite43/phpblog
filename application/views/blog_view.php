
   <h1>Face Blog!</h1>
    <?php echo validation_errors(); ?>
	<?php echo form_open(base_url('index.php/myblog/share')) ?>
	
  <div class="form-group has-success" style="width:500px;">
  <label class="control-label">What are you thinking?</label>
  <input type="hidden" id="inputID" name="inputID" value=<?php ?>/>
  <input name="inputTitle"  id="inputTitle" type="text" class="form-control" style="width:250px; margin-bottom:5px;" placeholder="Title">
  <textarea name="inputContent" id="inputContent" type="text" class="form-control" id="inputSuccess" style="resize:none; height:100px;"  placeholder="Tell us about it!"></textarea>
  <!-- Indicates a successful or positive action -->
	<button type="submit" class="btn btn-success" style="float:right;">Submit</button>
	</div>
	<?php
			echo $result;	
			
print date("Y-m-d g:i:s", time());

	?>
   
   <!-- <a href="home/logout">Logout</a> -->