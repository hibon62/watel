<?php include('nav.php'); ?>

<!-- Main Container -->

<div class="container-fluid-kamn">
    <div class="row">
        <div>
            <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2525.4796575609935!2d1.5951653157415255!3d50.729591979514915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc2c6b22291d5d%3A0x91ab74b70fb3edc4!2s4+Boulevard+Sainte-Beuve%2C+62200+Boulogne-sur-Mer!5e0!3m2!1sfr!2sfr!4v1452091837320"></iframe>

            <br />
        </div>
        <div class="col-lg-4 col-lg-offset-1">
            <h4>Nous localiser:</h4>
            <p class="block-author"> Cabinet Watel EURL</p>
            <p>4 Boulevard Sainte-Beuve - Boulogne-sur-Mer</p>
            <p>Téléphone: 03.21.30.15.11</p>
            <p>Fax: 03.21.83.78.13</p>
            <em class="block-author">Email: watel.bernard@leclubauto.com </em> <br>
        </div>
        <div class="col-lg-5">
            <div class="feedback-form">
                <div id="contact-response"></div>
                <form name="form1" action="envoyer.php" method="post" id="contact-form">
                    <fieldset>
                        <div class="form-group form-group">
                            <label class="control-label" for="fullname">Nom *</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Entrer votre Nom">
                            </label>

                        </div>
                    <div class="form-group form-group-email">
                        <label class="control-label" for="email">E-Mail *</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Entrer votre E-Mail">
                    </div>
                    <div class="form-group form-group-email">
                        <label class="control-label" for="email">Téléphone *</label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Entrer votre numéro de téléphone">
                    </div>
                    <div class="form-group form-group-email">
                        <label class="control-label" for="email">Référence du dossier</label>
                        <input type="text" class="form-control" name="dossier" id="dossier" placeholder="ex : 20160005189">
                    </div>
                    <div class="form-group form-group-message">
                        <label class="control-label" for="message">Message *</label>
                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                    </div>           
                    <button type="submit" name="Submit" class="btn btn-primary">Envoyez</button>

                    </fieldset>
                </form>
        </div> 
    </div>
</div>
</div>    

<!--End Main Container -->


<?php include('footer.php'); ?>