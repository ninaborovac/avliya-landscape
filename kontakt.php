 <?php include 'header.php'; ?>



 <div class="container center-it" style="text-align: center">
       <p>
        <br>
         <strong>Pošaljite nam Vaše pitanje i mi ćemo nastojati odgovoriti Vam u najkraćem mogućem roku.<br><br>
       OSOBNI PODACI<br><br></strong>
       </p>

      <div id="form">
        <input type="text" placeholder="Unesite ime" id="username"><br><br>
        <input type="text" placeholder="Unesite prezime" id="prezime"><br><br>
        <input type="number" placeholder="Unesite telefon" id="telefon"><br><br>

        <input class="opis" type="opis" placeholder="Detaljan opis" id="poruka"><br><br>
        <input type="text" placeholder="Unesite e-mail" id="email"><br><br>
        <button class="btn btn-primary btn-lg" onclick="submitValues()">Submit</button><br><br>
      </div>

    </div>    

  <div id="text">
  
  </div>


    <script type="text/javascript">

    function submitValues() {

        var username = document.getElementById('username').value;
        var prezime = document.getElementById('prezime').value;
        var telefon = document.getElementById('telefon').value;

        var poruka = document.getElementById('poruka').value;
        var email = document.getElementById('email').value;

       document.getElementById('text').innerHTML = `
          Dobro dosli na nasu stranicu <br>
          ${username}, ${prezime}, ${telefon}, ${poruka}, ${email}
       `;

   document.getElementById('form').hidden = "true";
    };

    </script>

    </div>
    
  <?php include 'footer.php';?>
