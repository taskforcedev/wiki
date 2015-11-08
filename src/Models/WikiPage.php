<?php namespace Taskforcedev\Wiki\Models;

use Illuminate\Database\Eloquent\Model;

class WikiPage extends Model
{
    public $table = 'wiki_pages';

    protected $fillable = ['title', 'content', 'url'];
}
