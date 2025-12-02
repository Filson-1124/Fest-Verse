<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
        

        <!-- Styles and Scripts -->
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="index.js" defer></script>
            
        <!--Icon-->
         <link rel="icon" href="img/CoachellaIcon.png" type="image/png">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Coachella 2025</title>
    </head>
    <body>
        <audio id="bgMusic" autoplay loop></audio>

        <!-- Sidebar Navigation -->
        <nav id="sidebar">
            <ul>
                <li class="DesktopView-Sidebar">
                    <a href="index.php" >
                        <span class="logo">FestVerse</span>
                    </a>
                    <button id="toggle-button" onclick=toggleSideBar()>
                        <svg  xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M440-240 200-480l240-240 56 56-183 184 183 184-56 56Zm264 0L464-480l240-240 56 56-183 184 183 184-56 56Z"/>
                        </svg>
                    </button>
                </li>

                <li class="MobileView-Sidebar">
                    <a href="index.php">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/>
                        </svg>
                    </a>
                </li>

                <!-- Navigation Links -->
                <li class="link">
                    <a href="#heropage" onclick=setActive(this)>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/>
                        </svg>
                        <span>Home</span>
                    </a>
                </li>

                <li class="link">
                    <a href="#about">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                        </svg>
                        <span>About</span>
                    </a>
                </li>

                <li class="link"> 
                    <a href="#artists">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M740-560h140v80h-80v220q0 42-29 71t-71 29q-42 0-71-29t-29-71q0-42 29-71t71-29q8 0 18 1.5t22 6.5v-208ZM120-160v-112q0-35 17.5-63t46.5-43q62-31 126-46.5T440-440q42 0 83.5 6.5T607-414q-20 12-36 29t-28 37q-26-6-51.5-9t-51.5-3q-57 0-112 14t-108 40q-9 5-14.5 14t-5.5 20v32h321q2 20 9.5 40t20.5 40H120Zm320-320q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T520-640q0-33-23.5-56.5T440-720q-33 0-56.5 23.5T360-640q0 33 23.5 56.5T440-560Zm0-80Zm0 400Z"/>
                        </svg> 
                        <span>Artists</span>
                    </a>
                </li>

                <li class="link">
                    <a href="#maps">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="m600-120-240-84-186 72q-20 8-37-4.5T120-170v-560q0-13 7.5-23t20.5-15l212-72 240 84 186-72q20-8 37 4.5t17 33.5v560q0 13-7.5 23T812-192l-212 72Zm-40-98v-468l-160-56v468l160 56Zm80 0 120-40v-474l-120 46v468Zm-440-10 120-46v-468l-120 40v474Zm440-458v468-468Zm-320-56v468-468Z"/>
                        </svg>
                        <span>Map</span>
                    </a>
                </li>
                  <li class="link">
                    <a href="#merch">  
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M240-80q-33 0-56.5-23.5T160-160v-480q0-33 23.5-56.5T240-720h80q0-66 47-113t113-47q66 0 113 47t47 113h80q33 0 56.5 23.5T800-640v480q0 33-23.5 56.5T720-80H240Zm0-80h480v-480h-80v80q0 17-11.5 28.5T600-520q-17 0-28.5-11.5T560-560v-80H400v80q0 17-11.5 28.5T360-520q-17 0-28.5-11.5T320-560v-80h-80v480Zm160-560h160q0-33-23.5-56.5T480-800q-33 0-56.5 23.5T400-720ZM240-160v-480 480Z"/>
                        </svg>           
                        <span>Merchandise</span>
                    </a>              
                </li>

                <li class="link">
                    <a href="#travelguide">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M294.23-100v-80.77l116.92-82.08v-158.61L100-296.54v-99.23l311.15-218.61v-176.77q0-28.39 20.24-48.62Q451.62-860 480-860t48.61 20.23q20.24 20.23 20.24 48.62v176.77L860-395.77v99.23L548.85-421.46v158.61l116.53 82.08V-100L480-156.16 294.23-100Z"/>
                        </svg>
                        <span>Travel Guide</span>
                    </a>
                </li>

                <li class="link">
                    <a href="#faq" onclick=setActive(this)>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M478-240q21 0 35.5-14.5T528-290q0-21-14.5-35.5T478-340q-21 0-35.5 14.5T428-290q0 21 14.5 35.5T478-240Zm-36-154h74q0-33 7.5-52t42.5-52q26-26 41-49.5t15-56.5q0-56-41-86t-97-30q-57 0-92.5 30T342-618l66 26q5-18 22.5-39t53.5-21q32 0 48 17.5t16 38.5q0 20-12 37.5T506-526q-44 39-54 59t-10 73Zm38 314q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
                        </svg>
                        <span>FAQ</span>
                    </a>
                </li>

                <li class="link">
                    <a href="#gallery" onclick="secActive(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M80-80q29-74 38.5-152.5T130-390q-39-15-64.5-50T40-520v-80q115-38 234.5-116T480-880q86 86 205.5 164T920-600v80q0 45-25.5 80T830-390q2 79 11.5 157.5T880-80H80Zm156-520h488q-78-44-140.5-90.5T480-772q-41 35-103.5 81.5T236-600Zm344 140q25 0 42.5-17.5T640-520H520q0 25 17.5 42.5T580-460Zm-200 0q25 0 42.5-17.5T440-520H320q0 25 17.5 42.5T380-460Zm-200 0q25 0 42.5-17.5T240-520H120q0 25 17.5 42.5T180-460Zm6 300h107q9-60 14-119t8-119q-9-5-18-10.5T280-422q-15 15-32.5 24.5T210-383q-2 57-7 112.5T186-160Zm188 0h212q-8-55-12.5-110T566-381q-26-2-47.5-12.5T480-421q-17 17-39.5 27.5T394-381q-3 56-7.5 111T374-160Zm293 0h107q-12-55-17-110.5T750-383q-20-5-38-14.5T680-422q-8 8-17 13.5T645-398q3 60 8.5 119T667-160Zm113-300q25 0 42.5-17.5T840-520H720q0 25 17.5 42.5T780-460Z"/>
                        </svg>
                        <span>Gallery</span>
                    </a>
                </li>

                <li class="link">
                    <a href="#socials" onclick=setActive(this)>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/>
                        </svg>
                        <span>Socials</span>
                    </a>
                </li>

              

            </ul>
            <div class="tix">
                <a href="https://www.coachella.com/passes" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                        <path d="m368-320 112-84 110 84-42-136 112-88H524l-44-136-44 136H300l110 88-42 136ZM160-160q-33 0-56.5-23.5T80-240v-135q0-11 7-19t18-10q24-8 39.5-29t15.5-47q0-26-15.5-47T105-556q-11-2-18-10t-7-19v-135q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v135q0 11-7 19t-18 10q-24 8-39.5 29T800-480q0 26 15.5 47t39.5 29q11 2 18 10t7 19v135q0 33-23.5 56.5T800-160H160Zm0-80h640v-102q-37-22-58.5-58.5T720-480q0-43 21.5-79.5T800-618v-102H160v102q37 22 58.5 58.5T240-480q0 43-21.5 79.5T160-342v102Zm320-240Z"/>
                    </svg>
                    <span>Tickets</span>
                </a>
            </div>
        </nav>

        <!-- Main Content Container -->
        <main id="mainContentContainer" >
            
            <!-- Home Section -->
            <section class="heropage" id="heropage">
                <div class="herocontent">
                    <h4>2025</h4>
                    <h1>COACHELLA</h1>
                    <p>"Under the stars where music's alive, Coachella's pulse through peoples hearts"</p>
                        <button id="buyBTN" onclick="openCoachellaPasses()">BUY TICKET</button>
                        <a href="#about" id="aboutButton">
                            <span>Explore coachella</span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z"/>
                            </svg>
                        </a>
                </div>
            </section>

            <!-- About Section -->
            <section class="about" id="about">
                <h1 class="Title">What is Coachella?</h1>
                <div class="picContainer">
                    <div class="picOfCoach"></div>
                </div>
                <div class="contents">
                    <p> <span><b>Coachella</b></span> was founded in 1999 by <span><b>Paul Tollett and Goldenvoice</b></span> after being inspired by a 1993 Pearl Jam 
                        concert at the Empire Polo Club in Indio, California. The event aimed to bring together diverse music genres 
                        and large-scale art installations in a desert setting. Originally a response to the rise of alternative festivals 
                        and dissatisfaction with the commercial nature of mainstream music events, Coachella has since evolved into one of 
                        the world’s most iconic music and arts festivals, attracting major artists and fans from around the globe.</p>
                </div>
            </section>
            
            <!-- Artist Section -->
           <?php
            include 'db.php'; // DB connection

            $query = $conn->query("SELECT * FROM artists ORDER BY id ASC");
            ?>

            <section class="artists" id="artists">
                <h1 class="Title">Artists</h1>
                <div class="Coc">
                    <div class="artistsContainer">

                    <?php while ($row = $query->fetch_assoc()): ?>
                        <div class="artistCard">
                            <img src="<?= $row['image_path'] ?>" class="artistPic">
                            <h3><?= $row['name'] ?></h3>

                            <a onclick="toggleCard(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                            </a>

                            <p class="artistInfo"><?= $row['description'] ?></p>
                            <p class="hitSongs"><span>Hit Songs</span>: <?= $row['hit_songs'] ?></p>
                        </div>
                    <?php endwhile; ?>

                    </div>
                </div>
            </section>

            <section class="trending">
                <div class="trendingCtn">
                    <h2>Last.fm – Top 10 Trending Tracks</h2>
                    <div class="trending-wrapper">
                        <?php include "trending_lastfm.php"; ?>
                    </div>
                </div>
            </section>

            <!-- Map Section -->
            <section class="mapOfCoachella" id="maps" >
                <div class="mapHeader">
                    <h1 class="Title">Coachella Landmarks</h1>
                </div>
                <section class="maps" id="maps">
                    <div class="map-container">
                        <div class="map-item">
                            <button class="map-btn" data-target="mainstageIMG">Coachella Main Stage</button>
                        </div>
                        <div class="map-item">
                            <button class="map-btn" data-target="outdoorIMG">Outdoor Theatre Stage</button>
                        </div>
                        <div class="map-item">
                            <button class="map-btn" data-target="gobitentIMG">Gobi Tent</button>
                        </div>
                        <div class="map-item">
                            <button class="map-btn" data-target="mojaveIMG">Mojave Stage</button>
                        </div>
                        <div class="map-item">
                            <button class="map-btn" data-target="saharaIMG">Sahara Stage</button>
                        </div>
                        <div class="map-item">
                            <button class="map-btn" data-target="ferrisIMG">Coachella Ferris Wheel</button>
                        </div>
                    </div>

                    <div class="map-holder">
                        <img id="mainstageIMG" class="visible" src="img/maps/Coachella Main Stage1.png" alt="Main Stage">
                        <img id="outdoorIMG" src="img/maps/Outdoor Theatre2.png" alt="Outdoor Theatre Stage">
                        <img id="gobitentIMG" src="img/maps/Gobi Tent2.png" alt="Gobi Tent Stage">
                        <img id="mojaveIMG" src="img/maps/Mojave Stage2.png" alt="Mojave Stage">
                        <img id="saharaIMG" src="img/maps/Sahara Stage1.png" alt="Sahara Stage">
                        <img id="ferrisIMG" src="img/maps/Coachella Ferris Wheel1.png" alt="Coachella Ferris Wheel">
                    </div>
                </section>
            </section>

              <section class="Merch" id="merch">
                <h1 class="Title">Merchandise</h1>
                
                <div class="merchContent">
                    <div class="merchCard">
                        <div class="product Tee">
                        </div>
                        <h4>Tee-Shirt</h4>
                    </div>

                    <div class="merchCard">
                        <div class="product phoneCase">
                        </div>
                        <h4>Phone Case</h4>
                    </div>
                    <div class="merchCard">
                        <div class="product pillow">
                        </div>
                        <h4>Pillows</h4>
                    </div>
                    <div class="merchCard">
                        <div class="product hoodie">
                        </div>
                        <h4>Hoodies</h4>
                    </div>
                </div>
                <div class="hint">
                    <svg class="swipe" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M419-80q-28 0-52.5-12T325-126L107-403l19-20q20-21 48-25t52 11l74 45v-328q0-17 11.5-28.5T340-760q17 0 29 11.5t12 28.5v472l-97-60 104 133q6 7 14 11t17 4h221q33 0 56.5-23.5T720-240v-160q0-17-11.5-28.5T680-440H461v-80h219q50 0 85 35t35 85v160q0 66-47 113T640-80H419ZM167-620q-13-22-20-47.5t-7-52.5q0-83 58.5-141.5T340-920q83 0 141.5 58.5T540-720q0 27-7 52.5T513-620l-69-40q8-14 12-28.5t4-31.5q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 17 4 31.5t12 28.5l-69 40Zm335 280Z"/></svg>
                </div>
                <button onclick="openCoachellaMerch()">Shop for more</button>
            </section>

            <!-- WEATHER SECTION -->
            <section class="weatherSection" id="weatherSection">
                <div class="weatherCtn">
                    <h2 class="weather-title">Weather Forecast</h2>
                    <h2 class="loc">Coachella, Empire Polo Club Indio, California</h2>
                    <p class="subtext">The weather forecast data is from Open Meteo API.</p>
                    <div class="forecast-grid">
                        <?php include 'weather.php'; ?>
                    </div>
                </div>
            </section>

            <!-- Travel Guide Section -->
            <section class="travelguide" id="travelguide">
                <h1 class="Title">How to go to Coachella? </h1>
                    <div class="guideCons">

                        <!-- Travel Headers -->
                        <div class="travelHeaders"> 
                            <ul>
                                <h4>Airport Close to Coachella</h4>
                                <li>
                                    <span>Palm Springs International Airport(PSP)</span>
                                    <p> Distance to Coachella: 25 miles(30 mins by car approx.)</p>
                                </li>
                                <li>
                                    <span>Los Angeles International Airport(LAX)</span>
                                        <p> Distance to Coachella: 145 miles( 2 hours 30 mins by car approx.)</p>
                                </li>
                                <li>
                                    <span>San Diego International Airport (SAN)</span>
                                    <p> Distance to Coachella: 151 miles(2 hours 40 mins by car approx.)</p>
                                </li>
                            </ul>

                        <div class="mapPlaceholder">
                                <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114950.95549312566!2d-116.30312622468428!3d33.68608864812727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80da588e87ce3caf%3A0xfd521c797b97bcf8!2sCoachella%2C%20CA%2C%20USA!5e1!3m2!1sen!2sph!4v1730544594407!5m2!1sen!2sph" 
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        </div>

                        <!-- Travel Details -->
                        <div class="travelDetails">
                            <div class="firstPic">
                                <img src="img/coachella/Poppy Palm Springs Vacation Rentals - Stay Connected With Us @staypoppy.jpg" 
                                alt="Poppy Palm Springs Vacation Rentals Photo">
                            </div>
                                
                                   <div class="firstInfo">
                                    <h3>Details on how to get to Empire Polo Club in Indigo:</h3>
                                    <p>
                                     If you have already booked tickets to the Coachella festival and you need to organize how to get to 
                                    the Empire Polo Club in Indigo then look no further as we have you covered!
                                    Coachella is located at the Empire Polo Club in Indio, California, meaning that although Coachella 
                                    doesn’t have its own airport, the closest airport is Palm Springs International Airport. Airlines that fly 
                                    to this airport include American Airlines, Delta Airlines and United Airlines.               However, 
                                    due to prices and the location flying from, some people choose to fly to other nearby airports such as Los 
                                    Angeles International Airport (LAX) or San Diego International Airport. You can then get a taxi, rent a 
                                    car or get on one of the Coachella Shuttle buses from LAX to the festival, for about $50 dollars each way.           
                                    Obviously how you will get to Coachella will depend on where you are coming from. Domestic travel 
                                    within the USA will be different to if you are flying from Europe. Here are some common routes of how to 
                                    get to Coachella, and which airlines to fly with.
                                </p>
                                </div>
                                
                                
                
                            <div class="secondPic">
                                <img src="img/coachella/roger wilson imagines inflatable monuments and whimsical canopies enlivening coachella.jpg" 
                                alt="Inflatable Monuments Photo"> 
                            </div>

                            <div class="secondInfo">
                                <h3>Flying domestically to Coachella</h3>
                                        <p>Palm Springs International Airport offers a wide range of domestic carriers to a host of US cities. 
                                            If heading to Coachella through Palm Springs you'll e   asily be able to travel from Nashville, 
                                            Indianapolis, Chicago, Dallas, Seattle, Atlanta, Boston, Los Angeles, New York, Las Vegas and more. 
                                            This makes travelling to the festival really easy if you're a domestic traveller.</p>
                                <h3>Flying from New York</h3>
                                        <p>Flying domestically to Coachella means that you have more options for where to fly to, 
                                            however, it will still be cheaper to fly to LAX. From JFK airport, you can fly to LAX with airlines 
                                            such as Alaska Airlines, Delta or American Airlines. Alternatively, suppose you want to fly to Palm 
                                            Springs, we recommend flying with airlines such as United, from New York La Guardia with a short 
                                            stopover at Houston Airport, or from New York JFK to American Airlines with a short stopover at 
                                            Phoenix Airport.</p>
                                <h3>Flights from Las Vegas</h3>
                                        <p>You can fly to Palm Springs Airport from Las Vegas McCarran with American Airlines which will 
                                            feature a stopover at Phoenix. Alternatively, you can fly directly if choosing to fly to LAX, 
                                            with Alaska, United or Delta.</p>
                            </div>

                            <div class="thirdPic">
                                <img src="img/coachella/International Flags.jpg" alt="International Flags Photo">
                            </div>
                            
                            <div class="thirdInfo">
                                <h3>Flying from an international destination to Coachella</h3>
                                    <p>Palm Springs International Airport also has limited international destinations. The airline only 
                                        offers direct services to Canada with the cities of Vancouver, Toronto, Edmonton, Calgary and 
                                        Winnipeg being served. If travelling from further afield it may be beneficial to connect through 
                                        one of the major carriers' hub airports, such as with American Airlines and their Dallas hub. 
                                        However, you also have the option of flying into Los Angeles or San Diego airports, which have a 
                                        greater level of international routes.</p>
                                <h3> Flying from the UK & Ireland</h3>
                                    <p>Flying from London Heathrow, we recommend flying to LAX as this has many more flights arriving from 
                                        the UK. Airlines that offer non-stop flights include British Airways, Virgin Atlantic, United Airlines, 
                                        Delta and American Airlines. Alternatively, you could plan a short stop-over in Vancouver, and fly with 
                                        Air Canada, Westjet or Air Transat for a lower price. To fly to Coachella from Dublin, we again recommend 
                                        to fly to LAX. Flights here from Dublin are considerably cheaper than flying to the closer Palm Springs. 
                                        Aer Lingus fly direct from Dublin to LAX, but to make it cheaper, airlines that fly this route with a 
                                        stopover at London Heathrow include American Airlines. Check out our blog to find out how to plan the 
                                        perfect stopover.</p>
                            </div>
                        </div>
                    </div>
                </section>

            <!-- FAQ Section -->
            <section class="FAQ" id="faq">
                <div class="FAQTitle">
                    <h1 class="Title">FAQs</h1>
                    <h3>Have any questions? Read popular answers below.</h3>
                </div>
            
                <!-- Questions and Answers -->
                <div class="faqQuestions">

                    <!-- First Question -->
                    <div class="questions">
                        <div class="questionHeader"> 
                            <h4>Q: is this website owned by Coachella?</h4> 
                            <a onclick="toggleFAQ(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                                </svg>
                            </a>
                        </div>
                        <p>A:No, We are not owned by any company, Fest Verse is a standalone company that can be hired to feature or 
                            promote a festival through an interactive website.</p>
                    </div>    

                    <!-- Second Question -->
                    <div class="questions">
                        <div class="questionHeader"> 
                            <h4>Q: How many passes I can buy?</h4> 
                            <a onclick="toggleFAQ(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                                </svg>
                            </a>
                        </div>
                        <p>A: Ticket limit is 4 per household. Purchase over 4 admission tickets  will be subject to cancellation 
                            without notice. </p>
                    </div>  

                    <!-- Third Question -->
                    <div class="questions long">
                        <div class="questionHeader"> 
                            <h4>Q: Do you promote any other things other than Musical Festival?</h4> 
                                <a onclick="toggleFAQ(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                                </svg>
                            </a>
                        </div>
                        <p>A: No , Our company is only dedicated on creating interactive static website for music festivals to be promoted.</p>
                    </div>

                    <!-- Fourth Question -->
                    <div class="questions">
                        <div class="questionHeader"> 
                            <h4>Q: When is the last date to update my shipping address?</h4> 
                            <a onclick="toggleFAQ(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                                </svg>
                            </a>
                        </div>
                        <p>A: The last day to update your shipping address is February 2025</p> 
                    </div>
                    
                    <!-- Fifth Question -->
                    <div class="questions">
                        <div class="questionHeader"> 
                            <h4>Q: What's the weekend schedule?</h4> 
                            <a onclick="toggleFAQ(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                                </svg>
                            </a>
                        </div>
                        <p>A: Schedules are released closer to the event dates</p>
                    </div>  
                    
                    <!-- Sixth Question -->
                    <div class="questions">
                        <div class="questionHeader"> 
                            <h4>Q: What is your refund policy?</h4> 
                            <a onclick="toggleFAQ(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                                </svg>
                            </a>
                        </div>
                        <p>A: All sales are final</p>
                    </div>

                    <!-- Seventh Question -->
                    <div class="questions">
                        <div class="questionHeader"> 
                            <h4>Q: Are there extra fees?</h4> 
                            <a onclick="toggleFAQ(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                                </svg>
                            </a>
                        </div>
                        <p>A: Any taxes abd fees will be reflected  for each item in your total before purchasing.</p>
                    </div>  
                    
                    <!-- Eighth Question -->
                    <div class="questions">
                        <div class="questionHeader"> 
                            <h4>Q: is there a payment plan for tickets?</h4> 
                            <a onclick="toggleFAQ(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#00000">
                                    <path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/>
                                </svg>
                            </a>
                        </div>
                        <p>A: Yes, we offer a payment plan option for your order at checkout. Please note all payment in a payment 
                            plan will incur a flat $52 payment plan fee.</p> 
                    </div>
                </div>
            </section>

            <!-- Gallery Section -->
            <section class="Gallery" id="gallery">
                <div class="galHeader"><h1 class="Title">Gallery</h1></div>
                    <div class="infiteGallery">

                        <!-- Gallery Slideshow One -->
                        <div class="gal1">
                            <img src="img/Genre1/pic1.png" alt="Coachella Random Stranger Moment Photo" class="gal1pic pic1">
                            <img src="img/Genre1/pic2.png" alt="Coachella Random Stranger Moment Photo" class="gal1pic pic2">
                            <img src="img/Genre1/pic3.png" alt="Coachella Random Stranger Moment Photo" class="gal1pic pic3">
                            <img src="img/Genre1/pic4.png" alt="Coachella Random Stranger Moment Photo" class="gal1pic pic4">
                            <img src="img/Genre1/pic5.png" alt="Coachella Random Stranger Moment Photo" class="gal1pic pic5">
                            <img src="img/Genre1/pic6.png" alt="Coachella Random Stranger Moment Photo" class="gal1pic pic6">
                        </div>

                        <!-- Gallery Slideshow Two -->
                        <div class="gal2">
                            <img src="img/Genre2/BILLIE EILISH.png" alt="Coachella Random Artist Photo" class="gal2pic gpic1">
                            <img src="img/Genre2/LANA DEL REY.png" alt="Coachella Random Artist Photo" class="gal2pic gpic2">
                            <img src="img/Genre2/LE SSERAFIM.png" alt="Coachella Random Artist Photo" class="gal2pic gpic3">
                            <img src="img/Genre2/NIKI.png" alt="Coachella Random Artist Photo" class="gal2pic gpic4">
                            <img src="img/Genre2/SABRINA CARPENTER.png" alt="Coachella Random Artist Photo" class="gal2pic gpic5">
                            <img src="img/Genre2/TAYLOR SWIFT.png" alt="Coachella Random Artist Photo" class="gal2pic gpic6">
                            <img src="img/Genre2/THE WEEKND.png" alt="Coachella Random Artist Photo" class="gal2pic gpic7">
                        </div>

                        <!-- Gallery Slideshow Three -->
                        <div class="gal3">
                            <img src="img/Genre3/1.png" alt="Coachella Random Tourists Spot Photo" class="gal3pic hpic1">
                            <img src="img/Genre3/2.png" alt="Coachella Random Tourists Spot Photo" class="gal3pic hpic2">
                            <img src="img/Genre3/3.png" alt="Coachella Random Tourists Spot Photo" class="gal3pic hpic3">
                            <img src="img/Genre3/4.png" alt="Coachella Random Tourists Spot Photo" class="gal3pic hpic4">
                            <img src="img/Genre3/5.png" alt="Coachella Random Tourists Spot Photo" class="gal3pic hpic5">
                            <img src="img/Genre3/6.png" alt="Coachella Random Tourists Spot Photo" class="gal3pic hpic6">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer Section -->
            <footer id="socials">
                <h1 class="Title">FestVerse</h1>

                <!-- Socials -->
                <div class="mainContents">
                    <div class="socialIcons">
                        <a href="https://www.facebook.com/filsonjuan/">
                            <img src="img/icons/facebook (1).png" alt="Facebook Icon">
                        </a>
                        <a href="https://x.com/bqubl">
                            <img src="img/icons/twitter (3).png" alt="Twitter Icon">
                        </a>
                        <a href="https://www.instagram.com/filsonjuan/"><img src="img/icons/instagram (3).png" alt="Instagram Icon"></a>
                        <a href="https://www.tiktok.com/@fjlbtv?_t=8roeVCggZb3&_r=1">
                            <img src="img/icons/tiktok (1).png" alt="Tikttok Icon">
                        </a>
                        <a href="https://www.youtube.com/@fjlbtv8153">
                            <img src="img/icons/youtube.png" alt="Youtube Icon">
                        </a>
                        <a href="#">
                            <img src="img/icons/discord.png" alt="Discord Icon">
                        </a>
                    </div>

                    <div class="diKoNaAlamAnoName">
                        <div class="contacts">
                            <a href="">festVerse@gmail.com</a>
                            <a href="">Health and Safety</a>
                            <a href="">Web Accessibility</a>
                        </div>
                        <div class="msc">
                            <a href="">Partners</a>
                            <a href="">Feedback</a>
                        </div>
                    </div>
                </div>
                
                <!-- Credits -->
                <div class="creds">
                    <div class="pinds"> 
                        <a href="">Terms</a>
                        <a href="">Privacy</a>
                        <a href="">Purchase Agreement</a>
                    </div>
                    <h4>&copy; FestVerse. All Rghts Reserved.</h4>
                </div>
            </footer>
        </main>
    </body>
</html>
