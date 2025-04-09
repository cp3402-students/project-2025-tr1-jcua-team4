# Site Documentation

The purpose of this document is to describe the development and deployment workflow in detail, to successfully create,
test,
and deploy updates to our custom theme, "baizonntheme".
This documentation will explain how to update and maintain the website and how to add new site content for future developers.

## Local development
Make sure the local development workflow is set up. If not, follow the steps in [deployment.md](deployment.md#setting-up-version-control)

### Developing the site locally
1. on WP Local select the local WordPress site and and start it
2. Open WordPress admin page by either adding __/wp-local/__ at the end of the site url or by clicking __"WP Admin"__ on LocalWP
3. Make any changes on the local WordPress site
    - Note-These changes are for testing only and will not show up on staging or live production. see [deployment.md setting up staging](deployment.md#setting-up-staging)
4. Make sure to install __All In One Wp Migration__ for site migration and __WP Forms__ and __Smart Slider__ plugins for site content
5. Make any changes to the site and refresh the browser to see changes
6. Once testing is done, close WP Local

### Adding new site content
#### Adding New Page
- Log in to the WordPress Admin Dashboard

- In the left sidebar, go to Pages > Add New
- Enter a page title and add your content using the block editor
- Use blocks like Paragraph, Image, Heading, Gallery, or Custom HTML to format content
- Assign `general theme template` or the default theme (right sidebar under “Page Attributes”)
- Optionally, add a featured image in the right sidebar

#### Adding a New Post
- In the sidebar, go to Posts > Add New
- Enter a title and your post content using the block editor
- Assign a category and tags to organize your post
- Optionally set a featured image (shown in blog listings or banners)
- Click Publish

#### How to Add a New Menu

1. Navigate to Appearance > Menus
2. Click "Create a new menu"
3. Enter a Menu Name (e.g., "Main Menu", "Footer Menu")
4. Click the "Create Menu" button
5. Under the "Add menu items" panel:
    - Select from Pages, Posts, Custom Links, or Categories
    - Click "Add to Menu" to include selected items
6. Drag and drop menu items to:
    - Reorder them
    - Nest items under a parent to create submenus
7. Under Menu Settings, select a Display Location (e.g., Primary Menu, Footer Menu)
8. Click "Save Menu" to apply your changes

#### Adding a Submenu item
Drag a menu item slightly to the right under another menu item
- It will appear nested — this becomes a submenu in the front-end navigation

#### How to add a banner
1. Navigate to a page and click edit page
2. Using WordPress blocks add a block on top of the page
3. Click the plus icon and select image
4. Select an uploaded banner form media library or upload a new image
5. Select the image and in the toolbar that pops up select **align** and select **Full Width**
6. Save page by clicking the blue button on the right corner

___

### Updating existing site content
#### How to Edit an Existing Page
- From the dashboard, go to Pages > All Pages
- Hover over a page and click Edit
- Make your changes using the block editor
- Click Update to save changes

#### How to Edit Existing Posts
- Navigate to Posts > All Posts
- Hover over a post-title and click Edit
- Modify content, categories, tags, or images as needed
- Click Update to save changes

#### How to Edit an Existing Menu
1. Go to Appearance > Menus
2. Select a menu to edit from the dropdown list and click "Select"
3. To update:
    - Rename menu items
    - Change order by dragging
    - Remove items using the dropdown arrow > Remove
4. Click "Save Menu" to update changes

#### Updating the live site
1. Changes made in local or staging will not automatically show up on the live production site.
2. refer to [deployment.md setting up live production workflow](deployment.md#Live-Production-workflow) to update changes from staging to production.


