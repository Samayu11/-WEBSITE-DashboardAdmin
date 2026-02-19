@extends('layout')

@section('title', 'pengaturan')

@section('content')
    <div class="contentWrapper ml-12 w-full h-screen ">
        <h1 class=" font-bold text-[25px] pt-[10PX] mb-10">PENGATURAN</h1>

        <div class="profileSection">
            <div class="profile w-[900px] h-[300px] rounded-2xl bg-[#f4f4f3] p-4  flex items-start border border-[#342d2d] shadow-2xl">
                <div>
                    <img src="{{ asset('assets/' . auth()->user()->foto) }}" alt="logo" class="w-[250px] h-[250px] rounded-[20px]">
                </div>
                

                <div class=" w-[500px] h-[200px] flex flex-col justify-center items-center  text-[#818061]">
                    <div class="w-[320px] text-start">
                        <h2 class=" text-[25px] font-bold capitalize ">{{auth()->user()->username}}</h2>
                    </div>
                    


                    <div class=" flex flex-col gap-2">
                        <div class="w-[320px] border border-[#342d2d] rounded-full p-2"><p>email : {{auth()->user()->email}}</p></div>
                        <div class="w-[320px] border border-[#342d2d] rounded-full p-2"><p>contact : {{auth()->user()->no_telp}}</p></div>
                    </div>


                    <div class="mt-[40px]">
                        <form action="/pengaturan/upload" method="post" enctype="multipart/form-data" class="profileIm">
                            @csrf
                            @method('PUT')
                            <div class="flex gap-4">
                                <label for="foto">
                                    <p class="bg-[#47578b] w-[150px] text-white text-center  p-2 rounded-full">Choose</p>
                                </label>
                                <input type="file" name="foto" id="foto" hidden>
                                <button type="submit" class="bg-[#47578b] w-[150px] p-2 rounded-full text-white">Upload</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    
@endsection