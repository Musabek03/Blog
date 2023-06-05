<?php include_once "admin_panel/controller/admin_view.php" ; ?>

<ul class="l-main-content main-content">
          <li class="l-section section section--is-active">
            <div class="intro">
              <div class="intro--banner">
                <h1><?=$data[0][1]?></h1>
                <button class="cta">Hire Us
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                    <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                  <span class="btn-background"></span>
                </button>   
                <img src="assets/img/introduction-visual.png" alt="Welcome">
              </div>
              <div class="intro--options">
              
              <?php $k ==0;
              foreach($data as $value):
                     if($value[4]==0 && $k<3  ) :
                ?>
                <a href="#0">
                  <h3><?= $value[2] ?></h3>
                  <p><?= $value[3] ; ++$k ?></p>
                </a>
              <?php endif;
             endforeach; ?>
              </div>
            </div>
          </li>