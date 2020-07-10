  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta charset="UTF-8"/>
      <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 

      <title>{$titulo}</title>
    </head>
    <body>  

	<div class="container">
		<div class="row">
			{if isset($usuario)}
				{include file='Cabecera.tpl'}
			{else}
				{include file='Login.tpl'}
			{/if}
		</div>
