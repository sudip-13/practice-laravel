<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 bg-white rounded-lg shadow-md mt-10">
        <h1 class="text-2xl text-center font-bold mb-4">Show Note</h1>
        <div class="bg-gray-100 p-4 rounded">
            <p class="text-lg"><strong>ID:</strong> {{ $note->id }}</p>
            <p class="text-lg"><strong>Note:</strong> {{ $note->note }}</p>
            <p class="text-lg"><strong>User ID:</strong> {{ $note->user_id }}</p>
            <p class="text-sm text-gray-500"><strong>Created At:</strong> {{ $note->created_at }}</p>
            <p class="text-sm text-gray-500"><strong>Updated At:</strong> {{ $note->updated_at }}</p>
            <div class="note-buttons flex space-x-6 my-4 ">

                <a href="{{ route('note.edit', $note) }}"
                    class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>