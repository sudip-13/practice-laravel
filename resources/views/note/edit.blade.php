<x-layout>

    <div class="mt-6 ">
        <p class="text-2xl font-semibold text-center">Edit your Note</p>
        <div class="w-full max-w-md mx-auto my-4">

            <form action="{{ route('note.update', $note) }}" method="POST">
                @csrf
                @method('PUT')

                <textarea id="message" rows="4" name="note"
                    class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write your thoughts here...">{{ $note->note }}</textarea>

                <div class="m-6 flex justify-between ">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Submit</button>
                    <button type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5"
                        onclick="window.location='{{ route('note.index') }}';">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
