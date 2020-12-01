<?php
include 'includes/functions.php';

$con = connect();

$query = "SELECT * FROM gallery_images WHERE gallery_id=" . $_GET['id'];
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
