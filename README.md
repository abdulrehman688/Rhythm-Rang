# 🎵 Rhythm Rang – Audio & Video Music Web Application

**Rhythm Rang** is a complete music streaming platform that allows users to listen to audio tracks, watch music videos, explore albums and artists, and create their own playlists/wishlist.  
The project also includes a **custom AI chatbot** built in Python (Flask, PyTorch, NLTK) that answers user queries and assists in navigating the website.  

---

## 🚀 Features

### 🎧 User Features
- Stream **audio songs** and **music videos** directly in the browser.
- Browse **albums** and **artists** with detailed information.
- **User authentication** – Register, log in, and manage account settings.
- **Wishlist** – Save favorite songs/videos for later.
- **Search & filtering** – Quickly find music content.
- Responsive and user-friendly interface.

### 🛠 Admin Features
- **User Management** – Add, edit, and remove users.
- **Content Management (CRUD)** – Manage songs, videos, albums, artists, and upcoming releases.
- **Website Configuration** – Update banners, sliders, posters, and featured content.
- **Media File Handling** – Upload and organize music/audio/video assets.

### 🤖 AI Chatbot
- Developed using **Python, Flask, PyTorch, and NLTK**.
- Trained on **custom intents** for music-related questions.
- Hosted as a **REST API** and integrated into the PHP application via JavaScript.
- Can run independently from the PHP app.

---

## 🛠 Tech Stack

**Frontend:**
- HTML5, CSS3, JavaScript
- Bootstrap & custom styles
- AJAX for dynamic loading

**Backend:**
- PHP (core web app logic)
- MySQL (database)
- Flask (Python API for chatbot)
- PyTorch & NLTK (chatbot ML model)

**Other Tools:**
- REST API integration between PHP & Python services
- MVC-like folder organization
- CRUD-based admin panel

---
---
## 📂 Project Structure

Sound/
│
├─ admin2/                         # Admin Panel
│  ├─ assets/
│  ├─ check/                       # CSS/JS for checks
│  ├─ css/
│  ├─ css2/
│  ├─ headerandfooter/
│  ├─ images/
│  ├─ js/
│  └─ pages/                       # Admin PHP files & media
│     ├─ audio/                    # Audio files
│     ├─ video/                    # Video files
│     ├─ banners/                  # Banner images
│     ├─ slider/                   # Slider images
│     ├─ artists/                  # Artist images
│     └─ ...                       # Other admin resources
│
├─ chatbot/                        # Python Chatbot Project
│  ├─ frontend/                    # Chatbot UI (HTML/CSS/JS)
│  ├─ app.py                       # Flask API server
│  ├─ train.py                     # Model training script
│  ├─ chat.py                      # Console chatbot
│  ├─ model.py                     # PyTorch model definition
│  ├─ nltk_utils.py                # NLP utilities
│  ├─ intents.json                 # Training data (intents)
│  ├─ data.pth                      # Trained model weights
│  └─ ...                          # venv, __pycache__, etc.
│
├─ report/
│  └─ PROJECTREPORT.pdf
│
├─ user/                           # User-facing Web App
│  ├─ css/
│  ├─ js/
│  ├─ headerfooter/
│  ├─ images/
│  └─ *.php                        # Frontend PHP pages
│
├─ sound.sql                       # MySQL database dump
└─ README.md


---

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the repository
```bash
git clone https://github.com/yourusername/Rhythm-Rang.git
cd Rhythm-Rang/Sound

2️⃣ Database Setup
Import sound.sql into MySQL.

Update database credentials in PHP config files (inside admin2/ and user/ folders).

3️⃣ PHP Application Setup
Place the Sound/ folder inside your server root (e.g., htdocs for XAMPP).

Start Apache & MySQL in your local server environment.

🤖 Running the Chatbot
The chatbot can be deployed in two ways:

Within Flask using Jinja2 templates – Both backend and frontend served from Flask.

As a standalone API – Flask serves only the chatbot prediction API, and HTML/JS can be hosted in any frontend application (like our PHP project) with minor modifications.

Initial Setup
cd chatbot
python -m venv venv

Activate the virtual environment:

Windows
venv\Scripts\activate

Mac/Linux
source venv/bin/activate

Install Dependencies
pip install Flask torch torchvision nltk

Download NLTK data:
python
>>> import nltk
>>> nltk.download('punkt')
>>> exit()

Train the Chatbot
Modify intents.json to add or update chatbot responses, then run:
python train.py

This will create data.pth (the trained model file).

Test in Console
python chat.py

Run Flask API
python app.py

The chatbot API will now be available at:
http://127.0.0.1:5000


✨ Author
Developed by Abdul Rehman as part of a full-stack web development project.
