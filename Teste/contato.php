﻿<?
include("consulta2.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1"> 
<title>Star Divulgações</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	background-image: url(images/fundo.jpg);
	margin-top: 0px;
	margin-bottom: 0px;
}
.style2 {
	color: #666666;
	font-weight: bold;
	font-size: 24px;
}
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	color: #666666;
	text-decoration: none;
}
a:hover {
	color: #000000;
	text-decoration: underline;
}
a:active {
	color: #666666;
	text-decoration: none;
}
.style9 {
	color: #666666;
	font-size: 16px;
}
.style14 {color: #FFFFFF; font-weight: bold; font-style: italic; }
.style16 {
	font-family: "Segoe Script";
	font-size: 14px;
}
.style19 {
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
.style27 {color: #F5F5F5}
.style28 {
	font-family: "Segoe Script";
	font-size: 14px;
	color: #445566;
}
.style29 {color: #999999}
.style32 {color: #00CCFF}
.style34 {color: #66FF00}
.style35 {font-size: 14px}
.style36 {color: #FF00FF}
.style37 {color: #000000}
.style42 {
	color: #F5F5F5;
	font-size: 16px;
}
.style44 {color: #666666}
.style45 {font-size: 16px}
.style46 {color: #CBCBCB}
.style48 {
	color: #CCCCCC;
	font-weight: bold;
	font-size: 36px;
}
.style50 {font-size: 24px}
.style51 {font-size: 36px}
.style52 {font-size: 14px; color: #000000; }
-->
</style></head>

<body>
<table width="1000" border="0" align="center" bgcolor="#000000">
  <tr>
    <td height="260"><table width="950" border="0" align="center">
        <tr>
          <td width="387" rowspan="3"><img src="images/LOGO.png" width="350" height="180" /></td>
          <td width="553" height="100" ><?echo $a;?></td>
        </tr>
        <tr>
          <td height="21">&nbsp;</td>
        </tr>
        <tr>
          <td height="100"><?echo $b;?></td>
        </tr>
    </table>     </td>
  </tr>
  <tr>
    <td height="30" bgcolor="#F5F5F5"><span class="style19"><span class="style27">__</span> <span class="style45"><a href="index.php">Home</a> <span class="style27">_<span class="style44">|</span>_</span></span> <span class="style45"><a href="eventos.php">Eventos</a></span><span class="style45"> <span class="style27">_<span class="style44">|</span>_</span> <a href="estabelecimentos.php">Gastronomia</a></span><span class="style45"> <span class="style27">_<span class="style44">|</span>_</span></span> <span class="style45"><a href="eventos.php"></a></span><span class="style45"><a href="./programacao/galeria/fotos.php">Fotos</a></span><span class="style45"> <span class="style27">_<span class="style44">|</span>_</span></span> <span class="style45"><a href="eventos.php"></a></span><span class="style45"><a href="contato.php">Contato</a></span></span></td>
  </tr>
  <tr>
    <td class="style16"><div align="center" class="style48">
      <p><span class="style51">Fale Conosco</span></p>
      <table width="750" border="0">
        <tr>
          <td width="482" valign="top"><p align="left" class="style50">Tel: (12) 8859-4983</p>
            <p class="style50">contato@stardiv.com.br</p></td>
          <td width="258"><form action="envia_email.php" method=post>
            <label for="nome"> <span class="style45"><span class="style37">_</span>Nome:</span> </label>
            <input type="text" name="nome" id="nome" />
            <br />
            <span class="style45">E-mail:            </span>
            <input type="text" name="email" id="email" />
  <label for="textarea"></label>
  <p>
    <textarea name="textarea" id="textarea" cols="35" rows="5"></textarea>
    <label for="enviar"></label>
    <label for="label"> </label>
    <br />
    <span class="style52">_____________</span>
    <input type="submit" name="enviar" id="enviar" value="Enviar" />
    <label for="limpar"> </label>
    <input type="reset" name="limpar" id="limpar" value="Limpar" />
    <br />
  </p>
  </form></td>
        </tr>
      </table>
      </div></td>
  </tr>
  <tr bgcolor="#F5F5F5">
    <td><div align="center">
      <table width="990" border="0">
        <tr>
   <td width="474"><div align="center" class="style14"><span class="style35"><a href="index.php">Home</a>  <span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span> <a href="eventos.php">Eventos</a><span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span><a href="estabelecimentos.php">Gastronomia</a><span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span><a href="./programacao/galeria/fotos.php">Fotos</a><span class="style27">__</span><span class="style29"><span class="style36"><span class="style37">|<span class="style46">|</span></span></span><span class="style27">__</span></span><a href="contato.php">Contato</a></span></div></td>         <td width="229">&nbsp;</td>
          <td width="273"><div align="center" class="style28"><span class="style32">Design by:</span> <span class="style34">Jonathan Molina&nbsp;&nbsp;<a href="./programacao/index.php"><img src="./cadeado.png" width="20"></a></span></div></td>
        </tr>
      </table>
      </div>      <div align="center"></div></td>
  </tr>
</table>
</body>
</html>
