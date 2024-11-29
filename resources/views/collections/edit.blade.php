<x-app-layout>
<form action="{{ url('collections/' . $collection->id) }}" method="POST">
    @csrf
    @method('PUT')
    <textarea name="description" placeholder="Description" value="{{$collection->description}}" required></textarea>
    <button type="submit">Update Collection</button>
</form>
</x-app-layout>