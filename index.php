<!DOCTYPE.html>



 <html>
     <head>
         <meta charset="UTF-8">
         <title>Kosmici mnie uprowadzili - zgłoszenie porwania</title>
         <link rel="stylesheet" type="text/css" href="style.css" />
     </head>
     <body>
         <table>
             <center> 
         <h2>Kosmici mnie uprowadzili - zgłoszenie porwania</h2>
         <p>Podziel się historią uprowadzenia:</p>
         <form method="post" action="raport.php">
             </center>
             <tr>
                 <td>
                     <label for="firstname">Imię:</label>
                 <th><input type="text" id="firstname" name="firstname"/><br /></th>
                 </td>
             </tr> 
            <tr>
                 <td>
                     <label for="lastname">Nazwisko:</label>
                 <th><input type="text" id="lastname" name="lastname"/><br /></th>
                </td>
             </tr>
             
             <tr>
                 <td>
             <label for="email">Adres e-mail:</label>
                 <th><input type="text" id="email" name="email"/><br /></th>
                 </td>
             </tr>
             <tr>
                 <td>
             <label for="whenithappened">Kiedy to się stało ?</label>
             <th><input type="text" id="whenithappened" name="whenithappened"/><br /></th>
                 </td>
             </tr>
             <tr>
                 <td>
             <label for="howlong">Jak długo Cię nie było ?</label>
             <th><input type="text" id="howlong" name="howlong"/><br /></th>
              </td>
             </tr>
             
             <tr>
                 <td>
             <label for="howmany">Ilu kosmitów widziałeś ?</label>
             <th><input type="text" id="howmany" name="howmany"/><br /></th>            
              </td>
             </tr>
             <tr>
                 <td>
             <label for="aliendescription">Opisz ich:</label>
             <th><input type="text" id="aliendescription" name="aliendescription" size="32"/><br />
             </th>
                 </td>
             </tr>
             <tr>
                 <td>
             <label for="whattheydid">Co z Tobą robili ?</label>
                 <th><input type="text" id="whattheydid" name="whattheydid" size="32"/><br /></th>
              </td>
             </tr>
             <tr>
                 <td>
             <label for="fangspotted">Czy widziałeś Kła (mojego psa)?</label>
   
             <th>Tak <input id="fangspotted" name="fangspotted" type="radio" value="tak"/>
                 Nie <input id="fangspotted" name="fangspotted" type="radio" value="nie"/><br/></th>
                 
             </td>
             </tr>
              <tr>
                 <td>
             <img src="fang.jpg" width="100" height="175" alt="Kieł - mój porwany pies."/><br/>
             </td>
             </tr>
              <tr>
                 <td>
             <label for="other">Chcesz dodać coś jeszcze?</label>
                 <th><textarea id="other" name="other"></textarea><br/></th>
              <tr><td><input type="submit" value="Zgłoś uprowadzenie" name="Wyślij"/>   
                  <th></th></td></tr>
             </table>
         </form>
         
         <form method="post" action="who.php">
             <table>
                 <tr><td><input type="submit" value="Pokaż raport" name="Wyślij"/></td></tr>
            </table>
         </form>
</body>
</html>