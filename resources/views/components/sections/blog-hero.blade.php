<section class="relative overflow-hidden py-16 md:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:items-center">
            <div>
                <span class="inline-flex items-center rounded-md bg-lime-200 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-gray-900">Blog</span>

                <h1 class="mt-6 font-extrabold leading-none">
                    <span class="block text-4xl sm:text-6xl md:text-7xl lg:text-8xl text-orange-400">THOUGHTS</span>
                    <span class="mt-2 block text-4xl sm:text-6xl md:text-7xl lg:text-8xl">
                        <span class="text-lime-500">&amp;</span>
                        <span class="ml-3 text-blue-500">INSIGHTS</span>
                    </span>
                </h1>

                <p class="mt-6 max-w-xl text-base md:text-lg text-gray-600">Further reading on ideas worth sharing.</p>

                <div class="mt-10 max-w-xl">
                    <div class="h-px w-full bg-gray-200"></div>

                    <div class="mt-6 flex items-center gap-2 text-sm font-medium text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                            <path d="M1.5 8.67v8.58A2.25 2.25 0 003.75 19.5h16.5a2.25 2.25 0 002.25-2.25V8.67l-8.61 5.38a3.75 3.75 0 01-4.03 0L1.5 8.67z" />
                            <path d="M22.5 6.75v-.008A2.25 2.25 0 0020.25 4.5H3.75A2.25 2.25 0 001.5 6.742V6.75l9.57 5.98a2.25 2.25 0 002.36 0L22.5 6.75z" />
                        </svg>
                        <span>Get the latest insights to your inbox!</span>
                    </div>

                    <form class="mt-4 flex flex-col gap-3 sm:flex-row" action="#" method="post" onsubmit="return false;">
                        <label class="sr-only" for="blog-email">Email</label>
                        <input id="blog-email" type="email" placeholder="Enter your email address" class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none ring-0 transition placeholder:text-gray-400 focus:border-gray-400" />
                        <button type="submit" class="inline-flex w-full items-center justify-center rounded-xl bg-gray-900 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-black focus-visible:outline-none sm:w-auto">Sign Up</button>
                    </form>

                    <p class="mt-2 text-xs text-gray-500">By signing up you agree to our <a href="#" class="underline">Privacy Policy</a>.</p>
                </div>
            </div>

            <div class="relative">
                <div class="rounded-3xl bg-rose-50 p-6 sm:p-8 md:p-10">
                    <div class="mx-auto max-w-xl">
                        <div class="overflow-hidden rounded-2xl bg-black shadow-2xl ring-1 ring-black/10">
                            <img src="{{ asset('images/landing/hero-preview.png') }}" alt="Exceptional Digital Experiences" class="h-auto w-full object-cover" onerror="this.style.display='none'; this.parentElement.classList.add('bg-zinc-900'); this.parentElement.classList.add('aspect-[16/10]');" />
                            <div class="hidden aspect-[16/10] items-center justify-center text-white sm:flex">
                                <!-- Fallback if image not found -->
                                <span class="text-sm text-white/70">Preview</span>
                            </div>
                        </div>
                        <div class="mt-6 rounded-2xl bg-white p-6 text-center shadow ring-1 ring-gray-100">
                            <h3 class="text-lg font-semibold tracking-tight text-gray-900">A new chapter for Eyekiller</h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">See how we’re evolving our brand, our website, and our mission to drive digital excellence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>

