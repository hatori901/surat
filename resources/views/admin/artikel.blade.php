@section('title','Artikel')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Management Users' }}
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
                <button class="modal-open bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Buat Artikel Baru</button>
                    <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
                        
                        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        
                            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                                x
                            </div>
                            <div class="modal-content py-4 text-left px-6">
                                <div class="flex justify-between items-center pb-3">
                                    <p class="text-2xl font-bold">Buat Artikel Baru</p>
                                    <div class="modal-close cursor-pointer z-50">
                                        x
                                    </div>
                                </div>
                                <form class="mt-6" method="POST" action="{{ route('new') }}">
                                    @csrf
                                    <label for="name" class="block mt-2 text-xs font-semibold text-gray-600">Judul</label>
                                    <input id="name" type="text" name="title" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" required />
                                    <label for="content" class="block mt-2 text-xs font-semibold text-gray-600">Content</label>
                                    <textarea id="content" name="content" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" rows="10" cols="10"  required></textarea>
                                    <div class="flex justify-end pt-2">
                                        <button class="modal-close px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Batal</button>
                                        <button class="px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Buat Artikel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">No.</th>
                            <th class="px-4 py-2">Judul</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikels as $post)
                            <tr>
                                <td class="border px-4 py-2 text-center">{{ $post->id }}</td>
                                <td class="border px-4 py-2 text-center">{{ $post->title }}</td>
                                <td class="border px-4 py-2">
                                        <div class="flex flex-1">
                                            <button class="modal-open{{ $post->id }} bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Lihat</button>
                                            <div class="modal{{ $post->id }} opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                                                <div class="modal-overlay{{ $post->id }} absolute w-full h-full bg-gray-900 opacity-50"></div>
                                                <div class="modal-container{{ $post->id }} bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                                    <div class="modal-close{{ $post->id }} absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                                                        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="modal-content{{ $post->id }} py-4 text-left px-6">
                                                        <div class="flex justify-between items-center pb-3">
                                                            <p class="text-2xl font-bold">Artikel {{ $post->title }}</p>
                                                            <div class="modal-close{{ $post->id }} cursor-pointer z-50">
                                                                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <form class="mt-6" action="{{ route('upd',$post->id) }}" method="post">
                                                            @csrf
                                                            @method('PATCH')
                                                            <label for="title" class="block mt-2 text-xs font-semibold text-gray-600">Judul</label>
                                                            <input id="title" type="text" name="title" value="{{ $post->title }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" />
                                                            <label for="alasan" class="block mt-2 text-xs font-semibold text-gray-600">Alasan</label>
                                                            <textarea id="content" name="content" class="block w-full p-3 mt-2 text-gray-700 bg-gray-100 appearance-none focus:outline-none focus:bg-gray-200 focus:shadow-inner" rows="10">{{ $post->content }}</textarea>
                                                            <div class="flex justify-end pt-2">
                                                                <div class="modal-close{{ $post->id }} px-4 cursor-pointer text-indigo-500 p-3 rounded-lg text-white hover:text-indigo-400">Close</div>
                                                                <button type="submit" class="px-4 bg-blue-500 p-3 rounded-lg text-white hover:bg-blue-400">Perbarui</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                var openmodal{{ $post->id }} = document.querySelectorAll('.modal-open{{ $post->id }}')
                                                for (var i = 0; i < openmodal{{ $post->id }}.length; i++) {
                                                openmodal{{ $post->id }}[i].addEventListener('click', function(event){
                                                    event.preventDefault()
                                                    toggleModal{{ $post->id }}()
                                                })
                                                }
                                                
                                                const overlay{{ $post->id }} = document.querySelector('.modal-overlay{{ $post->id }}')
                                                overlay{{ $post->id }}.addEventListener('click', toggleModal{{ $post->id }})
                                                
                                                var closemodal = document.querySelectorAll('.modal-close{{ $post->id }}')
                                                for (var i = 0; i < closemodal.length; i++) {
                                                closemodal[i].addEventListener('click', toggleModal{{ $post->id }})
                                                }
                                                
                                                document.onkeydown = function(evt) {
                                                evt = evt || window.event
                                                var isEscape = false
                                                if ("key" in evt) {
                                                    isEscape = (evt.key === "Escape" || evt.key === "Esc")
                                                } else {
                                                    isEscape = (evt.keyCode === 27)
                                                }
                                                if (isEscape && document.body.classList.contains('modal-active{{ $post->id }}')) {
                                                    toggleModal()
                                                }
                                                };
                                                
                                                
                                                function toggleModal{{ $post->id }} () {
                                                const body = document.querySelector('body')
                                                const modal{{ $post->id }} = document.querySelector('.modal{{ $post->id }}')
                                                modal{{ $post->id }}.classList.toggle('opacity-0')
                                                modal{{ $post->id }}.classList.toggle('pointer-events-none')
                                                body.classList.toggle('modal-active{{ $post->id }}')
                                                }
                                            </script>
                                            <form action="{{ route('del',$post->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                            </form>
                                        </div>
                                        
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
</x-app-layout>
