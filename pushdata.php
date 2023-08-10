<?php
// http://localhost/learnPhp/sessioncurd/pushdata.php
session_start();

if (empty($_POST['submit'])) {
    // Lấy thông tin từ form
   if (isset($_POST['name']) && $_POST['price'] && $_POST['img'] && $_POST['star'] && $_POST['evaluate']){
       // Kiểm tra nếu các trường thông tin không trống
    if ($name != '' && $img != '' && $price != '' && $star != '' && $evaluate != '') {
      // Tạo một mảng chứa thông tin sản phẩm mới
      $productInfo = array(
          'name' => $name,
          'price' => $price,
          'img' => $img,
          'star' => $star,
          'evaluate' => $evaluate
      );
      // Thêm mảng chứa thông tin sản phẩm mới vào mảng $_SESSION['product']
      $_SESSION['product'][] = $productInfo;

      // Hiển thị thông báo thành công    
      echo '<div class="block  transition duration-700 ease-in-out">
              <label  class="flex text-sm font-medium leading-6 w-full rounded-md border-0 p-1.5 text-green-500 bg-green-200"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
              </svg>Sản phẩm ' . $name . ' đã được thêm vào thành công</label>
            </div>';
      // Chuyển trang sau 3 giây
      echo '<script>
            setTimeout(function() {
              window.location.href = "showpush.php";
            }, 3000);
            </script>';
  } else {
      // Hiển thị thông báo không thành công nếu có trường thông tin bị trống
      echo '<div class="block  transition duration-700 ease-in-out">
              <label  class="flex  text-sm font-medium leading-6 w-full rounded-md border-0 p-1.5 text-rose-500 bg-rose-200"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-rose-500 ">
               <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
               </svg>Sản phẩm ' . $name . '  thêm vào không thành công</label>
            </div>';
  }
   }
   
}
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
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Tên sản phẩm</label>
        <div class="mt-2">
          <input id="name" name="name" type="text"  class=" px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Giá sản phẩm</label>
        <div class="mt-2">
          <input id="price" name="price" type="text"  class=" px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="">
        <label for="star" class="block text-sm font-medium leading-6 text-gray-900">Đánh Giá sản phẩm từ 1-5</label>
        <select name="star" id="" class=" mb-2 px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
            <option value="1" class=' px-3 '>1</option>
            <option value="2" class=' px-3 '>2</option>
            <option value="3" class=' px-3 '>3</option>
            <option value="4" class=' px-3 '>4</option>
            <option value="5" class=' px-3 '>5</option>
        </select>
      <div>
        <label for="img" class="block text-sm font-medium leading-6 text-gray-900">Nhập URL hình ảnh</label>
        <div class="mt-2">
          <input id="img" name="img" type="text"  class=" px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="evaluate" class="block text-sm font-medium leading-6 text-gray-900">Số lượng đánh giá</label>
        <div class="mt-2">
          <input id="evaluate" name="evaluate" type="text"  class=" px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class='mt-2'>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Thêm</button>
      </div>
    </form>
  </div>
</div>
</body>