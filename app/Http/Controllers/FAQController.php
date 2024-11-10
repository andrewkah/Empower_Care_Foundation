<?php

namespace App\Http\Controllers;

use App\Http\Requests\FAQRequest;
use App\Services\FAQService;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function __construct(private FAQService $faqService)
    {
        
    }

    public function index(){
        $data = $this->faqService->getAllFAQs();
        return view('backend.pages.faqs.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.faqs.create');
    }

    public function store(FAQRequest $request){
        $faqs = $this->faqService->storeFAQ($request);
        if ($faqs) return redirect()->route('faqs.index')->with('success', "FAQ created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $faq = $this->faqService->getSingleFAQ($id);
        return view('backend.pages.faqs.create', compact('faq'));
    }

    public function update($id, FAQRequest $request){
        $faq = $this->faqService->updateFAQ($id, $request);
        if($faq) return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $faq = $this->faqService->deleteFAQ($id);
        if($faq) return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
