<section id="contact" class="vf">
    <div class="a">
        <div class="mb hd ca">
            <div class="bc df">
                <div class="vc fa sg gb"> <span class="fh _g mh kb ta"> Contact With Me </span>
                    <h2 class="dh jh wg wj kk oa">Have an Project in Mind?</h2>
                    <p class="eh _g lh">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="mb kd ga">
            <div class="bc ql/12 df">
                @if (session('success'))
                    <div style="color: #0d9a2e; font-weight:bold; padding: 8px 0;">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb hd ga">
                        <div class="bc ek/2 df">
                            <div class="eb">
                                <input type="text" name="name" placeholder="Enter your name" class="input-field" required/>
                            </div>
                        </div>
                        <div class="bc ek/2 df">
                            <div class="eb">
                                <input type="text" name="company" placeholder="Company (Optional)" class="input-field" />
                            </div>
                        </div>
                        <div class="bc ek/2 df">
                            <div class="eb">
                                <input type="email" name="email" placeholder="Enter your email" class="input-field" required/>
                            </div>
                        </div>
                        <div class="bc ek/2 df">
                            <div class="eb">
                                <input type="text" name="phone" placeholder="Phone number" class="input-field" required/>
                            </div>
                        </div>
                        <div class="bc df">
                            <div class="eb">
                                <textarea rows="4" name="text" placeholder="Tell me about your project" class="input-field ed" required></textarea>
                            </div>
                        </div>
                        <div class="bc df">
                            <div class="pg sg">
                                <button type="submit" class="nb kd id sf tf td fh kh pe fa ai ci ei yi si"> Contact Me </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
