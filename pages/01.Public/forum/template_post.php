<html>
<body bgColor=#f5f5ed link=#0000ee text=#000000 vLink=#800080 font-face=Verdana font-size=2 color=#000000>


<table align='center' border='0px' bordercolor='black' cellPadding='5' cellSpacing='1' width='80%'>
<tr> <td bgColor=#a92e2b height=35> <CENTER> <FONT color=#ffffff face=Verdana size=-1><B>Poster un message :</B> </FONT> </CENTER> </td> </tr>
<tr> <td align=middle bgColor=#f6f5e2>

     <FORM method='post' action='rss_update.php?BOARD=<?php echo $_GET['BOARD']; if(!empty($_GET['THREAD'])) echo "&THREAD={$_GET['THREAD']}"; ?>'>
     <TABLE cellPadding='2' cellSpacing='0' width='auto'>
     <TR> <TD align=left> &nbsp;                                     </TD> <TD> &nbsp;                    </TD> </TR>
     <TR> <TD align=left> <B>Votre nom :</B>                         </TD> <TD> <INPUT name=name size=22> </TD> </TR>
     <TR> <TD align=left> <B>Votre adresse électronique : &nbsp;</B> </TD> <TD> <INPUT name=mail size=22> </TD> </TR>
     <TR> <TD align=left> <B>Sujet :</B>                             </TD> <TD> <INPUT name=object size=22 value='<?php if(!empty($_GET['THREAD'])) echo"Re: ".htmlspecialchars($_GET['object']);?>'></TD></TR>
     </TABLE>

     <center><br/><textarea cols='50' name='text' rows='10' wrap='virtual'></textarea>
             <br/><INPUT type=submit value=Envoyer>
     </center>
     </form>

     </td>
</tr>
</table>

</body>
</html>
