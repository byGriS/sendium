<?php

namespace App\Services;

class PriorityConvert{
	public static function ToString($value){
		switch ($value){
			case 0: return "Второстепенная";
			case 1: return "Обычная";
			case 2: return "Важная";
			default: return "Очень важная";
		}
	}
}