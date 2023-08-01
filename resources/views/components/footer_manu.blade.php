<ul class="list-unstyled Service">

    @foreach($items as $menu_item)

        <li>
            <a href="{{ $menu_item->link() }}" class="d-flex item">
                <div class="triangle-container">
                    <svg height="20" width="20">
                        <polygon points="7.5,0 15,15 0,15" class="triangle"/>
                    </svg>
                </div>
                <span class="itemSpan">{{ $menu_item->title }}</span>
            </a>
        </li>

    @endforeach

</ul>
