<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <section id="header">
        @include('partials.headeradmin')
    </section>

    <section id="home">
        <div class="container border-b-2 border-black mx-auto my-8">
            <h2 class="text-center uppercase font-serif text-4xl font-bold text-purple-700">Data Mahasiswa</h2>
        </div>
    </section>

    <div class="container flex mx-auto my-4 w-full">
        <a href="" class="border rounded-3xl py-1 px-4 bg-purple-300 hover:bg-purple-400 hover:text-white text-gray-600 font-serif">
            + Tambah Data
        </a>
    </div>

    <section id="table">
        <div class="container flex mx-auto mt-5 w-full">
            <div class="w-full rounded-3xl overflow-hidden shadow-lg">
                <div class="bg-purple-600 text-white">
                    <h1 class=" py-2 px-4">Data mahasiswa</h1>
                </div>
                <div class="w-full">
                    <div class="mx-6 py-2">
                        <table class="divide-y divide-gray-300 w-full" id="dataTable">
                            <thead class="bg-purple-600">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Name
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Nim
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Kelas
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Prodi
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Jurusan
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($data as $i => $dt)
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ ++$i }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                {{ $dt->name }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->nim }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            kelas
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            {{ $dt->prodi }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500">
                                                jurusan
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('data', $dt->id) }}"
                                                class="inline-block text-white py-1 px-2 rounded-lg text-center border bg-purple-400">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>