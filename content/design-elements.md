#Design elements

På [Temasidan](theme-selector) finns alla aktulla teman för sidan.

####Texture opacity

Jag vill leka med textur och jag testade att lägga in texturen på hela bakgrunden. För att få den att tränga igenom main elementet så använde jag en RGBA färg på bakgrunden och satte A till ungefär 0.3. Jag testade först att använda opacity men jag tyckte inte det fungerade så bra eftersom att texten då också blir genomskilnig. Jag tyckte sidan såg trevlig ut men den kändes lite för enkel så jag testade också att bryta up de olika blocken för att få en bättre uppdelning av sidans olika delar. De ordnade jag med att lägga på en marginal på inner-wrap.

Krav:

* textur
* opacitet
* centrerat

####Gradients

Jag ville göra ett lite mer udda tema så jag satsade på att utgå ifrån en stark grönaktig färg. Jag valde att lägga till en gradient på menyknapparna för att de skulle få effekten av att vara blanka. På main delen adderade jag en enkel gradient som går mot vitt. Jag ville också separera textelementen från gradients så jag ramade in sidans delar med border och lade in en helgrön bakgrund. footern fick i detta tema också sträcka sig hela sidans bredd. Jag testade att låga både headern och main delen sträcka sidans bredd men jag tyckte det så konstigt ut så jag valde att bara köra footern i den stilen.


Krav:

- Gradients
- Linjer
- Fullbredd

####Image

Här valde jag att lägga en bakgrundsbild som sträcker sig över hela sidan. Även här testade jag om jag kunde använde opacitet på bakgrunden för att låte bilden tränga igenom men jag tyckte tillslut det blev för rörigt så jag valde sätta en helvit bas. Jag adderade en marginal till wrap-all elementet så att man får en känsla av inramning. Jag upplevde det svårt att få till en stor bild att se bra ut. Dels för att jag inte hade många bilder att utgå ifrån och dels för att bilden lätt stör. För att få en ett grafiskt element så valde jag att lägga till en nyckel på alla li element. Jag tyckte det blev en ganska rolig effekt men jag tror att man kanske ska vara lite mer selektiv i anvädningen än jag varit här.

Krav:

- bakgrundsbild
- bildelement
