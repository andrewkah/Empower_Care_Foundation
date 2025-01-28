<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Department;
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
        if ($article->hasFile('photo')) $path = $article->file('photo')->store('articles');
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
    public function getArticleByCategory($slug){
        $category = ArticleCategory::where('slug', $slug)->first();
        if ($category){
            return $this->article->where('article_cat_id', $category->id)->get();
        }else{
            return null;
        }
    }
    public function getArticleByTag($slug){
        return $this->article->where('tags', 'LIKE', "%{$slug}%")
         ->orWhere('tags', 'LIKE', "% {$slug} %")
             ->orWhere('tags', 'LIKE', "{$slug},%")
             ->orWhere('tags', 'LIKE', "%,{$slug}")
        ->get();
    }
    public function ArticleSearch($request){
        $articles=$this->article->orwhere('title','like','%'.$request->search.'%')
            ->orwhere('quote','like','%'.$request->search.'%')
            ->orwhere('summary','like','%'.$request->search.'%')
            ->orwhere('description','like','%'.$request->search.'%')
            ->orwhere('slug','like','%'.$request->search.'%')
            ->orderBy('id','DESC')
            ->get();
        return $articles;
    }

    public function getAllTags(){
        
        $allTags =  $this->article->all()->pluck('tags'); // Get all the tags field from posts
        
        $uniqueTags = collect(); // Create an empty collection for unique tags
        
        // Loop through each post's tags and extract unique tags
        foreach ($allTags as $tags) {
            $tagsArray = explode(',', $tags); // Split the comma-separated tags
            $uniqueTags = $uniqueTags->merge($tagsArray); // Merge tags into the collection
        }
        
        $uniqueTags = $uniqueTags->unique()->values(); 
        return $uniqueTags;
    }
    public function getAllArticleCategoryAndNumberOfArticles(){
        $categoriesWithEventCount = ArticleCategory::all()->map(function ($category) {
            $count = Article::where('article_cat_id',$category->id)->count();
            
            return [
                 'title' => $category->title,
                'slug'=>$category->slug,
                'count' => $count,
            ];
        });
       return $categoriesWithEventCount;
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
    public function getAllDepartmentsOrderByCreatedAt(){
        $data= Department::orderBy('created_at', 'desc')->get();
        return $data;
    }
}

?>