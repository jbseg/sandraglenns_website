<?php include('form_process.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>SANDRA GLENNS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sandra Glenns">
  <meta name="keywords" content="Sandra Glenns, portfolio, artwork, artist, Quebec, paintings, Montreal, Canada">
  <meta name="author" content="Joshua B Segal">
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</head>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

</style>
<body class="light-grey">

<!-- Sidebar/menu -->
<nav class="sidebar w3-animate-left" id="mySidebar"><br>
  <h3 class="sidebar-title"><b>SANDRA<br>GLENNZ</b></h3>

  <a href="#main" onclick="Close()" class="w3-bar-item w3-button">PORTFOLIO</a> 
  <a href="#about" onclick="Close()" class="w3-bar-item w3-button">ABOUT ME</a> 
  <a href="#contact" onclick="Close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-hide-large top-bar">
  <span class="left-title">SANDRA GLENNS</span>
  <a href="javascript:void(0)" class="w3-right w3-button" onclick="Open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="Close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div id="main" class="w3-main">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Photo grid -->
  <div class="w3-row" >
    <div class="w3-third" >
        <img id = "img1" style="width:100%" onclick="onClick(this, 'B6GE9QZPEVEP8')">
        <img id = "img2" style="width:100%" onclick="onClick(this)">
        <img id = "img3"  style="width:100%;" onclick="onClick(this)">
    </div>

    <div class="w3-third">
        <img id = "img4" style="width:100%;" onclick="onClick(this)" >
        <img id = "img5" style="width:100%;" onclick="onClick(this)">
        <img id = "img6" style="width:100%;" onclick="onClick(this)" >
    </div>
    
    <div class="w3-third">
      <img id = "img7" style="width:100%" onclick="onClick(this)">
      <img id = "img8" style="width:100%" onclick="onClick(this)">
      <img id = "img9" style="width:100%" onclick="onClick(this)">
    </div>
  </div>

  <!-- Pagination -->
  <div class="pagination">
    <div class="bar">
      <a href="#" class="page-number" onclick="back()">«</a>
      <a id="1" class="page-number-highlighted" onclick="page_one()">1</a>
      <a id="2" class="page-number" onclick="page_two()">2</a>
      <a id="3" class="page-number" onclick="page_three()">3</a>
      <a id="4" class="page-number" onclick="page_four()">4</a>
      <a id="5" class="page-number" onclick="page_five()">5</a>
      <a href="#" class="page-number" onclick="next()">»</a>
    </div>
  </div>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
    <div class="w3-modal-content w3-animate-zoom">
      <img id="img">
      <p id="caption"></p>
      <!--
      <div id="paypal-button-container"></div>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" id = "paypal_value">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>
  -->
    </div>



  </div>



  <!-- About section -->
  <div class="about-me" id="about">
    <h4><b>About Me</b></h4>
    <div class="bio">
    <img src="./img/sandra.jpg" alt="Me" style="width:100%" class="w3-padding-32" alt="Sandra Glenns profile picture">

      <h4>Sandra Glenns</h4>
      <p>From a unique cross between realism and impressionism, Sandra Glenns has made her mark as a painter in Montréal, Québec. Sandra was born to a Latvian, immigrant father and native, Montrealer mother on February 4, 1943. Early in her childhood, Sandra lived a comfortable, quaint life and enjoyed mainly sports like basketball and volleyball. In fact, in the 8th grade, Sandra was chosen to be the captain of her school’s volleyball. But it wasn’t until high school that Sandra started taking an interest in art. At her high school, however, art class wasn’t given much thought and was reduced to an optional additive to lunch. But Sandra was interested, and went to the art class everyday. “It was a nice change from the math and history”, she says, “I truly loved every minute of it”. It didn’t take long for her teachers to start noticing her art and asking to keep it for the future. However, her career would have to be put on hold when she married Burton Glenns In 1961, at the age of 18. (not in NY) She spent two years traveling to New York City and back and staying at home while Burton worked late hours. But Sandra grew restless and needed to do something besides waiting in the house. So she started up her art again by taking an evening course at the Montreal Museum of Fine Arts with Arthur Lismer. “The art course was the thing I was excited about. The thing I looked forward to during my week”, reflected Sandra. After 3 children and 5 years later, Sandra went back to school to get her fine arts degree at Loyola College. Among her teachers, Sandra says her most influential was professor and head of the Fine Art Department Esther Werthiemer and Royal Canadian Artists of Canada Leslie Coppold. But it was Armand Tattosian that really changed her career path. It was the first day of his class and Armand said, anybody here that wants a degree can leave… there is only one way to become to artist… you must invest all your time. And Sandra stayed. She never finished her degree. For the next 50 years, Sandra practiced her art as much as possible and stayed close with her friend and mentor Leslie Coppold. Now at the age of 75, Sandra is very active with her artwork and “paints now more than ever”. Sandra’s lifetime of experience and passion has led her to a love of life and a feeling of fulfillment.
      </p>
      <p>mail: sandrag744@yahoo.ca</p>
      <p>tel:  1(514)-629-7424</p>
      </div>
    </div>
  

  <!-- Contact section -->
  <div class="contact-body" id="contact">
    <div class="content">
      <h4 class="w3-center"><b>Contact Me</b></h4
      <p>If you would like to purchase or have any questions about Sandra's paintings feel free to contact her here!</p>
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="w3-section">
          <label>Name</label>
          <input class="w3-input w3-border" type="text" name="name" value="<?= $name ?>" required>
          <span class="error"><?= $name_error?></span>
        </div>
        <div class="w3-section">
          <label>Email</label>
          <input class="w3-input w3-border" type="text" name="email" value="<?= $email ?>"required>
          <span class="error"><?= $email_error?></span>
        </div>
        <div class="w3-section">
          <label>Message</label>
          <textarea class="message-inputs w3-border" type="text" name="message" required><?= $message ?> </textarea>
        </div>
        <button type="submit" class="w3-button send-message">Send Message</button>
      </form>
    </div>
  </div>

  <footer>Joshua B Segal, Copyright &copy; 2018</footer>

</div>

<!-- End page content -->


<script>
var current_page_no = 1;
// Script to open and close sidebar
function Open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function Close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element, s) {
  document.getElementById("img").src = element.src;
  if((element.naturalHeight)/ (window.innerHeight) > (element.naturalWidth) / window.innerWidth){
    document.getElementById("img").style.height =  (window.innerHeight*.9) + "px";
    document.getElementById("img").style.width ="auto";
  }
  else{
    document.getElementById("img").style.width = (window.innerWidth*.9) + "px";
    document.getElementById("img").style.height ="auto";
  }
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
  document.getElementById("paypal_value").value = s;
}
function page_one(){
  
  document.getElementById("img1").src = "./img/fall_georgian_bay.jpg";
  document.getElementById("img1").alt = "Fall Georgian Bay | Acrylic on canvas | 24 x 36 | 1250";
  document.getElementById("img2").src = "./img/clear.jpg";
  document.getElementById("img2").alt = "Clear | Acrylic on canvas | 18 x 14 | 750";
  document.getElementById("img3").src = "./img/in_deep_thought.jpg";
  document.getElementById("img3").alt = "In Deep Thought | Oil on canvas | 16 x 12 | 750";
  document.getElementById("img4").src = "./img/elizabeth_taylor_with_emerald.jpg";
  document.getElementById("img4").alt = "Elizabeth Taylor With Emerald | Oil on canvas | 16 x 12 | 1250";
  document.getElementById("img5").src = "./img/antique_dress.jpg";
  document.getElementById("img5").alt = "Antique Dress | Oil on canvas | 24 x 18 | 1500";
  document.getElementById("img6").src = "./img/blue_tattoos.jpg";
  document.getElementById("img6").alt = "Blue Tattoos | Oil on canvas | 28 x 22 | 1250";
  document.getElementById("img7").src = "./img/st._urbain.jpg";
  document.getElementById("img7").alt = "St. Urbain Street | Acrylic on canvas | 22 x 28 | 950";
  document.getElementById("img8").src = "./img/two_girls.jpg";
  document.getElementById("img8").alt = "Two Girls | Acrylic on canvas | 28 x 22 | 1250";
  document.getElementById("img9").src = "./img/daylight.jpg";
  document.getElementById("img9").alt = "Daylight | Oil on canva | 24 x 20 | 1500";

  document.getElementById(current_page_no + "").className = "page-number";
  document.getElementById("1").className = "page-number-highlighted";
  current_page_no = 1;
}
page_one();
function page_two(){
  //load the new photos
  document.getElementById("img1").src = "./img/l'esteral.jpg";
  document.getElementById("img1").alt = "L'Estéral Québec | Acrylic on Canvas | 18 x 24 | 1250";
  document.getElementById("img2").src = "./img/love.jpg";
  document.getElementById("img2").alt = "Love | Acrylic on Canvas | 18 x 24 | 950";
  document.getElementById("img3").src = "./img/girl_in_green.jpg";
  document.getElementById("img3").alt = "Girl In Green | Oil on Canvas | 18 x 14 | 750";
  document.getElementById("img4").src = "./img/serenity.jpg";
  document.getElementById("img4").alt = "Serenity | Oil on Canvas | 30 x 24 | 1500";
  document.getElementById("img5").src = "./img/cheetah.jpg";
  document.getElementById("img5").alt = "Cheetah | Oil on Canvas | 18 x 24 | 1500";
  document.getElementById("img6").src = "./img/winter_in_toronto.jpg";
  document.getElementById("img6").alt = "Winter In Toronto | Acrylic on Canvas | 24 x 30 | 950";
  document.getElementById("img7").src = "./img/st._urbain_II.jpg";
  document.getElementById("img7").alt = "St. Urbain Street II | Acrylic on Canvas | 24 x 36 | 1250";
  document.getElementById("img8").src = "./img/mount_dena.jpg";
  document.getElementById("img8").alt = "Mount Dena | Oil on Canvas | 24 x 20 | SOLD";
  document.getElementById("img9").src = "./img/orange_lillies.jpg";
  document.getElementById("img9").alt = "Orange Lillies | Oil on Canvas | 24 x 20 | 1500";

  document.getElementById(current_page_no + "").className = "page-number";
  document.getElementById("2").className = "page-number-highlighted";
  current_page_no = 2;
}

