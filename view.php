<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Lehe külastamise ajad</title>
    </head>
	
    <body>
		
        <h1 class="pealkiri">Sellel lehel kuvatakse lehe külastamise aegu</h1>
		
		<h2>Lehte on külastatud järgmistel aegadel: </h2>
		<table>
		<th>Külastamise aeg</th>
		<?php 
            foreach ( model_load() as $rida ): ?>
				<tr>
				    <td> 
                        <?= htmlspecialchars($rida['aeg']); ?>
                    </td>
                </tr>
        <?php endforeach; ?>
		</table>
    </body>
</html>
