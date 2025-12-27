@extends('layout')

@section('title','dashboard')

@section('content')

    <div class="wrapper flex flex-col justify-center items-center p-4 pt-[80px] w-[100%] h-screen ">
        <div class="dashboardSection flex gap-4 pl-12">
            <div class="Murid w-[250px] h-[200px] bg-[#ffcd56] rounded-[20px] flex flex-col justify-around items-center text-white font-bold text-shadow-xs ">
                <h1>Total Murid</h1>
                <h1 class="text-[5rem]" id="cMurid">{{$totalMurid}}</h1>
            </div>
            <div class="Tagihan w-[250px] h-[200px] bg-[#90BE6D] rounded-[20px] flex flex-col justify-around items-center text-white font-bold text-shadow-xs">
                <h1>Total Kelas</h1>
                <h1 class="text-[5rem]" id="cGuru">{{$totalGuru}}</h1>
            </div>

            <div class="Pemasukan w-[250px] h-[200px] bg-[#577590] rounded-[20px] flex flex-col justify-around items-center text-white font-bold text-shadow-xs">
                Guru
            </div>
            
        </div>
        <div class="chartSection  ml-4 w-[800px]">
                <canvas id="myChart"></canvas>
            </div>
        
    </div>
    

@endsection