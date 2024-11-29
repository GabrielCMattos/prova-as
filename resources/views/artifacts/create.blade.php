<x-app-layout>
<div class="pb-12 w-full max-w-xs mx-auto flex items-center justify-center min-h-screen ">
<form class="bg-white shadow-md rounded px-10 pb-6 mb-4" action="{{ url('artifacts') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-2 mt-10">
      <label class="block text-gray-700 text-sm font-bold mb-1" for="Artifact Name">
        Artifact Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" type="text" placeholder="Artifact Name" required>
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-1" for="Artifact Value">
        Artifact Value
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="value" type="number" step="any" placeholder="Artifact Value" required>
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-1" for="Artifact Age">
        Artifact Age
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="age" type="number" placeholder="Artifact Age" required>
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Collection">
        Collection
      </label>
      <select class="block text-gray-700 border rounded" name="collection_id">
        @forelse ($collections as $collection)
          <option value ="{{$collection->id}}">{{$collection->description}}</option>
          @empty
          <option disabled>No collections registered</option>
        @endforelse
      </select>
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-1" for="Artifact Imagem">
        Artifact Image
      </label>
      <input class="shadow appearance-none border rounded py-2 px-3 w-80 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="file" required>
    </div>
    <div class="flex items-center justify-center">
      <button class="bg-green-400 hover:scale-110 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Create Artifact
      </button>
    </div>
</form>
</div>
</x-app-layout>