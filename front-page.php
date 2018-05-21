<?php get_header(); ?>
    <section id="home" class="">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6 mx-auto text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/profile.png" class="profile-pic" alt="">
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <div>
                        <h1 class="mb-4 role-text">Front-End
                            <span class="orange">Developer</span>
                        </h1>
                        <p class="">
                        <?php echo get_post_field('post_content', $post->ID); ?>
                            <b class="orange">.</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" class="text-center">
        <div class="container ">
            <h2 class="mb-4">Projects</h2>
            <div class="line"></div>
            <div class="grid">
                <div class="project-card text-center d-flex flex-column">
                    <img class="project-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/movieicon.svg" alt="">
                    <div class="card-content">
                        <div>
                            <h5 class="mt-4">Awesomovie</h5>
                            <p class="m-4 pr-4 pl-4">A movie browser with inbuilt watchlist functionality. Uses localstorage to store movies on a watchlist between browser sessions. Built with ReactJS.</p>
                        </div>
                    </div>
                    <a href="https://priceless-austin-5c9f85.netlify.com/" class="card-end d-flex justify-content-around align-items-center ">
                        <p class="m-0">Live demo</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="">
                    </a>
                </div>
                <div class="project-card text-center d-flex flex-column">
                    <img class="project-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/search.svg" alt="">
                    <div class="card-content">
                        <div>
                            <h5 class="mt-4">Gif-searcher</h5>
                            <p class="m-4 pr-4 pl-4">Gif-searcher uses the Giphy API to fetch gifs based on input from the user, and displays the results in a grid. Built with VueJS and hosted with Netlify.</p>
                        </div>
                    </div>
                    <a href="https://compassionate-bassi-130e50.netlify.com/" class="card-end d-flex justify-content-around align-items-center" class="card-end d-flex justify-content-around align-items-center ">
                        <p class="m-0">Live demo</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="">
                    </a>
                </div>
                <div class="project-card text-center d-flex flex-column">
                    <img class="project-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bc.svg" alt="">
                    <div class="card-content">
                        <div>
                            <h5 class="mt-4">Cryptocurrency tracker</h5>
                            <p class="m-4 pr-4 pl-4">A cryptocurrency tracker that shows the price of the 20 most popular cryptocurrencies, with livesearch and conversion capability. Currently offline. </p>
                        </div>
                    </div>
                    <a href="https://github.com/mbrodt/Crypto-tracker" class="card-end d-flex justify-content-around align-items-center ">
                        <p class="m-0">Code available on github</p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <h2 class="m-4 text-center">Wanna know more?</h2>
        <div class="mb-4 mx-auto">
            <a href="http://itu.dk/people/mkrn/personalized/?page_id=65">
                <button class="btn primary-btn">About me</button>
            </a>
            <a href="http://itu.dk/people/mkrn/personalized/?page_id=31">
                <button class="btn secondary-btn">Blog</button>
            </a>
        </div>
    </section>
    <section id="contact">
        <div class="container ">
            <div class="row">
                <form action="https://formspree.io/madsbrodt3@gmail.com" method="POST" class="flex d-flex flex-column mx-auto text-center contact-form">
                    <h2>Get in touch
                        <b class="orange">.</b>
                    </h2>
                    <p class="mt-3">Freelance status:
                        <span class="status">Available</span>
                    </p>
                    <input class="input-field" type="text" id="name" name="name" placeholder="Name">
                    <input class="input-field" type="email" id="email" name="email" placeholder="Email">
                    <textarea rows="3" class="input-field message-area" id="message" name="message" placeholder="Message"></textarea>
                    <button class="btn success-btn">SEND MESSAGE</button>
                </form>
            </div>
        </div>
    </section>
<?php get_footer(); ?>