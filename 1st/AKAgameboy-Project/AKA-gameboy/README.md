<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/pspapleng/AKA-gameboy">
    <img src="https://raw.githubusercontent.com/othneildrew/Best-README-Template/master/images/logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">AKA ‘gameboy’
</h3>

  <p align="center">
  let's enjoy 🎮
    <br />
    <a href="https://www.youtube.com/watch?v=30pQbPnYK-c&feature=youtu.be"><strong>View Demonstrate Video »</strong></a>
    <br />
    <br />
    <a href="https://github.com/pspapleng/AKA-gameboy">Explore The Doc</a>
    ·
    <a href="https://github.com/pspapleng/AKA-gameboy/issues">Report Bug</a>
    ·
    <a href="https://github.com/pspapleng/AKA-gameboy/issues">Request Feature</a>
  </p>
</p>

<!-- TABLE OF CONTENTS -->

## Table of Contents

- [About the Project](#about-the-project)
  - [Abstract](#Abstract)
  - [Objective](#Objective)
  - [Built With](#built-with)
- [Equipment](#Equipment)
- [Features](#Features)
- [Flowchart](#Flowchart)
- [Demonstrate Video](#Demonstrate-Video)
- [Contact](#contact)

<!-- ABOUT THE PROJECT -->

# About The Project

[![Poster][poster]](https://github.com/pspapleng/AKA-gameboy/blob/master/picture/AKA.jpg)

### Abstract

โครงงานนี้เป็นโครงงานเกี่ยวกับการเขียนเกมลง Microcontroller โดยมีวัตถุประสงค์เพื่อพัฒนาโค้ดเกมให้สามารถนำไปใช้งานกับ Microcontroller ที่เขียนโดย arduino framework ได้ทุกตัวเพียงปรับ library ที่เกี่ยวกับการแสดงผลให้เหมาะกับหน้าจอที่ใช้นั้นๆ โดยเราทำการพัฒนาเกมบน M5stack Core ESP32 ซึ่งเป็น Microcontroller สำเร็จรูปที่ใช้งาน ESP32 ในการประมวลผลและมี module ต่างๆพร้อมใช้งาน ซึ่งเกมในเครื่องเล่นเกมของพวกเรานั้นพัฒนามาจากเกมงู โดยจะมีการปรับลูกเล่นต่างๆให้มีเพิ่มมากขึ้นและแตกต่างจากรูปแบบที่มีอยู่เดิม มีการนำภาษาซีมาประยุกต์ใช้ในการเขียนเกมลงใน Microcontroller

Keywords : เครื่องเล่นเกม;เกมงู;microcontroller;arduino framework

### Objective

- พัฒนาเกมให้เล่นและแสดงผลบน Microcontroller ได้
- สร้าง Algorithm ที่สามารถนำไปปรับใช้ได้กับ Microcontroller ที่ใช้งาน arduino framework ได้เพียงเปลี่ยน library เกี่ยวกับการแสดงผล
- พัฒนาเกมสำหรับผ่อนคลายความเครียด ฝึกทักษะการคิดวิเคราะห์และแก้ไขปัญหา

### Built With

- C language
- M5Stack

<!-- Equipment -->

# Equipment

[![m5stack][m5stack]](https://github.com/pspapleng/AKA-gameboy/blob/master/picture/m5stack-gray.jpg)

- ชุดพัฒนาไมโครคอนโทรลเลอร์ ESP32 ที่มี WiFi และ บลูทูธกำลังงานต่อ หรือ BLE ในตัว มาพร้อมกับจอแสดงผล TFT LCD ขนาด 2 นิ้ว ความละเอียด 320 x 240 พิกเซล บรรจุลงในกล่องขนาด 5 x 5 เซนติเมตรที่มีฐานกล่องเป็นแม่เหล็ก มีลำโพง ปุ่มกด และแบตเตอรี่แบบประจุได้รวมถึงวงจรประจุแบตเตอรี่มาพร้อมใช้งาน

คุณสมบัติทางเทคนิค

* ติดตั้งโมดูลไมโครคอนโทรลเลอร์ ESP32 ซึ่งใช้ซีพียูแกนคู่ Tensilica LX6 ความถี่ 240MHz มีหน่วยความจำ SRAM 512 กิโลไบต์ หน่วยความจำแฟลช 4 เมกะไบต์ มีวงจร WiFi 802.11 b/g/n HT40 และบลูทูธกำลังต่ำ (BLE) พร้อมติดตั้งสายอากาศ 3D ในตัว
* มีจอแสดงผล TFT LCD สี ขนาด 2 นิ้ว ความละเอียด 320 x 240 พิกเซล
* มีปุ่มกด 3 ปุ่ม
* เชื่อมต่อพอร์ต USB เพื่อประจุแบตเตอรี่และอัปโหลดโค้ดผ่านไอซีแปลงสัญญาณ USB เป็น UART ของ Silicon LAB เบอร์ CP2104
* มีแบตเตอรี่ 3.7V 150mAH แบบลิเธียมอิออนในตัว พร้อมวงจรประจุแบตเตอรี่ที่ใช้ไอซีเบอร์ IP5036 ผ่านพอร์ต USB TYPE C
* พัฒนาโปรแกรมด้วย Arduino และ ESP-IDF พร้อมตัวอย่างโปรแกรมและไลบรารีสนับสนุนการทำงานจำนวนมาก

<!-- Features -->

# Features

- สามารถบังคับทิศทางของงูได้โดยใช้คีย์บอร์ด
- มีการสุ่มกำแพงขึ้นมาพร้อมกับอาหาร เมื่องูกินอาหารแล้วกำแพงอันนั้นจะเปลี่ยนเป็นอาหารแทนแล้วทำการสุ่มกำแพงใหม่ขึ้นมา
- ถ้างูชนกำแพงที่ขอบหรือกำแพงที่สุ่มมาจะถือว่าจบเกม
- มีการนับคะแนนจากการกินอาหาร โดยกินอาหาร 1 ครั้ง เท่ากับ 10 คะแนน เมื่อจบเกมจะมีการแสดงผลคะแนนขึ้นที่หน้าจอ

<!-- Flowchart -->

# Flowchart

[![Flowchart][flowchart]](https://github.com/pspapleng/AKA-gameboy/blob/master/picture/Untitled%20Diagram%20(1).jpg)

<!-- Link youtube -->

# Demonstrate Video

- [AKA ‘gameboy’](https://www.youtube.com/watch?v=30pQbPnYK-c&feature=youtu.be)

<!-- CONTACT -->

## Contact

62070029 นางสาว จิตติภรณ์ จักรวิวัฒนากุล - [@DevJubjang](https://github.com/DevJubjang)

62070036 นางสาว จุฬาลักษณ์ เอื้อสกุล - [@ChulalakU](https://github.com/ChulalakU)

62070039 นางสาว ชญานิน อินทร์สุข - [@pspapleng](https://github.com/pspapleng)

62070227 นาย อิทธิ์ศรา ยันต์เจริญ - [@lanzelotx](https://github.com/lanzelotx)

รายงาน และ ซอร์สโค้ดนี้ เป็นส่วนหนึ่งของวิชา Computer Programming (06016315) หลักสูตรวิทยาศาสตร์บัณฑิต สาขาวิชาเทคโนโลยีสารสนเทศ ภาคเรียนที่ 2 ปีการศึกษา 2562 คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง

***หมายเหตุ ได้เปลี่ยนโครงงานจาก ArdinoBoy เป็น AKA 'gameboy' เนื่องจากบอร์ด arduino ชำรุด ทางเราจึงต้องเปลี่ยนมาใช้ m5stack ในการทำโครงงานแทน
ขออภัยในการเปลี่ยนแปลงที่กระทันหันและขอบพระคุณอาจารย์ที่เข้าใจนะคะ🙏

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[poster]:https://github.com/pspapleng/AKA-gameboy/blob/master/picture/AKA.jpg
[m5stack]:https://github.com/pspapleng/AKA-gameboy/blob/master/picture/m5stack-gray.jpg
[flowchart]:https://github.com/pspapleng/AKA-gameboy/blob/master/picture/Untitled%20Diagram%20(1).jpg
