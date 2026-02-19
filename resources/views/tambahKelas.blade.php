@extends('layout')

@section('title','tambah-kelas')

@section('content')
    <div class="contentWrapper ml-12 w-[900px] h-screen ">
        <h1 class=" font-bold text-[25px] pt-[10PX]">TAMBAH KELAS</h1>
        <div class="tambahKelas w-[900px] h-screen  flex justify-center items-center">
            <div class="formWrappper">
                <form action="" method="POST" class="flex flex-col w-full h-full justify-center  gap-4 bg-[#f4f4f3] p-3 rounded-[10px] text-[#818061] border border-[#342d2d]"> 
                    @csrf       
                    <input type="number" name="kelas_id" id="kelas_id" placeholder="Kelas Id" class="border-[1px] border-[#342d2d] p-1 rounded-[8px] w-[400px] " required>
                    <input type="text" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas " class="border-[1px] border-[#342d2d] p-1 rounded-[8px] w-[400px]" required>
                    <input type="text" name="wali_kelas" id="wali_kelas" placeholder="Wali " class="border-[1px] border-[#342d2d] p-1 rounded-[8px] w-[400px]" required>

                    <button type="submit" class="bg-[#47578b] p-1 rounded-[8px] text-white hover:bg-white hover:text-[#342d2d] mt-[40px]">Tambah Kelas</button>
                </form>
            </div>
                
            </div>
        </div>
    </div>
@endsection