<section id="team_cont" class="team_cont font_phenomena">
	<div class="my_container">
		<h1 class="main_label text-center">Екип</h1>
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 padding_top_m padding_bottom_l">
		    <h3>Всеки един от нас може да обясни по различен начин защо се е отдал на работата си в <strong>Лаборатория Сугестопедика</strong>, но същността е стремежът да бъдем полезни на хората. Ние вярваме в безкрайните човешки възможности и развиваме метода за нова култура на общуване и комуникация – Сугестопедия. Чрез него се представя и възприема нова информация на чужди езици, математика, история, география, български език и литература, ограмотяване, ранно детско развитие и др. Всички водещи в <strong>Лаборатория Сугестопедика</strong> са обучени и сертифицирани от Фондация "Проф. д-р Георги Лозанов и проф. д-р Евелина Гатева".</h3>
		</div>
		<?php $i = 0; foreach ($t_members as $t_mamber) {?>
			@include('partials/teammember', ['member'=>$t_mamber, 'i'=>$i])
		<?php $i += 1;
			} ?>
	</div>	
</section>
<div class="clearfix"></div>