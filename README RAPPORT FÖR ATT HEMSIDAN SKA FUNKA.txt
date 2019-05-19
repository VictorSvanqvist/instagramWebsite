https://chrome.google.com/webstore/detail/moesif-orign-cors-changer/digfbfaphojjndkpccljibejjbppifbc
https://chrome.google.com/webstore/detail/allow-cors-access-control/lhobafahddgcelffkeicbaginigeejlf


AKTIVERA BÅDA PLUGINSEN I CHROME FÖR ATT SIDAN SKA FUNGERA FULLT


Kör hemsidan i chrome med båda pluginsen installerade och påsatta.


Hann inte lära mig tillräckligt om instagram API:n så använder
en annan metod som kräver dessa plugins pågrund utav att jag hämtar
information från en hemsida utan deras tillåtelse.

Att ladda in en profil kan ta upp till 40 sekunder, men om inget laddas in kan du kolla inspect element
om det finns några CORS errors. Om det gör det fungerar inte pluginsen som dem ska.

För att få databasen att fungera, importa .sql filen från github
in i XAMPP phpmyadmin.

Om du vill ansluta till en server databas kan du ändra 
mysqli_connect i config.php. Se till att databasen har en "username",
och en "password" kolumn båda i TEXT format för att hemsidan
ska fungera.

______________________________________________________________________

Det svåraste med projektet har varit att hinna allting i tid.
Jag hade igentligen planerat att kunna hämta all data igenom instagrams API men efter vissa ändringar
instagram har gjort på senaste tiden blev det mycket svårare än jag hade planerat.

Efter jag försökt ett tag gav jag upp och började leta andra alternativ.
Jag visste att andra hemsidor använde deras API så jag gick in på en utav dem och kollade under
"nätverk" i debugger menyn i chrome. Där såg jag att hemsidan skickade en XMLHttpRequest.

Jag gjorde lite research och kunde tillslut skicka samma request från min hemsida och få all data
jag behövde.
Problemet med denna metoden är att den tar väldigt lång tid och chrome har en funktion som heter
CORS som blockar alla requests till andra hemsidor som inte är authoriserade. Detta var lätt att
bypassa då jag bara behövde ladda ner 2 chromeplugins så fungerade det.

Då jag la så mycket tid på att få instagram data hann jag inte med så mycket mer än en simple layout
och ett login system.

Om jag skulle göra om hemsidan skulle jag ha använt instagrams API istället för
den metod jag använder nu.