<?php 
include('../../config.php');
include('../../session.php');
include('../../includes/bd/conexion.php');
include('../../includes/clases/Funciones.php');
$db  = new Conexion();
# Cargamos la librería dompdf.
include('../../librerias/dompdf/dompdf_config.inc.php');
 
# Contenido HTML del documento que queremos generar en PDF.
ob_start();
include('../consulta/documento.php');
 
 $html=ob_get_clean();
# Instanciamos un objeto de la clase DOMPDF.
$mipdf = new DOMPDF();
 
# Definimos el tamaño y orientación del papel que queremos.
# O por defecto cogerá el que está en el fichero de configuración.
 #ini_set("memory_limit","32M");   
//$mipdf ->set_paper('a4','landscape'); #horizontal
$mipdf ->set_paper('a4','letter'); #vertical
 
# Cargamos el contenido HTML.
$mipdf ->load_html($html);
 
# Renderizamos el documento PDF.
$mipdf ->render();
 
# Enviamos el fichero PDF al navegador.
//$mipdf ->stream('LISTA DE ALUMNOS.pdf');#Descargar Pdf
$mipdf ->stream(''.$_GET['tipo'].' - '.$_GET['numero'].'.pdf',array('Attachment'=>0));#Previzualizar


?>
