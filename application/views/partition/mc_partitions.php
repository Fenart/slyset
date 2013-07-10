<?php
$session_id = $this->session->userdata('uid');
$uid = (empty($session_id)) ? '' : $session_id;
$uid_visit = (empty($infos_profile)) ? $session_id : $infos_profile->id;
$login = (empty($infos_profile)) ? $this->session->userdata('login') : $infos_profile->login;


?>
<div id="contentAll">
    <div id="breadcrumbs">
        <ul>
            <li><a href="<?php echo site_url('home/' . $uid); ?>">Accueil</a></li>
            <li><a href="<?php echo site_url('actualite/' . $uid_visit); ?>"><?php echo 'Artiste : ' . $login; ?></a></li>
            <li><a href="<?php echo site_url($this->uri->segment(1) . '/' . $uid_visit); ?>">Documents</a></li>
        </ul>
    </div>

  <div id="cover" style="background-image:url(<?php print files('profiles/'.$cover = (empty($infos_profile)) ? $this->session->userdata('cover') : $infos_profile->cover); ?>);">
    <div id="infos-cover">
          <h2><?php print $login = (empty($infos_profile)) ? $this->session->userdata('login') : $infos_profile->login; ?></h2>
    <?php 
     		if($infos_profile->type==2&&substr_count($community_follower,$infos_profile->id)==0):?>
      			<a href="#" class="add-follow" id="<?php echo $this->uri->segment(2)?>"><span class="button_left"></span><span class="button_center">Suivre</span><span class="button_right"></span></a>
   			<?php endif;
    		if($infos_profile->type==2&&substr_count($community_follower,$infos_profile->id)>0):?>
     			<a href="#" class="delete-follow" id="<?php echo $this->uri->segment(2)?>"><span class="button_left_abonne"></span><span class="button_center_abonne">Ne plus suivre</span><span class="button_right_abonne"></span></a>
    		<?php endif;?>
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
    <div class="bts_noir_partition">
	  <div class="bt_noir">
		<a class="iframe" href="<?php echo base_url('index.php/document/new-lyrics/') ?>"><span class="bt_left"></span><span class="bt_middle">Ajouter des paroles</span><span class="bt_right"></span></a>
	  </div>
	  <div class="bt_noir">
		<a class="iframe" href="<?php echo base_url('index.php/document/new-score/') ?>"><span class="bt_left"></span><span class="bt_middle">Ajouter une partition</span><span class="bt_right"></span></a>
	  </div>
	</div>

  <div class="content">
	<h2>Partitions, livrets et paroles de <?php echo $login; ?></h2>
  <?php if(!empty($get_morc)): ?>
	<?php foreach($get_doc as $doc): 
	//if($doc->type == 2): 
	?>
	<div class="a_la_une">
	<?php if($doc->img_cover!=null){ ?>
		<img src="<?php echo files($infos_profile->id.'/albums/'.$doc->Albums_id.'/'.$doc->img_cover) ?>"/>
		<?php }
		else
		{
		echo 'path image defaut';
		} ?>
		<div class="infos">
			<p class="title"><?php echo $doc->nom ?></p>
			<p class="annee_crea"><?php if(isset($doc->annee))echo $doc->annee ?></p>
			<?php if($doc->livret_path != null){ ?>
			<p><span>> </span><a href="<?php echo base_url('files/'.$infos_profile->id.'/documents/'.$doc->Albums_id.'/'.$doc->livret_path) ?>">Voir le livret d'album</a></p>
			<p><span>> </span><a href="#">Modifier le livret</a></p>
			<?php }
			else {?>
			<p><span>> </span><a class="iframe" href="<?php echo base_url('index.php/document/new-livret/') ?>">Ajouter le livret</a></p>
			<?php } ?>
		</div>
	</div>
	<div class="top_partition">
		<div>
			<a href="#">
				<img src="<?php echo img_url('musicien/player_top2.png'); ?>"/>
				<p> Ecouter l'album</p>
			</a>
		</div>
		<div class="liste_partitions">
			<div class="en_tete">
				<table>
				
					 <tbody>
                      
					<tr class="tab-head odd row-color-2">
                               <!-- <th class="article-checkbox checkbox-style2">
                                	<input type="checkbox" name="article-all" value="all" class="check_all checkbox-article" id="article-all">
                                		<label for="article-all">
                                		
                                		</label>
                                		</th>-->
                                <th class="article-title">Titre  de la chanson<span id="titre" class="filter filter-bottom"></span></th>
                                <th class="article-artiste">Paroles<span id="titre" class="filter filter-bottom"></span></th>
                                <th class="article-type">Partition<span id="titre" class="filter filter-bottom"></span></th>
                              <!--  <th class="article-prix">Prix<span id="created" class="filter filter-bottom"></span></th> -->
                            </tr>
				
			</div>
			<div class="titres">
				 
					
				<?php 
				foreach($get_morc as $morceau):
				
				if($morceau->Albums_id == $doc->Albums_id):
										

