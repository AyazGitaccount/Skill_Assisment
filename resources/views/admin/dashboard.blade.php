<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-slot name="header">
                        <h1> Users </h1>
                       </x-slot>
                   
                       <div class="max-w-6xl  mx-auto mt-8 ">
                           <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                               <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                 <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                   <table class="min-w-full divide-y divide-gray-200">
                                     <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                                       <tr>
                                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider"> Name</th>
                                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Email</th>
                                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Short URL</th>
                                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Original URL</th>
                                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Vists</th>
                                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">VistorIP</th>
                                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider"> </th>
                                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider"> </th>
                                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider"> </th>
                                        </tr>
                                     </thead>
                                     <tbody class="bg-white divide-y divide-gray-200">
                                       
                                       @foreach ($data as $item )
                                         <tr>
                                         <td class="px-6 py-4 whitespace-nowrap">{{ $item->name }}</td>
                                         <td class="px-6 py-4 whitespace-nowrap">{{ $item->email }}</td>
                                         <td class="px-6 py-4 whitespace-nowrap">{{ $item->short_url }}</td>
                                         <td class="px-6 py-4 whitespace-nowrap">{{ $item->original_url }}</td>
                                         <td class="px-6 py-4 whitespace-nowrap">{{ $item->vists }}</td>
                                         <td class="px-6 py-4 whitespace-nowrap">{{ $item->vistor_IP }}</td>
                                         
                                         
                                         <td class="px-6 py-4 text-right text-sm">
                                           <button class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                                           focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 
                                           ease-in-out">
                                               Edit
                                             </button>
                                         </td>
                   
                                         <td class="px-6 py-4 text-right text-sm">
                                           <button class="px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg
                                              focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 
                                              ease-in-out">
                                               Delete
                                            </button></td>
                                       </tr>  
                                    @endforeach
                                       
                                       <!-- More items... -->
                                     </tbody>
                                   </table>
                                   <div class="m-2 p-2">Pagination</div>
                                 </div>
                               </div>
                             </div>
                             
                             
                       </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
