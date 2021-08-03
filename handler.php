<?php
require_once 'generator.php';
require_once 'lead.php';
use LeadGenerator\Generator;
use LeadGenerator\Lead;
date_default_timezone_set('Europe/Moscow');
class lead_handler {
	public function handle(Lead $lead): void {
		sleep(2);
		file_put_contents('log.txt',"$lead->id | ".$lead->categoryName.' | '.date('Y-m-d H:i:s')."\n",FILE_APPEND);
	}
}
$generator = new Generator();
$generator->generateLeads(10,array(new lead_handler(),'handle'));
?>