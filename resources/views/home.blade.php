<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./styles/styles.scss">
    <link rel="stylesheet" href="./styles/reset.css"> -->
    @vite(['resources/sass/styles.scss', 'resources/sass/reset.css','resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://db.onlinewebfonts.com/c/bb018e64d01355748d8ddc53553850b9?family=Cerebri+Sans+Regular" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>DT Agency</title>
</head>
<body>
        <!-- section that have the navbar -->
    <header id="header">
        <div class="container">
            <nav id="nav">
                <a href="#home" class="logo">DT Agency</a>
                <!-- <a href="#" class="hamburg-icon">
                    <i class="fa fa-bars"></i>
                </a> -->
                
                <div class="nav-links">
                    <a href="#home">Home</a>
                    <a href="#about" >About</a>
                    <a href="#contact">Contact</a>
                    <a class="pricing" href="#pricing">website pricing<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                    <ul class="menu">
                        <li> <a id="link" href="#home">Home</a></li>
                        <li> <a id="link" href="#about">About</a></li>
                        <li> <a id="link" href="#contact">Contact</a></li>
                    </ul>
                
                
                <button class="hamburg-icon">
                    <i class="menuIcon material-icons">menu</i>
                    <i class="closeIcon material-icons">close</i>
                </button>
                
            </nav>
        </div>
    </header>

    <!-- hero section with all the blahblah text and CTAs-->

    <section class="hero" id="home">
        <div class="container">
            <div class="hero__title">Unbeatable<br>Websites For Small Businesses</br> </div>
            <p class="hero__description">
                We make superb budget-friendly websites for small to medium-sized businesses who want effective, user-friendly, and beautiful websites your customers will love.
            </p>
            <div class="hero__button-container">
                <a href="#pricing" class="pricing">website pricing<i class="fa-solid fa-arrow-right"></i></a>
                <a href="#contact" class="hero-contact_me">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- about us section -->
    
    <section class="about" id="about">

        <svg class="separator" width="100%" height="70" viewBox="0.1 0.1 180 40" preserveAspectRatio="none">
            <g transform="translate(-18.298844,-77.973964)">
                <path style="fill:#1F2740;" d="M 31.615583,86.351641 H 192.16499 v 26.901969 c 0,0 -32.03411,-14.237983 -59.62682,-12.72484 -22.34188,1.2252 -54.779359,9.72634 -54.779359,9.72634 0,0 -22.029534,3.62882 -34.471238,-1.88988 -12.441702,-5.51871 -11.67199,-22.013589 -11.67199,-22.013589 z" />
                <path style="fill:#1F2740;" d="M 18.441597,78.106256 H 198.58126 v 39.288614 c 0,0 -43.10672,-27.825245 -73.47599,-19.687823 -30.369264,8.137423 -46.832208,12.548653 -46.832208,12.548653 0,0 -32.775418,8.05972 -46.735258,0 C 17.577964,102.19598 18.441597,78.106256 18.441597,78.106256 Z" />
            </g>
        </svg>


        <div class="container">
            <div class="about__container">
                <div class="about__container-grid1">
                    <div class="section-maintitle">about us</div>
                    <div class="section-subtitle">We develop and design websites with <strong>purpose.</strong></div>
                    <p class="about__description">Let's face it, a lot of websites suck. We are trying to change that by making every website 
                    designed with purpose and meaning that are guaranteed to create a better experience for the users of the website.
                    </p>
                    <!-- <a href="#" class="about">about us</a> -->
                </div>
                <div class="about__container-grid2">
                    <img src="/images/a8327690-3e3f-4be2-8a0e-ff100010ef40_cover.png">
                </div>
                <div class="about__container-grid3">
                    <p class="about__description">A lot of websites dont follow both basic and advanced UX design practices, This causes the website to be less converting (loss of sales & leads),
                        harder to use, harder to understand, and overall less effective. I aim to prevent this with the way I design websites.
                    </p>
                    <span class="about__description">My goal is to make the Internet a more beautiful and usable place, one website at a time.</span>
                    <div class="company-name">Dusturab</div>
                </div>
            </div>
        </div>
    </section>

    <!-- services that we offer section -->

    <!-- <section class="services">
        <div class="container">
            <div class="services__title">
                <div class="section-maintitle">affordable and unbeatable prices</div>
                <div class="section-subtitle">Website Design Services</div>
            </div>
           
    
            <div class="services__container">
                <div class="main-service">
                    <a href="#" class="main-service__title"><img src="#">website design</a>
                    <p class="main-service__description">Jumpstart and establish your brand with your first website or get your existing website redesigned/updated.</p>
                    <a href="#" class="pricing">get your website</a>
                </div>
                <div class="other-services">
                    <div class="service">
                        <img src="#">
                        <div class="service__content">
                            <a href="#" class="title">Speed Optimization</a>
                            <p class="description">Get your website loading faster. A slow site can easily loose visitors and customers.</p>
                        </div>
                        <div class="service__content">
                            <a href="#" class="title">Speed Optimization</a>
                            <p class="description">Get your website loading faster. A slow site can easily loose visitors and customers.</p>
                        </div>
                        <div class="service__content">
                            <a href="#" class="title">Speed Optimization</a>
                            <p class="description">Get your website loading faster. A slow site can easily loose visitors and customers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- section that shows what a person gets in/with the website when they do it with us e.g. speed, mobile, seo etc-->

    <section class="process">

        <svg class="separator" width="100%" height="70" viewBox="0.1 0.1 180 40" preserveAspectRatio="none">
            <g transform="translate(-18.298844,-77.973964)">
                <path style="fill:#FFFFFF;" d="M 31.615583,86.351641 H 192.16499 v 26.901969 c 0,0 -32.03411,-14.237983 -59.62682,-12.72484 -22.34188,1.2252 -54.779359,9.72634 -54.779359,9.72634 0,0 -22.029534,3.62882 -34.471238,-1.88988 -12.441702,-5.51871 -11.67199,-22.013589 -11.67199,-22.013589 z" />
                <path style="fill:#FFFFFF;" d="M 18.441597,78.106256 H 198.58126 v 39.288614 c 0,0 -43.10672,-27.825245 -73.47599,-19.687823 -30.369264,8.137423 -46.832208,12.548653 -46.832208,12.548653 0,0 -32.775418,8.05972 -46.735258,0 C 17.577964,102.19598 18.441597,78.106256 18.441597,78.106256 Z" />
            </g>
        </svg>

        <div class="container">
            <div class="process__title">
                <div class="section-maintitle">Quality and affordable</div>
                <div class="section-subtitle">Websites Built For Success.</div>
            </div>
    
            <div class="process__container">
                <div class="quality">
                    <img src="/images/website-speed-optimization.png">
                    <div class="quality__title">Speed Optimized</div>
                    <p class="quality__description">Your site will be developed with <span>speed optimization</span> in mind and performance in mind. No site should be slow for its users losing out on customers.</p>
                </div>
    
                <div class="quality">
                    <img src="/images/conversion-optimized-website.png">
                    <div class="quality__title">Conversion Optimized</div>
                    <p class="quality__description">I know the little tricks that can push people to convert from a visitor to a customer. I help make your site pay for itself.</p>
                </div>
    
                <div class="quality">
                    <img src="/images/responsive-web-design.png">
                    <div class="quality__title">Mobile Optimized</div>
                    <p class="quality__description">52% of people are viewing websites on a phone. I know its more than just important so its standard that every page is responsive.</p>
                </div>
    
                <div class="quality">
                    <img src="/images/customizable-websites.png">
                    <div class="quality__title">Customizable</div>
                    <p class="quality__description">Your site will be easy enough to customize that anyone can pick it up to make a change big or small, from text changes to new pages</p>
                </div>
    
                <div class="quality">
                    <img src="/images/seo-optimized-web-design.png">
                    <div class="quality__title">SEO Optimized</div>
                    <p class="quality__description">SEO is the next important step after launching your website. Your site will follow the best SEO practices to begin its ranking.</p>
                </div>
    
                <div class="quality">
                    <img src="/images/006-website-design.png">
                    <div class="quality__title">Perfectly Branded</div>
                    <p class="quality__description">Your website won’t be from a cookie-cutter layout. It will be designed to fit the style of your brand (fonts, colors, ect).</p>
                </div>
            </div>
        </div>
    </section>

    <section class="website-pricing" id="pricing"> 
        <div class="container">
            <div class="website-pricing__title">
                <div class="section-maintitle">Quality and affordable</div>
                <div class="section-subtitle">Affordable Website Pricing</div>
            </div>
            <div class="pricing-cards">
                <div class="price-card">
                    <img src="/images/yellow-helmet-svg-1.png" alt="">
                    <div class="price-card__title">Standard Website</div>
                    <div class="price-card__description">A website with limited design customization and basic features.</div>
                    <div class="price-card__reason">Designed to get your business started online.</div>
                    <hr>
                        <ul>
                            <li class="standard">Basic Contact Form</li>
                            <li class="standard">2 Rounds Of Revisions</li>
                            <li class="standard">Basic Speed Optimization</li>
                            <li class="standard">SEO Fundamentals</li>
                        </ul>
                    <hr>
                    <div class="price-card__extra"><strong>*Plus $100/per Website Page</strong></div>
                    <div class="price-card__example">Example: 5 page website (home, about, services, blog, contact) would cost $1500</div>
                    <div class="price-card__price">£350+</div>
                    <button type="submit" onclick="window.location.replace('#contact')" id="standard" class="get-website">get this website</button>
                </div>

                <div class="price-card">
                    <img src="/images/blue-helmet-svg-1.png" alt="">
                    <div class="price-card__title">Advanced Website</div>
                    <div class="price-card__description">A website with a lot of design customization with more advanced features.</div>
                    <div class="price-card__reason">Designed to stand out from your competitors.</div>
                    <hr>
                        <ul>
                            <li class="standard">Advanced Speed Optimization</li>
                            <li class="standard">Advanced Contact Form</li>
                            <li class="standard">2 Rounds Of Revisions</li>
                            <li class="standard">Basic Speed Optimization</li>
                            <li class="standard">SEO Optimized</li>
                            <li class="standard">Custom Functionality</li>
                        </ul>
                    <hr>
                    <div class="price-card__extra">*Plus $100/per Website Page</div>
                    <div class="price-card__example">Example: 5 page website (home, about, services, blog, contact) would cost $1500</div>
                    <div class="price-card__price">£750+</div>
                    <button type="submit" onclick="window.location.replace('#contact')" id="standard" class="get-website">get this website</button>
                </div>

                <div class="price-card">
                    <img src="/images/white-helmet-svg-1.png" alt="">
                    <div class="price-card__title">Standard Website</div>
                    <div class="price-card__description">A website with limited design customization and basic features.</div>
                    <div class="price-card__reason">Designed to get your business started online.</div>
                    <hr>
                        <ul>
                            <li class="standard">Basic Contact Form</li>
                            <li class="standard">2 Rounds Of Revisions</li>
                            <li class="standard">Basic Speed Optimization</li>
                            <li class="standard">SEO Fundamentals</li>
                        </ul>
                    <hr>
                    <div class="price-card__extra"><strong>*Plus $100/per Website Page</strong></div>
                    <div class="price-card__example">Example: 5 page website (home, about, services, blog, contact) would cost $1500</div>
                    <div class="price-card__price">£1000+</div>
                    <button type="submit" onclick="window.location.replace('#contact')" id="standard" class="get-website">get this website</button>
                </div>
            </div>

            <div class="price-note">I’m a small business too right now, prices will only get higher!</div>
        </div>
    </section>


    <section class="design-process">

        <svg class="separator" width="100%" height="70" viewBox="0.1 0.1 180 40" preserveAspectRatio="none">
            <g transform="translate(-18.298844,-77.973964)">
                <path style="fill:#1F2740;" d="M 31.615583,86.351641 H 192.16499 v 26.901969 c 0,0 -32.03411,-14.237983 -59.62682,-12.72484 -22.34188,1.2252 -54.779359,9.72634 -54.779359,9.72634 0,0 -22.029534,3.62882 -34.471238,-1.88988 -12.441702,-5.51871 -11.67199,-22.013589 -11.67199,-22.013589 z" />
                <path style="fill:#1F2740;" d="M 18.441597,78.106256 H 198.58126 v 39.288614 c 0,0 -43.10672,-27.825245 -73.47599,-19.687823 -30.369264,8.137423 -46.832208,12.548653 -46.832208,12.548653 0,0 -32.775418,8.05972 -46.735258,0 C 17.577964,102.19598 18.441597,78.106256 18.441597,78.106256 Z" />
            </g>
        </svg>

        <div class="container">
            <div class="design-process__title">
                <div class="section-maintitle">web design process</div>
                <div class="section-subtitle">Send me the content, and you'll get a website.</div>
            </div>

            <div class="design-process__steps">
                <div class="step">
                    <div class="step__title">#1</div>
                    <div class="step__subtitle">You talk to me about your website.</div>
                    <p class="step__description">
                        We talk over the phone (or Zoom) about your project; including
                        what and how many pages you want, the goals of the website, and 
                        what you want your website to look like.
                    </p>
                </div>
                <div class="step">
                    <div class="step__title">#2</div>
                    <div class="step__subtitle">You send me the website content.</div>
                    <p class="step__description">
                        I then build the website based on the content, images, and requirements you provide. 
                        This can take around 2-4 weeks depending on the size of the website.
                    </p>
                </div>
                <div class="step">
                    <div class="step__title">#3</div>
                    <div class="step__subtitle">Review and launch the website!</div>
                    <p class="step__description">
                        After I’ve made and completed the website, we make updates and 
                        perfect the website based on your feedback. After this, we 
                        launch the website and make it live!
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="why">


        <svg class="separator" width="100%" height="70" viewBox="0.1 0.1 180 40" preserveAspectRatio="none">
            <g transform="translate(-18.298844,-77.973964)">
                <path style="fill:#FFFFFF;" d="M 31.615583,86.351641 H 192.16499 v 26.901969 c 0,0 -32.03411,-14.237983 -59.62682,-12.72484 -22.34188,1.2252 -54.779359,9.72634 -54.779359,9.72634 0,0 -22.029534,3.62882 -34.471238,-1.88988 -12.441702,-5.51871 -11.67199,-22.013589 -11.67199,-22.013589 z" />
                <path style="fill:#FFFFFF;" d="M 18.441597,78.106256 H 198.58126 v 39.288614 c 0,0 -43.10672,-27.825245 -73.47599,-19.687823 -30.369264,8.137423 -46.832208,12.548653 -46.832208,12.548653 0,0 -32.775418,8.05972 -46.735258,0 C 17.577964,102.19598 18.441597,78.106256 18.441597,78.106256 Z" />
            </g>
        </svg>


        <div class="container">
            <div class="why__title">
                <div class="section-maintitle">How will your customers feel about your new website?</div>
            </div>
            <div class="reasons">
                <div class="reason-container">
                    <i class="far fa-check-square"></i>
                    <div class="reason-container__title">Your customers will take your business seriously</div>
                    <p class="reason-container__description">
                        A bad outdated website design can easily dissuade people from going with your business. 
                        A properly designed and modern website will let them know you’re open and ready to sell them on your product/service.
                    </p>
                </div>
                <div class="reason-container">
                    <i class="far fa-check-square"></i>
                    <div class="reason-container__title">It will be very easy for your customers to contact you</div>
                    <p class="reason-container__description">
                        A bad outdated website design can easily dissuade people from going with your business. 
                        A properly designed and modern website will let them know you’re open and ready to sell them on your product/service.
                    </p>
                </div>
                <div class="reason-container">
                    <i class="far fa-check-square"></i>
                    <div class="reason-container__title">They will understand what you do and who you are</div>
                    <p class="reason-container__description">
                        A bad outdated website design can easily dissuade people from going with your business. 
                        A properly designed and modern website will let them know you’re open and ready to sell them on your product/service.
                    </p>
                </div>
            </div>
        </div>  
    </section>

    <!-- section that shows previous work -->

    <!-- <section class="portfolio">
        <div class="container">
            <div class="portfolio__header">
                <div class="portfolio__header-title">
                    <div class="portfolio__section-maintitle">affordable and unbeatable prices</div>
                    <div class="portfolio__section-subtitle">Website Design Services</div>
                </div>
                <div class="portfolio__header-filters">
                    <button href="#" class="all">all projects</button>
                    <button href="#" class="non-profit">Charity/non-profit</button>
                    <button href="#" class="business">business</button>
                </div>
            </div>
            
            <div class="portfolio__projects">
                <img src="#" class="portfolio__projects-image">
                <img src="#" class="portfolio__projects-image">
                <img src="#" class="portfolio__projects-image">
                <img src="#" class="portfolio__projects-image">
                <img src="#" class="portfolio__projects-image">
                <img src="#" class="portfolio__projects-image">
                <img src="#" class="portfolio__projects-image">
                <img src="#" class="portfolio__projects-image">
                <img src="#" class="portfolio__projects-image">
            </div> -->
            <!-- Code below is for the hover function on projects that will be done with js -->
    
            <!-- ****************************************************** -->                          
            <!-- <div class="portfolio__projects-onhover">
                    <div class="maintitle">business</div>
                    <div class="subtitle">The amelia foundation</div>
                    <a href="#" class="pricing">learn more</a>
                </div> -->
            <!-- ****************************************************** -->
    
            <!-- <a href="#" class="full-portfolio">see full portfolio<i></i></a>
        </div>
    </section> -->

    <!-- client reviews section -->

    <!-- <section class="reviews">
        <div class="container">
            <div class="portfolio__header">
                <div class="portfolio__header-maintitle">my reviews</div>
                <div class="portfolio__header-subtitle">Reviews From My Clients</div>
            </div>
    
            <div class="arrows"><i></i></div>
    
            <div class="review-card">
                <div class="review-card__review">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
    
                <i class="review-card__stars"></i>
    
                <div class="review-card__mainpoint">very responsive</div>
                <div class="review-card__company">omarbernardot.com</div>
                <div class="review-card__owner">John Doe</div>
            </div>
            
            <div class="review-card">
                <div class="review-card__review">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
    
                <i class="review-card__stars"></i>
    
                <div class="review-card__mainpoint">very responsive</div>
                <div class="review-card__company">omarbernardot.com</div>
                <div class="review-card__owner">John Doe</div>
            </div>
    
            <div class="review-card">
                <div class="review-card__review">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
    
                <i class="review-card__stars"></i>
    
                <div class="review-card__mainpoint">very responsive</div>
                <div class="review-card__company">omarbernardot.com</div>
                <div class="review-card__owner">John Doe</div>
            </div>
    
            <div class="review-card">
                <div class="review-card__review">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
    
                <i class="review-card__stars"></i>
    
                <div class="review-card__mainpoint">very responsive</div>
                <div class="review-card__company">omarbernardot.com</div>
                <div class="review-card__owner">John Doe</div>
            </div>    
        </div>
    </section> -->

    <!-- contact section -->

    <section class="contact" id="contact">
        <div class="container">
            <div class="contact__title">
                <div class="section-maintitle">contact us</div>
                <div class="section-subtitle">Let's start the dicussion for your website project!</div>
            </div>
            
            <form action="">
                    <div class="input">
                        <label for="input__title">name*</label>
                        <input 
                        type="text" 
                        name="firstname"
                        id="firstname"
                        class="form-element"
                        required
                        placeholder="Name"/>
                        <i></i>
                    </div>
                    <div class="input">
                        <label for="input__title">email*</label>
                        <input 
                        type="email" 
                        name="email"
                        id="email"
                        class="form-element"
                        required
                        placeholder="johndoe@exmaple.com"/>
                        <i></i>
                    </div>
                    <div class="input">
                        <label for="input__title">phone</label>
                        <input 
                        type="text" 
                        name="phone"
                        id="phone"
                        class="form-element"
                        placeholder="Phone"/>
                        <i></i>
                    </div>
                    <div class="input full">
                        <label for="input__title">Message*</label>
                        <textarea 
                        name="message"
                        id="message"
                        class="form-element"
                        placeholder="Talk about your website project. Any requirements, ideas, goals, or examples to get the discussion started.">
                        </textarea>
                    </div>
                    <div class="submit-group">
                        <input type="submit" value="send message (We'll reply back!)">
                    </div>
            </form>
            
    
            <!-- <button class="sendmessage" href="#"><span>send message</span></button> -->
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-overview">
                <div class="company-logo">Dutsturab</div>
                <p class="company-description">A family run web design agency in Birmingham, Uk where we create affordable websites for small to medium businesses</p>
                <!-- <button href="#" class="pricing">Get a website<i class="fa-solid fa-arrow-right"></i></button> -->
                <a class="pricing" href="#pricing">website pricing<i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="footer-links">
                <div class="quick-links">Quick Links</div>
                <hr>
                <div class="links">
                    <a href="#home" class="links__home">Home</a>
                    <a href="#about" class="links__about">About</a>
                    <a href="#pricing" class="links__pricing">Pricing</a>
                    <a href="#contact" class="links__contact">Contact</a>
                </div>
            </div>
            <div class="footer-contact">
                <div class="contact-footer">Contact Me</div>
                <hr>
                <div class="contact-email"><i class="far fa-envelope-open"></i>contactus@dusturab.com</div>
                <div class="contact-based"><i class="far fa-map-marker-alt"></i>Based in Birmingham, Uk</div>
            </div>
        </div>

        <div class="copyright-section">
            <div class="container">
                <div class="copyright">Copyright 2023 | Dusturab | All Rights Reserved</div>
                <a class="privacy">Privacy Policy</a>
            </div>
            
        </div>
    </footer>
   
<script type="module" src="index.js"></script>
</body>
</html>