# Blank Elementor Theme 🎨⚡

**Ultra-Lightweight WordPress Theme Optimized for Elementor & WooCommerce**  
*(Perfect for developers and designers who want full control without bloat)*

---

## 📌 Features

- **100% Elementor Integration**  
  - Native support for Elementor Theme Builder  
  - Custom Header/Footer templates  
  - Built-in Elementor Canvas template  

- **WooCommerce Ready**  
  - Optimized product grids  
  - Custom WooCommerce widget areas  
  - Mobile-first checkout styling  

- **Lightweight Foundation**  
  - Only 18KB base CSS 🪶  
  - Zero jQuery dependencies  
  - Semantic HTML5 markup  

- **Dev-Friendly**  
  - Modular CSS architecture  
  - WooCommerce template overrides  
  - WP Hook system integration  

---

## 🚀 Installation

1. **Clone Repository**  
   ```bash
   git clone https://github.com/TomKingRAKI/blank-elementor-theme.git
Activate Theme

Upload to /wp-content/themes/

Activate in Appearance → Themes

Required Plugins

Elementor

WooCommerce (optional)

First-Time Setup

php
Copy
# Configure in WordPress Dashboard:
- Elementor → Settings → Style → Set default page layout to "Elementor Canvas"
- WooCommerce → Settings → Products → Enable AJAX add-to-cart
🛠 Customization
Edit Header/Footer with Elementor
Create new template in Elementor → Theme Builder

Use these dynamic tags:

html
Copy
<!-- Main Menu -->  
[menu name="elementor-header-menu"]

<!-- WooCommerce Cart -->  
[woocommerce_cart]

<!-- Custom Footer Widgets -->  
[sidebar id="woocommerce-footer"]
Run HTML
Add WooCommerce Elements
php
Copy
# In footer.php or header.php:
<?php if(class_exists('WooCommerce')) : ?>
  <div class="wc-global-elements">
    <?php echo do_shortcode('[products limit="4"]'); ?>
  </div>
<?php endif; ?>
Modify Styles
Edit these CSS files:

css/custom.css - Global styles

css/woocommerce.css - Shop-specific styles

style.css - Theme metadata + critical CSS

📂 File Structure
Copy
blank-elementor-theme/ <br>
├── css/                    # Style modules <br>
│   ├── custom.css          # Global styles <br>
│   └── woocommerce.css     # WooCommerce overrides <br>
├── inc/                    # Functionality <br>
│   ├── woo-integration.php # WooCommerce config <br>
│   └── elementor-hooks.php # Elementor filters <br>
├── templates/              # Theme templates <br>
│   ├── elementor-header.php <br>
│   └── elementor-footer.php <br>
├── functions.php           # Theme core <br>
├── screenshot.png          # Theme preview <br>
└── readme.md               # This file <br>
🤝 Contributing
Fork repository

Create feature branch:

bash
Copy
git checkout -b feature/amazing-new-feature
Commit changes

Push to branch

Open Pull Request

Before contributing:

Test all WooCommerce template overrides

Validate CSS with Stylelint

Keep jQuery usage to absolute minimum

📜 License
GPLv3 License

Changelog
1.0.0 (2024-02-20)
Initial release

Full Elementor/WooCommerce integration

Mobile-optimized base CSS
