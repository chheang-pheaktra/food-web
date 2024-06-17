@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@section('contents')
    <div class="flex justify-between">
        <h1 class="text-2xl font-bold content-center">Category</h1>
        <div class="flex flex-1 items-center justify-center">
            <div class="w-full max-w-lg">
                <div class="w-full max-w-lg">
                    <form class="sm:flex sm:items-center" method="get" action="">
                        <label for="q"></label>
                        <input id="q" name="search" class="inline w-full rounded-md border border-gray-300 bg-white py-2 pl-3 pr-3 leading-5 placeholder-gray-500 focus:border-indigo-500 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm" placeholder="Keyword" type="search" autofocus="" value="{{ request()->input('search') }}">
                        <button type="submit" class="mt-3 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
            Add New Category
        </button>

        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow ">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                        <h3 class="text-lg font-semibold text-gray-900 ">
                            Create New Category
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" method="POST" action="{{ url('/admin/category/store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Category name" required>
                            </div>
                            <div class="col-span-2">
                                <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thumbnail</label>
                                <input type="file" name="thumbnail" id="thumbnail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full" onchange="previewImage(event)">
                                <img id="thumbnail-preview" src="#" alt="Thumbnail Preview" class="mt-2 hidden w-40 h-40 object-cover">
                            </div>

                            <script>
                                function previewImage(event) {
                                    var input = event.target;
                                    var reader = new FileReader();
                                    reader.onload = function() {
                                        var dataURL = reader.result;
                                        var output = document.getElementById('thumbnail-preview');
                                        output.src = dataURL;
                                        output.classList.remove('hidden');
                                    };
                                    reader.readAsDataURL(input.files[0]);
                                }
                            </script>

                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Add new Category
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thumbnail</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($category as $categories)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{$categories->id}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{$categories->title}}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if ($categories->thumbnail)
                            <img src="{{ asset($categories->thumbnail) }}" alt="Category Thumbnail" class="w-20 h-20 object-cover">
                        @else
                            No image
                        @endif
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">{{date('d-m-y', strtotime($categories->created_at))}}</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap flex">
                        <button data-modal-target="edit-modal{{$categories->id}}" data-modal-toggle="edit-modal{{$categories->id}}" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            Edit
                        </button>
                        <!-- Main modal -->
                        <div id="edit-modal{{$categories->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Update Categories
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-toggle="edit-modal{{$categories->id}}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-4 md:p-5" method="POST" action="/admin/category/update/{{$categories->id}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                                <input type="text" name="title" id="name" value="{{$categories->title}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900">Thumbnail</label>
                                                <input type="file"  name="thumbnail" id="thumbnail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full" onchange="previewImage(event)">
                                                @if ($categories->thumbnail)
                                                    <img id="thumbnail-preview" src="{{asset($categories->thumbnail) }}" alt="Thumbnail Preview" class="mt-2 w-40 h-40 object-cover">
                                                @else
                                                    <!-- Display a default placeholder image or message -->
                                                    <img id="thumbnail-preview" src="{{asset('asset/holder.png')}}" alt="Thumbnail Preview" class="mt-2 w-40 h-40 object-cover">
                                                @endif

                                            </div>
                                        </div>
                                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            Save
                                        </button>
                                    </form>

                                    <script>
                                        function previewImage(event) {
                                            var input = event.target;
                                            var reader = new FileReader();
                                            reader.onload = function() {
                                                var dataURL = reader.result;
                                                var output = document.getElementById('thumbnail-preview');
                                                output.src = dataURL;
                                                output.classList.remove('hidden');
                                            };
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    </script>

                                </div>
                            </div>
                        </div>
                        <a href="/admin/destroy/{{$categories->id}}">
                            <button class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
