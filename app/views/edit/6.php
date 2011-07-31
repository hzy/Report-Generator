<div id="main_content_rhs_wide">
	<h2>Report Edit</h2>
	<h3>Sketch Plan</h3>
	<hr />
	<form method="post" enctype="multipart/form-data">
		<input type="hidden" name="report_id" value="<?php h($report->id) ?>">
		<input type="hidden" name="section" value="6">
		<div class="form_fields">
			<input type="hidden" name="data[dummy]" value="-" /> <!-- dummy data to make this form work with edit_report, because the only input unique to this page is the file input which PHP treats separately -->
			<label>Photo</label>
				<?php if(isset($data['sketch'])): ?>
					<img src="file.php?file_id=<?php h($data['sketch']) ?>" width="200" height="200" /><br />
				<?php endif; ?>
				<input name="sketch" type="file" />
			<label>Name</label>
				<input name="other_data[1][client_name]" type="text" value="<?php h($report->client_name) ?>"/>
			<label>Address</label>
				<input name="other_data[1][street_address]" type="text" value="<?php h($report->street_address) ?>"/>
				<input name="other_data[1][city]" type="text" value="<?php h($report->city) ?>"/>
				<input name="other_data[1][postcode]" type="text" value="<?php h($report->postcode) ?>"/>
			<label>Date of Survey</label>
				<input name="date" type="text" value="<?php echo date("Y-m-d H:i:s", $report->created_at); ?>" />
		</div>
		<?php include "edit_nav.php" ?>
	</form>
</div>