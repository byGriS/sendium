	<div class="minDate center">{{$dateNow->format('d.m')}}</div>
	<div class="sidebarDate flex flexDirectionColumn" onclick="ToggleCalendar(this);">
		<div class="dateDay flex1"  >
			<div class="sidebarDay">
				{{$dateNow->format('d')}}
			</div>
			<div class="sidebarMonth">
				{{$month}} {{$dateNow->format('Y')}}
			</div>
		</div>
		<div class="dateMonth ">
			@for($i=0; $i<6; $i++)
				<div class="flex flexJustifyContentSpaceAround">
				@for($k=0; $k<7; $k++)
					<div class="
						@if ($dateStart->format('m') == $dateNow->format('m')) currentMonth @endif
						@if ($dateStart->format('w') == '0' || $dateStart->format('w') == '6') weekend @endif
						@if ($dateStart->format('m') == $dateNow->format('m') && $dateStart->format('d') == $dateNow->format('d')) currentDay @endif
					">{{$dateStart->format('j')}}</div>
					<?php $dateStart->addDay(); ?>
				@endfor
				</div>
			@endfor
			<div class="sidebarMonth">
				{{$month}} {{$dateNow->format('Y')}}
			</div>
		</div>
	</div>