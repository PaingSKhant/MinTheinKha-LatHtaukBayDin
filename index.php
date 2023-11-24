<?php

require_once "./main/main.php";

$data = $baydin->connectJson();

$questions = $baydin->question();


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

            <hr class="bg-dark">
            <form action="search.php" method="post">
                <div class="col-10 ms-3 d-flex mb-4">
                    <input type="text" class="form-control" name="searchQuestions" placeholder="သိလိုသော မေးခွန်းအား ရှာဖွေပါ...">
                    <button type="submit" class="ms-3 btn btn-primary">search</button>
                </div>
            </form>

            <?php foreach ($questions as $question) : ?>
                <a href="show.php?id=<?php echo $question['questionNo'] ?>" class="text-decoration-none text-dark">
                    <div class="d-flex m-3 bg-white rounded">
                        <h5><i class="fa-solid fa-award p-1"></i></h5>

                        <h5><?php echo $question['questionName'] ?></h5>


                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>