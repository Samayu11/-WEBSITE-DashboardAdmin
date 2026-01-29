@extends('layout')

@section('title', 'tagihan')

@section('content')
    <div class="contentWrapper ml-12 w-full h-screen ">
        <h1 class="underline font-bold text-[25px] pt-[10PX] mb-10">TAGIHAN</h1>

        <table >
            <tr>
                <th class="w-10 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">No</th>
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Nama Lengkap</th>
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Bulan</th>
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Tagihan</th>
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Tanggal Bayar</th>
                <th class="w-40  p-2 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Jatuh Tempo</th>
                <th class="w-20 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Status</th>
                <th class="w-50 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Lunasi Pembayaran</th>
                <th class="border-[1px] border-[#E7EBF0] flex"> 
                    <form action="/tagihan" method="get" class="flex">
                        <input type="text" name="pencarianMurid" class="w-30 h-10" placeholder="Cari Murid" id="searchbar">
                        <button type="submit" class="w-10 rounded-full bg-[#4c8af5]"><i class="fa-solid fa-search text-white"></i></button>
                    </form>
                </th>
            </tr>

            <?php
            $i = 1
            ?>

            @foreach ($tagihans as $tagihan)
                <tr>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$i ++}}</td>
                    <td class="w-20 border-[1px] text-center border-[#E7EBF0]">{{$tagihan->students}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$tagihan->bulan}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$tagihan->Total}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$tagihan->tanggal_bayar}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$tagihan->tanggal_jatuh_tempo}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$tagihan->status}}</td>
                    <td class="w-50 border-[1px]  border-[#E7EBF0]">
                        <form action="/tagihan/{{$tagihan->id}}" method="POST" class="flex justify-around items-center">
                            @csrf
                            @method('PUT')
                            <button type="submit" name="status" value="Lunas" class="w-fit h-fit p-2 bg-green-600 text-white rounded-[8px]">
                                ✔
                            </button>
                            <button type="submit" name="status" value="Belum bayar" class="w-fit h-fit p-2 bg-red-600 text-white rounded-[8px]">
                                ❌
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection