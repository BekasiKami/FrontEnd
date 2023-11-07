<div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-40 hidden">
    {{-- modal --}}
    <div class="h-auto w-[400px] bg-white rounded-[10px] shadow-lg ">
        {{-- modal header --}}
        <div class="border-b px-4 py-4 flex items-center">
            <h3 class="text-zinc-700 text-xs font-bold font-['Nunito'] mx-auto">Tambahkan Postingan</h3>
            <button class="text-black close-modal">&cross;</button>
        </div>
        {{-- modal body --}}
        <div class="p-3">

            <form>

                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                    to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)
                            </p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>

                <div
                    class="mt-5 w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <label for="comment" class="sr-only">Your post</label>
                        <textarea id="comment" rows="4"
                            class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Write something..." required></textarea>
                    </div>
                    <div class="flex items-center justify-end px-3 py-2 border-t dark:border-gray-600">
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Posting
                        </button>
                    </div>
                </div>
            </form>
            {{-- <div class="max-w-[125px] px-4 py-2 bg-emerald-500 rounded-[10px] shadow mx-auto">
              <div class="text-white text-[10px] font-normal font-['Nunito']">Add image or videos</div>
            </div> --}}
        </div>
        {{-- <div class="flex justify-end items-center border-t p-3">
        <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 close-modal">Cancel</button>
        <button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white">Ok</button>
    </div> --}}
    </div>
</div>

<script src="js/modal-posting.js"></script>
