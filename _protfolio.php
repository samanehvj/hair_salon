<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';
$con = connect();
?>


<div class="container">
    <h5 class="col text-center mt-4" style="font-size: 30px;font-family: Inknut Antiqua;">Protfolio</h5>
    <div class="row my-4">

        <img src="imgs/gallery/1.png" alt="..." class=" col-md-6">
        <img src="imgs/gallery/12.jpg" alt="..." class=" col-md-6 ">

    </div>
    <?php
    $query = "SELECT * FROM galleries ORDER BY id";

    $galleries_result = mysqli_query($con, $query);
    $i = 0;
    while ($galleries = mysqli_fetch_assoc($galleries_result)) {
    ?>
        <div class="row col md-4 mt-2 ml-3 ">
            <div class="col-md-4">
                <ul class=" col-md-4 list-group list-group-flush">
                    <button class="btn btn-info " onclick="showGallery(<?= $galleries['id'] ?>)"><?= $galleries['name'] ?></button>

            </div>
            <?php
            if ($i == 0) {
                $i++;
            ?>
                <div class="panel col-md-8 " id="panel-<?= $galleries['id'] ?>">
                <?php
            } else {
                ?>
                    <div class="panel col-md-8 d-none " id="panel-<?= $galleries['id'] ?>">
                    <?php
                }
                    ?>

                    <p><?= $galleries['description'] ?></p>
                    </div>
                </div>
            <?php
        }
            ?>

        </div>
        <?php
        $galleries_result = mysqli_query($con, $query);

        $i = 0;
        while ($galleries = mysqli_fetch_assoc($galleries_result)) {
            if ($i == 0) {
                $i++;
        ?>
                <div class="gallery row mt-5" id="gallery-<?= $galleries['id'] ?>">
                <?php
            } else {
                ?>
                    <div class="gallery row d-none" id="gallery-<?= $galleries['id'] ?>">
                    <?php
                }
                    ?>

                    <div class="col-md-10 offset-md-1">
                        <div class="splide" id="splide-<?= $galleries['id'] ?>">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php
                                    $query = "SELECT * FROM gallery_images WHERE gallery_id=" . $galleries['id'];
                                    $img_res = mysqli_query($con, $query);
                                    while ($images = mysqli_fetch_assoc($img_res)) {
                                    ?>
                                        <li class="splide__slide">
                                            <div>
                                                <img src="<?= $images['image'] ?>" style="max-width:100%; max-height:100%;" />
                                                <span class="btn btn-info sp-splide__slide__number gallery-caption"><?= $images['caption'] ?></span>
                                            </div>
                                        </li>

                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>

                <?php
            }
                ?>





                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        new Splide(".splide", {
                            type: "loop",
                            fixedWidth: '20rem',
                            fixedHeight: '20rem',
                            perPage: 6,
                            perMove: 1,
                        }).mount();


                    });
                </script>
                <script>
                    function showGallery(panel) {
                        var divsToHide = document.getElementsByClassName("panel");
                        for (var i = 0; i < divsToHide.length; i++) {
                            divsToHide[i].style.display = "none";
                        }

                        var divsToHide = document.getElementsByClassName("gallery");
                        for (var i = 0; i < divsToHide.length; i++) {
                            divsToHide[i].style.display = "none";
                        }

                        var visiblePanel = document.getElementById('panel-' + panel);
                        var visibleGallery = document.getElementById('gallery-' + panel);
                        visiblePanel.style.display = "block";
                        visibleGallery.style.display = "block";
                        visiblePanel.classList.remove("d-none");
                        visibleGallery.classList.remove("d-none");

                        var slide = "#splide-" + panel
                        new Splide(slide, {
                            type: "loop",
                            fixedWidth: '20rem',
                            fixedHeight: '20rem',
                            perPage: 6,
                            perMove: 1,
                        }).mount();
                    }
                </script>
                <?php
                include 'includes/footer.php';
                ?>