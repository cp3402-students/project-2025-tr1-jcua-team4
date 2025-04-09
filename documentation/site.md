# Site Documentation

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
  