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
            <li><a href="<?php echo site_url($this->uri->segment(1) . '/' . $uid_visit); ?>">Statistiques</a></li>
        </ul>
    </div>

    <div id="cover" style="background-image:url(<?php echo files('profiles/' . $cover = (empty($infos_profile)) ? $this->session->userdata('cover') : $infos_profile->cover); ?>);">
        <div id="infos-cover">
            <h2><?php echo $login; ?></h2>
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

  <div class="content">
	<h2>Statistiques</h2>
	<div class="stats_carre">
		<div class="abonnes"><span>&nbsp;489</span></div>
		<div class="visites"><span>5128</span></div>
		<div class="vues"><span>9489</span></div>
		<div class="ventes"><span>&nbsp;512</span></div>
	</div>
	<div class="clear"></div>
	<div class="visites_quotidiennes">
		<span>Nombre de visistes quotidiennes</span>
		<div class="legende"><div class="visites"></div><span>Visites</span><div class="unique"></div><span>Visites Uniques</span></div>
		<div class="clear"></div>
		<div class="graph_stats">
		</div>
	</div>
	<div class="provenance">
		<span>D'où viennent vos visiteurs ?</span>
		<div class="graph">
			<div class="stats">
				<div class="portail"><span>30%</span></div>
				<div class="google"><span>40%</span></div>
				<div class="site"><span>15%</span></div>
				<div class="autre"><span>15%</span></div>
			</div>
			<div class="cercle">
			</div>
		</div>
	</div>
	<div class="vente">
		<span>Vos ventes</span>
		<div class="resume_vente">
			<img src="<?php echo img_url('common/cadis.png'); ?>"/>
			<p class="nb_vente">512</p>
			<p class="titres_vendus">titres vendus</p>
			<div class="source">Revenus générés</div><div class="revenu">614,00€</div>
			<div class="source_detail">dont musiques</div><div class="revenu">600,00€</div>
			<div class="source_detail">dont documents</div><div class="revenu">14,00€</div>
			<div class="source">Acheteurs</div><div class="revenu">142</div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="ecoutes">
		<span>Détail des écoutes et des achats</span>
		<select>
			<option value="titre">titres</option>
			<option value="ecoutes">écoutes</option>
			<option value="achats">achats</option>
		</select>
		<div class="en_tete">
				<table>
					<tr>
						<td class="le_titre">Titre de la chanson</td>
						<td class="paroles">Ecoutes<span>ces 7 derniers jours</span></td>
						<td class="partitions">Achats<span>Depuis mise en ligne</span></td>
					</tr>
				</table>
			</div>
			<div class="titres">
				<table>
					<tr>
						<td class="le_titre">Rainy Day Women</td>
						<td class="paroles">419</td>
						<td class="partitions">118</td>
					</tr>
					<tr>
						<td class="le_titre">Rainy Day Women</td>
						<td class="paroles">419</td>
						<td class="partitions">118</td>
					</tr>
					<tr>
						<td class="le_titre">Rainy Day Women</td>
						<td class="paroles">419</td>
						<td class="partitions">118</td>
					</tr>
					<tr>
						<td class="le_titre">Rainy Day Women</td>
						<td class="paroles">419</td>
						<td class="partitions">118</td>
					</tr>
					<tr>
						<td class="le_titre">Rainy Day Women</td>
						<td class="paroles">419</td>
						<td class="partitions">118</td>
					</tr>
					<tr>
						<td class="le_titre">Rainy Day Women</td>
						<td class="paroles">419</td>
						<td class="partitions">118</td>
					</tr>
					<tr>
						<td class="le_titre">Rainy Day Women</td>
						<td class="paroles">419</td>
						<td class="partitions">118</td>
					</tr>
				</table>
			</div>
	</div>
  </div>

  <?php if(isset($sidebar_right)) echo $sidebar_right; ?>

</div>