<x-app-layout>
    <div class="m-4">
        <p class="text-center text-xl font-bold mb-6">Create New Note</p>
        <form action="{{ route('note.store') }} " method='POST'>
            @csrf
            <div class="w-full max-w-md mx-auto">
                <label for="message" class="block mb-2 text-sm font-medium  text-gray-900 ">Your message</label>
                <textarea id="message" rows="4" name="note" 
                    class=" block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your thoughts here..."></textarea>

                <div class="m-6 flex justify-between ">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Submit</button>
                    <button type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5"
                        onclick="window.location='{{ route('note.index') }}';">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>