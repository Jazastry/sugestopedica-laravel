<section class="course_cont">
	<div class="course_roud_frame" color-index="{{$i}}">
		<div class="lable_container">
			<h1>{{ $course->name or '' }}</h1>			
		</div>		
		<p class="color_line" color-index="{{$i}}"></p>
		<div class="type_container">
			<h2 class="info_line">{{$course->course_type_name or ''}}</h2>
		</div>
		<div class="info_container">			
			@if ($course->courselevel)
			   	<h4 class="info_line">ниво {{ $course->courselevel}}</h4>
			@endif		

			@if ($course->duration_h)
			   	<h4 class="info_line">{{ $course->duration_h}} часа</h4>
			@endif

			@if ($course->start_time && $course->end_time)
			   	<h4 class="info_line">час {{ $course->start_time}}-{{$course->end_time}}</h4>
			@endif

			
			@if (date($course->start_date) > date('1900-01-01'))
			   	<h4 class="info_line">дата {{ $course->start_date}}</h4>
			@elseif ($course->start_date_str)
				<h4 class="info_line">дата {{ $course->start_date_str}}</h4>
			@endif
		</div>
	</div>	
</section>
