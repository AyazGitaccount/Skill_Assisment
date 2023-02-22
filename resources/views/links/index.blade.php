<x-app-layout>
  <x-slot name="header">
    <h1> Your Links</h1>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="min-w-full p-6 text-gray-900 dark:text-gray-100">
          <div class="max-w-6xl  mx-auto mt-8 ">
            <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200 table-responsive">
                    <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                      <tr>
                        <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                          Id</th>
                        <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                          Original URL</th>
                        <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                          Short URL</th>
                        <th scope="col"
                          class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                        </th>
                        <th scope="col" class="relative px-6 py-3"></th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr></tr>
                      @foreach ($links as $link )
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $link->id }}</td>
                        <td class="px-6 py-4 whitespace-wrap" style="word-wrap: break-word">{{ $link->original_url }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap "><a target="_blank" href="{{ $link->short_url }}">{{
                            url($link->short_url) }} </a></td>
                        <td class="px-6 py-4 whitespace-nowrap">
                        </td>
                        <td class="px-6 py-4 text-right text-sm">
                          <form action="{{ route('user.delete',$link->id) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                          <button class="px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg
                        focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 
                        ease-in-out" href="" onclick="return confirm('Sure Want To Delete?  {{ $link->original_url }}')">
                            Delete
                          </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach

                      <!-- More items... -->
                    </tbody>
                  </table>
                </div>
                <div class="pt-3">
                  {!! $links->withQueryString()->links() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</x-app-layout>