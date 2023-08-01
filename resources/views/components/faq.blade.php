<div class=" col-lg-12 col-md-12 col-sm-12">
    <div class="fag-item">
        <div class="flex-box">
            <h5>
                {{ $faq->getTranslatedAttribute('question') }}
            </h5>
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M15.75 5.625L9 12.375L2.25 5.625" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
        </div>
        <p>
            {{ $faq->getTranslatedAttribute('answer') }}
        </p>

    </div>

</div>
