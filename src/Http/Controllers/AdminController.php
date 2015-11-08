<?php namespace Taskforcedev\Wiki\Http\Controllers;

use \Auth;
use \Config;
use \Exception;
use \Input;
use \Redirect;
use \Request;
use \Hash;
use Taskforcedev\LaravelSupport\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function deletePage($id)
    {
    }

    public function install()
    {
        // Perform DB migrations.
        $dbMigrationNS = "Taskforcedev\\Wiki\\Database\\Migrations\\";

        $migrations = [
            'CreateWikiPagesTable'
        ];

        foreach ($migrations as $migration) {
            $class = $dbMigrationNS . $migration;
            $mig = new $class;
            $mig->migrate();
        }

        return view('taskforce-wiki::admin/install');
    }
}
