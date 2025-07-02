# Tailwind CSS Portfolio Website

This is a personal portfolio website built using PHP and [Tailwind CSS](https://tailwindcss.com/). The project showcases sections like About, Skills, Experience, Work, Testimonials, and Contact, all styled with Tailwind and custom CSS.

## Features

- Responsive design with Tailwind CSS
- Modular PHP includes for each section
- Contact form with Node.js backend email sender
- Light/Dark theme toggle
- Animated transitions and modern UI

## Project Structure

```
index.php
about/
connect/
contact/
email-sender/
experience/
footer/
main/
navbar/
skills/
src/
testimonials/
work/
tailwind.config.js
package.json
setup.md
```

## Setup Instructions

See [setup.md](setup.md) for detailed setup, or follow these steps:

### 1. Install Tailwind CSS

```sh
npm install -D tailwindcss
npx tailwindcss init
```

### 2. Update `tailwind.config.js`

Set the content property:
```js
content: ["*.html"]
```

### 3. Create `src/input.css`

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

### 4. Include the compiled CSS

Link `src/output.css` in your HTML or PHP files.

### 5. Build Tailwind CSS

```sh
npx tailwindcss -i ./src/input.css -o ./src/output.css --watch
```

## Running the Project

1. Start a local PHP server (e.g., XAMPP, MAMP, or `php -S localhost:8000`).
2. Open `index.php` in your browser.
3. For the contact form, start the Node.js email sender server:

   ```sh
   cd email-sender/email-sender
   npm install
   node server.js
   ```

## License

This project is licensed under the ISC License.

---

For more details, see [setup.md](setup.md).
