<?php include('includes/header.php') ?>
            <ul id="topics">
            <?php if($topics) : ?>
              <?php foreach($topics as $topic): ?>
              <li class="topic">
              <div class="row">
              <div class="col-md-2">
                <img class="avatar pull-left" src="img/AB.png">
              </div>
                <div class="col-md-10">
                  <div class="topic-content pull-right">
                    <h3><a href="topic.php"><?php echo $topic->title; ?></a></h3>
                    <div class="topic-info">
                      <a href="category.html">Development</a> >> <a href="profile.html"> Abraham</a> >> <a href="time.html">8:30am</a>
                      <span class="badge">3</span>
                    </div>
                  </div>
                </div>
              </div>
          <?php endforeach ; ?>
              </li>
            </ul>
    <?php else : ?>
      <p> No topic to Display </p>
    <?php endif; ?>
            <h3>Forum Statistics</h3>
            <ul>
              <li> Total Number of Users: <strong> 52</strong></li>
              <li> Total Number of Topics: <strong> 10</strong></li>
              <li> Total Number of Categories: <strong> 5</strong></li>
            </ul>
<?php include('includes/footer.php') ?>
      
