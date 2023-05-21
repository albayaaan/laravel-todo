<!-- Overlay element -->
<div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

<!-- The dialog_edit -->
<form action="" method="" id="dialog_edit"
    class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1/2 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
    <h1 class="text-2xl font-semibold">Edit Task</h1>
    <div class="py-5 border-t border-b border-gray-300">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700" for="title">Title</label>
                <input id="title" name="title" type="text"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40  focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-gray-700" for="deadline">Deadline</label>
                <input id="deadline" name="deadline" type="date"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40  focus:outline-none focus:ring">
            </div>
        </div>

        <div>
            <label class="text-gray-700" for="description">Description</label>
            <textarea name="description" id="description" cols="20" rows="5"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40  focus:outline-none focus:ring"></textarea>
        </div>
    </div>
    <div class="flex gap-3 justify-end">
        <!-- This button is used to close the dialog -->
        <button type="submit" class="bg-violet-500 rounded-sm px-4 py-2 text-white font-semibold">
            Update</button>
        <button type="button" id="close_edit" class="bg-violet-500 rounded-sm px-4 py-2 text-white font-semibold">
            Close</button>
    </div>
</form>
