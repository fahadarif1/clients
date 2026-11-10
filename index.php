<?php
ob_start();
include('include/header.php');
$pg = ob_get_contents();
$pageTitle = '';
$description = '';
$author = '';
$keywords = "";
$canonical = "";
//delete old desc and author
$pg = str_replace('content=""', '', $pg);
//add anew desc and author
$pg = str_replace('name="description"', 'name="description" content="' . $description . '" ', $pg);
$pg = str_replace('name="author"', 'name="author" content="' . $author . '" ', $pg);
$pg = str_replace('name="keywords"', 'name="keywords" content="' . $keywords . '" ', $pg);
$pg = str_replace('rel="canonical"', 'rel="canonical" href="' . $canonical . '" ', $pg);
ob_end_clean();
ob_end_clean();
echo str_replace('%TITLE%', $pageTitle, $pg);
?>


        <section class="relative flex min-h-screen flex-col justify-between overflow-hidden"
            data-tsd-source="/src/routes/index.tsx:87:7" id="top"><img alt="Wajahat Ali, attorney"
                class="absolute inset-0 h-full w-full object-cover object-right opacity-70"
                data-tsd-source="/src/routes/index.tsx:88:9" height="1088" src="assets/Gemini_Generated_Image_q0xbypq0xbypq0xb.jpg" width="1920" />
            <div class="absolute inset-0 hero-shade" data-tsd-source="/src/routes/index.tsx:89:9"></div>
            <div class="relative z-10 flex items-start justify-between px-6 pt-28 md:px-24"
                data-tsd-source="/src/routes/index.tsx:90:9">
                <div data-tsd-source="/src/routes/index.tsx:91:11">
                    <h1 class="max-w-2xl text-4xl font-medium leading-tight tracking-tight md:text-6xl"
                        data-tsd-source="/src/routes/index.tsx:92:13">Trusted Legal Counsel For Growing Business</h1>
                    <p class="mt-8 flex max-w-sm gap-3 text-xl md:text-2xl"
                        data-tsd-source="/src/routes/index.tsx:93:13"><svg aria-hidden="true"
                            class="lucide lucide-landmark mt-1 h-6 w-6 shrink-0 text-primary"
                            data-tsd-source="/src/routes/index.tsx:93:73" fill="none" height="24" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24"
                            width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 18v-7"></path>
                            <path
                                d="M11.12 2.198a2 2 0 0 1 1.76.006l7.866 3.847c.476.233.31.949-.22.949H3.474c-.53 0-.695-.716-.22-.949z">
                            </path>
                            <path d="M14 18v-7"></path>
                            <path d="M18 18v-7"></path>
                            <path d="M3 22h18"></path>
                            <path d="M6 18v-7"></path>
                        </svg>Focused Representation With Purpose</p>
                </div>
                <div class="hidden w-56 rounded-lg border border-primary bg-background/70 p-5 text-center backdrop-blur lg:block"
                    data-tsd-source="/src/routes/index.tsx:95:11">
                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full border border-primary/50"
                        data-tsd-source="/src/routes/index.tsx:96:13"><svg aria-hidden="true"
                            class="lucide lucide-scale h-5 w-5 text-primary"
                            data-tsd-source="/src/routes/index.tsx:96:119" fill="none" height="24" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24"
                            width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 3v18"></path>
                            <path d="m19 8 3 8a5 5 0 0 1-6 0zV7"></path>
                            <path d="M3 7h1a17 17 0 0 0 8-2 17 17 0 0 0 8 2h1"></path>
                            <path d="m5 8 3 8a5 5 0 0 1-6 0zV7"></path>
                            <path d="M7 21h10"></path>
                        </svg></div>
                    <p class="mt-3 text-[10px] tracking-[0.3em] text-muted-foreground"
                        data-tsd-source="/src/routes/index.tsx:97:13">MEMBER OF THE</p>
                    <p class="font-display text-lg uppercase tracking-wider text-primary"
                        data-tsd-source="/src/routes/index.tsx:98:13">Bar Association</p>
                    <ul class="mt-3 space-y-1 border-t border-border pt-3 text-left text-sm"
                        data-tsd-source="/src/routes/index.tsx:99:13">
                        <li class="flex items-center gap-2" data-tsd-source="/src/routes/index.tsx:100:91"><span
                                class="h-1.5 w-1.5 rounded-full bg-primary"
                                data-tsd-source="/src/routes/index.tsx:100:139"></span>Legal Expertise</li>
                        <li class="flex items-center gap-2" data-tsd-source="/src/routes/index.tsx:100:91"><span
                                class="h-1.5 w-1.5 rounded-full bg-primary"
                                data-tsd-source="/src/routes/index.tsx:100:139"></span>Client-Focused</li>
                        <li class="flex items-center gap-2" data-tsd-source="/src/routes/index.tsx:100:91"><span
                                class="h-1.5 w-1.5 rounded-full bg-primary"
                                data-tsd-source="/src/routes/index.tsx:100:139"></span>Ethical Representation</li>
                    </ul>
                </div>
            </div>
            <div class="relative z-10 px-4 pb-4" data-tsd-source="/src/routes/index.tsx:104:9">
                <p class="select-none text-center font-display text-[19vw] uppercase leading-[0.85] text-primary"
                    data-tsd-source="/src/routes/index.tsx:105:11">Wajahat-Ali</p><a
                    class="absolute bottom-[18%] left-1/2 flex -translate-x-1/2 -rotate-12 items-center gap-3 rounded-xl bg-background py-2 pl-2 pr-6 shadow-2xl transition-transform hover:-rotate-6"
                    data-tsd-source="/src/routes/index.tsx:106:11" href="#contact"><span
                        class="flex h-12 w-12 items-center justify-center rounded-lg bg-foreground text-background"
                        data-tsd-source="/src/routes/index.tsx:107:13"><svg aria-hidden="true"
                            class="lucide lucide-arrow-up-right" data-tsd-source="/src/routes/index.tsx:107:115"
                            fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg></span><span class="font-display text-2xl text-primary md:text-4xl"
                        data-tsd-source="/src/routes/index.tsx:108:13">Book a Consultation</span></a>
            </div>
        </section>
        <div class="overflow-hidden border-y border-border py-6" data-tsd-source="/src/routes/index.tsx:114:7">
            <div class="flex w-max animate-marquee gap-16" data-tsd-source="/src/routes/index.tsx:115:9"><span
                    class="text-2xl font-bold text-muted-foreground" data-tsd-source="/src/routes/index.tsx:116:67">45
                    Degrees°</span><span class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Acme Corp</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Codecraft_</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Convergence</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Lightspeed</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Luminary</span><span
                    class="text-2xl font-bold text-muted-foreground" data-tsd-source="/src/routes/index.tsx:116:67">45
                    Degrees°</span><span class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Acme Corp</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Codecraft_</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Convergence</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Lightspeed</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Luminary</span><span
                    class="text-2xl font-bold text-muted-foreground" data-tsd-source="/src/routes/index.tsx:116:67">45
                    Degrees°</span><span class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Acme Corp</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Codecraft_</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Convergence</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Lightspeed</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Luminary</span><span
                    class="text-2xl font-bold text-muted-foreground" data-tsd-source="/src/routes/index.tsx:116:67">45
                    Degrees°</span><span class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Acme Corp</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Codecraft_</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Convergence</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Lightspeed</span><span
                    class="text-2xl font-bold text-muted-foreground"
                    data-tsd-source="/src/routes/index.tsx:116:67">Luminary</span></div>
        </div>
        <section class="px-6 py-28 md:px-24" data-tsd-source="/src/routes/index.tsx:121:7" id="about">
            <div class="grid gap-10 md:grid-cols-2" data-tsd-source="/src/routes/index.tsx:122:9">
                <h2 class="font-display text-4xl uppercase" data-tsd-source="/src/routes/index.tsx:123:11">Trusted.
                    Experienced. Strategic.</h2>
                <p class="text-lg text-muted-foreground" data-tsd-source="/src/routes/index.tsx:124:11">With over 12
                    years of experience in corporate and commercial law, I help business leaders make confident
                    decisions. Known for a no-nonsense, solution-first approach, I support clients in tech, finance,
                    healthcare, and professional services.</p>
            </div>
            <div class="mt-20 flex flex-col gap-6 md:flex-row" data-tsd-source="/src/routes/index.tsx:126:9"><span
                    class="text-sm font-semibold text-primary" data-tsd-source="/src/routes/index.tsx:127:11">(01) ABOUT
                    ME</span>
                <h2 class="font-display uppercase leading-[0.95] text-5xl md:text-7xl md:text-6xl"
                    data-tsd-source="/src/routes/index.tsx:56:10">I stand for people who refuse to back down. <span
                        class="text-muted-foreground" data-tsd-source="/src/routes/index.tsx:128:83">Fewer obstacles,
                        more clarity, and a lawyer who treats your case like it truly matters.</span></h2>
            </div>
            <div class="mt-20 grid items-center gap-12 md:grid-cols-[1fr_1.3fr]"
                data-tsd-source="/src/routes/index.tsx:130:9">
                <figure class="relative" data-tsd-source="/src/routes/index.tsx:131:11"><img alt="Wajahat Ali"
                        class="w-full rounded-lg object-cover grayscale" data-tsd-source="/src/routes/index.tsx:132:13"
                        height="1088" loading="lazy" src="assets/Gemini_Generated_Image_5yd4kw5yd4kw5yd4.jpg" width="832" />
                    <figcaption class="absolute bottom-4 left-4 rounded bg-background/80 px-4 py-2 backdrop-blur"
                        data-tsd-source="/src/routes/index.tsx:133:13">
                        <p class="font-display text-xl uppercase" data-tsd-source="/src/routes/index.tsx:134:15">Alex
                            Carter</p>
                        <p class="text-xs tracking-widest text-primary" data-tsd-source="/src/routes/index.tsx:134:76">
                            ATTORNEY AT LAW</p>
                    </figcaption>
                </figure>
                <div data-tsd-source="/src/routes/index.tsx:137:11">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-primary"
                        data-tsd-source="/src/routes/index.tsx:53:10">(My Philosophy)</p>
                    <blockquote class="mt-6 font-display text-4xl uppercase leading-tight md:text-5xl"
                        data-tsd-source="/src/routes/index.tsx:139:13">"I believe every client deserves a strong voice,
                        a clear plan, and a lawyer who truly listens."</blockquote>
                    <p class="mt-6 text-lg text-muted-foreground" data-tsd-source="/src/routes/index.tsx:140:13">The law
                        isn't just a profession to me — it's a commitment to people, their rights, and their future.
                        Every case is personal, and every client deserves honest guidance, strategic advice, and
                        unwavering support.</p>





                </div>
            </div>
        </section>
        <section class="bg-cream px-6 py-28 text-cream-foreground md:px-24"
            data-tsd-source="/src/routes/index.tsx:147:7" id="services">
            <div class="grid gap-8 md:grid-cols-2" data-tsd-source="/src/routes/index.tsx:148:9">
                <div data-tsd-source="/src/routes/index.tsx:149:11">
                    <p class="text-sm font-semibold" data-tsd-source="/src/routes/index.tsx:149:16">03 — Our Legal
                        Services</p>
                    <h2 class="font-display uppercase leading-[0.95] text-5xl md:text-7xl mt-4"
                        data-tsd-source="/src/routes/index.tsx:56:10">Trusted expertise across every area of law we
                        practice</h2>
                </div>
                <p class="self-end text-lg opacity-70" data-tsd-source="/src/routes/index.tsx:150:11">I provide
                    dedicated legal support with in-depth knowledge and a client-first approach across a wide range of
                    practice areas.</p>
            </div>
            <div class="mt-16 divide-y divide-cream-foreground/20 border-y border-cream-foreground/20"
                data-tsd-source="/src/routes/index.tsx:152:9">
                <div class="py-8" data-tsd-source="/src/routes/index.tsx:154:13"><button
                        class="flex w-full items-baseline gap-6 text-left"
                        data-tsd-source="/src/routes/index.tsx:155:15"><span class="text-sm font-semibold"
                            data-tsd-source="/src/routes/index.tsx:156:17">01. Business Law</span>
                        <h3 class="font-display text-3xl uppercase md:text-5xl"
                            data-tsd-source="/src/routes/index.tsx:157:17">Business Formation &amp; Corporate Counsel
                        </h3>
                    </button>
                    <div class="mt-8 grid gap-8 md:grid-cols-2" data-tsd-source="/src/routes/index.tsx:160:17">
                        <div data-tsd-source="/src/routes/index.tsx:161:19">
                            <ul class="space-y-3" data-tsd-source="/src/routes/index.tsx:162:21">
                                <li class="flex gap-3" data-tsd-source="/src/routes/index.tsx:162:65"><svg
                                        aria-hidden="true" class="lucide lucide-check h-5 w-5 shrink-0"
                                        data-tsd-source="/src/routes/index.tsx:162:100" fill="none" height="24"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewbox="0 0 24 24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>Start and structure your business with confidence</li>
                                <li class="flex gap-3" data-tsd-source="/src/routes/index.tsx:162:65"><svg
                                        aria-hidden="true" class="lucide lucide-check h-5 w-5 shrink-0"
                                        data-tsd-source="/src/routes/index.tsx:162:100" fill="none" height="24"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewbox="0 0 24 24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>Ongoing legal support as your company grows</li>
                                <li class="flex gap-3" data-tsd-source="/src/routes/index.tsx:162:65"><svg
                                        aria-hidden="true" class="lucide lucide-check h-5 w-5 shrink-0"
                                        data-tsd-source="/src/routes/index.tsx:162:100" fill="none" height="24"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewbox="0 0 24 24" width="24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg>Contracts, compliance and risk management</li>
                            </ul>
                            <div class="mt-6 flex flex-wrap gap-2" data-tsd-source="/src/routes/index.tsx:163:21"><span
                                    class="rounded-full border border-cream-foreground/30 px-3 py-1 text-sm"
                                    data-tsd-source="/src/routes/index.tsx:163:83">Business Formation</span><span
                                    class="rounded-full border border-cream-foreground/30 px-3 py-1 text-sm"
                                    data-tsd-source="/src/routes/index.tsx:163:83">Contracts</span><span
                                    class="rounded-full border border-cream-foreground/30 px-3 py-1 text-sm"
                                    data-tsd-source="/src/routes/index.tsx:163:83">Compliance</span><span
                                    class="rounded-full border border-cream-foreground/30 px-3 py-1 text-sm"
                                    data-tsd-source="/src/routes/index.tsx:163:83">Intellectual Property</span></div><a
                                class="mt-6 inline-flex items-center gap-2 rounded-full bg-cream-foreground px-5 py-3 text-sm font-semibold text-cream"
                                data-tsd-source="/src/routes/index.tsx:164:21" href="#contact">See Details <svg
                                    aria-hidden="true" class="lucide lucide-arrow-up-right h-4 w-4"
                                    data-tsd-source="/src/routes/index.tsx:164:176" fill="none" height="24"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 7h10v10"></path>
                                    <path d="M7 17 17 7"></path>
                                </svg></a>
                        </div>
                        <div class="grid grid-cols-2 gap-4" data-tsd-source="/src/routes/index.tsx:166:19"><img alt=""
                                class="aspect-[4/5] w-full rounded-lg object-cover"
                                data-tsd-source="/src/routes/index.tsx:167:95" loading="lazy"
                                src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" /><img
                                alt="" class="aspect-[4/5] w-full rounded-lg object-cover"
                                data-tsd-source="/src/routes/index.tsx:167:95" loading="lazy"
                                src="https://images.unsplash.com/photo-1450133064473-71024230f91b?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" />
                        </div>
                    </div>
                </div>
                <div class="py-8" data-tsd-source="/src/routes/index.tsx:154:13"><button
                        class="flex w-full items-baseline gap-6 text-left"
                        data-tsd-source="/src/routes/index.tsx:155:15"><span class="text-sm font-semibold"
                            data-tsd-source="/src/routes/index.tsx:156:17">02. Family Law</span>
                        <h3 class="font-display text-3xl uppercase md:text-5xl"
                            data-tsd-source="/src/routes/index.tsx:157:17">Divorce &amp; Family Matters</h3>
                    </button></div>
                <div class="py-8" data-tsd-source="/src/routes/index.tsx:154:13"><button
                        class="flex w-full items-baseline gap-6 text-left"
                        data-tsd-source="/src/routes/index.tsx:155:15"><span class="text-sm font-semibold"
                            data-tsd-source="/src/routes/index.tsx:156:17">03. Criminal Defense</span>
                        <h3 class="font-display text-3xl uppercase md:text-5xl"
                            data-tsd-source="/src/routes/index.tsx:157:17">Felony &amp; Misdemeanor Defense</h3>
                    </button></div>
                <div class="py-8" data-tsd-source="/src/routes/index.tsx:154:13"><button
                        class="flex w-full items-baseline gap-6 text-left"
                        data-tsd-source="/src/routes/index.tsx:155:15"><span class="text-sm font-semibold"
                            data-tsd-source="/src/routes/index.tsx:156:17">04. Civil Litigation</span>
                        <h3 class="font-display text-3xl uppercase md:text-5xl"
                            data-tsd-source="/src/routes/index.tsx:157:17">Commercial Litigation &amp; Dispute
                            Resolution</h3>
                    </button></div>
                <div class="py-8" data-tsd-source="/src/routes/index.tsx:154:13"><button
                        class="flex w-full items-baseline gap-6 text-left"
                        data-tsd-source="/src/routes/index.tsx:155:15"><span class="text-sm font-semibold"
                            data-tsd-source="/src/routes/index.tsx:156:17">05. Real Estate Law</span>
                        <h3 class="font-display text-3xl uppercase md:text-5xl"
                            data-tsd-source="/src/routes/index.tsx:157:17">Property Transactions &amp; Land Development
                        </h3>
                    </button></div>
            </div>
        </section>
        <section class="px-6 py-28 md:px-24" data-tsd-source="/src/routes/index.tsx:177:7" id="cases">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-primary"
                data-tsd-source="/src/routes/index.tsx:53:10">⌜ Selected Case Studies</p>
            <div class="mt-4 flex flex-wrap items-end justify-between gap-6"
                data-tsd-source="/src/routes/index.tsx:179:9">
                <h2 class="font-display uppercase leading-[0.95] text-5xl md:text-7xl"
                    data-tsd-source="/src/routes/index.tsx:56:10">Real results, <span class="text-primary"
                        data-tsd-source="/src/routes/index.tsx:180:29">stronger futures</span></h2><span
                    class="text-sm text-muted-foreground" data-tsd-source="/src/routes/index.tsx:181:11">2K26 · Case
                    Dossier</span>
            </div>
            <div class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3" data-tsd-source="/src/routes/index.tsx:183:9"><a
                    class="group" data-tsd-source="/src/routes/index.tsx:185:13" href="#contact">
                    <div class="overflow-hidden rounded-lg" data-tsd-source="/src/routes/index.tsx:186:15"><img
                            alt="Startup to Success"
                            class="aspect-[4/3] w-full object-cover grayscale transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                            data-tsd-source="/src/routes/index.tsx:186:59" loading="lazy"
                            src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" />
                    </div>
                    <h3 class="mt-5 font-display text-3xl uppercase group-hover:text-primary"
                        data-tsd-source="/src/routes/index.tsx:187:15">Startup to Success</h3>
                    <p class="mt-2 text-muted-foreground" data-tsd-source="/src/routes/index.tsx:188:15">Guided a
                        growing tech company through incorporation, contract negotiation, and long-term legal strategy.
                    </p>
                    <div class="mt-4 flex gap-2" data-tsd-source="/src/routes/index.tsx:189:15"><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Business Law</span><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Corporate Counsel</span></div>
                </a><a class="group" data-tsd-source="/src/routes/index.tsx:185:13" href="#contact">
                    <div class="overflow-hidden rounded-lg" data-tsd-source="/src/routes/index.tsx:186:15"><img
                            alt="Charges Dismissed"
                            class="aspect-[4/3] w-full object-cover grayscale transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                            data-tsd-source="/src/routes/index.tsx:186:59" loading="lazy"
                            src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" />
                    </div>
                    <h3 class="mt-5 font-display text-3xl uppercase group-hover:text-primary"
                        data-tsd-source="/src/routes/index.tsx:187:15">Charges Dismissed</h3>
                    <p class="mt-2 text-muted-foreground" data-tsd-source="/src/routes/index.tsx:188:15">Successfully
                        defended a client against felony charges, securing a full dismissal and expungement.</p>
                    <div class="mt-4 flex gap-2" data-tsd-source="/src/routes/index.tsx:189:15"><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Criminal Defense</span><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Case Dismissal</span></div>
                </a><a class="group" data-tsd-source="/src/routes/index.tsx:185:13" href="#contact">
                    <div class="overflow-hidden rounded-lg" data-tsd-source="/src/routes/index.tsx:186:15"><img
                            alt="High-Asset Estate Preservation"
                            class="aspect-[4/3] w-full object-cover grayscale transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                            data-tsd-source="/src/routes/index.tsx:186:59" loading="lazy"
                            src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" />
                    </div>
                    <h3 class="mt-5 font-display text-3xl uppercase group-hover:text-primary"
                        data-tsd-source="/src/routes/index.tsx:187:15">High-Asset Estate Preservation</h3>
                    <p class="mt-2 text-muted-foreground" data-tsd-source="/src/routes/index.tsx:188:15">Protected
                        multi-million family enterprise assets and negotiated amicable marital dissolution with total
                        discretion.</p>
                    <div class="mt-4 flex gap-2" data-tsd-source="/src/routes/index.tsx:189:15"><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Family Law</span><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Asset Protection</span></div>
                </a><a class="group" data-tsd-source="/src/routes/index.tsx:185:13" href="#contact">
                    <div class="overflow-hidden rounded-lg" data-tsd-source="/src/routes/index.tsx:186:15"><img
                            alt="Commercial Trial Victory"
                            class="aspect-[4/3] w-full object-cover grayscale transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                            data-tsd-source="/src/routes/index.tsx:186:59" loading="lazy"
                            src="https://images.unsplash.com/photo-1589994965851-a8f479c573a9?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" />
                    </div>
                    <h3 class="mt-5 font-display text-3xl uppercase group-hover:text-primary"
                        data-tsd-source="/src/routes/index.tsx:187:15">Commercial Trial Victory</h3>
                    <p class="mt-2 text-muted-foreground" data-tsd-source="/src/routes/index.tsx:188:15">Secured
                        complete jury restitution and multi-million damages in a complex fiduciary partnership dispute.
                    </p>
                    <div class="mt-4 flex gap-2" data-tsd-source="/src/routes/index.tsx:189:15"><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Civil Litigation</span><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Trial Verdict</span></div>
                </a><a class="group" data-tsd-source="/src/routes/index.tsx:185:13" href="#contact">
                    <div class="overflow-hidden rounded-lg" data-tsd-source="/src/routes/index.tsx:186:15"><img
                            alt="Zoning &amp; Master Acquisition"
                            class="aspect-[4/3] w-full object-cover grayscale transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                            data-tsd-source="/src/routes/index.tsx:186:59" loading="lazy"
                            src="https://images.unsplash.com/photo-1541888946425-d0fbb18086f6?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" />
                    </div>
                    <h3 class="mt-5 font-display text-3xl uppercase group-hover:text-primary"
                        data-tsd-source="/src/routes/index.tsx:187:15">Zoning &amp; Master Acquisition</h3>
                    <p class="mt-2 text-muted-foreground" data-tsd-source="/src/routes/index.tsx:188:15">Secured
                        development approvals, zoning clearances, and closing for a 40-acre commercial logistics hub.
                    </p>
                    <div class="mt-4 flex gap-2" data-tsd-source="/src/routes/index.tsx:189:15"><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Real Estate Law</span><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Zoning Clearance</span></div>
                </a><a class="group" data-tsd-source="/src/routes/index.tsx:185:13" href="#contact">
                    <div class="overflow-hidden rounded-lg" data-tsd-source="/src/routes/index.tsx:186:15"><img
                            alt="Intellectual Property Injunction"
                            class="aspect-[4/3] w-full object-cover grayscale transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                            data-tsd-source="/src/routes/index.tsx:186:59" loading="lazy"
                            src="https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" />
                    </div>
                    <h3 class="mt-5 font-display text-3xl uppercase group-hover:text-primary"
                        data-tsd-source="/src/routes/index.tsx:187:15">Intellectual Property Injunction</h3>
                    <p class="mt-2 text-muted-foreground" data-tsd-source="/src/routes/index.tsx:188:15">Obtained
                        emergency federal injunction halting willful trademark infringement.</p>
                    <div class="mt-4 flex gap-2" data-tsd-source="/src/routes/index.tsx:189:15"><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">IP Litigation</span><span
                            class="rounded-full bg-secondary px-3 py-1 text-xs"
                            data-tsd-source="/src/routes/index.tsx:189:67">Trade Secrets</span></div>
                </a></div><a
                class="mx-auto mt-14 flex w-fit items-center gap-2 rounded-full border border-primary px-8 py-4 font-semibold uppercase tracking-widest text-primary hover:bg-primary hover:text-primary-foreground"
                data-tsd-source="/src/routes/index.tsx:193:9" href="#contact">All cases (17)</a>
        </section>
        <section class="relative overflow-hidden border-y border-border px-6 py-28 md:px-24"
            data-tsd-source="/src/routes/index.tsx:197:7">
            <p class="pointer-events-none absolute inset-x-0 top-6 text-center font-display text-[22vw] uppercase leading-none text-secondary"
                data-tsd-source="/src/routes/index.tsx:198:9">Justice</p>
            <div class="relative grid items-center gap-12 md:grid-cols-2" data-tsd-source="/src/routes/index.tsx:199:9">
                <img alt="Wajahat Ali, senior legal counsel" class="mx-auto max-h-[560px] rounded-lg object-cover"
                    data-tsd-source="/src/routes/index.tsx:200:11" loading="lazy" src="assets/Gemini_Generated_Image_5yd4kw5yd4kw5yd4.jpg" />
                <div data-tsd-source="/src/routes/index.tsx:201:11">
                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-primary"
                        data-tsd-source="/src/routes/index.tsx:53:10">✧ </p>
                    <h2 class="font-display uppercase leading-[0.95] text-5xl md:text-7xl mt-4"
                        data-tsd-source="/src/routes/index.tsx:56:10">You deserve counsel that fights for you</h2>
                    <p class="mt-6 text-lg text-muted-foreground" data-tsd-source="/src/routes/index.tsx:204:13">Every
                        client, whether an individual or a business, deserves the same level of commitment, clear
                        communication, and a results-driven approach.</p>
                    <div class="mt-10 grid grid-cols-3 gap-6 border-t border-border pt-8"
                        data-tsd-source="/src/routes/index.tsx:205:13">
                        <div data-tsd-source="/src/routes/index.tsx:207:17">
                            <p class="font-display text-4xl text-primary md:text-6xl"
                                data-tsd-source="/src/routes/index.tsx:207:30">10+</p>
                            <p class="mt-2 text-sm text-muted-foreground"
                                data-tsd-source="/src/routes/index.tsx:207:99">Years of Experience</p>
                        </div>
                        <div data-tsd-source="/src/routes/index.tsx:207:17">
                            <p class="font-display text-4xl text-primary md:text-6xl"
                                data-tsd-source="/src/routes/index.tsx:207:30">98%</p>
                            <p class="mt-2 text-sm text-muted-foreground"
                                data-tsd-source="/src/routes/index.tsx:207:99">Client Success Rate</p>
                        </div>
                        <div data-tsd-source="/src/routes/index.tsx:207:17">
                            <p class="font-display text-4xl text-primary md:text-6xl"
                                data-tsd-source="/src/routes/index.tsx:207:30">$50M+</p>
                            <p class="mt-2 text-sm text-muted-foreground"
                                data-tsd-source="/src/routes/index.tsx:207:99">In Client Recoveries</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-6 py-28 md:px-24" data-tsd-source="/src/routes/index.tsx:215:7">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-primary"
                data-tsd-source="/src/routes/index.tsx:53:10">Client Stories</p>
            <h2 class="font-display uppercase leading-[0.95] text-5xl md:text-7xl mt-4"
                data-tsd-source="/src/routes/index.tsx:56:10">Real clients. <span class="text-primary"
                    data-tsd-source="/src/routes/index.tsx:217:44">Real results.</span></h2>
            <div class="mt-14 grid gap-10 rounded-xl border border-border bg-card p-8 md:grid-cols-[auto_1fr] md:p-12"
                data-tsd-source="/src/routes/index.tsx:218:9">
                <div class="flex flex-col items-center gap-3 text-center"
                    data-tsd-source="/src/routes/index.tsx:219:11"><img alt="David Mitchell"
                        class="h-28 w-28 rounded-full bg-secondary object-cover"
                        data-tsd-source="/src/routes/index.tsx:220:13" src="assets/photo-3.png" />
                    <p class="flex items-center gap-1 text-primary" data-tsd-source="/src/routes/index.tsx:221:13"><svg
                            aria-hidden="true" class="lucide lucide-star h-4 w-4 fill-current"
                            data-tsd-source="/src/routes/index.tsx:221:65" fill="none" height="24" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24"
                            width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                            </path>
                        </svg> 5.0</p>
                    <h4 class="font-semibold" data-tsd-source="/src/routes/index.tsx:222:13">David Mitchell</h4>
                    <p class="text-sm text-muted-foreground" data-tsd-source="/src/routes/index.tsx:222:56">Corporate
                        Litigation Client</p>
                </div>
                <div data-tsd-source="/src/routes/index.tsx:224:11">
                    <h3 class="font-display text-4xl uppercase" data-tsd-source="/src/routes/index.tsx:225:13">Case won
                        with confidence</h3>
                    <blockquote class="mt-4 text-2xl leading-relaxed" data-tsd-source="/src/routes/index.tsx:226:13">
                        "Alex listened carefully, explained everything clearly, and fought for the best outcome. I felt
                        supported and informed throughout the entire legal process."</blockquote>
                    <div class="mt-8 flex gap-3" data-tsd-source="/src/routes/index.tsx:227:13"><button
                            aria-label="David Mitchell"
                            class="h-12 w-12 overflow-hidden rounded-full border-2 border-primary"
                            data-tsd-source="/src/routes/index.tsx:229:17"><img alt=""
                                class="h-full w-full object-cover" data-tsd-source="/src/routes/index.tsx:230:19"
                                src="assets/photo-3.png" /></button><button aria-label="Marcus Sterling"
                            class="h-12 w-12 overflow-hidden rounded-full border-2 border-transparent opacity-50"
                            data-tsd-source="/src/routes/index.tsx:229:17"><img alt=""
                                class="h-full w-full object-cover" data-tsd-source="/src/routes/index.tsx:230:19"
                                src="assets/photo-4.png" /></button><button aria-label="Victoria Chen"
                            class="h-12 w-12 overflow-hidden rounded-full border-2 border-transparent opacity-50"
                            data-tsd-source="/src/routes/index.tsx:229:17"><img alt=""
                                class="h-full w-full object-cover" data-tsd-source="/src/routes/index.tsx:230:19"
                                src="assets/photo-5.png" /></button></div>
                </div>
            </div>
        </section>
   
          <section class="px-6 py-28 md:px-24" data-tsd-source="/src/routes/index.tsx:262:7" id="blogs">
            <div class="flex flex-wrap items-end justify-between gap-6" data-tsd-source="/src/routes/index.tsx:263:9">
                <div data-tsd-source="/src/routes/index.tsx:264:11">
                    <h2 class="font-display uppercase leading-[0.95] text-5xl md:text-7xl"
                        data-tsd-source="/src/routes/index.tsx:56:10">Latest <span class="text-primary"
                            data-tsd-source="/src/routes/index.tsx:264:27">Insights</span></h2>
                    <p class="mt-4 max-w-lg text-muted-foreground" data-tsd-source="/src/routes/index.tsx:264:78">
                        Practical legal insights, expert advice, and resources to help you navigate life's legal
                        challenges.</p>
                </div>
            </div>
            <div class="mt-14 grid gap-8 md:grid-cols-3" data-tsd-source="/src/routes/index.tsx:267:9">
                <article class="group" data-tsd-source="/src/routes/index.tsx:269:13"><img alt=""
                        class="aspect-[4/3] w-full rounded-lg object-cover"
                        data-tsd-source="/src/routes/index.tsx:270:15" loading="lazy"
                        src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" />
                    <p class="mt-4 text-sm text-muted-foreground" data-tsd-source="/src/routes/index.tsx:271:15">Sep 18,
                        2026</p>
                    <h3 class="mt-2 font-display text-2xl uppercase group-hover:text-primary"
                        data-tsd-source="/src/routes/index.tsx:272:15">What to Do When You're Served with a Lawsuit</h3>
                    <span class="mt-3 inline-flex items-center gap-1 text-sm font-semibold text-primary"
                        data-tsd-source="/src/routes/index.tsx:273:15">Read More <svg aria-hidden="true"
                            class="lucide lucide-arrow-up-right h-4 w-4" data-tsd-source="/src/routes/index.tsx:273:114"
                            fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg></span>
                </article>
                <article class="group" data-tsd-source="/src/routes/index.tsx:269:13"><img alt=""
                        class="aspect-[4/3] w-full rounded-lg object-cover"
                        data-tsd-source="/src/routes/index.tsx:270:15" loading="lazy"
                        src="https://images.unsplash.com/photo-1450133064473-71024230f91b?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" />
                    <p class="mt-4 text-sm text-muted-foreground" data-tsd-source="/src/routes/index.tsx:271:15">Sep 12,
                        2026</p>
                    <h3 class="mt-2 font-display text-2xl uppercase group-hover:text-primary"
                        data-tsd-source="/src/routes/index.tsx:272:15">5 Legal Steps Every Small Business Should Take
                    </h3><span class="mt-3 inline-flex items-center gap-1 text-sm font-semibold text-primary"
                        data-tsd-source="/src/routes/index.tsx:273:15">Read More <svg aria-hidden="true"
                            class="lucide lucide-arrow-up-right h-4 w-4" data-tsd-source="/src/routes/index.tsx:273:114"
                            fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg></span>
                </article>
                <article class="group" data-tsd-source="/src/routes/index.tsx:269:13"><img alt=""
                        class="aspect-[4/3] w-full rounded-lg object-cover"
                        data-tsd-source="/src/routes/index.tsx:270:15" loading="lazy"
                        src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&amp;w=1000&amp;auto=format&amp;fit=crop" />
                    <p class="mt-4 text-sm text-muted-foreground" data-tsd-source="/src/routes/index.tsx:271:15">Sep 9,
                        2026</p>
                    <h3 class="mt-2 font-display text-2xl uppercase group-hover:text-primary"
                        data-tsd-source="/src/routes/index.tsx:272:15">Understanding Your Rights during a Criminal
                        Investigation</h3><span
                        class="mt-3 inline-flex items-center gap-1 text-sm font-semibold text-primary"
                        data-tsd-source="/src/routes/index.tsx:273:15">Read More <svg aria-hidden="true"
                            class="lucide lucide-arrow-up-right h-4 w-4" data-tsd-source="/src/routes/index.tsx:273:114"
                            fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 7h10v10"></path>
                            <path d="M7 17 17 7"></path>
                        </svg></span>
                </article>
            </div>
        </section>



        
       <?php include "include/footer.php" ?>