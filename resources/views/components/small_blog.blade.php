<div class="padding-items col-lg-3 col-md-3 col-sm-6 col-12">
    <a class="box" href="{{ route('blog.show' , str_replace(" ", "_" , $blog->getTranslatedAttribute('title'))) }}">
        <div class="image-box">
            <img src="{{ Voyager::image($blog->image) }}">
        </div>
        <div class="box-content">
            <h5>
                {{ $blog->getTranslatedAttribute('title') }}
            </h5>
            <div class="flex-box date">
                <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.8969 6.00098H15.7174C16.3824 6.00098 16.9206 6.52298 16.9206 7.16798V14.5847C16.9206 15.229 16.3824 15.751 15.7174 15.751H7.29816C6.63316 15.751 6.09497 15.229 6.09497 14.584V13.501"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M3.77593 13.501H12.523C13.0403 13.501 13.5228 13.2505 13.8097 12.8327L14.3773 12.0062C14.716 11.5135 14.8969 10.9345 14.8969 10.342V4.50098C14.8969 3.67223 14.2048 3.00098 13.3504 3.00098H5.61783C4.76338 3.00098 4.07132 3.67223 4.07132 4.50098V9.79298C4.07132 10.2587 3.95919 10.7177 3.745 11.1347L3.08464 12.4157C2.82715 12.9145 3.2014 13.501 3.77593 13.501Z"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.238 7.19336L9.06282 9.30311L7.75757 8.03786"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.16211 2.25V3.75" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M11.8015 2.25V3.75" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
                {{ \Carbon\Carbon::createFromTimestamp($blog->created_at)->toDateString() }}
            </div>
        </div>
    </a>
</div>
