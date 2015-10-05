<?php
if (!$_FILES[img1] = "") {
	@copy($_FILES[img1][tmp_name],
	"/uploads".$_FILES[img1][name]) 
	or die("Couldn't copy the file.");
	} else { die("No input file specified"); 
} ?> 
<HTML> <HEAD> 
<TITLE>Successful File Upload</TITLE> </HEAD> 
<BODY> <H1>Success!</H1>
<P>You sent: <? echo $_FILES[img1][name]; ?>, a
 <? echo $_FILES[img1][size]; ?> byte file with a mime type of 
 <? echo $_FILES[img1][type]; ?>.</P>
</BODY> </HTML> 