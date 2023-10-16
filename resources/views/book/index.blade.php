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
    <div class="bg-white p-4 mx-auto">
        <a href="{{ route('book.create') }}" class="bg-green-500 text-white text-sm py-3 px-6 absolute rounded-md top-5 right-5 m-4">New Post</a>
    </div>

    <div class="bg-white p-4 mx-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-2xl">
                        Judul Buku
                    </th>
                    <th scope="col" class="px-6 py-3 text-2xl">
                        Penulis
                    </th>
                    <th scope="col" class="px-6 py-3 text-2xl">
                        Tahun Terbit
                    </th>
                    <th scope="col" class="px-6 py-3 text-2xl">
                        Jumlah Buku
                    </th>
                    <th scope="col" class="px-6 py-3 text-2xl">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr> --}}
                @forelse ($books as $book)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $book->judul_buku }}
                    </th>
                    <td>
                        {{ $book->penulis }}
                    </td>
                    <td>
                        {{ $book->tahun_terbit }}
                    </td>
                    <td>
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
</body>
</html>