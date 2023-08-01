<a href="{{ route('blog.index' , ['category' => str_replace(" " , "_" , $blog_category->getTranslatedAttribute('title'))]) }}" class="border-item-details flex-box">
    <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path d="M9 0.57666L17.6603 15.4415H0.339746L9 0.57666Z"/>
    </svg>
    <p>
        {{ $blog_category->getTranslatedAttribute('title') }}
    </p>
</a>
