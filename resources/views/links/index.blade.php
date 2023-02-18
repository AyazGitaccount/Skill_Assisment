<x-app-layout>
    <x-slot name="header">
     <h1> Your Links</h1>
    </x-slot>

    <div class="max-w-6xl  mx-auto mt-8 ">
        <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="l divide-y divide-gray-200 table-responsive">
                  <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Original URL</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Short URL</th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider"></th>
                      {{-- <th scope="col" class="relative px-6 py-3"></th> --}}
                      <th scope="col" class="relative px-6 py-3"></th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr></tr>
                    @foreach ($links as $link )
                      <tr>
                      <td class="px-6 py-4 whitespace-nowrap">{{ $link->id }}</td>
                      <td class="px-6 py-4 whitespace-wrap" style="word-wrap: break-word">{{ $link->original_url }}</td>
                      <td class="px-6 py-4 whitespace-nowrap "><a target="_blank" href="{{ $link->short_url }}">{{ url($link->short_url) }} </a></td>
                      <td class="px-6 py-4 whitespace-nowrap">
                      </td>
                      {{-- <td class="px-6 py-4 text-right text-sm">
                        <button class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 
                        ease-in-out">
                            Edit
                          </button>
                      </td> --}}

                      <td class="px-6 py-4 text-right text-sm">
                        <a class="px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg
                        focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 
                        ease-in-out" href="{{ route('user.delete',$link->id) }}">
                            Delete
                      </a></td>
                    </tr>  
                    @endforeach
                    
                    <!-- More items... -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
          
    </div>
</x-app-layout>