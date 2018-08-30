<?php

namespace App\Services;

class Status{
	const WORK = 0;
	const COMPLETE = 1;
	const OVERDUE = 2;

	public static function ToString($status){
		switch($status){
			case self::WORK: return "В работе";
			case self::COMPLETE: return "Завершен";
			case self::OVERDUE: return "Просрочена";
		}
	}
}