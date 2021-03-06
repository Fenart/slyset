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
            <li><a href="<?php echo site_url('my-wall/' . $uid_visit); ?>">Mon compte</a></li>
            <li><a href="<?php echo site_url($this->uri->segment(1) . '/' . $uid_visit); ?>">Mes playlists</a></li>
        </ul>
    </div>
  
    <div id="cover" style="background-image:url(<?php echo files('profiles/'.$cover = (empty($infos_profile)) ? $this->session->userdata('cover') : $infos_profile->cover); ?>);">
        <div id="infos-cover">
            <h2><?php echo $login; ?></h2>
            <!--
            <a href="#"><span class="button_left"></span><span class="button_center">Suivre</span><span class="button_right"></span></a>
     -->   </div>
    </div>

    <div id="stats-cover">
        <div class="stats_cover_block">
            <span class="stats_number">489</span>
            <span class="stats_title">écoutes</span>
        </div>

        <div class="stats_cover_block">
            <span class="stats_number">
            	<?php 
            	$npl = 0;
            	if(empty($playlists)!=1):
            	 	$npl =  count($playlists);
            	endif;
            	echo $npl;?>
            </span>
            <span class="stats_title">
            	<?php
            	if($npl == 0 || $npl == 1){
            		echo 'playlist';
            	}
            	else
            	{
            		echo 'playlists';
            	}
            	?>
            </span>
        </div>

        <div class="stats_cover_block">
            <span class="stats_number">
            	<?php
            	$nab = 0;
            	if(empty($all_follower)!=1):
            		$nab =  count($all_follower);
            	endif;
            	echo $nab;
            	 ?>
            </span>       
            <span class="stats_title">
            	<?php
            	if($nab == 0 || $nab == 1){
            		echo 'abonnement';
            	}
            	else
            	{
            		echo 'abonnements';
            	}
            	?>
            </span>
        </div>
    </div>

