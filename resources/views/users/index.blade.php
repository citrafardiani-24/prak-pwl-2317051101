@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-center text-pink-600 mb-8">
        📋 Daftar Pengguna
    </h1>

    <x-user-table :users="$users" />
</div>
@endsection
