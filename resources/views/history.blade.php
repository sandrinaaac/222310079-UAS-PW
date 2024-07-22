<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Peminjaman</title>
    <!-- ============== styles ============ -->
    <link href="{{ asset('css/style_history.css') }}" rel="stylesheet">
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
                    <span>Riwayat Peminjaman</span>
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

            {{-- ============= History ============== --}}
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <h2>Riwayat Akses Ruangan</h2>
                        {{-- <button class="btn-unduh">Unduh Data</button> --}}
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pengguna</th>
                                <th>Ruangan</th>
                                <th>Buka Akses</th>
                                <th>Tutup Akses</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sophie Makianoor</td>
                                <td>405</td>
                                <td>07/06/2024 10:30</td>
                                <td>07/06/2024 12:30</td>
                                <td>Selesai</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sandrina C</td>
                                <td>406</td>
                                <td>05/02/2024 12:30</td>
                                <td>05/02/2024 15:30</td>
                                <td>Selesai</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Fajar N</td>
                                <td>407</td>
                                <td>26/02/2024 07:30</td>
                                <td>26/02/2024 10:30</td>
                                <td>Selesai</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Dimas Permana</td>
                                <td>403</td>
                                <td>30/08/2024 15:30</td>
                                <td>30/08/2024 17:30</td>
                                <td>Selesai</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Haykal Fadilah</td>
                                <td>404</td>
                                <td>15/09/2024 13:30</td>
                                <td>15/09/2024 15:30</td>
                                <td>Selesai</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

     <!-- =============== scripts ============== -->
     <script src="{{ asset('js/main.js') }}"></script>

     <!-- ================ionicons=============== -->
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 </body>
 </html>
