@extends('../front.mobile.app')
@section('content')
@include('front.mobile.partials.header')
<main class="homeContent">
    <section>
        <div class="bannerSlider">
            @if ($promotions->count() > 0)
            @foreach ($promotions as $key => $promotion)
            @if ($key == 0)
            <div class="item">
                <a href="{{ url('/'.$lang->lang.'/'.$site.'/promotions/'.$promotion->alias) }}" class="item">
                    <img src="/images/promotions/{{ $promotion->img_mobile }}" alt="" />
                </a>
                {{-- <div class="text white">
                    <span>-{{ $promotion->discount }}%</span> {{ trans('vars.DetailsProductSet.offThe') }} <br />
                    <span>{{ $promotion->translation->name }}</span> {{ trans('vars.DetailsProductSet.collection') }}
                </div>
                <div class="text red">
                    <span>-{{ $promotion->discount }}%</span> {{ trans('vars.DetailsProductSet.offThe') }} <br />
                    <span>{{ $promotion->translation->name }}</span> {{ trans('vars.DetailsProductSet.collection') }}
                </div> --}}
            </div>
            @else
            <div class="item">
                <a href="{{ url('/'.$lang->lang.'/'.$site.'/promotions/'.$promotion->alias) }}" class="item"><img class="load-img" data-src="/images/promotions/{{ $promotion->img_mobile }}" src="" alt="" /></a>
                <div class="text white">
                    <span>-{{ $promotion->discount }}%</span> {{ trans('vars.DetailsProductSet.offThe') }} <br />
                    <span>{{ $promotion->translation->name }}</span> {{ trans('vars.DetailsProductSet.collection') }}
                </div>
                <div class="text red">
                    <span>-{{ $promotion->discount }}%</span> {{ trans('vars.DetailsProductSet.offThe') }} <br />
                    <span>{{ $promotion->translation->name }}</span> {{ trans('vars.DetailsProductSet.collection') }}
                </div>
            </div>
            @endif
            @endforeach
            @endif
        </div>
    </section>
    <section class="points">
        <div class="container">
            <div class="row justify-content-center align-items-end">
                <div class="col-6">
                    <div class="item">
                        <svg
                            width="54px"
                            height="36px"
                            viewBox="0 0 54 36"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            >
                            <g id="AnaPopova-Site" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g
                                    id="Home_Page_375"
                                    transform="translate(-35.000000, -506.000000)"
                                    fill="#B22D00"
                                    fill-rule="nonzero"
                                    >
                                    <g id="icons-slaider" transform="translate(0.000000, 468.000000)">
                                        <g id="Group-20" transform="translate(4.000000, 38.000000)">
                                            <g id="shipped-2" transform="translate(31.000000, 0.500000)">
                                                <g id="shipped">
                                                    <path
                                                        d="M50.2197891,14.8385957 L48.8213789,9.10950617 C49.2037031,9.02632716 49.4905781,8.67891975 49.4905781,8.26270062 L49.4905781,7.33898148 C49.4905781,5.33339506 47.8974727,3.70179012 45.9394453,3.70179012 L39.5699766,3.70179012 L39.5699766,1.79645062 C39.5699766,0.809537037 38.7861328,0.00669753086 37.8225703,0.00669753086 L5.35485938,0.00669753086 C4.39129688,0.00669753086 3.60745313,0.809537037 3.60745313,1.79645062 L3.60745313,17.5 C3.60745313,17.9782253 3.98598047,18.366034 4.45299609,18.366034 C4.91990625,18.366034 5.29853906,17.9783333 5.29853906,17.5 L5.29853906,1.79645062 C5.29853906,1.76458333 5.32374609,1.73876543 5.35485938,1.73876543 L37.8224648,1.73876543 C37.8535781,1.73876543 37.8787852,1.76458333 37.8787852,1.79645062 L37.8787852,17.500216 C37.8787852,17.9784414 38.2573125,18.36625 38.7243281,18.36625 C39.1912383,18.36625 39.5698711,17.9785494 39.5698711,17.500216 L39.5698711,16.5184877 L49.5439453,16.5184877 C49.5447891,16.5184877 49.5454219,16.5187037 49.5461602,16.5187037 C49.5470039,16.5187037 49.5477422,16.5185957 49.5484805,16.5185957 C50.7758203,16.5194599 51.817957,17.3445525 52.175918,18.4815123 L49.546793,18.4815123 C49.0798828,18.4815123 48.70125,18.869213 48.70125,19.3475463 L48.70125,21.1949846 C48.70125,22.6912346 49.8896719,23.9084568 51.3505195,23.9084568 L52.3088086,23.9084568 L52.3088086,27.7188117 L50.0979727,27.7188117 C49.3717148,25.5709568 47.37825,24.0238272 45.0373711,24.0238272 C42.6964922,24.0238272 40.7029219,25.5709568 39.9767695,27.7188117 L39.5696602,27.7188117 L39.5696602,21.1948765 C39.5696602,20.7166512 39.1911328,20.3288426 38.7241172,20.3288426 C38.257207,20.3288426 37.8785742,20.7165432 37.8785742,21.1948765 L37.8785742,27.7185957 L20.336168,27.7185957 C19.6099102,25.5707407 17.6164453,24.0236111 15.2755664,24.0236111 C12.9346875,24.0236111 10.9411172,25.5707407 10.2149648,27.7185957 L5.35485938,27.7185957 C5.32374609,27.7185957 5.29853906,27.6927778 5.29853906,27.6609105 L5.29853906,25.755679 L8.96241797,25.755679 C9.42932813,25.755679 9.80796094,25.3679784 9.80796094,24.8896451 C9.80796094,24.4113117 9.42943359,24.0236111 8.96241797,24.0236111 L0.845542969,24.0236111 C0.378632813,24.0236111 0,24.4113117 0,24.8896451 C0,25.3679784 0.378527344,25.755679 0.845542969,25.755679 L3.60755859,25.755679 L3.60755859,27.6609105 C3.60755859,28.6478241 4.39140234,29.4506636 5.35496484,29.4506636 L9.92218359,29.4506636 C9.92197266,29.469892 9.92070703,29.4890123 9.92070703,29.5083488 C9.92070703,32.532608 12.3229688,34.9929784 15.2755664,34.9929784 C18.2281641,34.9929784 20.6304258,32.532608 20.6304258,29.5083488 C20.6304258,29.4889043 20.6291602,29.469892 20.6289492,29.4506636 L39.6839883,29.4506636 C39.6837773,29.469892 39.6825117,29.4890123 39.6825117,29.5083488 C39.6825117,32.532608 42.0847734,34.9929784 45.0373711,34.9929784 C47.9899688,34.9929784 50.3922305,32.532608 50.3922305,29.5083488 C50.3922305,29.4889043 50.3909648,29.469892 50.3907539,29.4506636 L53.1543516,29.4506636 C53.6212617,29.4506636 53.9998945,29.062963 53.9998945,28.5846296 L53.9998945,19.3473302 C53.9998945,17.066713 52.3571133,15.1718519 50.2197891,14.8385957 Z M39.5699766,5.43375 L45.9394453,5.43375 C46.9651289,5.43375 47.7995977,6.28844136 47.7995977,7.33898148 L47.7995977,7.39666667 L39.5699766,7.39666667 L39.5699766,5.43375 Z M39.5699766,14.7865278 L39.5699766,9.12862654 L47.083043,9.12862654 L48.4640508,14.7865278 L39.5699766,14.7865278 Z M15.2755664,33.2612346 C13.2553125,33.2612346 11.6116875,31.5778858 11.6116875,29.5085648 C11.6116875,27.4392438 13.2553125,25.7558951 15.2755664,25.7558951 C17.2958203,25.7558951 18.9394453,27.4392438 18.9394453,29.5085648 C18.9394453,31.5778858 17.2958203,33.2612346 15.2755664,33.2612346 Z M45.037582,33.2612346 C43.0173281,33.2612346 41.3737031,31.5778858 41.3737031,29.5085648 C41.3737031,27.4392438 43.0173281,25.7558951 45.037582,25.7558951 C47.0578359,25.7558951 48.7014609,27.4392438 48.7014609,29.5085648 C48.7014609,31.5778858 47.0578359,33.2612346 45.037582,33.2612346 Z M52.3090195,22.1763889 L51.3507305,22.1763889 C50.822332,22.1763889 50.3924414,21.7360802 50.3924414,21.1948765 L50.3924414,20.2133642 L52.3089141,20.2133642 L52.3089141,22.1763889 L52.3090195,22.1763889 Z"
                                                        id="Shape"
                                                        ></path>
                                                    <path
                                                        d="M15.2755664,27.7188117 C14.3120039,27.7188117 13.5281602,28.5216512 13.5281602,29.5085648 C13.5281602,30.4954784 14.3120039,31.2983179 15.2755664,31.2983179 C16.2391289,31.2983179 17.0229727,30.4954784 17.0229727,29.5085648 C17.0229727,28.5216512 16.2391289,27.7188117 15.2755664,27.7188117 Z"
                                                        id="Path"
                                                        ></path>
                                                    <path
                                                        d="M45.037582,27.7188117 C44.0740195,27.7188117 43.2901758,28.5216512 43.2901758,29.5085648 C43.2901758,30.4954784 44.0740195,31.2983179 45.037582,31.2983179 C46.0011445,31.2983179 46.7849883,30.4954784 46.7849883,29.5085648 C46.7849883,28.5216512 46.0011445,27.7188117 45.037582,27.7188117 Z"
                                                        id="Path"
                                                        ></path>
                                                    <path
                                                        d="M35.116875,24.0239352 L22.4905781,24.0239352 C22.023668,24.0239352 21.6450352,24.4116358 21.6450352,24.8899691 C21.6450352,25.3683025 22.0235625,25.7560031 22.4905781,25.7560031 L35.116875,25.7560031 C35.5837852,25.7560031 35.962418,25.3683025 35.962418,24.8899691 C35.962418,24.4116358 35.5838906,24.0239352 35.116875,24.0239352 Z"
                                                        id="Path"
                                                        ></path>
                                                    <path
                                                        d="M13.4718398,20.3289506 L2.64926953,20.3289506 C2.18235938,20.3289506 1.80372656,20.7166512 1.80372656,21.1949846 C1.80372656,21.6733179 2.18225391,22.0610185 2.64926953,22.0610185 L13.4718398,22.0610185 C13.93875,22.0610185 14.3173828,21.6733179 14.3173828,21.1949846 C14.3173828,20.7166512 13.93875,20.3289506 13.4718398,20.3289506 Z"
                                                        id="Path"
                                                        ></path>
                                                    <path
                                                        d="M29.4016289,8.57391975 C29.0715117,8.23580247 28.5360469,8.23580247 28.2059297,8.57402778 L20.6868516,16.275216 L16.775332,12.2689043 C16.4451094,11.930679 15.90975,11.930679 15.5796328,12.2689043 C15.2494102,12.6071296 15.2494102,13.1553549 15.5796328,13.4935802 L20.0890547,18.112284 C20.2541133,18.2814506 20.4705352,18.3659259 20.6868516,18.3659259 C20.903168,18.3659259 21.1196953,18.2814506 21.2846484,18.112284 L29.4015234,9.7987037 C29.7317461,9.46037037 29.7317461,8.91214506 29.4016289,8.57391975 Z"
                                                        id="Path"
                                                        ></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>{{ trans('vars.General.homePageOption1') }}</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <svg
                            width="35px"
                            height="35px"
                            viewBox="0 0 35 35"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            >
                            <g id="AnaPopova-Site" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g
                                    id="Home_Page_375"
                                    transform="translate(-189.000000, -509.000000)"
                                    fill="#B22D00"
                                    fill-rule="nonzero"
                                    >
                                    <g id="icons-slaider" transform="translate(0.000000, 468.000000)">
                                        <g id="Group-19" transform="translate(138.000000, 41.000000)">
                                            <g id="flag" transform="translate(51.000000, 0.500000)">
                                                <path
                                                    d="M20.5761719,5.9765625 L20.5761719,3.984375 C20.5761719,1.78739062 18.7362109,0 16.4746094,0 L6.15234375,0 L5.12695312,0 L0,0 L0,34 L6.15234375,34 L6.15234375,20.0546875 L12.3730469,20.0546875 L12.3730469,22.046875 C12.3730469,24.2438594 14.2130078,26.03125 16.4746094,26.03125 L35,26.03125 L35,5.9765625 L20.5761719,5.9765625 Z M4.16666667,31.5714286 L2.5,31.5714286 L2.5,1.61904762 L4.16666667,1.61904762 L4.16666667,31.5714286 Z M16.25,24.2857143 C15.10125,24.2857143 14.1666667,23.3778333 14.1666667,22.2619048 L14.1666667,20.2380952 L16.25,20.2380952 C17.39875,20.2380952 18.3333333,21.1459762 18.3333333,22.2619048 C18.3333333,23.3778333 17.39875,24.2857143 16.25,24.2857143 Z M18.3333333,18.6190476 C17.7233195,18.2707839 17.0159991,18.0703097 16.2615101,18.0703097 L5.83333333,18.0703097 L5.83333333,1.61904762 L16.2615101,1.61904762 C17.4039134,1.61904762 18.3333333,2.53392813 18.3333333,3.65846027 L18.3333333,18.6190476 Z M33.3333333,24.2857143 L20,24.2857143 C20.3612733,23.6947619 20.5692364,23.0095435 20.5692364,22.2786305 L20.5692364,8.0952381 L33.3333333,8.0952381 L33.3333333,24.2857143 Z"
                                                    id="Shape"
                                                    ></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>{{ trans('vars.General.homePageOption2') }}</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <svg
                            width="43px"
                            height="38px"
                            viewBox="0 0 43 38"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            >
                            <g id="AnaPopova-Site" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g
                                    id="Home_Page_375"
                                    transform="translate(-320.000000, -506.000000)"
                                    fill="#B22D00"
                                    fill-rule="nonzero"
                                    >
                                    <g id="icons-slaider" transform="translate(0.000000, 468.000000)">
                                        <g id="Group-17" transform="translate(287.000000, 38.000000)">
                                            <g id="box-(1)-2" transform="translate(33.000000, 0.500000)">
                                                <g id="box-(1)">
                                                    <path
                                                        d="M42.8759879,18.8390953 L38.2293944,11.2792716 C38.2257129,11.2735132 38.2217684,11.2682782 38.2183499,11.2627815 C38.2146683,11.257023 38.2109868,11.251788 38.2073054,11.2462913 C38.1996793,11.2347744 38.1917904,11.2235192 38.1831125,11.212264 C38.179957,11.2078143 38.1760125,11.2036263 38.1725939,11.1989148 C38.1620753,11.1858274 38.1520827,11.17274 38.1407751,11.1604378 C38.1384085,11.1578203 38.1357789,11.1552028 38.1331492,11.1525853 C38.126838,11.1455181 38.1202639,11.1384509 38.1131638,11.1313837 C38.1105342,11.1287662 38.1079045,11.125887 38.1052748,11.1230077 C38.0821339,11.0997121 38.0571523,11.0785105 38.0316446,11.0583558 C38.0266483,11.0546913 38.021652,11.0507651 38.0171816,11.0471006 C37.9971962,11.0321809 37.9766849,11.0180465 37.9553848,11.0049591 C37.9524921,11.0031269 37.9493365,11.0010329 37.946181,10.9992006 C37.9419735,10.9965831 37.9380291,10.9939657 37.9338217,10.9916099 C37.9330327,10.9913481 37.9327697,10.9905629 37.9322438,10.9903011 C37.930666,10.9892541 37.9285623,10.9889924 37.9269845,10.9876837 C37.900688,10.9730258 37.8738655,10.9599383 37.8465172,10.9481596 C37.8425727,10.9465892 37.8388912,10.9444952 37.8349468,10.9429247 C37.8323171,10.9416159 37.8299504,10.9405689 37.8273207,10.9397837 C37.7973427,10.9277433 37.7665758,10.9175351 37.735283,10.9086356 C37.7308125,10.9075886 37.7260792,10.9060181 37.7218717,10.9049711 C37.7202939,10.9047094 37.7192421,10.9041859 37.7179272,10.9034006 L24.1297312,7.45381556 C24.1107977,7.44936578 24.0918643,7.44596306 24.0726678,7.44229855 C23.7439614,6.7049527 23.3621361,6.12125331 22.9235103,5.6846566 C21.84772,4.61384298 20.5207981,3.58988237 18.1882976,3.01612939 C16.6349627,2.63423813 15.1886546,2.61277478 15.1352727,2.60675454 C15.0737388,2.59994911 15.0114161,2.59654633 14.9493563,2.59654633 L13.505152,2.59654633 L13.505152,1.67859396 C13.505152,0.989933322 13.0825671,0.370897781 12.4393544,0.117525114 C12.2379231,0.0384770642 12.027551,0 11.8195456,0 C11.3622493,0 10.9141568,0.185318038 10.5888689,0.530564473 L6.67621108,4.68477687 C6.36985674,5.00986862 6.20602946,5.44332434 6.22101846,5.88855873 C6.23600745,6.33431665 6.42849798,6.75573197 6.75588952,7.05988383 L10.6682844,10.694787 C10.9869981,10.9905629 11.4003792,11.1460416 11.8192826,11.1460416 C12.0462215,11.1460416 12.2750012,11.1007591 12.4911585,11.0073148 C13.1067598,10.7408547 13.505152,10.1359536 13.505152,9.46770942 L13.505152,9.06932798 L14.9493563,9.06932798 C15.5644317,9.06932798 16.1434809,9.11827499 16.685452,9.21616901 L16.3951385,9.37845316 L6.88447944,14.5739015 C6.87816828,14.5770425 6.87238308,14.5809688 6.86607192,14.5846332 C6.86423115,14.585942 6.86212743,14.5869889 6.85976076,14.5882977 C6.85686812,14.59013 6.85371254,14.5914387 6.85055696,14.5935327 C6.84634952,14.5961502 6.84214208,14.5990294 6.83793464,14.6016469 C6.82846789,14.6074054 6.8192641,14.6139491 6.81032325,14.620231 C6.80269728,14.625466 6.79480836,14.6304392 6.78770828,14.6359359 C6.78560456,14.6372447 6.78402681,14.6385535 6.78218603,14.6398622 C6.7735082,14.6464059 6.76561921,14.6529497 6.75746728,14.6597551 C6.74957836,14.6660371 6.74142642,14.6725808 6.73380045,14.6793862 C6.73090782,14.6814802 6.72801519,14.6840977 6.72512262,14.6867152 C6.72117813,14.6903797 6.71723363,14.6943059 6.71328914,14.6982321 C6.71118542,14.6998026 6.70960766,14.7016349 6.70776689,14.7034671 C6.70066682,14.7100108 6.69356681,14.7165545 6.68672968,14.7236217 C6.68199628,14.7283333 6.67778883,14.7333064 6.67331844,14.7377561 C6.66727023,14.7440381 6.66174798,14.7505819 6.65569983,14.7571256 C6.65149239,14.7618371 6.64728495,14.7668103 6.64307751,14.7717835 C6.63676634,14.7788507 6.63124403,14.7864414 6.62572178,14.7940321 C6.61941061,14.8013611 6.6133624,14.8089518 6.60784015,14.8168043 C6.60626232,14.81916 6.60468457,14.8209922 6.60310681,14.8230862 C6.5931141,14.8366972 6.58417332,14.8510933 6.57549542,14.8652277 C6.57207689,14.8704627 6.56865836,14.8751742 6.56550278,14.8804092 L5.19229896,17.1730653 C4.95378965,17.5714468 5.08500919,18.086568 5.4849791,18.3239741 C5.88494908,18.5608565 6.40246442,18.4310292 6.64071077,18.0326479 L7.69546384,16.2718649 L17.3063126,18.6056156 L22.8099093,19.9426275 L17.0909442,29.2881003 L2.14690006,25.5364573 L3.35706552,23.5157579 C3.59557482,23.1176383 3.46435528,22.6027787 3.0643853,22.3653728 C2.66467834,22.1279668 2.147163,22.2580558 1.90865363,22.6564373 L0.118913141,25.6448213 C-0.0173027511,25.8722808 -0.0378140632,26.1510431 0.0642163988,26.395778 C0.166246861,26.6407747 0.378722668,26.8232136 0.637217386,26.8881272 L6.44716845,28.3468523 L6.44716845,32.0712734 C6.44716845,32.4581379 6.7125003,32.7947466 7.09011812,32.8866204 L23.9301407,36.9761809 C23.9493371,36.9808923 23.9690595,36.9835098 23.9887819,36.9866508 C24.0011413,36.9890065 24.0135007,36.9918858 24.0255971,36.9934562 C24.0603084,36.997906 24.0950198,37 24.1297312,37 C24.1626019,37 24.1954725,36.9973825 24.2278172,36.9939798 C24.2351802,36.9929328 24.2422803,36.9918858 24.2496433,36.9908388 C24.2814621,36.986389 24.3130179,36.9806306 24.3440478,36.9722546 C24.3490441,36.9709459 24.3535146,36.9693754 24.3585109,36.9680666 C24.3871741,36.9599524 24.4153114,36.9505295 24.4429227,36.9392743 C24.4484449,36.9374421 24.4537042,36.9353481 24.4592265,36.9332541 C24.4894675,36.9204284 24.5189196,36.9057705 24.5475828,36.8892803 C24.5502125,36.8882333 24.5528421,36.8871863 24.5554718,36.8858775 L37.9356624,29.1064468 C38.19442,28.9559413 38.3537769,28.6800583 38.3537769,28.3819266 L38.3537769,20.1164286 L42.1570412,20.1164286 C42.4620807,20.1164286 42.7431905,19.9523122 42.8925547,19.6871609 C43.0413929,19.422533 43.0353448,19.0982265 42.8759879,18.8390953 L42.8759879,18.8390953 Z M35.2910223,12.0226377 L24.0011413,18.5040571 L22.0830738,18.0381446 L22.0883331,14.9479403 C22.1214667,15.1463458 22.1335631,15.2717233 22.1356668,15.296066 C22.1879969,16.186273 22.9287696,16.8676047 23.8162768,16.8676047 C23.8415215,16.8676047 23.8667661,16.8668195 23.8922737,16.8657725 C24.8147553,16.8257249 25.5326501,16.0451905 25.503461,15.1264529 C25.5010943,15.056566 25.4450827,13.3931535 25.1466173,11.4708716 C25.0246015,10.6871963 24.8810225,9.97628701 24.7150915,9.33500285 L35.2910223,12.0226377 Z M11.8190197,7.39047236 L11.8190197,9.46770942 L7.90636182,5.83280629 L11.8190197,1.67859396 L11.8190197,4.27487849 C11.8190197,4.27487849 14.167824,4.23168999 14.9493563,4.27487849 C16.7627637,4.3748665 19.7242768,4.7172337 21.7309636,6.87116309 C23.4365552,8.70183299 23.8178546,15.1798496 23.8178546,15.1798496 C23.8178546,15.1798496 23.2961319,7.39047236 14.9493563,7.39047236 C14.8565297,7.39047236 11.8190197,7.39047236 11.8190197,7.39047236 Z M17.2050711,10.8507891 L18.8128397,9.95220614 C19.420815,10.2880296 19.9541083,10.7186061 20.4111417,11.2439356 C20.4103527,11.2614727 20.408512,11.2782246 20.408512,11.2957618 L20.3974675,17.6287697 L9.59801641,15.0063103 L17.2050711,10.8507891 Z M8.13303778,28.7703615 L17.2815939,31.0672057 C17.3499648,31.0844811 17.4193876,31.0925953 17.4874956,31.0925953 C17.7767572,31.0925953 18.0520817,30.9439221 18.2074941,30.690026 L19.0765937,29.2697779 L21.4296055,29.7076833 C21.4816726,29.7173681 21.5337397,29.7220795 21.5852808,29.7220795 C21.9834101,29.7220795 22.3373611,29.440438 22.413095,29.0368217 C22.4988217,28.5813791 22.1972007,28.1429501 21.7396414,28.05762 L20.0148532,27.7367162 L23.2866651,22.3899771 L23.2866651,35.092376 L8.13303778,31.4121904 L8.13303778,28.7703615 Z M36.6671187,27.8997856 L24.9730604,34.6989678 L24.9730604,19.8837341 L36.6671187,13.1701437 L36.6671187,27.8997856 Z M38.3535139,18.4378347 L38.3535139,14.6969234 L40.6528808,18.4378347 L38.3535139,18.4378347 Z"
                                                        id="Shape"
                                                        ></path>
                                                    <path
                                                        d="M33.4693016,21.9764729 C33.2010179,21.8248852 32.8701167,21.8262079 32.6023729,21.979383 L26.8909542,25.2450013 C26.6248299,25.3973828 26.4615385,25.6762196 26.4615385,25.9778078 L26.4615385,31.1063948 C26.4615385,31.4106285 26.6280687,31.6918463 26.8979718,31.8426404 C27.031034,31.9172438 27.1792107,31.9545455 27.3268477,31.9545455 C27.479073,31.9545455 27.6310285,31.915392 27.7667897,31.8368202 L33.4782084,28.5339002 C33.7419037,28.3815188 33.9038458,28.1037402 33.9038458,27.8032102 L33.9038458,22.7116603 C33.9041154,22.4079557 33.738125,22.1275316 33.4693016,21.9764729 L33.4693016,21.9764729 Z M32.1729572,27.3190817 L28.1924268,29.6212051 L28.1924268,26.4648463 L32.1729572,24.1886489 L32.1729572,27.3190817 Z"
                                                        id="Shape"
                                                        ></path>
                                                    <path
                                                        d="M21.6710394,31.4040428 L19.9701876,31.1256292 C19.5343287,31.0547125 19.1145014,31.3055474 19.0330909,31.6866152 C18.95143,32.0674641 19.2389967,32.4343047 19.6748556,32.5054403 L21.3759579,32.7834162 C21.4258061,32.7917336 21.4754038,32.7954545 21.5245006,32.7954545 C21.903748,32.7954545 22.2409124,32.56016 22.3130545,32.2226491 C22.3947155,31.8415813 22.1073993,31.4751784 21.6710394,31.4040428 L21.6710394,31.4040428 Z"
                                                        id="Path"
                                                        ></path>
                                                    <path
                                                        d="M27.3237128,22.7045455 C27.4714135,22.7045455 27.6212626,22.6639182 27.7579529,22.5780534 L30.1700398,21.0621647 C30.5806477,20.8045703 30.7181437,20.2383811 30.4780629,19.7981078 C30.2377136,19.3575463 29.7102878,19.2100202 29.3002169,19.4676147 L26.8875929,20.9835033 C26.4772534,21.2410978 26.339489,21.8072869 26.5795697,22.2472721 C26.7401607,22.5411718 27.0280428,22.7045455 27.3237128,22.7045455 L27.3237128,22.7045455 Z"
                                                        id="Path"
                                                        ></path>
                                                    <path
                                                        d="M31.2583106,18.5221569 L31.2195421,18.5315438 C30.785285,18.6374075 30.5159197,19.0871979 30.617624,19.5364668 C30.7049789,19.9218524 31.036273,20.1818182 31.4028112,20.1818182 C31.4637331,20.1818182 31.5256619,20.174778 31.5878425,20.1596546 L31.6268628,20.1502677 C32.0608681,20.0449255 32.3302334,19.5948744 32.2285291,19.1453447 C32.1268249,18.6958151 31.692316,18.4170754 31.2583106,18.5221569 L31.2583106,18.5221569 Z"
                                                        id="Path"
                                                        ></path>
                                                    <path
                                                        d="M4.11423021,21.0227273 C4.17540674,21.0227273 4.23708675,21.0156871 4.29927031,21.0005637 L4.33829232,20.9911768 C4.77231839,20.8858346 5.04194819,20.4360441 4.93998734,19.9862538 C4.83827823,19.5367241 4.40400048,19.2579845 3.96997448,19.363066 L3.93070066,19.3724529 C3.49667466,19.4777951 3.22729654,19.9278462 3.32925739,20.3773758 C3.41611299,20.7627615 3.74792634,21.0227273 4.11423021,21.0227273 Z"
                                                        id="Path"
                                                        ></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>{{ trans('vars.General.homePageOption3') }}</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <svg
                            width="39px"
                            height="36px"
                            viewBox="0 0 39 36"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            >
                            <g id="AnaPopova-Site" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g
                                    id="Home_Page_375"
                                    transform="translate(-253.000000, -623.000000)"
                                    fill="#B22D00"
                                    fill-rule="nonzero"
                                    >
                                    <g id="Group-21" transform="translate(188.000000, 623.000000)">
                                        <g id="credit-card-2" transform="translate(65.000000, 0.000000)">
                                            <g id="credit-card">
                                                <path
                                                    d="M30.9445614,28.1128696 C30.5994912,27.8665043 30.1257895,27.9550957 29.8866959,28.3103217 C29.6549766,28.6546696 29.3923918,28.9894696 29.1058596,29.3055652 C28.9139006,29.5175739 28.6497953,29.7731739 28.3624269,30.0248609 C28.0426725,30.3050348 28.0040526,30.7989391 28.2761404,31.1281826 C28.4265146,31.3100609 28.6403684,31.4035043 28.8555146,31.4035043 C29.0296842,31.4035043 29.2047661,31.3422261 29.3479181,31.2168522 C29.6831813,30.9230609 29.9841579,30.6313043 30.2178538,30.3729652 C30.5540292,30.0021652 30.8631404,29.6081217 31.1365205,29.2017913 C31.375614,28.8465652 31.2897076,28.359 30.9445614,28.1128696 Z"
                                                    id="Path"
                                                    ></path>
                                                <path
                                                    d="M27.6325263,31.6219304 C27.4541754,31.2306261 27.0016842,31.0622087 26.6214152,31.2457304 L26.5976199,31.2567652 C26.2134737,31.4312087 26.0395322,31.8932609 26.2091404,32.288713 C26.3345789,32.5814087 26.6129766,32.7555391 26.9049825,32.7555391 C27.007538,32.7555391 27.1117661,32.7340174 27.2115088,32.6887043 C27.2300585,32.6803304 27.2484561,32.6717217 27.2669298,32.6628783 C27.6470468,32.4792783 27.8107251,32.0133913 27.6325263,31.6219304 Z"
                                                    id="Path"
                                                    ></path>
                                                <path
                                                    d="M36.6528538,7.82608696e-05 L2.27119883,7.82608696e-05 C1.01878947,7.82608696e-05 0,1.0490087 0,2.33812174 L0,24.270887 C0,25.5599217 1.01878947,26.6087739 2.27119883,26.6087739 L18.2806608,26.6087739 C18.9593216,29.564687 20.4940058,31.6581652 21.8352865,32.9994 C23.7930409,34.9573304 26.0372515,36 26.9046023,36 C27.7718772,36 30.0160877,34.9574087 31.9739181,32.9994783 C33.3151988,31.6581652 34.8499591,29.564687 35.5285439,26.6088522 L36.6528538,26.6088522 C37.9051871,26.6088522 38.9240526,25.56 38.9240526,24.2709652 L38.9240526,2.33812174 C38.9240526,1.0490087 37.9051871,7.82608696e-05 36.6528538,7.82608696e-05 Z M34.3625731,23.401487 C34.3625731,27.5248957 32.5136842,30.2600348 30.9625029,31.8284609 C29.1225088,33.6889565 27.235076,34.4126348 26.9046023,34.4346261 C26.5740526,34.4126348 24.6865439,33.6890348 22.8465497,31.8284609 C21.2955205,30.2600348 19.4465556,27.5248957 19.4465556,23.401487 L19.4465556,19.5474522 C22.0640409,18.7682087 24.5132105,17.7017478 26.9048304,16.3002522 C29.2425497,17.6661391 31.8014971,18.7800261 34.3625731,19.5469826 L34.3625731,23.401487 Z M37.4035848,24.270887 C37.4035848,24.6969391 37.0667251,25.0435565 36.6528538,25.0435565 L35.7929532,25.0435565 C35.8511871,24.5191304 35.883117,23.9722435 35.883117,23.401487 L35.883117,18.9540783 C35.883117,18.6008087 35.6532222,18.2914435 35.3221404,18.1988609 C32.5615029,17.4271304 29.7835322,16.2245739 27.2885965,14.7212609 C27.0514035,14.5783565 26.7578012,14.578513 26.5204561,14.7214174 C23.9548187,16.2673826 21.3270702,17.4047478 18.4870643,18.1988609 C18.1559825,18.2915217 17.9260877,18.600887 17.9260877,18.9540783 L17.9260877,23.401487 C17.9260877,23.9722435 17.9579415,24.5191304 18.0162515,25.0435565 L2.27119883,25.0435565 C1.85725146,25.0435565 1.52046784,24.6968609 1.52046784,24.270887 L1.52046784,10.9564435 L37.4035848,10.9564435 L37.4035848,24.270887 Z M37.4035848,9.39130435 L1.52046784,9.39130435 L1.52046784,6.26102609 L37.4035848,6.26102609 L37.4035848,9.39130435 Z M37.4035848,4.69573043 L1.52046784,4.69573043 L1.52046784,2.33812174 C1.52046784,1.9119913 1.85725146,1.56529565 2.27119883,1.56529565 L36.6528538,1.56529565 C37.0667251,1.56529565 37.4035848,1.9119913 37.4035848,2.33812174 L37.4035848,4.69573043 Z"
                                                    id="Shape"
                                                    ></path>
                                                <path
                                                    d="M9.12257895,16.4350174 C8.66423392,16.4350174 8.21166667,16.5304174 7.79277778,16.7122957 C7.38354386,16.5337826 6.93378947,16.4350174 6.46214035,16.4350174 C4.57577193,16.4350174 3.0410117,18.0147913 3.0410117,19.9566 C3.0410117,21.8984087 4.57569591,23.4783391 6.46214035,23.4783391 C6.93378947,23.4783391 7.38354386,23.3795739 7.79270175,23.2010609 C8.21166667,23.3829391 8.66423392,23.4783391 9.12257895,23.4783391 C11.0090234,23.4783391 12.5437836,21.8984087 12.5437836,19.9566 C12.5437836,18.0147913 11.0090234,16.4350174 9.12257895,16.4350174 Z M6.46214035,21.9131217 C5.41408187,21.9131217 4.56147953,21.0355043 4.56147953,19.9566 C4.56147953,18.8777739 5.41408187,18.0002348 6.46214035,18.0002348 C7.51004678,18.0002348 8.36264912,18.8777739 8.36264912,19.9566 C8.36264912,21.0354261 7.51004678,21.9131217 6.46214035,21.9131217 Z M9.31104094,21.9035739 C9.67215205,21.3454957 9.88311696,20.6759739 9.88311696,19.9566783 C9.88311696,19.2373826 9.67215205,18.5680174 9.31111696,18.0099391 C10.2709123,18.1076087 11.0232398,18.9434348 11.0232398,19.9566783 C11.0232398,20.9699217 10.2709123,21.8058261 9.31104094,21.9035739 Z"
                                                    id="Shape"
                                                    ></path>
                                                <path
                                                    d="M7.71150877,12.9131217 L3.80109357,12.9131217 C3.38121637,12.9131217 3.04085965,13.2634957 3.04085965,13.6957304 C3.04085965,14.127887 3.38121637,14.4783391 3.80109357,14.4783391 L7.71150877,14.4783391 C8.13138596,14.4783391 8.47174269,14.1278087 8.47174269,13.6957304 C8.47174269,13.2634957 8.13138596,12.9131217 7.71150877,12.9131217 Z"
                                                    id="Path"
                                                    ></path>
                                                <path
                                                    d="M9.95876023,12.9131217 L9.92272515,12.9131217 C9.50284795,12.9131217 9.16249123,13.2634957 9.16249123,13.6957304 C9.16249123,14.127887 9.50284795,14.4783391 9.92272515,14.4783391 L9.95876023,14.4783391 C10.3785614,14.4783391 10.7189942,14.1278087 10.7189942,13.6957304 C10.7189942,13.2634957 10.3785614,12.9131217 9.95876023,12.9131217 Z"
                                                    id="Path"
                                                    ></path>
                                                <path
                                                    d="M31.0776023,21.6020348 C30.780883,21.2965826 30.2995789,21.2964261 30.0025556,21.6019565 L25.9370526,25.7868 L23.8066491,23.5935391 C23.5097018,23.2881652 23.0283216,23.2880087 22.7314503,23.5935391 C22.4345789,23.8992261 22.4345029,24.3947739 22.7314503,24.7003826 L25.3994912,27.4470261 C25.5479649,27.5998696 25.7425088,27.6763304 25.9370526,27.6763304 C26.1315965,27.6763304 26.3262164,27.5998696 26.474538,27.4470261 L31.0775263,22.7088783 C31.3744737,22.4033478 31.3744737,21.9078 31.0776023,21.6020348 Z"
                                                    id="Path"
                                                    ></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>{{ trans('vars.General.homePageOption4') }}</span>
                    </div>
                </div>
                <div class="col-md-12 text-right"><a href="{{ url('/' . $lang->lang .'/'.$site.'/livrare-achitare-retur') }}">{{ trans('vars.General.viewDetails') }}</a></div>
            </div>
        </div>
    </section>
    <home-sliders-mob site="{{ $site }}"></home-sliders-mob>
    <section class="about">
        <div class="container">
            <h3 id="titleAbout">{{ trans('vars.General.brandsHistory') }}</h3>
            <div class="row">
                <div class="col-12">
                    <h4>{{ trans('vars.General.since2007') }}</h4>
                    <div class="aboutContainer">
                        <div class="blocOne">
                            <img src="{{ Banner('Banner_HP_About_Section_1', 'mobile') }}" id="about1" alt="icon" />
                            <img src="{{ Banner('Banner_HP_About_Section_2', 'mobile') }}" id="about2" alt="icon" />
                        </div>
                        <div class="blocTwo">
                            <img src="{{ Banner('Banner_HP_About_Section_3', 'mobile') }}" id="about3" alt="icon" />
                            <img src="{{ Banner('Banner_HP_About_Section_4', 'mobile') }}" id="about4" alt="icon" />
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p>
                        {{ trans('vars.General.brandHitoryTitle') }}
                    </p>
                    <p>
                        {{ trans('vars.General.brandHitoryBody') }}
                    </p>
                </div>
                <div class="col-12 text-right" style="margin-top: 30px;">
                    <a href="{{ url('/'.$lang->lang.'/'.$site.'/about') }}">
                        <span>{{ trans('vars.General.brandHitoryLink') }}</span>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@include('front.mobile.partials.footer')
@stop
