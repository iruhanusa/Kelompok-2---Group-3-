<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        *{
            margin: 0;
        }
        @media(width < 750px){
            #register{
                flex-direction: column;
            }
        }
        @media(width < 500px){
            #icon-register{
                width: 280px;
            }
        }
    </style>
</head>
<body>
    <section id="register" class="d-flex gap-5" style="height: 100vh;">
        <div style="background-color: #0A6847" class="col d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('image/icon-register.png') }}" id="icon-register" alt="icon-register" width="400">
        </div>
        <div class="col d-flex flex-column justify-content-center align-items-evenly px-3">
            <h3 class="fw-bold">Hai kamu!</h3>
            <p class="">Daftar akun dulu ya!</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('post_register') }}" method="POST" class="d-flex flex-column my-3">
                @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label text-success">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Isi nama kamu disini" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label text-success">Email</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Isi emailmu disini" required>
                </div>
                <div class="mb-3">
                  <label for="no_hp" class="form-label text-success">No. Handphone</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" aria-describedby="emailHelp" placeholder="Isi Nomor Handphonemu disini" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label text-success">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Isi passwordmu disini" required>
                </div>
                <div class="mb-3">
                  <label for="password_confirmation" class="form-label text-success">Konfirmasi Password</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" required>
                </div>
                <button type="submit" class="btn btn-none border border-success rounded-5 align-self-center text-success fw-bold" style="width: 70%;">Daftar</button>
              </form>
            <p class="align-self-center">Sudah punya akun? <a href="{{ route('get_login') }}" class="fw-bold">Masuk</a></p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
