<!DOCTYPE html>
<html>
	<head>

        <title>PSS Protection & Security Service</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
		<link rel="icon" type="image/png" href="img/favicon.png">
		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "fade";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
            $(function(){
				$('#menu-seo1').slicknav({
					prependTo:'#navigation-menu-seo1'
				});
			});
            $(function(){
				$('#menu-seo2').slicknav({
					prependTo:'#navigation-menu-seo2'
				});
			});
            $(function(){
				$('#menu-seo3').slicknav({
					prependTo:'#navigation-menu-seo3'
				});
			});
            $(function(){
				$('#menu-seo4').slicknav({
					prependTo:'#navigation-menu-seo4'
				});
			});
            $(function(){
				$('#menu-seo5').slicknav({
					prependTo:'#navigation-menu-seo5'
				});
			});
            $(function(){
				$('#menu-seo6').slicknav({
					prependTo:'#navigation-menu-seo6'
				});
			});
            $(function(){
				$('#menu-seo7').slicknav({
					prependTo:'#navigation-menu-seo7'
				});
			});$(function(){
				$('#menu-seo8').slicknav({
					prependTo:'#navigation-menu-seo8'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });		    
    	</script>
        <script>
            //delegate binding to only links that have the `.top` class
            $(document).delegate('a.top', 'click', function () {
                $('html, body').stop().animate({ scrollTop : 0 }, 900);
                return false;
            });
        </script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>">
		    <h1><a href="#page1" data-transition="<?php echo $transitionefect ?>"><img src="img/logo.png" alt="LOGO"></a></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>">
            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                <div class="ui-block-a buttons-semir "><a data-ajax="false" class="ui-btn buttons-radius top" href="#top" data-transition="<?php echo $transitionefect ?>">^ Nach oben</a></div>
            </div>
			<h2>© 2015 PSS Protection & Security Service</h2>
			<h1>Powered by Eoss | <a href="http://pss-web.de/" rel="external">Desktop Seite</a> | <a href="#impressum">Impressum</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/1.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/2.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/0.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn velikodugme buttons-radius" href="tel:<?php echo $telephone ?>"><img src="img/call-01.png" alt="" style="width: 37px; padding-top: 5px;"><br>Anrufen</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'><br>Finden";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'><br>Finden";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'><br>Finden";
									prostordugme.appendChild(dugme);
									}
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'><br>Finden";
								prostordugme.appendChild(dugme);
							}



							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
					</div>
				</fieldset>



              <div data-role="collapsible-set">
                  <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="carat-d" data-expanded-icon="carat-u">
                      <h3>Unternehmen</h3>
                      <a class="ui-btn buttons-radius" href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a>
                      <a class="ui-btn buttons-radius" href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a>
                      <a class="ui-btn buttons-radius" href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a>
                      <a class="ui-btn buttons-radius" href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a>
                      <a class="ui-btn buttons-radius" href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a>
                      <a class="ui-btn buttons-radius" href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a>
                      <a class="ui-btn ui-nodisc-icon ui-btn-icon-left ui-icon-mail buttons-radius" href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a>
                  </div>
              </div>

				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></div>
				</div>

              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></div>
              </div>

              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a"><a class="ui-btn velikodugme buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>"><img src='img/mail.png' style='width: 50px; padding-top: 5px;'><br>Kontakt</a></div>
              </div>


		  </div>
		  <h2>Sicherheitsdienst & Services Hamburg</h2>

            <h3>Willkommen bei Protection & Security Service</h3>

                <p>Unser umfassendes Portfolio bietet Ihnen effizienten Service aus einer Hand um jederzeit zuverlässig ihren speziellen Bedürfnissen gerecht zu werden - profitieren Sie davon.</p>

                <p>Langjähriges Branchenverständnis und Erfahrung sowie strengste Ansprüche garantieren Ihnen hohe Qualitätsstandards und eine professionelle Betreuung – diskret und mit dem nötigen Fingerspitzengefühl.</p>

                <p>Durch kurze Entscheidungswege werden  ihre Kundenwünsche schnell und flexibel realisiert. Bestmöglicher Service und ihre Zufriedenheit sind unser Ziel.</p>

                <p>Das Engagement von PSS bedeuten erstklassige Leistungen auf hohem Niveau mit dem Anspruch langfristiger Partnerschaft auf die Sie sich verlassen können.</p>

            <h3>Unser Service - Ihre Sicherheit!</h3>

            <div class="ct">
                <p>Mitglied im</p><br/>
                <img src="img/bdws.gif" alt="bdws"/><br/>
                <p>BUNDESVERBAND DER <br/>
                    SICHERHEITSWIRTSCHAFT</p>
            </div>

        </div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 Jobs ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></li>
                            <li><a href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a></li>
                            <li><a href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a></li>
							<li><a href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a></li>
							<li><a href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a></li>
							<li><a href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a></li>
							<li><a href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a></li>
							<li><a href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Kontakt</a></li>
						</ul>
					</section>
                    
					<h2>Stellenangebote</h2>

						<p>Wir sind immer auf der Suche nach qualifiziertem Personal.</p>
					<br/>                    
					<h3>VORRAUSSETZUNGEN FÜR EINE EINSTELLUNG:</h3>
                    <ul>
                        <li>Mindestalter 21 Jahre, außer bei Praktikanten und Auszubildenden</li>
                        <li>Bereitschaft zur Voll- oder Teilzeitarbeit</li>
                        <li>Einwandfreie private und familiäre Lebensverhältnisse, möglichst verheiratet, aber keine Bedingung</li>
                        <li>Keine Vorstrafen, Alkohol-, Drogen- oder Arzneimittelabhängigkeit</li>
                        <li>Unbescholten und gesundheitlich geeignet, sowie vertrauenswürdig und zuverlässig</li>
                        <li>Verantwortungsbewusstes selbständiges Handeln</li>
                        <li>Bereitschaft zur Nacht-, Sonn- und Feiertagsarbeit</li>
                    </ul>
                    
					<h3>WIR BIETEN:</h3>
                    <ul>
                        <li>Krisensicherer Arbeitsplatz</li>
                        <li>Arbeitskleidungen</li>
                        <li>Freischichten zwischen Nacht / Tag - und Wochenendarbeit</li>
                        <li>Fahrtkostenzuschuss bei überregionalen Einsätzen</li>
                        <li>Feste Arbeitseinsätze</li>
                        <li>Interne Schulungen und Ausbildungen</li>
                    </ul>

                </div>
			</div>		
		</div>
		
		<!-- page 2 Jobs Ende ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- contactform ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                                <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></li>
                                <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></li>
                                <li><a href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a></li>
                                <li><a href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a></li>
                                <li><a href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a></li>
                                <li><a href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a></li>
                                <li><a href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a></li>
                                <li><a href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a></li>
                                <li><a href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></li>
							</ul>
					</section>
					<div>

                        <h3>Haben Sie Fragen?</h3>

                        <fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
                            <!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
                            <div class="ui-block-a"><a class="ui-btn velikodugme buttons-radius" href="tel:<?php echo $telephone ?>"><img src="img/call-01.png" alt="" style="width: 37px; padding-top: 5px;"><br>Anrufen</a></div>
                            <!-- ovdje se upisuje grad i adresa iz koje  -->
                            <div class="ui-block-b" id="findUS2">
                                <script>
                                    var ua = navigator.userAgent;
                                    if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
                                        console.log("Android uslo");
                                        var prostordugme=document.getElementById('findUS2');
                                        var dugme= document.createElement('a');
                                        dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
                                        dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
                                        dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'><br>Finden";
                                        prostordugme.appendChild(dugme);
                                    }
                                    else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
                                        console.log("Iphone ");
                                        var prostordugme=document.getElementById('findUS2');
                                        var dugme= document.createElement('a');
                                        dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
                                        dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
                                        dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'><br>Finden";
                                        prostordugme.appendChild(dugme);
                                    }
                                    else if (ua.indexOf("BlackBerry") >= 0) {

                                        console.log("Blakberu je prosao ")
                                        var prostordugme=document.getElementById('findUS2');
                                        var dugme= document.createElement('a');
                                        dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
                                        dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
                                        dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'><br>Finden";
                                        prostordugme.appendChild(dugme);
                                    }
                                    else {
                                        console.log("nije nigdje uslo default ")
                                        var prostordugme=document.getElementById('findUS2');
                                        var dugme= document.createElement('a');
                                        dugme.setAttribute('class', "ui-btn velikodugme buttons-radius");
                                        dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
                                        dugme.innerHTML="<img src='img/location.png' style='width: 37px; padding-top: 5px;'><br>Finden";
                                        prostordugme.appendChild(dugme);
                                    }



                                    // if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                                    // // some code..
                                    // }

                                </script>
                            </div>
                        </fieldset>

                        <h4>Protection & Security Service</h4>
                        <p>Usedomstraße 23 A<br/>
                        DE - 22047 Hamburg<br/>
                        Telefon: +49 (0) 40 - 415 48 167<br/>
                        Telefax: +49 (0) 40 - 415 48 168</p>


						<h2>Kontaktformular</h2>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Vor- & Nachname (*): <input type="text" id="naam" name="naam" value="" placeholder="Ihr Vor- & Nachname..." required/><br>
							E-mail (*): <input type="email" id="mail" name="mail" value="" placeholder="Ihre E-mail..." required/><br>
							Telefon: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Ihre Telefonnummer..."/><br>
                            Betreff: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Betreff Ihrer Nachricht..." required/><br>
							Nachricht (*):<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Schreiben Sie Ihre Nachricht hier..." required></textarea> <br />
							<input type="submit" value="Absenden" name="submit" class="btn" id="input-dugme">
                            <p>Pflichtfelder (*) müssen ausgefüllt werden!</p>
						</form>
					</div>
				</div>
			</div>
		</div>
