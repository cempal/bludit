<h2 class="title"><i class="fa fa-adjust"></i><?php $Language->p('Themes') ?></h2>

<?php
	foreach($themes as $theme)
	{
		$installedCSS = '';
		if($theme['dirname']==$Site->theme()) {
			$installedCSS = 'themeBoxInstalled';
		}

		echo '<div class="themeBox '.$installedCSS.'">';

		echo '<p class="name">'.$theme['name'].'</p>';
		echo '<p>'.$theme['description'].'</p>';
		echo '<span class="version">'.$Language->g('Version').': '.$theme['version'].'</span><span class="author">'.$Language->g('author').': <a targe="_blank" href="'.$theme['website'].'">'.$theme['author'].'</a></span>';

		if($theme['dirname']!=$Site->theme()) {
			echo '<a href="'.HTML_PATH_ADMIN_ROOT.'install-theme/'.$theme['dirname'].'" class="btn btn-red btn-smaller">'.$Language->g('Install theme').'</a>';
		}

		echo '</div>';
	}

?>