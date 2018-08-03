<?php

/**head**/

function custom_head() {
//meta tags para SEO
  echo '<meta name="description" content="vuelos economicos al instante">
        <meta name="keywords" content="vuelos baratos,vuelos Avianca,vuelos,vuelos viva Colombia,vuelos baratos Colombia,vuelos económicos,vuelos lan,vuelos baratos a bogota,vuelos latam,vuelos a san andres,vuelos wingo,vuelos a santa marta,vuelos a Cartagena,vuelos a medellin,vuelos a bogota,vuelos a cali,vuelos a barranquilla,vuelos a cancun,vuelos a Bucaramanga,vuelos bogota medellin,vuelos baratos lan,vuelos bogota cali,vuelos baratos a medellin,vuelos baratos a santa marta,vuelos baratos Avianca,vuelos baratos a Cartagena,vuelos cali bogota,vuelos cucuta bogota,vuelos Colombia,vuelos cali medellin,vuelos cartagena bogota,vuelos chárter,vuelos Cartagena,vuelos copa,vuelos charter Colombia,vuelos cali Cartagena,vuelos despegar,vuelos de Avianca,vuelos de viva Colombia,vuelos de cali a bogota,vuelos de medellin a bogota,vuelos de san andres a providencia,vuelos de cucuta a bogota,vuelos de barranquilla a bogota,vuelos de cartagena a bogota,vuelos de pereira a bogota,vuelos easyfly,vuelos éxito,vuelos en viva Colombia,vuelos el dorado,vuelos en promoción,vuelos en Avianca,vuelos economicos a bogota,vuelos economicos Avianca,vuelos economicos lan,vuelos Falabella,vuelos florencia bogota,vuelos fly,vuelos fort lauderdale,vuelos fort lauderdale bogota,vuelos Florencia,vuelos frontales,vuelos Francia,vuelos florencia caqueta a bogota,vuelos florencia medellin,vuelos Google,vuelos gratis,vuelos guayaquil bogota,vuelos guatemala bogota,vuelos guayaquil quito,vuelos guayaquil cali,vuelos guajira,vuelos gol,vuelos guapi cali satena,vuelos granada Barcelona,vuelos hoy,vuelos houston bogota,vuelos hoy Avianca,vuelos hacia bogota,vuelos hacia medellin,vuelos hoy viva Colombia,vuelos Hopper,vuelos Houston,vuelos hoy latam,vuelos hacia Valledupar,vuelos internacionales,vuelos internacionales Avianca,vuelos internacionales baratos,vuelos iberia,vuelos ibague bogota,vuelos ibague medellin,vuelos interjet,vuelos internacionales viva Colombia,vuelos isla margarita,vuelos ipiales bogota,vuelos jetblue,vuelos jet,vuelos Jamaica,vuelos jetblue hoy,vuelos japon,vuelos juliaca lima,vuelos jmc,vuelos jumbo,vuelos jetcost,vuelos jetblue Colombia,vuelos kayak,vuelos klm,vuelokey,vuelos kiwi,vuelos klm amsterdam,vuelos klm Cartagena,vuelos klm desde Cartagena,vuelos klm Colombia,vuelos klm hoy,vuelos kayak Colombia,vuelos lima cusco,vuelos lan baratos,vuelos latam Colombia,vuelos lan cali bogota,vuelos lima bogota,vuelos Leticia,vuelos leticia bogota,vuelos lan medellin,vuelos medellin bogota,vuelos mas baratos,vuelos medellin cali,vuelos monteria bogota,vuelos medellin,vuelos manizales bogota,vuelos medellin montería,vuelos medellin Cartagena,vuelos medellin apartado,vuelos muy baratos,vuelos nacionales,vuelos neiva bogota,vuelos nacionales Colombia,vuelos nacionales baratos,vuelos nacionales Avianca,vuelos Neiva,vuelos neiva medellin,vuelos new york,vuelos nuqui,vuelos nacionales latam,vuelos olaya herrera,vuelos Orlando,vuelos online,vuelos ok,vuelos opain,vuelos orlando bogota,vuelos ofertas,vuelos on vacation,vuelos orlando Miami,vuelos olaya herrera medellin-bogota,vuelos pereira bogota,vuelos por viva Colombia,vuelos pasto bogota,vuelos pereira medellin,vuelos popayan bogota,vuelos para bogota,vuelos para medellin,vuelos por Avianca,vuelos puente aéreo,vuelos panamá,vuelos quibdo bogota,vuelos quito bogota,vuelos quibdo cali,vuelos quito Guayaquil,vuelos que salen del puente aéreo,vuelos quito lima,vuelos quibdo nuqui,vuelos quito,vuelos quibdo medellin satena,vuelos quito cali,vuelos Riohacha,vuelos republica dominicana,vuelos roma Madrid,vuelos retrasados,vuelos riohacha barranquilla,vuelos rio de janeiro,vuelos rumbo,vuelos roma Barcelona,vuelos Ryanair,vuelos roma parís,vuelos satena,vuelos santa marta,vuelos san andres,vuelos super baratos,vuelos santa marta bogota,vuelos spirit,vuelos san andres a providencia,vuelos santa marta medellin,vuelos san jose del Guaviare,vuelos santiago de chile,vuelos trivago,vuelos tumaco cali,vuelos tumaco bogota,vuelos tiempo real,vuelos tame,vuelos tolu medellin,vuelos tac,vuelos tolu,vuelos tiquetes baratos,vuelos twingo,vuelos ultima hora,vuelos united,vuelos ultimo minuto,vuelos united Airlines,vuelos usa,vuelos united houston bogota,vuelos ultima hora Colombia,vuelos uruguay,vuelos arauca medellin,vuelos uraba,vuelos villavicencio bogota,vuelos valledupar bogota,vuelos Valledupar,vuelos Venezuela,vuelos valledupar medellin,vuelos viajala,vuelos viva,vuelos vivacolombia.com,vuelos wingo a Cartagena,vuelos wings,vuelos wingo san andres,vuelos wingo panama bogota,vuelos wingo panamá,vuelos wingo bogota,vuelos wingo nacionales,vuelos washington Miami,vuelos Washington,vuelos x lan,vuelos x Avianca,vuelos expedia,vuelos por wingo,vuelos Xalapa,vuelos xela Guatemala,vuelos x volaris,vuelos x interjet,vuelos x aerolineas argentinas,vuelos xalapa a mexico,vuelos yopal bogota,vuelos Yopal,vuelos yopal medellin,vuelos yopal Bucaramanga,vuelos y mas,vuelos y hotel,vuelos yopal bogota Avianca,vuelos y vacaciones,vuelos yopal bogota lan,vuelos yopal cali,vuelos zurich Madrid,vuelos zaragoza Mallorca,vuelos Zaragoza,vuelos zaragoza Menorca,vuelos zaragoza Londres,vuelos zaragoza Tenerife,vuelos zaragoza Ibiza,vuelos zaragoza parís,vuelos zaragoza Lanzarote">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="Spanish">
        <meta name="author" content="Young Sin Lim">';
  //libreria jQuery
	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
  // funciones de scrollTop
  echo '<script src="http://localhost/wp-content/themes/Ecommerce2/custom.js"';
}
add_action('wp_enqueue_scripts', 'custom_head');

