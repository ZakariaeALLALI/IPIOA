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
  <body>
    <?php include("header.php"); ?>


    <div class="main-content d-flex flex-wrap bg-grey padding-large">
      <div class="container">
        <div class="row">

        <div class="col-md-6">
          <div class="feature-image">
            <img src="images/postitem3.jpg" alt="post image">
          </div>
        </div>

          <div class="col-md-6">
            <div class="post-content">
              <h1 class="page-title">Wear Your Earings Perfectly</h1>            
              <blockquote>This is blockquote consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</blockquote>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>
              <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia eserunt mollit anim id est laborum.</p>
            </div>
          </div>

    </div>          
  </div>
</div>

  <section class="post-comment padding-large">
    <div class="container">
        <div class="row">

          <div class="col-md-6">
            <div class="comments-wrap">
              <h3>Comments</h3>
              <div class="comment-list">
                <article class="d-flex">
                  <img src="images/reviewer-image.jpg" alt="default" class="commentor-image">
                  <div class="author-post">
                    <div class="comment-meta">
                      <h4 class="meta-name">Emily Brown</h4>
                      <span class="meta-date">Aug 20,2022</span>
                      <small class="comments-reply">
                        <a href="#">
                          <i class="icon icon-reply"></i>Reply</a>
                      </small>
                    </div>
                    <p>Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.</p>
                  </div>
                </article>
                <div class="child-comments">
                  <article class="d-flex">
                    <img src="images/reviewer-image.jpg" alt="sara" class="commentor-image">
                    <div class="author-post">
                      <div class="comment-meta">
                      <h4 class="meta-name">John Smith</h4>
                        <span class="meta-date">Sep 3,2022</span>
                        <small class="comments-reply">
                          <a href="#">
                            <i class="icon icon-reply"></i>Reply </a>
                        </small>
                      </div>
                      <p>Lorem diam done ullancomroer sit element henddg sit he consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="comment-respond">
              <h3>Leave a Comment</h3>
              <form method="post" class="form-group">
                  <input class="u-full-width" type="text" name="author" id="author" class="form-control" placeholder="Your full name">
                  <input class="u-full-width" type="email" name="email" id="email" class="form-control" placeholder="E-mail Address">
                  <textarea class="u-full-width" id="comment" class="form-control" name="comment" placeholder="Write your comment here" rows="20"></textarea>
                <div class="col-md-12">
                  <label class="example-send-yourself-copy">
                    <input type="checkbox">
                    <span class="label-body">Save my name, email, and website in this browser for the next time I comment.</span>
                  </label>
                </div>
                <div class="col-md-12">
                  <input class="btn btn-primary btn-full" type="submit" value="Submit">
                </div>

              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <?php include("footer.php"); ?>

  </body>
</html>