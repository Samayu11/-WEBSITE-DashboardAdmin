@extends('layout')

@section('title','edit-kelas')

@section('content')
        <div class="editKelas w-[900px] h-screen  flex flex-col justify-center items-center">
            <div class="formWrappper">
                <form action="/datakelas/{{$id}}/{{$nama_kelas}}/{{$wali_kelas}}" method="POST" class="flex flex-col w-full h-full justify-center  gap-4 bg-[#4c8af5] p-3 rounded-[10px] text-white"> 
                    @csrf       
                    @method('PUT')
                    <input type="text" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]"value="{{$nama_kelas}}">
                    <input type="text" name="wali_kelas" id="wali_kelas" placeholder="Wali" class="border-[1px] border-white p-1 rounded-[8px] w-[400px]" value="{{$wali_kelas}}">
            

                    <button type="submit" class="border-[1px] border-white p-1 rounded-[8px] hover:bg-white hover:text-[#4c8af5]">Edit Kelas</button>
                </form>
            </div>
        </div>

@endsection