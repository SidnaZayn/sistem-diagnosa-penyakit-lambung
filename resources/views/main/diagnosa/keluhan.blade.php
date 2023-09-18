@extends('layouts.user_layout')

@section('content')
    <section class="py-4 pe-4" style="height: 100vh">
        {{-- {{ $req }} --}}

        <div class="card w-100 h-100  shadow">
            <div class="card-body d-flex flex-column justify-content-end">
                <div id="chat-start" class="p-3" style="max-height: 70vh; overflow-y: auto;">
                </div>
                <div id="fast-res" class="d-flex p-3">
                </div>
                <div class="d-flex align-items-end">
                </div>
                <p id="username" hidden>{{ $req->nama }}</p>
                <p id="id" hidden>{{ $req->id }}</p>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('user/js/chatbot.js') }}"></script>
@endsection
