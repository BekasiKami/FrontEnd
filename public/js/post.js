        // Get the modal by id
        var modal = document.getElementById("modal-posting");

        // Get the modal image tag

        var modalPosting = document.getElementById("posting");
        var modalImg = document.getElementById("modal-img");

        // this function is called when a small image is clicked
        function showModal(src) {
            modal.classList.remove('hidden');
            modalPosting;
            modalImg.src = src;
        }

        // this function is called when the close button is clicked
        function closeModal() {
            modal.classList.add('hidden');
        }