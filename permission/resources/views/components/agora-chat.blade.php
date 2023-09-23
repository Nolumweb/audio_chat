




    
{{-- @extends('layouts.app')

@section('content')
    <agora-chat :allusers="{{ $users }}" authuserid="{{ auth()->id() }}" authuser="{{ auth()->user()->name }}"
        agora_id="{{ env('AGORA_APP_ID') }}" />
@endsection --}}



<x-app-layout>
   
    
    @section('scripts')
        <meta name="description" content="Build A Scalable Video Chat Application With Agora" />
        <meta name="keywords" content="Video Call, Agora, Laravel, Real Time Engagement" />
        <meta name="author" content="Kofi Obrasi Ocran" />
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <script src="https://cdn.agora.io/sdk/release/AgoraRTCSDK-3.3.1.js"></script>
    
        <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    
    
    
    @endsection
    
    
    <x-slot name="header">
    <agora-chat :allusers="{{ $users }}" authuserid="{{ auth()->id() }}" authuser="{{ auth()->user()->name }}"
        agora_id="{{ env('AGORA_APP_ID') }}" />
    </x-slot>
    
    
    
    
    
    </x-app-layout>
    
    