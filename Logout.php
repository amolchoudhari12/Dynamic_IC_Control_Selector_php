
<?PHP 
session_start(); 
session_destroy(); 


?>
<html>
<head>
    <style>
        .tdKey
        {
            width: 30%;
        }
        
        .tdValue
        {
            width: 70%;
        }
        .watermarkOn {
        color: #CCCCCC;
        font-style: italic;
    }
    </style>

    <script src="Scripts/jquery-1.5.1.min.js" type="text/javascript"></script>
    <script src="Scripts/jquery-ui-1.8.13.custom.min.js" type="text/javascript"></script>
    <link href="Styles/ui-darkness/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
    <link href="Styles/CommonStyle.css" rel="stylesheet" type="text/css" />
    <link href="Styles/style_wizard.css" rel="stylesheet" type="text/css" />
    

    <title>OTEK Corp Home Page - Digital Panel Meters, Bargraphs, Controllers</title>
    <meta name="keywords" content="digital panel meters bargraphs controllers nuclear dpm transmitters receivers" />
    <meta name="description" content="OTEK Corp's home page featuring superior digital panel meters, bargraphs, and controllers" />
</head>
<body bgcolor="#000000">
    <form name="form1" method="post" >
    <div align="center">
        <div id="wrapper">
            <div id="top" align="center">
                <div id="top" align="center">
                    <table border="0" cellspacing="0" cellpadding="0" width="839">
                        <tr>
                            <td>
                                <img src="Images/logo2.png" valign="middle" width="445" height="143" border="0"></a>
                            </td>
                            <td height="146" width="394">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="95">
                                <img src="Images/photobar.png" width="839" height="108" border="0">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="content" align="center" >
        <table border="0" width="835" cellspacing="0" cellpadding="0" bgcolor="383838" style="border-color: #666464;">
           
            <tr>
                <td align="center" valign="top" style="background: #000000">
                    <div class="ui-widget ui-widget-content">
                        <div id="users-contain">
                            <table border="1" id="userss" style="background: #000000; border-color: #666464">
                               <tr>
					                <td class="ui-widget-header ">
					                    <h1>
					                        Logged out</h1>
					                </td>
					            </tr>
					             <tr>
                                    <td>
                                        <label>
                                            <span style="font-size: large">You have successfully logged out.</span>
                                        </label>
                                        <br />
                                        <label>
                                            <h3>
                                                Please <a href='Login.php'>Click here</a> to Log in again.</h3>
                                        </label>
                                        
                                             
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="foot">
        <center>
            <font color="#FFFFFF">&copy; 2010 Copyright OTEK Corp | All Rights Reserved</font>
        </center>
    </div>
    </form>
</body>
</html>
