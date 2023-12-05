<!-- The Modal -->
<div id="modal-posting"
    class="hidden fixed top-0 left-0 z-80 w-screen h-screen bg-black/70 flex justify-center items-center">

    <!-- The close button -->
    <a class="fixed z-90 top-32 right-8 text-white text-5xl font-bold" href="javascript:void(0)"
        onclick="closeModal()">&times;</a>

    <!-- A big image will be displayed here -->
    <div class="bg-white w-[1300px] h-auto inline-flex" id="posting">
        <img id="modal-img" class="max-w-[800px] max-h-[600px]" />
        <div class="w-[450px] h-[50px] p-2.5 justify-between inline-flex">
            <div class="justify-center items-center gap-5 flex">
                <img class="w-[30px] h-[30px] rounded-[250px] border border-zinc-600" src="assets/images/silverash-profile.svg" />
                <div class="text-center text-zinc-700 text-sm font-normal">
                    silver.ash
                </div>
            </div>
            <div class="justify-center items-center gap-5 flex">
                <button class="bg-transparent cursor-pointer border-0">
                    <img src="assets/images/three-dots.png" alt="" />
                </button>
            </div>
        </div>
    </div>
</div>
