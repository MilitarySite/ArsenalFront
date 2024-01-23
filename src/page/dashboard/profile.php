<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "head.php";
        $name = isset($_GET['name']) ? $_GET['name'] : 'admin'; 
    ?>
</head>
<body>
    <?php
        include "nav.php";
    ?>
    <main>
        <div class="all-content-wrapper">
            <div class="header-advance-area">
                <!-- Mobile Menu end -->
                <div class="breadcome-area" id="portfolio">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="breadcomb-wp">
                                                <div class="breadcomb-icon">
                                                    <i class="icon nalika-home"></i>
                                                </div>
                                                <div class="breadcomb-ctn">
                                                    <h2>Profile</h2>
                                                    <p>profilo admin<span class="bread-ntd"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="breadcomb-report">
                                                <button data-toggle="tooltip" data-placement="left" title="Non Autorizzato" class="btn"><a data-bs-toggle="modal" href="#pop1"><i class="icon nalika-chat"></i></a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        include "footer.php";
        include "script_footer.php";
        ?>
    
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="pop1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg"
                            alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Profile</h2>
                                    <!--<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="../assets/img/WeaponImage/PistolImage.jpg" alt="Immagine Pistola"/>
                                <p>non disponi del piano premium, compratelo kevin!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>
</html>

