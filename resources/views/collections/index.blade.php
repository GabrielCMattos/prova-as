<x-app-layout>
<div class="justify-center flex items-center pb-32">
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
@foreach($collections as $collection)
<div class="w-64 p-3">
            <div class="w-full max-w-sm rounded overflow-hidden shadow-lg bg-white border-4 border-amber-400">
                <div class="">
                    <div class="px-12 pb-4 pt-2 text-align-center flex items-center justify-center font-bold text-base">
                        <p class="underline underline-offset-4">{{ $collection->description }}</p>
                    </div>
                    <div class="flex items-right justify-end pr-2">
                    <a href="{{ url('collections/'.$collection->id.'/edit') }}"><button><img class="w-5 mr-1 hover:scale-110 flex "src="/editarlogo.png" alt=""></button></a>
                    <form onsubmit="return confirm('Deseja realmente excluir?')" action="{{ url('collections/'.$collection->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><img class="w-5 ml-1 hover:scale-110 flex "src="/delete.png" alt=""></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endforeach
</x-app-layout>
</div>
</div>