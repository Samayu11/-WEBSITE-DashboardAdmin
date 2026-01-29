@extends('layout')

@section('title', 'pembayaran')

@section('content')
    <div class="contentWrapper ml-12 w-full h-screen ">
        <h1 class="underline font-bold text-[25px] pt-[10PX] mb-10">PEMBAYARAN</h1>

        <table >
            <tr>
                <th class="w-10 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">No</th>
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Nama Lengkap</th>
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Tagihan</th>
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Pembayaran</th>
                <th class="w-40 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Sisa Pembayaran</th>
                <th class="w-40  p-2 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Tanggal Bayar</th>
                <th class="w-20 border-[1px] border-[#E7EBF0] bg-[#4c8af5] text-white">Metode Pembayaran</th>
                <th class="border-[1px] border-[#E7EBF0] flex"> 
                    <form action="/pembayaran" method="get" class="flex">
                        <input type="text" name="pencarianMurid" class="w-30 h-10" placeholder="Cari Murid" id="searchbar">
                        <button type="submit" class="w-10 rounded-full bg-[#4c8af5]"><i class="fa-solid fa-search text-white"></i></button>
                    </form>
                </th>
            </tr>

            <?php
            $i = 1
            ?>

            @foreach ($pembayarans as $pembayaran)
                <tr>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$i ++}}</td>
                    <td class="w-20 border-[1px] text-center border-[#E7EBF0]">{{$pembayaran->student}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$pembayaran->total_tagihan}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$pembayaran->jumlah_bayar}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$pembayaran->total}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$pembayaran->tanggal_bayar}}</td>
                    <td class="w-10 border-[1px] text-center border-[#E7EBF0]">{{$pembayaran->metode}}</td>
                </tr>
            @endforeach
        </table>
    </div> 
@endsection