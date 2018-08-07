<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Carbon\Carbon;
use App\Services\MonthConvert;

class CalendarComposer{
	public function compose(View $view){
		$dateNow = Carbon::now();
		$dateStart = new Carbon();
		$dateStart->startOfMonth()->startOfWeek();
		$month = MonthConvert::NumToRus($dateNow->format('n'));
		
		$view->with("dateNow", $dateNow)->with("month", $month)->with("dateStart", $dateStart);
	}
}