<!-- contactform ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page 3 Referenzen ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div id="page3" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                                <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></li>
                                <li><a href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a></li>
                                <li><a href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a></li>
                                <li><a href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a></li>
                                <li><a href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a></li>
                                <li><a href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a></li>
                                <li><a href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a></li>
                                <li><a href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Kontakt</a></li>
							</ul>
					</section>

					<h2>Referenzen</h2>

                        <h3>Unsere Kunden genießen absolute Vertraulichkeit!</h3>
                    <p>Ihre Erwähnung findet nur nach vorheriger Genehmigung statt.</p>

                    <p>Selbstverständlich berichten wir in einem persönlichen Gespräch gerne von unseren Kunden, welche die Genehmigung zur Veröffentlichung gegeben haben. Weiterhin erhalten Sie von uns die Ansprechpartner mit Telefonnummer,
                        damit Sie sich die Qualität der erbrachten Dienstleistungen von anderer Seite bestätigen lassen können.</p>
					
				</div>
			</div>
		</div>
<!--page 3 Referenzen Ende ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- page Objektschutz ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div id="objekt" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo1">
                        <ul id="menu-seo1" class="dn">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></li>
                            <li><a href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a></li>
                            <li><a href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a></li>
                            <li><a href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a></li>
                            <li><a href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a></li>
                            <li><a href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a></li>
                            <li><a href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Kontakt</a></li>
                        </ul>
                    </section>

                    <h2>Objektschutz</h2>

                    <p>Der ständige Schutz Ihrer Objekte und Werke ist für jedes Unternehmen unentbehrlich, denn die Folgen von Schäden sind in jedem Fall unangenehm und teuer. PSS erstellt daher als ersten Schritt zur Sicherung Ihrer Objekte und Werke eine Sicherheitsanalyse,
                        bei der Gelände und Objekte aus dem Blickwinkel der potentiellen Eindringlinge begutachtet werden.</p>
                    <p>Unsere Mitarbeiter sorgen für den Schutz Ihres Unternehmens und ihrer Werte, wobei die Überprüfung von Gebäuden, Einrichtungen und technischen Anlagen mit inbegriffen sind. Sie kontrollieren den Werksverkehr, die Zugangsberechtigungen, empfangen Besucher, Übernehmen die Telefonvermittlung,
                        stellen Ausweise aus, regeln die Hauspostverteilung und sorgen vor allem dafür, dass Unbefugte draußen bleiben.</p>
                    <p>In jedem Fall gehen wir auf Ihre besonderen Bedürfnisse ein und erstellen dafür individuelle Angebote und Dienstleistungen.</p>

                    <h4>Welche Dienste benötigen Sie?</h4>
                    <ul>
                        <li>Objektschutz und Werkschutz</li>
                        <li>Hotelsicherheit</li>
                        <li>Einzelhandelsschutz</li>
                        <li>Kaufhausdetektive</li>
                        <li>Doorman - Shopguard</li>
                        <li>Brandwache</li>
                        <li>Baustellenbewachung</li>
                        <li>Öffnungs- und Schließdienste</li>
                        <li>Pförtner- und Empfangsdienste</li>
                        <li>Parkraumüberwachung</li>
                        <li>Kontrollfahrten</li>
                        <li>Lieferantenabfertigung</li>
                        <li>Besucherbetreuung</li>
                        <li>Schlüsselverwaltung</li>
                        <li>Urlaubsbewachung</li>
                    </ul>

                    <h4>Wir unterstützen Sie mit:</h4>
                    <ul>
                        <li>Bewachungspersonal</li>
                        <li>Hundeführer</li>
                        <li>Kurierdienstfahrten</li>
                    </ul>

                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-nodisc-icon ui-btn-icon-left ui-icon-mail buttons-radius" href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></div>
                    </div>

                </div>
            </div>

        </div>
        <!--page Objektschutz Ende ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- page Veranstaltungsschutz ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div id="schutz" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo2">
                        <ul id="menu-seo2" class="dn">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></li>
                            <li><a href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a></li>
                            <li><a href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a></li>
                            <li><a href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a></li>
                            <li><a href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a></li>
                            <li><a href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a></li>
                            <li><a href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Kontakt</a></li>
                        </ul>
                    </section>

                    <h2>Veranstaltungsschutz</h2>

                    <p>Bei der Absicherung kultureller Veranstaltungen, Kunstausstellungen und auch internationaler Events (Politik, Wissenschaft) sorgen wir für einen reibungslosen Ablauf. Selbstverständlich
                        legen wir dabei Wert auf das dem Anlass entsprechende Erscheinungsbild und auch auf den kommunikativen Umgang.</p>
                    <p>Die erfahrenen Mitarbeiter von PSS werden speziell für diese Aufgaben trainiert und geschult. Der freundliche Umgang mit Besuchern, Fremdsprachenkenntnisse und ausgebildete Ersthelfer sind dabei für uns genau so selbstverständlich wie sofortiges Einschreiten bei Eskalationen und konsequente Unterbindung von Störungen. Dabei sind Sensibilität und Einfühlungsvermögen
                        unverzichtbare Anforderungen an das Einsatzpersonal, um auch in Stresssituationen gezielt und angemessen handeln zu können.</p>
                    <p>Wir betreuen und beraten Sie auch gerne vor und während der Veranstaltung in allen Sicherheitsfragen.</p>

                    <h4>Welche Dienste benötigen Sie?</h4>
                    <ul>
                        <li>Ein- und Ausgangskontrolle</li>
                        <li>Arealüberwachung</li>
                        <li>Ordnerdienste</li>
                        <li>Kassenpersonal</li>
                        <li>Gästeempfang</li>
                        <li>Garderobendienste</li>
                        <li>Parkplatzabsicherung</li>
                        <li>Streifendienste</li>
                        <li>Ausstellungsüberwachung</li>
                        <li>Zutrittskontrolle</li>
                        <li>Ordner- und Absperrdienst</li>
                        <li>Absicherung von Straßenfesten</li>

                    </ul>

                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-nodisc-icon ui-btn-icon-left ui-icon-mail buttons-radius" href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></div>
                    </div>

                </div>
            </div>

        </div>
        <!--page Veranstaltungsschutz Ende ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- page Wohngebiets-Sicherheit ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div id="wohn" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo3">
                        <ul id="menu-seo3" class="dn">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></li>
                            <li><a href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a></li>
                            <li><a href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a></li>
                            <li><a href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a></li>
                            <li><a href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a></li>
                            <li><a href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a></li>
                            <li><a href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Kontakt</a></li>
                        </ul>
                    </section>

                    <h2>Wohngebiets-Sicherheit</h2>

                    <p>In Wohngebieten achtet PSS auf ein sicheres, freundliches und damit attraktiveres Wohnumfeld. Die Sicherung der Wohnqualität
                        spielt nicht nur eine wichtige Rolle, sondern ist für die meisten Wohnungsgesellschaften unverzichtbar.</p>

                    <p>Durch unsere enge Zusammenarbeit mir der Polizei und anderen staatlichen Einrichtungen sorgen wir stets für ein hohes Sicherheitsgefühl der Mieter.</p>

                    <p>Durch die regelmäßige Bewachung durch unsere Wachdienste zu wechselnden Zeiten werden Gefahren schneller erkannt, somit Sachbeschädigungen und Vandalismus minimiert. Langjährige Erfahrung, professionelle Schwachstellenanalysen, angemessene
                        Präsenz vor Ort und den Einsatz aller notwendigen technischen und organisatorischen Mittel schaffen optimale Sicherheit.</p>

                    <p>Unsere Spezialisten betreuen und überwachen mit ihrem persönlichen Einsatz vor Ort. Sie sind dort, wo sie gebraucht werden. Sie meistern Situationen mit verlässlichem, seriösem und kompetentem Auftreten.
                        Als Handlungsgrundlage dient eine mit Ihnen vereinbarte Dienstanweisung, speziell für Ihre Anforderungen.</p>

                    <h4>Welche Dienste benötigen Sie?</h4>
                    <ul>
                        <li>Streifendienst zur Durchsetzung von Sicherheit und Ordnung</li>
                        <li>Gebäudekontrollen auf Sachbeschädigung und Einbruch</li>
                        <li>Verhinderung von Vandalismus</li>
                        <li>Verhinderung von illegaler Abfall und Schadstoffentsorgung</li>
                        <li>Hausmeisterdienste</li>
                        <li>Allgemeine Kleinreparaturen</li>
                        <li>Babysitting durch qualifiziertes weibliches Personal</li>
                        <li>Sicherheitsbegleitung</li>
                        <li>Hol- und Bringdienste</li>
                        <li>Hundeführer</li>
                    </ul>

                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-nodisc-icon ui-btn-icon-left ui-icon-mail buttons-radius" href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></div>
                    </div>

                </div>
            </div>

        </div>
        <!--page Wohngebiets-Sicherheit Ende ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- page Veranstaltungsservice ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div id="service" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo4">
                        <ul id="menu-seo4" class="dn">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></li>
                            <li><a href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a></li>
                            <li><a href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a></li>
                            <li><a href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a></li>
                            <li><a href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a></li>
                            <li><a href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a></li>
                            <li><a href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Kontakt</a></li>
                        </ul>
                    </section>

                    <h2>Veranstaltungsservice</h2>

                    <p>Sie und Ihre Gäste erwarten einen reibungslosen und störungsfreien Ablauf - wir sorgen dafür. PSS übernimmt alle Aufgaben im Rahmen der Vorbereitung und Durchführung Ihres Projektes,
                        Ihres Festivals oder Ihrer Veranstaltungsreihe. Nichts wird dem Zufall überlassen. Für Ihre Veranstaltung in allen Bereichen sind wir Ihr kompetenter Partner.</p>

                    <p>Wir arbeiten in engster Koordination mit unseren Auftraggebern und reagieren flexibel auf veränderte Situationen. Wir sorgen zu jeder Zeit und unter allen Umständen ein Maximum an Sicherheit.
                        Nennen Sie uns Ihr Thema und Ihr Ziel. Wir visualisieren und machen Botschaften erlebbar, im passenden Rahmen und mit stimmiger Inszenierung.</p>

                    <p>Unsere Kunden schätzen an uns besonders die schnelle, unkomplizierte Abwicklung der Aufträge, die Flexibilität und Zuverlässigkeit.</p>

                    <h4>Bei folgenden Events unterstützen wir Sie:</h4>
                    <ul>
                        <li>Messen</li>
                        <li>Ausstellungen</li>
                        <li>Produktpräsentationen</li>
                        <li>Jubiläen</li>
                        <li>Presse- Veranstaltungen</li>
                        <li>Kunstauktionen</li>
                        <li>Konzerten</li>
                        <li>Workshops</li>
                        <li>Foren</li>
                        <li>Tagungen</li>
                        <li>Stadtfesten</li>
                        <li>Wochenmärkten</li>
                        <li>Roadshows</li>
                        <li>Kongressen</li>
                        <li>Sportevents</li>
                    </ul>

                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-nodisc-icon ui-btn-icon-left ui-icon-mail buttons-radius" href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></div>
                    </div>

                </div>
            </div>

        </div>
        <!--page Veranstaltungsservice Ende ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- page Ermittlungs- & Detektivdienst ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div id="ermittlung" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo5">
                        <ul id="menu-seo5" class="dn">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></li>
                            <li><a href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a></li>
                            <li><a href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a></li>
                            <li><a href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a></li>
                            <li><a href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a></li>
                            <li><a href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a></li>
                            <li><a href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Kontakt</a></li>
                        </ul>
                    </section>

                    <h2>Ermittlungs- & Detektivdienst</h2>

                    <h4>Sie brauchen Gewissheit oder benötigen Sie Beweise?</h4>

                    <p>Wird die Krankheit eines Mitarbeiters nur simuliert? Stimmen die Abrechnungen des Außendienstes wirklich? Wir klären,
                        ob Ihre Angestellten unerlaubten Nebentätigkeiten nachgehen, der Konkurrenz Betriebsgeheimnisse weitergeben oder Fehlbestände im Lager durch Mitarbeiter entstehen.</p>

                    <p>Wir beschaffen Ihnen die Fakten, die Sie benötigen, um die richtigen Entscheidungen zu treffen. Unsere Mitarbeiter verfügen über fundierte Kenntnisse und langjährige Erfahrung
                        in technischen, wirtschaftlichen und juristischen Bereichen, sowie in Ermittlungsmethoden und Observationstechniken.</p>

                    <p>Wir dürfen Ihnen versichern, dass wir uns der Verantwortung und des Vertrauens, welches Sie in uns setzen, auch in diesem Aufgabenbereich voll bewusst sind.</p>

                    <h4>Wirtschaftsbereich:</h4>
                    <ul>
                        <li>Aufklärung von Schwarzarbeit</li>
                        <li>Aufklärung von Versicherungsbetrug</li>
                        <li>Ermittlung von Schuldnern</li>
                        <li>Ermittlung bei Diebstahl und Betrug</li>
                        <li>Überprüfung von AD-Mitarbeitern</li>
                        <li>Testkäufe und Testdiebstähle</li>
                        <li>Überwachung des Personaleingangs</li>
                        <li>Mitarbeiterkontrollen</li>
                        <li>Überprüfung von Missbrauch bei Lohnfortzahlungen im Krankheitsfall</li>
                        <li>Überprüfung einer unerlaubten Nebentätigkeit von Mitarbeitern</li>
                    </ul>

                    <h4>Privatbereich:</h4>
                    <ul>
                        <li>Sorgerechtsangelegenheiten</li>
                        <li>Unterhaltsangelegenheiten</li>
                        <li>Ermittlung von Partnerschaftsangelegenheiten und Ehewidrigkeiten</li>
                        <li>Aufenthaltsermittlung</li>
                    </ul>

                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-nodisc-icon ui-btn-icon-left ui-icon-mail buttons-radius" href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></div>
                    </div>

                </div>
            </div>

        </div>
        <!--page Ermittlungs- & Detektivdienst Ende ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- page Gebäudemanagement ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div id="management" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo6">
                        <ul id="menu-seo6" class="dn">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></li>
                            <li><a href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a></li>
                            <li><a href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a></li>
                            <li><a href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a></li>
                            <li><a href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a></li>
                            <li><a href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a></li>
                            <li><a href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Kontakt</a></li>
                        </ul>
                    </section>

                    <h2>Gebäudemanagement</h2>

                    <p>Wir bieten optimale und professionelle Betreuung, Wartung, Reinigung und Instandsetzung von Gebäuden an. Unsere Leistungen sind auf die
                        Interessen und Wünsche des Kunden individuell zugeschnitten und überzeugen nicht zuletzt durch den vernünftigen Preis.</p>

                    <p>Ein professionelles Gebäudemanagement ist ein wichtiger Faktor für den Werterhalt von Grundstücken, Gebäuden und Anlagen. Wir sorgen dafür, dass Ihr Gebäude auch von außen ein blendendes Outfit hat.
                        Wir reinigen Ihre Außenanlagen wie Gehwege, Parkplätze sowie Hofflächen. Kleinere Reparaturen erledigen unsere Hausmeister gleich an Ort und Stelle. Schnell und unkompliziert.</p>

                    <p>Damit Sie genau wissen womit Sie rechnen können, erstellen wir nicht nur einen Leistungsplan, sondern auch ein transparentes und kostenloses Angebot.</p>

                    <h4>Folgende Dienste bieten wir an:</h4>
                    <ul>
                        <li>Objektreinigung</li>
                        <li>Fensterputzservice</li>
                        <li>Treppenhausreinigung</li>
                        <li>Büroreinigung</li>
                        <li>Kaufhausreinigung</li>
                        <li>Hausmeisterdienste</li>
                        <li>Allgemeine Kleinreparaturen</li>
                        <li>Einkaufservice</li>
                        <li>Urlaubskontrollen</li>
                        <li>Botengänge</li>
                        <li>Kleintransporte</li>
                        <li>Garten- und Landschaftsarbeiten</li>
                        <li>Gebäudeinstandhaltung</li>
                    </ul>

                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir "><a class="ui-btn ui-nodisc-icon ui-btn-icon-left ui-icon-mail buttons-radius" href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></div>
                    </div>

                </div>
            </div>

        </div>
        <!--page Gebäudemanagement Ende ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- page Angebot anfordern ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div id="angebot" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo7">
                        <ul id="menu-seo7" class="dn">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></li>
                            <li><a href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a></li>
                            <li><a href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a></li>
                            <li><a href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a></li>
                            <li><a href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a></li>
                            <li><a href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a></li>
                            <li><a href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Kontakt</a></li>
                        </ul>
                    </section>

                    <h2>Kostenvoranschlag</h2>

                    <p>Um Ihnen die Anfrage so leicht wie möglich zu gestalten, haben wir hier für Sie ein Formular vorbereitet, wo Sie uns Ihre gewünschten Leistungen einfach mitteilen können.</p>

                    <h4>Wir werden uns anschließend umgehend mit Ihnen in Verbindung setzen.</h4>

                    <form action="angebot.php" data-parsley-validate method="post" data-ajax="false">
                    <fieldset data-role="controlgroup">
