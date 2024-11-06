<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class ArticleService{

    public function __construct(private Article $article)
    {

    }
    // create article
    public function storeArticle(ArticleRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('articles'); else $path=null;
        $data['photo'] = $path;
        $data['slug'] = Str::random(10);
        $data['created_by'] = Auth::id();
        return $this->article->create($data);
    }
    // get all articles
    public function getAllArticles()
    {
        return $this->article->all();
    }
    // get article by id
    public function getSingleArticle($id)
    {
        return $this->article->where('id', $id)->first();
    }
    // update article
    public function updateArticle($id, ArticleRequest $article)
    {
        $path = $this->getSingleArticle($id)->photo;
        if ($article->hasFile('photo')) $path = $article->file('photo')->store('programs');
        $data = $article->validated();
        $data['photo'] = $path;
        $data['updated_by'] = Auth::id();
        return $this->article->findOrFail($id)->update($data);

    }
    // delete article
    public function deleteArticle($id)
    {
        return $this->article->destroy($id);
    }
    public function getAllArticleOrderByCreatedAt(){
        $data= $this->article->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $article){
                $article->date = Carbon::parse($article->created_at)->format('F j, h:i A');
                $article->time = Carbon::parse($article->created_at)->format('M, Y');
                $article->day = Carbon::parse($article->created_at)->format('d');
            }
        }
        return $data;
    }

    public function getArticleBySlug($id){
        $data = $this->article->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
           
        }
        return $data;
    }
}

?>