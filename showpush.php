<?php
// http://localhost/learnPhp/sessioncurd/showpush.php
session_start();
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
    <div class="w-full  h-12 bg-black text-white mb-1 ">
        <ul class="grid grid-cols-4 w-full h-full gap-3 flex justify-center items-center" >
            <li class="w-full h-full flex justify-center items-center hover:bg-red-100 hover:text-red-400"><a href='#' class="w-full h-full text-center leading-10">Trang Chủ</a></li>
            <li class="w-full h-full flex justify-center items-center hover:bg-red-100 hover:text-red-400"><a href='pushdata.php' class="w-full h-full text-center leading-10">Thêm</a></li>
            <li class="w-full h-full flex justify-center items-center hover:bg-red-100 hover:text-red-400"><a href="" class="w-full h-full text-center leading-10">Xóa</a></li>
            <li class="w-full h-full flex justify-center items-center hover:bg-red-100 hover:text-red-400"><a href="" class="w-full h-full text-center leading-10">Sửa</a></li>
        </ul>
    </div>
    <div class="lg:container mx-auto h-screen ">     
            <div class="  w-full h-auto  mb-5">
                <h1 class="td-pro flex w-full h-12 justify-center items-center text-3xl bg-red-800 text-white  rounded-xl">
                    Sản Phẩm Nổi Bật
                </h1>
                <ul class=" flex gird  grid-cols-5 grid-row-1 gap-1 pt-1   w-full h-2/5">
                    <?php foreach ($_SESSION['product'] as $productInfo ) { ?>
                        <li class="w-1/5  h-full bg-zinc-200 rounded">
                            <img src="<?php echo $productInfo['img'] ?>" alt="" >
                            <p class="w-full h-auto"> <?php echo $productInfo['name']; ?></p>
                            <p class="w-full h-auto  "> <?php echo $productInfo['price'].'VND'; ?></p>
                            <div class="flex w-full h-auto">
                                <?php for ($i = 0; $i  < $productInfo['star'] ; $i++) { ?>
                                    <i <?php echo 'class="fa-solid fa-star" style="color: #f0c905;"'; ?>></i>
                                <?php } ?>
                                <p> <?php echo ' +'.$productInfo['evaluate']; ?></p>
                            </div>
                        </li>
                    <?php } ?>

                </ul>
            </div>
            <!-- <div class="  w-full h-auto  mb-5">
                <h1 class="td-pro flex w-full h-12 justify-center items-center text-3xl bg-red-800 text-white  rounded-xl">
                    Sản Phẩm Mới
                </h1>
                <ul class=" flex gird  grid-cols-5 grid-row-1 gap-1 pt-1   w-full h-2/5">
                    <?php foreach ($data['productnew'] as $productnew ) { ?>
                        <li class="w-1/5  h-full bg-zinc-200 rounded">
                            <img src="<?php echo $productnew['img'] ?>" alt="" >
                            <p class="w-full h-auto"> <?php echo $productnew['name']; ?></p>
                            <p class="w-full h-auto"> <?php echo $productnew['price']; ?></p>
                            <div class="flex w-full h-auto">
                                <?php for ($i = 0; $i < rand(1,5); $i++) { ?>
                                    <i <?php echo $productnew['star']; ?>></i>
                                <?php } ?>
                                <p> <?php echo $productnew['evaluate']; ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div> -->

    </div>
</body>