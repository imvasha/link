<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div> -->

                <!-- <form method="post" action="{{ route('dashboard.store') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('post')

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="off" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'profile-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form> -->

                <div class="px-4 sm:px-6 lg:px-8">
                    <form method="post" action="{{ route('dashboard.store') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('post')
                        <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                            <!-- <x-input-label for="name" :value="__('Name')" /> -->
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="off" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <button type="submit" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add link</button>
                            </div>
                        </div>
                    </form>

                    <div class="mt-8 flow-root">
                        <div class="-mx-4 -my-2 sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle">
                            <table class="min-w-full border-separate border-spacing-0">
                            <thead>
                                <tr>
                                <!-- <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Name</th> -->
                                <!-- <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Title</th> -->
                                <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">Link</th>
                                <!-- <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Role</th> -->
                                <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-white bg-opacity-75 py-3.5 pl-3 pr-4 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                                    <span class="sr-only">Edit</span>
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach (auth()->user()->links->reverse() as $link)
                                <tr>
                                <!-- <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">Lindsay Walton</td>
                                <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">Front-end Developer</td> -->
                                <td class="whitespace-nowrap border-b border-gray-200 hidden px-3 py-4 text-sm text-gray-500 lg:table-cell"><a href="{{$link->name}}">{{$link->name}}</a></td>
                                <!-- <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">Member</td> -->
                                <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-right text-sm font-medium sm:pr-8 lg:pr-8">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Confirmed<span class="sr-only">, Lindsay Walton</span></a>
                                </td>
                                </tr>

                                <!-- More people... -->
                            @endforeach 
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
