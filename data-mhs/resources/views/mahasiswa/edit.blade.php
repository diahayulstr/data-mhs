<!Doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Mahasiswa</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styleassets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>
    <script src="{{ asset('js/script.js')}}"></script>


    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">Dashboard</a>
                <a class="navbar-brand hidden" href="">M</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('home') }}"> <i class="menu-icon fa fa-dashboard"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{ url('mahasiswa') }}"> <i class="menu-icon fa fa-puzzle-piece"></i>Mahasiswa </a>
                    </li>
                    <li>
                        <a href="{{ url('provinsi') }}"> <i class="menu-icon fa fa-puzzle-piece"></i>Provinsi </a>
                    </li>
                    <li>
                        <a href="{{ url('kabupaten') }}"> <i class="menu-icon fa fa-puzzle-piece"></i>Kabupaten</a>
                    </li>
                    <li>
                        <a href="{{ url('kecamatan') }}"> <i class="menu-icon fa fa-puzzle-piece"></i>Kecamatan</a>
                    </li>
                    {{-- <li>
                        <a href="{{ url('riwayatpendidikan') }}"> <i class="menu-icon fa fa-puzzle-piece"></i>Riwayat
                            Pendidikan</a>
                    </li> --}}
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.jpg') }}">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language"
                            aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-id"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-id"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-jp"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Mahasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="animated fadeIn">

                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Update Mahasiswa</strong>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('mahasiswa') }}" class="btn btn-success btn-sm">
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-6">
                                <form method="POST"
                                    action="{{ route('mahasiswa.update', ['mahasiswa' => $mahasiswa->id]) }}">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            id="nama" name="nama"
                                            value="{{ old('nama') ?? $mahasiswa->nama }}">
                                        @error('nama')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nim">NIM</label>
                                        <input type="text" class="form-control @error('nim') is-invalid @enderror"
                                            id="nim" name="nim"
                                            value="{{ old('nim') ?? $mahasiswa->nim }}">
                                        @error('nim')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="prodi">Program Studi</label>
                                        <input type="text"
                                            class="form-control @error('prodi') is-invalid @enderror" id="prodi"
                                            name="prodi" value="{{ old('prodi') ?? $mahasiswa->prodi }}">
                                        @error('prodi')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date"
                                            class="form-control @error('tgl_lahir') is-invalid @enderror"
                                            id="tgl_lahir" name="tgl_lahir"
                                            value="{{ old('tgl_lahir') ?? $mahasiswa->tgl_lahir }}">
                                        @error('tgl_lahir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text"
                                            class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                            name="alamat" value="{{ old('alamat') ?? $mahasiswa->alamat }}">
                                        @error('alamat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <a href="{{ url('mahasiswa') }}" class="btn btn-danger">Batal</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>

                    </div>


                </div>

                {{-- @if (isset($mahasiswa)) --}}
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <strong>Riwayat Pendidikan Mahasiswa</strong>
                            </div>
                            <div class="pull-right">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#form-riwayat">
                                    Add
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table-bordered table">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Keluar</th>
                                    <th>Nilai Akhir</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                                @foreach ($riwayat_pendidikan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_sekolah }}</td>
                                        <td>{{ $item->tahun_masuk }}</td>
                                        <td>{{ $item->tahun_keluar }}</td>
                                        <td>{{ $item->nilai_akhir }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-primary btn-edit" href="#" id="btn-update"
                                                data-id="{{ $item->id }}"
                                                data-nama_sekolah="{{ $item->nama_sekolah }}"
                                                data-tahun_masuk="{{ $item->tahun_masuk }}"
                                                data-tahun_keluar="{{ $item->tahun_keluar }}"
                                                data-nilai_akhir="{{ $item->nilai_akhir }}">Update</a>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ url('mahasiswa/'.$item->id.'/'.$mahasiswa->id.'/riwayat') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                        </div>


                    </div>

                {{-- @endif --}}

            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="form-riwayat" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<form method="POST" action="{{ url('mahasiswa/' . $mahasiswa->id . '/riwayat') }}"
    enctype="multipart/form-data">
    @csrf
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Riwayat Pendidikan</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <input type="hidden" id="riwayat_id" name="riwayat_id">

                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input type="text"
                        class="form-control @error('nama_sekolah') is-invalid @enderror"
                        id="nama_sekolah" name="nama_sekolah"
                        value="{{ old('nama_sekolah') }}">
                    @error('nama_sekolah')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tahun_masuk">Tahun Masuk</label>
                    <input type="year"
                        class="form-control @error('tahun_masuk') is-invalid @enderror"
                        id="tahun_masuk" name="tahun_masuk"
                        value="{{ old('tahun_masuk') }}">
                    @error('tahun_masuk')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tahun_keluar">Tahun Keluar</label>
                    <input type="year"
                        class="form-control @error('tahun_keluar') is-invalid @enderror"
                        id="tahun_keluar" name="tahun_keluar"
                        value="{{ old('tahun_keluar') }}">
                    @error('tahun_keluar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nilai_akhir">Nilai Akhir</label>
                    <input type="number"
                        class="form-control @error('nilai_akhir') is-invalid @enderror"
                        id="nilai_akhir" name="nilai_akhir"
                        value="{{ old('nilai_akhir') }}">
                    @error('nilai_akhir')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</form>
</div>


</body>

</html>
