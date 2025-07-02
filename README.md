# 🎨 Tailwind CSS Portfolio Website

Welcome to your **Tailwind CSS** powered portfolio!  
Showcase your skills, experience, and projects with a modern, responsive design.

---

## 🚀 Features

- ⚡ **Responsive** with Tailwind CSS
- 🧩 Modular PHP includes
- 📬 Contact form with Node.js backend
- 🌗 Light/Dark theme toggle
- ✨ Animated transitions

---

## 📁 Project Structure

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

---

## 🛠️ Quick Setup

> See [`setup.md`](setup.md) for details!

### 1️⃣ Install Tailwind CSS

```sh
npm install -D tailwindcss
npx tailwindcss init
```

### 2️⃣ Update `tailwind.config.js`

```js
content: ["*.html"]
```

### 3️⃣ Create `src/input.css`

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

### 4️⃣ Link the CSS

Include `src/output.css` in your HTML or PHP files.

### 5️⃣ Build Tailwind CSS

```sh
npx tailwindcss -i ./src/input.css -o ./src/output.css --watch
```

---

## ▶️ Running the Project

1. Start your PHP server (e.g., XAMPP, MAMP, or `php -S localhost:8000`).
2. Open `index.php` in your browser.
3. For the contact form, start the Node.js server:

   ```sh
   cd email-sender/email-sender
   npm install
   node server.js
   ```

---

## 📄 License

Licensed under the ISC License.

---

> ✨ For more, see [`setup.md`](setup.md)!
