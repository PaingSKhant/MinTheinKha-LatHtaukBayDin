<?php

require_once "./main/main.php";

$data = $baydin->connectJson();

$answers = $baydin->answer();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lat-htauk-bay-din</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="">
    <div class="container d-flex justify-content-center">
        <div class="row col-10 mt-4">
            <div class="d-flex justify-content-between">
                <h2><i class="fa-solid fa-award p-1"></i></h2>
                <h2><i class="fa-solid fa-award p-1"></i></h2>
            </div>
            <h2 class="text-center fw-bold">မင်းသိင်္ခလက်ထောက်ဗေဒင်</h2>
            <div class="d-flex justify-content-between mt-3 mb-3">
                <a href="index.php">
                    <button class="btn btn-primary text-white">နောက်သို့</button>
                </a>


            </div>

            <hr class="bg-dark">
            <div class="text-center text-dark mt-5">
                <?php foreach ($answers as $answer) : ?>

                    <?php if ($answer['questionNo'] == $_GET['qid'] && $answer['answerNo'] == $_GET['id']) : ?>

                        <div class="d-flex">
                            <h4><i class="fa-solid fa-hand-holding-heart"></i></h4>
                            <h4 class="ms-3"><?php echo $answer['answerResult'] ?></h4>
                        </div>

                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>