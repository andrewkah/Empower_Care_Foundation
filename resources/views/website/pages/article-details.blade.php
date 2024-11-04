@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Articles" bgImage="assets/images/backgrounds/page-header-bg.jpg"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->
            <!--Blog Details Start-->
            <section class="blog-details">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="blog-details__left">
                                <div class="blog-details__img">
                                    <img src="assets/images/blog/blog-details-img-1.jpg" alt="">
                                </div>
                                <div class="blog-details__content">
                                    <ul class="blog-details__meta list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-user"></span>
                                            </div>
                                            <a href="#">By admin</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-file"></span>
                                            </div>
                                            <a href="#">Category</a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-comment"></span>
                                            </div>
                                            <a href="#">Comments (05)</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-details__title">Explore the world like never before travel
                                        experience</h3>
                                    <p class="blog-details__text-1">Web designing in a powerful way of just not an only
                                        professions, however, in a passion for our Company. We have to a tendency to believe
                                        the idea that smart looking of any website is the first impression on visitors.Web
                                        designing in a powerful way of just not an only professions, however, in a passion
                                        for our Company. We have</p>
                                    <p class="blog-details__text-2">Web designing in a powerful way of just not an only
                                        professions, however, in a passion for our Company. We have to a tendency to believe
                                        the idea that smart looking of any website is the first impression on visitors.Web
                                        designing in a powerful way </p>
                                    <div class="blog-details__author-box">
                                        <p class="blog-details__author-text">Aliquam eros justo, posuere loborti viverra
                                            laoreet matti ullamcorper posuere vive rra .Aliquam eros justo, posuere
                                            lobortis, viverra laoreet augue mattis fermentu m ul amcorper viverra laoreet.
                                        </p>
                                        <span class="blog-details__author-name">Mark wood</span>
                                        <div class="blog-details__author-quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <p class="blog-details__text-3">Web designing in a powerful way of just not an only
                                        professions, however, in a passion for our Company. We have to a tendency to believe
                                        the idea that smart looking of any website is the first impression on visitors.Web
                                        designing in a powerful way of just not an only professions, however, in a passion
                                        for our Company. We have</p>
                                </div>
                                <div class="blog-details__keyword-and-tag">
                                    <div class="blog-details__keyword">
                                        <span>Keyword:</span>
                                        <div class="blog-details__keyword-list">
                                            <a href="#">Relief Effort</a>
                                            <a href="#">Kindness</a>
                                            <a href="#">Helping</a>
                                        </div>
                                    </div>
                                    <div class="blog-details__tag">
                                        <span>Tags:</span>
                                        <div class="blog-details__tag-list">
                                            <a href="#">Donation</a>
                                            <a href="#">Charity</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-one">
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h4>Stanio lainton</h4>
                                            <span>September 16, 2024</span>
                                            <p>Ished fact that a reader will be distrol acted bioii the.ished fact that a
                                                reader will be distrol acted laoreet Aliquam fact that a reader will be
                                                distrol acted Aliquam eros justo. Ished fact that a reader will be distrol
                                                acted bioii the.i</p>
                                            <div class="comment-one__btn-box">
                                                <a href="blog-details.html" class="comment-one__btn">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-one__single">
                                        <div class="comment-one__image">
                                            <img src="assets/images/blog/comment-1-2.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <h4>Junal Alex</h4>
                                            <span>September 16, 2024</span>
                                            <p>Ished fact that a reader will be distrol acted bioii the.ished fact that a
                                                reader will be distrol acted laoreet Aliquam fact that a reader will be
                                                distrol acted Aliquam eros justo. Ished fact that a reader will be distrol
                                                acted bioii the.i</p>
                                            <div class="comment-one__btn-box">
                                                <a href="blog-details.html" class="comment-one__btn">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <h3 class="comment-form__title">Add a comment</h3>
                                    <p class="comment-form__text">By using form u agree with the message sorage, you can
                                        contact us directly now</p>
                                    <form action="assets/inc/sendemail.php"
                                        class="comment-form__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Your Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="comment-form__input-box">
                                                    <input type="email" placeholder="Your Email" name="email">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Your Website" name="website">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write your messege"></textarea>
                                                </div>
                                                <div class="comment-form__check-and-btn">
                                                    <div class="checked-box">
                                                        <input type="checkbox" name="skipper1" id="skipper" checked="">
                                                        <label for="skipper"><span></span>Save my name email and
                                                            website</label>
                                                    </div>
                                                    <div class="comment-form__btn-box">
                                                        <button type="submit" class="comment-form__btn thm-btn">Send
                                                            Messege<span><i class="icon-arrow-right"></i></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="result"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="sidebar">
                                <div class="sidebar__single sidebar__search">
                                    <div class="sidebar__title-box">
                                        <h3 class="sidebar__title">Search Here </h3>
                                    </div>
                                    <form action="#" class="sidebar__search-form">
                                        <input type="search" placeholder="Search..">
                                        <button type="submit"><i class="icon-search"></i></button>
                                    </form>
                                </div>
                                <div class="sidebar__single sidebar__category">
                                    <div class="sidebar__title-box">
                                        <h3 class="sidebar__title">Categories</h3>
                                    </div>
                                    <ul class="sidebar__category-list list-unstyled">
                                        <li>
                                            <a href="blog-details.html">Donation Drive<span>59</span></a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Community Outreach<span>35</span></a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Volunteer Assistance<span>12</span></a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Fundraising Event<span>46</span></a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Support Network<span>78</span></a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">Philanthropic Initiative<span>89</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__single sidebar__post">
                                    <div class="sidebar__title-box">
                                        <h3 class="sidebar__title">Recent Post</h3>
                                    </div>
                                    <ul class="sidebar__post-list list-unstyled">
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="assets/images/blog/blog-lp-1.jpg" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <p class="sidebar__post-date"><span class="icon-calender"></span>October 19,
                                                    2022</p>
                                                <h3 class="sidebar__post-title"><a href="blog-details.html">Funding Research
                                                        for a Cure Charity</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="assets/images/blog/blog-lp-2.jpg" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <p class="sidebar__post-date"><span class="icon-calender"></span>October 19,
                                                    2022</p>
                                                <h3 class="sidebar__post-title"><a href="blog-details.html">Supporting
                                                        Mental Health Initiatives Donations</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="assets/images/blog/blog-lp-3.jpg" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <p class="sidebar__post-date"><span class="icon-calender"></span>October 19,
                                                    2022</p>
                                                <h3 class="sidebar__post-title"><a href="blog-details.html">Caring for the
                                                        Elderly and Vulnerable at a Time</a></h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar__single sidebar__tag">
                                    <div class="sidebar__title-box">
                                        <h3 class="sidebar__title">Popular Tags</h3>
                                    </div>
                                    <div class="sidebar__tag-list">
                                        <a href="blog-details.html">Giving Back</a>
                                        <a href="blog-details.html">Relief Effort</a>
                                        <a href="blog-details.html">Positive Impact</a>
                                        <a href="blog-details.html">Kindness</a>
                                        <a href="blog-details.html">Care</a>
                                        <a href="blog-details.html">Helping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Blog Details End-->
 <!--Site Footer Two Start-->
 @include('website.layout.footer')
 <!--Site Footer Two End-->
@endsection            