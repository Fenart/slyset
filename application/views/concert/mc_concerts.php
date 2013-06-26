<div id="contentAll">
  <div id="breadcrumbs">
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Artistes</a></li>
      <li><a href="#"><?php print $login = (empty($infos_profile)) ? $this->session->userdata('login') : $infos_profile->login; ?></a></li>
      <li><a href="#">Fil d'actualité</a></li>
    </ul>
  </div>

  <div id="cover" style="background-image:url(<?php print files('profiles/'.$cover = (empty($infos_profile)) ? $this->session->userdata('cover') : $infos_profile->cover); ?>);">
    <div id="infos-cover">
          <h2><?php print $login = (empty($infos_profile)) ? $this->session->userdata('login') : $infos_profile->login; ?></h2>
      <a href="#"><span class="button_left"></span><span class="button_center">Suivre</span><span class="button_right"></span></a>
    </div>
  </div>

  <div id="stats-cover">
    <div class="stats_cover_block">
      <span class="stats_number">489</span>
      <span class="stats_title">abonnés</span>
    </div>

    <div class="stats_cover_block">
      <span class="stats_number">18</span>
      <span class="stats_title">albums</span>
    </div>

    <div class="stats_cover_block">
      <span class="stats_number">278</span>
      <span class="stats_title">morceaux</span>
    </div>
  </div>
  <div class="bt_ajout_concert">
   <?php $uid = $this->session->userdata('uid');
  	  		 if( $this->uri->segment(2) ==$this->session->userdata('uid')){ ?>

   <a class="iframe" href="<?php echo base_url('index.php/mc_concerts/ajouter_concert/'.$infos_profile->id)?>"> <img href="" src="<?php echo img_url('musicien/ajout_concert.png'); ?>" alt="ajout concert"/></a>
  <?php } 
  else
    		{
    		// y mettre les bouton des melomanes : suivre ect
    		}?>
  </div>

  <div class="content">
    <div id="btn_tmp">
       <a href="<?php echo base_url('index.php/mc_concerts/'.$infos_profile->id) ?>"><img src="<?php echo img_url('musicien/filtre_avenir.png'); ?>" alt="A venir"/></a>
       <a href="<?php echo base_url('index.php/mc_concerts/concert_passe/'.$infos_profile->id) ?>"><img src="<?php echo img_url('musicien/filtre_passe.png'); ?>" alt="Concert passé"/></a>
   </div>
    <h2>Les concerts de <?php echo $infos_profile->login; ?> &agrave; venir</h2>
   
     <!-- Boucle : tous les concerts pour un artiste -->
   	  <?php 
