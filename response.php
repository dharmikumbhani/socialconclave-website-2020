<?php
$postdata = $_POST;



/*echo "<pre>";
print_r($postdata);
exit;*/
$msg = "Payment failed...";
if (isset($postdata['key'])) {
  $key        =   $postdata['key'];
  $salt       =   'O60BVJxGrr';
  $txnid        =   $postdata['txnid'];
  $amount         =   $postdata['amount'];
  $productInfo      =   $postdata['productinfo'];
  $firstname        =   $postdata['firstname'];
  $email            = $postdata['email'];
  $udf5       =   $postdata['udf5'];
  $mihpayid     = $postdata['mihpayid'];
  $status       =   $postdata['status'];
  $resphash       =   $postdata['hash'];
  //Calculate response hash to verify 
  $keyString        =   $key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
  $keyArray         =   explode("|",$keyString);
  $reverseKeyArray  =   array_reverse($keyArray);
  $reverseKeyString = implode("|",$reverseKeyArray);
  $CalcHashString   =   strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString));
  
  
  if ($status == 'success'  && $resphash == $CalcHashString) {
    $msg = "Transaction Successful...";
    //Do success order processing here...

    date_default_timezone_set('Etc/UTC');
                  require 'PHPMailer-master/PHPMailerAutoload.php';
                  $mail = new PHPMailer;
                  //From email address and name
$mail->From = "socialconclavereg@gmail.com";
$mail->FromName = "socialconclaveregs";

//To address and name
$mail->addAddress($email, $firstname);

//Address to which recipient will reply


//Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = "Social Conclave registration";
    $mail->Body = '<!doctype html>
    <html>
      <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Simple Transactional Email</title>
        <style>
          
          
          img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%; 
          }

          body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%; 
          }

          table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
            table td {
              font-family: sans-serif;
              font-size: 14px;
              vertical-align: top; 
          }


          .body {
            background-color: #f6f6f6;
            width: 100%; 
          }

          .container {
            display: block;
            margin: 0 auto !important;
            max-width: 580px;
            padding: 10px;
            width: 580px; 
          }

          .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px; 
          }

          .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%; 
          }

          .wrapper {
            box-sizing: border-box;
            padding: 20px; 
          }

          .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
          }

          .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%; 
          }
            .footer td,
            .footer p,
            .footer span,
            .footer a {
              color: #999999;
              font-size: 12px;
              text-align: center; 
          }

          h1,
          h2,
          h3,
          h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px; 
          }

          h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize; 
          }

          p,
          ul,
          ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px; 
          }
            p li,
            ul li,
            ol li {
              list-style-position: inside;
              margin-left: 5px; 
          }

          a {
            color: #3498db;
            text-decoration: underline; 
          }

          .btn {
            box-sizing: border-box;
            width: 100%; }
            .btn > tbody > tr > td {
              padding-bottom: 15px; }
            .btn table {
              width: auto; 
          }
            .btn table td {
              background-color: #ffffff;
              border-radius: 5px;
              text-align: center; 
          }
            .btn a {
              background-color: #ffffff;
              border: solid 1px #3498db;
              border-radius: 5px;
              box-sizing: border-box;
              color: #3498db;
              cursor: pointer;
              display: inline-block;
              font-size: 14px;
              font-weight: bold;
              margin: 0;
              padding: 12px 25px;
              text-decoration: none;
              text-transform: capitalize; 
          }

          .btn-primary table td {
            background-color: #3498db; 
          }

          .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff; 
          }

          .last {
            margin-bottom: 0; 
          }

          .first {
            margin-top: 0; 
          }

          .align-center {
            text-align: center; 
          }

          .align-right {
            text-align: right; 
          }

          .align-left {
            text-align: left; 
          }

          .clear {
            clear: both; 
          }

          .mt0 {
            margin-top: 0; 
          }

          .mb0 {
            margin-bottom: 0; 
          }

          .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0; 
          }

          .powered-by a {
            text-decoration: none; 
          }

          hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0; 
          }

          @media only screen and (max-width: 620px) {
            table[class=body] h1 {
              font-size: 28px !important;
              margin-bottom: 10px !important; 
            }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
              font-size: 16px !important; 
            }
            table[class=body] .wrapper,
            table[class=body] .article {
              padding: 10px !important; 
            }
            table[class=body] .content {
              padding: 0 !important; 
            }
            table[class=body] .container {
              padding: 0 !important;
              width: 100% !important; 
            }
            table[class=body] .main {
              border-left-width: 0 !important;
              border-radius: 0 !important;
              border-right-width: 0 !important; 
            }
            table[class=body] .btn table {
              width: 100% !important; 
            }
            table[class=body] .btn a {
              width: 100% !important; 
            }
            table[class=body] .img-responsive {
              height: auto !important;
              max-width: 100% !important;
              width: auto !important; 
            }
          }

          @media all {
            .ExternalClass {
              width: 100%; 
            }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
              line-height: 100%; 
            }
            .apple-link a {
              color: inherit !important;
              font-family: inherit !important;
              font-size: inherit !important;
              font-weight: inherit !important;
              line-height: inherit !important;
              text-decoration: none !important; 
            }
            #MessageViewBody a {
              color: inherit;
              text-decoration: none;
              font-size: inherit;
              font-family: inherit;
              font-weight: inherit;
              line-height: inherit;
            }
            .btn-primary table td:hover {
              background-color: #34495e !important; 
            }
            .btn-primary a:hover {
              background-color: #34495e !important;
              border-color: #34495e !important; 
            } 
          }

        </style>
      </head>
      <body class="">
        <span class="preheader"></span>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
          <tr>
            <td>&nbsp;</td>
            <td class="container">
              <div class="content">
                <table role="presentation" class="main">
                  <tr>
                    <td class="wrapper">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td>
                            <p>Hi '.$firstname.',</p>
                            <p>Your Social Conclave registration done.</p>
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                              <tbody>
                                <tr>
                                  <td align="left">
                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td> </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </body>
    </html>
    ';
    $mail->AltBody = "This is the plain text version of the email content";

    $mail->send(); 

  }
  else {
    //tampered or failed
    $msg = "Payment failed...";
  } 
}
else exit(0);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- importing fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900|Raleway:300,400,500,600,700,900&display=swap" rel="stylesheet">
    <!-- font awesome icons stylesheet -->
    <link href="./styles/all.min.css" rel="stylesheet">
    <link href="./styles/fontawesome.min.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="images/Logos/favicon3.ico" />
    <!-- importing resets css sheets -->
    <link rel="stylesheet" type="text/css" href="styles/reset.css">
    <!-- importing custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <title>Registration Payment Response</title>
    <!-- <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=4vheoCGv3E_Ln0pjFPZTyTGNRMBEbqk4__l-hnTLboviliDKoL5buOvrHb0lO3jEnpCACfRFuiy3ypoJF1fAn514KeakLstmWrrjcEYopI_OPOvveg7etaqfXlx_dMqPEwH7RfKg_3l_lRYXpu4pv2M9X9ZaE3WHdy7oGZ37oPLMiA7Ac7fdhyTIOfShwho7fw0wDvgInzIzqRV866cTXyAWlBZp218qMVy3tdzl-itZsi7pFrL5U7QvnrYCEHrWUPo-tpsZaqTS7YW1MoEF8YszG8BUFXYvcHiK0poWBEyXkbfLei_ORtLgmC2tjwjVO4Q2B4vpsr3ZOjRmP__QPANbQXE4teqOVcUSQnsWv1eWeVqO8BmnmIPqvuSks45jEIgQD0kvL1QQyJ43uLanGMgCYCIUooEAJc7f99_ulSO0z9oMKlaJbS4gk4K47eP6eAgDFqcSpYXZtbxmR7bQTX_GApPTd8JPlb2VjFG1L87BkdOE9Gi2klbVPyFTzxN9SEZE2nCuDexG_FlPo5n_CH5znFG3AccDItpXgqf3YGmAfHudbKcz9GHj2tRs2jWAaVp5jlhAiomZaOILGmtFuPlP61G8kzu6CdCpwA-tRQZW2v1X_i13gzc_xRk2paPzXPXB1qWS5snt8CWla5R8e-xaLxSQ2fy-vI1U7doGfxwsgpzbN27-6O7d2gncIKZ3" charset="UTF-8"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- this meta viewport is required for BOLT //-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
    <!-- BOLT Sandbox/test //-->
    
