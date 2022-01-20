<?php
    require "./dbase/productHandler.php";
    $handler = new productHandler;
    $id= 2;
    $sql= "SELECT * FROM pages WHERE id=?";
    $pages = $handler->readProduct($sql, $id);
?>
<!DOCTYPE html>
<?php include "./header.php"; ?>

    <section id="header">
        <div class="bg-image-2" style="background-image: url('./images/images/contact_header.jpg');">
            <div class="bg-cover-2">
                <div class="container h-100">
                    <div class="row justify-content-center h-100">
                        <div class="col-12 col-md-8 text-white text-center">
                            <div class="d-table h-100 w-100">
                                <div class="d-table-cell align-middle">
                                    <h1 class="mb-3"><i>Contact</i></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="introduction">
        <div class="bg-dark py-5">
            <div class="container">
                <div class="row justify-content-center pt-4">
                    <div class="col-12 col-md-7 col-lg-5 ps-4 text-white quote">
                        <p><i>GameParty is er voor de <span class="highlight">consument</span> en voor de <span class="highlight">zakelijke gebruiker.</span> Onze klantenservice-medewerkers staan <span class="highlight">5 dagen</span> in de week voor je klaar! Of je nou vragen hebt over een nieuwe VR-headset, wilt weten waar je <span class="highlight">bestelling</span> is gebleven, of benieuwd bent naar de <span class="highlight">laatste VR-ontwikkeling:</span> vraag het aan onze klantenservice!</i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php foreach($pages as $page){
        echo htmlspecialchars_decode(stripslashes($page['pagetext']));
    }
    ?>

<?php include "footer.php"; ?>
    
</body>
<script src="./bootstrap/js/bootstrap.js"></script>

</html>

