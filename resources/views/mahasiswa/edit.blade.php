@extends('template.main')
@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
        </div>
        <!--end::App Main-->
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Data Prodi</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ url("mahasiswa/$mahasiswa->nim") }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
            <div class="form-group">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" id="nim"
            class="form-control @error('nim') is-invalid @enderror"
            value="{{$mahasiswa->nim}}" disabled>
            @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password"
            class="form-control @error('password') is-invalid @enderror" value="{{$mahasiswa->password}}">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
            value="{{$mahasiswa->nama}}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror"
            value="{{$mahasiswa->tgl_lahir}}">
            @error('tgl_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="no_telp" class="form-label">No telp</label>
            <input type="text" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror"
            value="{{$mahasiswa->no_telp}}">
            @error('no_telp')
                <div class="invalid-feedback">
                    {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
            value="{{$mahasiswa->email}}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="id" class="form-label">Prodi</label>
            <select class="form-select" name="id" id="id">
                @foreach ($prodi as $p)
                        <option value="{{ $p->id }}"
                            {{ $p->id== $mahasiswa->id ? 'SELECTED' : '' }}>
                            {{ $p->nama }}></option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
            <label class="form-label" for=foto>Upload Foto</label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto">
                @error('foto')
            <div class="invalid-feedback">
                    {{ $message }}
        </div>
            @enderror
            </div>
        </div>
        <div class="card-footer">
                <a href="index.php" class="btn btn-warning">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
    </form> 
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
    </div>
        <!-- /.row (main row) -->
    </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->
@endsection