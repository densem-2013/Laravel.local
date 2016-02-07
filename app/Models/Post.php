<?php namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    //protected $guarded = array();?
    protected $fillable =['title','slug','excerpt','content','published_at','published'];
    public function getPublishedPosts(){

        //$posts = Post::latest('published_at')->where('published_at','<=',Carbon::now())->get();
        $posts=$this->latest('published_at')->published()->get();
        return $posts;
    }
    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now())->where('published','=',1);
    }
    public function scopeUnPublished($query){
        $query->where('published_at','>=',Carbon::now())->where('published','=',0);
    }
    public function getUnPublishedPosts(){
        $posts=$this->latest('published_at')->unPublished()->get();
        return $posts;
    }
}
