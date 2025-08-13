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
## 📂 Project Structure

```plaintext
Sound/
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
│  ├─ data.pth                     # Trained model weights
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
```
---

## 🚀 Installation & Setup

### 1️⃣ Clone Repository
```bash
git clone https://github.com/yourusername/sound.git
cd sound
```

### 2️⃣ Database Setup
1. Import `sound.sql` into your MySQL server.
2. Update database credentials in the PHP config file.

### 3️⃣ Chatbot Setup

#### Initial Setup
```bash
cd chatbot
python3 -m venv venv
source venv/bin/activate   # On Windows use: venv\Scripts\activate
```

#### Install Dependencies
```bash
pip install Flask torch torchvision nltk
```

#### Install NLTK Data
```python
python
>>> import nltk
>>> nltk.download('punkt')
```

#### Modify Training Data
Edit `intents.json` with your own intents and responses.

#### Train the Chatbot
```bash
python train.py
```

#### Test in Console
```bash
python chat.py
```

#### Run Flask API
```bash
python app.py
```

---

## 🖥 Running the Full Application
1. Start your PHP server (XAMPP, WAMP, etc.) for the `user` and `admin2` folders.
2. Start Flask API for the chatbot:
   ```bash
   cd chatbot
   source venv/bin/activate
   python app.py
   ```
3. Access the site in the browser (e.g., `http://localhost/sound/user`).

---

✨ Author
Developed by Abdul Rehman as part of a full-stack web development project.
