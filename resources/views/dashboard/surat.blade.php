@section('title','Daftar Surat')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ auth()->user()->is_admin == 1 ? 'Management Surat Siswa' : 'Daftar Surat' }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                @if (session()->has('success'))
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if (auth()->user()->is_admin == 0)
                    <button class="modal-open bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Buat Surat Baru</button>
                    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                        
                        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        
                            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                                x
                            </div>
                            <div class="modal-content py-4 text-left px-6">
                                <div class="flex justify-between items-center pb-3">
                                    <p class="text-2xl font-bold">Buat Surat Izin</p>
                                    <div class="modal-close cursor-pointer z-50">
                                        x
                                    </div>
                                </div>
                                <form class="mt-6" method="POST" action="{{ route('add') }}">
                                    @csrf
                                    <input type="hidden" name="userid" value="{{ auth()->user()->id }}">
                                    <label for="name" class="block mt-2 text-xs font-semibold text-gray-600">Nama Lengkap</label>
                                    <input id="name" type="text" name="name" value="{{ auth()->user()->name }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" readonly />
                                    <label for="name" class="block mt-2 text-xs font-semibold text-gray-600">Kategori</label>
                                    <select name="kategori" id="kategori" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 focus:outline-none focus:bg-gray-200 focus:shadow-inner" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="Sakit">Sakit</option>
                                        <option value="Izin">Izin</option>
                                    </select>
                                    <label for="alasan" class="block mt-2 text-xs font-semibold text-gray-600">Alasan</label>
                                    <textarea id="alasan" name="alasan" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" required></textarea>
                                    <label for="tgl" class="block mt-2 text-xs font-semibold text-gray-600">Tanggal</label>
                                    <input id="tgl" type="date" name="tgl" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" required/>
                                    <label for="tgl" class="block mt-2 text-xs font-semibold text-gray-600">Nama Orang Tua Wali</label>
                                    <input id="nama_ortu" type="text" name="nama_ortu" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" required />
                                    <div class="flex justify-end pt-2">
                                        <button class="modal-close px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Batal</button>
                                        <button class="px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Buat Surat</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">ID</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Alasan</th>
                            <th class="px-4 py-2">Tanggal</th>
                            <th class="px-4 py-2">Status</th>
                            @if (auth()->user()->is_admin == 1)
                                <th class="px-4 py-2">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surats as $surat)
                            <tr>
                                <td class="border px-4 py-2 text-center">{{ $surat->id }}</td>
                                <td class="border px-4 py-2 text-center break-words">{{ $surat->name }}</td>
                                <td class="border px-4 py-2 text-center break-words">{{ $surat->alasan }}</td>
                                <td class="border px-4 py-2 text-center">{{ $surat->tgl }}</td>
                                <td class="border px-4 py-2 text-center"><span class="p-1 {{ $surat->status == 'Pending' ? 'bg-yellow-400' : ($surat->status == 'Disetujui' ? 'bg-green-400' : 'bg-red-400') }} text-white rounded-md">{{ $surat->status }}</span></td>
                                @if (auth()->user()->is_admin == 1)
                                    <td class="border px-4 py-2">
                                        <div class="flex flex-1 sm:flex-0">
                                            <button class="modal-open{{ $surat->id }} bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-eye"></i></button>
                                            <div class="modal{{ $surat->id }} opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                                                <div class="modal-overlay{{ $surat->id }} absolute w-full h-full bg-gray-900 opacity-50"></div>
                                                <div class="modal-container{{ $surat->id }} bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                                    <div class="modal-close{{ $surat->id }} absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                                                        x
                                                    </div>
                                                    <div class="modal-content{{ $surat->id }} py-4 text-left px-6">
                                                        <div class="flex justify-between items-center pb-3">
                                                            <p class="text-2xl font-bold">Surat Izin Milik {{ $surat->name }}</p>
                                                            <div class="modal-close{{ $surat->id }} cursor-pointer z-50">
                                                                close
                                                            </div>
                                                        </div>
                                                        <div class="mt-6">
                                                            <label for="name" class="block mt-2 text-xs font-semibold text-gray-600">Nama Lengkap</label>
                                                            <input id="name" type="text" name="name" value="{{ $surat->name }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" readonly />
                                                            <label for="name" class="block mt-2 text-xs font-semibold text-gray-600">Kategori</label>
                                                            <input type="text" value="{{ $surat->kategori }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" readonly>
                                                            <label for="alasan" class="block mt-2 text-xs font-semibold text-gray-600">Alasan</label>
                                                            <textarea id="alasan" name="alasan" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" readonly>{{ $surat->alasan }}</textarea>
                                                            <label for="tgl" class="block mt-2 text-xs font-semibold text-gray-600">Tanggal</label>
                                                            <input id="tgl" type="date" value="{{ $surat->tgl }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" readonly/>
                                                            <label for="nama_ortu" class="block mt-2 text-xs font-semibold text-gray-600">Nama Orang Tua Wali</label>
                                                            <input id="nama_ortu" type="text" name="nama_ortu" value="{{ $surat->nama_ortu }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" readonly />
                                                            @if ($surat->status == 'Disetujui' || $surat->status == 'Ditolak')
                                                                <label for="status" class="block mt-2 text-xs font-semibold text-gray-600">Status</label>
                                                                <input id="status" type="text" name="status" value="{{ $surat->status }}" class="block w-full p-3 mt-2 text-gray-700 bg-{{ $surat->status == 'Disetujui' ? 'green' : 'red' }}-100 appearance-none focus:outline-none focus:bg-{{ $surat->status == 'Disetujui' ? 'green' : 'red' }}-200 focus:shadow-inner" readonly />
                                                            @endif
                                                            <div class="flex justify-end pt-2">
                                                            @if ($surat->status == 'Pending')
                                                                <form action="{{ route('update',$surat->id) }}" method="post">
                                                                @csrf
                                                                @method('PATCH')
                                                                <input type="hidden" name="status" value="Ditolak">
                                                                <button class="px-4 bg-red-500 p-3 rounded-lg text-white hover:bg-red-400 mr-2">Tolak</button>
                                                            </form>
                                                            <form action="{{ route('update',$surat->id) }}" method="post">
                                                                @csrf
                                                                @method('PATCH')
                                                                <input type="hidden" name="status" value="Disetujui">
                                                                <button class="px-4 bg-green-500 p-3 rounded-lg text-white hover:bg-green-400">Setuju</button>
                                                            </form>
                                                            @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                var openmodal{{ $surat->id }} = document.querySelectorAll('.modal-open{{ $surat->id }}')
                                                for (var i = 0; i < openmodal{{ $surat->id }}.length; i++) {
                                                openmodal{{ $surat->id }}[i].addEventListener('click', function(event){
                                                    event.preventDefault()
                                                    toggleModal{{ $surat->id }}()
                                                })
                                                }
                                                
                                                const overlay{{ $surat->id }} = document.querySelector('.modal-overlay{{ $surat->id }}')
                                                overlay{{ $surat->id }}.addEventListener('click', toggleModal{{ $surat->id }})
                                                
                                                var closemodal = document.querySelectorAll('.modal-close{{ $surat->id }}')
                                                for (var i = 0; i < closemodal.length; i++) {
                                                closemodal[i].addEventListener('click', toggleModal{{ $surat->id }})
                                                }
                                                
                                                document.onkeydown = function(evt) {
                                                evt = evt || window.event
                                                var isEscape = false
                                                if ("key" in evt) {
                                                    isEscape = (evt.key === "Escape" || evt.key === "Esc")
                                                } else {
                                                    isEscape = (evt.keyCode === 27)
                                                }
                                                if (isEscape && document.body.classList.contains('modal-active{{ $surat->id }}')) {
                                                    toggleModal()
                                                }
                                                };
                                                
                                                
                                                function toggleModal{{ $surat->id }} () {
                                                const body = document.querySelector('body')
                                                const modal{{ $surat->id }} = document.querySelector('.modal{{ $surat->id }}')
                                                modal{{ $surat->id }}.classList.toggle('opacity-0')
                                                modal{{ $surat->id }}.classList.toggle('pointer-events-none')
                                                body.classList.toggle('modal-active{{ $surat->id }}')
                                                }
                                            </script>
                                            <form action="{{ route('delete',$surat->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                        
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if (auth()->user()->is_admin == 0)
        <script>
            var openmodal = document.querySelectorAll('.modal-open')
            for (var i = 0; i < openmodal.length; i++) {
                openmodal[i].addEventListener('click', function(event){
                    event.preventDefault()
                    toggleModal()
                })
            }
            
            const overlay = document.querySelector('.modal-overlay')
            overlay.addEventListener('click', toggleModal)
            
            var closemodal = document.querySelectorAll('.modal-close')
            for (var i = 0; i < closemodal.length; i++) {
                closemodal[i].addEventListener('click', toggleModal)
            }
            
            document.onkeydown = function(evt) {
                evt = evt || window.event
                var isEscape = false
                if ("key" in evt) {
                    isEscape = (evt.key === "Escape" || evt.key === "Esc")
                } else {
                    isEscape = (evt.keyCode === 27)
                }
                if (isEscape && document.body.classList.contains('modal-active')) {
                    toggleModal()
                }
            };
            
            function toggleModal () {
                const body = document.querySelector('body')
                const modal = document.querySelector('.modal')
                modal.classList.toggle('opacity-0')
                modal.classList.toggle('pointer-events-none')
                body.classList.toggle('modal-active')
            }
        </script>
    @endif
</x-app-layout>
