<style>
        #carousel {
            display: flex;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        #carousel>div {
            min-width: 25%;
        }
    </style>
    
<div class="mt-24 relative">
    <h2 class="text-[#0A225E] text-5xl font-bold uppercase">Our Outlets</h2>

    <div id="carousel" class="mt-12 grid grid-cols-4 gap-6">

        <div class="bg-white rounded-[10px]">
            <img src="assets/outlet-mempawah.png" class="w-full h-48 object-cover rounded-t-[10px]" />
            <div class="p-4">
                <a href="https://www.google.com/maps/place/CWCoffee+-+Mempawah/@0.3362047,108.9595434,17z/data=!3m1!4b1!4m6!3m5!1s0x31e2f35e01381be5:0xdbb6e842c9d2637e!8m2!3d0.3362047!4d108.964409!16s%2Fg%2F11t_k1fzfm?entry=ttu&g_ep=EgoyMDI1MTExMi4wIKXMDSoASAFQAw%3D%3D">
                    <h3 class="text-lg text-[#0A225E] font-semibold hover:underline">Outlet Mempawah</h3>
                </a>                
                <p class="mt-1 text-sm">Jl. Ahmad Yani, Tengah, Kec. Mempawah Hilir, Kab. Mempawah</p>
            </div>
        </div>

        <div class="bg-white rounded-[10px]">
            <img src="assets/outlet-kstubun.webp" class="w-full h-48 object-cover rounded-t-[10px]" />
            <div class="p-4">
                <a href="https://www.google.com/maps/place/CW+Coffee/@-0.0373279,109.3289497,17z/data=!3m1!4b1!4m6!3m5!1s0x2e1d59a3e1ac616b:0x53f74d2f3f5928e4!8m2!3d-0.0373279!4d109.33153!16s%2Fg%2F11pb__bd4h?entry=ttu&g_ep=EgoyMDI1MTExMi4wIKXMDSoASAFQAw%3D%3D">
                    <h3 class="text-lg text-[#0A225E] font-semibold hover:underline">Outlet KS Tubun</h3>
                </a>
                <p class="mt-1 text-sm">Jl. Karel Satsuit Tubun No.2e, Akcaya, Kec. Pontianak Sel., Kota Pontianak</p>
            </div>
        </div>

        <div class="bg-white rounded-[10px]">
            <img src="assets/outlet-sungai-duri.png" class="w-full h-48 object-cover rounded-t-[10px]" />
            <div class="p-4">
                <a href="https://www.google.com/maps/place/CW+Coffee+Sungai+Duri/@0.5709651,108.9258944,17z/data=!3m1!4b1!4m6!3m5!1s0x31e2fdf24205a4b7:0xda5fcf4be9f54ba4!8m2!3d0.5709651!4d108.9284747!16s%2Fg%2F11ty6z9jj9?entry=ttu&g_ep=EgoyMDI1MTExMi4wIKXMDSoASAFQAw%3D%3D">
                    <h3 class="text-lg text-[#0A225E] font-semibold hover:underline">Outlet Sungai Duri</h3>
                </a>
                <p class="mt-1 text-sm">Jl. Sungai Duri, Bengkayang</p>
            </div>
        </div>

        <div class="bg-white rounded-[10px]">
            <img src="assets/outlet-sepakat2.webp" class="w-full h-48 object-cover rounded-t-[10px]" />
            <div class="p-4">
                <a href="https://www.google.com/maps/place/CWCoffee/@-0.0689143,109.3400865,17z/data=!3m1!4b1!4m6!3m5!1s0x2e1d59a03d406ad9:0x408f74bff9b00cbb!8m2!3d-0.0689143!4d109.3426668!16s%2Fg%2F11trc4q0hy?entry=ttu&g_ep=EgoyMDI1MTExMi4wIKXMDSoASAFQAw%3D%3D">
                    <h3 class="text-lg text-[#0A225E] font-semibold hover:underline">Outlet Sepakat 2</h3>
                </a>
                <p class="mt-1 text-sm">Jl. Sepakat 2, Kel. Bansir Darat, Kec. Pontianak Tenggara</p>
            </div>
        </div>

        <div class="bg-white rounded-[10px]">
            <img src="assets/outlet-sungaipinyuh.webp" class="w-full h-48 object-cover rounded-t-[10px]" />
            <div class="p-4">
                <a href="https://www.google.com/maps/place/CW+Coffee+-+Sungai+Pinyuh/@0.2734508,109.0714791,17z/data=!3m1!4b1!4m6!3m5!1s0x31e2937b7c91c6ab:0x1fe5292dc0c0a033!8m2!3d0.2734508!4d109.0740594!16s%2Fg%2F11jspwpw5t?entry=ttu&g_ep=EgoyMDI1MTExMi4wIKXMDSoASAFQAw%3D%3D">
                    <h3 class="text-lg text-[#0A225E] font-semibold hover:underline">Outlet Sungai Pinyuh</h3>
                </a>
                    <p class="mt-1 text-sm">Pinyuh River, Sungai Pinyuh, Mempawah Regency, West Kalimantan</p>
            </div>
        </div>
    </div>


    <div id="prevBtn"
        class="absolute top-1/2 -left-20 p-2 bg-[#0A225E] size-12 rounded-full flex justify-center items-center">
        <i class="fa-solid fa-arrow-left text-white"></i>
    </div>

    <div id="nextBtn"
        class="absolute top-1/2 -right-20 p-2 bg-[#0A225E] size-12 rounded-full flex justify-center items-center">
        <i class="fa-solid fa-arrow-right text-white"></i>
    </div>

</div>

<script>
    const carousel = document.getElementById("carousel");
    const nextBtn = document.getElementById("nextBtn");
    const prevBtn = document.getElementById("prevBtn");

    const cardWidth = carousel.children[0].offsetWidth + 24;

    nextBtn.addEventListener("click", () => {
        carousel.scrollLeft += cardWidth;
    });

    prevBtn.addEventListener("click", () => {
        carousel.scrollLeft -= cardWidth;
    });
</script>