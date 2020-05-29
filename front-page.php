<?php get_header();?>
<head>
	<title>Ken Yokokawa - <?php the_title();?></title>
</head>



<div id = "toc" class = "fix-toc">
    <div style = "overflow:hidden;width:max(1000px,100%);">
      <h1  id = "toc-name" class = "t" style = "color:#fff2f0">Ken Yokokawa</h1>
    </div>
    <h1  id = "toc-about" class = "t">About</h1>
    <h1  id = "toc-projects" class = "t">Projects</h1>
    <h1  id = "toc-blog" class = "t">Blog</h1>
    <h1  id = "toc-links" class = "t">Links</h1>
  </div>


  <div class = "fixed-height-container"></div>
    <div style = "width:max(60%,400px);height:1200px;float:right;margin:20px;">
      <img src="/wordpress/wp-content/themes/Pinky/media/carlsbad-flat.png" alt="image 3" style = "width:min(70%,420px)">
      <div style = "height:50px;"></div>
      <img src="/wordpress/wp-content/themes/Pinky/media/tokyo-flat.png" alt="image 1" style = "width:min(60%,360px);z-index: -1;">
      <div style = "height:50px;"></div>
      <img src="/wordpress/wp-content/themes/Pinky/media/ny-flat.png" alt="image 2" style = "width:min(80%,480px);z-index: -1;">
    </div>
  <div style = "clear:both;"></div>


  <div class = "fixed-height-container">
    <h1  id = "header-about" class = "h">About</h1>
    <div style = "width:max(60%,400px);float:right;margin:20px;">
      <h3>Japanese-American</h3>
      <h5 > Born in New York and having moved to Tokyo at the age of five, I spent most of my life in Japan. I moved back to New York for college.</h5>
      <h3>NYU Rising Senior</h3>
      <h5 > Double majoring in Business (with a concentration in Statistics) and Computer Science.</h5>
      <h3>Programmer</h3>
      <h5 > Interested in the full stack, as well as data science. Proficiencies include Python, Java, JavaScript (React and Node), and R.</h5>
    </div>
  </div>


  <div class = "fixed-height-container">
    <h1  id = "header-projects" class = "h">Projects</h1>
    <div style = "width:max(60%,400px);float:right;margin:20px;">
      <h3><a class = "h3a" href = "https://github.com/ky1044/Bikeable">Bikeable</a></h3>
      <h5 > Full stack website to find the real time status of Citibike stations, as well as logs for the past week.</h5>
      <h3><a class = "h3a" href = "https://github.com/ky1044/MTA_Crunch">MTA Crunch</a></h3>
      <h5 > Full stack website to find the average commute time on the New York City subway using historical data.</h5>
    </div>
  </div>


  <div class = "fixed-height-container">
    <h1  id = "header-blog" class = "h">Blog</h1>
    <div style = "width:max(60%,400px);float:right;margin:20px;">
      <?php
      $args = array( 'numberposts' => 3 );
      $lastposts = get_posts( $args );
      foreach($lastposts as $post) : setup_postdata($post); ?>
      <h4 style = "line-height:min(45px,7vw);"><a class = "ha" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <h5><?php the_excerpt(); ?></h5>
      <?php endforeach; ?>
    </div>
  </div>


  <div class = "fixed-height-container">
    <h1  id = "header-links"   class = "h">Links</h1>
    <div  style = "width:max(60%,400px);float:right;padding:0 20px;z-index=-1" onmouseout = "cursorSrc ='/wordpress/wp-content/themes/Pinky/media/link-cursor-off.png'">
      <div style = "display:inline-block;"><h3  onmouseover = "cursorSrc ='/wordpress/wp-content/themes/Pinky/media/link-cursor-email.png';cursorGrow();"><a class = "h3a" href = "mailto:ken.yokokawa@stern.nyu.edu">Email</a></h3></div>
      <br/>
      <div style = "display:inline-block;"><h3 onmouseover = "cursorSrc ='/wordpress/wp-content/themes/Pinky/media/link-cursor-github.png';cursorGrow();"><a class = "h3a" href = "https://github.com/ky1044">GitHub</a></h3></div>
      <br/>
      <div style = "display:inline-block;"><h3 onmouseover = "cursorSrc ='/wordpress/wp-content/themes/Pinky/media/link-cursor-linkedin.png';cursorGrow();"><a class = "h3a" href = "https://www.linkedin.com/in/ken-yokokawa/">LinkedIn </a></h3></div>
      <br/>
      <div style = "display:inline-block;"><h3 onmouseover = "cursorSrc ='/wordpress/wp-content/themes/Pinky/media/link-cursor-resume.png';cursorGrow();"><a class = "h3a" href = "https://drive.google.com/file/d/1KEQK7HM9pcMj6Y88mjO0UA651n3o6qul/view?usp=sharing">Resume</a></h3></div>
    </div>
    <img src = "/wordpress/wp-content/themes/Pinky/media/link-cursor-off.png" id = "link-cursor" style =" width:0px;height:0px;transform: translate(-50%,-50%);position:absolute;z-index: -2">
  </div>

  <script>
    var linkCursor = document.getElementById('link-cursor')
    var cursorSrc = "/wordpress/wp-content/themes/Pinky/media/link-cursor-off.png"

    function sleep(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    }

    async function cursorGrow(){
      var timer = 0
      linkCursor.style.width="10px";
      linkCursor.style.height="10px";
      while (timer<20){
        linkCursor.style.width=Math.min((linkCursor.width+10),200)+"px";
        linkCursor.style.height=Math.min((linkCursor.height+10),200)+"px";
        timer++;
        await sleep(2);

      }
    }


    document.addEventListener('mousemove',e=>{
      var cursorX = e.clientX;
      var cursorY = e.clientY+window.pageYOffset;
      linkCursor.style.top=cursorY+"px";
      linkCursor.style.left=cursorX+"px";
      linkCursor.src = cursorSrc
    });

    document.addEventListener('scroll',e=>{
      cursorSrc = "/wordpress/wp-content/themes/Pinky/media/link-cursor-off.png"
    });
      
  </script>

  
  <div style = "height:800px;"></div>
  <h3 style = "text-align:center">Thanks For <br/>Visiting!</h1>
  <div style = "height:calc( 50vh - 70px);"></div>




<!-- parralax scroll  script -->
<script>
  window.onscroll = function() {scrollUpdate()};
  var toc = document.getElementById("toc");

  let sections = ["about","projects","blog","links"]
  let tocs=[]
  let headers = []
  for (let i = 0; i<sections.length;i++){
    tocs.push(document.getElementById("toc-"+sections[i]))
    headers.push(document.getElementById("header-"+sections[i]))
  }
  
  function scrollUpdate() {
    toc.style.marginTop= Math.floor((-window.pageYOffset)/5.8)+"px";
    for (let i = 0; i<tocs.length;i++){
      if (tocs[i].getBoundingClientRect().bottom>headers[i].getBoundingClientRect().bottom){
        tocs[i].style.color = "#fff2f0";
        headers[i].style.visibility = "hidden";
      }else{
        tocs[i].style.color = "#ffdfda";
        headers[i].style.visibility = "visible";
      }
    }
    
    
  }
  </script>





<?php get_footer();?>