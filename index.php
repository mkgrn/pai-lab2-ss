<!DOCTYPE.html>



 <html>
     <head>
         <meta charset="UTF-8">
         <title>Kosmici mnie uprowadzili - zgłoszenie porwania</title>
         <link rel="stylesheet" type="text/css" href="style.css" />
     </head>
     <body>
     <h2>Kosmici mnie uprowadzili - zgłoszenie porwania</h2>
    <p>Podziel się historią uprowadzenia:</p>
    <form method="post" action="mailto:marek@porwaniprzezufo.com">
         <label for="firstname">Imię:</label>
         <input type="text" id="firstname" name="firstname"/><br />
         <label for="lastname">Nazwisko:</label>
         <input type="text" id="lastname" name="lastname"/><br />
         <label for="email">Adres e-mail:</label>
         <input type="text" id="email" name="email"/><br />
         <label for="whenithappened">Kiedy to się stało ?</label>
         <input type="text" id="whenithappened" name="whenithappened"/><br />
         <label for="howlong">Jak długo Cię nie było ?</label>
         <input type="text" id="howlong" name="howlong"/><br />
         <label for="howmany">Ilu kosmitów widziałeś ?</label>
         <input type="text" id="howmany" name="howmany"/><br />
         <label for="aliendescription">Opisz ich:</label>
         <input type="text" id="aliendescription" name="aliendescription" size="32"/><br />
         <label for="whattheydid">Co z Tobą robili ?</label>
         <input type="text" id="whattheydid" name="whattheydid" size="32"/><br />
         <label for="fangspotted">Czy widziałeś Kła (mojego psa)?</label>
         Tak <input id="fangspotted" name="fangspotted" type="radio" value="tak"/>
        Nie <input id="fangspotted" name="fangspotted" type="radio" value="nie"/><br/>
        <img src="fang.jpg" width="100" height="175" alt="Kieł - mój porwany pies."/><br/>
        <label for="other">Chcesz dodać coś jeszcze?</label>
        <textarea id="other" name="other"></textarea><br/></th>
        <input type="submit" value="Zgłoś uprowadzenie" name="Wyślij"/>
    </form>
</body>
</html>