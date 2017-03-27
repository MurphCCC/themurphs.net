								<?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'images/gallery/fulls/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
            	echo '
					<article>
									<a href="'.$file.'" class="image">
										<img src="images/gallery/fulls/'.$file.'" alt="" />
									</a>
									<div class="caption">
										<ul class="actions">
											<li><span class="button small">View</span></li>
										</ul>
									</div>

								</article>
            	';
                $i++;
        }
    }
?>