<!--
    <div class="content">
        <h2>Mes playlists</h2>
        <div class="playlist">
            <div class="visu_playlist">
                <img src="<?php echo img_url('common/visu_pl.png'); ?>"/>
            </div>
            <div class="descri_playlist">
                <span class="nom_pl">La bonne époque</span>
                <span class="detail_pl">12 chansons</span>
                <span class="detail_pl">3 artistes</span>
                <div class="edit">
                    <a href="#"><img src="<?php echo img_url('musicien/btn_edit.png'); ?>"/></a>
                    <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>"/></a>
                </div>
                <hr/>
                <div class="lecture_pl">
                    <img src="<?php echo img_url('musicien/player_top2.png'); ?>"/>
                    <span class="ecouter_pl">Ecouter toute la playlist</span>
                </div>
            </div>
            <div class="clear"></div>
            <div class="en_tete">
                <table>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre">Titre de la chanson</td>
                        <td class="artiste">Artiste</td>
                        <td class="album">Album</td>
                        <td class="duree">Durée</td>
                    </tr>
                </table>
            </div>
            <div class="titres">
                <table>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                </table>
                <input type="button" value="Acheter" class="cadis_pl">
                <input type="button" value="Supprimer" class="bt_supp_playlist">
            </div>
        </div>
        <hr />
        <div class="playlist">
            <div class="visu_playlist">
                <img src="<?php echo img_url('common/visu_pl.png'); ?>"/>
            </div>
            <div class="descri_playlist">
                <span class="nom_pl">La bonne époque</span>
                <span class="detail_pl">12 chansons</span>
                <span class="detail_pl">3 artistes</span>
                <div class="edit">
                    <a href="#"><img src="<?php echo img_url('musicien/btn_edit.png'); ?>"/></a>
                    <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>"/></a>
                </div>
                <hr/>
                <div class="lecture_pl">
                    <img src="<?php echo img_url('musicien/player_top2.png'); ?>"/>
                    <span class="ecouter_pl">Ecouter toute la playlist</span>
                </div>
            </div>
            <div class="clear"></div>
            <div class="en_tete">
                <table>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre">Titre de la chanson</td>
                        <td class="artiste">Artiste</td>
                        <td class="album">Album</td>
                        <td class="duree">Durée</td>
                    </tr>
                </table>
            </div>
            <div class="titres">
                <table>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                    <tr>
                        <td class="check"><input type="checkbox"></td>
                        <td class="le_titre" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
                            <img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
                            Rainy Day Women
                            <div class="miniat_titre">
                                <a href="#" class="cadis"><span>caddi</span></a>
                                <a href="#" class="coeur"><span>coeur</span></a>
                                <a href="#" class="cam"><span>cam</span></a>
                            </div>
                        </td>
                        <td class="artiste">Bob Dylan</td>
                        <td class="album">Blonde on blonde</td>
                        <td class="duree">4:19</td>
                    </tr>
                </table>
                <input type="button" value="Acheter" class="cadis_pl">
                <input type="button" value="Supprimer" class="bt_supp_playlist">
            </div>
        </div>
        <hr />
    </div>-->
  <div class="content">
	<h2>Mes playlists</h2>
	
	    <?php 
	    if(empty($playlists)!=1):
	    	foreach ($playlists as $playlist): ?>

				<div class="playlist">
				
					<div class="visu_playlist">
						<?php $cover = 'sidebar-right/default-photo-profil.png'; 
						if($playlist->img_cover != null)
						{ ?>
						<img src="<?php echo base_url('files/'.$playlist->user_alb.'/albums/'.str_replace(' ','_',$playlist->name_alb).'/'.$playlist->img_cover) ; ?>"/>
						<?php
						}
						else
						{
						?>
						<img src="<?php echo img_url($cover) ; ?>"/>
						<?php 
						}
						?>
						
					</div>
					<div class="descri_playlist">
					<form>
						<span class="nom_pl"><?php echo $playlist->nom?></span>
					</form>
						<span class="detail_pl"><?php echo $playlist->n_morceau;  if($playlist->n_morceau > 1){echo ' chansons';} else {echo ' chanson';} ?> </span>
						<span class="detail_pl"><?php echo $playlist ->n_artiste ;if($playlist->n_artiste > 1){echo ' artistes';} else {echo ' artiste';} ?></span>
						<div class="edit">
							<a class="edit-pl" href="javascript:void(0)"><img src="<?php echo img_url('musicien/btn_edit.png'); ?>"/></a>
			 				<a class='iframe' href="<?php echo base_url('index.php/my-playlists/delete/'.$playlist->nom)?>"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>"/></a>
						</div>
						<hr/>
						<div class="lecture_pl">
							<img src="<?php echo img_url('musicien/player_top2.png'); ?>"/>
							<a href="<?php echo site_url().'/mc_musique/player/'.$this->session->userdata('uid').'/playlist/'.$playlist->nom; ?>" class="open_player">
								<span class="ecouter_pl">Ecouter toute la playlist</span>
							</a>
						</div>
					</div>
					<div class="clear"></div>
					<div id="articles-tab">
						<form action="http://127.0.0.1/slyset/index.php/admin_articles/delete_multi_article" method="post" accept-charset="utf-8">          
							<table>
								<tbody>
									<tr class="tab-head odd row-color-2">
										<th class="article-checkbox checkbox-style2"><input type="checkbox" name="article-all" value="all" class="check_all checkbox-article" id="article-all"><label for="article-all"></label></th>
										<th class="article-title">Titre<span id="titre" class="filter filter-bottom"></span></th>
										<th class="article-artiste">Artiste<span id="titre" class="filter filter-bottom"></span></th>
										<th class="article-album">Album<span id="titre" class="filter filter-bottom"></span></th>
										<th class="article-duree">Durée<span id="created" class="filter filter-bottom"></span></th>
									</tr>
						
									<?php 
									foreach ($morceaux_playlist as $morceaux):
   										if($morceaux->nom == $playlist->nom ): ?>

											<tr class="even row-color-<?php echo $morceaux->Morceaux_id ?>" id='<?php echo $morceaux->Morceaux_id ?>'>
												<td class="article-checkbox checkbox-style2"><input type="checkbox" name="checkarticle[]" value="<?php echo $morceaux->Morceaux_id ?>" id="article-<?php echo $morceaux->Morceaux_id ?>" class="checkbox-article"><label for="article-<?php echo $morceaux->Morceaux_id ?>"></label></td>
												<td class="article-title" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
														<a href="<?php echo site_url().'/mc_musique/player/'.$this->session->userdata('uid').'/playlist/'.$playlist->nom.'/'.$morceaux->Morceaux_id; ?>" class="open_player">

															<img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
														</a>
													<?php echo $morceaux->title_track ?>
													<div class="miniat_titre">
														<!-- ICON CADIS / MISE PANIER -->
														<!-- FIN ICON CADIS / MISE PANIER -->
														<?php if(substr_count($all_panier,'/'.$morceaux->Morceaux_id.'/')==1)
														{?>
										
															<a href="javascript:void(0)" class="cadis_actif"></a>
												
														<?php }
														if(substr_count($all_panier,'/'.$morceaux->Morceaux_id.'/')==0)
	
														{	?>	
															<a href="javascript:void(0)" class="cadis"></a><?php
														}?>
															
														<!-- ICON COEUR / LIKE -->
														<?php if(substr_count($all_my_like,'/'.$morceaux->Morceaux_id.'/')==1)
														{?>
										
															<a href="javascript:void(0)" class="coeur_actif"></a>
												
														<?php }
														if(substr_count($all_my_like,'/'.$morceaux->Morceaux_id.'/')==0)
	
														{	?>	
															<a href="javascript:void(0)" class="coeur"></a><?php
														}?>
														<!-- FIN ICON COEUR / LIKE -->

														<!--<a href="#" class="cam"></a>-->
													</div>
												</td>
												<td class="article-artiste"><a href="<?php echo base_url('index.php/musique/'.$morceaux->user_id); ?>"><?php echo $morceaux->login ?></a></td>
												<td class="article-album"><a href="<?php echo base_url('index.php/musique/album/'.$morceaux->user_id.'/'.$morceaux->id_alb); ?>"><?php echo $morceaux->title_album ?></a></td>
									
												<td class="article-duree"><?php echo substr($morceaux->duree,10,9); ?></td>
											</tr>
										<?php endif;
      						 		endforeach;?>
							
								</tbody>
							</table>
							<input type="button" value="Acheter" class="cadis_pl">
                			<input type="button" value="Supprimer" class="bt_supp_playlist">
        
						</form>
					</div>
				</div>
				<hr />
			<?php endforeach;
		endif;
		if(empty($playlists)==1): ?>
			<p class="nopl">Vous n'avez aucunes playlists</p>
		<?php endif; ?>
		
	
	<!--
	<div class="playlist">
		<div class="visu_playlist">
			<img src="<?php echo img_url('common/visu_pl.png'); ?>"/>
		</div>
		<div class="descri_playlist">
			<span class="nom_pl">La bonne époque</span>
			<span class="detail_pl">12 chansons</span>
			<span class="detail_pl">3 artistes</span>
			<div class="edit">
			  <a href="#"><img src="<?php echo img_url('musicien/btn_edit.png'); ?>"/></a>
			  <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>"/></a>
			</div>
			<hr/>
			<div class="lecture_pl">
				<img src="<?php echo img_url('musicien/player_top2.png'); ?>"/>
				<span class="ecouter_pl">Ecouter toute la playlist</span>
			</div>
		</div>
		<div class="clear"></div>
		<div id="articles-tab">
			<form action="http://127.0.0.1/slyset/index.php/admin_articles/delete_multi_article" method="post" accept-charset="utf-8">          
				<table>
					<tbody>
						<tr class="tab-head odd row-color-2">
							<th class="article-checkbox checkbox-style2"><input type="checkbox" name="article-all" value="all" class="check_all checkbox-article" id="article-all"><label for="article-all"></label></th>
							<th class="article-title">Titre<span id="titre" class="filter filter-bottom"></span></th>
							<th class="article-artiste">Artiste<span id="titre" class="filter filter-bottom"></span></th>
							<th class="article-album">Album<span id="titre" class="filter filter-bottom"></span></th>
							<th class="article-duree">Durée<span id="created" class="filter filter-bottom"></span></th>
						</tr>
							<tr class="even row-color-1">
								<td class="article-checkbox checkbox-style2"><input type="checkbox" name="checkarticle[]" value="20" id="article-20" class="checkbox-article"><label for="article-20"></label></td>
								<td class="article-title" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
									<a href="#"><img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
									Rainy Winny
									<div class="miniat_titre">
										<a href="#" class="cadis"><span>caddi</span></a>
										<a href="#" class="coeur"><span>coeur</span></a>
										<a href="#" class="cam"><span>cam</span></a>
									</div>
								</td>
								<td class="article-artiste">Tom Tom</td>
								<td class="article-album">Et Nana</td>
								<td class="article-duree">2:51</td>
							</tr>
							<tr class="even row-color-2">
								<td class="article-checkbox checkbox-style2"><input type="checkbox" name="checkarticle[]" value="20" id="article-20" class="checkbox-article"><label for="article-20"></label></td>
								<td class="article-title" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
									<a href="#"><img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
									Rainy Winny
									<div class="miniat_titre">
										<a href="#" class="cadis"><span>caddi</span></a>
										<a href="#" class="coeur"><span>coeur</span></a>
										<a href="#" class="cam"><span>cam</span></a>
									</div>
								</td>
								<td class="article-artiste">Tom Tom</td>
								<td class="article-album">Et Nana</td>
								<td class="article-duree">2:51</td>
							</tr>
							<tr class="even row-color-1">
								<td class="article-checkbox checkbox-style2"><input type="checkbox" name="checkarticle[]" value="20" id="article-20" class="checkbox-article"><label for="article-20"></label></td>
								<td class="article-title" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
									<a href="#"><img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
									Rainy Winny
									<div class="miniat_titre">
										<a href="#" class="cadis"><span>caddi</span></a>
										<a href="#" class="coeur"><span>coeur</span></a>
										<a href="#" class="cam"><span>cam</span></a>
									</div>
								</td>
								<td class="article-artiste">Tom Tom</td>
								<td class="article-album">Et Nana</td>
								<td class="article-duree">2:51</td>
							</tr>
							<tr class="even row-color-2">
								<td class="article-checkbox checkbox-style2"><input type="checkbox" name="checkarticle[]" value="20" id="article-20" class="checkbox-article"><label for="article-20"></label></td>
								<td class="article-title" onMouseOver="this.id='select';bt_edit();" onMouseOut="cache_edit();this.id='';">
									<a href="#"><img src="<?php echo img_url('common/btn_play2.png'); ?>"/>
									Rainy Winny
									<div class="miniat_titre">
										<a href="#" class="cadis"><span>caddi</span></a>
										<a href="#" class="coeur"><span>coeur</span></a>
										<a href="#" class="cam"><span>cam</span></a>
									</div>
								</td>
								<td class="article-artiste">Tom Tom</td>
								<td class="article-album">Et Nana</td>
								<td class="article-duree">2:51</td>
							</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
	<hr />-->
	
	<div id="modal">
		<div id="content-info">
			<p>Le morceau a bien été ajouté au panier</p>

			<a href="javascript:void(0)" class="button_info green close"><img src="<?php echo base_url('/assets/images/validation_pi/tick.png')?>">OK</a>

		</div>
	</div>
	
		<div id="modal_already">
		<div id="content-info">
			<p class="morceau_panier_already"><p>
			<a href="javascript:void(0)" class="button green close"><img src="<?php echo base_url('/assets/images/validation_pi/tick.png')?>">OK</a>

		</div>
	</div>
	
  </div>

    <?php if (isset($sidebar_right)) echo $sidebar_right; ?>

</div>
