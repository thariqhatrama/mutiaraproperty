@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 px-3">
                    <h1>Kelola Artikel</h1>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container">
                <form action="/dashboard/admin" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Artikel</label>
                        <input type="text" class="form-control" name="judul" id="judul">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Thumbnail Berita</label>
                        <input class="form-control" type="file" name="gambar" id="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Isi Artikel</label>
                        <textarea class="form-control" id="body" name="body" rows="5"></textarea>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary btn-block">Tambah Artikel</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
