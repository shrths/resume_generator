<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="discription" />
    <title>Resume</title>
    
    <link rel="stylesheet" href="resume_style_index.css" />
    <script src="resume_pdf.js"></script>
    <link
      rel="stylesheet"
      href="../../stylesheets/coloringpage.css"
      type="text/css"
      media="screen, projection"
    />
    <link
      rel="stylesheet"
      href="../../stylesheets/coloringpageprint.css"
      type="text/css"
      media="print"
    />
  </head>

  <body>
      <?php
      
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $linkedIn = $_POST['LinkedIn'];
    $obj = $_POST['bio'];
    $s_name = $_POST['school'];
    $sYOF = $_POST['syop'];
    $sperc = $_POST['sp'];
    $c_name = $_POST['puc'];
    $cYOF = $_POST['pyop'];
    $cperc = $_POST['pp'];
    $b_name = $_POST['degree'];
    $bYOF = $_POST['dyop'];
    $bperc = $_POST['dp'];
    $proj1 = $_POST['p1'];
    $pro1 = $_POST['p11'];
    $proj2 = $_POST['p2'];
    $pro2 = $_POST['p22'];
    $proj3 = $_POST['p3'];
    $pro3 = $_POST['p33'];
    $certi1 = $_POST['c1'];
    $cert1 = $_POST['c11'];
    $certi2 = $_POST['c2'];
    $cert2 = $_POST['c22'];
    $certi3 = $_POST['c3'];
    $cert3 = $_POST['c33'];
    $pl = $_POST['prog'];
    $wt = $_POST['web'];
    $os = $_POST['os'];
    $db = $_POST['db'];
    $coi = $_POST['cs'];

?>
<header>
     
      <div class="n_m">
        <input type="text" id="name" name="name" value="<?php echo $name?>" />
      </div>
      <div class="ano">
        <input type="email" id="email" name="email" value="<?php echo $email?>"/> | <input type="number" id="phone" name="phone" value="<?php echo $phone?>" />
      </div>
      <div class="anon">
        <p><?php echo $obj?>
        <input type="text" id="linkedin" name="linkedin" value="<?php echo $linkedIn?>"/>
      </div>
    </header>
    <div class="text-obj pro">
      <label for="obj">OBJECTIVE:</label>
      <textarea name="obj" id="obj" cols="180" rows="4" value=""><?php echo $obj?></textarea>
    </div>
    <h2>EDUCATION</h2>
    <div class="school">
      <div class="SSLC">
        <input type="text" id="s_name" name="s_name" value="<?php echo $s_name?>"/>
        
        <input type="text" id="sYOF" name="sYOF" value="<?php echo $sYOF?>"/>
        
        <input type="number" id="sperc" name="sperc" value="<?php echo $sperc?>"/>
      </div>
      <div class="SSLC">
        
        <input type="text" id="c_name" name="c_name" value="<?php echo $c_name?>"/>
        
        <input type="text" id="cYOF" name="cYOF" value="<?php echo $cYOF?>"/>
        
        <input type="number" id="cperc" name="cperc" value="<?php echo $cperc?>"/>
      </div>
    </div>
    <div class="SSLC BE">
      
      <input type="text" id="b_name" name="b_name" value="<?php echo $b_name?>" />
      
      <input type="text" id="bYOF" name="bYOF" value="<?php echo $bYOF?>"/>
     
      <input type="number" id="bperc" name="bperc" value="<?php echo $bperc?>" />
    </div>
    <h2>PROJECTS</h2>
    <div class="project">
      <div class="text-obj">
        
        <input type="text" id="proj1" name="proj1" value="<?php echo $proj1?>"/>
        <textarea name="pro1" id="pro1" cols="188" rows="4" placeholder="description"><?php echo $pro1?></textarea>
      </div>
      <div class="text-obj">
        <input type="text" id="proj2" name="proj2" value="<?php echo $proj2?>"/>
        <textarea name="pro2" id="pro2" cols="188" rows="4" placeholder="description"><?php echo $pro2?></textarea>
      </div>
      <div class="text-obj">
        <input type="text" id="proj3" name="proj3" value="<?php echo $proj3?>"/>
        <textarea name="pro3" id="pro3" cols="188" rows="4" placeholder="description"><?php echo $pro3?></textarea>
      </div>
    </div>
    <h2>CERTIFICATION</h2>
    <div class="project">
      <div class="text-obj">
        <input type="text" id="certi1" name="certi1" value="<?php echo $certi1?>"/>
        <textarea name="cert1" id="cert1" cols="188" rows="4" placeholder="desc"><?php echo $cert1?></textarea>
      </div>
      <div class="text-obj">
        <input type="text" id="certi2" name="certi2" value="<?php echo $certi2?>"/>
        <textarea name="cert2" id="cert2" cols="188" rows="4" placeholder="desc"><?php echo $cert2?></textarea>
      </div>
      <div class="text-obj">
        <input type="text" id="certi3" name="certi3" value="<?php echo $certi3?>"/>
        <textarea name="cert3" id="cert3" placeholder="desc" cols="188" rows="4"><?php echo $cert3?></textarea>
      </div>
    </div>
    <h2>TECHNICAL SKILLS</h2>
    <div class="skills">
      <div>
        <label for="pl">Programming languages</label>
        <input type="text" name="pl" id="pl" value="<?php echo $pl?>" />
      </div>
      <div>
        <label for="wt">Web Technology</label>
        <input type="text" name="wt" id="wt" value="<?php echo $wt?>"/>
      </div>
      <div>
        <label for="os">Packages & Operating Environment familiarity</label>
        <input type="text" name="os" id="os" value="<?php echo $os?>"/>
      </div>
      <div>
        <label for="db">Databases</label>
        <input type="text" name="db" id="db" value="<?php echo $db?>"/>
      </div>
      <div>
        <label for="coi">Courses of Interest</label>
        <input type="text" name="coi" id="coi" value="<?php echo $coi?>"/>
      </div>
    </div>
    <p>
      I hear by affirm the information in this document is accurate and true to
      best of my knowledge
    </p>
    <a href="javascript:window.print()"
      ><img
        src="https://www.thoughtco.com/thmb/4JrCu8i_vZaF7Z5nsuo0RKNQgcs=/768x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-512803768-590a58a05f9b586470463c04.jpg"
        alt="print this page"
        id="print-button"
    /></a>
  </body>
  <script >
    let btn = document.querySelector("#print-button");
btn.addEventListener("click", function () {
  btn.style.display = "none";
});
  </script>
</html>