<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- Link CSS Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    {{-- Link CDN Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    {{-- 1 --}}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    
        @media (max-width: 680px) {
            #login {
                flex-direction: column;
            }
        }
    
        @media (max-width: 500px) {
            #icon-login {
                width: 280px;
            }
        }
    </style>
</head>
<body>
    <section id="login" class="d-flex gap-5" style="height: 100vh;">
        <div style="background-color: #0A6847" class="col d-flex flex-column justify-content-center align-items-center">
            <img src="{{('image/icon-login.png')}}" id="icon-login" alt="icon-login" width="400">
        </div>
        <div class="col d-flex flex-column justify-content-center align-items-evenly px-3">
            <h3 class="fw-bold">Hai lagi kamu!</h3>
            <p class="">Selamat datang di Bank Sampah</p>
            <form action="{{ route('post_login') }}" method="POST" class="d-flex flex-column my-3">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label text-success">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Isi emailmu disini" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-success">Password</label>
                    <input type="password" class="form-control text-success" id="password" name="password" placeholder="Isi password disini" required>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-none border border-success rounded-5 align-self-center text-success fw-bold" style="width: 70%;">Masuk</button>
            </form>
            
            <p class="align-self-center">Belum punya akun? <a href="{{route('get_register')}}" class="fw-bold">Daftar</a></p>
        </div>
    </section>

    {{-- Link JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>