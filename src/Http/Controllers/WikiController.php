<?php namespace Taskforcedev\Wiki\Http\Controllers;

use \Auth;
use \Config;
use \Exception;
use \Input;
use \Redirect;
use \Request;
use \Hash;
use Taskforcedev\Wiki\Models\WikiPage;
use Taskforcedev\LaravelSupport\Http\Controllers\Controller;

class WikiController extends Controller
{
    /**
     * View a wiki page or show page creation view.
     * @param string $page Page name
     * @return mixed
     */
    public function view($page)
    {
        $url = $this->canonicalUrl($page);
        $data = $this->buildData();

        try {
            $page = WikiPage::where('url', $url)->firstOrFail();
            $data['page'] = $page;
            // Page exists
            return view('taskforce-wiki::page', $data);
        } catch (Exception $e) {
            // Page does not exist.
            $data['page'] = $page;
            return view('taskforce-wiki::createPage', $data);
        }
    }

    /**
     * Retrieve a canonical url from a page title.
     * @param string $page Page title.
     * @return string
     */
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

    public function create()
    {
        $data = Request::only('title', 'content', 'url');

        $url = $this->canonicalUrl($data['url']);

        if (WikiPage::exists($url)) {
            return redirect()->route('wiki.page.view', $url);
        }

        $valid = WikiPage::valid($data);
        if ($valid === true) {
            $page = WikiPage::create($data);
            $url = $page->url;
            return redirect()->route('wiki.page.view', $url);
        } else {
            return response($valid, 500);
        }
    }
}
