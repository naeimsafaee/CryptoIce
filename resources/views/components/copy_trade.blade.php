<div class="padding-items col-lg-4 col-md-6 col-sm-12 col-12">
    <a class="border-item second-card-item" href="{{ route('copy_trade.show' , $trader->username) }}">
        <div class="flex-box justify-content-start">
            <div class="img-box">
                <img src="{{ $trader->avatar ? Voyager::image($trader->avatar) : asset('assets/icon/user.svg') }}">
            </div>
            <div>
                <h6>
                    {{ $trader->full_name }}
                </h6>
                <p>
                    {{ $trader->username }}
                </p>
            </div>
        </div>
        <div class="flex-box justify-content-between">
            <div>
                <h6 class="green">
                    {{ $trader->trader->percent }}%
                </h6>
                <p>
                    {{ text('Return') }}
                </p>
            </div>
            <div>
                <div class="number-border">
                    {{ floor($trader->trader->trades->sum('risk') /  ( $trader->trader->trades->count() !== 0 ? $trader->trader->trades->count() : 1)) }}
                </div>
                <p>
                    {{ text('Risk') }}
                </p>
            </div>
        </div>
        <div
                data-id="{{ $trader->trader->id }}" data-name="{{ $trader->full_name }}"
                data-username="{{ $trader->username }}" data-percent="{{ $trader->trader->percent }}"
                data-price="{{ $trader->trader->price }}" data-description="{{ $trader->trader->description }}" data-avatar="{{ $trader->avatar ? Voyager::image($trader->avatar) : asset('assets/icon/user.svg') }}"
                class="dark-button" @if(!auth()->guard('clients')->user()->is_this_trader_copied($trader->trader->id)) data-toggle="modal" @endif data-target="#follow-pay-popup"
                onclick="event.preventDefault();handleGetCopyId(event)">
            @if(auth()->guard('clients')->user()->is_this_trader_copied($trader->trader->id))
                {{ text('Copied') }}
            @else
                {{ text('Copy') }}
            @endif
        </div>
        <div class="flex-box justify-content-center">
            <span>
                {{ $trader->trader->copier->count() }} Copiers
            </span>
            {{--<span class="red">
                -1.98
            </span>--}}
        </div>
    </a>
</div>