/**body**/
add_action('hestia_sections','es_en');
add_action('hestia_before_big_title_section_content_hook','ilus');
add_action('hestia_sections','busqueda');
add_action('hestia_sections','mapas');
add_action('hestia_before_contact_section_hook','pau');
add_action( 'get_footer', 'footerchange');

/*insertar ilustracion*/
function ilus(){
  echo '<div class="ilustracion"><img src="http://localhost/wp-content/uploads/2017/08/ilus.png"></div>';
}
/*insertar busqueda*/
function busqueda(){
  // busqueda en español e ingles , se debe de ingresar desde localhost/, o localhost/en/
  echo '<div class="search">'.do_shortcode('[tp_search_shortcodes slug="1b011994"]').'</div>';
}

/*insertar mapa de vuelos*/
function mapas(){
  echo '<iframe src="//maps.avs.io/flights/?auto_fit_map=true&hide_sidebar=true&hide_reformal=true&disable_googlemaps_ui=true&zoom=3&show_filters_icon=true&redirect_on_click=true&small_spinner=true&hide_logo=true&direct=true&lines_type=TpLines&cluster_manager=TpWidgetClusterManager&marker=145111.map&show_tutorial=false&locale=en&host=map.jetradar.com" width="100%" height="399px" scrolling="no" frameborder="0"></iframe>';
}

/*insertar mapa de Puntos de Atencion al Usiario*/
function pau(){
  echo '<div class="puntos_de_atencion"> <h2>Nuestras Sedes<br/>'.do_shortcode('[intergeo id="0UjM"][/intergeo]').'</h2></div>';
}

/*insertar multilenguaje*/
function es_en(){
  echo do_shortcode('[weglot_switcher]');
}

/*cambiar footer*/
function footerchange() {
echo '<div class="el_footer">©copyright by Luis Guillermo Morales Raya';
}

?>
