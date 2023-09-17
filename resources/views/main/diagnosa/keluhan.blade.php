@extends('layouts.user_layout')

@section('content')
    <section class="py-4 pe-4" style="height: 100vh">
        <div class="card w-100 h-100  shadow">
            <div class="card-body d-flex flex-column justify-content-end">
                <div id="chat-start" class="p-3">
                    {{-- contoh bubble bot --}}
                    {{-- <div class="row">
                        <div class="py-2 px-3 shadow-sm chat-bubble my-2 rounded">
                            <small>Bot</small>
                            <p>contoh</p>
                        </div>
                    </div> --}}
                    {{-- contoh bubble user --}}
                    {{-- <div class="row justify-content-end">
                        <div class="py-2 px-3 shadow-sm chat-bubble my-2 rounded col-12">
                            <small>user</small>
                            <p>contoh 2</p>
                        </div>
                    </div> --}}
                    {{-- contoh bubble bot --}}
                    {{-- <div class="row">
                        <div class="py-2 px-3 shadow-sm chat-bubble my-2 rounded ">
                            <small>Bot</small>
                            <p>contoh3</p>
                        </div>
                    </div> --}}
                </div>
                <div id="fast-res" class="d-flex p-3">
                </div>
                <div class="d-flex align-items-end">
                    {{-- <button id="btn-chat" class="btn btn-primary py-2" onclick="sendChat('{{ Auth::user()->name }}')"><i
                            class="bi bi-send"></i></button> --}}
                </div>
                <p id="username" hidden>{{ Auth::user()->name }}</p>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('user/js/chatbot.js') }}"></script>
@endsection
