<?php //header('Access-Control-Allow-Origin: *'); ?>
<!doctype html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="Landing page">
    <meta name="generator" content="SM 1.0">
	<meta property="og:url"           content="https://terpelsicumple.com/" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Gana con Terpel" />
	<meta property="og:description"   content="Me preparo para vivir una experiencia de lujo junto a Terpel en Qatar 2022. ⛽✈⚽. Estoy participando en #tanqueayviaja" />
	<meta property="og:image"         content="https://terpelsicumple.com/wp-content/uploads/2022/02/og-image.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php wp_head(); ?> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <title><?php bloginfo( 'name' ); ?></title>
  </head>
  <body>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1256780738083187',
      cookie     : true,
      xfbml      : true,
      version    : 'v12.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
		
	function checkLoginState() {
		FB.login(function(response) {
			if (response.authResponse) {
			 console.log('Welcome!  Fetching your information.... ');
			 FB.api('/me',  { locale: 'es_LA', fields: 'name, email'}, function(response) {
			   fillFbData(response);
			 });
			} else {
			 console.log('User cancelled login or did not fully authorize.');
			}
		});
   		};
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v12.0&appId=300631884734815&autoLogAppEvents=1" nonce="U55cjXRs"></script>
