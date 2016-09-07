<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="sven" >
    <link rel="icon" type="image/ico" href="favicon.ico">

	<title>Manser Truck AG</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/carousel.css" media="screen">

  <!-- Bootstrap Date-Picker Plugin -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="scss/style.css" media="screen">
    <!--link rel="stylesheet" href="css/print.css" media="print"-->
</head>
<body>
<?php include "tmpl_header.html"; ?>
        <article class="content container">
          <section>
            <h3>Vermietung</h3>
            <p>
              Wir vermieten Ihnen gerne tage- oder wochenweise Liefer- und Spezialfahrzeuge. Nutzen Sie das Formular, um den Mietpreis für ein Fahrzeug zu bestimmen und dieses gleich zu reservieren. 
              <br><br>
              Über die aktuell verfügbaren Fahrzeuge und die günstigen Konditionen können Sie sich gerne telefonisch oder per email informieren. 
            </p>
            <form class="bootstrap-iso" id="form_anmeldung" action="#" method="GET">
              <fieldset>
              <div class="form-group col-md-8" id="div_input_name">
                  <label for="inputName">Name</label>
                  <input type="text" class="form-control inputName" name="inputName" id="inputName" min_len="3" placeholder="Vorname" required="true">
                  <p class="error_help_msg">Eingabe zu kurz oder ungültige Zeichen</p>
              </div>
              <div class="form-group col-md-8" id="div_input_familyname">
                  <label for="inputFamilyName">Name</label>
                  <input type="text" class="form-control inputName" name="inputFamilyName" id="inputFamilyName" min_len="3" placeholder="Familienname" required="true">
                  <p class="error_help_msg">Eingabe zu kurz oder ungültige Zeichen</p>
              </div>

              <div class="form-group col-md-6">
                  <label for="inputEmail">Email address</label>
                  <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" required="true">
              </div>

              </fieldset>
              <fieldset>
              <div class="form-group col-md-6">
                  <label for="inputTruckType">Wählen Sie den Fahrzeug-Typ</label>
                  <select class="form-control" name="inputTruckType" id="inputTruckType">
                    <option value="null">Bitte Auswählen</option>
                    <option value="unimog_300">Mercedes Unimog (300CHF/Tag)</option>
                    <option value="altego_400">Mercedes Altego (400CHF/Tag)</option>
                    <option value="actros_500">Mercedes Actros (500CHF/Tag)</option>
                  </select>
              </div>         
              <span class="clearfix">&nbsp;</span>     
              <div class="form-group col-md-3">
                  <label for="rentStart">Ab wann benötigen Sie das Fahrzeug?</label>
                  <input class="form-control datepicker calcPrice" 
                  		name="rentStart" id="rentStart" type="text" 
                  		value=""/>           
              </div>
              <div class="form-group col-md-3">
                  <label for="rentEnd">Bis wann benötigen Sie das Fahrzeug?</label>
                  <input class="form-control datepicker calcPrice" 
                  	name="rentEnd" id="rentEnd" type="text" 
                  	value="">
                  
              </div>
               <div class="form-group col-md-5">
                  <label>Mietpreis:</label>
                  <label id="mietPreis"></label>
               </div>
              </fieldset>
              <div class="checkbox">
    <label>
      <input type="checkbox" name="remember"> Remember me
    </label>
  </div>
              <button type="submit">Absenden</button>
            </form>
          </section>
          

        </article>
        <footer class="content">
            <a href="http://www.google.com"><span class="topomed-google"></span></a>
            <a href="http://www.facebook.com"><span class="topomed-facebook"></span></a>
            <a href="http://wwww.twitter.com"><span class="topomed-twitter"></span></a>
            <a href="http://behance.com"><span class="topomed-behance"></span></a>
            <a href="http://github.io"><span class="topomed-github"></span></a>
            <a href="http://vimeo"><span class="topomed-vimeo"></span></a>
        </footer>

    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap_hover_dropdown.js"></script>
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          var date_input=$('input[class="form-control datepicker"]'); //our date input has the name "date"
          var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
          var options={
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
          };
          date_input.datepicker(options);
          
					errors = {};          
          
          /* check if required length is met */
					checkLength = function (el) {
						if ($(el).val().length < $(el).attr('min_len')){
								$(el).parent().addClass('has-error').removeClass('has-success');
								$(el).next().text("Eingabe zu kurz, mindestens "+$(el).attr('min_len')+" Zeichen"); //addClass('active'); 
								$(el).next().fadeIn(); //addClass('active'); 
								$(el).attr("title","Eingabe zu kurz, minimum "+$(el).attr('min_len')+" Zeichen");	
								errors[el.name] = 1;	
								$(el).focus();				
						} else if ($(el).val().match(/[<>;#"\'_]/g)){
								$(el).next().text("Ungültige Zeichen gefunden, Abbruch"); //addClass('active'); 
								$(el).next().fadeIn(); //addClass('active'); 
						}
						else {
							$(el).parent().removeClass('has-error').addClass('has-success');
							$(el).next().fadeOut(); //removeClass('active');
							$(el).attr("title","");
							errors[el.name]=0;
							console.log( $( el ).serialize() );
						}
						
					}          
          
          /* enable input check for nameInputs */
					$('.inputName').blur(function() {
						checkLength(this);
					});              
        });
        
        
				$("#form_anmeldung").submit(function(){
					var formIsValid = 0;        
					$.each(errors,function(key, val){ 
							formIsValid += 1*Number(val);	
					});		
					
					return formIsValid==0;
				});        
        
        /* jQuery */
        $('.calcPrice').blur(function () {
        	selectedTruck = $("#inputTruckType").val();
          if (selectedTruck!=null && selectedTruck!="null"){
            tCalcPrice = 0;
            price = parseInt(selectedTruck.split("_")[1]);
            startDate = new Date($("#rentStart").val());
            endDate = new Date($("#rentEnd").val());
            
            if (!(isNaN(startDate) || isNaN(endDate))){
              dayDiff = (endDate-startDate)/(24*3600*1000);
              if (dayDiff>=0){
                tCalcPrice=(1+dayDiff)*price;
              }
              else{
                alert("Vermietung zu den angegebenen Daten nicht möglich. Rückgabedatum darf nicht vor Ausleihe liegen.");
              }
            }
            $("#mietPreis").html(""+tCalcPrice+" CHF");
          }
        });
        

    </script>
</body>
</html>
