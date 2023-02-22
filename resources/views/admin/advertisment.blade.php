<x-admin-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>
  @if(Session::has('success'))
  <div class="alert alert-success">
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      <span class="font-medium">Success !</span> Advertisment added successfully
    </div>      
  </div>
  
@endif

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <x-slot name="header">
            <h1> Advertisments </h1>
          </x-slot>

          <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 ">
            <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-400 sm:rounded-lg">
                  <div class="md:flex bg-gray-100 py-8 md:justify-center ">
                  <form method="POST" action="{{ route('admin.add_advertisment') }}">
                    @csrf
                    <div class="form-group mb-6">
                      <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Add advertisment URL</label>
                      <input type="url" name="add_url" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"   id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="URL">

                      @error('add_url')
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
                                     ease-in-out">Add</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>