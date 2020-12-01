<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';
$con = connect();


?>

<!DOCTYPE html>
<html>

<body>

    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imgs/slide/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imgs/slide/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imgs/slide/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        <h2 class="text-center mt-5 mb-4" style="font-size: 40px;font-family: Inknut Antiqua;">Salon Services</h2>

        <p class="text-center" style="font-size: 20px;font-family: roboto;">See Our Full Services Menu Here
            <br>
            <br>
            All service pricing is subject to the discretion of your technician performing your service.
            <br>
            <br>
            Please ask for an exact price quote before your service is performed.</p>


        <div class="row " id="package">
        </div>
        <div class=" row d-flex justify-content-around">


            <?php
            $query = "SELECT * FROM services";
            $service_res = mysqli_query($con, $query);
            while ($service = mysqli_fetch_assoc($service_res)) {
                $query = "select * from service_items where service_id='" . $service['id'] . "'";
                $item_res = mysqli_query($con, $query);
            ?>
                <div class="flip-card ">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="imgs/service/<?= $service['image'] ?>" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                            <h5><?= $service['name'] ?></h5>
                            <p>
                                <?php
                                while ($item = mysqli_fetch_assoc($item_res)) {
                                ?>
                                    <div>
                                        <span class="float-left"><?= $item['title'] ?></span>
                                        <span class="float-right"><?= $item['price'] ?></span>
                                        <br>
                                    </div>
                                <?php
                                }
                                ?>

                            </p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>


        <div class="row text-center mt-4" id="product">
            <h5 class="top-product col" style="font-size: 30px;font-family: Inknut Antiqua;">Our Products </h5>
        </div>

        <div class="row text-center  mt-4">
            <div class="col-lg-10 offset-lg-1">
                <img src="imgs/product/1.png" alt="..." class="rounded-top col-md-4  my-2 col-lg-2">
                <img src="imgs/product/2.png" alt="..." class="rounded-top col-md-4  my-2 col-lg-2">
                <img src="imgs/product/3.png" alt="..." class="rounded-top col-md-4  my-2 col-lg-2">
                <img src="imgs/product/4.png" alt="..." class="rounded-top col-md-4  my-2 col-lg-2">
                <img src="imgs/product/5.png" alt="..." class="rounded-top col-md-4  my-2 col-lg-2">
                <img src="imgs/product/6.png" alt="..." class="rounded-top col-md-4  my-2 col-lg-2">
                <img src="imgs/product/7.png" alt="..." class="rounded-top col-md-4  my-2 col-lg-2">
                <img src="imgs/product/8.png" alt="..." class="rounded-top col-md-4  my-2 col-lg-2">
                <img src="imgs/product/9.png" alt="..." class="rounded-top col-md-4  my-2 col-lg-2">
                <img src="imgs/product/10.png" alt="..." class="rounded-top col-md-4 my-2  col-lg-2">
            </div>
        </div>

<div class="row text-center mt-5 ">
        <h5 class="col" style="font-size: 30px;font-family: Inknut Antiqua;">Testimonio</h5>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/service/tesm5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imgs/service/tesm4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imgs/service/tesm6.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        </div>




 

    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>