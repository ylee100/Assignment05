# Assignment05
## Links
* Git Repo:https://github.com/ylee100/Assignment05
* Website:
* DB Server: 66.147.242.186
* DB Name: urcscon3_animation
* DB Username: urcscon3_mation
* DB Password: coffee1N

## Information Architecture - Yeonwoo Lee
### Topic
The website has some information such as history and feature films of the Animation Companies (Disney, Pixar, and DreamWorks). User may survey to select the favorite Animation company along with his/her brief bio including age and sex.
### Basic Structure
Each animation company has own page which may be navigate through the navigation bar. The header includes a signature logo of the company and the information is aligned in a similar manner: About -> History -> Feature Films on the middle with the pictures.
### Design Pattern
The pages generally follows Z-Pattern. The header will have the usual navigation links and the link to survey must be always placed in the bottom right (or at least bottom area). The main content should be in the middle of the webpage including login or account creation or survey table itself.
### Intended Mood/Feeling
Since the animations usually tend to be happy stories, the website should fee lively and bright. (Maybe even childish.)
### Intended Interactivity
The index page will be given only 2 options either login or create account. (After creating account, user will be brought back to this index page to login.) After login, the user may be able to access any information or database. There will be separate page for just for survey which shows all the surveys in table form and can add/edit/delete any of the records in the database table. Thus, the intended movement of the user would be: Index -> Login -> Main Pages (Animation companies) -> Survey





## Designer - Xiao Cheng

### Page Layout

The website used mostly F-pattern due to its content-heavy nature. We put the navigation bar on the top, follows the articles, and the survey form at the bottom.

### Typography

This website used cartoon fonts to represent the theme. For the titles, we chose a bolder font to stress the importance and distinguish the titles with the paragraphs. The paragraph font was set to a hand-written style in order to follow the website's mood and readability.

### C.R.A.P Principles

Used different types and sizes of fonts to contrast between contents.

Each page follows the same pattern: About, Brief History, Featured Films.

Each page follows the same alignment: navigation bar, paragraphs on the right, images on the left, survey form at the bottom.

Objects with the same relationship are grouped together - images and introductions related to certain animation are grouped near each other.





## Coder - Agusi Kennedy
### Forms
Created Survey, login and create account forms. Each of these have separate pages and uses PHP to send information to database.
### Admin Page
Created admin page which can be used to view,edit and add survey information to database.
### Database
Created MYSQL database to store all form information survey and account information.



