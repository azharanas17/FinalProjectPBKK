<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Books</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Buku') }}
        </h2>
    </x-slot>    
    <div class="bg-white p-4 mx-auto">
        <a href="{{ route('book.create') }}" class="bg-gray-500 text-white text-sm py-3 px-6  rounded-md top-5 right-5 m-4">New Post</a>
    </div>

    <div class="bg-white p-4 mx-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-2xl text-center">
                        Judul Buku
                    </th>
                    <th scope="col" class="px-6 py-3 text-2xl text-center">
                        Penulis
                    </th>
                    <th scope="col" class="px-6 py-3 text-2xl text-center">
                        Tahun Terbit
                    </th>
                    <th scope="col" class="px-6 py-3 text-2xl text-center">
                        Jumlah Buku
                    </th>
                    <th scope="col" class="px-6 py-3 text-2xl text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $book->judul_buku }}
                    </th>
                    <td class="px-6 py-3 text-1xl text-center">
                        {{ $book->penulis }}
                    </td>
                    <td class="px-6 py-3 text-1xl text-center">
                        {{ $book->tahun_terbit }}
                    </td>
                    <td class="px-6 py-3 text-1xl text-center">
                        {{ $book->jumlah_buku }}
                    </td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                            action="{{ route('book.destroy', $book->id) }}" method="POST">
                            <a href="{{ route('book.edit', $book->id) }}"
                                class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    {{-- <td class="text-center text-mute" colspan="4">Buku tidak tersedia</td> --}}
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        WAIGSAKJ
                    </td>
                    <td class="px-6 py-4">
                        Author
                    </td>
                    <td class="px-6 py-4">
                        2023
                    </td>
                    <td class="px-6 py-4">
                        51 buku
                    </td>
                    <td class="px-6 py-4">
                        <form
                            x-data="{ confirmDelete: false }"
                            @submit.prevent="confirmDelete || (confirmDelete = confirm('Apakah Anda Yakin ?'))"
                            action=""
                            method="POST"
                        >
                            <a href="" class="bg-blue-500 text-white rounded-md py-1 px-2 text-sm inline-block">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white rounded-md py-1 px-2 text-sm inline-block">HAPUS</button>
                        </form>
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        WAIGSAKJ
                    </td>
                    <td class="px-6 py-4">
                        Author
                    </td>
                    <td class="px-6 py-4">
                        2023
                    </td>
                    <td class="px-6 py-4">
                        51 buku
                    </td>
                    <td class="px-6 py-4">
                        <form
                            x-data="{ confirmDelete: false }"
                            @submit.prevent="confirmDelete || (confirmDelete = confirm('Apakah Anda Yakin ?'))"
                            action=""
                            method="POST"
                        >
                            <a href="" class="bg-blue-500 text-white rounded-md py-1 px-2 text-sm inline-block">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white rounded-md py-1 px-2 text-sm inline-block">HAPUS</button>
                        </form>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</x-app-layout>
</body>
</html>