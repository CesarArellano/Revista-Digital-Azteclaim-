<?php 
// Datos del Formulario//
        $Nombre=$_POST['nombre'];
        $Correo=$_POST['email'];
        $Comentario=$_POST['comentario'];

//Destinatario AzteClaim//
$destinoa = "azteclaim@gmail.com";
$desdea = "Desde: $Nombre";
$asuntoa = "Contacto AzteClaim";
$mensajea = "Nombre: $Nombre \n"; 
$mensajea .= "Correo: $Correo \n"; 
$mensajea .= "Mensaje: $Comentario \n"; 

//Destinatario Usuario//
$destino = "$Correo";
$asunto = "Contacto AzteClaim";
$mensaje = "Estimado(a) $Nombre, le notificamos que su comentario ha sido recibido.\n"; 
$mensaje .= "Tú comentario nos ayuda a crecer.\n"; 
$mensaje .= "De antemano, gracias. \n"; 
$mensaje .= "Saludos cordiales. \n"; 
$mensaje .= "Atte. Admin AzteClaim. \n"; 


//Enviando Correos//
mail($destinoa,$asuntoa,$mensajea);
mail($destino,$asunto,$mensaje);
if(mail){
         header('location: notificacion.php?mensaje=Tu comentario ha sido enviado con exito; corrobora por correo que tu solicitud haya sido entregada. Pd. Si no aparece en tu bandeja principal, checa tu correo no deseado. &t=success');
}    else{
   header('location: notificacion.php?mensaje=Algo salio mal, intenta de nuevo&t=error');
        }

 ?>