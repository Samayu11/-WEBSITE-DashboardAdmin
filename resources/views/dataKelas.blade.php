@extends('layout')

@section('title','datakelas')

@section('content')
    <div class="contentWrapper ml-12 w-[900px] h-screen ">
        <h1 class="font-bold text-[25px] pt-[10PX] mb-10">DATA KELAS</h1>

        <div class="w-full h-fit flex justify-between items-center mb-[50px]">
            <a href="/tambahkelas" class="text-[#342d2d] font-bold p-1 w-[150px] text-center bg-[#bfefdd] rounded-full shadow">
                Tambah Kelas <i class="fa-solid fa-plus font-bold" ></i>
            </a>

            <form action="/datakelas" method="get">
                <div class="border border-[#757573] bg-[#f7f8f3] rounded-full w-[150px] h-[30px] flex justify-between items-center pl-1 shadow">
                    <input type="text" name="pencariankelas" class="w-30 h-10 text-[#d6d4c3]" placeholder="Cari Kelas" id="searchbar">
                    <button type="submit" class="w-10 h-full rounded-full"><i class="fa-solid fa-search text-[#d6d4c3]"></i></button>     
                </div>    
            </form>
        </div>

        <table class="border-4 border-[#d8d8d8] bg-[#f7f8f3] shadow">
            <tr>
                <th class="w-14 border-[1px] border-[#757573] bg-[#47578b] text-white">No</th>
            
                <th class="w-80 border-[1px] border-[#757573] bg-[#47578b] text-white">Nama Kelas</th>
        
                <th class="w-80 border-[1px] border-[#757573] bg-[#47578b] text-white">Wali Kelas</th>

                <th class="w-50 border-[1px] border-[#757573] bg-[#47578b] text-white">Action</th>
            </tr>

            <?php
            $i = 1
            ?>

            @foreach ($tampilKelas as $Kelas)
                <tr>
                    <td class=" border-[1px] text-center border-[#757573]">{{$i ++}}</td>
                    <td class="border-[1px] text-center border-[#757573]">{{$Kelas->nama_kelas}}</td>
                    <td class=" border-[1px] text-center border-[#757573]">{{$Kelas->wali_kelas}}</td>
                    <td class=" flex justify-around ">
                        <a href="/editkelas/{{$Kelas->id}}/{{$Kelas->nama_kelas}}/{{$Kelas->wali_kelas}}">
                            <button class="bg-[#fbefca] p-1 rounded-[8px] w-[50px] m-2 font-bold ">Edit</button>
                        </a>
                        
                        <form action="/datakelas/{{$Kelas->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-[#ffd3d3] p-1 rounded-[8px] w-[60px] m-2 font-bold ">Hapus</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    

@endsection
