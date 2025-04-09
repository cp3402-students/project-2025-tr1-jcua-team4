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



This document provides a step-by-step guide on how to update and maintain the website for future developers and site maintainers.
## Adding Content

### Steps to Add a Page
1. Log in to WordPress
  - Navigate to the WordPress admin dashboard by going to:
your-site.com/wp-admin.
2. In the WordPress sidebar menu, click Pages → Add New.
3. Create the Page
  - Enter a Title for the new page (e.g., "Home").
  - Add Content to the page using the block editor. The block editor allows you to:
     - Format text (headings, paragraphs, lists, etc.)
     -  Add images, videos, and other media
    - Add other types of content like maps, buttons, and more.
4. Assign a Category or Parent Page (Optional)
Under the Page Attributes section (usually found on the right side), you can:
  - Select a Parent Page if the new page should be nested under an existing page (e.g., "Program" or "Schedule").
  - Assign a Template if you want to use a custom page layout (optional, depending on your theme settings).
5 . Publish the Page
  - After adding and formatting the content, review it.
  - Click the Publish button to make the page live on the site.

### Adding media
1. In the left sidebar, click Pages or Posts (depending   on where you want to add the image).
2. Click on the title of the page or post you want to edit or Add New if you are creating a new page or post.
3. Click on the Block Editor:
  - In the block editor, click where you want to add the image in the content area.
4. Add the Image Block:
5. Click the + button to add a new block.
6. Search for Image and click on it. This will create a space where you can upload or select an image.
7. Upload or Select an Image:
  - Upload Image: Click Upload, select an image file from your computer, and it will be uploaded to your media library.
  - Select Image from Media Library: Click Media Library, choose an image you've already uploaded, and click Insert.
8. Adjust Image Settings:
  - After inserting the image, you can adjust its size, alignment (left, center, right), and add alternative text (for accessibility).
  - If necessary, you can click on the image to access options like Edit Image, where you can crop, rotate, or scale the image.

You can also add Images in Custom Menus or Headers:
If your theme supports adding images in the header or navigation menus, you can do this through the 
Appearance → Customize → Header or Menus sections.

You can upload logos, banner images, or icons through the Custom Logo or Menu Settings options in your theme customization.

### Adding additional CSS
1. At the left sidebar menu, click Appearance → Customize. This will open the Customize menu.
2. In the Customize menu, scroll down and click on the Additional CSS option. It will open a text box where you can enter custom CSS code.
3. Add Custom CSS:
  - In the text box, you can write or paste your custom CSS code. 
4. After adding your custom CSS, click the Publish button at the top of the Customizer panel to save your changes.

### Adding forms
#### Using WPForms to Create Forms
WPForms is a popular plugin for creating contact forms, surveys, and other types of forms on your WordPress site.

 Below are the steps to use WPForms:
1. Installing WPForms Plugin
If WPForms isn’t installed already, here’s how you can install it:
  - Log in to WordPress Admin:
  - Navigate to your-site.com/wp-admin.
  - In the left sidebar, go to Plugins → Add New.
  - Search for WPForms.
  - Click Install Now, and once the plugin is installed, click Activate.
2. Creating a New Form
  - Navigate to WPForms:
  - Once activated, you’ll see WPForms in the left sidebar of the dashboard.
  - Click on WPForms → Add New: to create a new form.
  - Select a Template:
     - WPForms provides various pre-built templates. You can choose a template like Simple Contact Form, Newsletter Signup Form or you can start from an mpty form etc.
     - Click on the template you want to use to start customizing it.
  - Customize the Form:
     - Once the template is loaded, you can drag and drop form fields (e.g., Name, Email, Message, etc.) from the left panel onto your form.
     - You can click on each field to edit its settings, such as the label, placeholder text, and field type
3.  Configure Form Settings:
   - General Settings: Under the Settings tab, customize form settings such as the form name, submit button text, and whether or not to show a confirmation message after submission.
  - Confirmations: Configure what happens after the form is submitted, such as showing a thank you message or redirecting to a specific URL.
  - Notifications: Configure email notifications to specify who receives the form submissions. You can set up admin email notifications or even send confirmation emails to the user.
4. Embedding the Form on a Page or Post
  - Embed the Form in a Post or Page:
  - After creating and configuring your form, click the Embed button at the top of the form builder.
  - You can either:
    - Copy the Shortcode: Copy the shortcode provided (e.g., [wpforms id="123"]) and paste it into any page or post where you want the form to appear.
    - Use the WPForms Block: If using the block editor, click the + button to add a new block and search for WPForms. Select the WPForms block, and then choose the form you created from the dropdown list.

5. Publish or Update the Page:
  - Once the form is embedded, click Publish or Update to make the changes live on your website.
  