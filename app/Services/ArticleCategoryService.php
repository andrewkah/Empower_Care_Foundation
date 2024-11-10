<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\ArticleCategoryRequest;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Auth;
class ArticleCategoryService{

    public function __construct(private ArticleCategory $articleCategory)
    {

    }
    // create articleCategory
    public function storeArticleCategory(ArticleCategoryRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::random(10);
        $data['created_by'] = Auth::id();
        return $this->articleCategory->create($data);
    }
    // get all articleCategorys
    public function getAllArticleCategories()
    {
        return $this->articleCategory->all();
    }
    // get articleCategory by id
    public function getSingleArticleCategory($id)
    {
        return $this->articleCategory->where('id', $id)->first();
    }
    // update articleCategory
    public function updateArticleCategory($id, ArticleCategoryRequest $articleCategory)
    {
        $data = $articleCategory->validated();
        $data['updated_by'] = Auth::id();
        return $this->articleCategory->findOrFail($id)->update($data);

    }
    // delete articleCategory
    public function deleteArticleCategory($id)
    {
        return $this->articleCategory->destroy($id);
    }
}

?>