<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>PinjamRuang</h1>
                {{-- <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                </div> --}}

                <input type="username" name="username" placeholder="Nama Pengguna" required>
                <input type="password" name="password" placeholder="Kata Sandi" required>
                <button type="submit">Masuk</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H53.39a8,8,0,0,0,7.23-4.57,48,48,0,0,1,86.76,0,8,8,0,0,0,7.23,4.57H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM80,144a24,24,0,1,1,24,24A24,24,0,0,1,80,144Zm136,56H159.43a64.39,64.39,0,0,0-28.83-26.16,40,40,0,1,0-53.2,0A64.39,64.39,0,0,0,48.57,200H40V56H216ZM56,96V80a8,8,0,0,1,8-8H192a8,8,0,0,1,8,8v96a8,8,0,0,1-8,8H176a8,8,0,0,1,0-16h8V88H72v8a8,8,0,0,1-16,0Z"></path></svg>
                </span>
                <div class="toggle-panel toggle-left">
                    <h1>Selamat Datang Kembali!</h1>

                    <button class="hidden" id="login">Masuk</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
