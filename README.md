#  Karya Construction – Construction Marketplace Platform

Karya Construction is a simple web-based platform built using **PHP** and **MySQL** that allows users to **browse**, **buy**, and **sell** construction materials and equipment. It features separate dashboards for vendors and buyers, making it easy to manage listings and user roles.

---

##  Features

-  User & Vendor Registration/Login  
-  Vendor Dashboard for adding/managing materials & equipment  
-  Buyer Dashboard for browsing listed items  
-  CRUD Functionality for products  
-  Category-based browsing  
-  Admin panel for user/product management (optional)  
-  Session-based authentication  

---

##  Tech Stack

| Layer    | Technology    |
|----------|---------------|
| Backend  | PHP           |
| Frontend | HTML, CSS, JS |
| Database | MySQL         |
| Auth     | PHP Sessions  |

---


### 1. Clone the Repository

``` bash
git clone https://github.com/rishav-dahal/karya_Construction.git
cd karya_Construction
```

### 2. Set Up Database

- Create a MySQL database (e.g., `karya_db`)
- Import SQL tables (SQL file not included—create manually or contact the author)
- Update `connection.php` with your DB credentials

### 3. Run Locally

- Ensure PHP is installed
- Start a local server:

``` bash
php -S localhost:8000
```

- Open your browser and go to:
``` bash
  `http://localhost:8000/index.php`
```
---

##  Folder Structure

``` bash
karya_Construction/
│
├── connection.php        # DB connection
├── function.php          # Helper functions
├── index.php             # Home page
├── login.php             # Login form
├── register.php          # Registration form
├── dashboard.php         # Vendor/Buyer dashboard
├── logout.php            # Session logout
├── add_product.php       # Product creation
├── list_products.php     # View listings
└── /assets               # CSS, JS, images
```

---

##  Demo Accounts (Optional)

> Add sample login credentials for demo users/vendors here if available.

---


##  To-Do / Future Improvements

- [ ] Secure password hashing (e.g., bcrypt)
- [ ] Add image uploads for product listings
- [ ] Admin panel for managing users & listings
- [ ] Pagination and search filters
- [ ] RESTful APIs for mobile or frontend integration
- [ ] Improve UI with responsive design

---

