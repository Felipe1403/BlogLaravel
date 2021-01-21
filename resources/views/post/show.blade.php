<x-app-layout>
  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{$post->title}}
        </h2>
  </x-slot>
  
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
          <div class="px-4 py-5 border-b border-gray-200 sm:px-6">

            <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
               {{$post->content}}
            </p>
                  
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

            <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
              Autor: {{$post->user->name}}
            </dd>
          </div>
                
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                 Comentarios
              </dt>
            </div>
              @foreach ($post->comments as $comment)
              <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-1 sm:gap-4 sm:px-6">
                <div class="text-sm leading-5 font-medium text-gray-500">
                  <b>{{$comment->author->name}}: </b>
                  
                </div>
                <div class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ $comment->comment}}
                  @if(Auth::user() !== null && Auth::user()->isAdmin())
              <form method="POST" action="{{route('comment.delete',['id'=>$comment->id])}}">
                @csrf
                @method('delete')
                <input type="hidden" name="post_id" value="{{$post->id}}">
            
                <input type="submit" value="Delete">
              </form>
            @endif
                </div>
              </div>
  
           @endforeach
          </div>
        </div>
        @if(Auth::user() !== null)  
      <form method="POST" action="{{route('comment.create')}}">
      @csrf
      <input type="hidden" name="post_id" value="{{$post->id}}"/>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Submit">
      </form> 
    @else
      <h1>Logeate para añadir un comentario <a href="{{route('login')}}">Logueate<h1>
    @endif     
      </div>
                

    
  </div>
</x-app-layout>    

    