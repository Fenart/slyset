<?php
$session_id = $this->session->userdata('uid');
$uid = (empty($session_id)) ? '' : $session_id;
$uid_visit = (empty($infos_profile)) ? $session_id : $infos_profile->id;
$login = (empty($infos_profile)) ? $this->session->userdata('login') : $infos_profile->login;
$loger = $this->session->userdata('logged_in'); 


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
     		if($loger==1&&$infos_profile->id != $session_id&&$infos_profile->type==2&&substr_count($community_follower,$infos_profile->id)==0): ?>
      			<a href="#" class="add-follow" id="<?php echo $infos_profile->id?>"><span class="button_left"></span><span class="button_center">Suivre</span><span class="button_right"></span></a>
   			<?php endif;
     		if($loger==1&&$infos_profile->id != $session_id&&($infos_profile->type==2)&&(substr_count($community_follower,$infos_profile->id)>0)): ?>
     			<a href="#" class="delete-follow" id="<?php echo $infos_profile->id?>"><span class="button_left_abonne"></span><span class="button_center_abonne">Ne plus suivre</span><span class="button_right_abonne"></span></a>
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
                <?php if ($infos_profile->id == $uid) { ?>

	  <div class="bt_noir">
		<a class="iframe" href="<?php echo base_url('index.php/document/new-lyrics/') ?>"><span class="bt_left"></span><span class="bt_middle">Ajouter des paroles</span><span class="bt_right"></span></a>
	  </div>
	  <div class="bt_noir">
		<a class="iframe" href="<?php echo base_url('index.php/document/new-score/') ?>"><span class="bt_left"></span><span class="bt_middle">Ajouter une partition</span><span class="bt_right"></span></a>
	  </div>
	  <?php } ?>
	</div>

  <div class="content">
	<h2>Partitions, livrets et paroles de <?php echo $login; ?></h2>
 
 
  <?php 
  foreach($get_album as $album):
  ?>

 		<div class="a_la_une_parti">
	<?php if($album->img_cover!=null){ ?>
		<img src="<?php echo files($infos_profile->id.'/albums/'.$album->id.'/'.$album->img_cover) ?>"/>
		<?php }
		else
		{ ?>
				<img src="<?php echo base_url('assets/images/musicien/logo_slyset_partition.png') ?>"/>
<?php
		} ?>
		<div class="infos">
			<p class="title"><?php echo $album->nom ?></p>
			<p class="annee_crea"><?php if(isset($album->annee))echo $album->annee ?></p>
			<?php if($album->livret_path != null){ ?>
			<p><span>> </span><a href="<?php echo base_url('files/'.$infos_profile->id.'/documents/'.$album->id.'/'.$album->livret_path) ?>">Voir le livret d'album</a></p>
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
                                <th class="article-artiste">Partition<span id="titre" class="filter filter-bottom"></span></th>
                                <th class="article-type">Paroles<span id="titre" class="filter filter-bottom"></span></th>
                              <!--  <th class="article-prix">Prix<span id="created" class="filter filter-bottom"></span></th> -->
                            </tr>
                            	 <?php 
  									foreach($all_morceau as $morceau):
		
										if($album->id == $morceau->albums_id): 
			
									?>
										<tr>
											<td class="le_titre" >
							<p>		
								<?php 	echo $morceau->nom;?>
							</p>
						</td>
						<?php
						$b = 0;

				  							foreach($all_doc_partition as $partition):
			
												if($morceau->id == $partition->morceau_id)
												{ 
													$b++;
													if($partition->prix == null):
													
									?>
													<td class="partitions"><a href="<?php echo files($infos_profile->id.'/documents/'.$partition->album_id.'/'.$partition->path) ?>">Voir</a>
																								<?php endif;
													if($partition->prix != null):
														?>
																	<td class="partitions" id="<?php echo $partition->prix ?>"><a id="<?php echo $partition->document_id ?>" class="mise-panier" href="javascript:void(0)">Acheter  (<?php echo $partition->prix ?> €)</a>
<?php endif; ?>
														<div class="miniat_titre">
															<a href="#" class="edit"><span>edit</span></a>
														</div>
													</td>
						
						
						<?php
												}
											endforeach;
											if($b == 0)
												{
	?>
													<td class="partitions"><a href="#"> - </a>
														<div class="miniat_titre">
															<a href="#" class="edit"><span> - </span></a>
														</div>
													</td>
								<?php				}
						?>	
						
						
											<?php
											$a = 0;

				  							foreach($all_doc_paroles as $paroles):
			
												if($morceau->id == $paroles->morceau_id)
												{ 
													$a++;
													if($paroles->prix == null):
									?>
													<td class="paroles"><a id="mise-panier" href="<?php echo files($infos_profile->id.'/documents/'.$paroles->album_id.'/'.$paroles->path) ?>">Voir</a>
														<?php endif;
													if($paroles->prix != null):
														?>
															<td class="paroles" id="<?php echo $paroles->prix ?>"><a id="<?php echo $paroles->document_id ?>" class='mise-panier' href="javascript:void(0)">Acheter (<?php echo $paroles->prix ?> €)</a>
<?php endif; ?>
														<div class="miniat_titre">
															<a href="#" class="edit"><span>edit</span></a>
														</div>
													</td>
						
						
						<?php
												}
											endforeach;
											if($a == 0)
												{
	?>
													<td class="paroles"><a href="#"> - </a>
														<div class="miniat_titre">
															<a href="#" class="edit"><span> - </span></a>
														</div>
													</td>
								<?php				}
								
						?>	
				<?php	
						endif;	
		endforeach;
					

				?>
			
	</tr>
	</tbody>
	</table>
			</div>
						</div>

			<div class="titres">	
			
					
		
 			 </div>
 			 </div>
		<hr />
		
		<?php endforeach; ?></div>

  <?php if(isset($sidebar_right)) echo $sidebar_right; ?>

</div>
