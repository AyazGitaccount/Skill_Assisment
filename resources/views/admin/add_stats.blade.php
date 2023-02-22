@foreach($data as $item )
<tr>
<td class="px-6 py-4 whitespace-nowrap">{{ $item->id }}</td>
<td class="px-6 py-4 whitespace-nowrap">{{ $item->vists }}</td>
<td class="px-6 py-4 whitespace-nowrap">{{ $item->add_url }}</td>
                                       

{{-- <td class="px-6 py-4 text-right text-sm">
  <button class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
  focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 
  ease-in-out">
      Edit
    </button>
</td> --}}

<td class="px-6 py-4 text-right text-sm">
  <button class="px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg
     focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 
     ease-in-out">
      Delete
   </button></td>
</tr>  
@endforeach
