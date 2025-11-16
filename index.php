<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Home - CW Coffee</title>
    <link rel="icon" type="image/webp" href="assets/logo-cw.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
</head>

<body class="bg-[#F2F2FF]">
    <?php include 'navbar.php'; ?>
    <!-- <iframe src="navbar.php" style="width: 100%;"></iframe> -->

    <img src="assets/hero-banner.png" class="w-screen" />
    <div class="max-w-6xl mx-auto px-6 py-12">

        <div class="max-w-screen-xl mx-auto pb-20">
            <div class="mt-24 flex gap-20">
                <img src="assets/about-us-image.png" class="w-1/3" />

                <div class="w-2/3">
                    <h2 class="text-[#0A225E] text-5xl font-bold uppercase">About Us</h2>
                    <p class="mt-4">Berdiri sebagai CYBER WORLD ICAFE pada tahun 2015 dengan konsep cafe internet
                        kecepatan
                        tinggi yang
                        buka 24 jam. Pada 2019 kami melakukan peremajaan diri dengan mengubah nama CYBER WORLD iCAFE
                        menjadi
                        CW COFFEE.
                        Dengan gerakan garis yang dinamis menggambarkan spesialisasi CW COFFEE dalam meracik
                        minuman-minuman
                        terbaik untuk konsumen kami, yang kemudian kami sebut sebagai #SAHABATSEJATIKU.</p>

                    <a href="/aboutUs.php" class="mt-6 block w-max bg-[#0A225E] text-white px-6 py-2 rounded-full">Read
                        More</a>
                </div>
            </div>

            <div class="mt-24 relative">
                <h2 class="text-[#0A225E] text-5xl font-bold uppercase">Our Outlets</h2>

                <div id="carousel" class="mt-12 grid grid-cols-4 gap-6">
                    <div class="bg-white rounded-[10px]">
                        <img src="assets/outlet-mempawah.png" class="w-full" />

                        <div class="p-4">
                            <h3 class="text-lg text-[#0A225E] font-semibold hover:underline">Outlet Mempawah</h3>
                            <p class="mt-1 text-sm hover:underline">Jl. Ahmad Yani, Tengah, Kec. Mempawah Hilir, Kab.
                                Mempawah</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-[10px]">
                        <img src="assets/outlet-sungai-duri.png" class="w-full" />

                        <div class="p-4">
                            <h3 class="text-lg text-[#0A225E] font-semibold hover:underline">Outlet Sungai Duri</h3>
                            <p class="mt-1 text-sm hover:underline">Jl. Sungai Duri, Bengkayang</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-[10px]">
                        <img src="assets/outlet-mempawah.png" class="w-full" />

                        <div class="p-4">
                            <h3 class="text-lg text-[#0A225E] font-semibold hover:underline">Outlet Sepakat 2</h3>
                            <p class="mt-1 text-sm hover:underline">Jl. Sepakat 2, Kel. Bansir Darat, Kec. Pontianak
                                Tenggara</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-[10px]">
                        <img src="assets/outlet-mempawah.png" class="w-full" />

                        <div class="p-4">
                            <h3 class="text-lg text-[#0A225E] font-semibold hover:underline">Outlet Sungai Pinyuh</h3>
                            <p class="mt-1 text-sm hover:underline">Sungai Pinyuh</p>
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

            <div class="mt-24">
                <h2 class="text-[#0A225E] text-5xl font-bold uppercase">Premium Coffee Beans</h2>

                <div class="mt-12 flex gap-10">
                    <div class="w-2/3">
                        <div class="flex gap-10 items-center w-full">
                            <p class="text-xl text-center font-light w-1/2">Our Team International experience and
                                exposure
                            </p>
                            <img src="assets/premium-coffee-beans-2.png" class="w-1/2" />
                        </div>

                        <div class="flex gap-10 items-center w-full">
                            <img src="assets/premium-coffee-beans-1.png" class="w-1/2" />
                            <p class="text-xl text-center font-light w-1/2">Coffee Sold 30 million cups in year 2020</p>
                        </div>
                    </div>

                    <div class="w-[574px]">
                        <img src="assets/premium-coffee-beans-3.png" class="w-full" />
                    </div>
                </div>
            </div>

            <div class="mt-24">
                <h2 class="text-[#0A225E] text-5xl font-bold uppercase">Follow Us</h2>

                <img src="assets/follow-us-banner.png" class="mt-12" />
            </div>

            <div class="mt-24">
                <div class="flex justify-between items-center">
                    <h2 class="text-[#0A225E] text-5xl font-bold uppercase">Our Menu</h2>

                    <a href="Menu.php" class="text-xl text-[#0A225E] font-semibold">See More &#10132;</a>
                </div>

                <div class="mt-24 grid grid-cols-4 gap-10">
                    <div class="bg-[#0A225E] p-6 rounded-[10px] relative">
                        <img src="assets/americano-arabica-transparent.png"
                            class="absolute -translate-x-3 translate-y-[-25%]" />
                        <p class="uppercase text-white text-center text-lg pt-64">Americano Arabica</p>
                    </div>

                    <div class="bg-[#0A225E] p-6 rounded-[10px] relative">
                        <img src="assets/arabica-coffee-milk-transparent.png"
                            class="absolute -translate-x-3 translate-y-[-25%]" />
                        <p class="uppercase text-white text-center text-lg pt-64">Arabica Coffee
                            Milk</p>
                    </div>

                    <div class="bg-[#0A225E] p-6 rounded-[10px] relative">
                        <img src="assets/arenga-coffee-transparent.png"
                            class="absolute -translate-x-6 translate-y-[-25%]" />
                        <p class="uppercase text-white text-center text-lg pt-64">Arenga Coffee</p>
                    </div>

                    <div class="bg-[#0A225E] p-6 rounded-[10px] relative">
                        <img src="assets/black-sesame-coffee-transparent.png"
                            class="absolute -translate-x-3 translate-y-[-25%]" />
                        <p class="uppercase text-white text-center text-lg pt-64">Black Sesame Coffee</p>
                    </div>
                </div>
            </div>

            <div class="mt-24 bg-[url('/assets/contact-us-bg.png')] bg-cover bg-center p-32">
                <h3 class="text-[#0A225E] text-5xl font-bold underline w-2/3">Contact with us if You've Any Questions
                </h3>

                <div class="mt-8 flex gap-2 items-center">
                    <div class="size-6 bg-[#0A225E] rounded-full"></div>
                    <p class="text-lg font-semibold underline">24/7 Everyday Free Support!</p>
                </div>

                <button class="mt-12 bg-[#0A225E] text-lg text-white px-12 py-3 rounded-full">Contact</button>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

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
</body>

</html>