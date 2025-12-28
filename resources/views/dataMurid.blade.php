@extends('layout')

@section('title','data-murid')

@section('content')
    <div class="contentWrapper ml-12 w-[900px] h-screen ">
        <h1 class="underline font-bold text-[25px] pt-[10PX] mb-10">DATA MURID</h1>

        <table >
            <tr>
                <th class="w-10 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">No</th>
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">NIS</th>
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Nama Lengkap</th>
                <th class="w-40  p-2 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Orang Tua</th>
                <th class="w-20 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Status</th>
                <th class="w-50 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Action</th>
                <th class="w-20 rounded-[8px]  bg-[#577590] hover:bg-[#38a2ff] ">
                    <a href="/tambahMurid" class="text-white text-3xl font-bold  ">
                        <div>
                            <button >
                                +
                            </button>
                        </div>
                    </a>
                </th>
                <th class="border-[1px] border-[#E7EBF0] flex"> 
                    <input type="text" class="w-30 h-10" placeholder="Cari Murid" id="searchbar">
                    <button class="w-10 rounded-full bg-[#4c8af5]"><i class="fa-solid fa-search text-white"></i></button>
                </th>
            </tr>

            <?php
            $i = 1
            ?>

            @foreach ($tampilMurid as $Murid)
                <tr>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$i ++}}</td>
                    <td class="w-20 border-[1px] text-center border-[#E7EBF0]">{{$Murid->nis}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$Murid->nama_lengkap}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$Murid->nama_orangtua}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$Murid->status}}</td>
                    <td class="w-10 border-[1px] flex text-center border-[#E7EBF0]">
                        <a href="/editmurid/{{$Murid->nis}}/{{$Murid->nama_lengkap}}/{{$Murid->jenis_kelamin}}/{{$Murid->tanggal_lahir}}/{{$Murid->alamat}}/{{$Murid->nama_orangtua}}/{{$Murid->kontak_orangtua}}/{{$Murid->tahun_masuk}}/{{$Murid->kelas_id}}/{{$Murid->status}}">
                            <button class="bg-[#90BE6D] p-1 rounded-[8px] w-[50px] m-2 font-bold text-white">Edit</button>
                        </a>
                        <form action="/datamurid/{{$Murid->nis}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 p-1 rounded-[8px] w-[60px] m-2 font-bold text-white">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    

@endsection
