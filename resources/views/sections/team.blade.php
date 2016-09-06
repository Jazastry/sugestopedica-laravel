<section id="team_cont" class="team_cont font_phenomena">
	<div class="my_container">
		<h1 class="main_label text-center">Екип</h1>
		<?php $i = 0; foreach ($t_members as $t_mamber) {?>
			@include('partials/teammember', ['member'=>$t_mamber, 'i'=>$i])
		<?php $i += 1;
			} ?>
	</div>	
</section>