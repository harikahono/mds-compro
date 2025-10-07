<!-- resources/views/components/sections/ratings.blade.php -->
<section id="ratings" class="py-12">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 text-center">
            
            <!-- Rating 1 -->
            <div class="flex flex-col items-center" 
                 data-aos="fade-up" 
                 data-aos-duration="600"
                 data-aos-delay="200">
                <!-- Stars -->
                <div class="flex gap-1 mb-4" aria-label="5 out of 5 stars">
                    @for ($i = 0; $i < 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#C7EE9A" class="w-5 h-5">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.968 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.785.57-1.84-.197-1.54-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <!-- Quote -->
                <p class="text-lg lg:text-xl font-semibold">
                    "MDS Keren Banget Anjay"
                </p>
                <!-- Client -->
                <p class="mt-4 text-sm lg:text-base">PT. Mencari Cinta Sejati</p>
            </div>

            <!-- Rating 2 -->
            <div class="flex flex-col items-center" 
                 data-aos="fade-up" 
                 data-aos-duration="600"
                 data-aos-delay="400">
                <div class="flex gap-1 mb-4" aria-label="5 out of 5 stars">
                    @for ($i = 0; $i < 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#C7EE9A" class="w-5 h-5">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.968 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.785.57-1.84-.197-1.54-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-lg lg:text-xl font-semibold">
                    "Pengerjaan Sangat Kilat"
                </p>
                <p class="mt-4 text-sm lg:text-base">PT. Garmen Singa Laut</p>
            </div>

            <!-- Rating 3 -->
            <div class="flex flex-col items-center" 
                 data-aos="fade-up" 
                 data-aos-duration="600"
                 data-aos-delay="600">
                <div class="flex gap-1 mb-4" aria-label="5 out of 5 stars">
                    @for ($i = 0; $i < 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#C7EE9A" class="w-5 h-5">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.968 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.785.57-1.84-.197-1.54-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 1 0 00.95-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="text-lg lg:text-xl font-semibold">
                    "Tampilan Website Sangat Menarik"
                </p>
                <p class="mt-4 text-sm lg:text-base">Kabinet Merah Putih</p>
            </div>

        </div>
    </div>
</section>

<!-- Script AOS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 600,
                easing: 'ease-out',
                once: true,
                offset: 100
            });
        }
    });
</script>