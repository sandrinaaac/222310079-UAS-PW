<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasbor</title>
    <!-- ============== styles ============ -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- =============== navigation ============== -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H53.39a8,8,0,0,0,7.23-4.57,48,48,0,0,1,86.76,0,8,8,0,0,0,7.23,4.57H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM80,144a24,24,0,1,1,24,24A24,24,0,0,1,80,144Zm136,56H159.43a64.39,64.39,0,0,0-28.83-26.16,40,40,0,1,0-53.2,0A64.39,64.39,0,0,0,48.57,200H40V56H216ZM56,96V80a8,8,0,0,1,8-8H192a8,8,0,0,1,8,8v96a8,8,0,0,1-8,8H176a8,8,0,0,1,0-16h8V88H72v8a8,8,0,0,1-16,0Z"></path></svg>
                        </span>
                        <span class="header">PinjamRuang</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard">
                        <span class="icon">
                            <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="header">Dasbor</span>
                    </a>
                </li>
                <li>
                    <a href="room">
                        <span class="icon">
                            <ion-icon name="file-tray-full"></ion-icon>
                        </span>
                        <span class="header">Data Ruangan</span>
                    </a>
                </li>
                <li>
                    <a href="schedule">
                        <span class="icon">
                            <ion-icon name="today"></ion-icon>
                        </span>
                        <span class="header">Data Jadwal</span>
                    </a>
                </li>
                <li>
                    <a href="reservation">
                        <span class="icon">
                            <ion-icon name="clipboard"></ion-icon>
                        </span>
                        <span class="header">Data Peminjaman</span>
                    </a>
                </li>
                <li>
                    <a href="history">
                        <span class="icon">
                            <ion-icon name="time"></ion-icon>
                        </span>
                        <span class="header">Riwayat Peminjaman</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- =============== main ================ -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="topbar-text">
                    <span>Dasbor</span>
                </div>
                <div class="user">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <div class="user-text">
                        <span>Administrator</span>
                    </div>
                </div>
                <div class="dropdown-logout">
                    <ion-icon id="dropdown-icon" name="chevron-down-outline"></ion-icon>
                    <div class="dropdown-content" id="dropdown-content">
                        <ion-icon name="log-out"></ion-icon>
                        <div class="logout-text">
                            <span>Keluar</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =========== cards ============ -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">22</div>
                        <div class="cardName">Total Peminjaman</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="clipboard"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">7</div>
                        <div class="cardName">Peminjaman</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="clipboard"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">5</div>
                        <div class="cardName">Ruangan</div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="file-tray-full"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="welcome">
                    <h1>Selamat Datang, Administrator!</h1>
                    <p>Klik <a href="room">di sini</a> untuk lihat daftar peminjaman ruangan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== scripts ============== -->
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- ================ionicons=============== -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
