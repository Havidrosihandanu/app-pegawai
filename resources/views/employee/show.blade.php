@extends('layouts.main')

@section('content')
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">Detail Karyawan</h1>
            <a href="{{ route('employees.index') }}"
               class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md shadow hover:bg-gray-300">
                ← Kembali
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Nama Lengkap -->
            <div>
                <p class="text-sm font-medium text-gray-500">Nama Lengkap</p>
                <p class="mt-1 text-lg font-semibold text-gray-800">{{ $employee->nama_lengkap }}</p>
            </div>

            <!-- Email -->
            <div>
                <p class="text-sm font-medium text-gray-500">Email</p>
                <p class="mt-1 text-gray-800">{{ $employee->email }}</p>
            </div>

            <!-- Nomor Telepon -->
            <div>
                <p class="text-sm font-medium text-gray-500">Nomor Telepon</p>
                <p class="mt-1 text-gray-800">{{ $employee->nomor_telepon }}</p>
            </div>

            <!-- Tanggal Lahir -->
            <div>
                <p class="text-sm font-medium text-gray-500">Tanggal Lahir</p>
                <p class="mt-1 text-gray-800">{{ $employee->tanggal_lahir }}</p>
            </div>

            <!-- Alamat -->
            <div class="md:col-span-2">
                <p class="text-sm font-medium text-gray-500">Alamat</p>
                <p class="mt-1 text-gray-800">{{ $employee->alamat }}</p>
            </div>

            <!-- Tanggal Masuk -->
            <div>
                <p class="text-sm font-medium text-gray-500">Tanggal Masuk</p>
                <p class="mt-1 text-gray-800">{{ $employee->tanggal_masuk }}</p>
            </div>

            <!-- Status -->
            <div>
                <p class="text-sm font-medium text-gray-500">Status</p>
                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                    @if($employee->status == 'active')
                        bg-green-100 text-green-800
                    @else
                        bg-red-100 text-red-800
                    @endif">
                    {{ ucfirst($employee->status) }}
                </span>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="mt-8 flex gap-3">
            <a href="{{ route('employees.edit', $employee->id) }}"
               class="px-4 py-2 bg-indigo-600 text-white rounded-md shadow hover:bg-indigo-700">
                ✏️ Edit
            </a>

            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="px-4 py-2 bg-red-600 text-white rounded-md shadow hover:bg-red-700">
                    🗑 Hapus
                </button>
            </form>
        </div>
    </div>
@endsection
