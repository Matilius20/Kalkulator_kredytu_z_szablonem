<!doctype html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<title>{$page_title|default:"Tytuł domyślny"}</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
                <link rel="stylesheet" href="{$conf->app_url}/css/skel.css" />
		<link rel="stylesheet" href="{$conf->app_url}/css/style.css" />
		<link rel="stylesheet" href="{$conf->app_url}/css/style-xlarge.css" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
	</head>
       
        <body class="landing">           
            <div>			
                <div>				
                    <center><h2>{$page_title|default:"Tytuł domyślny"}</h2></center>			                      
                </div>			           
                <div id="three" class="wrapper style3 special">								                                  
                    <header class="major">                                                              
                        <h2>{$page_description|default:"Opis domyślny"}</h2>					                
                    </header>			           
                </div>              
            </div>           
            <div id="app_content" class="content">
                {block name=content} Domyślna treść zawartości .... {/block}       
            </div>                  
            <footer id="footer">			                                                                      
                <div class="container">	                                                                     
                    <p>Użyto szablonu: <a href="http://templated.co">TEMPLATED</a>.Wykonał Mateusz Kala</p>  
                </div>			         
            </footer>	
        </body>
</html>