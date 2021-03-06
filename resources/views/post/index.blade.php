
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          
          <tbody class="bg-white divide-y divide-gray-200">
               @foreach ($posts as $post)
            <tr>
              <td class="px-6 py-4 whitespace-no-wrap">
                <div class="flex items-center">
                  
                  <div class="ml-4">
                    <div class="text-sm leading-5 font-medium text-gray-900">
                      <a href="{{route('post.show',$post->id)}}">{{ $post->title }}</a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
                @endforeach
            <!-- More rows... -->
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
