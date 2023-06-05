<?php require_once "admin_panel/controller/form_view.php" ?>
<li class="l-section section">
            <div class="hire">
              <h2>Bizlerdin xizmetlerimiz</h2>
              <!-- checkout formspree.io for easy form setup -->
              <form class="work-request" action="admin_panel/controller/form.php" method="POST">
                <div class="work-request--options">
                  <span class="options-a">
                      <?php foreach($data as $val):?>
                    <input id="opt-<?=$val[0];?>" type="checkbox" name="<?=$val[0];?>" value="<?=$val[1];?>">
                    <label for="opt-<?=$val[0];?>">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      <?=$val[1];?>
                    </label>
                    <?php endforeach;?>
                  </span> </div>

                <div class="work-request--information">
                  <div class="information-name">
                    <input id="name" type="text"  name="name" spellcheck="false">
                    <label for="name">Name</label>
                  </div>
                  <div class="information-email">
                    <input id="email" type="text" name="phone" spellcheck="false">
                    <label for="email">Tel nomer</label>
                  </div>
                </div>
                <input type="submit" value="Send Request">
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>