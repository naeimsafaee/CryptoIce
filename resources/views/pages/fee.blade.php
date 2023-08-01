@extends('index')

@section('content')
    <section class="main">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="text fee-p">Our trading fees are different for regular and VIP users. Regular users are
                    categorized into tiers by their total OKB holdings whereas VIP users are categorized by 30-day
                    trading volumes and daily asset balances. Tiers are updated daily.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="text margin-bottom">
                    According to the requirements they meet (details below), users are able to avail discounts on
                    trading fee according to their tiers. The discounts are different across spot, futures, perpetual
                    swaps and options markets. Users can avail benefits of the highest tier they are categorized. For
                    example, if a user's 30-day spot trading volume reaches 20,000,000 USD (VIP 2), 30-day futures
                    trading volume reaches 200,000,000 USD (VIP 3), 30-day options trading volume reaches 5,000,000 USD
                    (VIP 1) and total assets balance for the day reaches 5,000,000 USD (VIP 4) at 4:00 pm UTC, this user
                    will be classified as VIP 4 tier discounts in all markets, including spot, futures, swaps and
                    options.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="text-center title-item">
                    Spot Fee
                </div>
                <table class="coin-table Transaction-table margin-bottom">
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">Asset($)</th>
                        <th class="text-center" scope="col">30days trading(V/$)</th>
                        <th class="text-center" scope="col">maker/taket</th>
                        <th class="text-center" scope="col">limit(btc)</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center" data-label="Asset($)">
                            >=100000

                        </td>
                        <td class="text-center" data-label="30days trading(V/$)">
                            >=10.000.000

                        </td>
                        <td class="text-center" data-label="maker/taket">
                            0.25

                        </td>
                        <td class="text-center" data-label="limit(btc)">
                            300


                        </td>

                    </tr>
                    <tr>
                        <td class="text-center" data-label="Asset($)">
                            >=500000

                        </td>
                        <td class="text-center" data-label="30days trading(V/$)">
                            >=20.000.000

                        </td>
                        <td class="text-center" data-label="maker/taket">
                            0.25

                        </td>
                        <td class="text-center" data-label="limit(btc)">
                            400


                        </td>

                    </tr>
                    <tr>
                        <td class="text-center" data-label="Asset($)">
                            >=2000000

                        </td>
                        <td class="text-center" data-label="30days trading(V/$)">
                            >=50.000.000

                        </td>
                        <td class="text-center" data-label="maker/taket">
                            0.25

                        </td>
                        <td class="text-center" data-label="limit(btc)">
                            500


                        </td>

                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="text-center title-item">
                    Wallet Fee
                </div>
                <table class="coin-table Transaction-table margin-bottom">
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">cion/token</th>
                        <th class="text-center" scope="col">full name</th>
                        <th class="text-center" scope="col">min withrawal erc_20</th>
                        <th class="text-center" scope="col">min withrawal bep_20</th>
                        <th class="text-center" scope="col">withrawal fee erc_20</th>
                        <th class="text-center" scope="col">withrawal fee bep_20</th>
                        <th class="text-center" scope="col">deposit fee</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            BTC

                        </td>
                        <td class="text-center" data-label="full name">
                            Bitcoin

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            0.0015

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            0.000003
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            0.00095
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.0000075
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            ETH

                        </td>
                        <td class="text-center" data-label="full name">
                            Ethereum

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            0.015

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            0.00015
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            0.008
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.0008
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            LINK

                        </td>
                        <td class="text-center" data-label="full name">
                            Chainlink

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            4

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            0.0003
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            2
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.017
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            USDT

                        </td>
                        <td class="text-center" data-label="full name">
                            Tether

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            60

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            30
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            37
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            8
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            LTC

                        </td>
                        <td class="text-center" data-label="full name">
                            Litecoin

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            **

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            0.004
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            **
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.0035
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            BCH

                        </td>
                        <td class="text-center" data-label="full name">
                            Bitcoin cash

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            0.2

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            0.003
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            0.13
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.00075
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            ETC

                        </td>
                        <td class="text-center" data-label="full name">
                            Eth-clasic

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            **

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            0.2
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            **
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.0077
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            BNB

                        </td>
                        <td class="text-center" data-label="full name">
                            Binance coin

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            0.015

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            0.03
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            0.12
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.00075
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            EOS

                        </td>
                        <td class="text-center" data-label="full name">
                            Eos

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            10

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            10
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            0.17
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.17
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            XLM

                        </td>
                        <td class="text-center" data-label="full name">
                            Stellar

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            **

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            2.5
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            **
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            1.3
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            TRX

                        </td>
                        <td class="text-center" data-label="full name">
                            Tron

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            850

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            10
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            430
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            5
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            DOG

                        </td>
                        <td class="text-center" data-label="full name">
                            Dogecoin

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            **

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            3
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            **
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            1.5
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            UNI

                        </td>
                        <td class="text-center" data-label="full name">
                            Uniswap

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            6

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            0.1
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            3.2
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.035
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            DOT

                        </td>
                        <td class="text-center" data-label="full name">
                            Polkadot

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            3.3

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            0.04
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            1.8
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.025
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            ADA

                        </td>
                        <td class="text-center" data-label="full name">
                            Cardano

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            **

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            1
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            **
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.33
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            SHIBA

                        </td>
                        <td class="text-center" data-label="full name">
                            Shiba inu

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            2100000

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            15000
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            1150000
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            7700
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            XMR

                        </td>
                        <td class="text-center" data-label="full name">
                            Monero

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            **

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            0.1
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            **
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.02
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" data-label="cion/token">
                            MIOTA

                        </td>
                        <td class="text-center" data-label="full name">
                            Iota

                        </td>
                        <td class="text-center" data-label="min withrawal  erc_20">
                            **

                        </td>
                        <td class="text-center" data-label="min withrawal bep_20">
                            1
                        </td>
                        <td class="text-center" data-label="withrawal fee erc_20">
                            **
                        </td>
                        <td class="text-center" data-label="withrawal fee bep_20">
                            0.33
                        </td>
                        <td class="text-center" data-label="deposit fee">
                            free
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="text margin-bottom orange-text">
                    30-day trading volume (USD) is the total trading volume for the corresponding market
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="second-title">Total OKB holding</div>
                <div class="text margin-bottom">
                    Total OKB holding is the total amount of OKB that you have in both primary and sub-accounts.
                    Including spot and margin accounts (OKB in Savings are not included).
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="second-title">Primary and sub-accounts</div>
                <div class="text margin-bottom orange-text">
                    The tier of your primary account is determined by 30-day trading volume and daily asset balance of
                    all primary and sub-accounts. Fee level of your primary account will be applied to your sub-accounts
                    at 10:00 am UTC after sub-account created.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="second-title">30-day trading volume (USD)</div>
                <div class="text margin-bottom ">
                    Transactions are recorded in BTC equivalents according to price when trading. Every 24 hours, we
                    convert your total trading volume to USD at 16:00 UTC according to the average price (= [closing
                    price + opening price]/2). For example, you have traded OMG, XUC, BTC, LTC and BCH in the last 30
                    days. We recorded each transaction in BTC equivalents at the moment of each trade happens. At each
                    4:00 pm UTC, we calculate your total trading volume in the last 30 days and convert it to USD
                    according to the daily average price.
                    </br>
                    For spot markets, we charge trading fees in base currencies. For example, if you trade BTC/USDT, we
                    charge trading fees in BTC. But if you trade USDT/BTC, we charge fees in USDT.
                    </br>
                    You can also get fee rebates from us. They’re paid in the same currencies as trading fees. For
                    example, if you trade BTC/USDT and place a BTC sell order, you can get a trading fee rebate in BTC.
                    If another user places a BTC buy order and you fill it, you can get a rebate in USDT because another
                    user pays trading fees in USDT for this order.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="second-title">Total assets balance</div>
                <div class="text margin-bottom">
                    We take a snapshot of users' all crypto assets at 4:00 pm UTC daily and convert the value to USDT,
                    then to BTC based on the daily average price of BTC/USDT (BTC/USDT middle price = [opening price +
                    closing price]/2).
                    </br>
                    Snapshot assets include classic accounts (spot, margin, futures, perpetual swap and options),
                    trading account (unified account), funding account and finance account. Assets borrowed for leverage
                    or loan are excluded.
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="second-title">Makers and takers</div>
                <div class="text margin-bottom">
                    Maker order is the limit order which enters into the order book before it can be traded in market.
                    For example, if the current BTC lowest ask price is 1,000 USDT and you create a maker order with a
                    bid price 9,99 USDT, this order cannot be filled immediately. Then it will enter into the order book
                    until someone fills it. After filled, you're required to pay the maker fee and taker will pay the
                    taker fee. Vice versa, you need to pay the taker fee when your limit ask order traded successfully.

                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="second-title">24h withdrawal limit (BTC)</div>
                <div class="text margin-bottom">
                    24h withdrawal limit is the maximum amount of crypto you can withdraw within 24 hours, in BTC
                    equivalent. If you want to increase your limit, please contact CryptooICE support.
                    </br>
                    For example. Your 24h withdrawal limit is 300 BTC. After withdrawing 250 BTC, 25 BTC equivalent in
                    OMG, and 15 BTC equivalent in XUC, you’ll have a 10 BTC limit remained for withdrawal within 24
                    hours. If you want to withdraw 20 BTC qeuivalent in XRP, which exceeds 10 BTC limit, you can
                    withdraw until the next day. Alternatively, you can contact our customer support to increase your
                    limit tentatively.
                    </br>
                    24h withdrawal limit is different under different KYC levels. For KYC Level 1, the limit is ≤ 200
                    BTC. For KYC Level 2, the limit is ≤ 500 BTC.
                </div>
            </div>

        </div>
    </section>
@endsection
