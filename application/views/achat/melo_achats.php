<?php
    $session_id = $this->session->userdata('uid');
    $uid = (empty($session_id)) ? '' : $session_id;
    $uid_visit = (empty($infos_profile)) ? $session_id : $infos_profile->id;
    $login = (empty($infos_profile)) ? $this->session->userdata('login') : $infos_profile->login;
?>

<div id="contentAll">
    <div id="breadcrumbs">
        <ul>
            <li><a href="<?php print site_url('home/' . $uid); ?>">Accueil</a></li>
            <li><a href="<?php print site_url('my-wall/' . $uid_visit); ?>">Mon compte</a></li>
            <li><a href="<?php print site_url($this->uri->segment(1) . '/' . $uid_visit); ?>">Mes achats</a></li>
        </ul>
    </div>
  
    <div id="cover" style="background-image:url(<?php print files('profiles/'.$cover = (empty($infos_profile)) ? $this->session->userdata('cover') : $infos_profile->cover); ?>);">
        <div id="infos-cover">
            <h2><?php print $login; ?></h2>
            <a href="#"><span class="button_left"></span><span class="button_center">Suivre</span><span class="button_right"></span></a>
        </div>
    </div>

    <div id="stats-cover">
        <div class="stats_cover_block">
            <span class="stats_number">489</span>
            <span class="stats_title">écoutes</span>
        </div>

        <div class="stats_cover_block">
            <span class="stats_number">18</span>
            <span class="stats_title">playlists</span>
        </div>

        <div class="stats_cover_block">
            <span class="stats_number">278</span>
            <span class="stats_title">abonnements</span>
        </div>
    </div>

    <div class="content">
        <h2>Mes achats</h2>
        <div class="panier">
            <div class="descri_panier">
                <span class="nom_pl">Mon panier</span>
                <span class="detail_pl"><?php if (isset($total_document_panier)) {
    if ($total_document_panier == 1) {
        echo $total_document_panier . ' partition';
    } if ($total_document_panier > 1) {
        echo $total_document_panier . ' partitions';
    }
} else {
    echo '0 partition';
} ?></span>
                <span class="detail_pl"><?php if (isset($total_album_panier)) {
    if ($total_album_panier == 1) {
        echo $total_album_panier . ' album';
    } if ($total_album_panier > 1) {
        echo $total_album_panier . ' albums';
    }
} else {
    echo '0 album';
} ?></span>
                <span class="detail_pl"><?php if (isset($total_morceaux_panier)) {
    if ($total_morceaux_panier == 1) {
        echo $total_morceaux_panier . ' chanson';
    } if ($total_morceaux_panier > 1) {
        echo $total_morceaux_panier . ' chansons';
    }
} else {
    echo '0 chanson';
} ?> </span>
                <img src="<?php echo img_url('common/caddis_achat.png'); ?>" class="detail_pl"/>
            </div>
            <hr />
            <div class="clear"></div>
            <div class="en_tete">
                <table>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre">Titre</td>
                        <td class="artiste">Artiste</td>
                        <td class="type">Type</td>
                        <td class="prix">Prix</td>
                    </tr>
                </table>
            </div>
            <form>

                <div class="titres">
                    <table>
<?php foreach ($cmd as $commande):
    if ($commande->status == "P"):
        ?>

                                <tr>
                                    <td class="check">
                                        <input type="checkbox" class="check_all">
                                        <label>
                                            <span></span></label></td>
                                    <td class="le_titre">
                                        <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
        <?php echo $commande->nom ?>
                                    </td>
                                    <td class="artiste"><?php echo $commande->user_login ?></td>
                                    <td class="type"><?php echo $commande->type ?></td>
                                    <td class="prix"><?php echo $commande->prix ?> €</td>
                                </tr>
                                </form>
        <?php
    endif;
endforeach;
?>
                    </table>
                    <div class="clear"></div>
                </div>
                <p class="total_panier">Montant total <span>10,00€</span></p>
                <div class="clear"></div>
                <a class="bigiframe" href="<?php echo site_url('pi_ta_infos/index/'.$infos_profile->id) ?>"><input type="button" value="Paiement sécurisé" class="cadis_panier"></a>
                <input type="button" value="Supprimer" class="bt_supp_playlist">
                </div>

                <div class="clear"></div>
                <div class="historique">
                    <div class="descri_historique">
                        <span class="nom_pl">Historique d'achats</span>
                        <span class="detail_pl"><?php if (isset($total_document_history)) {
    if ($total_document_history == 1) {
        echo $total_document_history . ' partition';
    } if ($total_document_history > 1) {
        echo $total_document_history . ' partitions';
    }
} else {
    echo '0 partition';
} ?></span>
                        <span class="detail_pl"><?php if (isset($total_album_history)) {
                                if ($total_album_history == 1) {
                                    echo $total_album_history . ' album';
                                } if ($total_album_history > 1) {
                                    echo $total_album_history . ' albums';
                                }
                            } else {
                                echo '0 album';
                            } ?></span>
                        <span class="detail_pl"><?php if (isset($total_morceaux_history)) {
                                if ($total_morceaux_history == 1) {
                                    echo $total_morceaux_history . ' chanson';
                                } if ($total_morceaux_history > 1) {
                                    echo $total_morceaux_history . ' chansons';
                                }
                            } else {
                                echo '0 chanson';
                            } ?> </span>
                        <img src="<?php echo img_url('common/sac_historique.png'); ?>" class="detail_pl"/>
                    </div>
                    <hr />
                    <div class="clear"></div>
                    <div class="en_tete">
                        <table>
                            <tr>
                                <td class="check"><input type="checkbox"></td>
                                <td class="le_titre">Titre</td>
                                <td class="artiste">Artiste</td>
                                <td class="type">Type</td>
                                <td class="prix">Télécharger</td>
                            </tr>
                        </table>
                    </div>
                    <div class="titres">
                        <table>
<?php foreach ($cmd as $commande):
    if ($commande->status == "V"):
        ?>

                                    <tr>
                                        <td class="check"><input type="checkbox"></td>
                                        <td class="le_titre">
                                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
        <?php echo $commande->nom ?>
                                        </td>
                                        <td class="artiste"><?php echo $commande->user_login ?></td>
                                        <td class="type"><?php echo $commande->type ?></td>
                                        <td class="prix"></td>
                                    </tr>

        <?php
    endif;
endforeach;
?>

                        </table>
                        <div class="clear"></div>
                    </div>
                    <input type="button" value="Télécharger" class="telecharge_select">
                </div>




        </div>

<?php if (isset($sidebar_right)) echo $sidebar_right; ?>

    </div>