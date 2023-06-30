# Full-Stack Casting 
Moin! Es freut uns sehr, dass du im Bewerbungsprozess diese Aufgabe anpackst. Am Ende möchten wir gerne wie besprochen schauen, wie du die Aufgaben gelöst hast. Da es sich um eine Fullstack-Aufgabe handelt, bildet diese einen Frontend- und Backendteil sowie ein wenig Infrastruktur ab.

## Was ist die Aufgabe? 
Baue ein Portal auf, wo sich Nutzer einloggen können, um coole Fakten ihres Lieblingstiers, der Katze, zu erhalten! Natürlich ist es auch wichtig, dass es hübsche Bilder zu den Katzen gibt :) Lasse dabei deiner Fantasie freien Lauf, aber berücksichtige bitte folgende Funktionen:
- Nach dem Login wird direkt eine Katze mit Bild und Fakten angezeigt
- Der Kunde kann nach bestimmten Katzenrassen suchen und bekommt eine Liste von Katzen. Durch den Klick auf eine Katze wird die Profilseite aufgerufen. Denke bei der Auflistung darüber nach, ob paginiert werden sollte

## Deine Eckdaten
Wie gesagt bildet die Fullstack-Aufgabe verschiedene Belange ab. Uns ist eher wichtig, wie du an die Aufgaben rangehst und warum du die so gelöst hast. Entscheide nach eigenem Ermessen, welche Aufgaben zu welchem Grad du erledigen möchtest. :) #

## Frontend
- Baue ein ansprechendes Frontend mit Javascript und Vue. Falls du möchtest, kannst du auch Typescript verwenden.

## Option 1: Frage mit dem Frontend die Daten direkt ab
- Baue eine Login-Seite nur mit Frontend-Validierung. Wenn ein Nutzer mit Namen "demo" und Paswort "demo" kommt, lass ihn passieren.
- Benutze mit Vue einen Http-Client, um die Katzendaten zu holen. Bilder bekommst du bei https://cataas.com/#/ und für die Fakten kannst du eine andere 
aussuchen, z.B. https://catfact.ninja/
- Überlege, ob und wie du zu bestimmten Catfacts ein passendes Katzenbild findest

## Option 2: Baue ein Backend, das für dein Frontend Katzendaten durchschleust
- Baue eine REST-API, das die Katzenbilder und -Fakten durchschleust. Nutze dafür PHP. Du kannst auch gerne Laravel verwenden.
- Nutze im Backend Hintergrund Katzen-Apis, um an die Daten zu kommen. Bilder bekommst du bei https://cataas.com/#/ und für die Fakten kannst du eine andere 
aussuchen, z.B. https://catfact.ninja/
- Stelle im Backend sicher, dass nur der Nutzer "demo" mit dem Passwort "demo" aus dem Frontend kommend dein Backend abgefragen darf. Wähle einen geeigneten Mechanismus.
- Benutze mit Vue einen Http-Client, um dich mit deinem Backend zu verbinden. Zeige die süssen Katzen und ihre Fakten! 
- Überlege, ob und wie  du zu bestimmten Catfacts ein passendes Katzenbild findest

### Infrastruktur
- Bring den Code bei dir zum Laufen und zeige uns deine Lösung :)

### Diagramm (optional)
- Untermaure deine Lösung mit einem Diagramm. Mal gerne ein Architektur- oder Sequenzdiagramm. 
  
### Verbesserungen und Erweiterungen 
Denke darüber nach, wie man die Anwendung in Zukunft erweitern oder verbessern kann. Welche Features wären noch super? Gibt es vielleicht technologische Ansätze, die noch Sinn machen? 

### Deine Richtlinien 
- Kommentiere Code, wenn es sinnvoll ist
- Berücksichtige die Benutzerführung im Frontend
- Denk über Best-Practices nach 
- Schreibe Tests oder überlege dir, welche Fälle getestet werden sollten
- Sei kreativ
- Hab Spaß!

## Wie lege ich los?
Erstelle einen Branch mit deinem Namen oder Alias. Nutze diesen Branch für deine Entwicklung. Erstelle einen Pull-Request, wenn du fertig bist :) 

## Abschließende Worte
Wir wünschen dir viel Erfolg und freuen uns auf deine Lösung. Falls du Fragen hast ist es gar kein Problem, melde dich gerne bei uns: ton-intern@hanseaticbank.de.
