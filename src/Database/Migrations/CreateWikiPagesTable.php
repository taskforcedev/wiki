<?php namespace Taskforcedev\Wiki\Database\Migrations;

use \Schema;

/**
 * Class CreateWikiPagesTable
 * @package Taskforcedev\Wiki\Database\Migrations
 */
class CreateWikiPagesTable
{
    /**
     * @var string
     */
    public $table = 'wiki_pages';

    public function migrate()
    {
        if (!Schema::hasTable($this->table)) {
            Schema::create($this->table, function ($table) {
                $table->increments('id');
                $table->string('title');
                $table->longtext('content');
                $table->string('url');
                $table->timestamps();
            });
        }
    }
}