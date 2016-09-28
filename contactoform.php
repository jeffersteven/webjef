<?php
$action=$_REQUEST['action'];
	$out='<form method="POST" action="" enctype="multipart/form-data">
		<div class="row 50%">
			<input type="hidden" name="action" value="submit">
			<div class="6u 12u$(mobile)"><input type="text" class="text" name="name" placeholder="Nombre" /></div>
			<div class="6u$ 12u$(mobile)"><input type="text" class="text" name="email" placeholder="Correo" /></div>
			<div class="12u$">
				<textarea name="message" placeholder="Mensaje"></textarea>
			</div>
			<div class="12u$">
				<ul class="actions">
					<li><input type="submit" value="Enviar Mensaje" /></li>
				</ul>
			</div>
		</div>
	</form>';
if ($action=="")    /* display the contact form */
    {
	echo $out;
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Mensaje enviado desde el contacto de www.webjef.com";
		mail("jeffersteven@hotmail.com", $subject, $message, $from);
		echo $out;
		echo "Mensaje enviado!";
	    }
    }  
?>