function page_three(){
  document.getElementById("img1").src = "./img/fancy_gown.jpg";
  document.getElementById("img1").alt = "Fancy Gown | Acrylic on Canvas | 30 x 24 | 1500";
  document.getElementById("img2").src = "./img/spanish_lady.jpg";
  document.getElementById("img2").alt = "Spanish Lady | Acrylic on Canvas | 20 x 24 | 950";
  document.getElementById("img3").src = "./img/white_scarf.jpg";
  document.getElementById("img3").alt = "White Scarf | Oil on Canvas | 20 x 16 | 950";
  document.getElementById("img4").src = "./img/cantons-de-lest.jpg";
  document.getElementById("img4").alt = "Cantons-de-l'Est Québec | Acrylic on Canvas | 30 x 40 | 1950";
  document.getElementById("img5").src = "./img/fleur_de_noel.jpg";
  document.getElementById("img5").alt = "Fleur de Noël | Oil on Canvas | 20 x 16 | 950";
  document.getElementById("img6").src = "./img/thorned_rose.jpg";
  document.getElementById("img6").alt = "Thorned Rose | Acrylic on Canvas | 24 x 20 | 1500";
  document.getElementById("img7").src = "./img/young_asian.jpg";
  document.getElementById("img7").alt = "Young Asian | Oil on Canvas | 18 x 14 | 1500";
  document.getElementById("img8").src = "./img/ready_to_serve.jpg";
  document.getElementById("img8").alt = "Ready to Serve | Oil on Canvas | 16 x 20 | 650";
  document.getElementById("img9").src = "./img/blue_lady.jpg";
  document.getElementById("img9").alt = "Blue Lady | Oil on Canvas | 20 x 16 | 950";

  document.getElementById(current_page_no + "").className = "page-number";
  document.getElementById("3").className = "page-number-highlighted";
  current_page_no = 3;
}
function page_four(){
  document.getElementById("img1").src = "./img/focus.jpg";
  document.getElementById("img1").alt = "Focus | Acrylic on Canvas | 20 x 16 | 950";
  document.getElementById("img2").src = "./img/gray_rap.jpg";
  document.getElementById("img2").alt = "Gray Rap | Oil on Canvas | 20 x 16 | 950";
  document.getElementById("img3").src = "./img/blue_drapes.jpg";
  document.getElementById("img3").alt = "Blue Drapes | Oil on Canvas | 14 x 18 | 650";
  document.getElementById("img4").src = "./img/trans_lady.jpg";
  document.getElementById("img4").alt = "Trans Lady | Acrylic on Canvas | 20 x 16 | 750";
  document.getElementById("img5").src = "./img/merylin_monroe.jpg";
  document.getElementById("img5").alt = "Marylin Monroe | Oil on Canvas | 20 x 16 | 1950";
  document.getElementById("img6").src = "./img/bouquet_of_roses.jpg";
  document.getElementById("img6").alt = "Bouquet of Roses | Oil on Canvas | 20 x 16 | 1250";
  document.getElementById("img7").src = "./img/christmas_day.jpg";
  document.getElementById("img7").alt = "Christmas Day | Acrylic on Canvas | 24 x 36 | 1500";
  document.getElementById("img8").src = "./img/jeremy_in_green.jpg";
  document.getElementById("img8").alt = "Jeremy in Green | Oil on Canvas | 16 x 12 | 550";
  document.getElementById("img9").src = "./img/red_rose_dress.jpg";
  document.getElementById("img9").alt = "Red Rose Dress | Acrylic on Canvas | 24 x 18 | 750";

  document.getElementById(current_page_no + "").className = "page-number";
  document.getElementById("4").className = "page-number-highlighted";
  current_page_no = 4;
}
function page_five(){
  document.getElementById("img1").src = "./img/blue_eyed_girl_with_jacket.jpg";
  document.getElementById("img1").alt = "Blue Eyed Girl with Jacket | Oil on Canvas | 20 x 16 | 850";
  document.getElementById("img2").src = "./img/mt_damavand.jpg";
  document.getElementById("img2").alt = "Mount Damavand | Oil on Canvas | 16 x 20 | SOLD";
  document.getElementById("img3").src = "./img/girl_with_gold_necklace.jpg";
  document.getElementById("img3").alt = "Girl with Gold Necklace | Oil on Canvas | 20 x 16 | 850";
  document.getElementById("img4").src = "./img/queen_in_red.jpg";
  document.getElementById("img4").alt = "Queen in Red | Oil on Canvas | 16 x 12 | 950";
  document.getElementById("img5").src = "./img/merylin_monroe.jpg";
  document.getElementById("img5").alt = "Marylin Monroe | Oil on Canvas | 20 x 16 | 1950";
  document.getElementById("img6").src = "./img/bouquet_of_roses.jpg";
  document.getElementById("img6").alt = "Bouquet of Roses | Oil on Canvas | 20 x 16 | 1250";
  document.getElementById("img7").src = "./img/christmas_day.jpg";
  document.getElementById("img7").alt = "Christmas Day | Acrylic on Canvas | 24 x 36 | 1500";
  document.getElementById(current_page_no + "").className = "page-number";
  document.getElementById("5").className = "page-number-highlighted";
  current_page_no = 5;
}
function next(){
  switch(current_page_no){
   case 1:
        page_two();
        break;
    case 2:
        page_three();
        break;
    case 3:
        page_four();
        break;
    case 4:
        page_five();
        break;
    case 5:
        page_one();
        break;
    default:
        alert("Something went wrong in the next switch");
    }
}
function back(){
  switch(current_page_no){
   case 1:
        page_five();
        break;
    case 2:
        page_one();
        break;
    case 3:
        page_two();
        break;
    case 4:
        page_three();
        break;
    case 5:
    	page_four();
    	break;
    default:
        alert("Something went wrong in the back switch");
  }
}


    
</script>
</body>
</html>

