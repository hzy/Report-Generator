<div id="main_content_rhs_wide">
	<h2>Report Edit</h2>
	<h3>Timber Survey</h3>
	<hr />
	<form method="post">
		<div class="form_fields">
			<label>Opening Paragraph</label>
			<textarea name="data[timber_serv_opening_paragraph]"><?php if($data['timber_serv_opening_paragraph']): h($data['timber_serv_opening_paragraph']) ?><?php else: ?>A detailed examination was carried out to determine the presence of any wood boring insects and/or wood rotting fungi, the results of this survey are as follows:
			<?php endif; ?>
			</textarea>
			<hr />
			<h4>Observations</h4>
			<div class="timber_surv_observation"></div>
			<?php $i = 0; ?>
			<?php if(is_array($data['timber_surv_observations'])): ?>
				<?php foreach($data['timber_surv_observations'] as $obs): ?>
					<div class="timber_surv_observation">
						<label>Area Type</label>
						<input type="text" name="data[timber_surv_observations][<?php echo $i; ?>][type]" value="<?php h($obs['type']) ?>" />
						<label>Description</label>
						<textarea name="data[timber_surv_observations][<?php echo $i; ?>][description]" placeholder="insert description here..."><?php h($obs['description']) ?></textarea>
						<a href="#" class="observation_delete" style="float:right">Delete</a>
					</div>
					<hr />	
				<?php endforeach;?>
			<?php endif; ?>

			<!--this will add another timber-surver_observation div-->
			<p class="list_add_new"><a href="#">Add</a></p>
			<script>
			$(function() {
				var i = <?php echo $i; ?>;
				$(".list_add_new a").click(function() {
					$('<div class="timber_surv_observation"><label>Area Type</label><input type="text" name="data[timber_surv_observations][' + i + '][type]" /><label>Description</label><textarea name="data[timber_surv_observations][' + i + '][description]" placeholder="insert description here..."></textarea><hr /></div>').insertAfter($(".timber_surv_observation").last());
					i++;
					return false;
				});
				$(".timber_surv_observation textarea").css("height", "50px").focus(function() {
					$(this).animate({"height": "150px"}, "fast");
				}).blur(function() {
					$(this).animate({"height": "50px"}, "fast");
				});
				$(".observation_delete").click(function() {
					if(confirm("Are you sure? This action is permanent")) {
						$(this).parents(".timber_surv_observation").remove();
					}
					return false;
				})
			});
			</script>
		</div>
		<?php include "edit_nav.php" ?>
	</form>
</div>