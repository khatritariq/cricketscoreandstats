
## Insider Project - Cricket Score and Statistics

### Requirement Specifications
 
- It contains tournaments.
- Tournaments have multiple rounds (qualifier, semi-final, etc).
- Rounds have matches.
- Match is played between two teams.
- Match Time Unit can be modified (e.g. Five seconds after the match starts 1 minute will be considered gone by.)
- Match has multiple innings.
- Innings belong to a team and match, and consists of runs scored by that team and team's wickets fallen.
- Team has many players, but particular team players play in a single match, and are called "match_participants".
- Players' batting and bowling stats are also calculated. 


## Installation

- Create a file named ```.env ``` and copy ```.env.example``` to it. Modify database connection details as per your environment. Modify server settings in that file too. 
- Create a virtual host with any port available, pointing to public directory of the project.
- Go to project directory and run database migration with ```php artisan migrate```
- Run ```php artisan db:seed``` for all data migrations


### Run

- Hit url http://127.0.0.1/tournament/1/round/1/match/1/inning/1 to view inning details

###Technical details

- Code is written on top of Basic boiler plate laravel project
- ADR Pattern https://en.wikipedia.org/wiki/Action%E2%80%93domain%E2%80%93responder is being implemented at route-controller level which eases code readability.
- Code is PSR-2 Standard. It's achieved via inject git pre-commit hook to validate that code being pushed is PSR-2 compatible. https://gist.github.com/khatritariq/79206ce77500d58390730cfad80a6329
- Business logic is placed in Service classes, using Service Pattern (Design pattern), so that both Http and Command linke Inputs call Service.
- Class' object is not directly being created rather drafted via Factory pattern which makes it unit testable.

### How it is developed.

- First, a laravel basic skeleton is being created.
- The requirement document is studied, and entities and its value objects are being drafted on paper.
- Then database migrations are written in folder ```database/migrations```
- Models are created and placed in ``app/Domain/``
- Sample data is being input in ``database/seeds/DatabaseSeeder.php``
- Controllers are being namespaced in respective entity (using ADR pattern)
- Flow of web call (route -> Controller -> Service -> Model -> Service -> Controller -> View )

### Result Screenshot

![alt text](https://ibb.co/swxxjQ3)

