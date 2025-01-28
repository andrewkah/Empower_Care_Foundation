@extends('website.layout.main')
@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="{{__('messages.departments')}}" bgImage="assets/images/backgrounds/page-header-bg.png" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

        <!--Testimonial Page Start -->
        <section class="testimonial-page">
            <div class="container">
                <div class="row">
                    @forelse($departments as $department)
                    <!--Testimonial One Single Start -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-content">
                                    <h3 class="testimonial-one__client-name"><a href="javascript:void(0)">{{$department->name}}</a></h3>
                                </div>
                            </div>
                            <p class="testimonial-one__text">{!! $department->description !!}</p>
                            
                        </div>
                    </div>
                    <!--Testimonial One Single End -->
                    @empty
                    <!--Testimonial One Single Start -->
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">No Departments added </p>
                            
                        </div>
                    </div>
                    <!--Testimonial One Single End -->
                    @endforelse
                   
                </div>
            </div>
        </section>
        <!--Testimonial Page End -->

      <!--Site Footer Two Start-->
      @include('website.layout.footer')
      <!--Site Footer Two End-->
  @endsection