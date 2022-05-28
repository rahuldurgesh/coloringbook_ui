<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta10
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Coloring Book -Main Categories </title>
    @include('live.includes.top-scripts')
</head>
<body>
<div class="page">
    @include('live.coloringbook.includes.side-menu')
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Coloring Book Categories
                        </h2>

                        <div class="page-pretitle">
                            All Categories currently available in coloring book's &nbsp;<span class="bg-green-lt">Android /&nbsp;iOS App</span>
                        </div>
                    </div>
                    <!-- Page title actions -->
                    <div class="col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline"><a
                                        href="{{route('live.coloringbook.authentication.sign-in')}}"
                                        class="btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#logout-modal">Logout</a></span>
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                               data-bs-target="#create-new-category-modal">
                                Create new Category
                            </a>
                            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                               data-bs-target="#create-new-category-modal" aria-label="Create new Category">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="12" y1="5" x2="12" y2="19"/>
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <!-- Data Row -->
                <div class="row row-cards">

                    <!-- Category New cat Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/categories/new.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Category Daily New Maxx 32 character &nbsp;</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">18 SVGs uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="{{route('live.coloringbook.dashboard.vector-content')}}"
                                               class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">

                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#attach-to-slider-modal">Attach this category to home
                                                    slider</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category New cat Ends -->


                    <!-- Category People  Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/categories/people_bg.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Category People Maxx 32 character &nbsp;</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">18 SVGs uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="#" class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#attach-to-slider-modal">Attach this category to home
                                                    slider</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category People cat Ends -->

                    <!-- Category Sports  Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/categories/sports.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Category Sports Maxx 32 character &nbsp;</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">17 SVGs uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="#" class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#update-remove-to-slider-modal">This category is
                                                    attached to home slider</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category Sports cat Ends -->

                    <!-- Category Space  Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/categories/space.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Category Space Maxx 32 character &nbsp;</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">17 SVGs uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="#" class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#">Attach this category to home slider</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category Space cat Ends -->

                    <!-- Category Flowers  Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/categories/flowers.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Category Flowers Maxx 32 character &nbsp;</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">17 SVGs uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="#" class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#">Attach this category to home slider</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category Flowers cat Ends -->

                    <!-- Category Festivals  Start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/categories/festival_new.png')}}')"></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Category Festivals Maxx 32 character &nbsp;</h3>

                                        <h3 class="card-subtitle"><span class="bg-green-lt">17 SVGs uploaded</span></h3>

                                        <div class="card-text">
                                            <a href="#" class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <!-- Mark Category as slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#">Attach this category to home slider</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category Festivals cat Ends -->

                </div>

            </div>
        </div>
        @include('live.includes.footer')
    </div>
</div>
@include('live.coloringbook.modals.categories.create-new-category')
@include('live.coloringbook.modals.categories.sucess-alert')
@include('live.coloringbook.modals.categories.error-alert')
@include('live.coloringbook.modals.categories.attach-to-slider-category')
@include('live.coloringbook.modals.categories.slider-sucess-alert')
@include('live.coloringbook.modals.categories.slider-error-alert')
@include('live.coloringbook.modals.categories.update-remove-to-slider-category')
@include('live.coloringbook.modals.logout-alert')

        <!-- Libs JS -->
<!-- Tabler Core -->
@include('live.includes.bottom-scripts')
</body>
</html>