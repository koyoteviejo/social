<ul id="menudrop">
	<div class="icono"><img src="css/logosocial.png" onclick="location.href='inicio.php'"></div>
	<li><a href="inicio.php">Inicio</a></li>
	<li><a href="perfil.php">Perfil</a>
	</li>
	<li>
		<a href="albums.php">Albums</a>
		<ul>
			<li><a href="album.php?idalbum=subidas&amp;iduser=<?php echo $global_idusuarios; ?>">Subidas</a></li>
			<li><a href="album.php?idalbum=etiquetadas&amp;iduser=<?php echo $global_idusuarios; ?>">Etiquetadas</a></li>
			<?php
			$result=mysqli_query($link,"SELECT * FROM albums WHERE usuarios_idusuarios='".$global_idusuarios."'");
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					echo "<li><a href='album.php?idalbum=".$row['idalbums']."&amp;iduser=".$global_idusuarios."'>".$row['album']."</a></li>";
				}
			}
			?>
		</ul>
	</li>
	<li>
		<a href="mp.php?modo=recibidos">Mensajes</a>
		<ul>
			<li><a href="mp.php?modo=recibidos">Mensajes Recibidos</a></li>
			<li><a href="mp.php?modo=enviados">Mensajes Enviados</a></li>
			<li><a href="mp.php?modo=enviar">Escribir Mensajes</a></li>
		</ul>
	</li>
	<li><a href="gente.php">Gente</a></li>
	<li><a href="subir_fotos.php">Subir fotos</a></li>
	<li style="float:right;margin-right:10px;"><a href="logout.php">Salir</a></li>
	<li style="float:right;"><a href="ajustes.php">Ajustes</a></li>
</ul>