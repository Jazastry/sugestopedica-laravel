<section id="courses_cont" class="courses_cont font_phenomena">	 
	<div class="my_container">
		<h1 class="main_label col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">Програма</h1>
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 padding_top_bottom_m">
		    <h3><strong>Лаборатория Сугестопедика</strong> организира обучения по английски, италиански и български език за чужденци чрез средствата на Сугестопедията. През годината се провеждат сесии за запознаване с мелодиката на езиците и културата на нациите, които ги говорят. Срещите се предлагат в различни модули и форми от 50 до 100 часа, разпределени в интензивен период от 12 до 25 дни. Групите до 10 човека се формират след предварителни срещи със сугестопед и определяне на очакваните резултати. Възрастови ограничения  и ниво на знания по езика няма.</h3>
		</div>
		<?php $i = 0; foreach ($courses as $course) {?>
			@include('partials/course', ['course'=>$course, 'i'=>$i])
		<?php $i += 1;
			} ?>
	</div>
</section>
<div class="clearfix"></div>