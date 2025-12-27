@extends('layout')

@section('title','dashboard')

@section('content')
        <div class="tambahMurid w-[900px] h-screen  flex justify-center items-center">
            <div class="formWrappper">
                <form action="" method="POST" class="flex flex-col w-full h-full justify-center  gap-4 bg-[#4c8af5] p-3 rounded-[10px] text-white"> 
                    @csrf       
                    <input type="number" name="nis" id="nis" placeholder="NIS" class="border-[1px] border-white p-1 rounded-[8px] w-[400px] ">
                    <input type="text" name="nama_murid" id="nama_murid" placeholder="Nama Murid" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]">
                        <div class="jenis_kelamin flex w-[300px] justify-between">
                            <label>
                                <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                            </label>
                            <label>
                                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                            </label>
                        </div>
                    <label>
                        Tanggal Lahir <input type="date" name="tanggal_lahir" class="border-[1px] rounded-[8px] p-1" id="date">
                    </label>
                    <input type="text" name="alamat" placeholder="Alamat" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]" id="address">
                    <input type="text" name="nama_orangtua" placeholder="Orangtua/Wali" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]" id="parents">
                    <input type="text" name="kontak_orangtua" placeholder="Kontak Orangtua/Wali" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]" id="contact">
                    <input type="text" name="tahun_masuk" placeholder="Tahun Masuk" class="border-[1px] border-white rounded-[8px] p-1 w-[400px]" id="tahunMasuk">
                    <input type="text" name="kelas" placeholder="Kelas" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]" id="class">
                    <div class="status w-[300px] flex justify-between">
                        <label>
                            <input type="radio" name="status" value="aktif">Aktif
                        </label>
                        <label>
                            <input type="radio" name="status" value="lulus">Lulus
                        </label>
                        <label>
                            <input type="radio" name="status" value="keluar">keluar
                    </label>
                </div>

                <button type="submit" class="border-[1px] border-white p-1 rounded-[8px] hover:bg-white hover:text-[#4c8af5]">Tambah Murid</button>
                </form>
            </div>
        </div>

@endsection