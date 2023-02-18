<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('URl Shortner') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 bg-neutral-200 text-gray-900 dark:text-gray-100">
                    <div class="shadow overflow-hidden border-b border-gray-400 sm:rounded-md mx-7">
                        <div class="md:flex bg-gray-100 py-8 md:justify-center ">
                            <form method="POST" action="{{ route('short') }}">
                                @csrf
                                <div class="form-group mb-6">
                                    <label for="exampleInputEmail1"
                                        class="form-label inline-block mb-2 text-gray-700">Make URL short</label>
                                    <input type="url" class="form-control
                                    block
                                    w-full
                                    px-3
                                  py-1.5
                                  text-base
                                  font-normal
                                  text-gray-700
                                  bg-white bg-clip-padding
                                  border border-solid border-gray-300
                                  rounded
                                  transition
                                  ease-in-out
                                  m-0
                                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleInputEmail1" name="original_url" aria-describedby="emailHelp"
                                        placeholder="http://">

                                    @error('original_url')
                                    <span class="text-red-400 mx-3 p-2"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="form-label inline-block mb-2 text-gray-700">

                                    @if(session('success_message'))
                                    {!! session('success_message') !!}
                                    @endif
                                </div>

                                <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                                 focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 
                                 ease-in-out">Short</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>