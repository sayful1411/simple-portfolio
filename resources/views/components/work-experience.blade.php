<section id="education" class="ig oe e z">
    <div class="a">
        <div class="zd de jg">
            <div class="mb hd ca">
                <div class="bc df">
                    <div class="vc fa sg gb">
                        <span class="fh _g mh kb ta"> Education & Experience </span>
                        <h2 class="dh jh wg wj kk oa">My Resume</h2>
                        <p class="eh _g lh">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="e cg"> <span class="d f kb x vk/2 lc qb te"></span>
                <div class="mb hd ga">

                    @foreach ($educationData as $index => $item)

                    <div class="bc pl/2 df">
                        @if($index == 0)
                        <div class="tl an bc ib mg uj em gm cl im e bg">
                        @else
                        <div class="tl an bc mg uj em dl e bg">
                        @endif
                            @if($index == 0)
                            <span class="d i g wk xk mc yb td oe yd he"></span>
                            @else
                            <span class="d i g yk mc yb td oe yd he"></span>
                            @endif
                            <h3 class="fh zg jh qa">{{ $item->course }}</h3>
                            <p class="fh ug lh ua">{{ $item->institution }}</p>
                            <span class="nb id kd if df td pe kh ah fh oa"> {{ $item->duration }} </span>
                            <p class="eh ug lh"> {{ $item->description }} </p>
                        </div>
                    </div>

                    @if($index === 0)
                        <div class="bc pl/2 df"></div>
                        <div class="bc pl/2 df"></div>
                    @endif

                    @endforeach


                    @foreach ($experienceData as $index => $item)

                    <div class="bc pl/2 df">
                        @if($index == 0)
                        <div class="tl an bc ib mg uj em gm cl im e bg">
                        @else
                        <div class="tl an bc mg uj em dl e bg">
                        @endif
                            @if($index == 0)
                            <span class="d i g wk xk mc yb td oe yd he"></span>
                            @else
                            <span class="d i g yk mc yb td oe yd he"></span>
                            @endif
                            <h3 class="fh zg jh qa">{{ $item->job_title }}</h3>
                            <p class="fh ug lh ua">{{ $item->company }}</p>
                            <span class="nb id kd if df td pe kh ah fh oa"> {{ $item->duration }} </span>
                            <p class="eh ug lh"> {{ $item->description }} </p>
                        </div>
                    </div>

                    @if($index === 0)
                        <div class="bc pl/2 df"></div>
                        <div class="bc pl/2 df"></div>
                    @endif

                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div>
        <span class="d q f ba">
            <svg width="455" height="1307" viewBox="0 0 455 1307" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.08" width="332.05" height="1060.35" transform="matrix(-0.632736 -0.774367 -0.774367 0.632736 1031.2 139.128)" fill="url(#paint0_linear_0:1)" />
                <rect opacity="0.08" width="509.849" height="1060.35" transform="matrix(-0.632736 -0.774367 -0.774367 0.632736 1293.7 635.81)" fill="url(#paint1_linear_0:1)" />
                <defs>
                    <linearGradient id="paint0_linear_0:1" x1="166.025" y1="0" x2="166.025" y2="1060.35" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_0:1" x1="254.924" y1="0" x2="254.924" y2="1060.35" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
        </span>
        <span class="d g k aa">
            <svg width="416" height="1453" viewBox="0 0 416 1453" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.08" width="332.05" height="1030.82" transform="matrix(0.632736 0.774368 0.774368 -0.632736 -603 1507.24)" fill="url(#paint0_linear_0:1)" />
                <rect opacity="0.08" width="791.583" height="1060.35" transform="matrix(0.632736 0.774368 0.774368 -0.632736 -906.263 670.922)" fill="url(#paint1_linear_0:1)" />
                <defs>
                    <linearGradient id="paint0_linear_0:1" x1="166.025" y1="0" x2="166.025" y2="1030.82" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_0:1" x1="395.791" y1="0" x2="395.791" y2="1060.35" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
        </span>
    </div>
</section>
