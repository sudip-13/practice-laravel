<x-app-layout>
    <div class="m-4">
        <div class="flex justify-center">

            <a href="{{ route('note.create')}}" class=" bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                New Note
            </a>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-4">
        @foreach ($notes as $note)
            <div class="bg-white p-4 rounded shadow-md">
                <div class="note-body mb-4">
                    {{ Str::words($note->note, 30) }}
                </div>
                <div class="note-buttons flex space-x-2">
                    <a href="{{ route ('note.show', $note)}}" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">View</a>
                    <a href="{{ route('note.edit', $note)}}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('note.destroy', $note) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
        {{ $notes->links()}}
    </div>
</x-app-layout>