<?php
    require "./dbase/productHandler.php";
    $handler = new productHandler;
    $id = 3;
    $sql= "SELECT pagetext FROM pages WHERE id=?";
    $pages = $handler->readProduct($sql, $id);
?>
<?php include "./header.php"; ?>

    <section id="header">
        <div class="bg-image-2" style="background-image: url('./images/images/about-us.jpg');">
            <div class="bg-cover-2">
                <div class="container h-100">
                    <div class="row justify-content-center h-100">
                        <div class="col-12 col-md-8 text-white text-center">
                            <div class="d-table h-100 w-100">
                                <div class="d-table-cell align-middle">
                                    <h1 class="mb-3"><i>Over <span class="highlight">ons</span></i></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php foreach($pages as $page){
        echo htmlspecialchars_decode(stripslashes($page['pagetext']));
    }
    ?>

    <section id="contact">
        <div class="row justify-content-center gx-0">
            <div class="col-12 col-md-12 col-lg-8">
                
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>
    
</body>
<script src="./bootstrap/js/bootstrap.js"></script>

</html>