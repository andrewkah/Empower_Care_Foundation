<!-- Page Header Component -->
<section class="page-header">
    <div class="page-header__shape-1 float-bob-y">
        <img src="{{ asset('assets/images/shapes/page-header-shape-1.png') }}" alt="">
    </div>
    <div class="page-header__shape-2 float-bob-x">
        <img src="{{ asset('assets/images/shapes/page-header-shape-2.png') }}" alt="">
    </div>
    <div class="page-header__bg" style="background-image: url('{{ asset($bgImage) }}');">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ $title }}</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ $homeLink }}">Home</a></li>
                    <li><span class="fas fa-angle-right"></span></li>
                    <li>{{ $title }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>