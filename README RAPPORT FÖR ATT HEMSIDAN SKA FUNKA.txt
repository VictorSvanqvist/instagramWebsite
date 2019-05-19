https://chrome.google.com/webstore/detail/moesif-orign-cors-changer/digfbfaphojjndkpccljibejjbppifbc
https://chrome.google.com/webstore/detail/allow-cors-access-control/lhobafahddgcelffkeicbaginigeejlf


AKTIVERA B�DA PLUGINSEN I CHROME F�R ATT SIDAN SKA FUNGERA FULLT


K�r hemsidan i chrome med b�da pluginsen installerade och p�satta.


Hann inte l�ra mig tillr�ckligt om instagram API:n s� anv�nder
en annan metod som kr�ver dessa plugins p�grund utav att jag h�mtar
information fr�n en hemsida utan deras till�telse.

Att ladda in en profil kan ta upp till 40 sekunder, men om inget laddas in kan du kolla inspect element
om det finns n�gra CORS errors. Om det g�r det fungerar inte pluginsen som dem ska.

F�r att f� databasen att fungera, importa .sql filen fr�n github
in i XAMPP phpmyadmin.

Om du vill ansluta till en server databas kan du �ndra 
mysqli_connect i config.php. Se till att databasen har en "username",
och en "password" kolumn b�da i TEXT format f�r att hemsidan
ska fungera.

______________________________________________________________________

Det sv�raste med projektet har varit att hinna allting i tid.
Jag hade igentligen planerat att kunna h�mta all data igenom instagrams API men efter vissa �ndringar
instagram har gjort p� senaste tiden blev det mycket sv�rare �n jag hade planerat.

Efter jag f�rs�kt ett tag gav jag upp och b�rjade leta andra alternativ.
Jag visste att andra hemsidor anv�nde deras API s� jag gick in p� en utav dem och kollade under
"n�tverk" i debugger menyn i chrome. D�r s�g jag att hemsidan skickade en XMLHttpRequest.

Jag gjorde lite research och kunde tillslut skicka samma request fr�n min hemsida och f� all data
jag beh�vde.
Problemet med denna metoden �r att den tar v�ldigt l�ng tid och chrome har en funktion som heter
CORS som blockar alla requests till andra hemsidor som inte �r authoriserade. Detta var l�tt att
bypassa d� jag bara beh�vde ladda ner 2 chromeplugins s� fungerade det.

D� jag la s� mycket tid p� att f� instagram data hann jag inte med s� mycket mer �n en simple layout
och ett login system.

Om jag skulle g�ra om hemsidan skulle jag ha anv�nt instagrams API ist�llet f�r
den metod jag anv�nder nu.