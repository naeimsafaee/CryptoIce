<tr>
    <td class="chid2" data-label="Transaction number">
        <p>
            {{ $transaction->id }}
        </p>
    </td>
    <td data-label="Type">
        @if($transaction->is_deposit)
            <a class="flex-box withdraw-items">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path class="black-path"
                          d="M3 7H19C19.5304 7 20.0391 7.21071 20.4142 7.58579C20.7893 7.96086 21 8.46957 21 9V18.5C21 19.163 20.7366 19.7989 20.2678 20.2678C19.7989 20.7366 19.163 21 18.5 21H13"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="black-path"
                          d="M17 7V6C17 5.46957 16.7893 4.96086 16.4142 4.58579C16.0391 4.21071 15.5304 4 15 4H5.5C4.83696 4 4.20107 4.26339 3.73223 4.73223C3.26339 5.20107 3 5.83696 3 6.5V15"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="green-path" d="M6.5 15.5V22.5" stroke="#1DB954"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="green-path" d="M8.5 17.5L6.5 15.5L4.5 17.5" stroke="#1DB954"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="black-path" d="M17 14H15" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{ text('Deposit') }}
            </a>
        @else
            <a class="flex-box withdraw-items">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path class="black-path"
                          d="M3 7H19C19.5304 7 20.0391 7.21071 20.4142 7.58579C20.7893 7.96086 21 8.46957 21 9V18.5C21 19.163 20.7366 19.7989 20.2678 20.2678C19.7989 20.7366 19.163 21 18.5 21H13"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="black-path"
                          d="M17 7V6C17 5.46957 16.7893 4.96086 16.4142 4.58579C16.0391 4.21071 15.5304 4 15 4H5.5C4.83696 4 4.20107 4.26339 3.73223 4.73223C3.26339 5.20107 3 5.83696 3 6.5V15"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="blue-path" d="M6.5 22.501V15.501" stroke="#3797FD"
                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="blue-path" d="M4.5 20.501L6.5 22.501L8.5 20.501"
                          stroke="#3797FD" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path class="black-path" d="M17 14H15" stroke-width="1.5"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{ text('Withdraw') }}
            </a>
        @endif
    </td>
    <td data-label="Time">
        <p class="grey">
            {{ \Carbon\Carbon::createFromDate($transaction->update_at)->format('Y.m.d') }}
        </p>
    </td>
    <td data-label="Amount">
        <h6>
            {{ ($transaction->amount) }} @if($transaction->coin_id) {{ strtoupper($transaction->coin->coin->symbol) }} @endif
        </h6>
    </td>
    <td data-label="Status">

        @if($transaction->status === 0)
            <div class="flex-box Status yellow">
                <img src="{{ asset('assets/icon/yellow-clock.svg') }}">
                {{ text('Pending') }}
            </div>
        @elseif($transaction->status === 1)
            <div class="flex-box Status green">
                <img src="{{ asset('assets/icon/green-clock.svg') }}">
                {{ text('Done') }}
            </div>
        @else
            <div class="flex-box Status red">
                <img src="{{ asset('assets/icon/red-clock.svg') }}">
                {{ text('Failed') }}
            </div>
        @endif

    </td>
    <td>
        <div class="flex-box sell-by-buttons">
            <a class="button"
                @if($transaction->network_id && $transaction->network->symbol === 'bep20')

                    href="https://bscscan.com/tx/{{ $transaction->tx_id }}"

                @elseif($transaction->network_id && $transaction->network->symbol === 'erc20')

                    href="https://etherscan.com/tx/{{ $transaction->tx_id }}"

                @endif
            >
                {{ text('Details')}}
            </a>

        </div>
    </td>
</tr>
