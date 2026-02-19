@extends('layout')

@section('title','edit-kelas')

@section('content')
    <div class="contentWrapper ml-12 w-[900px] h-screen ">
        <h1 class=" font-bold text-[25px] pt-[10PX]">EDIT KELAS</h1>
        <div class="editKelas w-[900px] h-screen  flex flex-col justify-center items-center">
            <div class="formWrappper">
                <form action="/datakelas/{{$id}}/{{$nama_kelas}}/{{$wali_kelas}}" method="POST" class="flex flex-col w-full h-full justify-center  gap-4 bg-[#f4f4f3] p-3 rounded-[10px] text-[#818061] border border-[#342d2d]"> 
                    @csrf       
                    @method('PUT')
                    <input type="text" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas" class="border-[1px] border-[#342d2d] p-1 rounded-[8px] w-[400px]"value="{{$nama_kelas}}">
                    <input type="text" name="wali_kelas" id="wali_kelas" placeholder="Wali" class="border-[1px] border-[#342d2d] p-1 rounded-[8px] w-[400px]" value="{{$wali_kelas}}">
            

                    <button type="submit" class="bg-[#47578b] p-1 rounded-[8px] text-white hover:bg-white hover:text-[#342d2d]  mt-[40px]">Edit Kelas</button>
                </form>
            </div>
        </div>
    </div>
@endsection