if($nbr_concert_par_artiste != 0)
   { 
   	   foreach($concert_all as $concert_unit): ?>
 		
  		<p id='<?php echo $concert_unit->id;?>' class="date-heure"><span><?php
		get_date($concert_unit->date,'complete');?> <?php if(isset($concert_unit->prix))echo ' - '.$concert_unit->prix.'&euro;'?></span>
		</p>
<?php
  		 if( $this->uri->segment(2) ==$this->session->userdata('uid')){ ?>
   		 <div class="edition">
   		 	<a class="iframe" href="<?php echo base_url('index.php/mc_concerts/modifier_concert/'.$infos_profile->id.'/'.$concert_unit->id.'/'.$concert_unit->Adresse_id );?>">
   		 	<span class="edit">editer</span>
   		 	</a>
   		 	<a class="iframe" href="<?php echo base_url('index.php/mc_concerts/suppression_concert/'.$infos_profile->id.'/'.$concert_unit->id.'/'.$concert_unit->Adresse_id );?>">
   		 	<span class="suppr">supprimer</span>
   		 	</a>
   		 </div>
   		<?php }?> <hr/>	 
   			 <div class="infos_concert">
      			 <div class="calendrier"><p class="mois"><?php
					get_date($concert_unit->date,'mois_trois');?></p><p class="jour"><?php
					get_date($concert_unit->date,'jour_texte');?></p></div>
     			 <p><?php echo $concert_unit->titre ?></p>
     			 <p><?php if(isset($concert_unit->seconde_partie)) echo '+ '.$concert_unit->seconde_partie ?></p>
    		 </div>
   			 <div class="adr_concert">
     	 		<img src="<?php echo img_url('musicien/localisation.png'); ?>" />
    	 		<p class="adr_lieu"><?php echo $concert_unit->salle ?></p>
      	 		<p class="adr_rue"><?php if(isset($concert_unit->numero_adresse,$concert_unit->voie_adresse))echo $concert_unit->numero_adresse." ".$concert_unit->voie_adresse ?> <!--Bis Rue de Bagnolet--></p>
      			 <p class="adr_ville"><?php echo $concert_unit->ville.", ".$concert_unit->pays ?></p>
   		 	</div>
   		 <a href="javascript:void(0);" class="more" id="more_<?php echo $concert_unit->id ?>" onclick='showInfo(more_<?php echo $concert_unit->id ?>,more_info_<?php echo $concert_unit->id ?>)' >Voir plus d'informations</a>
    	    	<div id="concert_activity>">

    	<?php 
    	$count = substr_count($all_concert_act,$concert_unit->id.'/');
    	if ($count>=1)
    	{?>
    	    		<a id="<?php echo $concert_unit->id;?>" href="#" class="noparticiper"><span class="button_left"></span><span  class="button_center">Je n'y vais plus</span><span class="button_right"></span></a>

    	<?php
    	}
    	else{?>
    	    	 <a id="<?php echo $concert_unit->id;?>" href="#" class="participer"><span class="button_left"></span><span  class="button_center">J'y vais</span><span class="button_right"></span></a>

		<?php }
    	 ?> 
    	 </div>

  
    
    <div class="info_sup" id="more_info_<?php echo $concert_unit->id ?>" style="display:none">
      <div class="informations">
        <p class="nom_date"><?php echo $concert_unit->titre.',' ?> <!--le 28/11/13 &agrave; 20h30--></p>
        <p class="lieu_salle"><?php echo $concert_unit->salle.',' ?></p>
        <p class="lieu_rue"><?php if(isset($concert_unit->numero_adresse,$concert_unit->voie_adresse))echo $concert_unit->numero_adresse." ".$concert_unit->voie_adresse."," ?> </p>
        <p class="lieu_ville"><?php if(isset($concert_unit->code_postal))echo $concert_unit->code_postal." ".$concert_unit->ville;?></p>
        <p class="tel"><?php if (isset($concert_unit->phone_number)) echo "Tel. : ".$concert_unit->phone_number ;?> </p>
        <p class="site"><?php if (isset($concert_unit->website)) echo "Site web :<a href='.$concert_unit->website.'> ".$concert_unit->website."</a>" ;?></p>
        <p class="partager">partager l'&eacute;v&egrave;nement :</p>
        <div class="partage_reseaux">
          <a href="#"><span class="twitter">twitter</span></a>
          <a href="#"><span class="facebook">fb</span></a>
          <a href="#"><span class="google">g+</span></a>
        </div>
      </div>
      <div id="plan_google">
      </div>
    </div>
 <?php endforeach; 
 }
  else 
 {
 
 echo "Pas de concerts à venir pour ".$infos_profile->login;
// echo "Pas de concerts à venir pour ".$info_user[0]->{'login'};

 }
 ?>
  
   
  
     </div>

  <?php if(isset($sidebar_right)) echo $sidebar_right; ?>

  <div class="pagination">
    <a href="#" id="precedent"><span><</span></a>
    <a href="#" class="page">1</a>
    <a href="#" class="page">2</a>
    <a href="#" class="page">3</a>
    <a href="#" class="page">4</a>
    <a href="#" class="page">5</a>
    <a href="#" id="suivant"><span>></span></a>
  </div>
  
</div>