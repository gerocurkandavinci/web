<?php


//redimencionar imagen
/*
img_0_big.png
img_0_small.png
img_1_big.png
img_1_small.png

img_<posición>_<tamaño>.png

$tamanhos = array(0 => array('nombre'='big','ancho'='100','alto'='200'),
			      1 => array('nombre'='small','ancho'='50','alto'='100'));
                  
                  */
				  
function redimensionar($ruta,$file_name,$file_temp,$posicion,$tamanhos){
	$filename = stripslashes($file_name);
 	$extension = getExtension($filename);
 	$extension = strtolower($extension);
	if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) {
 		$errors=1;
 	}else{
		$size=filesize($file_temp);
                $uploadedfile = $file_temp;
		if ($size > 2*1024){
			$change='<div class="msgdiv">You have exceeded the size limit!</div> ';
			$errors=1;
		}
		if($extension=="jpg" || $extension=="jpeg" ){ 
			$src = imagecreatefromjpeg($uploadedfile);
		}else if($extension=="png"){ 
			$src = imagecreatefrompng($uploadedfile);
			imagealphablending($src, true);
			imagesavealpha($src, true);  
		}else{
			$src = imagecreatefromgif($uploadedfile);
		}
// 		echo $scr;

		list($width,$height)=getimagesize($uploadedfile);
		foreach($tamanhos as $tam){
			$newwidth = $tam['ancho'];
			$newheight=($height/$width)*$newwidth;
			
			if($newheight > $tam['alto']){
				$newheight = $tam['alto'];
				$newwidth=($width/$height)*$newheight;
				if($newwidth > $tam['ancho']){
					$height = $newheight;
					$width = $newwidth;
					$newheight=($height/$width)*$newwidth;
				}
			}
			$tmp=imagecreatetruecolor($newwidth,$newheight);
			if($extension == "png"){
				$rojo = imagecolorallocate($tmp, 234, 234, 234);
				imagefill($tmp, 0, 0, $rojo);
			}
			imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
			
			$filename = $ruta.'img_'.$posicion.'_'.$tam['nombre'].'.'.$extension;
			if($extension == "png"){
				$negro = imagecolorallocate($tmp, 234, 234, 234);
				imagecolortransparent($tmp,$negro);
				imagepng($tmp,$filename,9);
			}elseif($extension == 'gif'){
				imagegif($tmp,$filename,100);
			}else{
				imagejpeg($tmp,$filename,100);
			}
			imagedestroy($tmp);
		}
		imagedestroy($src);
		
	}
}

//funcion para obtener la extension
function getExtension($str) {
    $i = strrpos($str,".");
    if (!$i) { return ""; }
    $l = strlen($str) - $i;
    $ext = substr($str,$i+1,$l);
    return $ext;
}

?>