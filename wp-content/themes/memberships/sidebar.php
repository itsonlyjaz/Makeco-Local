<div class="panel-group padtop" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">      
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <h4 class="panel-title">Make: Magazine</h4>
        </a>      
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          $children = wp_list_pages('title_li=&child_of=88&echo=0');
          if ($children) {
          echo $children;
          }
        ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">      
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <h4 class="panel-title">Makezine</h4>
        </a>      
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          $children = wp_list_pages('title_li=&child_of=9&echo=0');
          if ($children) {
          echo $children;
          }
        ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">      
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          <h4 class="panel-title">Maker Faire</h4>
        </a>      
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          $children = wp_list_pages('title_li=&child_of=11&echo=0');
          if ($children) {
          echo $children;
          }
        ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">      
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThreeHalf">
          <h4 class="panel-title">MakerSpace</h4>
        </a>      
    </div>
    <div id="collapseThreeHalf" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          $children = wp_list_pages('title_li=&child_of=104&echo=0');
          if ($children) {
          echo $children;
          }
        ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">      
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          <h4 class="panel-title">Maker Shed</h4>
        </a>      
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          $children = wp_list_pages('title_li=&child_of=17&echo=0');
          if ($children) {
          echo $children;
          }
        ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">      
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
          <h4 class="panel-title">MakerCon</h4>
        </a>      
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          $children = wp_list_pages('title_li=&child_of=15&echo=0');
          if ($children) {
          echo $children;
          }
        ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">      
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
          <h4 class="panel-title">Maker Camp</h4>
        </a>      
    </div>
    <div id="collapseSix" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          $children = wp_list_pages('title_li=&child_of=13&echo=0');
          if ($children) {
          echo $children;
          }
        ?>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">      
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
          <h4 class="panel-title">Maker Media</h4>
        </a>      
    </div>
    <div id="collapseSeven" class="panel-collapse collapse">
      <div class="panel-body">
        <?php
          $children = wp_list_pages('title_li=&child_of=19&echo=0');
          if ($children) {
          echo $children;
          }
        ?>
      </div>
    </div>
  </div>
</div>
    <script>
      jQuery(".current_page_item").closest( ".panel-collapse" ).addClass("in");
    </script>