</head>
<meta charset=utf-8 />
<title>Layout</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
#header {
    height: 30px;
}
#footer {
    height: 30px;
    position: absolute;
    bottom: 0;
}
#content {
  max-width: 300px;
  margin: auto;
  padding-top: 200px;
}
body {
    height: 100%;
    margin-bottom: 30px;
}
</style>
</head>
<body>
  <div id="header">
        <!-- navigation bar -->
        <nav class="navbar">
            <div class="logos">
                <a href="index.html" class="sclogocontainer">
                    <img class="sclogopng" src="images/Logos/Social Concalve/socialconclaveogmin.png" alt="Social Conclave Logo" />
                </a>
                <a href="https://www.facebook.com/SocialImpactMPSTME/" class="silogocontainer">
                    <img class="silogopng" src="images/Logos/Social Impact/socialimpactogmin.png" alt="Social Impact Logo" />
                </a>
            </div>
        </nav>
        <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
            <svg class="ham hamRotate ham1" viewbox= "0 0 100 100" width="60">
                <path
                      class="line top"
                      d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                <path
                      class="line middle"
                      d="m 30,50 h 40" />
                <path
                      class="line bottom"
                      d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
              </svg>
        </a>
        <!-- Slider Main Menu -->
        <div class="slider-menu">
            <ul>
                <li><a href="./index.html">HOME</a></li>
                <li onclick="toggleAboutUs()"><a>ABOUT US</a></li>
                <li class="aboutuslist">
                    <a href="./teamconclave2020.html">Team Social Conclave</a><br/>
                    <a href="./letterfromfounder.html">Letter from Founder</a><br/>
                    <!-- <a href="./teamconclave2019.html">Team Social Conclave 2019</a><br/> -->
                    <a href="https://www.facebook.com/SocialImpactMPSTME/">Social Impact</a>
                </li>
                <li onclick="toggleAgendas()"><a>AGENDAS</a></li>
                <li class="specificagendas">
                    <a href="./agendas.html#jcp" onclick="toggleNav()">Juvenile Crime and Prevention</a><br/>
                    <a href="./agendas.html#ypsm"
                    onclick="toggleNav()">Youth, Privacy and Social Media</a><br/>
                    <a href="./agendas.html#fisw"
                    onclick="toggleNav()">Financial Independence and Security of Women</a><br/>
                    <a href="./agendas.html#ca"
                    onclick="toggleNav()">Climate Action</a><br/>
                    <a href="./agendas.html#riu"
                    onclick="toggleNav()">Rural illetracy and Unemployment</a><br/>
                </li>
                <li><a href="./registration.php">REGISTER</a></li>
                <li><a href="./faqs.html">FAQ's</a></li>
                <li><a href="./contactus.html">Contact Us</a></li>
                <!-- <li><a href="https://www.facebook.com/SocialImpactMPSTME/">SOCIAL IMPACT</a></li> -->
            </ul>
        </div>
  </div>
  <div id="content">
        <div>
                    <span style="font-size: 40px;color:blue;"><?php echo $msg; ?><span>
                     <div class="dv">
                        <label for="fullname">
                            <b class="regtitle">Transaction/Order ID:</b>
                        </label>
                        <span class="regtitle"><?php echo $txnid; ?></span>
                     </div>
                     <div class="dv">
                        <label for="fullname">
                            <b class="regtitle">Amount:</b>
                        </label>
                        <span class="regtitle"><?php echo $amount; ?></span>    
                    </div>
                    <div class="dv">
                        <label for="fullname">
                            <b class="regtitle">Mihpayid:</b>
                        </label>
                        <span class="regtitle"><?php echo $mihpayid; ?></span>    
                    </div>
                    <div class="dv">
                        <label for="fullname">
                            <b class="regtitle">Transaction Status:</b>
                        </label>
                        <span class="regtitle"><?php echo $status; ?></span>    
                    </div>
                    <a href="index.html" class="signupbtn topspacerofbutton" >Back</a>
                </div>
  </div>
</body>
</html>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="./scripts/app.js"></script>    