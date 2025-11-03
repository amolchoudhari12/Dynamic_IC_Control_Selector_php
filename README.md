# OTEK Model Configurator (Control Selection Generator)

This project is a **PHP-based dynamic configurator** that replicates the structure of OTEK product selection charts (like **1PM**, **HI-Q114**, and **HI-QCPM**).  
It allows users to interactively select control parameters, input types, power options, and calibration ranges — just like filling out a model configuration sheet from the product datasheet.

---

## 🏢 Client

**OTEK Corp.**  
🔗 [https://www.otekcorp.com/main/index.php/](https://www.otekcorp.com/main/index.php/)

---
## 🧠 Overview

The **Model Configurator** web application visually mirrors the PDF datasheet format of OTEK instruments.  
It enables engineers, distributors, and customers to **select and generate model part numbers** dynamically based on chosen configurations.

Each section corresponds to one of the product models:
- **1PM** – Process Monitor Configurator  
- **HI-Q114** – Digital Bar Display Configurator  
- **HI-QCPM** – Counter/Process Meter Configurator

  ---
## 🧠 Variations
Like this there were more than 150 product sheets. A one single algorithm is responsible for rendering the all 150 variations on a single page by choosing the product.
Below demo shows 3 variations amoung them
---

## 🧩 Tech Stack

- **Frontend:** HTML5, CSS3, Bootstrap (optional)  
- **Backend:** PHP 7+  
- **Database:** None (static config-based logic)  
- **Deployment:** Runs on any Apache/PHP-enabled server (e.g., XAMPP, WAMP, or LAMP stack)

---

## 🚀 Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/otek-model-configurator.git
   cd otek-model-configurator
   ```

2. **Run on Local Server**
   - Place files in your server root directory (`htdocs` or `www`).
   - Start Apache (via XAMPP/WAMP).
   - Open your browser and visit:
     ```
     http://localhost/otek-model-configurator/Model-Pricing.php
     ```

3. **Select a Model**
   - Choose from **1PM**, **HI-Q114**, or **HI-QCPM**.
   - Select options as per the product datasheet.
   - The app will generate the **complete model number** dynamically.

---

## 🖼️ Demo Preview

### 1️⃣ 1PM – Process Monitor Configurator  
![1PM Model](1PM.JPG)

### 2️⃣ HI-Q114 – Bar Graph Display Configurator  
![HI-Q114 Model](hi-q114.JPG)

### 3️⃣ HI-QCPM – Counter / Process Meter Configurator  
![HI-QCPM Model](hi-qcpm.JPG)

---

## 📂 File Structure

```
otek-model-configurator/
│
├── Model-Pricing.php                      # Main PHP script for model generation
├── /Dynamic_IC_Control_Selector_php/
│   └── /ProductImages/                    # Contains reference images for configurators
│        ├── 1PM.JPG
│        ├── hi-q114.JPG
│        └── hi-qcpm.JPG
├── /css                                   # Custom styling
├── /js                                    # Optional JS for interactivity
└── README.md                              # Documentation
```

---

## 🔧 Future Enhancements

- Export generated configurations as **PDF quotes**  
- Add **AJAX-based dynamic validation**  
- Integrate **price calculation** based on selected options  
- Add **login and admin panel** for saving configurations


## 🏁 License

This project is open for **learning and internal reference**.  
For commercial or enterprise reuse, please provide author attribution.
---

## 👨‍💻 Author

Developed by **Amol**  
Purpose: To digitize OTEK-style instrument configuration selection for ease of engineering and quoting.
