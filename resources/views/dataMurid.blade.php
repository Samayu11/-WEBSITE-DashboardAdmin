@extends('layout')

@section('title','data-murid')

@section('content')
    <div class="contentWrapper ml-12 w-[900px] h-screen ">
        <h1 class=" font-bold text-[25px] pt-[10PX] mb-10">DATA MURID</h1>

        <div class="w-full h-fit flex justify-between items-center mb-[50px]">
            <a href="/tambahMurid" class="text-[#342d2d] font-bold p-1 w-[150px] text-center bg-[#bfefdd] rounded-full shadow">
                Tambah Murid <i class="fa-solid fa-plus font-bold" ></i>
            </a>

            <form action="/datamurid" method="get">
                <div class="border border-[#757573] bg-[#f7f8f3] rounded-full w-[150px] h-[30px] flex justify-between items-center pl-1 shadow">
                    <input type="text" name="pencarian" class="w-30 h-10 text-[#d6d4c3]" placeholder="Cari Murid" id="searchbar">
                    <button type="submit" class="w-10 h-full rounded-full"><i class="fa-solid fa-search text-[#d6d4c3]"></i></button>     
                </div>    
            </form>
        </div>

        <table class="border-4 border-[#d8d8d8] bg-[#f7f8f3] shadow">
            <tr>
                <th class="w-14 border-[1px] border-[#757573] bg-[#47578b] text-white">No</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">NIS</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Nama Lengkap</th>
                <th class="w-40  p-2 border-[1px] border-[#757573] bg-[#47578b] text-white">Orang Tua</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Status</th>
                <th class="w-50 border-[1px] border-[#757573] bg-[#47578b] text-white">Action</th
            </tr>

            <?php
            $i = 1
            ?>

            @foreach ($tampilMurid as $Murid)
                <tr>
                    <td class="border-[1px] text-center border-[#757573]">{{$i ++}}</td>
                    <td class="border-[1px] text-center border-[#757573]">{{$Murid->nis}}</td>
                    <td class="border-[1px] text-center border-[#757573]">{{$Murid->nama_lengkap}}</td>
                    <td class="border-[1px] text-center border-[#757573]">{{$Murid->nama_orangtua}}</td>
                    <td class="border-[1px] text-center border-[#757573]">{{$Murid->status}}</td>
                    <td class="flex justify-around items-center">
                        <a href="/editmurid/{{$Murid->nis}}/{{$Murid->nama_lengkap}}/{{$Murid->jenis_kelamin}}/{{$Murid->tanggal_lahir}}/{{$Murid->alamat}}/{{$Murid->nama_orangtua}}/{{$Murid->kontak_orangtua}}/{{$Murid->tahun_masuk}}/{{$Murid->kelas_id}}/{{$Murid->status}}">
                            <button class="bg-[#fbefca] p-1 rounded-[8px] w-[50px] m-2 font-bold ">Edit</button>
                        </a>
                        <form action="/datamurid/{{$Murid->nis}}" method="post">
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
