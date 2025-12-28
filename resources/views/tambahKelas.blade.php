@extends('layout')

@section('title','tambah-kelas')

@section('content')
        <div class="tambahKelas w-[900px] h-screen  flex justify-center items-center">
            <div class="formWrappper">
                <form action="" method="POST" class="flex flex-col w-full h-full justify-center  gap-4 bg-[#4c8af5] p-3 rounded-[10px] text-white"> 
                    @csrf       
                    <input type="number" name="kelas_id" id="kelas_id" placeholder="Kelas Id" class="border-[1px] border-white p-1 rounded-[8px] w-[400px] ">
                    <input type="text" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas " class="border-[1px] border-white p-1 rounded-[8px] w-[400px]">
                    <input type="text" name="wali_kelas" id="wali_kelas" placeholder="Wali " class="border-[1px] border-white p-1 rounded-[8px] w-[400px]">
                </div>

                <button type="submit" class="border-[1px] border-white p-1 rounded-[8px] hover:bg-white hover:text-[#4c8af5]">Tambah Kelas</button>
                </form>
            </div>
        </div>

@endsection