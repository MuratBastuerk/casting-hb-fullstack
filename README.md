# Full-Stack Casting 
Moin! Es freut uns sehr, dass du im Bewerbungsprozess diese Aufgabe anpackst. Am Ende möchten wir gerne wie besprochen schauen, wie du die Aufgaben gelöst hast. Da es sich um eine Fullstack-Aufgabe handelt, bildet diese einen Frontend- und Backendteil sowie ein wenig Infrastruktur ab.

## Was ist die Aufgabe? 
Baue ein Portal auf, wo sich Nutzer einloggen können, um coole Fakten ihres Lieblingstiers, der Katze, zu erhalten! Natürlich ist es auch wichtig, dass es hübsche Bilder zu den Katzen gibt :) Lasse dabei deiner Fantasie freien Lauf, aber berücksichtige bitte folgende Funktionen:
- Nach dem Login wird direkt eine Katze mit Bild und Fakten angezeigt
- Der Kunde kann nach bestimmten Katzenrassen suchen und bekommt eine Liste von Katzen. Durch den Klick auf eine Katze wird die Profilseite aufgerufen. Denke bei der Auflistung darüber nach, ob paginiert werden sollte

## Deine Eckdaten
Wie gesagt bildet die Fullstack-Aufgabe verschiedene Belange ab. Uns ist eher wichtig, wie du an die Aufgaben rangehst und warum du die so gelöst hast. Entscheide nach eigenem Ermessen, welche Aufgaben zu welchem Grad du erledigen möchtest. :) 
### Backend
- Baue eine REST-API, das die Katzenbilder und -Fakten durchschleust. Wähle dafür das Laravel Framework in der Version 10 und PHP > 8.1. 
- Nutze im Hintergrund Katzen-Apis, um an die Daten zu kommen. Bilder bekommst du bei https://cataas.com/#/ und für die Fakten kannst du eine andere 
aussuchen, z.B. https://catfact.ninja/
- Sichere deine REST-API ab, sodass das nur bestimmte User per HTTPS drauf zugreifen können. Wähle einen gängigen Mechanismus aus.
- Richte hierfür den User "demo" mit Passwort "demo" ein.
### Frontend
- Baue ein Frontend für den User auf. Falls der User nicht eingeloggt ist, soll die Loginmaske eingeblendet werden. Nach dem Login werden die süßen Katzen angezeigt :) 
- Nutze dafür das VueJs Framework, am liebsten mit Typescript. 
- Hol die Katzendaten bei deiner REST-API ab
### Infrastruktur
- Bei uns wird viel mit Docker gearbeitet. Es wäre also klasse, wenn alle Andwendungsteile containerisiert hochfahren. 
- Entwickel ein docker-compose File, das dein Frontend, Backend und die Datenbank hochfährt. 
### Diagramm
- Untermaure deine Lösung mit einem Diagramm. Mal gerne ein Architektur- oder Sequenzdiagramm. 
- Falls du ein Sequenzdiagramm beifügst, wäre es klasse den Authentifizerungsflow zu berücksichtigen
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
Wir wünschen dir viel Erfolg und freuen uns auf deine Lösung. Falls du Fragen hast ist es gar kein Problem, melde dich gerne bei uns: ton-intern@hanseaticbank.de oder direkt bei Murat murat.bastuerk@hanseaticbank.de


# hbton - Cat - Fact, Image, Breed and Seach...

## Getting started

    docker-compose run composer composer install
    docker-compose run app php artisan migrate
    docker-compose run app php artisan db:seed
    docker-compose run app npm install

    docker-compose up -d

    call http://localhost 


### how to do on the green field - it is only information!
(don't do this in a developed git repo)

- docker-compose run composer composer create-project laravel/laravel laravel_10_vue_js_auth
- mv laravel_10_vue_js_auth/* ./

- do not : docker-compose run composer composer require laravel/ui
- do! (Laravel10) composer require laravel/breeze --dev

- php artisan breeze:install blade
- php artisan breeze:install vue

- php artisan migrate
- php artisan db:seed
- npm install
- npm run dev


### in case of doing "docker-compose run composer composer require laravel/ui"
- it ends in

  Laravel 10 Spatie\LaravelIgnition\Exceptions\ViewException: Unable to locate file in Vite manifest: resources/js/app.ts. in file /app/vendor/laravel/framework/src/Illuminate/Foundation/Vite.php on line 737
