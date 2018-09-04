<?php

namespace App\Services;

use Carbon\Carbon;

class ConvertDateSQL{
	public static function ToSQL($date){
		$split = explode('.',$date);
		return $split[2].'.'.$split[1].'.'.$split[0];
	}

	public static function FromSQL($date){
		if ($date == null)
			return null;
		return Carbon::parse($date);
	}
}