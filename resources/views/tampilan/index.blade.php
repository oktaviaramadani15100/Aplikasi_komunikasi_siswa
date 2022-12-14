@extends('layout.dashboard-header')
@section('content')
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
              
                    <h3 class="text-primary" style="margin-left:50px; font-size:20px; margin-top:20px;">komunikasi siswa </h3>
                
                <div class="d-flex align-items-center ms-4 mb-4" style="margin-top:35px;">
                    <div class="position-relative">
                        <img class="rounded-circle" src="asset/img/foto.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Oktavia ramadani</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/siswa" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Data siswa</a>
                    <a href="/guru" class="nav-item nav-link "><i class="fa fa-chart-bar me-2"></i>Data Guru</a>
                    <a href="/datapelanggaran" class="nav-item nav-link "><i class="fa fa-chart-bar me-2"></i>Data Pelanggaran</a>
                    <a href="/getdatalaporan" class="nav-item nav-link "><i class="fa fa-chart-bar me-2"></i>Laporan</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="asset/img/foto.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">okta send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="asset/img/foto.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">okta send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="asset/img/foto.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">okta send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="asset/img/foto.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Oktavia ramadani</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
        <div class="row" >
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Data siswa</h2>
                    </div>
                    <div class="card-body">
                        <a href="/tambah_siswa" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table" style="overflow:hidden;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>NISN</th>
                                        <!-- <th>Jenis kelamin</th> -->
                                        <!-- <th>Alamat</th> -->
                                        <!-- <th>No Telepon</th> -->
                                        <!-- <th>Email</th>
                                        <th>Password</th> -->
                                        <th>Wali kelas</th>
                                        <th>Jumlah Poin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
                
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                              
                                    <tr>
                                        <th scope="row">{{$no++}}</th>
                                        <td>{{$row->nama}}</td>
                                        <td>{{$row->kelas}}</td>
                                        <td>{{$row->jurusan}}</td>
                                        <td>{{$row->nisn}}</td>
                                        <!-- <td>{{$row->jeniskelamin}}</td>
                                        <td>{{$row->alamat}}</td>
                                        <td>{{$row->notelepon}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->password}}</td> -->
                                        <td>{{$row -> guru -> nama_guru}}</td>
                                        <td>
                                            @php
                                            $total = 0;
                                            @endphp
                                            @foreach($row -> pelanggaran as $sispel)
                                            @php
                                                $total += $sispel -> poin;
                                            @endphp
                                            @endforeach
                                            {{$total}}
                                        </td>
                                       
                                        <td style="display: flex; margin-left: -10px;" >
                                            <a href="/detailsiswa/{{$row->id}}" title="View Student" style="margin:10px;"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="/tampilkandatasiswa/{{$row->id}}" title="Edit Student" style="margin:10px; margin-left: -1px;"><button class="btn btn-primary btn-sm "><img style="width: 20px;" src="{{asset('asset/img/pen.png')}}" alt=""></button></a>      
                                            <a href="/deletesiswa/{{$row->id}}"> <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" style="margin:10px; margin-left: -1px;"><img src="{{asset('asset/img/delete.png')}}" alt="" style="width: 20px;"></button></a> 
                                           
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('asset/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('asset/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{('asset/js/main.js')}}"></script>
@endsection