?>
<tr>
						<td class="le_titre">
							<p>		
								<?php 	echo $morceau->nom;?>
							</p>
						</td>
					<?php	
					$b = 0;
					
					
					
						foreach($all_morc as $morc=>$a):
												

							if($morceau->id == $a->morceaux_id):
							$b ++;
							
							
			
				?>
			
								<td class="paroles"><a href="<?php echo files($infos_profile->id.'/documents/'.$doc->Albums_id.'/'.$a->path) ?>">Voir</a>
									<div class="miniat_titre">
										<a href="#" class="edit"><span>edit</span></a>
									</div>
								</td>	
						
							<?php
						if($b > 2)
							{ break;
							}	
					
							
					endif;
					endforeach;
						
					if($b < 2)
							{ ?>
							<td class="paroles"><a href="<?php echo files($infos_profile->id.'/documents/'.$doc->Albums_id.'/'.$a->path) ?>">-</a>
									<div class="miniat_titre">
										<a href="#" class="edit"><span>-</span></a>
									</div>
								</td>
						<?php	}

?>
					</tr>
					<?php  
									endif; 
									endforeach;?>
					
				
				</table>
			</div>
		</div>
	</div>
	<hr />




	<?php	endforeach; ?>
    <?php else: ?>
        <div class="text-empty"><?php echo $login; ?> n'a ajouté aucune paroles, livret ou partition.</div>
  <?php endif; ?>
	
	<!--
	<div class="a_la_une">
		<img src="<?php echo img_url('musicien/logo_slyset_partition.png'); ?>"/>
		<div class="infos">
			<p class="title">Tempest</p>
			<p class="annee_crea">2012</p>
			<p><span>> </span><a href="#">Ajouter le livret</a></p>
		</div>
	</div>
	<div class="top_partition">
		<div>
			<a href="#">
				<img src="<?php echo img_url('musicien/player_top2.png'); ?>"/>
				<p> Ecouter l'album</p>
			</a>
		</div>
		<div class="liste_partitions">
			<div class="en_tete">
				<table>
					<tr>
						<td class="le_titre">Titre de la chanson</td>
						<td class="paroles">Paroles</td>
						<td class="partitions">Partitions</td>
					</tr>
				</table>
			</div>
			<div class="titres">
				<table>
					<tr>
						<td class="le_titre">
							<p> Rainy Day Women </p>
						</td>
						<td class="paroles"><a href="#">Voir</a>
							<div class="miniat_titre">
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
						<td class="partitions">
							Acheter
							<div class="miniat_titre">
								<a href="#" class="cadis"><span>cadis</span></a>
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="le_titre">
							<p> Hurricane </p>
						</td>
						<td class="paroles"><a href="#">Voir</a>
							<div class="miniat_titre">
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
						<td class="partitions">
							Acheter
							<div class="miniat_titre">
								<a href="#" class="cadis"><span>cadis</span></a>
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="le_titre">
							<p> I Want You </p>
						</td>
						<td class="paroles"><a href="#">Voir</a>
							<div class="miniat_titre">
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
						<td class="partitions">
							Acheter
							<div class="miniat_titre">
								<a href="#" class="cadis"><span>cadis</span></a>
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="le_titre">
							<p> I Want You </p>
						</td>
						<td class="paroles"><a href="#">Voir</a>
							<div class="miniat_titre">
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
						<td class="partitions">
							Acheter
							<div class="miniat_titre">
								<a href="#" class="cadis"><span>cadis</span></a>
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="le_titre">
							<p> I Want You </p>
						</td>
						<td class="paroles"><a href="#">Voir</a>
							<div class="miniat_titre">
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
						<td class="partitions">
							Acheter
							<div class="miniat_titre">
								<a href="#" class="cadis"><span>cadis</span></a>
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="le_titre">
							<p> I Want You </p>
						</td>
						<td class="paroles"><a href="#">Voir</a>
							<div class="miniat_titre">
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
						<td class="partitions">
							Acheter
							<div class="miniat_titre">
								<a href="#" class="cadis"><span>cadis</span></a>
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
					</tr>
					<tr>
						<td class="le_titre">
							<p> I Want You </p>
						</td>
						<td class="paroles"><a href="#">Voir</a>
							<div class="miniat_titre">
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
						<td class="partitions">
							Acheter
							<div class="miniat_titre">
								<a href="#" class="cadis"><span>cadis</span></a>
								<a href="#" class="edit"><span>edit</span></a>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
 -->
  </div>

  <?php if(isset($sidebar_right)) echo $sidebar_right; ?>

</div>