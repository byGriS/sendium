<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Carbon\Carbon;
use App\Services\MonthConvert;

class CalendarComposer{
	public function compose(View $view){
		$dateNow = Carbon::now();
		$month = MonthConvert::NumToRus($dateNow->format('n'));
		$view->with("date", $dateNow)->with("month", $month);
	}
}