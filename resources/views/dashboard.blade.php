@extends('layout')

@section('title','dashboard')

@section('content')

<div class="contentWrapper ml-12 w-[900px] h-screen ">
    <h1 class="font-bold text-[25px] pt-[10PX] mb-10">DASHBOARD</h1>

    <div class="wrapper flex flex-col justify-center items-center p-4 pt-[80px] w-[100%] h-screen ">
        <div class="dashboardSection flex gap-4 pl-12">
            <div class="Murid w-[250px] h-[200px] bg-[#cff5f8] rounded-[20px] flex flex-col justify-around items-center text-black font-bold  shadow-2xl">
                <h1>Total Murid</h1>
                <h1 class="text-[5rem]" id="cMurid">{{$totalMurid}}</h1>
            </div>
            <div class="Tagihan w-[250px] h-[200px] bg-[#bfefdd] rounded-[20px] flex flex-col justify-around items-center text-black font-bold shadow-2xl">
                <h1>Total Kelas</h1>
                <h1 class="text-[5rem]" id="cKelas">{{$totalGuru}}</h1>
            </div>

            <div class="Pemasukan w-[250px] h-[200px] bg-[#fbefca] rounded-[20px] flex flex-col justify-around items-center text-black font-bold shadow-2xl">
                <h1>Total Guru</h1>
                <h1 class="text-[5rem]" id="cGuru">{{$totalGuru}}</h1>
            </div>
            
        </div>
        <div class="chartSection  ml-4 w-[800px] mt-9">
                <canvas id="myChart"></canvas>
            </div>
        
    </div>
</div>

@endsection