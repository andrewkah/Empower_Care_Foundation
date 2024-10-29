<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
class ArticleService{

    public function __construct(private Article $article)
    {

    }
    // create article
    public function storeArticle(ArticleRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('public/categories'); else $path=null;
        $data['photo'] = $path;
        $data['slug'] = Str::slug($data['title']);
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
        return $this->article->findOrFail($id)->update($article->validated());

    }
    // delete article
    public function deleteArticle($id)
    {
        return $this->article->destroy($id);
    }
}

?>