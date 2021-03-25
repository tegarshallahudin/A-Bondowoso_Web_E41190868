@extends('layouts.app')

@section('content')
        <div class="jumbroton jumbroton-fluide">
            <div class="container">
                <h1 class="display-4">Home Page</h1>
                <p class="lead"> This Is the Home Page</p>
            </div>
            <p>Nama : {{ $nama }}</p>
            <p>Mata Pelajaran</p>
            <ul>
                @forelse ($pelajaran as $item)
                    <li> {{ $item }} </li>
                @empty
                    <li>tidak ada data</li>
                @endforelse
            </ul>
        </div>    
@endsection