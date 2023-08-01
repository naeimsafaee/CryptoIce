@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            <div class="flex-box justify-content-start padding-items col-lg-3 col-md-4 col-sm-6 col-12">
                <h2>
                    {{ text('header Learning') }}
                </h2>
            </div>
            <div class="padding-items col-lg-5 col-md-6 col-sm-12 col-12">
                <div class="input-row">
                    <svg class="search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.059 18.118C14.9576 18.118 18.118 14.9576 18.118 11.059C18.118 7.16042 14.9576 4 11.059 4C7.16042 4 4 7.16042 4 11.059C4 14.9576 7.16042 18.118 11.059 18.118Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 20L16.05 16.05" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>

                    <form action="{{ route('blog.index') }}" method="GET">
                        <input class="search-input" name="search" value="{{ request()->search }}" type="text"
                               placeholder="{{ text('search') }}"/>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="padding-items col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="border-item">
                            <div class="flex-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 10H5C3.895 10 3 9.105 3 8V5C3 3.895 3.895 3 5 3H8C9.105 3 10 3.895 10 5V8C10 9.105 9.105 10 8 10Z"
                                        stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M19 10H16C14.895 10 14 9.105 14 8V5C14 3.895 14.895 3 16 3H19C20.105 3 21 3.895 21 5V8C21 9.105 20.105 10 19 10Z"
                                        stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M8 21H5C3.895 21 3 20.105 3 19V16C3 14.895 3.895 14 5 14H8C9.105 14 10 14.895 10 16V19C10 20.105 9.105 21 8 21Z"
                                        stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M20 15.55H15" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M15 19.45H20" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <h5>
                                    {{ text('category title') }}
                                </h5>
                            </div>
                            <div class="line"></div>

                            @each('components.blog_category' , $blog_categories , 'blog_category')

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="border-item">
                            <h5 class=" margin-top text-center">
                                {{ text('Have an Question q') }}
                            </h5>
                            <a class="flex-box center-button button white-button">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.8996 6.414L16.0716 3.586C15.6966 3.211 15.1876 3 14.6576 3H7.4856C6.3806 3 5.4856 3.895 5.4856 5V19C5.4856 20.105 6.3806 21 7.4856 21H17.4856C18.5906 21 19.4856 20.105 19.4856 19V7.828C19.4856 7.298 19.2746 6.789 18.8996 6.414V6.414Z"
                                        stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path d="M19.4856 8H15.4856C14.9336 8 14.4856 7.552 14.4856 7V3"
                                          stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path
                                        d="M15.6806 17.9999C15.5256 17.6099 15.2846 17.2589 14.9766 16.9739C14.4546 16.4909 13.7706 16.2219 13.0596 16.2219H11.9116C11.2006 16.2219 10.5156 16.4909 9.99459 16.9739C9.68559 17.2589 9.44559 17.6099 9.29059 17.9999"
                                        stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                    <path
                                        d="M13.6346 11.069C14.2692 11.7036 14.2692 12.7325 13.6346 13.3671C13 14.0017 11.9711 14.0017 11.3365 13.3671C10.7019 12.7325 10.7019 11.7036 11.3365 11.069C11.9711 10.4344 13 10.4344 13.6346 11.069Z"
                                        stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                </svg>
                                <p>
                                    {{ text('ask me') }}
                                </p>

                            </a>

                        </div>
                    </div>
                </div>
            </div>

            @if(count($blogs) > 0)

                <div class=" col-lg-9 col-md-8 col-sm-6 col-12">
                    <div class="row">

                        @each('components.blog' , $blogs , 'blog')

                    </div>
                </div>
            @else
                <div class=" col-lg-9 col-md-8 col-sm-6 col-12">

                <div class="row margin-bottom">
                    <h5 class="text-center">
                        {{text('Search result for')}} <span class="blue">“ {{ request()->search }} ”</span>
                    </h5>
                    <h5 class="date text-center search-result">
                        {{text('No result')}}
                    </h5>

                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <svg class="not-found-img" width="193" height="176" viewBox="0 0 193 176" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <line x1="6.32715" y1="27.678" x2="122.584" y2="27.678" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="135.775" y1="27.678" x2="141.543" y2="27.678" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="91.3184" y1="62.9822" x2="97.0864" y2="62.9822" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="72.3589" y1="62.9822" x2="78.1269" y2="62.9822" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="53.3989" y1="62.9822" x2="59.167" y2="62.9822" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="53.3989" y1="94.3635" x2="59.167" y2="94.3635" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="72.3589" y1="94.3635" x2="78.1269" y2="94.3635" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="72.3589" y1="126.399" x2="78.1269" y2="126.399" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="53.3989" y1="126.399" x2="59.167" y2="126.399" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="154.082" y1="27.678" x2="163.772" y2="27.678" stroke-width="6"
                                  stroke-linecap="round"/>
                            <path
                                d="M166.445 122.861V12.2192C166.445 7.24867 162.416 3.21924 157.445 3.21924H12C7.02942 3.21924 3 7.24868 3 12.2192V139.685C3 144.656 7.02944 148.685 12 148.685H140.294"
                                stroke-width="6" stroke-linecap="round"/>
                            <line x1="53.3989" y1="15.2561" x2="153.965" y2="15.2561" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="53.3989" y1="50.5603" x2="141.543" y2="50.5603" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="53.3989" y1="82.5957" x2="91.2022" y2="82.5957" stroke-width="6"
                                  stroke-linecap="round"/>
                            <line x1="53.3989" y1="113.977" x2="85.3182" y2="113.977" stroke-width="6"
                                  stroke-linecap="round"/>
                            <circle class="path1" cx="39.9389" cy="15.641" r="2.61512"/>
                            <circle class="path2" cx="34.0548" cy="56.8292" r="6.15293" stroke-width="6"/>
                            <circle class="path2" cx="34.0548" cy="88.2105" r="6.15293" stroke-width="6"/>
                            <circle class="path2" cx="34.0548" cy="119.592" r="6.15293" stroke-width="6"/>
                            <circle class="path1" cx="27.517" cy="15.641" r="2.61512"/>
                            <circle class="path1" cx="15.0951" cy="15.641" r="2.61512"/>
                            <circle class="path2" cx="125.584" cy="106.516" r="27.7277" stroke-width="6"/>
                            <line x1="146.825" y1="128.745" x2="155.004" y2="136.924" stroke-width="6"
                                  stroke-linecap="round"/>
                            <rect class="path2" x="150.747" y="142.187" width="13.1652" height="40.6007" rx="6.58261"
                                  transform="rotate(-44.331 150.747 142.187)" stroke-width="6"/>
                        </svg>

                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h6 class="not-found-massage text-center">
                            {{text('Sorry!No result found')}}
                        </h6>
                    </div>

                </div>
                </div>

            @endif

        </div>


    </section>

@endsection
