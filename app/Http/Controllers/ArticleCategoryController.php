<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleCategoryRequest;
use App\Services\ArticleCategoryService;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    public function __construct(protected ArticleCategoryService $articleCategoryService)
    {
    }

    public function index(){
        $data = $this->articleCategoryService->getAllArticleCategories();
        return view('backend.pages.article-categories.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.article-categories.create');
    }

    public function store(ArticleCategoryRequest $request){
        $articleCategory = $this->articleCategoryService->storeArticleCategory($request);
        if($articleCategory) return redirect()->route('article-categories.index')->with('success', 'Article category created successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function edit($id){
        $articleCategory = $this->articleCategoryService->getSingleArticleCategory($id);
        return view('backend.pages.article-categories.create', compact('articleCategory'));
    }

    public function update($id, ArticleCategoryRequest $request){
        $articleCategory = $this->articleCategoryService->updateArticleCategory($id, $request);
        if($articleCategory) return redirect()->route('article-categories.index')->with('success', 'Article category updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $articleCategory = $this->articleCategoryService->deleteArticleCategory($id);
        if($articleCategory) return redirect()->route('article-categories.index')->with('success', 'Article category deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
