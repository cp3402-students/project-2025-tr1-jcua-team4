# Development and Deployment Documentation
___
The purpose of this document is to describe the development and deployment workflow in detail,
to successfully create, test, and deploy updates to our custom theme, "baizonntheme".
The following is a step-by-step guide outlining the development process,
required tools, and future maintenance of the project.
___
## Table of Contents

- [Setting up local development](#setting-up-local-development)
    - [Requirements](#requirements)
    - [Setting up WordPress locally](#setting-up-wordpress-locally)
    - [Setting up the theme](#setting-up-the-theme)
    - [Setting up Version Control](#setting-up-version-control)

- [Setting up Staging](#setting-up-staging)
    - [Staging workflow](#staging-workflow)
    - [Implementing And Testing A New Feature](#implementing-and-testing-a-new-feature)
    - [Updating The Staging Cloud Access Username And Password Secrets](#updating-the-staging-cloud-access-username-and-password-secrets)
    - [Changing Approval Sleep Timer](#changing-approval-sleep-timer)

- [Setting up production](#setting-up-production)
    - [Production workflow](#production-workflow)
    - [Transferring Database Content (Pages, Posts, Media etc) From Staging To Production](#transferring-database-content-pages-posts-media-etc-from-staging-to-production)
    - [Updating The Production Cloud Access Username And Password Secrets](#updating-the-production-cloud-access-username-and-password-secrets)
    
- [Testing the theme](#testing-the-theme)

- [Project management](#project-management)
    - [Requirements](#requirements-1)
    - [Communication](#communication)
    - [Project management workflow](#project-management-workflow)

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
8. Go to plugin page and add new plugins
9. Search and install __All In One Wp Migration__ for site migration and __WP Forms__ and __Smart Slider__ plugins for site content.

### Setting up Version Control

1. Download and install [PHP Storm](https://www.jetbrains.com/phpstorm/)
    - See documentation [here](https://www.jetbrains.com/phpstorm/resources/)
2. Download and install [GitHub Desktop](https://desktop.github.com/download/)
    - See documentation [here](https://docs.github.com/en/desktop/overview/about-github-desktop)
3. On LocalWP click __Site Folder__ and go to app > public > wp-content > themes
4. Drag the __baizonntheme__ folder on to GitHub desktop (This will add the local repository we cloned earlier to GitHub Desktop)
5. On the top bar click __fetch__ to update the repository from remote
6. Click on the current branch and create a new branch
7. name the new branch with the feature or changes that need to be added and check out the branch
8. On LocalWP click __Site Folder__ and go to app > public
9. Right click public and click __Open Folder as PHPStorm Project__
10. Make any changes to the theme files in PHP Storm.
11. Head over to the local WordPress site and reload to see the changes
12. Once a change is made to the theme files, it will show up on GitHub Desktop under changes
13. Commit the changes and push to remote on GitHub Desktop
14. On GitHub create a pull request and merge the branch to main
15. Repeat steps 6, 7 and 10–14 when adding new features or making changes to the theme files
___
## Setting up Staging
Staging is set up in a server on cloud access.net.
GitHub actions are used to automate the workflow
and push the theme changes to WordPress upon merging and pushing to the main repository.

### Staging workflow

1. Ensure you have your PHP or VS code project set up with version control and a copy of the theme
2. Make your desired changes to the project (for example, changing the header/footer colour)
3. In PHPStorm, on the left sidebar navigate to the commit menu
4. Select the modified you wish to upload in your commit and write a descriptive commit message. For example "Fix issue with footer not displaying properly
5. Select commit and push
6. GitHub Actions will automatically execute the PHP and CSS linters as well as the deployment workflow for local -> staging
7. Once the GitHub Actions are complete, check your staging website to see new changes


### Implementing And Testing A New Feature
For adding a feature which may constitute adding another branch.
1. Ensure you have your PHP or VS code project set up with version control and a copy of the theme
2. In PHPStorm, navigate to the Git tool window -> Branches
3. First checkout the main branch
4. Follow step 2 again and select create new branch
5. First in your PHPStorm theme project navigate to the root filename -> .github -> workflows -> deployment.md
6. Modify deployment.yml accordingly
    ```
   on: 
    push:
    branches:
     - main
     - YOUR NEW BRANCH NAME HERE
     - release/*

     pull_request:
     types: [closed]
     branches:
     - main
       - release/*

7. In your new branch make any desired changes
8. Commit your changes (refer to staging workflow -> step 4)
9. Navigate to the [GitHub Repository](https://github.com/cp3402-students/project-2025-tr1-jcua-team4.git) and switch the branch to your recently created branch
10. Go to pull requests -> New pull request -> Select main and your new branch to compare and select create pull request
11. Enter a description for your pull request and select merge pull request (optionally request a review from another contributor)
12. After the pull request you may wish to update the deployment.yml file in the main branch to remove your recently merged branch


### Updating The Staging Cloud Access Username And Password Secrets
In the event of a security breach you may want to reset the password
1. Navigate to your main github repository page
2. Go to settings -> secrets and variables - actions
3. In the **repository** secrets edit the values for FTP_USERNAME and FTP_PASSWORD


### Changing Approval Sleep Timer
1. In your PHPStorm theme project, navigate to the root filename -> .GitHub -> workflows -> production.yml
2. Find the
   ```
   - name: Wait for Approval
    id: wait_for_approval
    run: |
    issue_number=${{ steps.create_issue.outputs.issue_number }}
    echo "Waiting for approval on issue #$issue_number"
    sleep 60
3. Modify sleep to the desired number of seconds
4. Commit your changes to the main branch



## Setting up production
Production is set up in a server on cloud access.net.
GitHub actions are used to automate the workflow
and push the theme changes to WordPress upon merging and pushing to the main repository.
- **IMPORTANT: Only commit pushes to the main branch will trigger the production workflow. This is for small changes. You may also wish to make a one character edit to simply trigger the production workflow**

### Live Production workflow

1. Make any desired changes to the theme as you would similar to the staging workflow (ensure you are on the main branch)
2. Navigate to the [GitHub Repository](https://github.com/cp3402-students/project-2025-tr1-jcua-team4.git)
3. Go to the Issues section in the repository (you may to refresh the page after 5–15 seconds)
4. A new issue regarding **Approval Needed: Deploy To Production** should appear
5. Click on the issue and immediately enter as exactly **approved** into the comment field, then press close with comment. **IMPORTANT: This needs to be done in a certain amount of time depending on the value of the sleep variable**
6. Go to the production site and view your changes
7. If you change your mind about deploying to production, simply click close issue and the deployment to production workflow will fail


### Transferring Database Content (Pages, Posts, Media etc) From Staging To Production
1. Open the admin interface in your [Staging website](https://baizonnlearningcenter.cloudaccess.host/wp-admin)
2. Open the admin interface in your [Production website](https://thebaizonnlearningcenter.cloudaccess.host/wp-admin)
3. Ensure you have [All-In-One WP Migration](https://wordpress.org/plugins/all-in-one-wp-migration/) plugin installed on both staging and production servers
4. In your staging website on the left sidebar, select the all-in-one plugin -> export
5. Select export site to -> file
6. Download the export file
7. In your production website on the left sidebar, select all in one plugin -> import
8. Drag and drop the export file into the highlighted area
9. Click proceed on the replace popup

### Updating The Production Cloud Access Username And Password Secrets
In the event of a security breach, you may want to reset the password
1. Navigate to your main GitHub repository page
2. Go to settings -> secrets and variables - actions
3. In the **environment** secrets edit the values for FTP_USERNAME and FTP_PASSWORD

## Testing the theme

To ensure the `baizonntheme` works reliably across a wide range of content types and edge cases, we used the official [WordPress Theme Unit Test Data](https://codex.wordpress.org/Theme_Unit_Test). This XML file simulates a typical WordPress site by importing a variety of posts, categories, menus, and comment scenarios.

1. The XML test data was imported via the **WordPress Importer** plugin from the **Tools > Import** menu.
2. After import, we thoroughly checked theme compatibility by reviewing:
   - Post layouts (including images, quotes, galleries, and videos)
   - Menu structures with submenus and custom links
   - Widgets and sidebars on various templates
   - Comment threading and formatting
   - Responsive behaviour across devices using dev tools
   - Edge cases like extremely long titles, missing featured images, and nested HTML

This testing allowed us to catch potential layout issues early and ensured the theme gracefully handles real-world content structures. All identified layout or formatting problems were fixed prior to deployment.
___


## Project management

### Requirements
- [Discord](https://discord.com/)
    - [Slack](https://slack.com/) (Optional Alternative)
- [Trello](https://trello.com/b/RZbbDeVJ/group-4-project)
- [GitHub Desktop](https://desktop.github.com/download/)
- [Git](https://git-scm.com/downloads)

2–3 weekly face-to-face meet ups is recommended for this project, but online Discord meetings can be used as a backup.
In these stand-up meetings, we discuss current tasks, roadblocks each team member had and assign new tasks.
After the standup, discussing new ideas, working on tasks and testing different workflows and toos is also done.
Trello was also used to break down large tasks in to smaller tasks
and assign different team members to specific tasks.
It was also used to keep a backlog of changes and future features and updates.
Once the task was finished, it was moved to the done section on Trello.

### Communication
Outside of weekly meetings, The Main method of communication was done through discord.
Slack was used as a backup.
Discord was used as a platform to share links, organize weekly meetups, ask questions and stay on top of assigned tasks.

### Project management workflow
1. download and setup discord
    - See discord documentation [here](https://discord.com/developers/docs/intro)
    - Discord is recommended, but Slack can also be used
2. Organize a time for a stand-up meeting on discord
3. Have a stand-up meetings on discord or in person
    - Discuss task progress and roadblocks
4. Add and assign tasks on trello to be completed by next meeting
5. Create a new branch on GitHub Desktop
     - see Steps 6 and 9 in [setting up version control section](#Setting-up-Version-Control)
6. Make any changes using PHP Storm
7. On GitHub desktop write an appropriate commit message and commit and push the changes to GitHub
8. On GitHub, create a pull request.
9. Chat with your team on discord or in person and resolve any file conflicts
10. Once the conflicts are fixed (if there is any) merge branch with main
11. If a new feature was added or a task was completed, update it on the trello board
12. Make record of meeting activities and attendance
    - it can be done on a text channel on discord
13. Organize the next meeting time and place
14. Making changes directly is not recommended unless its small change
    - Make sure to let the team members know if you are making changes directly to the main branch so they can fetch before pulling any changes