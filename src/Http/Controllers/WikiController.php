<?php namespace Taskforcedev\Wiki\Http\Controllers;

use \Auth;
use \Config;
use \Exception;
use \Input;
use \Redirect;
use \Request;
use \Hash;
use Taskforcedev\LaravelSupport\Http\Controllers\Controller;

class WikiController extends Controller
{
    public function view($page)
    {
        $url = $this->canonicalUrl($page);

        try {
            
        } catch (Exception $e) {

        }
    }

    public function canonicalUrl($page)
    {
      $replacements = [
        ' ' => '-', // Convert spaces to hyphen.
      ];
      $removals = [
        '?', '$', '&', '+', '[', ']'
      ];

      $url = $page;

      foreach ($replacements as $in => $out) {
          $url = str_replace($in,$out,$url);
      }

      foreach ($removals as $char) {
        $url = str_replace($char, '', $url);
      }

      return $url;
    }
}
