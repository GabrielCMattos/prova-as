<x-app-layout>
<form action="{{ url('curators') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="contact" placeholder="Contact" required>
    <button type="submit">Create Curator</button>
</form>
</x-app-layout>