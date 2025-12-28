@extends('layout')

@section('title','edit-murid')

@section('content')
        <div class="editMurid w-[900px] h-screen  flex justify-center items-center">
            <div class="formWrappper">
                <form action="/datamurid/{{$nis}}/{{$nama_lengkap}}/{{$jenis_kelamin}}/{{$tanggal_lahir}}/{{$alamat}}/{{$nama_orangtua}}/{{$kontak_orangtua}}/{{$tahun_masuk}}/{{$kelas_id}}/{{$status}}" method="POST" class="flex flex-col w-full h-full justify-center  gap-4 bg-[#4c8af5] p-3 rounded-[10px] text-white"> 
                    @csrf       
                    @method('PUT')
                    <input type="number" name="nis" id="nis" placeholder="NIS" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]"value="{{$nis}}" readonly>
                    <input type="text" name="nama_murid" id="nama_murid" placeholder="Nama Murid" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]" value="{{$nama_lengkap}}">
                        <div class="jenis_kelamin flex w-[300px] justify-between">
                            <label>
                                <input type="radio" name="jenis_kelamin" value="L" {{$jenis_kelamin == 'L' ? 'checked' : ''}}> Laki-laki
                            </label>
                            <label>
                                <input type="radio" name="jenis_kelamin" value="P" {{$jenis_kelamin == 'P' ? 'checked' : ''}}> Perempuan
                            </label>
                        </div>
                    <label>
                        Tanggal Lahir <input type="date" name="tanggal_lahir" class="border-[1px] rounded-[8px] p-1" id="date" value="{{$tanggal_lahir}}">
                    </label>
                    <input type="text" name="alamat" placeholder="Alamat" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]" id="address" value="{{$alamat}}">
                    <input type="text" name="nama_orangtua" placeholder="Orangtua/Wali" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]" id="parents" value="{{$nama_orangtua}}">
                    <input type="text" name="kontak_orangtua" placeholder="Kontak Orangtua/Wali" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]" id="contact" value="{{$kontak_orangtua}}">
                    <input type="text" name="tahun_masuk" placeholder="Tahun Masuk" class="border-[1px] border-white rounded-[8px] p-1 w-[400px]" id="tahunMasuk" value="{{$tahun_masuk}}">
                    <input type="text" name="kelas" placeholder="Kelas" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]" id="class" value="{{$kelas_id}}">
                    <div class="status w-[300px] flex justify-between">
                        <label>
                            <input type="radio" name="status" value="aktif" {{$status == 'aktif' ? 'checked' : ''}}>Aktif
                        </label>
                        <label>
                            <input type="radio" name="status" value="lulus" {{$status == 'lulus' ? 'checked' : ''}}>Lulus
                        </label>
                        <label>
                            <input type="radio" name="status" value="keluar" {{$status == 'keluar' ? 'checked' : ''}}>keluar
                    </label>
                </div>

                <button type="submit" class="border-[1px] border-white p-1 rounded-[8px] hover:bg-white hover:text-[#4c8af5]">Edit Murid</button>
                </form>
            </div>
        </div>

@endsection