<x-app-layout>
@foreach($curators as $curator)
    <div>
        <h3>{{ $curator->name }}</h3>
        <p>{{ $curator->contact }}</p>
        <a href="{{ url('curators/'.$curator->id.'/edit') }}">Edit</a>
        <form action="{{ url('curators/'.$curator->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
</x-app-layout>