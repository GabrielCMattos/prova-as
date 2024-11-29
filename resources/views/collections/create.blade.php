<x-app-layout>
<form action="{{ url('collections') }}" method="POST">
    @csrf
    <textarea name="description" placeholder="Description" required></textarea>
    <button type="submit">Create Collection</button>
</form>
</x-app-layout>