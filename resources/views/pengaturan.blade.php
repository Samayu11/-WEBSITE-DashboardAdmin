@extends('layout')

@section('title', 'pengaturan')

@section('content')
    <div class="contentWrapper ml-12 w-full h-screen ">
        <h1 class="underline font-bold text-[25px] pt-[10PX] mb-10">PENGATURAN</h1>

        <div class="profileSection">
            <div class="profile w-[900px] h-[200px] rounded-2xl bg-[#4c8bf5] p-2 flex items-center ">
                <form action="/pengaturan/upload" method="post" enctype="multipart/form-data" class="profileIm w-[150px] h-[150px]  flex items-end relative">
                    @csrf
                    @method('PUT')
                    <img src="{{ asset('assets/' . auth()->user()->foto) }}" alt="logo" class="w-[150px] h-[150px]">
                    <input type="file" name="foto" id="foto" class="text-[12px] absolute bg-amber-300 w-[140px]">
                    <button type="submit" class="absolute z-10 bg-green-500 w-[80px] right-0 text-[12px]">Upload</button>
                </form>

            <div class="">
                <h2 class="text-white text-[25px] font-bold capitalize ml-2">{{auth()->user()->username}}</h2>
                <div class="ml-2 flex text-white w-[400px] justify-between">
                    <p>email : {{auth()->user()->email}}</p>
                    <p>contact : {{auth()->user()->no_telp}}</p>
                </div>
            </div>
            </div>
        </div>

        
    </div>

    
@endsection