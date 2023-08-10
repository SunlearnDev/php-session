<?php
// http://localhost/learnPhp/sessioncurd/delete.php
session_start();
  ?>

<?php 

?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<form class="space-y-6" action="#" method="POST">
      <div>
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Tìm sản phẩm</label>
        <div class="mt-2">
          <input id="name" name="name" type="text"  class=" px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
</form>
</body>