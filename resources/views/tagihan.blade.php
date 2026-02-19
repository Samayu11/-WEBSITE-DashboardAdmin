@extends('layout')

@section('title', 'tagihan')

@section('content')
    <div class="contentWrapper ml-12 w-full h-screen ">
        <h1 class=" font-bold text-[25px] pt-[10px] mb-10">TAGIHAN</h1>

        <div class="w-full h-fit flex justify-between items-center mb-[50px]">
            <a href="/tambahTagihan" class="text-[#342d2d] font-bold p-1 w-[150px] text-center bg-[#bfefdd] rounded-full shadow">
                Tambah Tagihan <i class="fa-solid fa-plus font-bold" ></i>
            </a>

            <form action="/tagihan" method="get">
                <div class="border border-[#757573] bg-[#f7f8f3] rounded-full w-[150px] h-[30px] flex justify-between items-center pl-1 shadow">
                    <input type="text" name="pencariankMurid" class="w-30 h-10 text-[#d6d4c3]" placeholder="Cari Murid" id="searchbar">
                    <button type="submit" class="w-10 h-full rounded-full"><i class="fa-solid fa-search text-[#d6d4c3]"></i></button>     
                </div>    
            </form>
        </div>

        <table class="border-4 border-[#d8d8d8] bg-[#f7f8f3] shadow">
            <tr>
                <th class="w-10 border-[1px] border-[#757573] bg-[#47578b] text-white">No</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Nama Lengkap</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Bulan</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Tagihan</th>
                <th class="w-40 border-[1px] border-[#757573] bg-[#47578b] text-white">Tanggal Bayar</th>
                <th class="w-40  p-2 border-[1px] border-[#757573] bg-[#47578b] text-white">Jatuh Tempo</th>
                <th class="w-20 border-[1px] border-[#757573] bg-[#47578b] text-white">Status</th>
                <th class="w-50 border-[1px] border-[#757573] bg-[#47578b] text-white">Lunasi Pembayaran</th>
            </tr>

            <?php
            $i = 1
            ?>

            @foreach ($tagihans as $tagihan)
                <tr>
                    <td class="w-14 border-[1px] text-center border-[#757573]">{{$i ++}}</td>
                    <td class="w-20 border-[1px] text-center border-[#757573]">{{$tagihan->students}}</td>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$tagihan->bulan}}</td>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$tagihan->Total}}</td>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$tagihan->tanggal_bayar}}</td>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$tagihan->tanggal_jatuh_tempo}}</td>
                    <td class="w-10 border-[1px] text-center border-[#757573]">{{$tagihan->status}}</td>
                    <td class="w-50 border-[1px]  border-[#757573]">
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