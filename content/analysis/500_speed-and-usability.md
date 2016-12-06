#Speed and usability




##Karlskrona Hockey



|                   |                    |
|-------------------|--------------------|
|Testsida           | http://www.khk.se/ |
|Pagespeed Desktop  | 47/100             |
|Pagespeed Mobile   | 62/100             |
|Laddningtid        | 6,5s               |
|Requests           | 219                |
|Storlek            | 8Mb                |

####Bör korrigeras enligt Google Pagespeed:
1. Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
2. Utnyttja cachelagring i webbläsare

####Förbättringspunkter
Sidan använder på många ställen thumbnail bilder som är i originalstorlek. Det är en ganska stor bov till att sidans totala storlek drar iväg. De använder också väldigt mycket olika skript som ligger i header, bland annat google analytics, facebook med mera.  


##Volvo
|                   |                    |
|-------------------|--------------------|
|Testsida           | http://volvocars.se/ |
|Pagespeed Desktop  | 65/100           |
|Pagespeed Mobile   | 45/100             |
|Laddningtid        | 5,5s               |
|Requests           | 84                |
|Storlek            | 8,7Mb               |

####Bör korrigeras enligt Google Pagespeed:
1. Utnyttja cachelagring i webbläsare
2. Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
3. Aktivera komprimering


####Förbättringspunkter
Det skulle kunna se till så att man inte blir omdirigerad från startsidan. De hade också kunnat jobba med att minifiera CSS, HTML och annan kod.



##Vapiano


|                   |                    |
|-------------------|--------------------|
|Testsida           | http://vapiano.se/ |
|Pagespeed Desktop  | 54/100             |
|Pagespeed Mobile   |  44/100             |
|Laddningtid        | 6,5s              |
|Requests           | 41                |
|Storlek            | 5Mb                |

####Bör korrigeras enligt Google Pagespeed:
1. Aktivera komprimering
2. Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
3. Utnyttja cachelagring i webbläsare

####Utvärdering
De skulle kunna använda minifierad kod för snabbare laddningstider. Det finns också en del bilder på sidan som skulle kunna optimeras.




##McDonalds

|                   |                    |
|-------------------|--------------------|
|Testsida           | http://mcdonalds.se/ |
|Pagespeed Desktop  | 62/100           |
|Pagespeed Mobile   | 48/100            |
|Laddningtid        | 5s              |
|Requests           | 77                |
|Storlek            | 1,5mb                |

####Bör korrigeras enligt Google Pagespeed:
1. Utnyttja cachelagring i webbläsare
2. Ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten
3. Aktivera komprimering

####Utvärdering
Trots att sidan har ganska mycket mindre storlek än övriga testade så syns det inte direkt på laddningstiderna. De skulla kunna använda text i sin navbar istället för bilder och det skulle också kunna minifiera sin kod.



##Jämförelse och analys

####Jämförelse

| Hemsida  | Storlek  |   Request   |  Laddningtid | GPS desktop  |GPS Mobile   |    Sida               |    
|----------|----------|-------------|--------------|--------------|-------------|-----------------------|
| KHK      | 8Mb      |  219        |   6,5s       | 47/100       |    62/100   |  http://www.khk.se/   |
| Volvo    | 8,7Mb    |  84         |   5,5s       | 65/100       |    45/100   |  http://volvocars.se/ |
| Vapiano  | 5Mb      |  41         |   6,5s       | 54/100       |    44/100   |  http://vapiano.se/   |
| McDonalds| 1,5Mb    |  77         |   5s         | 62/100       |    48/100   |  http://mcdonalds.se/ |

####Analys
Det absolut vanligaste förbättringspunkten enligt Google Pagespeed är att ta bort javascript och CSS-kod som fördröjer inläsningen av synliga element. På samtliga sidor vi testade så var detta fel med. Det verkar inte vara det lättaste felet att lösa och det är lite intressant att det ofta är googles eget script som sätter sig på tvären. En annan vanlig förbättringspunkt som är betydligt lättare att lösa är att minifiera koden. Sedan är det ju såklart svårt att säga hur pass mycket snabbare laddningstider man får med en så liten uppgradering. Man kanske får se det som en helhet och att alla små förbättringar blir till en stor ju fler man gör. Bilder var också ett problem som dök upp på flera håll och det kan ju vara väldigt tidskrävande att optimera sina bilder om man inte har något automatiserat system som löser det.

Jag tror att man kan undvika många vanliga problem om man i planeringstadiet av en hemsida sätter sig ner och tänker igen dom här områdena och hur man på ett bra sätt kan hantera de. Att göra den här typen av ändringar av en hemsida som redan är i produktion tror jag skulle vara omstädigt och kostsamt.

När vi gjorde testerna i gruppen noterade vi att mätresultaten av laddningstider varierade ganska kraftigt. De kunde diffa från allt mellan 5 till 20 sekunder. Det kan därför kanske vara en idee att i utvecklingsstadiet göra testar på flera olika enheter så att man hamnar inom den gräns man satt upp på.

Jag testad några till hemsidor för att avgöra när jag själv tycker en hemsida är långsam och allt över 7 sekunders laddningstid tyckte jag var lite för mycket. Mellan 3-7s tycker jag det var acceptabelt och under 2 sekunder upplevde jag det som snabbt. Det hade också lite med förvätningar att göra. Stora hemsidor med mycket information störde jag med mindre på när laddningstiderna blev längre.


####Grupp
An, jakob, Jimmy, Marcus och Nicklas. Hangout 2016/11/29
