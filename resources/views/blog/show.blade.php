@extends('index')

@section('content')

    <section class="main">
        <div class="row">
            <div class=" center padding-items col-lg-8 col-md-10 col-sm-12">
                <h2 class="title-item">
                    {{ $blog->getTranslatedAttribute('title') }}
                </h2>
            </div>
            <div class=" center padding-items col-lg-8 col-md-10 col-sm-12">
                <div  class="single-image-box">
                    <img src="{{ Voyager::image($blog->image) }}">
                </div>
            </div>
            <div class=" center padding-items col-lg-8 col-md-10 col-sm-12">
                <h6 class="text">
                    {!! $blog->getTranslatedAttribute('description')  !!}
                </h6>
            </div>
            <div class="margin-top center padding-items col-lg-8 col-md-10 col-sm-12">
                <div class="row">
                    <div class=" flex-box justify-content-start  col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="flex-box date">
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.8969 6.00098H15.7174C16.3824 6.00098 16.9206 6.52298 16.9206 7.16798V14.5847C16.9206 15.229 16.3824 15.751 15.7174 15.751H7.29816C6.63316 15.751 6.09497 15.229 6.09497 14.584V13.501" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.77593 13.501H12.523C13.0403 13.501 13.5228 13.2505 13.8097 12.8327L14.3773 12.0062C14.716 11.5135 14.8969 10.9345 14.8969 10.342V4.50098C14.8969 3.67223 14.2048 3.00098 13.3504 3.00098H5.61783C4.76338 3.00098 4.07132 3.67223 4.07132 4.50098V9.79298C4.07132 10.2587 3.95919 10.7177 3.745 11.1347L3.08464 12.4157C2.82715 12.9145 3.2014 13.501 3.77593 13.501Z"  stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.238 7.19336L9.06282 9.30311L7.75757 8.03786"  stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.16211 2.25V3.75"  stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.8015 2.25V3.75" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            {{ \Carbon\Carbon::createFromTimestamp($blog->created_at)->toDateString() }}
                        </div>

                    </div>
                    <div class=" flex-box justify-content-end  col-lg-6 col-md-6 col-sm-6 col-12">
                        <h5 style="margin: 0 10px 0 0">
                            {{ text('share') }}
                        </h5>
                        <a class="share-items" href="whatsapp://send?text={{$blog->getTranslatedAttribute('title') . '   ' . request()->fullUrl()}}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="path1" d="M12.003 0H11.997C5.3805 0 0 5.382 0 12C0 14.625 0.846 17.058 2.2845 19.0335L0.789 23.4915L5.4015 22.017C7.299 23.274 9.5625 24 12.003 24C18.6195 24 24 18.6165 24 12C24 5.3835 18.6195 0 12.003 0Z" />
                                <path class="path2" d="M18.9855 16.9458C18.696 17.7633 17.547 18.4413 16.6305 18.6393C16.0035 18.7728 15.1845 18.8793 12.4275 17.7363C8.90095 16.2753 6.62995 12.6918 6.45295 12.4593C6.28345 12.2268 5.02795 10.5618 5.02795 8.83977C5.02795 7.11777 5.90245 6.27927 6.25495 5.91927C6.54445 5.62377 7.02295 5.48877 7.48195 5.48877C7.63045 5.48877 7.76395 5.49627 7.88395 5.50227C8.23645 5.51727 8.41345 5.53827 8.64595 6.09477C8.93545 6.79227 9.64045 8.51427 9.72445 8.69127C9.80995 8.86827 9.89545 9.10827 9.77545 9.34077C9.66295 9.58077 9.56395 9.68727 9.38695 9.89127C9.20995 10.0953 9.04195 10.2513 8.86495 10.4703C8.70295 10.6608 8.51995 10.8648 8.72395 11.2173C8.92795 11.5623 9.63295 12.7128 10.671 13.6368C12.0105 14.8293 13.0965 15.2103 13.485 15.3723C13.7745 15.4923 14.1195 15.4638 14.331 15.2388C14.5995 14.9493 14.931 14.4693 15.2685 13.9968C15.5085 13.6578 15.8115 13.6158 16.1295 13.7358C16.4535 13.8483 18.168 14.6958 18.5205 14.8713C18.873 15.0483 19.1055 15.1323 19.191 15.2808C19.275 15.4293 19.275 16.1268 18.9855 16.9458Z" />
                            </svg>

                        </a>

                        <a class="share-items" href="{{ 'https://www.facebook.com/sharer/sharer.php?u=' . request()->fullUrl(). '&text=' . $blog->getTranslatedAttribute('title') }}" >
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="path1" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" />
                                <path class="path2"  d="M15.0168 12.4697H12.8755V20.3142H9.63132V12.4697H8.08838V9.71278H9.63132V7.92876C9.63132 6.65299 10.2373 4.65527 12.9044 4.65527L15.3075 4.66533V7.34136H13.5639C13.2779 7.34136 12.8757 7.48425 12.8757 8.09283V9.71535H15.3002L15.0168 12.4697Z" />
                            </svg>

                        </a>

                        <a class="share-items" href="{{'https://t.me/share/url?url=' . request()->fullUrl(). '&text=' . $blog->getTranslatedAttribute('title')}}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="path1"  d="M12 24C18.629 24 24 18.629 24 12C24 5.371 18.629 0 12 0C5.371 0 0 5.371 0 12C0 18.629 5.371 24 12 24ZM5.491 11.74L17.061 7.279C17.598 7.085 18.067 7.41 17.893 8.222L17.894 8.221L15.924 17.502C15.778 18.16 15.387 18.32 14.84 18.01L11.84 15.799L10.393 17.193C10.233 17.353 10.098 17.488 9.788 17.488L10.001 14.435L15.561 9.412C15.803 9.199 15.507 9.079 15.188 9.291L8.317 13.617L5.355 12.693C4.712 12.489 4.698 12.05 5.491 11.74Z" />
                            </svg>


                        </a>
                        <a class="share-items" href="{{'https://twitter.com/intent/tweet?url=' . request()->fullUrl(). '&text=' . $blog->getTranslatedAttribute('title')}}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="path1"  d="M12 0C5.3736 0 0 5.3736 0 12C0 18.6264 5.3736 24 12 24C18.6264 24 24 18.6264 24 12C24 5.3736 18.6264 0 12 0ZM17.4791 9.35632C17.4844 9.47443 17.4869 9.59308 17.4869 9.71228C17.4869 13.3519 14.7166 17.5488 9.65021 17.549H9.65039H9.65021C8.09473 17.549 6.64728 17.0931 5.42834 16.3118C5.64386 16.3372 5.86322 16.3499 6.08533 16.3499C7.37585 16.3499 8.56348 15.9097 9.50629 15.1708C8.30054 15.1485 7.28394 14.3522 6.93311 13.2578C7.10101 13.29 7.27368 13.3076 7.45074 13.3076C7.70215 13.3076 7.94568 13.2737 8.17712 13.2105C6.91681 12.9582 5.96741 11.8444 5.96741 10.5106C5.96741 10.4982 5.96741 10.487 5.96777 10.4755C6.33893 10.6818 6.76337 10.806 7.21527 10.8199C6.47571 10.3264 5.98956 9.48285 5.98956 8.52722C5.98956 8.02258 6.12598 7.5498 6.36255 7.14276C7.72083 8.80939 9.75073 9.90546 12.0399 10.0206C11.9927 9.81885 11.9683 9.60864 11.9683 9.39258C11.9683 7.87207 13.2019 6.63849 14.723 6.63849C15.5153 6.63849 16.2308 6.97339 16.7335 7.50879C17.361 7.38501 17.9502 7.15576 18.4825 6.84027C18.2765 7.48315 17.84 8.02258 17.2712 8.36371C17.8284 8.29706 18.3594 8.14929 18.8529 7.92993C18.4843 8.48236 18.0168 8.96759 17.4791 9.35632Z"/>
                            </svg>


                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection