<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ίριδα</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Poiret+One&display=swap" rel="stylesheet">
  </head>
  <body class="styles-page bg-light-grey">
    <?php include("header.php"); ?>

    <div class="site-banner">
      <div class="banner-content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="breadcrumb-area padding-large">
                <h1 class="page-title">HTML Elements</h1>
                <div class="breadcum-items">
                  <span class="item">
                    <a href="index.html">Home /</a>
                  </span>
                  <span class="item">HTML Elements</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="padding-large">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Sample Heading 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-6">
            <h3>Sample Heading 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h4>Sample Heading 4</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-4">
            <h4>Sample Heading 4</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-4">
            <h4>Sample Heading 4</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <hr>
            <h2>Images and Lightboxes</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <figure>
              <img src="images/postitem2.jpg">
              <figcaption>Sample Caption</figcaption>
            </figure>
          </div>
          <div class="col-md-6">
            <figure>
              <a href="images/single-image1.jpg" data-lightbox-gallery="gallery1" title="Calm Before The Storm (One Shoe Photography Ltd.)" class="image-link">
                <img src="images/single-image1.jpg">
              </a>
              <figcaption>Opens of Lighbox Gallery</figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="section-title text-center mb-5">Toggles and Accordions</h2>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Accordion Item #1 </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                  <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Accordion Item #2 </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Accordion Item #3 </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="padding-large">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Tabs and Toggles</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <blockquote>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
            </blockquote>
            <p> Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            <figure class="align-right">
              <img src="images/postitem3.jpg" alt="post">
            </figure>
            <p>
              <span class="dropcap">P</span>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. <span class="highlight">Praesent dapibus, neque id cursus</span> faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
            </p>
            <h3>Paragraph</h3>
            <p>Pellentesque <strong>habitant morbi tristique senectus et netus et</strong> malesuada fames ac turpis egestas. sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. </p>
            <p>Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
            <blockquote class="pullquote-right">Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</blockquote> Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. <a href="#">Quisque</a> sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h3>Unordered List</h3>
            <ul>
              <li>Lorem ipsum dolor sit amet consectetuer.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h3>Ordered List</h3>
            <ol>
              <li>Lorem ipsum dolor sit amet consectetuer.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <hr>
            <h3>Table</h3>
            <table class="u-full-width">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Sex</th>
                  <th>Location</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Dave Gamache</td>
                  <td>26</td>
                  <td>Male</td>
                  <td>San Francisco</td>
                </tr>
                <tr>
                  <td>Dwayne Johnson</td>
                  <td>42</td>
                  <td>Male</td>
                  <td>Hayward</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <pre><code>.some-class { background-color: red;}</code></pre>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h2>Tabs and Toggles</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="bootstrap-tabs">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                  <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="accordion" id="accordionExample2">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-collapse1" aria-expanded="true" aria-controls="accordion-collapse1"> Accordion Item #1 </button>
                </h2>
                <div id="accordion-collapse1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                  <div class="accordion-body"> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-collapse2" aria-expanded="false" aria-controls="accordion-collapse2"> Accordion Item #2 </button>
                </h2>
                <div id="accordion-collapse2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                  <div class="accordion-body"> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-collapse3" aria-expanded="false" aria-controls="accordion-collapse3"> Accordion Item #3 </button>
                </h2>
                <div id="accordion-collapse3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                  <div class="accordion-body"> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 padding-medium">
            <div class="button-area">
              <div class="container">
                <h3>Button Sizes</h3>
                <button type="button" class="btn btn-small">small</button>
                <button type="button" class="btn btn-medium">medium</button>
                <button type="button" class="btn btn-large">large</button>
                <hr>
                <h3>Button Styles</h3>
                <button type="button" class="btn btn-outline-dark">Outline Dark</button>
                <button type="button" class="btn btn-outline-light">Outline Light</button>
                <button type="button" class="btn btn-outline-accent">Outline Accent</button>
                <button type="button" class="btn btn-outline-accent btn-pill">Outline Accent</button>
                <button type="button" class="btn btn-rounded">Rounded</button>
                <button type="button" class="btn btn-pill">Pill</button>
                <hr>
                <h3>Button Colors</h3>
                <button type="button" class="btn btn-accent">Accent</button>
                <button type="button" class="btn btn-grey">Grey</button>
                <button type="button" class="btn btn-common">Common</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <h3>Extra Large Button</h3>
                <button class="btn btn-outline-dark btn-pill btn-xlarge btn-full">Extra Large Full Width Button</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h2>Forms</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h1>Heading</h1>
            <h2>Heading</h2>
            <h3>Heading</h3>
            <h4>Heading</h4>
            <h5>Heading</h5>
            <h6>Heading</h6>
            <p>The base type is 15px over 1.6 line height (24px)</p>
            <strong>Bolded</strong>
            <em>Italicized</em>
            <a>Colored</a>
            <u>Underlined</u>
          </div>
          <div class="col-md-6">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <label for="exampleEmailInput">Your email</label>
                  <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                </div>
                <div class="col-md-6">
                  <label for="exampleRecipientInput">Reason for contacting</label>
                  <select class="u-full-width" id="exampleRecipientInput">
                    <option value="Option 1">Questions</option>
                    <option value="Option 2">Admiration</option>
                    <option value="Option 3">Can I get your number?</option>
                  </select>
                </div>
              </div>
              <label for="exampleMessage">Message</label>
              <textarea class="u-full-width" placeholder="Hi Dave …" id="exampleMessage"></textarea>
              <label class="example-send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">Send a copy to yourself</span>
              </label>
              <input class="button-primary" type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php include("footer.php"); ?>

  </body>
</html>