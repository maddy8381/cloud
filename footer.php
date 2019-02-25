<!--========== FOOTER ==========-->

<?php 

        $data = file_get_contents('json/header/navbar.json');
        $navbarDetails = json_decode($data);

        $data2 = file_get_contents('json/footer/socials.json');
        $socials = json_decode($data2);

?>

        <script type="text/javascript" src="js/script.js"></script>

        <footer class="footer" id="contact">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">

                                <?php 
                                    foreach ($navbarDetails as $navbar){
                                        echo '<li class="footer-list-item"><a class="footer-list-link" href='.$navbar->goto.'>'.$navbar->page.'</a></li>';
                                    }
                                ?>

                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">

                                <?php 

                                    foreach ($socials as $social) {
                                        echo '<li class="footer-list-item"><a target="_blank" class="footer-list-link" href='.$social->link.'>'.$social->socialTitle.'</a></li>';
                                    }

                                ?>

                                
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30" id="sendEmail">
                            <h2 class="color-white">Send Us Your Query </h2>
                            <form>
                                <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" name="name" id="name" required>
                                <input type="email" class="form-control footer-input margin-b-20" name="email" id="email" placeholder="Email" required>
                                <input type="text" class="form-control footer-input margin-b-20" name="phone" id="phone" placeholder="Phone" required>
                                <textarea class="form-control footer-input margin-b-30" rows="6" name="message" id="message" placeholder="Message" required></textarea>
                            </form>
                            <div class="row">
                                <div class="col-xs-3">
                                <input type="submit" onclick="onEmailSubmit();" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" id="send" value="Submit">
                                </div>
                                <div class="col-xs-2" id="loading" style="display: none;">
                                    <img src="images/loading.gif" style="max-height: 60px;max-width: 100px;">
                                </div>
                                <div class="col-xs-7"></div>
                            </div>
                            <div style="margin-bottom: 150px;"></div>
                            
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo.png" alt="Asentus Logo">
                    </div>
                    <div class="col-xs-6 text-right" style="margin-top:10px;">
                        <p class="margin-b-0"><a class="color-base fweight-700" target="_blank" href="https://wce.acm.org/">WCE ACM Student Chapter</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->