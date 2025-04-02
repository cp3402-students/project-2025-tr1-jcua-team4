# Development and Deployment Documentation
___
The purpose of this document is to describe the development and deployment workflow in detail,
to successfully create, test, and deploy updates to our custom theme, "baizonntheme".
The following is a step-by-step guide outlining the development process,
required tools, and future maintenance of the project.

## Setting up local development
___
Local development is done by using LocalWP and git. LocalWP is used to install WordPress, and Git will be used to develop the project. PHP Storm is used to create and make changes to the theme files, and GitHub desktop is used for version control.

### Requirements
- [LocalWP](https://localwp.com/)
- [Git](https://git-scm.com/downloads)
- [GitHub Desktop](https://desktop.github.com/download/)
- [PHP Storm](https://www.jetbrains.com/phpstorm/) (Recommended)
  - [Vs Code](https://code.visualstudio.com/) (Optional Alternative) 

### Setting up WordPress locally

1. Download and install [LocalWP](https://localwp.com/)
   - See documentation [here](https://localwp.com/help-docs/)
2. Open LocalWP and click on create a new site
3. Pick an appropriate site name and select "preferred environment" option and click continue
4. Create a username and password (Take note of this) and click add site
5. Once the site is created, click on "Open Site" to visit the site
6. Open WordPress admin page by either adding __/wp-local/__ at the end of the site url or by clicking __"WP Admin"__ on LocalWP
7. Log in to WordPress using the login details created in step 4

### Setting up the theme
1. Download and install Git
   - See documentation [here](https://git-scm.com/doc)
2. Go to the locally created WordPress root folder by clicking on __Site Shell__ in LocalWP.
3. In the command prompt type ```cd wp-content\themes``` and press enter navigate to the WordPress themes folder
4. Type ```git clone https://github.com/cp3402-students/project-2025-tr1-jcua-team4.git baizonntheme``` in to the command prompt and press enter to clone the theme repository from GitHub
5. Head over to the WordPress Admin site 
6. On the left menu go to Appearance > Themes 
7. Select "baizonnthme" and click __activate__

### Setting up Version Control

1. Download and install [PHP Storm](https://www.jetbrains.com/phpstorm/)
   - See documentation [here](https://www.jetbrains.com/phpstorm/resources/)
2. Download and install [GitHub Desktop](https://desktop.github.com/download/)
   - See documentation [here](https://docs.github.com/en/desktop/overview/about-github-desktop)
3. Open GitHub desktop and log in with a GitHub account
4. On LocalWP click __Site Folder__ and go to app > public > wp-content > themes 
5. Drag the __baizonntheme__ folder on to GitHub desktop (This will add the local repository we cloned earlier to GitHub Desktop)
6. On the top bar click __fetch__ to update the repository from remote 
7. On LocalWP click __Site Folder__ and go to app > public
8. Right click public and click __Open Folder as PHPStorm Project__
9. Make any changes to the theme files in PHP Storm.
10. Once a change is made to the theme files, it will show up on GitHub Desktop under changes
11. Commit the changes and push to remote on GitHub Desktop

## Setting up staging

### Setting up automated workflow

1. 