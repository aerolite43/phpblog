	<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>Email Address</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($query as $accounts):?>
        <tr>
        <td><?php echo $accounts->id?></td>
        <td><?php echo $accounts->email_address?></td>
        <td><?php echo $accounts->first_name?></td>
        <td><?php echo $accounts->last_name?></td>
        <td><a href="<?php echo base_url('index.php/profile/delete/' . $accounts->id) ?>" onclick="return confirm('<?php print $this->lang->line('delete_confirmation'); ?>');"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
            
        <?php endforeach;
		?>
		

	</tbody>
	</table>
	<?php
		if ($this->session->flashdata('notice') != ''): 
		echo $this->session->flashdata('notice'); 
		endif;
	?>

