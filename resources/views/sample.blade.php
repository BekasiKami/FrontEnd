<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <style>
      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-btn {
        background-color: #3498db;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      .dropdown-content a:hover {
        background-color: #ddd;
      }
    </style>
  </head>
  <body>
    <!-- <div class="dropdown">
      <button class="dropdown-btn">Hover me</button>
      <div class="dropdown-content">
        <a href="#">Item 1</a>
        <a href="#">Item 2</a>
        <a href="#">Item 3</a>
      </div>
    </div> -->

    <div class="dropdown" id="myDropdown">
      <button class="dropdown-btn" onmouseover="showDropdown()">
        Hover me
      </button>
      <div class="dropdown-content">
        <a href="#">Item 1</a>
        <a href="#">Item 2</a>
        <a href="#">Item 3</a>
      </div>
    </div>

    <script>
      function showDropdown() {
        var dropdownContent = document
          .getElementById("myDropdown")
          .querySelector(".dropdown-content");
        dropdownContent.classList.add("show");
      }

      function hideDropdown() {
        var dropdownContent = document
          .getElementById("myDropdown")
          .querySelector(".dropdown-content");
        dropdownContent.classList.remove("show");
      }

      // Attach event listeners
      var dropdownButton = document
        .getElementById("myDropdown")
        .querySelector(".dropdown-btn");
      dropdownButton.addEventListener("mouseout", hideDropdown);

      var dropdownContent = document
        .getElementById("myDropdown")
        .querySelector(".dropdown-content");
      dropdownContent.addEventListener("mouseover", showDropdown);
      dropdownContent.addEventListener("mouseout", hideDropdown);
    </script>
  </body>
</html>
