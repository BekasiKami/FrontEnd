<div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-40 hidden">
    {{-- modal --}}
    <div class="bg-white rounded-[10px] shadow-lg w-1/4">
    {{-- modal header --}}
    <div class="border-b px-4 py-4 flex items-center">
        <h3 class="font-semibold text-lg mx-auto">Tambahkan Postingan</h3>
        <button class="text-black close-modal">&cross;</button>
    </div>
    {{-- modal body --}}
    <div class="p-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam odit iusto qui, corporis molestias labore possimus accusamus explicabo libero quas repellat id maxime exercitationem nostrum, ea architecto numquam reprehenderit doloribus hic. Harum, maxime necessitatibus dicta quisquam quidem illo, assumenda ipsum magni tempore voluptas ea laudantium nostrum. Iure, laudantium distinctio! Dicta?
    </div>
    <div class="flex justify-end items-center border-t p-3">
        <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 close-modal">Cancel</button>
        <button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white">Ok</button>
    </div>
    </div>
</div>

<script>
    const modal = document.querySelector('.modal');

    const showModal = document.querySelector('.show-modal');
    const closeModal = document.querySelectorAll('.close-modal');

    showModal.addEventListener('click', function (){
        modal.classList.remove('hidden')
    });

    closeModal.forEach(close => {
        close.addEventListener('click', function (){
         modal.classList.add('hidden')
        });
    });
</script>