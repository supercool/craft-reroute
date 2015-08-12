<?php
namespace Craft;

class m150813_155100_reroute_addHitsColumn extends BaseMigration
{
	public function safeUp()
	{
		$table = 'reroute';
		$this->addColumnAfter($table, 'hits', ColumnType::Int, 'method');
		return true;
	}
}
