<div class="row">
    <div class="container">
        <div class="col-lg-12 modal fade" id="myModal">
            <div class="well bs-component modal-dialog" role="document">
                <form class="form-horizontal mondal-content" role="form" action="email" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <fieldset>
                        <legend>Contactez moi : </legend>
                        <div class="form-group">
                            <label id="inputNom" class="col-lg-2 control-label" for="inputNom">Nom</label>
                            <div class="col-lg-10">
                                <input id="name" name="name" class="form-control" type="text" placeholder="Nom">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" id="inputPrenom" for="inputPrenom">Prenom</label>
                            <div class="col-lg-10">
                                <input id="inputPrenom" name="prenom" class="form-control" type="text" placeholder="Prenom">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="inputEntreprise">Entreprise</label>
                            <div class="col-lg-10">
                                <input id="inputEntreprise" name="entreprise" class="form-control" type="text" placeholder="Entreprise">
                            </div>
                        </div>
                         <div class="form-group">
                           <label class="col-lg-2 control-label" id="inputSujet" for="inputSujet">Sujet : </label>
                            <select class="form-control" for="typeSujet" name="sujet">
                                <option>Recruteur</option>
                                <option>Proposition de projet</option>
                                <option>Question</option>
                                <option>Autres</option>
                             </select>
                        </div>
                        <div class="form-group">
                            <label id="contenuMail" class="col-lg-4 control-label" for="textArea">Votre message : </label>
                            <div class="col-lg-10">
                                <textarea id="textArea" name="message" class="form-control" rows="3"></textarea>
                                <span class="help-block">Ecrivez votre mail ci-dessus.</span>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-secondary">Envoyer</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
