<x-app-layout>
<form action="{{ url('curators/' . $curator->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{$curator->name}}" required>
    <input type="text" name="name" placeholder="Contact" value="{{$curator->contact}}" required>
    <button type="submit">Update Curator</button>
</form>
</x-app-layout>