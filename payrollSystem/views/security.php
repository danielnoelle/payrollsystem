<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../resources/components/head.html'); ?>
    <link rel="stylesheet" href="../resources/styles/security.css">
    <title>History</title>
</head>

<body>
    <div class="container">
        <div class="video-bg">
            <video src="../resources/videos/bg.mp4" autoplay muted loop></video>
        </div>
        <div class="content">
            <div class="top">
                <nav>
                    <div class="left-nav">
                        <div class="logo">
                            <img src="../resources/images/logo-name.png">
                        </div>
                    </div>
                    <div class="right-nav">
                        <div class="user-fullname">
                            <h2>Nigga Denver</h2>
                        </div>
                        <div class="profile-icon">
                            <img src="../resources/images/logo-icon.png">
                        </div>
                    </div>
                </nav>
            </div>
            <div class="bottom">
                <div class="left-pane">
                    <div class="categories">
                        <div class="category">
                            <div class="category-title">
                                <h3>General</h3>
                            </div>
                            <div class="category-items">
                                <a href="overview.php" class="active"><i class="fa-light fa-grid"></i>Overview</a>
                                <a href="manage.php"><i class="fa-regular fa-circle-dollar"></i>Payroll</a>
                                <a href="report.php"><i class="fa-light fa-user-group"></i>Employees</a>
                                <a href="history.php"><i class="fa-light fa-file-invoice"></i>Payroll History</a>
                            </div>
                        </div>
                        <div class="category">
                            <div class="category-title">
                                <h3>Others</h3>
                            </div>
                            <div class="category-items">
                                <a href="support.php"><i class="fa-regular fa-circle-info"></i>Support</a>
                                <a href="#"><i class="fa-regular fa-gear"></i>Settings</a>
                            </div>
                        </div>
                    </div>
                    <div class="profile">
                        <div class="profile-left">
                            <img src="../resources/images/logo-icon.png">
                        </div>
                        <div class="profile-center">
                            <h4 class="username">Nigga Dick</h4>
                            <p class="role">Administrator</p>
                        </div>
                        <div class="profile-right">
                            <i class="fa-light fa-circle-chevron-up"></i>
                        </div>
                    </div>
                </div>
            <div class="right-pane">
                <div class="dashboard-content">
                    <div class="content-section">   
                        <div class="content-section-title">
                            <span>Settings</span>
                        </div>
                        <div class="apps-card">
                            <div class="app-card">
                                <nav class="title-search-container">
                                    <ul>
                                        <li><a href="settings.php">Edit Profile</a></li>
                                        <li class="active"><a href="">Security</a></li>
                                    </ul>
                                </nav>
                                <div class="form-section">
                                    <div class="photo-frame">
                                        <img src="../resources/images/logo-icon.png" alt="Profile Picture" class="profile-picture">
                                    </div>
                                <form>
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" id="firstName" name="firstName">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" id="lastName" name="lastName">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="birthdate">Birth Date</label>
                                    <input type="date" id="birthdate" name="birthdate">
                                </div>
                                <div class="form-group">
                                    <label for="number">Number</label>
                                    <input type="text" id="number" name="number">
                                </div>
                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input type="text" id="street" name="street">
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" id="city" name="city">
                                </div>
                                <div class="form-group">
                                    <label for="province">Province</label>
                                    <input type="text" id="province" name="province">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" id="country" name="country">
                                </div>
                                <div class="button-container">
                                    <button type="submit">Save Changes</button>
                                </div>
                            </form>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script>
    var nav = $('nav');
var line = $('<div />').addClass('line');

line.appendTo(nav);

var active = nav.find('.active');
var pos = 0;
var wid = 0;

if(active.length) {
  pos = active.position().left;
  wid = active.width();
  line.css({
    left: pos,
    width: wid
  });
}

nav.find('ul li a').click(function(e) {
  e.preventDefault();
  if(!$(this).parent().hasClass('active') && !nav.hasClass('animate')) {
    
    nav.addClass('animate');

    var _this = $(this);

    nav.find('ul li').removeClass('active');

    var position = _this.parent().position();
    var width = _this.parent().width();

    if(position.left >= pos) {
      line.animate({
        width: ((position.left - pos) + width)
      }, 300, function() {
        line.animate({
          width: width,
          left: position.left
        }, 150, function() {
          nav.removeClass('animate');
        });
        _this.parent().addClass('active');
      });
    } else {
      line.animate({
        left: position.left,
        width: ((pos - position.left) + wid)
      }, 300, function() {
        line.animate({
          width: width
        }, 150, function() {
          nav.removeClass('animate');
        });
        _this.parent().addClass('active');
      });
    }

    pos = position.left;
    wid = width;
  }
});
</script>
</html>