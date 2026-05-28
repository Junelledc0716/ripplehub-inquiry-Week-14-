# 🌊 rippleHUB

> **Your focus space for work and study.**  
> A study hub landing page built with CodeIgniter 4, featuring full unit testing via PHPUnit.

---

## 📌 About the Project

**rippleHUB** is a co-learning hub web application designed for **students and working professionals** who need a calm, productive environment to focus and grow. This project is built using the **CodeIgniter 4** PHP framework and demonstrates a clean MVC structure with a fully tested homepage via **PHPUnit**.

### Key Features
- 🏠 **Home** — Hero section with available space cards and stats
- 📖 **About** — Hub features and real-time space availability
- 📅 **Reservation** — Book a study space with a reservation form
- 📬 **Contact** — Location, contact details, and message form
- 🔐 **Login / Sign Up** — Modal-based authentication UI
- ✅ **Unit Tests** — PHPUnit tests verifying homepage behavior

---

## 🛠️ Built With

| Technology | Description |
|---|---|
| [CodeIgniter 4](https://codeigniter.com/) | PHP MVC Framework |
| [PHPUnit 10](https://phpunit.de/) | Unit Testing Framework |
| PHP 8.2 | Server-side Language |
| HTML5 / CSS3 / JavaScript | Frontend |
| XAMPP | Local Development Server |

---

## 📁 Project Structure

```
ripplehub-inquiry/
├── app/
│   ├── Controllers/
│   │   └── Home.php          # Main controller
│   ├── Views/
│   │   └── landing.php       # rippleHUB landing page
│   └── Config/
│       └── Routes.php        # Route definitions
├── tests/
│   └── app/
│       └── Controllers/
│           └── HomeTest.php  # PHPUnit test cases
├── phpunit.xml.dist           # PHPUnit configuration
└── README.md
```

---

## ⚙️ Installation & Setup

### Requirements
- PHP 8.1 or higher
- XAMPP / Laragon / any local server
- Composer
- PHPUnit 10

### Steps

**1. Clone the repository**
```bash
git clone https://github.com/Junelledc0716/ripplehub-inquiry.git
cd ripplehub-inquiry
```

**2. Install dependencies**
```bash
composer install
```

**3. Configure environment**
```bash
cp env .env
```
Open `.env` and set:
```
CI_ENVIRONMENT = development
```

**4. Start the development server**
```bash
php spark serve
```

**5. Open in browser**
```
http://localhost:8080
```

---

## 🧪 Running Unit Tests

This project uses **PHPUnit 10** to verify the homepage behavior.

```bash
php vendor/bin/phpunit tests/app/Controllers/HomeTest.php
```

### Test Cases

| Test | Description | Expected |
|---|---|---|
| `testHomePage` | Homepage loads successfully | HTTP 200 ✅ |
| `testHomePageContainsTitle` | Page contains "rippleHUB" | Text found ✅ |
| `testHomePageContainsCTA` | Page contains "Reserve a Seat" button | Text found ✅ |
| `testHomePageIsNotMissing` | Page does not return 404 | Not 404 ✅ |

### Expected Output

```
PHPUnit 10.5.63 by Sebastian Bergmann and contributors.

....                                                    4 / 4 (100%)

Time: 00:00.261, Memory: 30.00 MB

OK (4 tests, 4 assertions)
```

---

## 📸 Preview

### Landing Page
- Clean, modern study hub design
- Responsive navigation with smooth scroll
- Space availability cards
- Reservation form
- Login / Sign Up modal

---

## 🗺️ Routes

| Method | URL | Controller | Description |
|---|---|---|---|
| GET | `/` | `Home::index` | Landing page |

---

## 👩‍💻 Developer

**Junelle** — BSIT Student  
📁 GitHub: [@Junelledc0716](https://github.com/Junelledc0716)

---

## 📝 License

This project is for **educational purposes** as part of a Web Development course activity on Unit Testing & Debugging using CodeIgniter 4.

---

> *"Every bug is just a test you forgot to write."*  
> — Unit Testing & Debugging, Slide 10
