@extends('layouts.master')
@section('content')
    <style>
        #kenapa_container{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin: 0px 30px;
        }
        .kenapa_cardnya{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            gap: 10px;
            border-radius: 10px;
        }

        .kenapa_cardnya > img{
            border-radius: 10px !important;
        }

        @media(width < 1000px){
            #kenapa_container{
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media(width < 700px){
            #kenapa_container{
                grid-template-columns: repeat(1, 1fr);
                margin: 0px 8px;
            }
        }
        @media(width < 375px){
            #image_hero{
                width: 250px;
            }
            #kenapa_container{
                display: flex;
                flex-direction: column;
                /* justify-content: center; */
                align-content: center;
            }
            .kenapa_cardnya{
                /* width: 300px; */
            }
        }
    </style>

    {{-- Hero --}}
    <section id="hero">
        <div class="container d-flex justify-content-center align-items-center gap-5 flex-wrap">
            <img src="{{('image/hero2.png')}}" alt="hero" width="300" id="image_hero">
            <div>
                <h1 class="fw-bold" style="font-size: 64px;color: #0A6847;">Bank Sampah</h1>
                <p class="fw-bold align-self-center" style="font-size: 32px;">Kamu punya sampah? Jual aja di sini.</p>
                <p class="fw-bold align-self-center" style="font-size: 18px;">Ayo Login Terlebih Dahulu untuk melihat Data Sampah</p>
                <a href="{{route('get_login')}}">
                    <button class="btn btn text-light fw-bold" style="background-color: #0A6847">Klik Disini !!</button>
                </a>
            </div>
        </div>
    </section>
    {{-- End Hero --}}

    {{-- Kenapa Harus Bank Sampah --}}
    <section id="kenapa_harus" style="background-color: #F1EDE1;margin-top:50px; padding:100px 0px;">
        <h1 class="text-center fw-bold px-2 mb-5" style="font-size: 36px;color:#0A6847">Kenapa Harus Bank Sampah?</h1>
        <div id="kenapa_container">
            <div class="kenapa_cardnya bg-success">
                <img src="{{('image/uang.png')}}" class="img-fluid mt-3" alt="uang" height="300">
                <h3 class="align-self-center fw-bold text-light text-center">Menghasilkan Uang</h3>
                <p class="text-light">Dengan menjual sampah yang dapat didaur ulang seperti kertas, plastik, kaca, dan logam ke Bank Sampah, 
                kamu bisa menghasilkan pendapatan tambahan dari barang-barang yang biasanya hanya dibuang begitu saja.</p>
            </div>
            <div class="kenapa_cardnya bg-success">
                <img src="{{('image/kesadaran.png')}}" class="img-fluid mt-3" alt="kesadaran" height="300">
                <h3 class="align-self-center fw-bold text-light text-center">Meningkatkan Kesadaran Lingkungan</h3>
                <p class="text-light">Disini kamu akan belajar lebih banyak tentang bagaimana sampah mempengaruhi 
                ekosistem kita dan cara-cara untuk mengurangi dampak negatifnya.</p>
            </div>
            <div class="kenapa_cardnya bg-success">
                <img src="{{('image/edukasi.png')}}" class="img-fluid mt-3" alt="edukasi" height="300">
                <h3 class="align-self-center fw-bold text-light text-center">Menambah Wawasan dan Edukasi</h3>
                <p class="text-light">Dengan berpartisipasi dalam program Bank Sampah, kamu akan mendapatkan edukasi 
                tentang proses daur ulang, jenis-jenis bahan yang bisa didaur ulang, dan bagaimana proses tersebut membantu mengurangi polusi.</p>
            </div>
        </div>
    </section>
    {{-- End Kenapa Harus Bank Sampah --}}
    
    {{-- Jual Barang Bekasmu Sekarang! --}}
    <section id="jual_barang" class="bg-light" style="margin-top:50px; padding:100px 0px;">
        <h1 class="text-center fw-bold px-2 mb-5" style="font-size: 36px;color:#0A6847">Jual Barang Bekasmu Sekarang!</h1>
        <div class="container d-flex flex-column gap-3">
            <div class="d-flex gap-3 p-3 rounded-4" style="background-color: #F1EDE1;">
                <i class="bi bi-recycle fs-1 text-success"></i>
                <div>
                    <h5 class="text-success fw-bold">Mengumpulkan Sampah</h5>
                    <p class="text-success fw-bold">Kamu dapat pengumpulkan sampah yang sesuai dengan ketentuan untuk nantinya di jual ke bank sampah. 
                        Jangan lupa di bersihkan dan di bungkus terlebih dahulu, ya. </p>
                </div>
            </div>
            <div class="d-flex gap-3 p-3 rounded-4" style="background-color: #0A6847;">
                <i class="bi bi-truck fs-1 text-light"></i>
                <div>
                    <h5 class="text-light fw-bold">Setorkan ke Bank Sampah</h5>
                    <p class="text-light fw-bold">Setelah sampahmu terkumpul, bawa sampahmu ke Bank Sampah terdekat untuk 
                        dijual jadi uang.</p>
                </div>
            </div>
            <div class="d-flex gap-3 p-3 rounded-4" style="background-color: #F1EDE1;">
                <i class="bi bi-coin fs-1 text-success"></i>
                <div>
                    <h5 class="text-success fw-bold">Jual dengan mudah dan cepat</h5>
                    <p class="text-success fw-bold">Kamu bisa langsung dapet uang setelah sampah ditimbang dan dipilah. 
                        Jangan lupa untuk mengumpulkan sampah lagi agar bisa di jual ke Bank Sampah.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Jual Barang Bekasmu Sekarang! --}}

    {{-- Jenis Sampah --}}
    <section id="jenis_sampah" style="padding:100px 0px;background-color: #0A6847">
        <h1 class="text-light text-center fw-bold px-2" style="font-size: 36px;">Jenis sampah yang kami terima</h1>
        <div class="d-flex justify-content-center gap-5 flex-wrap my-5">
            <div>
                <img src="{{('image/kaca.jpg')}}" alt="kaca" width="280" height="250" class="rounded-2">
                <h4 class="text-center mt-3 fw-bold text-light">Kaca</h4>
            </div>
            <div>
                <img src="{{('image/plastik.jpg')}}" alt="plastik" width="280" height="250" class="rounded-2">
                <h4 class="text-center mt-3 fw-bold text-light">Plastik</h4>
            </div>
            <div>
                <img src="{{('image/kertas.jpg')}}" alt="kertas" width="280" height="250" class="rounded-2">
                <h4 class="text-center mt-3 fw-bold text-light">Kertas</h4>
            </div>
            <div>
                <img src="{{('image/logam.jpg')}}" alt="logam" width="280" height="250" class="rounded-2">
                <h4 class="text-center mt-3 fw-bold text-light">Kaleng</h4>
            </div>
            <div>
                <img src="{{('image/elektronik.jpg')}}" alt="elektronik" width="280" height="250" class="rounded-2">
                <h4 class="text-center mt-3 fw-bold text-light">Elektronik</h4>
            </div>
            <div>
                <img src="{{('image/tesktil.jpg')}}" alt="tesktil" width="280" height="250" class="rounded-2">
                <h4 class="text-center mt-3 fw-bold text-light">Tesktil</h4>
            </div>
        </div>  
    </section>
    {{-- End Jenis Sampah --}}

    {{-- Hubungi Kami --}}
    <section id="hubungi-kami" style="background-color: #F1EDE1; padding:100px 0px;">
        <div class="container d-flex align-items-center justify-content-center flex-wrap gap-3">
            <div class="px-2 d-flex flex-column gap-3 col-md-5">
                <h2 class="fw-bold">Hubungi Kami</h2>
                <p>Kami siap membantu kamu dengan pertanyaan dan umpan balik atau bantuan apapun yang kamu butuhkan.
                Jangan ragu untuk  menghubungi kami, ya!</p>
                <div class="d-flex gap-2 align-items-center rounded-2 p-2" style="background-color: #0A6847">
                    <i class="bi bi-envelope text-light fs-3"></i>
                    <div>
                        <p class="m-0 fw-bold text-light">Email</p>
                        <p class="m-0 text-light">banksampah@example.com</p>
                    </div>
                </div>
                <div class="d-flex gap-2 align-items-center rounded-2 p-2" style="background-color: #0A6847">
                    <i class="bi bi-telephone  text-light fs-3"></i>
                    <div>
                        <p class="m-0 fw-bold text-light">Telepon</p>
                        <p class="m-0 text-light">+62123456789</p>
                    </div>
                </div>
            </div>
            <div class="py-3 px-5 col-md-6 px-5 py-5 rounded-4" style="background-color: #0A6847">
                <form action="" method="">
                    <div class="mb-3 d-flex flex-column">
                      <label for="exampleInputnama1" class="form-label text-light">Nama</label>
                      <input type="nama" class="form-control" id="exampleInputnama1" placeholder="Masukkan nama kamu">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                      <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email kamu">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                      <label for="exampleInputPesan1" class="form-label text-light">Pesan</label>
                      <textarea class="form-control" placeholder="Beri pesan untuk kami di sini" id="floatingTextarea" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-light text-success fw-bold">Submit</button>
                  </form>
            </div>
            
        </div>
    </section>
    {{-- End Hubungi Kami --}}

@endsection