@extends('layout')

@section('title','datakelas')

@section('content')
    <div class="contentWrapper ml-12 w-[900px] h-screen ">
        <h1 class="underline font-bold text-[25px] pt-[10PX] mb-10">DATA KELAS</h1>

        <table >
            <tr>
                <th class="w-10 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">No</th>
            
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Nama Kelas</th>
        
                <th class="w-20 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Wali Kelas</th>

                <th class="w-50 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Action</th>
                <th class="w-20 rounded-[8px]  bg-[#577590] hover:bg-[#38a2ff] ">
                    <a href="/tambahkelas" class="text-white text-3xl font-bold  ">
                        <div>
                            <button >
                                +
                            </button>
                        </div>
                    </a>
                </th>
                <th class="border-[1px] border-[#E7EBF0] flex"> 
                    <form action="/datakelas" method="get">
                        <input type="text" name="pencariankelas" class="w-30 h-10" placeholder="Cari Kelas" id="searchbar">
                        <button type="submit" class="w-10 h-full rounded-full bg-[#4c8af5]"><i class="fa-solid fa-search text-white"></i></button>     
                    </form>                  
                </th>
            </tr>

            <?php
            $i = 1
            ?>

            @foreach ($tampilKelas as $Kelas)
                <tr>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$i ++}}</td>
                    <td class="w-20 border-[1px] text-center border-[#E7EBF0]">{{$Kelas->nama_kelas}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$Kelas->wali_kelas}}</td>
                    <td class="w-50 border-[1px] flex justify-around border-[#E7EBF0]">
                        <a href="/editkelas/{{$Kelas->id}}/{{$Kelas->nama_kelas}}/{{$Kelas->wali_kelas}}">
                            <button class="bg-[#90BE6D] p-1 rounded-[8px] w-[50px] m-2 font-bold text-white">Edit</button>
                        </a>
                        
                        <form action="/datakelas/{{$Kelas->id}}" method="post">
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
