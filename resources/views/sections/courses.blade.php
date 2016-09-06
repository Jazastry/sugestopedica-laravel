<section id="courses_cont" class="courses_cont font_phenomena row">
	<div class="my_container">
		<h1 class="main_label text-center">Програма</h1>
		<?php $i = 0; foreach ($courses as $course) {?>
			@include('partials/course', ['course'=>$course, 'i'=>$i])
		<?php $i += 1;
			} ?>
	</div>
</section>
<div class="clearfix"></div>