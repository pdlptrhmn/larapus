<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Iluminate\Support\Facades\Session;

class Authors extends Model
{
    //
    protected $fillable = ['name'];
    public function books()
    {
    	return $this->hasMany('App\Book');
    }

    public static function boot()
    {
    	parent::boot();

    	self::deleting(function($author){

    		if ($author->books->count() >0){

    			$html = 'Penulis tidak bisa dio hapus karena masih memiliki buku :';
    			$html .= '<ul>';
    			foreach ($author->books as $books) {
    				$html .= "<li>$book->title</li>";
    			}
    			$html .='</ul>';

    			Session::flash("flash_notification", ["level"=>"danger","message"=>$html]);
    			return false;
    		}
    	});
    }
}
