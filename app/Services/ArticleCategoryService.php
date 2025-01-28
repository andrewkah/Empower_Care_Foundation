<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\ArticleCategoryRequest;
use App\Http\Requests\DepartmentRequest;
use App\Models\ArticleCategory;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;
class ArticleCategoryService{

    public function __construct(private ArticleCategory $articleCategory, private Department $department)
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


    /* departments functions  */



    // create Department
    public function storeDepartment(DepartmentRequest $request)
    {
        $data = $request->validated();
        // $data['slug'] = Str::random(10);
        $data['created_by'] = Auth::id();
        return $this->department->create($data);
    }
    // get all Department
    public function getAllDepartment()
    {
        return $this->department->all();
    }
    // get Department by id
    public function getSingleDepartment($id)
    {
        return $this->department->where('id', $id)->first();
    }
    // update Department
    public function updateDepartment($id, DepartmentRequest $articleCategory)
    {
        $data = $articleCategory->validated();
        $data['updated_by'] = Auth::id();
        return $this->department->findOrFail($id)->update($data);

    }
    // delete Department
    public function deleteDepartment($id)
    {
        return $this->department->destroy($id);
    }

}

?>