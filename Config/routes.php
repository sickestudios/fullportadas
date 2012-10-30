<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'covers', 'action' => 'home'));
	//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	Router::connect(
		'/contactanos',
			array('controller' => 'mails', 'action' => 'add')
	);
			
	Router::connect(
		'/portadas/*',
			array('controller' => 'covers', 'action' => 'index')
	);
	
	Router::connect(
		'/:coverurl',
		array('controller' => 'covers', 'action' => 'view'),
		array('coverurl'=>'[0-9a-z-]+')
	);
	
	Router::parseExtensions('xml');
	// Redirecciones
	
	//Redirecciones Categor’as
	Router::redirect('/search/label/actores', '/portadas/actores', array('status' => 302)); 
	Router::redirect('/search/label/actrices', '/portadas/actrices', array('status' => 302)); 
	Router::redirect('/search/label/amor', '/portadas/amor', array('status' => 302));
	Router::redirect('/search/label/animales', '/portadas/animales', array('status' => 302));
	Router::redirect('/search/label/anime', '/portadas/anime', array('status' => 302));
	Router::redirect('/search/label/arte', '/portadas/arte', array('status' => 302));
	Router::redirect('/search/label/artistas', '/portadas/artistas', array('status' => 302));
	Router::redirect('/search/label/autos', '/portadas/autos', array('status' => 302));
	Router::redirect('/search/label/banderas', '/portadas/banderas', array('status' => 302));
	Router::redirect('/search/label/canciones', '/portadas/canciones', array('status' => 302));
	Router::redirect('/search/label/deportistas', '/portadas/deportistas', array('status' => 302));
	Router::redirect('/search/label/dibujos', '/portadas/dibujos', array('status' => 302));
	Router::redirect('/search/label/dj', '/portadas/dj', array('status' => 302));
	Router::redirect('/search/label/equipos', '/portadas/equipos', array('status' => 302));
	Router::redirect('/search/label/frases', '/portadas/frases', array('status' => 302));
	Router::redirect('/search/label/Hor—scopo', '/portadas/horoscopo', array('status' => 302));
	Router::redirect('/search/label/imagenes', '/portadas/imagenes', array('status' => 302));
	Router::redirect('/search/label/juegos', '/portadas/juegos', array('status' => 302));
	Router::redirect('/search/label/marcas', '/portadas/marcas', array('status' => 302));
	Router::redirect('/search/label/modelos', '/portadas/modelo', array('status' => 302));
	Router::redirect('/search/label/musica', '/portadas/musica', array('status' => 302));
	Router::redirect('/search/label/paisajes', '/portadas/paisajes', array('status' => 302));
	Router::redirect('/search/label/paises', '/portadas/paises', array('status' => 302));
	Router::redirect('/search/label/peliculas', '/portadas/peliculas', array('status' => 302));
	Router::redirect('/search/label/personas', '/portadas/personas', array('status' => 302));
	Router::redirect('/search/label/tv', '/portadas/tv', array('status' => 302));
	Router::redirect('/search/label/vectores', '/portadas/vectores', array('status' => 302));

	// Redirecciones Portadas
	Router::redirect('/2012/08/portada-facebook-chica-guns-n-roses.html', '/chica-guns-n-roses', array('status' => 302)); 
	Router::redirect('/2012/08/portada-facebook-guns-n-roses.html', '/guns-n-roses', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-reloj-numeros-romanos.html', '/reloj-de-numeros-romanos', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-drake.html', '/drake', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-lisa-ann.html', '/lisa-ann', array('status' => 302)); 	
	Router::redirect('/2012/07/portada-facebook-bebe-de-ojos-azules.html', '/bebe-de-ojos-azules', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-jennifer-lopez-jlo.html', '/jennifer-lopez-jlo', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-los-remstone.html', '/los-remstone', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-humo-de-colores.html', '/humo-de-colores', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-revolver-de-cigarros.html', '/revolver-de-cigarros', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-anticuchos-peruanos.html', '/anticuchos-peruanos', array('status' => 302)); 
	Router::redirect('/2012/07/ojos-caramelos-dulces-colores.html', '/ojos-con-caramelos-dulces-de-colores', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-cama-facebook.html', '/cama-facebook', array('status' => 302)); 
	Router::redirect('/2012/07/portada-ctrl-esc-control-mas-escape.html', '/ctrl-esc-control-mas-escape', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-fifa-12.html', '/fifa-12', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-facebook-pelotas.html', '/facebook-pelotas-futbol', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-rompe-corazones.html', '/rompe-corazones', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-chuck-norris.html', '/chuck-norris', array('status' => 302)); 
	Router::redirect('/2012/07/portada-boxeador-arrodillado-esquina.html', '/boxeador-arrodillado-en-la-esquina', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-disco-vinilo-rotor.html', '/disco-vinilo-roto', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-nemo.html', '/nemo', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-manos-en-concierto.html', '/manos-en-concierto', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-tiburon-tigre.html', '/tiburon-tigre', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-wallking-dead.html', '/the-wallking-dead', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-tragos-de-limon.html', '/tragos-de-limon', array('status' => 302)); 
	Router::redirect('/2012/07/portada-surf-de-nieve-snowboard.html', '/surf-de-nieve-snowboard', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-chicas-superpoderosas.html', '/chicas-superpoderosas', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-goku-super-saiyan.html', '/goku-super-saiyan', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-carabina-m4.html', '/carabina-m4', array('status' => 302)); 
	Router::redirect('/2012/07/portada-soldado-moder-warfare-ghost.html', '/soldado-moder-warfare-ghost', array('status' => 302)); 
	Router::redirect('/2012/07/hombre-musculoso-jakub-stefano.html', '/hombre-musculoso-jakub-stefano', array('status' => 302)); 
	Router::redirect('/2012/07/girls-generation-nombres-personajes.html', '/girls-generation-nombres-de-personajes', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-call-of-duty-black-ops.html', '/call-of-duty-black-ops', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-carrera-de-autos.html', '/carrera-de-autos', array('status' => 302)); 
	Router::redirect('/2012/07/portada-la-mujer-mas-bella-del-peru.html', '/la-mujer-mas-bella-del-peru', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-wolverine-x-men.html', '/wolverine-x-men', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-samurai.html', '/samurai', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-natalia-salas.html', '/natalia-salas', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-teclado-ibm.html', '/teclado-ibm', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-bmw.html', '/bmw', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-aston-martin.html', '/aston-martin', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-alfa-romeo-spyder.html', '/alfa-romeo-spyder', array('status' => 302)); 
	Router::redirect('/2012/07/portada-mitsubishi-lancer-evolution.html', '/mitsubishi-lancer-evolution', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-tic-tac-toe.html', '/tic-tac-toe', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-el-amor-vence-todo.html', '/el-amor-vence-a-todo', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-yo.html', '/yo', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-piedra-papel-y-tijera.html', '/piedra-papel-y-tijera', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-sueno-contigo.html', '/sueno-contigo', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-jason-viernes-13.html', '/jason-viernes-13', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-jason-en-un-bosque.html', '/jason-en-un-bosque', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-los-pitufos.html', '/los-pitufos', array('status' => 302)); 
	Router::redirect('/2012/07/el-sorprendente-hombre-arana-sentado.html', '/el-sorprendente-hombre-arana-sentado', array('status' => 302)); 
	Router::redirect('/2012/07/portada-el-sorprendente-hombre-arana.html', '/el-sorprendente-hombre-arana', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-gwen-stacy-emma-stone.html', '/gwen-stacy-emma-stone', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-andrew-garfield.html', '/andrew-garfield', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-garfield-lassana.html', '/garfield-disculpa-traes-lassana', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-britney-spears.html', '/britney-spears', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-shakira.html', '/shakira', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-rolling-stones.html', '/rolling-stones', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-aerosmith-logo.html', '/aerosmith-logo', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-guns-n-roses-logo.html', '/guns-n-roses-logo', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-concierto-de-rock.html', '/concierto-de-rock-dibujo', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-logo-guitar-hero.html', '/logo-guitar-hero-warriors-of-rock', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-musica-vida-gramafono.html', '/la-musica-es-vida-gramofono', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-king-of-pop.html', '/king-of-pop', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-bob-marley.html', '/bob-marley', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-slash-guns-n-roses.html', '/slash-guns-n-roses', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-lengua-rolling-stones.html', '/lengua-rolling-stones', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-lata-red-bull-hielo.html', '/lata-red-bull-hielo', array('status' => 302)); 
	Router::redirect('/2012/07/naranja-molestosa-annoying-orange.html', '/naranja-molestosa-annoying-orange', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-ben10.html', '/ben10', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-elmo.html', '/elmo', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-fiesta-san-fermin.html', '/fiesta-san-fermin-espana', array('status' => 302)); 
	Router::redirect('/2012/07/portada-facebook-porta.html', '/porta', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-johnnie-walker-keep.html', '/johnnie-walker-keep-walking', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-tornamesa-technics-de.html', '/tornamesa-technics-de-dj', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-backstreet-boys.html', '/backstreet-boys', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-violin-sobre.html', '/violin-sobre-partituras', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-nsync.html', '/n-sync', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-pulsaciones-del.html', '/pulsaciones-del-corazon', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bandera-republica.html', '/bandera-republica-checa', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-love-dogs-dog-lover.html', '/love-dogs-dog-lover', array('status' => 302)); 
	
	Router::redirect('/2012/07/mente-positiva-pensamientos-positivos.html', '/mente-positiva-pensamientos-positivos', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-marca-chile-logo.html', '/marca-chile-logo', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-marca-colombia-logo.html', '/marca-colombia-logo', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-marca-argentina-logo.html', '/marca-argentina-logo', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-marca-mexico-logo.html', '/marca-mexico-logo', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-catrinel-menghia.html', '/catrinel-menghia', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bandera-polonia-flag.html', '/bandera-polonia-flag', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bandera-australia-flag.html', '/bandera-australia-flag', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bandera-azerbaijan.html', '/bandera-azerbaijan-flag', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bandera-cuba-flag.html', '/bandera-cuba-flag', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bandera-turquia.html', '/bandera-turquia', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bandera-georgia-flag.html', '/bandera-georgia-flag', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bandera-hungria-flag.html', '/bandera-hungria-flag', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bandera-india-flag.html', '/bandera-india-flag', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-lineas-colores-rasta.html', '/lineas-colores-rasta', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-barbie.html', '/barbie', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-j-alvarez.html', '/j-alvarez', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-farruko-talento-del.html', '/farruko-talento-del-bloque', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-marilyn-manson.html', '/marilyn-manson', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bandera-panama-flag.html', '/bandera-panama-flag', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-big-band.html', '/big-band', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-one-direction.html', '/one-direction', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-uefa-euro-2012-logo.html', '/uefa-euro-2012-logo', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-michael-jackson-bad.html', '/michael-jackson-bad', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-lmfao-electro-pop-music.html', '/lmfao-electro-pop-music', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-porche-cayenne-gts.html', '/porche-cayenne-gts', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-horoscopo-chino-rata.html', '/horoscopo-chino-rata', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-nuevos-caminos-motos-en-puente.html', '/nuevos-caminos-motos-en-puente', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-ferrari-california.html', '/ferrari-california', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-chica-rock-vector.html', '/chica-rock-vector', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-pareja-en-el-campo-vector.html', '/pareja-en-el-campo-vector', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-billar-con-taco-de-cigarro.html', '/billar-con-taco-de-cigarro', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-marcas-populares.html', '/marcas-populares', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-soldado-battlefield-3.html', '/soldado-battlefield-3', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-homero-simpson-sofa.html', '/homero-simpson-sofa', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-paloma-blanca-paz-espiritu.html', '/paloma-blanca-paz-espiritu-santo', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-mariposa-posada-en.html', '/mariposa-posada-en-dedo', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-bote-anclado-orilla.html', '/bote-anclado-orilla-mar', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-oveja-en-la-guerra.html', '/oveja-en-la-guerra', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-explosion-nuclear.html', '/explosion-nuclear', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-salida-del-sol-espacio.html', '/salida-del-sol-espacio', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-abeja-3d.html', '/abeja-3d', array('status' => 302)); 
	
	Router::redirect('/2012/07/portada-facebook-chicas-3d-en-la-playa.html', '/chicas-3d-en-la-playa', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-tom-y-jerry-aspiradora.html', '/tom-y-jerry-aspiradora', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-south-park-pandemia.html', '/south-park-pandemia', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-masha-y-el-oso.html', '/masha-y-el-oso', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-simbolo-pi.html', '/simbolo-pi', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-letras-verano-en-el.html', '/letras-verano-en-el-mar', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-pelea-gatos.html', '/pelea-gatos', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-bruce-lee.html', '/bruce-lee', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-chica-ojo-azul.html', '/chica-ojo-azul', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-horrible-verdad-hombre-mujer.html', '/la-horrible-verdad-hombre-y-mujer', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-delfines-en-el-mar.html', '/delfines-en-el-mar', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-tostada-derrites-mi-corazon.html', '/tostada-derrites-mi-corazon', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-kirby.html', '/kirby', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-cookie-monster.html', '/cookie-monster', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-winnie-pooh.html', '/winnie-pooh', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-iconos.html', '/iconos', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-estoy-enamorada.html', '/estoy-enamorada', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-soy-un-angel.html', '/soy-un-angel', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-pensando-en-amor.html', '/pensando-en-amor', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-anonymous-logo.html', '/anonymous-logo', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-marca-peru-logo.html', '/marca-peru-logo', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-logo-gool.html', '/logo-gool', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-madagascar-3-disco.html', '/madagascar-3-disco', array('status' => 302)); 
	
	Router::redirect('/2012/06/ardilla-era-de-hielo-deriva-continental.html', '/ardilla-era-de-hielo-deriva-continental', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-dexter-michael-carlisle-hall.html', '/dexter-michael-carlisle-hall', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-papagayo-de-colores.html', '/papagayo-de-colores', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-gato-nunca-dejes-de-sonreir.html', '/gato-nunca-dejes-de-sonreir', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-hamster-con-audifonos.html', '/hamster-con-audifonos', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-meme-troll-tomando-cafe.html', '/meme-troll-tomando-cafe', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-labios-con-sangre.html', '/labios-con-sangre', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-lamborghini-rojo-lluvia.html', '/lamborghini-rojo-en-la-lluvia', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-olivia-wilde.html', '/olivia-wilde', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-ultima-cena-nintendo-y.html', '/ultima-cena-nintendo-y-sega', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-windows-logo.html', '/windows-logo', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-pokebolas-pokemon.html', '/pokebolas-pokemon', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-love-fuego.html', '/love-fuego', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-cual-es-tu-iboob.html', '/cual-es-tu-iboob', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-dragon-vector-azul.html', '/dragon-vector-azul', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-calavera-dj-audifonos.html', '/calavera-dj-audifonos', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-emma-watson.html', '/emma-watson', array('status' => 302)); 
	
	Router::redirect('/2012/06/caballo-team-liquid-logo.html', '/caballo-team-liquid-logo', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-robot-hallo.html', '/robot-hallo', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-gotas-de-colores.html', '/gotas-de-colores', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-bosque-oscuro.html', '/bosque-oscuro', array('status' => 302)); 
	
	Router::redirect('/2012/06/chica-anime-computadora.html', '/chica-anime-en-computadora', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-adolescencia.html', '/adolescencia', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-tego-calderon.html', '/tego-calderon', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-pareja-de-huevos.html', '/pareja-de-huevos', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-don-omar.html', '/don-omar', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-winsin-y-yandel.html', '/winsin-y-yandel', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-yankees-logo.html', '/yankees-logo', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-llegamos-la-disco.html', '/llegamos-a-la-disco', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-nuvo-vector.html', '/nuvo-vector', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-botellas-nuvo.html', '/botellas-nuvo', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-logo-nuvo.html', '/logo-nuvo', array('status' => 302)); 
	
	Router::redirect('/2012/06/portadas-facebook-feliz-del-padre.html', '/feliz-del-padre', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-bugs-bunny.html', '/bugs-bunny', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-tarjeta-amarilla.html', '/tarjeta-amarilla', array('status' => 302)); 
	
	Router::redirect('/2012/06/mikumikudance-moe-glados-portal.html', '/mikumikudance-moe-glados-portal', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-esto-es-quimica-hombres.html', '/esto-es-quimica-para-hombres', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-esto-es-quimica-mujeres.html', '/esto-es-quimica-para-mujeres', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-tilsa-lozano.html', '/tilsa-lozano', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-giannina-lujan.html', '/giannina-lujan', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-maricris-rubio.html', '/maricris-rubio', array('status' => 302)); 
	
	Router::redirect('/2012/06/dibujo-pareja-regalando-corazon.html', '/dibujo-pareja-regalando-corazon', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-bailarin-efectos.html', '/bailarin-efectos-colores', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-battlefield-russian.html', '/battlefield-the-russian', array('status' => 302)); 
	
	Router::redirect('/2012/06/megatron-vs-optimus-prime.html', '/megatron-vs-optimus-prime', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-gorillaz.html', '/gorillaz', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-calavera-poker.html', '/calavera-poker', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-moto-yamaha.html', '/moto-yamaha', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-corazon-efectos.html', '/corazon-efectos-colores', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-yao-ming-meme.html', '/yao-ming-meme', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-lapices-de-colores.html', '/lapices-de-colores', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-audition-pareja.html', '/audition-pareja', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-pareja-audition.html', '/pareja-audition-corazon', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-chicas-audition.html', '/chicas-audition', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-chica-angel-audition.html', '/chica-angel-audition', array('status' => 302)); 
	
	Router::redirect('/2012/06/resident-evil-alice-abernathy.html', '/resident-evil-alice-abernathy', array('status' => 302)); 
	
	Router::redirect('/2012/06/champagne-copas-rosas-sobre-cama.html', '/champagne-copas-rosas-sobre-cama', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-beso-pareja-arena.html', '/beso-pareja-arena', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-globos-de-corazones.html', '/globos-de-corazones', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-corazon-fosforos.html', '/corazon-fosforos', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-depredador-vs-alien.html', '/depredador-vs-alien', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-corazon-hielo.html', '/corazon-hielo', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-corazon-rojo-cristal.html', '/corazon-rojo-cristal', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-diablo-vs-jesus.html', '/diablo-vs-jesus', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-zombies.html', '/zombies', array('status' => 302)); 
	
	Router::redirect('/2012/06/portada-facebook-max-payne-3-disparando.html', '/max-payne-3-disparando', array('status' => 302)); 
	
	Router::redirect('/2012/06/max-payne-3-con-escopeta.html', '/max-payne-3-con-escopeta', array('status' => 302)); 
	
	Router::redirect('/2012/05/manchester-unite-bandera.html', '/manchester-unite-bandera', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-manchester-unite-logo.html', '/manchester-unite-logo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-kun-aguero.html', '/kun-aguero', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-pelota-fifa-south.html', '/pelota-fifa-south-africa-balon', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-zlatan-ibrahimovic.html', '/zlatan-ibrahimovic', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-wayne-rooney.html', '/wayne-rooney', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-didier-drogba.html', '/didier-drogba', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-neymar.html', '/neymar', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-diego-forlan.html', '/diego-forlan', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-robin-van-persie.html', '/robin-van-persie', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-alessandro-del-piero.html', '/alessandro-del-piero', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-jefferson-farfan.html', '/jefferson-farfan', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-cristiano-ronaldo_28.html', '/cristiano-ronaldo-acostado', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-ronaldo-brasil.html', '/ronaldo-brasil', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-fabio-cannavaro.html', '/fabio-cannavaro', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-cachorro-perro.html', '/cachorro-perro-labrador', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-claudia-colussi.html', '/claudia-colussi', array('status' => 302)); 
	
	Router::redirect('/2012/05/apple-vs-android-pelea-lucha-espadas.html', '/apple-vs-android-pelea-lucha-espadas-lightsaber', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-corazon-tiro-al-blanco.html', '/corazon-tiro-al-blanco', array('status' => 302)); 
	
	Router::redirect('/2012/05/androit-corta-apple-con-lightsaber.html', '/androit-corta-apple-con-lightsaber', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-iker-casillas-real.html', '/iker-casillas-real-madrid', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-dimitar-berbatov.html', '/dimitar-berbatov', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-corazon-pixel.html', '/corazon-pixel', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-hello-hola-cuadros.html', '/hello-hola-cuadros', array('status' => 302)); 
	
	Router::redirect('/2012/05/hombre-mas-mujer-igual-corazon-amor.html', '/hombre-mas-mujer-igual-corazon-amor', array('status' => 302)); 
	
	Router::redirect('/2012/05/dibujo-beso-pareja-enamorados.html', '/dibujo-beso-pareja-enamorados', array('status' => 302)); 
	
	Router::redirect('/2012/05/pareja-inseparable-del-ano.html', '/pareja-inseparable-del-ano', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-kurt-cobain.html', '/kurt-cobain', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-nirvana.html', '/nirvana', array('status' => 302)); 
	
	Router::redirect('/2012/05/frase-corazon-en-el-cielo-con-avion.html', '/frase-corazon-en-el-cielo-con-avion', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-avion-militar-en.html', '/avion-militar-en-guerra', array('status' => 302)); 
	
	Router::redirect('/2012/05/chica-policia-nfs-most-wanted.html', '/chica-policia-nfs-most-wanted', array('status' => 302)); 
	
	Router::redirect('/2012/05/rueda-de-reconocimiento.html', '/rueda-de-reconocimiento', array('status' => 302)); 
	
	Router::redirect('/2012/05/aviso-importante-facebook-ex-feliz.html', '/aviso-importante-facebook-ex-feliz', array('status' => 302)); 
	
	Router::redirect('/2012/05/gustavo-cerati-conectando-cables.html', '/gustavo-cerati-conectando-cables', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-gustavo-cerati-vector.html', '/gustavo-cerati-vector', array('status' => 302)); 
	
	Router::redirect('/2012/05/monarchy-of-roses-red-hot-chili-peppers.html', '/monarchy-of-roses-red-hot-chili-peppers', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-aperture-science.html', '/aperture-science-laboratories-logo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-chell-y-glados-portal.html', '/chell-y-glados-portal-2', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-chell-portal-2.html', '/chell-portal-2', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-atlas-y-p-body-portal.html', '/atlas-y-p-body-portal-2', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-queen-we-will-rock-you.html', '/queen-we-will-rock-you', array('status' => 302)); 
	
	Router::redirect('/2012/05/corazon-espada-diamante-y-trebol.html', '/corazon-espada-diamante-y-trebol', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-calabaza-halloween.html', '/calabaza-halloween', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-no-entiendo-logo.html', '/no-entiendo-logo-nintendo', array('status' => 302)); 
	
	Router::redirect('/2012/05/estoy-soltero-con-logo-toy-story.html', '/estoy-soltero-con-logo-toy-story', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-tvxq.html', '/tvxq', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-wall-e-y-eva.html', '/wall-e-y-eva-obsequiando-flor', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-saludo-y-peticiones.html', '/saludo-y-peticiones', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-corazon-con-parche.html', '/corazon-con-parche', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-transformes-optimus.html', '/transformes-optimus-prime', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-beso-pareja-de-sombra.html', '/beso-pareja-de-sombra', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-gomitas-de-colores.html', '/gomitas-de-colores', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-corazon-roto.html', '/corazon-roto', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-lentejas-m.html', '/lentejas-m-m', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-chica-chocolate.html', '/chica-chocolate', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-corazon-de-chocolate.html', '/corazon-de-chocolate', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-splash-fresas-con.html', '/splash-fresas-con-chocolate', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-pastilla-rellena-de.html', '/pastilla-rellena-de-corazones', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-candy-retrato.html', '/candy-retrato', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-pastillas-forma.html', '/pastillas-forma-corazon', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-candy-lazos-rojos.html', '/candy-lazos-rojos', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-candy.html', '/candy', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-shrek-y-princesa-fiona.html', '/shrek-y-princesa-fiona', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-rumpelstiltskin.html', '/rumpelstiltskin', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-rio-rafael-blu-perla.html', '/rio-rafael-blu-perla-volando', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-rio-blu-perla-rafael.html', '/rio-blu-perla-rafael', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-stone-cold-316.html', '/stone-cold-3-16', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-stone-cold-what.html', '/stone-cold-what', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-rock.html', '/the-rock', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-stone-cold.html', '/stone-cold', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-kurt-angle.html', '/kurt-angle', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-dave-batista.html', '/dave-batista', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-john-cena.html', '/john-cena', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-undertaker.html', '/undertaker', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-randy-orton.html', '/randy-orton', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-wwe-logo.html', '/wwe-logo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-porche-911-turbo.html', '/porche-911-turbo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-porche-boxster-s.html', '/porche-boxster-s', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-ducati-gix2255.html', '/ducati-gix2255', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-neytiri-y-jack-sully.html', '/neytiri-y-jack-sully-avatar', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-avatar-jake-sully.html', '/avatar-jake-sully', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-aguila-real.html', '/aguila-real', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-never-say-never-justin.html', '/never-say-never-justin-bieber', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-justin-bieber-en.html', '/justin-bieber-en-concierto', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-mision-imposible-ethan_16.html', '/mision-imposible-ethan-hunt', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-mision-imposible-ethan.html', '/mision-imposible-ethan-hunt-edificio', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-equipo-barcelona.html', '/equipo-barcelona-saliendo-campo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-conejo-gris-fondo-rosa.html', '/conejo-gris-fondo-rosa', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-gears-of-war-3.html', '/gears-of-war-3', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-rodaja-de-fruit-ninja.html', '/rodaja-de-fruit-ninja', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-perro-cesped-verde.html', '/perro-cesped-verde', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-patos-huevos-de.html', '/patos-huevos-de-colores', array('status' => 302)); 
	
	Router::redirect('/2012/05/forza-motorsport-4-1993-mclaren-f1.html', '/forza-motorsport-4-1993-mclaren-f1', array('status' => 302)); 
	
	Router::redirect('/2012/05/forza-motorsport-4-2010-jaguar-xfr.html', '/forza-motorsport-4-2010-jaguar-xfr', array('status' => 302)); 
	
	Router::redirect('/2012/05/forza-motorsport-4-2011-tesla-roadster.html', '/forza-motorsport-4-2011-tesla-roadster-sport', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-scorpion-mortal-combat.html', '/scorpion-mortal-combat', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-adidas.html', '/adidas', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-nike-brave-and-holy.html', '/nike-the-brave-and-holy', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-colita-tanga-color.html', '/colita-tanga-color', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-tocada-senos.html', '/tocada-senos', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-acdc-chica.html', '/acdc-chica', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-batman-logo.html', '/batman-logo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-dj-tornamesa.html', '/dj-tornamesa', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-cuerdas-guitarra.html', '/cuerdas-guitarra', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-dj-apple.html', '/dj-apple', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-music-please.html', '/music-please', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-cassette-pirata.html', '/cassette-pirata', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-cena-dj.html', '/cena-dj', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-mixer-audifonos.html', '/mixer-audifonos-pioneer', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-botones-cue-play.html', '/botones-cue-play-pioneer', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-ovni-alumbra-casa.html', '/ovni-alumbra-casa', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-ovni-cielo-noche.html', '/ovni-cielo-noche', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-ovni-cielo.html', '/ovni-cielo', array('status' => 302)); 
	
	Router::redirect('/2012/05/sobre-amor-mucho-sentir-poco-entender.html', '/sobre-amor-mucho-sentir-poco-entender', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-miranda-cosgrove.html', '/miranda-cosgrove', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-verde-angry-birds.html', '/verde-angry-birds', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-amarillo-angry-birds.html', '/amarillo-angry-birds', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-corazon-tetris.html', '/corazon-tetris', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-musica-vector-music.html', '/musica-vector-music', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-piano-teclas.html', '/piano-teclas', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-i-love-music-barras.html', '/i-love-music-barras', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-nota-musical-corazon.html', '/nota-musical-corazon', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-kristen-stewart.html', '/kristen-stewart', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-robert-pattinson-y.html', '/robert-pattinson-y-kristen-stewart', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-avril-lavigne.html', '/avril-lavigne', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-jake-gyllenhaal.html', '/jake-gyllenhaal', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-jack-y-will-piratas.html', '/jack-y-will-piratas-del-caribe', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-victoria-justice.html', '/victoria-justice', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-marvel-personajes.html', '/marvel-personajes', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-glee.html', '/glee', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-glee-l-mano.html', '/glee-l-mano', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-red-angry-birds.html', '/red-angry-birds', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-cerdo-angry-birds-up.html', '/cerdo-angry-birds-up-pig', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-ovejas-dia-de-las.html', '/ovejas-dia-de-las-madres', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-italia.html', '/bandera-italia', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-japon.html', '/bandera-japon', array('status' => 302)); 
	
	Router::redirect('/2012/05/hombres-de-negro-agente-j-will-smith.html', '/hombres-de-negro-agente-j-will-smith', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-hombres-de-negro.html', '/hombres-de-negro', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-ferrari-auto-futuro.html', '/ferrari-auto-futuro', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-moto-ferrari.html', '/prototipo-moto-ferrari', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-el-chavo-animado.html', '/el-chavo-animado', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-angelina-jolie-fresa.html', '/angelina-jolie-fresa', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-darth-maul.html', '/darth-maul', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-star-wars-combate.html', '/star-wars-combate-naves', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-darth-vader.html', '/darth-vader', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-soy-tu-padre.html', '/soy-tu-padre', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-dj-urba.html', '/dj-urba', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-rapidos-y-furiosos.html', '/rapidos-y-furiosos', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-luna-lobo.html', '/luna-lobo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-luna.html', '/luna', array('status' => 302)); 
	
	Router::redirect('/2012/05/rapidos-y-furiosos-dominic-toretto-y.html', '/rapidos-y-furiosos-dominic-toretto-y-brian', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-perro-bichon-frise.html', '/perro-bichon-frise', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-quiereme.html', '/quiereme', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-gente-dedos.html', '/gente-dedos', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-simbolo-hombre-hombres.html', '/simbolo-hombre-hombres', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-simbolo-mujer-mujeres.html', '/simbolo-mujer-mujeres', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-i-love-you-mom.html', '/i-love-you-mom', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-feliz-dia-de-las.html', '/feliz-dia-de-las-madres', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-feliz-dia-mama.html', '/feliz-dia-mama', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-dolares.html', '/dolares', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-ninas-buenas-y-malas.html', '/ninas-buenas-y-malas', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-persona-inteligente.html', '/persona-inteligente', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-te-casarias-conmigo.html', '/te-casarias-conmigo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-persona-comprometida.html', '/persona-comprometida', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-seguridad-area.html', '/seguridad-area-restringida', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-leon-come-domador.html', '/leon-come-domador', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-hombre-arana.html', '/hombre-arana', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-logo-hombre-arana.html', '/logo-hombre-arana-venom', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-premier-league-mujeres.html', '/premier-league-mujeres', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-cristo-jesus-meditando.html', '/cristo-jesus-meditando', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-jesus-cristo-redentor.html', '/jesus-cristo-redentor-brasil', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-los-vengadores-equipo.html', '/los-vengadores-equipo-completo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-los-simpsons.html', '/los-simpsons', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-new-era-59-fifty.html', '/new-era-59-fifty', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-terminator-salvation.html', '/terminator-salvation', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-terminator.html', '/terminator', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-titanic.html', '/titanic', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-facebuk.html', '/facebuk', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-titanic-beso-jack.html', '/titanic-beso-jack-rouse', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-battleship.html', '/battleship', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-guatemala.html', '/bandera-guatemala', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-morocco.html', '/bandera-morocco', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-costa-rica.html', '/bandera-costa-rica', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-canada.html', '/bandera-canada', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-bolivia.html', '/bandera-bolivia', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-uruguay.html', '/bandera-uruguay', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-francia-france.html', '/bandera-francia-france', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-suiza.html', '/bandera-suiza-switzerland', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-loki-avengers.html', '/loki-avengers', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-venezuela.html', '/bandera-venezuela', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-el-salvador.html', '/bandera-el-salvador', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-brasil.html', '/bandera-brasil', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-mexico.html', '/bandera-mexico', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-colombia.html', '/bandera-colombia', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-chile.html', '/bandera-chile', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-ecuador.html', '/bandera-ecuador', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-argentina.html', '/bandera-argentina', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-peru.html', '/bandera-peru', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-espana.html', '/bandera-espana', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bandera-estados-unidos.html', '/bandera-estados-unidos', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-gato-besa-perro.html', '/gato-besa-perro', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-steve-jobs-apple.html', '/steve-jobs-apple', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-redes-sociales.html', '/redes-sociales-personificadas', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-keith-haring.html', '/keith-haring', array('status' => 302)); 
	
	Router::redirect('/2012/05/ting-tings-hang-it-up.html', '/the-ting-tings-hang-it-up', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-smile-letras-madera.html', '/smile-letras-madera', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-daddy-yankee-cinturon.html', '/daddy-yankee-cinturon', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-daddy-yankee.html', '/daddy-yankee', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-daddy-yankee-new-york.html', '/daddy-yankee-new-york', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-gunbound-sate.html', '/gunbound-a-sate', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-g-unit.html', '/g-unit', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-nicki-minaj-pink.html', '/nicki-minaj-pink-friday', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-50-cent-pistola.html', '/50-cent-pistola', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-belinda-fondo-azul.html', '/belinda-fondo-azul', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-belinda.html', '/belinda', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-skull-candy-logo.html', '/skull-candy-logo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-beats-by-dr-dre-rosado.html', '/beats-by-dr-dre-rosado', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-beats-by-dr-dre-dorado.html', '/beats-by-dr-dre-dorado', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-beats-by-dr-dre.html', '/beats-by-dr-dre-monster', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-hombre-obedece-mujer.html', '/hombre-obedece-mujer', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-iron-man-laser.html', '/iron-man-laser', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-tetris.html', '/tetris', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-angry-birds.html', '/angry-birds', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-lil-wayne.html', '/lil-wayne', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-chandra-davis-aka.html', '/chandra-davis-aka-deelishis', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-lapices-colores.html', '/lapices-colores', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-pink-floyd-body.html', '/pink-floyd-body-painting', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-hre-baston-martin.html', '/hre-baston-martin-zagato-verde', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-love-mano.html', '/love-mano', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bart-simpson-pizarra.html', '/bart-simpson-pizarra', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-cristiano-ronaldo.html', '/cristiano-ronaldo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-lionel-messi.html', '/lionel-messi', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-cara-bob-esponja.html', '/cara-bob-esponja', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-bob-esponja-red.html', '/bob-esponja-red', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-ojo-bebe-papel.html', '/ojo-bebe-papel', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-ninos-abrazados-dibujo.html', '/ninos-abrazados-dibujo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-circulos-colores.html', '/circulos-colores', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-piel-otorongo.html', '/piel-otorongo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-baldes-pintura-colores.html', '/baldes-pintura-colores', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-piernas-zapatillas-emo.html', '/piernas-zapatillas-emo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-apple-logo-caramelo.html', '/apple-logo-caramelo', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-kid-jordan.html', '/kid-jordan', array('status' => 302)); 
	
	Router::redirect('/2012/05/portada-facebook-vida-guerra-playboy.html', '/vida-guerra-playboy', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-musica-machine.html', '/musica-machine', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-chicas-feliz-navidad.html', '/chicas-feliz-navidad', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-encontrar-persona.html', '/encontrar-persona-sincera', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-mujer-vector-flor.html', '/mujer-vector-flor', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-corazon-delicado-rosas.html', '/corazon-delicado-rosas', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-corazones-madera.html', '/corazones-madera', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-toca-antes-de-entrar.html', '/toca-antes-de-entrar', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-uefa-champions-league.html', '/uefa-champions-league', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-chelsea-football-club.html', '/chelsea-football-club', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-bayern-munched.html', '/bayern-munched', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-orilla-del-mar.html', '/orilla-del-mar', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-feliz-dia-disenador.html', '/feliz-dia-disenador', array('status' => 302)); 
	
	Router::redirect('/2012/04/portada-facebook-adobe-mac-feliz-dia.html', '/adobe-mac-feliz-dia', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-andromeda.html', '/andromeda', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-lion-osx.html', '/lion-osx', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-lo-siento-bebe-no.html', '/lo-siento-bebe-no-accesible', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-super-mario-64.html', '/super-mario-64', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-just-cause-2.html', '/just-cause-2', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-pareja-resident-evil-5.html', '/pareja-resident-evil-5', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-sonic-espada.html', '/sonic-espada', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-sonic-shadow.html', '/sonic-shadow', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-nacimiento-bart.html', '/nacimiento-bart-simpson', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-wellcome.html', '/wellcome', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-secret-ninja.html', '/secret-ninja', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-matrix-facebook.html', '/matrix-facebook', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-prince-of-persia.html', '/prince-of-persia', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-need-for-speed-most.html', '/need-for-speed-most-wanted', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-chicas-auto-carrera.html', '/chicas-auto-carrera', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-dirt3-auto-carrera.html', '/dirt3-auto-carrera', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-la-evolucion-del.html', '/la-evolucion-del-hombre', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-corazon-1.html', '/corazon-1', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-yo-corazon-casa-musica.html', '/yo-corazon-casa-musica', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-lady-gaga.html', '/lady-gaga', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-dame-esos-5.html', '/dame-esos-5', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-hello-kitty.html', '/hello-kitty', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-corazon-rollo.html', '/corazon-rollo-fotografico', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-perro-con-una-flor.html', '/perro-con-una-flor', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-love-garabatos.html', '/love-garabatos', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-estoy-estudiando.html', '/estoy-estudiando', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-oro-o-plata.html', '/oro-o-plata', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-barcelona.html', '/barcelona', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-river-plate.html', '/river-plate', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-boca-junior.html', '/boca-junior', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-milla-jovovich.html', '/milla-jovovich', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-corazon-retro.html', '/corazon-retro', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-corazones-siempre.html', '/corazones-siempre-juntos', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-real-madrid.html', '/real-madrid', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-i-like-you.html', '/i-like-you', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-hot-dog-bigote.html', '/hot-dog-bigote', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-pareja-gatos.html', '/pareja-gatos', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-portada-deshabilitada.html', '/portada-deshabilitada', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-escudo-capitan-america.html', '/escudo-capitan-america', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-black-widow.html', '/black-widow', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-nick-fury.html', '/nick-fury', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-tony-stark-iron-man.html', '/tony-stark-iron-man', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-marvel-avengers.html', '/marvel-the-avengers', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-nick-fury-loki-hawkeye.html', '/nick-fury-loki-hawkeye-black-widow', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-captain-america-hulk.html', '/captain-america-hulk-iron-man-thor', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-al-menos-que-te-llames.html', '/al-menos-que-te-llames-google', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-facebook-es-una-carcel.html', '/facebook-es-una-carcel', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-usa-tu-cerebro.html', '/usa-tu-cerebro', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-cena-incomoda-pacman.html', '/cena-incomoda-pacman', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-cargando-portada.html', '/cargando-portada', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-super-caracol.html', '/super-caracol', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-bigote.html', '/bigote', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-bienvenido.html', '/bienvenido', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-alianza-lima.html', '/alianza-lima', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-universitario.html', '/universitario', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-deja-de-espiarme.html', '/deja-de-espiarme', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-bolas-asustadas.html', '/bolas-asustadas', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-huy-papita.html', '/huy-papita', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-dedo-fuckyou.html', '/dedo-fuckyou', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-love-post-it.html', '/love-post-it', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-que-hice-mal.html', '/que-hice-mal', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-relax-arena.html', '/relax-arena', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-de-haber-sabido.html', '/de-haber-sabido', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-se-humilde.html', '/se-humilde', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-danbo.html', '/danbo', array('status' => 302));
	Router::redirect('/2012/04/portada-facebook-cachorros-labradores.html', '/cachorros-labradores', array('status' => 302));
	Router::redirect('/2012/04/portada-facebook-mucho-que-hacer.html', '/mucho-que-hacer', array('status' => 302));
	Router::redirect('/2012/04/portada-facebook-algun-dia-te-daras.html', '/algun-dia-te-daras-cuenta', array('status' => 302));
	Router::redirect('/2012/04/portada-facebook-sirenita-ariel.html', '/sirenita-ariel', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-naruto.html', '/naruto', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-campo-margaritas.html', '/campo-margaritas', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-lorax.html', '/lorax', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-justin-bieber.html', '/justin-bieber', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-i-love-you-plumon.html', '/i-love-you-plumon', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-harry-potter.html', '/harry-potter', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-girls-generation.html', '/girls-generation', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-fichas-scrabble.html', '/fichas-scrabble', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-gente-vector.html', '/gente-vector', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-avengers.html', '/avengers', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-arte-vector.html', '/arte-vector', array('status' => 302)); 
	Router::redirect('/2011/04/portada-facebook-siberiano.html', '/siberiano', array('status' => 302)); 
	Router::redirect('/2011/04/portada-facebook-senal-electricidad.html', '/senal-electricidad', array('status' => 302)); 
	Router::redirect('/2011/04/portada-facebook-scarlett-johansson.html', '/scarlett-johansson', array('status' => 302)); 
	Router::redirect('/2011/04/portada-facebook-sakura-kino.html', '/sakura-kino', array('status' => 302)); 
	Router::redirect('/2011/04/portada-facebook-rihanna.html', '/rihanna', array('status' => 302)); 
	Router::redirect('/2011/04/portada-facebook-need-for-speed_21.html', '/need-for-speed', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-nicki-minaj.html', '/nicki-minaj', array('status' => 302)); 
	Router::redirect('/2011/04/portada-facebook-andres-wiese_21.html', '/andres-wiese', array('status' => 302)); 
	Router::redirect('/2012/04/portada-facebook-bugatti-veyron.html', '/bugatti-veyron', array('status' => 302)); 
	Router::redirect('/2010/04/portada-facebook-wwe-raw.html', '/wwe-raw', array('status' => 302)); 
	Router::redirect('/2010/04/portada-facebook-hulk.html', '/hulk', array('status' => 302)); 
	Router::redirect('/2010/04/portada-facebook-dark-knight-rises.html', '/the-dark-knight-rises', array('status' => 302)); 
	Router::redirect('/2010/04/portada-facebook-iron-man-volando.html', '/iron-man-volando', array('status' => 302)); 
	Router::redirect('/2010/04/portada-facebook-iron-man.html', '/iron-man', array('status' => 302)); 
	Router::redirect('/2010/04/portada-facebook-iron-man-escape.html', '/iron-man-escape', array('status' => 302)); 
	Router::redirect('/2010/04/portada-facebook-coldplay.html', '/coldplay', array('status' => 302)); 
	Router::redirect('/2010/04/portada-facebook-coldplay-paradise.html', '/coldplay-paradise', array('status' => 302)); 	
	Router::redirect('/2010/04/portada-facebook-christina-aguilera.html', '/christina-aguilera', array('status' => 302)); 
	Router::redirect('/2010/04/portada-facebook-chica-en-bikini.html', '/chica-en-bikini', array('status' => 302)); 
	Router::redirect('/p/paquete-de-portadas-para-facebook.html', '/paquete-portadas-para-facebook', array('status' => 302)); 
	Router::redirect('/p/pack-covers-for-facebook.html', '/pack-covers-for-facebook', array('status' => 302)); 
	
/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
