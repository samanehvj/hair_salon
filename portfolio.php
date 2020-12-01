<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';
$con = connect();
?>


<div class="container">
    <h5 class="col text-center mt-5 mb-5" style="font-size: 40px;font-family: Inknut Antiqua;">Portfolio</h5>
    <div class="row my-4">

        <img src="imgs/gallery/1.png" alt="..." class=" col-md-6">
        <img src="imgs/gallery/12.jpg" alt="..." class=" col-md-6 ">

    </div>
    <div class="row ">
        <div class="list-group col-md-4">


            <?php
            $query = "SELECT * FROM galleries ORDER BY id";

            $galleries_result = mysqli_query($con, $query);
            $i = 0;
            while ($galleries = mysqli_fetch_assoc($galleries_result)) {
                if ($i == 0) {
                    $active = 'active';
                    $info = $galleries['description'];
                    $id = $galleries['id'];
                    $i++;
                } else {
                    $active = '';
                }
            ?>
                <button type="button" data-url="galleryData.php" data-id="<?= $galleries['id'] ?>" data-info="<?= $galleries['description'] ?>" class="list-group-item list-group-item-action <?= $active ?>">
                    <?= $galleries['name'] ?>
                </button>
            <?php
            }
            ?>
        </div>
        <div class="col-md-8 sv-gallery-info">
            <?= $info ?>
        </div>
    </div>
    <div class="row my-5">

        <div class="col splide">
            <div class="splide__track">
                <ul class="splide__list" id="gallery-images">
                    <?php
                    $query = "SELECT * FROM gallery_images WHERE gallery_id=" . $id;
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



<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Splide(".splide", {
            type: "loop",
            fixedWidth: '20rem',
            fixedHeight: '20rem',
            perPage: 6,
            perMove: 1,
            pagination: false,
        }).mount();


    });
</script>

<script>
    $('.list-group-item-action').click(function() {
        $('.list-group-item-action').removeClass('active');
        $(this).addClass('active');
        var url = $(this).data("url");
        var id = $(this).data("id");
        var info = $(this).data("info");
        $(".sv-gallery-info").html(info);

        $.ajax({
            url: url,
            type: "get", //send it through get method
            data: {
                id: id,
            },

            success: function(res) {

                $("#gallery-images").html(res);
                new Splide(".splide", {
                    type: "loop",
                    fixedWidth: '20rem',
                    fixedHeight: '20rem',
                    perPage: 6,
                    perMove: 1,
                    pagination: false,
                }).mount();

            },
            error: function(error) {
                console.log("error occured");
            },
        });

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