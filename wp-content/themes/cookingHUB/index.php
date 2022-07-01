<?php
  get_header();
  ?>
<nav class="uk-navbar-container uk-letter-spacing-small">
  <div class="uk-container">
    <div class="uk-position-z-index" data-uk-navbar>
      <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="index.html">Kocina</a>
        <ul class="uk-navbar-nav uk-visible@m uk-margin-large-left">
          <li class="uk-active"><a href="index.html">Home</a></li>
          <li ><a href="recipe.html">Recipe</a></li>
          <li ><a href="search.html">Search</a></li>
          <li ><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="uk-navbar-right">
        <div>
          <a class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
          <div class="uk-drop uk-background-default" data-uk-drop="mode: click; pos: left-center; offset: 0">
            <form class="uk-search uk-search-navbar uk-width-1-1">
              <input class="uk-search-input uk-text-demi-bold" type="search" placeholder="Search..." autofocus>
            </form>
          </div>
        </div>
        <ul class="uk-navbar-nav uk-visible@m">
          <li ><a href="sign-in.html">Sign In</a></li>
        </ul>
        <div class="uk-navbar-item">
          <div><a class="uk-button uk-button-primary" href="sign-up.html">Sign Up</a></div>
        </div>          
        <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
          data-uk-navbar-toggle-icon></span></a>
      </div>
    </div>
  </div>
</nav>

<div class="uk-container">
  <div class="uk-border-rounded-large uk-background-top-center uk-background-cover 
    uk-background-norepeat uk-light uk-inline uk-overflow-hidden uk-width-1-1" 
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg);">
    <div class="uk-position-cover uk-header-overlay"></div>
    <div class="uk-position-relative" data-uk-grid>
      <div class="uk-width-1-2@m uk-flex uk-flex-middle">
        <div class="uk-padding-large uk-padding-remove-right">
          <h1 class="uk-heading-small uk-margin-remove-top">Choose from thousands of recipes</h1>
          <p class="uk-text-secondary">Appropriately integrate technically sound value with scalable infomediaries
            negotiate sustainable strategic theme areas</p>
          <a class="uk-text-secondary uk-text-600 uk-text-small hvr-forward" href="sign-up.html">Sign up today<span
            class="uk-margin-small-left" data-uk-icon="arrow-right"></span></a>
        </div>
      </div>
      <div class="uk-width-expand@m">
      </div>
    </div>
  </div>
</div>

