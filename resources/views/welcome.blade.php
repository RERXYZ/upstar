<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Futuristic 1</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="stylesheet" href="../css/app.css">
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="fixed flex w-screen flex-col justify-center items-center bg-white dark:bg-[#121212] sm:bg-transparent dark:sm:bg-transparent z-40 px-[1rem]">
        <div class="background w-screen h-[.5rem] bg-white dark:bg-[#121212]"></div>
        <div class="my-container flex w-full items-center justify-between">
            <div class="logo relative flex items-center justify-center w-[4rem] h-[4rem] bg-white dark:bg-[#121212]">
                <img class="w-full" src="{{ asset('storage/img/logo.png') }}" alt="Logo">
            </div>
            <ul class="ulnav relative flex items-center h-[4rem] px-[2rem] sm:gap-[1rem] gap-2 bg-white dark:bg-[#121212]">
                <li><a href="https://www.instagram.com/reyrnd._?igsh=eGZsbGNxY3VodHQ4" class="text-black dark:text-white sm:py-[.5rem] sm:px-[1rem] py-[.3rem] px-[.7rem] rounded-full sm:border-[2px] border-[1.5px] border-black dark:border-white font-quicksand font-semibold">Contact Me</a></li>
                <div class="buttontoggle flex justify-center">
                    <span class="material-symbols-rounded w-full hidden text-[2.5rem] hover:cursor-pointer text-white" id="light-toggle">light_mode</span>
                    <span class="material-symbols-rounded w-full text-[2rem] hover:cursor-pointer text-black" id="dark-toggle">dark_mode</span>
                </div>
            </ul>
        </div>
    </nav>

    <section class="flex w-full h-screen min-h-[718px] bg-white dark:bg-[#121212] px-[1rem] pb-[1rem]">
        <div class="my-container flex w-full rounded-[40px] overflow-hidden">
            <div class="content relative flex flex-col w-full h-full items-center justify-center">
                <div class="background flex flex-col justify-center items-center w-full h-full bg-[#222222] dark:bg-[#868686]">
                    <div class="landingtitle absolute flex lg:left-[6rem] left-[2rem] bottom-[1rem]">
                        <h1 class="text-[10rem] lg:text-[13rem] leading-none font-bigmacca text-[#323232] dark:text-[#202020]">UP</h1>
                        <h1 class="text-[10rem] lg:text-[13rem] leading-none font-bigmacca text-[#323232] dark:text-[#202020]">STAR</h1>
                    </div>
                    <div class="absolute flex items-end justify-center bottom-0 w-full h-full">
                        <img class="heroimg xs:h-full h-[80%] sm:w-auto w-full object-cover" src="storage/img/charahero1.webp">
                    </div>
                    <div class="year absolute md:right-[3rem] sm:right-[2rem] right-[1rem] md:bottom-[20rem] sm:bottom-[14rem] bottom-[7rem] md:w-[20rem] w-[15rem] p-[1rem] bg-[#64646439] dark:bg-[#00000039] text-white dark:md:text-black backdrop-blur-sm rounded-[20px]">
                        <h1 class="md:text-[2rem] text-[1.5rem] pb-[.5rem] leading-none font-japanese">2024</h1>
                        <p class="font-poppins md:text-[.9rem] text-[.7rem]">Terus ikuti perkembangan proyek ini, karena saya tidak tau web apa ini. Berikan saran agar web ini menarik. Terima kasih atas dukungan Anda!</p>
                    </div>
                </div>
                <div class="smallimg absolute sm:p-[1rem] p-[.5rem] right-0 bottom-0 z-10 bg-white dark:bg-[#121212]">
                    <swiper-container class="mySwiper md:w-[15rem] md:h-[15rem] sm:w-[10rem] sm:h-[10rem] w-[5rem] h-[5rem]" space-between="30" centered-slides="true">
                        <swiper-slide class="swiperslide flex rounded-[20px] overflow-hidden">
                            <div class="content flex w-full h-full">
                                <img class="w-full h-full cursor-pointer" src="storage/img/chara1.webp" onclick="imghero('storage/img/charahero1.webp')">
                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiperslide flex rounded-[20px] overflow-hidden">
                            <div class="content flex w-full h-full">
                                <img class="w-full h-full cursor-pointer" src="storage/img/chara2.webp" onclick="imghero('storage/img/charahero2.webp')">
                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiperslide flex rounded-[20px] overflow-hidden">
                            <div class="content flex w-full h-full">
                                <img class="w-full h-full cursor-pointer" src="storage/img/chara3.webp" onclick="imghero('storage/img/charahero3.webp')">
                            </div>
                        </swiper-slide>
                        <swiper-slide class="swiperslide flex rounded-[20px] overflow-hidden">
                            <div class="content flex w-full">
                                <img class="w-full h-full cursor-pointer" src="storage/img/chara4.webp" onclick="imghero('storage/img/charahero4.webp')">
                            </div>
                        </swiper-slide>
                    </swiper-container>
                </div>
                <a href="#legendhero" class="scrollbutton absolute flex py-[.2rem] px-[3rem] bottom-0 bg-white dark:bg-[#121212] text-black dark:text-white"><span class="material-symbols-rounded">keyboard_double_arrow_down</span></a>
            </div>
        </div>
    </section>

    <section class="flex w-full bg-white dark:bg-[#121212] px-[1rem] py-[1rem]">
        <div class="my-container flex w-full overflow-hidden rounded">
            <div class="slider w-full flex h-[30px]">
                <div class="listinfinite relative flex w-full">
                    <div class="iteminfinite" style="--position: 1"><img class="w-full h-full" src="" alt=""></div>
                    <div class="iteminfinite" style="--position: 2"><img class="w-full h-full" src="" alt=""></div>
                    <div class="iteminfinite" style="--position: 3"><img class="w-full h-full" src="" alt=""></div>
                    <div class="iteminfinite" style="--position: 4"><img class="w-full h-full" src="" alt=""></div>
                    <div class="iteminfinite" style="--position: 5"><img class="w-full h-full" src="" alt=""></div>
                    <div class="iteminfinite" style="--position: 6"><img class="w-full h-full" src="" alt=""></div>
                    <div class="iteminfinite" style="--position: 7"><img class="w-full h-full" src="" alt=""></div>
                    <div class="iteminfinite" style="--position: 8"><img class="w-full h-full" src="" alt=""></div>
                    <div class="iteminfinite" style="--position: 9"><img class="w-full h-full" src="" alt=""></div>
                    <div class="iteminfinite" style="--position: 10"><img class="w-full h-full" src="" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="flex w-full bg-white dark:bg-[#121212] px-[1rem] py-[5rem]" id="legendhero">
        <div class="legendhero my-container flex w-full flex-col items-center">
            <div class="title">
                <h1 class="dark:text-white text-center font-quicksand font-bold text-[2rem] sm:text-[2.7rem]">Legenda Datang dari Sini</h1>
                <p class="pt-[.5rem] pb-[1rem] dark:text-white text-center font-poppins text-[.8rem] sm:text-[1rem]">Menyatukan Masa Lalu dan Masa Depan: Eksplorasi Legenda melalui Dunia Robot dan Fiksi Ilmiah</p>
            </div>
            <div class="content flex w-full flex-wrap justify-center pt-[2rem] gap-[2rem]">
                <div class="relative card flex flex-col xs:w-[15rem] xs:h-[20rem] xss:w-[20rem] xss:h-[25rem] w-full h-[25rem] sm:w-[14rem] sm:h-[20rem] md:w-[20rem] md:h-[25rem] overflow-hidden rounded-[20px]" data-tilt data-tilt-max="25" data-tilt-speed="200" data-tilt-perspective="1000" data-tilt>
                    <img class="fullimage w-full h-full rounded-[20px]" src="storage/img/legendchara1.jpeg" alt="">
                    <img class="pngimage absolute top-0 left-0 w-full h-full rounded-[20px]" src="storage/img/legendchara1.png" alt="">
                    <div class="text absolute w-full bottom-0 left-0 bg-[#ffffff27] backdrop-blur-[10px] px-[1rem] md:h-[7rem]">
                        <span class="absolute sm:text-[2.5rem] text-[2rem] font-quicksand font-bold sm:top-[-2.2rem] top-[-1.5rem]">01</span>
                        <h1 class="md:text-[2.5rem] text-[2rem] p-[1rem] font-semibold font-poppins dark:text-[#ffffff]">Cuki<span>.</span></h1>
                    </div>
                </div>
                <div class="relative card flex flex-col xs:w-[15rem] xs:h-[20rem] xss:w-[20rem] xss:h-[25rem] w-full h-[25rem] sm:w-[14rem] sm:h-[20rem] md:w-[20rem] md:h-[25rem] overflow-hidden rounded-[20px]" data-tilt data-tilt-max="25" data-tilt-speed="200" data-tilt-perspective="1000" data-tilt>
                    <img class="fullimage w-full h-full rounded-[20px]" src="storage/img/legendchara2.jpeg" alt="">
                    <img class="pngimage absolute top-0 left-0 w-full h-full rounded-[20px]" src="storage/img/legendchara2.png" alt="">
                    <div class="text absolute w-full bottom-0 left-0 bg-[#ffffff27] backdrop-blur-[10px] px-[1rem] md:h-[7rem]">
                        <span class="absolute sm:text-[2.5rem] text-[2rem] font-quicksand font-bold sm:top-[-2.2rem] top-[-1.5rem]">02</span>
                        <h1 class="md:text-[2.5rem] text-[2rem] p-[1rem] font-semibold font-poppins text-[#fbe2c1]">Puki<span>.</span></h1>
                    </div>
                </div>
                <div class="relative card flex flex-col xs:w-[15rem] xs:h-[20rem] xss:w-[20rem] xss:h-[25rem] w-full h-[25rem] sm:w-[14rem] sm:h-[20rem] md:w-[20rem] md:h-[25rem] overflow-hidden rounded-[20px]" data-tilt data-tilt-max="25" data-tilt-speed="200" data-tilt-perspective="1000" data-tilt>
                    <img class="fullimage w-full h-full rounded-[20px]" src="storage/img/legendchara3.jpeg" alt="">
                    <img class="pngimage absolute top-0 left-0 w-full h-full rounded-[20px]" src="storage/img/legendchara3.png" alt="">
                    <div class="text absolute w-full bottom-0 left-0 bg-[#ffffff27] backdrop-blur-[10px] px-[1rem] md:h-[7rem]">
                        <span class="absolute sm:text-[2.5rem] text-[2rem] font-quicksand font-bold sm:top-[-2.2rem] top-[-1.5rem]">03</span>
                        <h1 class="md:text-[2.5rem] text-[2rem] p-[1rem] font-semibold font-poppins dark:text-[#ffffff]">Muki<span>.</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flex w-full bg-white dark:bg-[#121212] px-[1rem] py-[5rem]">
        <div class="quotesection relative my-container flex flex-col w-full h-full py-[7rem] overflow-hidden items-center">
            <div class="profile absolute lg:w-[30rem] w-[25rem] h-[full] object-cover lg:bottom-0 lg:left-0 top-[-40px]">
                <img class="w-full h-full object-cover lg:opacity-100 opacity-55" src="storage/img/profilekomen.png" alt="">
            </div>
            <div class="relative flex flex-col xl:pl-[30rem] lg:pl-[27rem] pl-0 z-20">
                <span class="absolute xl:top-[-1.5rem] lg:top-[-2rem] top-[-2rem] xl:left-[27rem] lg:left-[24rem] left-[1rem] sm:text-[8rem] text-[6rem] font-bigmacca text-[#d7a2c3]">"</span>
                <h1 class="xl:text-[5rem] lg:text-[4.2rem] sm:text-[3.2rem] text-[1.7rem] lg:text-[#000000] text-[#000000c9] lg:px-0 md:px-[3.8rem] sm:px-[3.5rem] px-[3rem] lg:text-left text-center dark:text-[#ffffff] lg:dark:text-[#ffffffbf] font-bold font-poppins">Kalau hidupmu berat, yah itu hidupmu, bukan hidupku.</h1>
            </div>
            <img class="absolute w-[15rem] lg:left-0 top-0 right-0 z-[-1] lg:rotate-[270deg]" src="storage/img/pluspattern.png" alt="">
        </div>
    </section>

    <section class="flex w-full bg-white dark:bg-[#121212] px-[1rem] py-[5rem]">
        <div class="contactsection relative my-container flex flex-col w-full h-full overflow-hidden">
            <div class="title flex justify-end">
                <h1 class="dark:text-white w-[35rem] text-right font-quicksand font-bold text-[2rem] sm:text-[3rem]">Mengenal Lebih Dekat sang Kreator</h1>
            </div>
            <div class="profile pt-[3rem]">
                <div class="title">
                    <h1 class="dark:text-white text-[1.3rem] sm:text-[2rem] font-quicksand font-semibold">Get to Know</h1>
                </div>
                <div class="content pt-[1rem] flex gap-[1rem]">
                    <div class="card">
                        <div class="profile w-[5rem] h-[5rem] sm:w-[7rem] sm:h-[7rem] rounded-full overflow-hidden">
                            <img class="w-full h-full object-cover" src="storage/img/founder.jpg" alt="">
                        </div>
                        <div class="text">
                            <span class="dark:text-white font-poppins font-bold text-[17px] sm:text-[20px]">Reynard</span>
                            <p class="dark:text-white font-poppins leading-none text-[12px] sm:text-[15px]">Founder</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="profile w-[5rem] h-[5rem] sm:w-[7rem] sm:h-[7rem] rounded-full overflow-hidden">
                            <img class="w-full h-full object-cover" src="storage/img/designer.jpg" alt="">
                        </div>
                        <div class="text">
                            <span class="dark:text-white font-poppins font-bold text-[17px] sm:text-[20px]">Fizz</span>
                            <p class="dark:text-white font-poppins leading-none text-[12px] sm:text-[15px]">Designer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact sm:pt-[4rem] pt-[1rem] flex items-end flex-col">
                <div class="title flex">
                    <h1 class="dark:text-white sm:text-[1rem] font-quicksand font-bold">More about</h1>
                </div>
                <div class="content flex items-center gap-[.5rem]">
                    <a href="https://www.linkedin.com/in/reynard-rande-64b61b298" class="card"><i class="uil uil-linkedin text-[#0b65c3] text-[1.5rem] sm:text-[2rem]"></i></a>
                    <a href="https://www.instagram.com/reyrnd._?igsh=eGZsbGNxY3VodHQ4" class="card"><i class="uil uil-instagram-alt text-[#f752bf] text-[1.5rem] sm:text-[2rem]"></i></a>
                    <a href="https://t.me/gwehjj" class="card"><i class="uil uil-telegram text-[#348ff0] text-[1.5rem] sm:text-[2rem]"></i></a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/vanilla-tilt.js"></script>
    @vite('resources/js/app.js')
    @vite('resources/js/vanilla-tilt.js')
</body>
</html>