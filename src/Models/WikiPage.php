<?php namespace Taskforcedev\Wiki\Models;

use Illuminate\Database\Eloquent\Model;

class WikiPage extends Model
{
    public $table = 'wiki_pages';

    protected $fillable = ['title', 'content', 'url'];

    /**
     * Determine if a page exists based on it's url.
     * @param string $url Page URL.
     * @return bool
     */
    public static function exists($url)
    {
        try {
            $page = WikiPage::where('url', $url)->firstOrFail();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function valid($data)
    {
        $mData = [ // To prevent any extra fields, select only required.
            'title'   => $data['title'],
            'content' => $data['content'],
            'url'     => $data['url'],
        ];

        $rules = [
            'title' => 'required',
            'content' => 'required|min:3',
            'url' => 'required|min:3',
        ];

        $validator = Validator::make($mData, $rules);
        if ($validator->passes()) {
            return true;
        } else {
            return $validator->messages();
        }
    }
}
