<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="robo svg.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>AI Project</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">
          <figure class="">
            <blockquote class="blockquote">
              <h2>Autonomous Soul</h2>
            </blockquote>
            <figcaption class="blockquote-footer text-end">
              <cite title="Source Title">Reality</cite> connecting <cite title="Source Title">Virtually</cite>
            </figcaption>
          </figure>
        </a>
        
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
            <filter id="goo">
              <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
              <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
              <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
            </filter>
          </defs>
        </svg>
        
        <button class="btn btn-primary blob-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" id="playpause">
            <img src="robo svg.png" alt="" id="menu">
            <span class="blob-btn__inner">
              <span class="blob-btn__blobs">
                <span class="blob-btn__blob"></span>
                <span class="blob-btn__blob"></span>
                <span class="blob-btn__blob"></span>
                <span class="blob-btn__blob"></span>
              </span>
            </span>
        </button>

        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height: 500px;">
          <div class="offcanvas-header">
              <div class="accordion accordion-flush container-fluid" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      <h5>
                        Project Details
                      </h5>
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body" style="height: 500px;">
                      <h5>Course Details</h5>
                      <div class="container">
                        <ul class="list-group ml-4">
                          <li class="list-group-item list-group-item-dark">Course Code - CSE3013</li>
                          <li class="list-group-item list-group-item-dark">Course Name - Artificial Intelligence</li>
                        </ul>
                      </div>
                      <br><br>
                      <h5>Project Members</h5>
                      <div class="container">
                        <ul class="list-group ml-4">
                          <li class="list-group-item list-group-item-dark">Abhisek Mohapatra - 19BCE1790</li>
                          <li class="list-group-item list-group-item-dark">Kshitij Srivastava&ensp;&emsp;&ensp;- 19BCE1131</li>
                          <li class="list-group-item list-group-item-dark">Sarthak Keshari &emsp;&emsp;&ensp;- 19BCE1672</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body small" style=" overflow: hidden;">
            <h1 class="m-1">Presentation Journey <span>Review 2</span></h1>
            <div class="flex-parent">
              <div class="input-flex-container">
                <a class="input" href="#" onclick="setTimeout(function() {
                  window.location.href='index.html';
              }, 2000);">
                  <span data-year="Home" data-info=""></span>
                </a>
                <a class="input" href="#" onclick="setTimeout(function() {
                  window.location.href='intro.html';
              }, 1000);">
                  <span data-year="Introduction" data-info=""></span>
                </a>
                <a class="input" href="#" onclick="setTimeout(function() {
                  window.location.href='abstract.html';
              }, 1000);">
                  <span data-year="Abstract" data-info=""></span>
                </a>
                <a class="input" href="#" onclick="setTimeout(function() {
                  window.location.href='litsurvey.html';
              }, 1000);">
                  <span data-year="Literature survey" data-info=""></span>
                </a>
                <a class="input" href="#" onclick="setTimeout(function() {
                  window.location.href='workingmodel.html';
              }, 1000);">
                  <span data-year="Working Model" data-info=""></span>
                </a>
                <a class="input" href="#" onclick="setTimeout(function() {
                  window.location.href='reference.html';
              }, 1000);">
                  <span data-year="References" data-info=""></span>
                </a>
              </div>
              <!-- <div class="description-flex-container">
                <p>And future Call of Duty players would thank them.</p>
                <p>Because every kid should get to be Tarzan for a day.</p>
                <p class="active">And the world rejoiced.</p>
                <p>Because building roads is inconvenient.</p>
                <p>Ain???t nobody got time to rake.</p>
                <p>Because paper currency is for noobs.</p>
                <p>Nobody likes cords. Nobody.</p>
                <p>Brighter than glow memory.</p>
                <p>To capitalize on an as-yet nascent market for cat photos.</p>
                <p>Because organic search rankings take work.</p>
              </div> -->
            </div>
            
          
          </div>
        </div>
      </div>
    </nav>

    <div class="container d-flex justify-content-center">
      <video class="w-75" src="RoboEvol.mp4#t=0,160" id="myVideo" controls></video>
      <script>
        var vid = document.getElementById("myVideo");
        vid.playbackRate = 5.5;
        vid.volume=0.1;
      </script>

      <script>
        $(function(){
          var inputs = $('.input');
          var paras = $('.description-flex-container').find('p');
          inputs.click(function(){
            var t = $(this),
                ind = t.index(),
                matchedPara = paras.eq(ind);
            
            t.add(matchedPara).addClass('active');
            inputs.not(t).add(paras.not(matchedPara)).removeClass('active');
          });
        });
      </script>

      <script>

        function sleep(milliseconds) {
          return new Promise(resolve => setTimeout(resolve, milliseconds));
        }
        async function fun() {
            while(true)
            {
              // console.log(document.getElementById('offcanvasBottom').style["visibility"]);
              var vid=document.getElementById('myVideo');
              if(document.getElementById('offcanvasBottom').style["visibility"]=="visible")
              {
                console.log("Pause");
                vid.pause();
              }
              else
              {
                console.log("Play");
                vid.play();
              }       
              await sleep(1000);
            }
        }
        fun();
      </script>
      
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>