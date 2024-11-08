<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Services\ArticleCategoryService;
use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct(private ArticleService $articleService, private ArticleCategoryService $articleCategoryService)
    {
    }

    public function index(){
        $data = $this->articleService->getAllArticles();
        return view('backend.pages.articles.index', compact('data'));
    }

    public function create(){
        $categories = $this->articleCategoryService->getAllArticleCategories();
        return view('backend.pages.articles.create', compact('categories'));
    }

    public function store(ArticleRequest $request){
        $article = $this->articleService->storeArticle($request);
        if($article) return redirect()->route('articles.index')->with('success', 'Article created successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function edit($id){
        $data = $this->articleService->getSingleArticle($id);
        $categories = $this->articleCategoryService->getAllArticleCategories();
        return view('backend.pages.articles.edit', compact('data', 'categories' ));
    }

    public function update($id, ArticleRequest $request){
        $article = $this->articleService->updateArticle($id, $request);
        if($article) return redirect()->route('articles.index')->with('success', 'Article updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $article = $this->articleService->deleteArticle($id);
        if($article) return redirect()->route('articles.index')->with('success', 'Article deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
