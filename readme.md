
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
