<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArticleCategoryService;
use App\Http\Requests\DepartmentRequest;

class DepartmentController extends Controller
{
    public function __construct(protected ArticleCategoryService $articleCategoryService)
    {
    }

    public function index(){
        $data = $this->articleCategoryService->getAllDepartment();
        return view('backend.pages.departments.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.departments.create');
    }

    public function store(DepartmentRequest $request){
        $articleCategory = $this->articleCategoryService->storeDepartment($request);
        if($articleCategory) return redirect()->route('departments.index')->with('success', 'Department created successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function edit($id){
        $articleCategory = $this->articleCategoryService->getSingleDepartment($id);
        return view('backend.pages.departments.create', compact('articleCategory'));
    }

    public function update($id, DepartmentRequest $request){
        $articleCategory = $this->articleCategoryService->updateDepartment($id, $request);
        if($articleCategory) return redirect()->route('departments.index')->with('success', 'Department updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $articleCategory = $this->articleCategoryService->deleteDepartment($id);
        if($articleCategory) return redirect()->route('departments.index')->with('success', 'Department deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
