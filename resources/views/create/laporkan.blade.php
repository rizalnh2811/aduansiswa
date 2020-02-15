@extends('layouts.main')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="/success" method="POST">
                        @csrf
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Masukkan Nama Lengkapmu...">
                        <label>Keluhan</label>
                        <select name="keluh" id="keluh" class="form-control">
                            <option hidden>Keluhan</option>
                            <option value="Kebersihan">Kebersihan</option>
                            <option value="Fasilitas">Fasilitas</option>
                            <option value="Administrasi">Administrasi</option>
                        </select>
                        <label>Kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                            <option hidden>Kelas</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                        <label>Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option hidden>Jurusan</option>
                            <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Pemasaran">Pemasaran</option>
                            <option value="Rpl">Rekayasa Perangkat Lunak</option>
                        </select>
                        <label>No Handphone</label>
                        <input type="text" class="form-control" name="nomorhp" id="nomorhp" placeholder="Masukkan No HPmu...">
                        <label>Jenis Kelamin</label>
                        <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                            <option hidden>Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>    
                            <option value="Perempuan">Perempuan</option>    
                            <option value="Tidak Disebutkan">Tidak Disebutkan</option>    
                        </select>           
                        <label>Komentar</label>
                        <textarea name="komentar" id="komentar" cols="10" rows="3" class="form-control"></textarea>
                        <button type="submit" class="btn btn-outline-primary float-right mt-3">Kirim Laporan!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>