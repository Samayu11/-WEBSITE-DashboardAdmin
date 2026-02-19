@extends('layout')

@section('title', 'pembayaran')

@section('content')
    <div class="contentWrapper ml-12 w-full h-screen ">
        <h1 class=" font-bold text-[25px] pt-[10PX] mb-10">PEMBAYARAN</h1>

        <div class="w-full h-fit flex justify-between items-center mb-[50px]">
            <a href="/tambahPembayaran" class="text-[#342d2d] font-bold p-1 w-[200px] text-center bg-[#bfefdd] rounded-full shadow">
                Tambah Pembayaran <i class="fa-solid fa-plus font-bold" ></i>
            </a>

            <form action="/pembayaran" method="get">
                <div class="border border-[#757573] bg-[#f7f8f3] rounded-full w-[200px] h-[30px] flex justify-between items-center pl-1 shadow">
                    <input type="text" name="pencariankMurid" class="w-30 h-10 text-[#d6d4c3]" placeholder="Cari Murid" id="searchbar">
                    <button type="submit" class="w-10 h-full rounded-full"><i class="fa-solid fa-search text-[#d6d4c3]"></i></button>     
                </div>    
            </form>
        </div>

        <table class="border-4 border-[#d8d8d8] bg-[#f7f8f3] shadow">
            <tr>
                <th class="w-14 border-[1px] border-[#757573] bg-[#47578b] text-white">No</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Nama Lengkap</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Tagihan</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Pembayaran</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Sisa Pembayaran</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Tanggal Bayar</th>
                <th class="w-28 border-[1px] border-[#757573] bg-[#47578b] text-white">Metode Pembayaran</th>
            </tr>

            <?php
            $i = 1
            ?>

            @foreach ($pembayarans as $pembayaran)
                <tr>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$i ++}}</td>
                    <td class="w-20 border-[1px] text-center border-[#757573]">{{$pembayaran->student}}</td>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$pembayaran->total_tagihan}}</td>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$pembayaran->jumlah_bayar}}</td>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$pembayaran->total}}</td>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$pembayaran->tanggal_bayar}}</td>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$pembayaran->metode}}</td>
                </tr>
            @endforeach
        </table>
    </div> 
@endsection