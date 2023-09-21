@extends('layouts.user_layout')

@section('content')
<section class="pt-4">
    ini loading
    {{ $hasil }}
    @foreach ($gejala as $gejala)
        {{ $gejala }}
    @endforeach
</section>
@endsection
