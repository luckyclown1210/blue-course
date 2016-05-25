<div class="container">
  <div class="blog-posts">
    <div class="row">

      <div class="col-lg-9">
        <div class="single-blog-post">
          <div class="single-post">
            <div class="post-img">
              <img src="<?php
              $row = db_select_row("SELECT tblName,tblDescription,tblImage FROM tblproduct WHERE tblId =".$_GET["id"]);
              echo "public/images/course/".$row["tblImage"];
              ?>" alt="">
                <div class="overlay">
                </div>
            </div>
            <div class="post-info">
              <h3 class="post-title"><a href="single-post.html">Jesdo is Fully Responsive</a></h3>
              <div class="post-meta">
                <span>12 October 2015 </span>
                <span>in <a href="#">Design</a> </span>
                <span>by <a href="#">John Doe</a></span> 
              </div>
              <div class="post-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et iaculis tellus, a bibendum purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla lacinia vulputate dui vel pretium. Nam ut sem luctus, sollicitudin quam vitae, viverra mi. Vestibulum feugiat dui tortor, id suscipit eros molestie sed. Aliquam nec scelerisque nunc. Praesent ut fringilla libero. Proin tempor, elit non pretium vulputate, nunc neque placerat justo, vel laoreet ipsum metus eu eros. Donec mattis elit in posuere pellentesque.</p> 

                <p>Duis a tortor a urna fermentum euismod eget eget turpis. Cras sit amet enim eleifend, adipiscing tellus scelerisque, placerat urna. Nullam lacus turpis, pulvinar eget consequat eget, laoreet vitae urna. Vivamus sollicitudin ante vitae sem aliquam, at pulvinar augue sagittis. In porttitor semper est, eget aliquet metus tincidunt ac. Quisque euismod semper felis et mattis. Pellentesque scelerisque ipsum sed convallis interdum.</p>
                <p>
                  <blockquote>
                    Donec ac nunc quis nisl aliquet hendrerit. Pellentesque ultricies, felis id iaculis feugiat, mauris nunc viverra lectus, quis egestas felis nisi non ante. Donec bibendum magna vitae eros lacinia ornare. Nullam cursus sollicitudin lacus. Maecenas congue.
                  </blockquote>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et iaculis tellus, a bibendum purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla lacinia vulputate dui vel pretium. Nam ut sem luctus, sollicitudin quam vitae, viverra mi. Vestibulum feugiat dui tortor, id suscipit eros molestie sed. Aliquam nec scelerisque nunc. Praesent ut fringilla libero. Proin tempor, elit non pretium vulputate, nunc neque placerat justo, vel laoreet ipsum metus eu eros. Donec mattis elit in posuere pellentesque.</p> 

                <p>Duis a tortor a urna fermentum euismod eget eget turpis. Cras sit amet enim eleifend, adipiscing tellus scelerisque, placerat urna. Nullam lacus turpis, pulvinar eget consequat eget, laoreet vitae urna. Vivamus sollicitudin ante vitae sem aliquam, at pulvinar augue sagittis. In porttitor semper est, eget aliquet metus tincidunt ac. Quisque euismod semper felis et mattis. Pellentesque scelerisque ipsum sed convallis interdum.</p>
                <p>
              </div>

              <div class="share-box single-post-share-box">
                <span>Share this post</span>
                <ul class="share-box-icons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
              <ul class="nav-btn single-post-nav">
                <li class="pre-btn"><a href="#" ><i class="fa fa-long-arrow-left"></i> Previous Post</a></li>
                <li class="next-post"><a href="#">Next Post <i class="fa fa-long-arrow-right"></i></a></li>
              </ul>
              <h4 class="btline-title btline-custom-title">About Author</h4>
              <div class="post-author">
                <img src="images/post-author.jpg" alt="">
                <h5>John Doe</h5>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut tristique nulla, at tempor sem. Duis eu pellentesque dolor, vel suscipit dolor. Maecenas vel nulla in nunc malesuada pellentesque.
                </p>
              </div>
              


              <div class="post-comments">
                  <div class="comment-wrap">
                    <h4 class="btline-title btline-custom-title">5 Comments</h4>
                    <ul class="comment-list">
                      
                      <li>
                        <div class="avatar">
                          <img src="images/comment-person.jpg" alt="">
                        </div>
                        <div class="comment-text">
                          <div class="comment-head clearfix">
                            <span class="name-n-time">John on April 26 5:33pm - <a href="#">Reply</a></span>
                          </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut tristique nulla, at tempor sem. Duis eu pellentesque dolor, vel suscipit dolor. Maecenas vel nulla in nunc malesuada pellentesque.

                        </div>
                      </li>

                      <li>
                        <div class="avatar">
                          <img src="images/comment-person.jpg" alt="">
                        </div>
                        <div class="comment-text">
                          <div class="comment-head clearfix">
                            <span class="name-n-time">John Doe on April 26 5:33pm - <a href="#">Reply</a></span>
                          </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut tristique nulla, at tempor sem. Duis eu pellentesque dolor, vel suscipit dolor. Maecenas vel nulla in nunc malesuada pellentesque.

                        </div>

                        <ul>
                          <li>
                            <div class="avatar">
                              <img src="images/comment-person.jpg" alt="">
                            </div>
                            <div class="comment-text">
                              <div class="comment-head clearfix">
                                <span class="name-n-time">John on April 26 5:33pm - <a href="#">Reply</a></span>
                              </div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut tristique nulla, at tempor sem. Duis eu pellentesque dolor, vel suscipit dolor. Maecenas vel nulla in nunc malesuada pellentesque.

                            </div>
                          </li>
                        </ul>
                      </li>

                      <li>
                        <div class="avatar">
                          <img src="images/comment-person.jpg" alt="">
                        </div>
                        <div class="comment-text">
                          <div class="comment-head clearfix">
                            <span class="name-n-time">John Doe on April 26 5:33pm - <a href="#">Reply</a></span>
                          </div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut tristique nulla, at tempor sem. Duis eu pellentesque dolor, vel suscipit dolor. Maecenas vel nulla in nunc malesuada pellentesque.

                        </div>
                      </li>
                    </ul>

                  </div>
                  <div id="contact-form" class="comment-form-warp">
                    <h4 class="btline-title btline-custom-title">Leave a Respons</h4>
                    <form method="post" id="ajax-contact-form">
                    
                    <div class="row">
                      <div class="col-lg-4">
                        <input type="text" name="personal" id="personal" value="Your name (required)" onfocus="(this.value == 'Your name (required)') &amp;&amp; (this.value = '')" onblur="(this.value == '') &amp;&amp; (this.value = 'Your name (required)')" class="error-input">
                      </div>

                      <div class="col-lg-4">
                        <input type="text" name="email" id="email" value="Your email (required)" onfocus="(this.value == 'Your email (required)') &amp;&amp; (this.value = '')" onblur="(this.value == '') &amp;&amp; (this.value = 'Your email (required)')">
                      </div>

                      <div class="col-lg-4">
                        <input type="text" name="website" id="website" value="Your website" onfocus="(this.value == 'Your website') &amp;&amp; (this.value = '')" onblur="(this.value == '') &amp;&amp; (this.value = 'Your website')">
                      </div>
                    </div>  

                      <textarea name="message" id="message" onfocus="(this.value == 'Your message...') &amp;&amp; (this.value = '')" onblur="(this.value == '') &amp;&amp; (this.value = 'Your message...')">Your message...</textarea>

                      <input type="submit" value="Submit" class="button" name="email-send">
      
                    </form>
                  </div>
              </div>

            </div>
          </div>
        </div>

      </div>
      
      <div class="col-lg-3">
        <div class="sidebar">

          <div class="widget">
            <div class="search-widget">
              <form method="get" id="searchform">
                <input type="text" onkeyup="keyUp();" onblur="if(this.value == '') {this.value=this.defaultValue}" onfocus="if(this.value=='' || this.value == 'Search...') this.value=''" value="Search..." name="s">
                <input type="submit" value="">
                <i class="fa fa-search search-button"></i>
              </form>
            </div>
          </div>

          <div class="widget widget_categories">
              <h4 class="btline-title">Categories</h4>
              <ul>
                <li>
                  <a href="#">Web Design</a>
                </li>
                <li>
                  <a href="#">Identity Design</a>
                </li>
                <li>
                  <a href="#">Business</a>
                </li>
                <li>
                  <a href="#">Traveling </a>
                </li>
                <li>
                  <a href="#">Development </a>
                </li>
                <li>
                  <a href="#">Photography </a>
                </li>
              </ul>
          </div>

          <div class="widget widget_recent_entries">
              <h4 class="btline-title">Recent Posts</h4>
              <ul>
                <li>
                  <a href="single-post.html">This is a title of web design post</a>
                </li>
                <li>
                  <a href="single-post.html">Identity design is show your self</a>
                </li>
                <li>
                  <a href="single-post.html">Business strategy is important</a>
                </li>
                <li>
                  <a href="single-post.html">How to start travel in a good way.</a>
                </li>
                <li>
                  <a href="single-post.html">Start Development in a good way </a>
                </li>
                <li>
                  <a href="single-post.html">Some inspiration of  Photography</a>
                </li>
              </ul>
          </div> 

          <div class="widget">
              <h4 class="btline-title">About Blog</h4>
              <p>Lorem ipsum dolor sit amet, consectetur elit porta. Vestibulum ante justo, volutpat quis porta non, vulputate id diam. Lorem et ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div> 

        </div>
      </div>

    </div>
  </div>
</div>

