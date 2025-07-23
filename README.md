# Smart Student Attendance System Using QR Code

## 📘 Overview

This project presents a **Smart Attendance Management System** that leverages **QR code scanning** to record student attendance. Designed as a **mobile application for Android**, it replaces traditional attendance systems with a fast, efficient, and secure solution.

---

## 🎯 Objectives

- Replace traditional paper-based attendance with a smart QR-based system.
- Enable secure and real-time attendance logging.
- Generate weekly and monthly attendance reports automatically.
- Simplify staff interaction via a mobile app interface.

---

## 🔧 Technology Stack

| Component         | Technology                     |
|------------------|-------------------------------|
| Language          | Java (Android)                |
| IDE               | Android Studio                |
| Database          | SQLite                        |
| Platform          | Android OS (4.0.3 and above)  |
| Output Format     | Excel (.xls), CSV             |

---

## 💡 Key Features

- 📷 QR Code Scanning for attendance
- 🔐 Data stored securely using SQLite
- 📅 Weekly and Monthly attendance reports
- 📱 Easy-to-use Android application for both faculty and students
- 🧑‍🏫 Admin Web Portal for attendance monitoring
- 👨‍👩‍👧 Parent login to monitor attendance
- 🔁 Offline QR scanning and sync when online

---

## 🛠 Installation & Setup

1. Install Android Studio.
2. Clone or download this repository.
3. Open the project in Android Studio.
4. Build and run the app on a device (minimum Android 4.2).
5. Ensure SQLite permissions are set properly.
6. To generate QR codes, use the in-app generator based on student ID data.

---

## 📊 System Architecture

- **Admin Module**: Generates QR and views all reports.
- **Faculty Module**: Takes attendance via scanning.
- **Student Module**: Scans QR code for attendance.
- **Parent Module**: Can monitor attendance reports.
- **Database Layer**: Stores data in SQLite and exports as XLS/CSV.

---

## 📈 Advantages

- 🔄 Real-time attendance tracking
- 🧾 Paperless and eco-friendly
- 🧠 Smart, secure, and error-free
- ⚡ Time-saving for faculty and students
- 📉 Minimal hardware requirement

---

## 🔍 Sample Use Case

1. Teacher logs into the app and displays the QR code.
2. Student scans QR code with their app.
3. Timestamp and student ID are stored in SQLite.
4. Attendance is synced and report is generated weekly/monthly.

---

## 📚 References

- [ZXing QR Code Scanner](https://github.com/zxing/zxing)
- [Android Development Guide](https://developer.android.com/training/index.html)
- ISO/IEC 18004:2000 — QR Code standard

---

## ✅ Conclusion

The Smart QR Code-based Attendance System improves the reliability and efficiency of attendance tracking in educational institutions. With minimal effort, the system automates the attendance process, reduces human error, and provides administrators, teachers, and parents with real-time insights.

---

## 📎 License

This project is created as part of a diploma final-year project and is free for educational use.
