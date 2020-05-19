<?php
namespace MyGreeter;
/*
 *	@desc:
 */
class Client
{
		/*
		 *	@desc: construct function
		 */
		public function __construct()
		{
				date_default_timezone_set('PRC');
		}
		
		/*
		 *	@desc : Instance
		 */
		public static function Instance()
		{
				return self::class;
		}
		
		/*
		 *	@desc : greeter
		 */
		public static function getGreeting($date_time = null)
		{
				$return_info = null;
				
				if($date_time === null) $date_time = intval(date('H'));

				switch(true)
				{
						case !is_numeric($date_time):
								$return_info = "It is a wrong time.";
								break;
						case $date_time >= 0 && $date_time < 12:
								$return_info = "Good morning.";
								break;
						case $date_time >= 12 && $date_time < 18:
								$return_info = "Good afternoon.";
								break;
						case $date_time >= 18 && $date_time < 24:
								$return_info = "Good evening.";
								break;
						default:
								$return_info = "It is a wrong time.";
								break;
				}

				return $return_info;
		}
}