<div class="uk-section uk-section-default">
  <div class="uk-container">
    <div data-uk-grid>
      <div class="uk-width-1-4@m sticky-container">
        <div data-uk-sticky="offset: 100; bottom: true; media: @m;">
        <h2>Recipes</h2>
          <ul class="uk-nav-default uk-nav-parent-icon uk-nav-filter uk-margin-medium-top" data-uk-nav>
            <li class="uk-parent uk-open">
              <a href="#">Dish Type</a>
              <ul class="uk-nav-sub">
                <li><a href="#">Appetizers & Snacks</a></li>
                <li><a href="#">Bread Recipes</a></li>
                <li><a href="#">Cake Recipes</a></li>
                <li><a href="#">Candy and Fudge</a></li>
                <li><a href="#">Casserole Recipes</a></li>
                <li><a href="#">Christmas Cookies</a></li>
                <li><a href="#">Cocktail Recipes</a></li>
                <li><a href="#">Main Dishes</a></li>
                <li><a href="#">Pasta Recipes</a></li>
                <li><a href="#">Pie Recipes</a></li>
                <li><a href="#">Sandwiches</a></li>
              </ul>
            </li>
            <li class="uk-parent">
              <a href="#">Meal Type</a>
              <ul class="uk-nav-sub">
                <li><a href="#">Breakfast and Brunch</a></li>
                <li><a href="#">Desserts</a></li>
                <li><a href="#">Dinners</a></li>
                <li><a href="#">Lunch</a></li>
              </ul>
            </li>
            <li class="uk-parent">
              <a href="#">Diet and Health</a>
              <ul class="uk-nav-sub">
                <li><a href="#">Diabetic</a></li>
                <li><a href="#">Gluten Free</a></li>
                <li><a href="#">High Fiber Recipes</a></li>
                <li><a href="#">Low Calorie</a></li>
              </ul>
            </li>
            <li class="uk-parent">
              <a href="#">World Cuisine</a>
              <ul class="uk-nav-sub">
                <li><a href="#">Chinese</a></li>
                <li><a href="#">Indian</a></li>
                <li><a href="#">Italian</a></li>
                <li><a href="#">Mexican</a></li>
              </ul>
            </li>
            <li class="uk-parent">
              <a href="#">Seasonal</a>
              <ul class="uk-nav-sub">
                <li><a href="#">Baby Shower</a></li>
                <li><a href="#">Birthday</a></li>
                <li><a href="#">Christmas</a></li>
                <li><a href="#">Halloween</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="uk-width-expand@m">
        <div data-uk-grid>
          <div class="uk-width-expand@m">
            <form class="uk-search uk-search-default uk-width-1-1">
              <span data-uk-search-icon></span>
              <input class="uk-search-input uk-text-small uk-border-rounded uk-form-large" type="search" placeholder="Search for recipes...">
            </form>          
          </div>
          <div class="uk-width-1-3@m uk-text-right@m uk-light">
            <select class="uk-select uk-select-light uk-width-auto uk-border-pill uk-select-primary">
              <option>Sort by: Latest</option>
              <option>Sort by: Top Rated</option>
              <option>Sort by: Trending</option>
            </select>
          </div>
        </div>      
        <div class="uk-child-width-1-2 uk-child-width-1-3@s" data-uk-grid>
          <div>
            <div
              class="uk-card">
              <div class="uk-card-media-top uk-inline uk-light">
                <img class="uk-border-rounded-medium" src="https://source.unsplash.com/-YHSwy6uqvk/300x160" alt="Course Title">
                <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                <div class="uk-position-xsmall uk-position-top-right">
                  <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                    data-uk-icon="heart"></a>
                </div>
              </div>
              <div>
                <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Chef John's Turkey Sloppy Joes</h3>
                <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                  <div class="uk-width-auto uk-flex uk-flex-middle">
                    <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                    <span class="uk-margin-xsmall-left">5.0</span>
                    <span>(73)</span>
                  </div>
                  <div class="uk-width-expand uk-text-right">by John Keller</div>
                </div>
              </div>
              <a href="recipe.html" class="uk-position-cover"></a>
            </div>
          </div>
          <div>
            <div
              class="uk-card">
              <div class="uk-card-media-top uk-inline uk-light">
                <img class="uk-border-rounded-medium" src="https://source.unsplash.com/jUPOXXRNdcA/300x160" alt="Course Title">
                <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                <div class="uk-position-xsmall uk-position-top-right">
                  <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                    data-uk-icon="heart"></a>
                </div>
              </div>
              <div>
                <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Brown Sugar Meatloaf</h3>
                <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                  <div class="uk-width-auto uk-flex uk-flex-middle">
                    <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                    <span class="uk-margin-xsmall-left">3.0</span>
                    <span>(94)</span>
                  </div>
                  <div class="uk-width-expand uk-text-right">by Danial Caleem</div>
                </div>
              </div>
              <a href="recipe.html" class="uk-position-cover"></a>
            </div>
          </div>
          <div>
            <div
              class="uk-card">
              <div class="uk-card-media-top uk-inline uk-light">
                <img class="uk-border-rounded-medium" src="https://source.unsplash.com/nTZOILVZuOg/300x160" alt="Course Title">
                <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                <div class="uk-position-xsmall uk-position-top-right">
                  <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                    data-uk-icon="heart"></a>
                </div>
              </div>
              <div>
                <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Awesome Slow Cooker Pot Roast</h3>
                <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                  <div class="uk-width-auto uk-flex uk-flex-middle">
                    <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                    <span class="uk-margin-xsmall-left">4.5</span>
                    <span>(153)</span>
                  </div>
                  <div class="uk-width-expand uk-text-right">by Janet Small</div>
                </div>
              </div>
              <a href="recipe.html" class="uk-position-cover"></a>
            </div>
          </div>
          <div>
            <div
              class="uk-card">
              <div class="uk-card-media-top uk-inline uk-light">
                <img class="uk-border-rounded-medium" src="https://source.unsplash.com/Cf_Df-Zl8iw/300x160" alt="Course Title">
                <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                <div class="uk-position-xsmall uk-position-top-right">
                  <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                    data-uk-icon="heart"></a>
                </div>
              </div>
              <div>
                <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Broiled Tilapia Parmesan</h3>
                <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                  <div class="uk-width-auto uk-flex uk-flex-middle">
                    <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                    <span class="uk-margin-xsmall-left">5.0</span>
                    <span>(524)</span>
                  </div>
                  <div class="uk-width-expand uk-text-right">by Aleaxa Dorchest</div>
                </div>
              </div>
              <a href="recipe.html" class="uk-position-cover"></a>
            </div>
          </div>
          <div>
            <div
              class="uk-card">
              <div class="uk-card-media-top uk-inline uk-light">
                <img class="uk-border-rounded-medium" src="https://source.unsplash.com/aGjP08-HbYY/300x160" alt="Course Title">
                <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                <div class="uk-position-xsmall uk-position-top-right">
                  <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                    data-uk-icon="heart"></a>
                </div>
              </div>
              <div>
                <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Baked Teriyaki Chicken</h3>
                <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                  <div class="uk-width-auto uk-flex uk-flex-middle">
                    <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                    <span class="uk-margin-xsmall-left">4.6</span>
                    <span>(404)</span>
                  </div>
                  <div class="uk-width-expand uk-text-right">by Ben Kaller</div>
                </div>
              </div>
              <a href="recipe.html" class="uk-position-cover"></a>
            </div>
          </div>
          <div>
            <div
              class="uk-card">
              <div class="uk-card-media-top uk-inline uk-light">
                <img class="uk-border-rounded-medium" src="https://source.unsplash.com/SxTlB4fde9Q/300x160" alt="Course Title">
                <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                <div class="uk-position-xsmall uk-position-top-right">
                  <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                    data-uk-icon="heart"></a>
                </div>
              </div>
              <div>
                <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Zesty Slow Cooker Chicken</h3>
                <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                  <div class="uk-width-auto uk-flex uk-flex-middle">
                    <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                    <span class="uk-margin-xsmall-left">3.9</span>
                    <span>(629)</span>
                  </div>
                  <div class="uk-width-expand uk-text-right">by Sam Brown</div>
                </div>
              </div>
              <a href="recipe.html" class="uk-position-cover"></a>
            </div>
          </div>
          <div>
            <div
              class="uk-card">
              <div class="uk-card-media-top uk-inline uk-light">
                <img class="uk-border-rounded-medium" src="https://source.unsplash.com/MNtag_eXMKw/300x160" alt="Course Title">
                <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                <div class="uk-position-xsmall uk-position-top-right">
                  <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                    data-uk-icon="heart"></a>
                </div>
              </div>
              <div>
                <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Rosemary Ranch Chicken Kabobs</h3>
                <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                  <div class="uk-width-auto uk-flex uk-flex-middle">
                    <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                    <span class="uk-margin-xsmall-left">3.6</span>
                    <span>(149)</span>
                  </div>
                  <div class="uk-width-expand uk-text-right">by Theresa Samuel</div>
                </div>
              </div>
              <a href="recipe.html" class="uk-position-cover"></a>
            </div>
          </div>
          <div>
            <div
              class="uk-card">
              <div class="uk-card-media-top uk-inline uk-light">
                <img class="uk-border-rounded-medium" src="https://source.unsplash.com/Yr4n8O_3UPc/300x160" alt="Course Title">
                <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                <div class="uk-position-xsmall uk-position-top-right">
                  <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                    data-uk-icon="heart"></a>
                </div>
              </div>
              <div>
                <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Slow Cooker Pulled Pork</h3>
                <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                  <div class="uk-width-auto uk-flex uk-flex-middle">
                    <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                    <span class="uk-margin-xsmall-left">2.9</span>
                    <span>(309)</span>
                  </div>
                  <div class="uk-width-expand uk-text-right">by Adam Brown</div>
                </div>
              </div>
              <a href="recipe.html" class="uk-position-cover"></a>
            </div>
          </div>
          
          <div>
                      <div
                        class="uk-card">
                        <div class="uk-card-media-top uk-inline uk-light">
                          <img class="uk-border-rounded-medium" src="https://source.unsplash.com/jivmv9hE6bM/300x160" alt="Course Title">
                          <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                          <div class="uk-position-xsmall uk-position-top-right">
                            <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                              data-uk-icon="heart"></a>
                          </div>
                        </div>
                        <div>
                          <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Greek Lemon Chicken and Potatoes</h3>
                          <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                            <div class="uk-width-auto uk-flex uk-flex-middle">
                              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                              <span class="uk-margin-xsmall-left">3.6</span>
                              <span>(124)</span>
                            </div>
                            <div class="uk-width-expand uk-text-right">by Thomas Haller</div>
                          </div>
                        </div>
                        <a href="recipe.html" class="uk-position-cover"></a>
                      </div>
                    </div>
                    <div>
                      <div
                        class="uk-card">
                        <div class="uk-card-media-top uk-inline uk-light">
                          <img class="uk-border-rounded-medium" src="https://source.unsplash.com/tzl1UCXg5Es/300x160" alt="Course Title">
                          <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                          <div class="uk-position-xsmall uk-position-top-right">
                            <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                              data-uk-icon="heart"></a>
                          </div>
                        </div>
                        <div>
                          <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Turkey Posole Dinner</h3>
                          <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                            <div class="uk-width-auto uk-flex uk-flex-middle">
                              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                              <span class="uk-margin-xsmall-left">4.0</span>
                              <span>(84)</span>
                            </div>
                            <div class="uk-width-expand uk-text-right">by Thomas Haller</div>
                          </div>
                        </div>
                        <a href="recipe.html" class="uk-position-cover"></a>
                      </div>
                    </div>
                    <div>
                      <div
                        class="uk-card">
                        <div class="uk-card-media-top uk-inline uk-light">
                          <img class="uk-border-rounded-medium" src="https://source.unsplash.com/6G98hiCJETA/300x160" alt="Course Title">
                          <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                          <div class="uk-position-xsmall uk-position-top-right">
                            <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                              data-uk-icon="heart"></a>
                          </div>
                        </div>
                        <div>
                          <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Baked Macaroni and Cheese</h3>
                          <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                            <div class="uk-width-auto uk-flex uk-flex-middle">
                              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                              <span class="uk-margin-xsmall-left">2.9</span>
                              <span>(311)</span>
                            </div>
                            <div class="uk-width-expand uk-text-right">by Thomas Haller</div>
                          </div>
                        </div>
                        <a href="recipe.html" class="uk-position-cover"></a>
                      </div>
                    </div>
                    <div>
                      <div
                        class="uk-card">
                        <div class="uk-card-media-top uk-inline uk-light">
                          <img class="uk-border-rounded-medium" src="https://source.unsplash.com/_0JpjeqtSyg/300x160" alt="Course Title">
                          <div class="uk-position-cover uk-card-overlay uk-border-rounded-medium"></div>
                          <div class="uk-position-xsmall uk-position-top-right">
                            <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative"
                              data-uk-icon="heart"></a>
                          </div>
                        </div>
                        <div>
                          <h3 class="uk-card-title uk-text-500 uk-margin-small-bottom uk-margin-top">Deb's General Tso's Chicken</h3>
                          <div class="uk-text-xsmall uk-text-muted" data-uk-grid>
                            <div class="uk-width-auto uk-flex uk-flex-middle">
                              <span class="uk-rating-filled" data-uk-icon="icon: star; ratio: 0.7"></span>
                              <span class="uk-margin-xsmall-left">4.4</span>
                              <span>(68)</span>
                            </div>
                            <div class="uk-width-expand uk-text-right">by Thomas Haller</div>
                          </div>
                        </div>
                        <a href="recipe.html" class="uk-position-cover"></a>
                      </div>
                    </div>
        </div>
        <div class="uk-margin-large-top uk-text-small">
          <ul class="uk-pagination uk-flex-center uk-text-500 uk-margin-remove" data-uk-margin>
            <li><a href="#"><span data-uk-pagination-previous></span></a></li>
            <li><a href="#">1</a></li>
            <li class="uk-active"><span>2</span></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#"><span data-uk-pagination-next></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="uk-section uk-section-default">
  <div class="uk-container">
    <div data-uk-grid>
      <div class="uk-width-expand">
        <h2>Videos</h2>          
      </div>
      <div class="uk-width-1-3 uk-text-right uk-light">
        <select class="uk-select uk-select-light uk-width-auto uk-border-pill uk-select-primary">
          <option>Featured</option>
          <option>Top Rated</option>
          <option>Trending</option>
        </select>
      </div>
    </div>      
    <div class="uk-child-width-1-2 uk-child-width-1-4@s" data-uk-grid>
      <div>
        <div
          class="uk-card uk-card-video">
          <div class="uk-inline uk-light">
            <img class="uk-border-rounded-large" src="https://source.unsplash.com/GTMGG-xvxdU/300x400" alt="Course Title">
            <div class="uk-position-cover uk-card-overlay uk-border-rounded-large"></div>
            <div class="uk-position-center">
              <span data-uk-icon="icon: play-circle; ratio: 3.4"></span>
            </div>
            <div class="uk-position-small uk-position-bottom-left">
              <h5 class="uk-margin-small-bottom">Business Presentation Course</h5>
              <div class="uk-text-xsmall">by Thomas Haller</div>
            </div>
          </div>
          <a href="recipe.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div
          class="uk-card uk-card-video">
          <div class="uk-inline uk-light">
            <img class="uk-border-rounded-large" src="https://source.unsplash.com/HjWzkqW1dgI/300x400" alt="Course Title">
            <div class="uk-position-cover uk-card-overlay uk-border-rounded-large"></div>
            <div class="uk-position-center">
              <span data-uk-icon="icon: play-circle; ratio: 3.4"></span>
            </div>
            <div class="uk-position-small uk-position-bottom-left">
              <h5 class="uk-margin-small-bottom">Business Presentation Course</h5>
              <div class="uk-text-xsmall">by Thomas Haller</div>
            </div>
          </div>
          <a href="recipe.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div
          class="uk-card uk-card-video">
          <div class="uk-inline uk-light">
            <img class="uk-border-rounded-large" src="https://source.unsplash.com/usfIE5Yc7PY/300x400" alt="Course Title">
            <div class="uk-position-cover uk-card-overlay uk-border-rounded-large"></div>
            <div class="uk-position-center">
              <span data-uk-icon="icon: play-circle; ratio: 3.4"></span>
            </div>
            <div class="uk-position-small uk-position-bottom-left">
              <h5 class="uk-margin-small-bottom">Business Presentation Course</h5>
              <div class="uk-text-xsmall">by Thomas Haller</div>
            </div>
          </div>
          <a href="recipe.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div
          class="uk-card uk-card-video">
          <div class="uk-inline uk-light">
            <img class="uk-border-rounded-large" src="https://source.unsplash.com/-YHSwy6uqvk/300x400" alt="Course Title">
            <div class="uk-position-cover uk-card-overlay uk-border-rounded-large"></div>
            <div class="uk-position-center">
              <span data-uk-icon="icon: play-circle; ratio: 3.4"></span>
            </div>
            <div class="uk-position-small uk-position-bottom-left">
              <h5 class="uk-margin-small-bottom">Business Presentation Course</h5>
              <div class="uk-text-xsmall">by Thomas Haller</div>
            </div>
          </div>
          <a href="recipe.html" class="uk-position-cover"></a>
        </div>
      </div>      
    </div>
  </div>
</div>

<div class="uk-container">
  <div class="uk-background-primary uk-border-rounded-large uk-light">
    <div class="uk-width-3-4@m uk-margin-auto uk-padding-large">
      <div class="uk-text-center">
        <h2 class="uk-h2 uk-margin-remove">Be the first to know about the latest deals, receive new trending recipes &amp; more!</h2>
      </div>
      <div class="uk-margin-medium-top">
        <div data-uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
          <form>
            <div class="uk-grid-small" data-uk-grid>
              <div class="uk-width-1-1 uk-width-expand@s uk-first-column">
                <input type="email" placeholder="Email Address" class="uk-input uk-form-large uk-width-1-1 uk-border-pill">
              </div>
              <div class="uk-width-1-1 uk-width-auto@s">
                <input type="submit" value="Subscribe" class="uk-button uk-button-large uk-button-warning">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
	</div>
</div>
<?php
  get_footer();
  ?>