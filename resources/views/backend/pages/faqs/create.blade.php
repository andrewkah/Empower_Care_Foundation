@extends('backend.layout.main')

@section('content')
    <!-- header area start -->
    <x-admin.header pageTitle="faqs" currentPage="faqs"></x-admin.header>
    <!-- header area end -->
    <div class="main-content-inner">
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-10 col-xs-12">
                <div class="row">
                    <!-- basic form start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">@if(isset($faq)) Edit FAQ @else FAQs @endif</h4>
                                <x-form has-files :action="isset($faq) ? route('faqs.update', $faq->id): route('faqs.store')" :method="isset($faq) ? 'PUT': 'POST'">
                                    <div class="form-group">
                                        <x-input.label for="question">Question</x-input.label>
                                            <x-input.text type="text" class="form-control @error('question') error-message @enderror" id="question" :value="isset($faq) ? old('question',$faq): old('question')" name="question" placeholder="Enter your question"
                                                required />
                                            @error('question')
                                                <x-input.error id="question"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <x-input.label for="link">Answer</x-input.label>
                                            <x-input.text type="text" class="form-control @error('answer') error-message @enderror" id="answer" :value="isset($faq) ? old('answer',$faq): old('answer')" name="answer" placeholder="Add the answer for your question"
                                                required />
                                            @error('answer')
                                                <x-input.error id="link"
                                                    class="form-text text-danger">{{ $message }}</x-input.error>
                                            @enderror
                                    </div>
                                    
                                    <div class="d-flex justify-content-end mr-0 mt-4">
                                        <x-admin.submit type="submit" color="primary">Submit</x-admin.submit>
                                    </div>
                                </x-form>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
