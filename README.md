# StarTechNow WordPress Theme

**"Your Idea. Our Execution."**

A custom WordPress theme for StarTechNow — a technology company providing advanced IT services across 7 countries.

---

## Features

- Fully responsive (mobile, tablet, desktop)
- Brand-matched dark teal color scheme
- Animated service cards with hover effects
- Sticky navigation with mobile hamburger menu
- Smooth scroll between sections
- WordPress Customizer support (phone, email, website)
- All 10 services showcased
- Client badges section
- Contact section with customizable details

---

## Installation

### Option 1 — Upload via WordPress Admin
1. Zip the `startechnow-theme/` folder
2. Go to **WordPress Admin → Appearance → Themes → Add New → Upload Theme**
3. Upload the zip and click **Activate**

### Option 2 — FTP / File Manager
1. Upload the `startechnow-theme/` folder to `/wp-content/themes/`
2. Go to **Appearance → Themes** and activate **StarTechNow**

### Option 3 — GitHub + WP Pusher (auto-deploy)
1. Push this repo to GitHub
2. Install the [WP Pusher](https://wppusher.com/) plugin in WordPress
3. Connect your GitHub repo and auto-deploy on push

---

## Customize Contact Info

Go to **Appearance → Customize → Contact Information** to update:
- Phone number
- Email address
- Website URL

---

## File Structure

```
startechnow-theme/
├── style.css           ← Theme metadata + all styles
├── functions.php       ← Theme setup, scripts, customizer
├── header.php          ← Navigation header
├── footer.php          ← Footer
├── front-page.php      ← Full homepage (hero, services, clients, contact)
├── index.php           ← Fallback template
└── assets/
    └── js/
        └── main.js     ← Smooth scroll, animations, mobile nav
```

---

## Push to GitHub

```bash
git init
git add .
git commit -m "Initial StarTechNow WordPress theme"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/startechnow-theme.git
git push -u origin main
```

---

## Contact

- Email: info@startechnow.com
- Website: www.startechnow.com
- Phone: +92 321 1354428
