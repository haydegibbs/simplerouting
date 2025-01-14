**Simple PHP Routing Example**

This repository contains a basic example of PHP routing, allowing you to dynamically serve different content based on the URL parameter.

**Features**

- Lightweight and easy to implement.
- Handles multiple pages with a single PHP file.
- Perfect for small projects or as a learning tool for understanding routing.

**How It Works**

The script uses the $_GET superglobal to determine which page to display. If no page parameter is provided in the URL, it defaults to the home page.

**Example Code**

Use routing.php file

**Usage**

1. Clone this repository or copy the example code into your PHP project.

2. Save the file as index.php or another preferred filename.

3. Open the file in a browser, appending ?page=page_name to the URL. For example:

- http://localhost/index.php?page=home

- http://localhost/index.php?page=about

**Example Pages**

- **Home Page:** Displays "Welcome to the home page!"

- **About Page:** Displays "This is the about page."

- **Unknown Page:** Displays "Page not found." if the page parameter does not match predefined values.

**Requirements**

- PHP 7.0 or higher.

- A web server (e.g., Apache, Nginx, or PHP's built-in server).

**Contributing**

Feel free to fork this repository and submit pull requests with improvements or additional features.
