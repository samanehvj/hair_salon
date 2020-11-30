<?php
include 'includes/functions.php';
include 'includes/head.php';
include 'includes/nav.php';
?>
<div class="container-fluid ">



    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/contact/salon.png" class="d-block w-100" alt="...">
            </div>

        </div>
    </div>
</div>


<div class="container">
    <h5 class="col text-center mt-5 mb-4" style="font-size: 40px;font-family: Inknut Antiqua;">Contact</h5>

    <div class="row">
        <div class="col-md-5 youshi" id="infomation">


            <p class="youshi-bio px-lg-4 py-5 mt-0 ml-3"  style="font-size: 18px;font-family:roboto;">


              <i class="fas fa-home mr-3"></i> 443 N Rodeo Dr, Beverly Hills, CA 90210

              <br>
              <br>
              <i class="fas fa-phone mr-3"></i> + 01 234 567 88
              <br>
              <br>

              <i class="fas fa-print mr-3"></i> + 01 234 567 89
          </p>


     </div>
<div class="col-md-4 mt-5 ml-lg-5" style="font-family: roboto;">
    <form class="form-form">
        <div class="row" id="booking">
            <div class="col">
                <label for="exampleFormControlTextarea1">First Name </label>

                <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
                <label for="exampleFormControlTextarea1">Last Name </label>

                <input type="text" class="form-control" placeholder="Last name">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Service type</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Select </option>
                <option>Women </option>
                <option>Men </option>
                <option>Coloring</option>
                <option>Extensions</option>
                <option>Bridal</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2"> Choose your Stylist </label>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0"></legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Yoshi Lee
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                            Leticia Orozco </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                            Dina Rose </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Cat Gonzales
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                            Sasha Ito </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                            Allyson Harlin </label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="font-family: Inknut Antiqua;background-color:#bcacff;border:2px solid #bcacff;color:black;">Submit</button>
    </form>
</div>
</div>
<div class="row mt-5">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52871.821713598336!2d-118.43455349420682!3d34.08261502178325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bc04d6d147ab%3A0xd6c7c379fd081ed1!2sBeverly%20Hills%2C%20CA%2C%20USA!5e0!3m2!1sen!2sca!4v1596870375286!5m2!1sen!2sca" width="1850" height="450" frameborder="0" style="border:2;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>

<?php
include 'includes/footer.php';
?>