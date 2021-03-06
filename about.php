<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/meta-data.html" ?>

    <title>About Me</title>

    <script src="libraries/three.js" defer></script>
    <script src="src/globe.js" defer></script>

</head>

<body class="z-3">

    <?php include "templates/sidebar.html" ?>

    <button class="nav-btn" id="nav-btn" onClick="toggleNav()">&#9776;</button>

    <div id="not-sidebar">

        <canvas id="globe-canvas" class="z-2"></canvas>

        <section class="section z3 bg-black-transparent-0p3">
            <h1 class="main-title">About Me - A Resume Profile</h1>

            <div class="profile-pic-container"><img class="profile-pic" src="assets/profile-pic.jpg"></div>

            <h2 class="subtitle">Introduction</h2>

            <div class="intro-text main-text">
                <p>
                    [Updated 25th April 2022]
                </p>
                <p>
                    Hi, my name is Peter Bellaby, as you might have already seen on the landing page's mock terminal: a self-taught Full Stack developer, an English Foreign Language teacher, a fluent speaker of Japanese and conversational speaker of Swedish, a happily married man to a lovely wife, a world traveller by way of living in places for years at a time (places I've been highlighted in red on the globe there) and a massive Dungeons and Dragons geek, primarily in the role as forever-DM (so please let me know if you need a player!) As you can probably see, I'm also a corgi owner and dog-person.</p>

                <p>
                    I’m 6ft tall with blue eyes, have been greying since I was 18, and hail from the rainy island of Great Britain. I freelance web development as programming is one of my passions and the internet is my second home. I also used to teach English as a secondary language in the northern island of Hokkaido in Japan, as well as doing translation and various other odd jobs here and there to do with languages or computers, or both. I've taught ever since completing a TESOL course after graduation from Royal Holloway University of London, where I studied Physics at an undergraduate level. </p>
                <p>
                    I’m aware that my focus is pretty scattered, but I like to consider myself a generalist able to tackle and take on any kind of task and excel. A generalist is someone who can specialise anywhere.</p>

                <p>If you have any questions or enquiries, please feel free to contact me via e-mail (link in sidebar) or <a href="skype:p.t.bellaby?userinfo" class="intext-link" target="_blank">here</a> on Skype or <a href="https://www.linkedin.com/in/peter-bellaby-40b93022b/" class="intext-link" target="_blank">here</a> on LinkedIn.</p>

                <p>
                    Thank you for taking the time to check out the site and this about page.
                </p>
                <p>Nihil Supernum!</p>
            </div>

            <h2 class="subtitle">Qualifications & Education</h2>
            <p class="subtitle-synopsis">The official certificates and education that I possess.</p>
            <div class="main-text">

                <p><span class="inline-subtitle">Full-stack Web Development</span>: where I taught myself using online tools and practice over the course of half a year, building on a foundation of hobbyist interest in programming since university.</p>

                <p>An <span class="inline-subtitle">OCR Level 3 Diploma in Business Administration</span> during a commercial business apprenticeship with ZF Friedrichshafen AG, educated by Solihull College, where I developed a wide base of business skills alongside practical experience managing accounts of cart part manufacturing and supply for various big-names; Jaguar Landrover, Honda, Toyota and others. (Oct 2017 – Oct 2018)</p>

                <p>A <span class="inline-subtitle">Trinity College London TESOL</span> certificate for teaching English as a foreign language, received from Universal Language Training, a 6 month course condensed into the busiest 1 month of my life. Well worth it, however, and it sparked my passion for teaching. (July 2015)</p>

                <p>A <span class="inline-subtitle">Certificate of Higher Education in Physics</span> from Royal Holloway University of London’s physics department. (September 2012 – June 2015)</p>

                <p>3 <span class="inline-subtitle">A-Levels</span> and an <span class="inline-subtitle">AS</span> at Solihull 6th Form College, which were; Physics – A, Mathematics – B, Computing – C, AS-Chemistry – C. (September 2010 – June 2012)</p>

                <p>And my primary education at Tudor Grange School, now Tudor Grange Academy, earning 14 GCSE’s including A*’s in Maths and English Literature, and A’s in English Language, Chemistry, Biology, Physics, Statistics and Media Studies. (September 2005 – June 2010)</p>

                <p>For a complete list of my secondary education please contact me.</p>
            </div>

            <h2 class="subtitle">Personal Skills</h2>
            <p class="subtitle-synopsis">The skills and abilities I bring to a table that haven't been printed on a paper first.</p>
            <div class="main-text">
                <p>
                    <span class="inline-subtitle">Programming, IT & Computer Skills</span>, where I am capable of coding in Laravel, PHP, JavaScript, HTML, CSS, MySQL, React, Vue, Java, Basic, Python, C#, C++, as well as quickly picking up any other 3rd generation programming language. I can use these in combination to produce projects, working with GIT as part of a team, and produce websites and other language.
                    <br>
                    I can use these in combination with best practices, such as SOLID and DRY, other frameworks and technologies, and any new software you need me to learn to produce projects from ideation to deployment, working remotely or in office, in teams and with version control. <br>
                    I will be fluent in any spreadsheet and word processing and data-manipulation software you throw at me, at making use of Windows 7, 10 and now 11, with Linux (both Debian and Arch based distros) and any other expected computer literacy. I also build computers as a hobby, and know them literally inside and out. Putting Lubuntu on an old Windows Surface Pro was a fun project I underwent once. My personal computer is a frankenstein creation of parts that have gone through a steady cycle of upgrades, and the chip shortage really hurts me.
                </p>

                <p>
                    <span class="inline-subtitle">Languages</span>: I speak Japanese fluently, Swedish conversationally and I'm working on French. I hold a JLPT N1 level equivalent level of Japanese, conversing at a native level (literally at a business level for the last 3 years), and a B1+ (CEFR) level in Swedish, a growing understanding of French as well as a foundational understanding of Spanish, German, Esperanto and academic linguistics.
                </p>

                <p>
                    <span class="inline-subtitle">Team Worker</span>. No position is an island entire of itself. Proactive teamwork is key and I always try to be an exemplary pillar. I have received excellent feedback during summer English Language camps I have run; my positions as trainer, team leader and teacher; and in a variety of different fields from not just teaching, but team translation projects, programmathons, and event fairs. But not just working in teams, building them up to get a job done too; I helped get Co&Co's TOEIC Exam Preparation English course off the ground.
                </p>

                <p>
                    <span class="inline-subtitle">Project & Time Management</span>. As demonstrated while juggling a part time job with full-time intense University study and work-loads, organising classes and schedules for my students, and completing timed programming challenges, I know what to do, how to do it, and most importantly how long things take. I am also not afraid to be upfront if I expect items are not possible within a certain schedule, and I always prioritise the completion of the project at hand to the level required by the specification, within dead-lines.
                </p>

                <p>
                    <span class="inline-subtitle">Public liason experience</span>: I worked as a waiter in a 5-star hotel for a year and in various London-wide events as event staff while studying, where I was unfailingly polite, and honed many other people and soft skills. I pride myself on my professional attitude in work, no matter what capacity I work in, and my charming and approachable manner.
                </p>

                <p>
                    <span class="inline-subtitle">General Aptitude</span>: I have a wide base of skills to pull on and am capable of quickly and efficiently learning new skills or applying skills to new areas of work. I have a strong scientific background while also being capable and experienced in the humanities, where I have spent most of my working life. The power of a generalist is the ability to specialise anywhere.
                </p>
            </div>

            <h2 class="subtitle">Work/Travel History</h2>
            <div class="main-text">
                <p> <span class="subtitle-synopsis underline">Freelance Full Stack Web Developer</span><br>
                    <span class="inline-subtitle">Dates: </span>April 2022 to present<br>
                    <span class="inline-subtitle">Job Title: </span>Full Stack Web Developer<br>
                    <span class="inline-subtitle">Details of position: </span>I develop websites using Laravel potentially with Vue for clients from scratch to deployment, and manage their websites if desired as webmaster (and for clients who don't need such services I hand over the reigns of hosted websites once completed). Sitdowns with clients determine the requirements of the site, transaction details, and setup the client-developer relationship, and the schedule for the project. Over the course of the project the client is consulted and adaptions are made, until the site can be deployed.<br>
                </p>
                <p> <span class="subtitle-synopsis underline">English Teaching at Language House, Japan</span><br>
                    <span class="inline-subtitle">Dates: </span>March 2019 to March 2022<br>
                    <span class="inline-subtitle">Company: </span>Language House, Co&Co<br>
                    <span class="inline-subtitle">Address: </span>Japan, 〒060-0002 Hokkaido, Sapporo, Chuo Ward, Kita2, Nishi3, 1-29 Takesato Bldg. 2F<br>
                    <span class="inline-subtitle">Job Title: </span>English Teacher<br>
                    <span class="inline-subtitle">Details of position: </span>I am a full time teacher of English, with a focus on conversational skills as well as general language acquisition, primarily using the Four Corners and Viewpoint textbooks, but also TOEIC and business English texts. Pulling on the 3+ years of teaching experience and technical knowledge of the English language, I guide and lead students through their studies not just in general English, but in exam preparation (primarily for TOEIC but also for Eiken or IELTS), business English, and any other language goal they may have.<br>
                </p>

                <p> <span class="subtitle-synopsis underline">Studying Japanese in Sapporo, Japan</span><br>
                    <span class="inline-subtitle">Dates: </span>January 2019 to March 2019<br>
                    <span class="inline-subtitle">Company: </span>Language House, Co&Co<br>
                    <span class="inline-subtitle">Address: </span>Japan, 〒060-0002 Hokkaido, Sapporo, Chuo Ward, Kita2, Nishi3, 1-29 Takesato Bldg. 2F<br>
                    <span class="inline-subtitle">Details of travels: </span>Arriving in the heavy snows of mid-winter Sapporo, I finally was able to follow my passion for Japanese again, joining a school I found recommended online. Having already visited the country in summer in the very hot and humid Kyoto for a month, this time I wanted a winter adventure. Not sure when I would be leaving, I bought a one way ticket. In the end I found a company willing to sponsor me for a visa to be a teacher, the same company in fact that I had studied at, and so changed my life.<br>
                </p>

                <p> <span class="subtitle-synopsis underline">Travelling in Sweden</span><br>
                    <span class="inline-subtitle">Dates: </span>November 2018<br>
                    <span class="inline-subtitle">Details of travel: </span>Having worked in a typical multinational company for a year I was desperate to go back to teaching, but also to really experience Sweden by living there. With that in mind, I decided to job hunt on site and also visit old friends and new, and brush up on my language skills. I travelled from Uppsala to Gothenberg, and it's a month I will not forget. In the end I came home.<br>
                </p>

                <p> <span class="subtitle-synopsis underline">Commercial Business Apprenticeship, the U.K.</span><br>
                    <span class="inline-subtitle">Dates: </span>October 2017 to October 2018.<br>
                    <span class="inline-subtitle">Company: </span>ZF Friedrichshafen AG<br>
                    <span class="inline-subtitle">Address: </span>Stratford Rd, Shirley, Solihull, B90 4AX, UK<br>
                    <span class="inline-subtitle">Job Title: </span>Commercial Business Apprentice<br>
                    <span class="inline-subtitle">Details of position: </span>I spent a quarter of my time educating myself for the various business units of the apprenticeship, receiving no direct learning, and preparing material as proof. For the company I assisted the global key account manager look after the state of the accounts, tracking missing product and ensuring our commercial customers had their concerns addressed, and received orders correctly and on time. The
                    large bulk of goods and high values required responsibility, due care & attention, and professionalism.<br>
                </p>

                <p> <span class="subtitle-synopsis underline">Studying Swedish in Uppsala, Sweden</span><br>
                    <span class="inline-subtitle">Dates: </span>June 2017 to August 2017<br>
                    <span class="inline-subtitle">Company: </span>Uppsala International Summer Session<br>
                    <span class="inline-subtitle">Address: </span>Kungsängsgatan 12, 753 22 Uppsala, Sweden<br>
                    <span class="inline-subtitle">Details of travel: </span>TODO<br>
                </p>

                <p> <span class="subtitle-synopsis underline">English Teaching at Sym Levice, Slovakia</span><br>
                    <span class="inline-subtitle">Dates: </span>September 2016 to June 2017<br>
                    <span class="inline-subtitle">Company: </span>Speak Your Mind Levice<br>
                    <span class="inline-subtitle">Address: </span>J.Bottu 3232, 934 01 Levice, Slovakia<br>
                    <span class="inline-subtitle">Job Title: </span>Lektor (Lecturer / Teacher)<br>
                    <span class="inline-subtitle">Details of position: </span>using the Speak Your Mind method I taught all of our students, from children of 8 years to adults in their twilight years, to attain a high level of fluency in English from beginning levels all the way up to professional business English. This method affords me a complete technical understanding of English grammar as well as the ability to easily and clearly communicate and teach to others, regardless of their native language and English ability, as well as teaching other skills and effectively communicate ideas. I was also often responsible for extra classes in local schools, at no extra charge, and was in charge of pronunciation education across the area.<br>
                </p>

                <p> <span class="subtitle-synopsis underline">Summer School Teaching and Chaperoning in the U.K.</span><br>
                    <span class="inline-subtitle">Dates: </span>July 2015 to August 2015 and July 2016 to August 2016<br>
                    <span class="inline-subtitle">Company: </span>Oxford House College<br>
                    <span class="inline-subtitle">Address: </span>8 Tiddington Road, Stratford-upon-Avon, CV37 7AE<br>
                    <span class="inline-subtitle">Job Title: </span>Residential Teacher and Activity Leader<br>
                    <span class="inline-subtitle">Details of position: </span>Twice I have taught children of ages 10 to 17 of various nationalities English from 9am until 3pm six days a week at an English summer camp. I also ran and devised activities that the children took part in. Due to short staffing I worked usually from 9am until 10pm everyday, with breaks. This job gave me over 180 hours of hands on teaching experience during the short span, as well as many more hours being an activity leader and looking after the kids’ well being and ensuring participation.<br>
                </p>
                
                <p> <span class="subtitle-synopsis underline">English Teaching at Number 16, Spain</span><br>
                    <span class="inline-subtitle">Dates: </span>September 2015 to June 2016<br>
                    <span class="inline-subtitle">Company: </span>Academia de Ingles Number 16 School<br>
                    <span class="inline-subtitle">Address: </span>Number 16 School, San Miguel 7, 50 001, Zaragoza, Spain<br>
                    <span class="inline-subtitle">Job Title: </span>English Teacher<br>
                    <span class="inline-subtitle">Details of position: </span>using the Speak Your Mind method in which they trained me, I taught children from as young as 10 to adults of all ages. Whilst with Number 16 School I trained extensively to perfect my knowledge of English grammar and pronunciation, particularly in regards to teaching these aspects, and on several occasions was offered promotion to position of team leader. There I taught also my fellow teachers about the I.P.A. and its use as a teaching tool and grew into the teacher that I am today, solidifying the training and practice I had earned earlier in the year.<br>
                </p>

                <p> <span class="subtitle-synopsis underline">Waiting and Events part-time while at university</span><br>
                    <span class="inline-subtitle">Dates: </span>October 2014 to May 2015<br>
                    <span class="inline-subtitle">Company: </span>Off To Work (working primarily at Coworth Park hotel)<br>
                    <span class="inline-subtitle">Address: </span>Blacknest Road, Ascot, Berkshire, SL5 7SE UK<br>
                    <span class="inline-subtitle">Job Title: </span>Banqueting waiter & front of house runner.<br>
                    <span class="inline-subtitle">Details of position: </span>serving food from the kitchen to customers throughout the hotel, and setting up rooms and breaking them down after the rooms have been used for various events including weddings, business meetings and very formal events. I have served in confidence many VIPs and discretion is part of the job, as well as an impeccable manner and exemplary professional attitude.<br>
                </p>
            </div>

        </section>

        <footer id="footer" class="main-footer">
            <label class="footer-text align-right" for="demo-div">This site demos: </label>
            <div id="demo-div">
                <img src="assets/icons8-code-file-50.png" width="32" height="32" style="border-radius:5px;" title="Static HTML">
                <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <!-- while the svg and path elements were provided by the above the rect SVG is my own addition -->
                    <rect width="50" height="50" rx="10" ry="10" style="fill:rgb(255,255,255);stroke:0" />
                    <path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;-inkscape-font-specification:Sans" d="M 5 5 C 3.3550302 5 2 6.3550302 2 8 L 2 36 C 2 37.64497 3.3550302 39 5 39 L 20 39 L 20 42 L 18 42 C 16.35503 42 15 43.35503 15 45 L 15 46 L 15 47 L 16 47 L 34 47 L 35 47 L 35 46 L 35 45 C 35 43.35503 33.64497 42 32 42 L 30 42 L 30 39 L 45 39 C 46.64497 39 48 37.64497 48 36 L 48 8 C 48 6.3550302 46.64497 5 45 5 L 5 5 z M 5 7 L 45 7 C 45.56503 7 46 7.4349698 46 8 L 46 36 C 46 36.56503 45.56503 37 45 37 L 20 37 L 5 37 C 4.4349698 37 4 36.56503 4 36 L 4 8 C 4 7.8587425 4.012893 7.7139858 4.0625 7.59375 C 4.211321 7.2330426 4.5762273 7 5 7 z M 9 13 C 7.9069372 13 7 13.906937 7 15 L 7 28 C 7 29.093063 7.9069372 30 9 30 L 15 30 C 16.093063 30 17 29.093063 17 28 L 17 15 C 17 13.906937 16.093063 13 15 13 L 9 13 z M 23 13 C 21.906937 13 21 13.906937 21 15 L 21 28 C 21 29.093063 21.906937 30 23 30 L 41 30 C 42.093063 30 43 29.093063 43 28 L 43 15 C 43 13.906937 42.093063 13 41 13 L 23 13 z M 9 15 L 15 15 L 15 28 L 9 28 L 9 15 z M 23 15 L 41 15 L 41 28 L 23 28 L 23 15 z M 12 25 C 11.447715 25 11 25.447715 11 26 C 11 26.552285 11.447715 27 12 27 C 12.552285 27 13 26.552285 13 26 C 13 25.447715 12.552285 25 12 25 z M 32 25 C 31.447715 25 31 25.447715 31 26 C 31 26.552285 31.447715 27 32 27 C 32.552285 27 33 26.552285 33 26 C 33 25.447715 32.552285 25 32 25 z M 25 34 C 24.447715 34 24 34.447715 24 35 C 24 35.552285 24.447715 36 25 36 C 25.552285 36 26 35.552285 26 35 C 26 34.447715 25.552285 34 25 34 z M 22 39 L 28 39 L 28 42 L 22 42 L 22 39 z M 18 44 L 32 44 C 32.56503 44 33 44.43497 33 45 L 17 45 C 17 44.43497 17.43497 44 18 44 z" />
                    <title>MediaQueries in use</title>
                </svg>
                <svg width="32" height="32" fill="none" stroke-linecap="square" stroke-miterlimit="10" version="1.1" viewBox="0 0 226.77 226.77" xmlns="http://www.w3.org/2000/svg">
                    <rect width="226.77" height="226.77" rx="43" ry="43" style="fill:rgb(255,255,255);stroke:0" />
                    <g transform="translate(8.964 4.2527)" fill-rule="evenodd" stroke="#000" stroke-linecap="butt" stroke-linejoin="round" stroke-width="4">
                        <path d="m63.02 200.61-43.213-174.94 173.23 49.874z" />
                        <path d="m106.39 50.612 21.591 87.496-86.567-24.945z" />
                        <path d="m84.91 125.03-10.724-43.465 43.008 12.346z" />
                        <path d="m63.458 38.153 10.724 43.465-43.008-12.346z" />
                        <path d="m149.47 62.93 10.724 43.465-43.008-12.346z" />
                        <path d="m84.915 125.06 10.724 43.465-43.008-12.346z" />
                    </g>
                    <title>ThreeJS in use</title>
                </svg>
            </div>
            <?php include "templates/footer-inner.html" ?>
        </footer>
    </div>
</body>


</html>