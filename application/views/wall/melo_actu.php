<div id="contentAll">

  <div id="breadcrumbs">
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Artistes</a></li>
      <li><a href="#">Bob Dylan</a></li>
      <li><a href="#">Fil d'actualité</a></li>
    </ul>
  </div>

  <div id="cover">
    <div id="infos-cover">
      <h2>Bob Dylan</h2>
    </div>
  </div>

  <div id="stats-cover_melo">
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
    <div class="artist_post simple_message">
      
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Bienvenue sur mon espace Slyset ! Découvrez mes derniers morceaux, mes prochains concerts, mes dernières actualités et photos !</p>
      </div>
      <div class="bottom">
        <span class="infos_publi">Bob Dylan - Le 26 Septembre 2013</span>
      </div>
    </div>

    <div class="artist_post photo_message">
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Je viens d’ajouter une photo à <a href="#">mon album “Tournée 2013”</a></p>
        <img src="<?php echo img_url('common/post_photo.jpg'); ?>" alt="Photo message" class="single" />
      </div>
      <div class="bottom">
        <span class="infos_publi">Bob Dylan - Le 26 Septembre 2013</span>
      </div>
    </div>



    <div class="artist_post photo_message">
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Je viens d’ajouter 3 photos à <a href="#">mon album “Souvenirs, souvenirs”</a></p>
        <img src="<?php echo img_url('common/post_ajout_photo1.jpg'); ?>" alt="Photo message" class="mosaic first" />
        <img src="<?php echo img_url('common/post_ajout_photo2.jpg'); ?>" alt="Photo message" class="mosaic" />
        <img src="<?php echo img_url('common/post_ajout_photo3.jpg'); ?>" alt="Photo message" class="mosaic last" />
      </div>
      <div class="bottom">
        <span class="infos_publi">Bob Dylan - Le 21 Septembre 2013</span>
      </div>
    </div>

    <div class="artist_post article">
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Découvrez la chronique de mon dernier album !</p>

        <div class="post_article">
          <img src="<?php echo img_url('common/article_photo.jpg'); ?>" alt="Photo d'interview" />

          <a href="#">Dylan toujours à flots après la tempête</a>
          <p>Bob Dylan revient en pleine lumière avec une collection de ballades country-blues-jazz crépusculaires. Tirés par la swinguante locomotive Duquesne Whistle...</p>
        </div>
      </div>
      <div class="bottom">
        <span class="infos_publi">Jim Morisson - Le 24 Septembre 2013</span>
      </div>
    </div>

    <div class="artist_post news_song">
      <div class="top">
        <a href="#"><img src="<?php echo img_url('musicien/btn_suppr.png'); ?>" alt="Suppression" /></a>
      </div>
      <div class="left">
        <img src="<?php echo img_url('sidebar-left/photo-profil.png'); ?>" alt="Photo Profil" />
      </div>
      <div class="right">
        <span class="ico_citation"></span>
        <p class="msg_post">Je viens d’ajouter 2 nouveaux morceaux à <a href="#">ma musique</a></p>

        <div class="new_songs">
          <a href="#"><span class="btn_play"></span>Pretty Pegy</a>
          <a href="#"><span class="btn_play"></span>Hard Times in New York Town</a>
        </div>
      </div>
      <div class="bottom">
        <span class="infos_publi">Jim Morisson - Le 24 Septembre 2013</span>
      </div>
    </div>
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