<!--                        <p>data-parsley-validate method="post" action="angebot.php" data-ajax="false"</p>-->
                        <h4>Ich wünsche Informationen zu:</h4>

                        <input type="checkbox" name="checkbox-1a" value="Objektschutz" id="checkbox-1a">
                        <label for="checkbox-1a">Objektschutz</label>
                        <input type="checkbox" name="checkbox-2a" value="Wohngebiets-Sicherheit" id="checkbox-2a">
                        <label for="checkbox-2a">Wohngebiets-Sicherheit</label>
                        <input type="checkbox" name="checkbox-3a" value="Ermittlungs- und Detektivdienst" id="checkbox-3a">
                        <label for="checkbox-3a">Ermittlungs- und Detektivdienst</label>
                        <input type="checkbox" name="checkbox-4a" value="Pförtner / Empfangsdienste" id="checkbox-4a">
                        <label for="checkbox-4a">Pförtner / Empfangsdienste</label>
                        <input type="checkbox" name="checkbox-5a" value="Veranstaltungsschutz" id="checkbox-5a">
                        <label for="checkbox-5a">Veranstaltungsschutz</label>
                        <input type="checkbox" name="checkbox-6a" value="Veranstaltungsservice" id="checkbox-6a">
                        <label for="checkbox-6a">Veranstaltungsservice</label>
                        <input type="checkbox" name="checkbox-7a" value="Baustellenbewachung" id="checkbox-7a">
                        <label for="checkbox-7a">Baustellenbewachung</label>
                    </fieldset>
                    <fieldset data-role="controlgroup">
                        <input type="text" id="interesse" name="interesse" value="" placeholder="Sonstige Interessen"/>
                        <textarea style="height:150px;" id="bericht" name="bericht" placeholder="Anfrage oder Mitteilung"></textarea>
                        <input type="text" id="firma" name="firma" value="" placeholder="Firma"/>

                        <input type="radio" name="radio-choice-1" id="radio-choice-1" value="Herr" checked="checked">
                        <label for="radio-choice-1">Herr</label>
                        <input type="radio" name="radio-choice-1" id="radio-choice-2" value="Frau">
                        <label for="radio-choice-2">Frau</label>
                    </fieldset>
                    <fieldset data-role="controlgroup">
                        <input type="text" id="naam" name="naam" value="" placeholder="Ihr Vor- & Nachname (*)" required/>
                        <input type="text" id="adr" name="adr" value="" placeholder="Straße, Nr."/>
                        <input type="text" id="ort" name="ort" value="" placeholder="PLZ, Ort"/>
                        <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Telefon"/>
                        <input type="tel" id="fax" name="fax" value="" placeholder="Telefonfax"/>
                        <input type="email" id="mail" name="mail" value="" placeholder="E-mail (*)" required/>
                    </fieldset>
                    <fieldset data-role="controlgroup">
                        <h4>Wünschen Sie eine bestimmte Art der Rückkontaktaufnahme?</h4>
                        <select name="select-choice-1" id="select-choice-1">
                            <option value="Telefon">Telefon</option>
                            <option value="Telefax">Telefax</option>
                            <option value="Mail">E-Mail</option>
                            <option value="Postweg">Postweg</option>
                        </select>
                        <br/>
                    </fieldset>
                    <fieldset data-role="controlgroup">
                        <input type="submit" value="Absenden" name="submit" class="btn" id="input-dugme">
                        <p>Pflichtfelder (*) müssen ausgefüllt werden!</p>
                    </fieldset>
                    </form>
                </div>
            </div>

        </div>
        <!--page Angebot anfordern Ende ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- page Impressum ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div id="impressum" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo8">
                        <ul id="menu-seo8" class="dn">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Startseite</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Jobs</a></li>
                            <li><a href="#page3" data-transition="<?php echo $transitionefect ?>">Referenzen</a></li>
                            <li><a href="#objekt" data-transition="<?php echo $transitionefect ?>">Objektschutz</a></li>
                            <li><a href="#wohn" data-transition="<?php echo $transitionefect ?>">Wohngebiets-Sicherheit</a></li>
                            <li><a href="#schutz" data-transition="<?php echo $transitionefect ?>">Veranstaltungsschutz</a></li>
                            <li><a href="#service" data-transition="<?php echo $transitionefect ?>">Veranstaltungsservice</a></li>
                            <li><a href="#ermittlung" data-transition="<?php echo $transitionefect ?>">Ermittlungs- & Detektivdienst</a></li>
                            <li><a href="#management" data-transition="<?php echo $transitionefect ?>">Gebäudemanagement</a></li>
                            <li><a href="#angebot" data-transition="<?php echo $transitionefect ?>">Angebot anfordern</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Kontakt</a></li>
                        </ul>
                    </section>

                    <h2>Impressum</h2>

                    <h4>Inhaltlich verantwortlich nach § 5 TMG und § 55 RSTV:</h4>

                    <p>PSS Protection & Security Service<br/>
                    Usedomstr. 23a<br/>
                    22047 Hamburg<br/>
                    Deutschland</p>

                    <p>Inhaber: Sven Hamidovic</p>

                    <h4>Kontakt</h4>
                    <p>Telefon: 040 / 415 48 167<br/>
                    Telefax: 040 / 415 48 168<br/>
                    E-Mail: info@pss-web.de</p>

                    <h4>Umsatzsteuer-ID:</h4>
                    <p>DE262646412</p>

                   <h4>Haftungsausschluss</h4>
                    <p>Trotz sorgfältiger Prüfung können wir keine Haftung für die Inhalte externer Links übernehmen. Für den Inhalt dieser Seiten sind ausschließlich deren Betreiber verantwortlich.</p>

                </div>
            </div>

        </div>
        <!--page Impressum Ende ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page success ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			    <p>Das Kontaktformular wurde gesendet!</p>

                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page1" data-transition="<?php echo $transitionefect ?>">Zurück zu Startseite</a></div>
                </div>
			</div>
		
		</div>
<!--page success ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>Das Kontaktformular wurde NICHT gesendet wegen einem Fehler!</p>
			</div>
            <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                <div class="ui-block-a buttons-semir "><a class="ui-btn buttons-radius" href="#page1" data-transition="<?php echo $transitionefect ?>">Zurück zu Startseite</a></div>
            </div>
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->

	</body>
</html>
