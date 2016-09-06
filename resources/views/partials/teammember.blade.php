<div class="member_cont noselect">
	<div class="member_inner_cont">
		@if ($t_mamber->image)
		   	<div class="img_cont">
		   		<img src="./img/members/{{$t_mamber->image}}" alt="{{$t_mamber->name}} {{$t_mamber->surname}}">
		   	</div>
		@endif		
		<p class="color_line" color-index="{{$i}}"></p>
		<h3>{{$t_mamber->name}} {{$t_mamber->surname}}</h3>
		<div class="description_cont">
			<p>{{$t_mamber->description}}</p>
		</div>
	</div>
</div>

