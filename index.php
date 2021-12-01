<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bubble-chat.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>Hello, world!</title>
</head>

<body>

  <div class="content-wrapper">
    <div class="list-friend-segment">
      <div class="sidebar-header">
        <div class="profile-wrapper">
          <div class="img-profile">
            <img src="./img/profile.jpg" alt="" class="profile-pict">
          </div>
          <div class="action-wrapper">
            <i class="fas fa-circle-notch"></i>
            <i class="fas fa-comment-dots"></i>
            <i class="fas fa-ellipsis-v"></i>
          </div>
        </div>
        <div class="search-wrapper">
          <div class="form-search">
            <label for=""><i class="fas fa-search"></i></label>
            <input type="text" class="round-input" placeholder="cari atau mulai chat baru">
          </div>
        </div>
      </div>
      <div class="list-friend">
        <?php for ($i = 1; $i < 20; $i++) : ?>
          <div class="friend-wrapper">
            <div class="friend-img">
              <img src="./img/profile.jpg" alt="" class="profile-pict-lg">
            </div>
            <div class="friend-chat">
              <div class="name-wrapper">
                <h6 class="p-0 m-0">ince samsul</h6>
                <p class="p-0 m-0 waktu-chat-masuk">15.26</p>
              </div>
              <div class=" chat-wrapper">
                <p class="p-0 m-0 text-small chat-terbaru">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, perspiciatis.</p>
              </div>
            </div>
          </div>
        <?php endfor ?>
      </div>
    </div>
    <div class="chat-segment">
      <div class="sidebar-header no-border fixed ">
        <div class="profile-wrapper">
          <div class="img-profile">
            <img src="./img/profile.jpg" alt="" class="profile-pict">
            <span class="p-3">Zulkarnain</span>
          </div>
          <div class="action-wrapper">
            <i></i>
            <i></i>
            <i class="fas fa-search"></i>
            <i class="fas fa-ellipsis-v"></i>
          </div>
        </div>
      </div>
      <div class="chat-content">
        <div class="talk-bubble tri-right round left-top left">
          <div class="talktext">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam praesentium, deserunt aliquam necessitatibus a aperiam in, atque officiis autem temporibus dolorem excepturi ab possimus nam eveniet voluptas mollitia minus.</p>
          </div>
        </div>
        <div class="talk-bubble tri-right round right-top right">
          <div class="talktext">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam praesentium, deserunt aliquam necessitatibus a aperiam in, atque officiis autem temporibus dolorem excepturi ab possimus nam eveniet voluptas mollitia minus.</p>
          </div>
        </div>
        <div class="talk-bubble tri-right round left-top left">
          <div class="talktext">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam praesentium, deserunt aliquam necessitatibus a aperiam in, atque officiis autem temporibus dolorem excepturi ab possimus nam eveniet voluptas mollitia minus.</p>
          </div>
        </div>
        <div class="talk-bubble tri-right round right-top right">
          <div class="talktext">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam praesentium, deserunt aliquam necessitatibus a aperiam in, atque officiis autem temporibus dolorem excepturi ab possimus nam eveniet voluptas mollitia minus.</p>
          </div>
        </div>
        <div class="talk-bubble tri-right round left-top left">
          <div class="talktext">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam praesentium, deserunt aliquam necessitatibus a aperiam in, atque officiis autem temporibus dolorem excepturi ab possimus nam eveniet voluptas mollitia minus.</p>
          </div>
        </div>
        <div class="talk-bubble tri-right round right-top right">
          <div class="talktext">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam praesentium, deserunt aliquam necessitatibus a aperiam in, atque officiis autem temporibus dolorem excepturi ab possimus nam eveniet voluptas mollitia minus.</p>
          </div>
        </div>
        <div class="talk-bubble tri-right round left-top left">
          <div class="talktext">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam praesentium, deserunt aliquam necessitatibus a aperiam in, atque officiis autem temporibus dolorem excepturi ab possimus nam eveniet voluptas mollitia minus.</p>
          </div>
        </div>
        <div class="talk-bubble tri-right round right-top right">
          <div class="talktext">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam praesentium, deserunt aliquam necessitatibus a aperiam in, atque officiis autem temporibus dolorem excepturi ab possimus nam eveniet voluptas mollitia minus.</p>
          </div>
        </div>
        <div class="talk-bubble tri-right round left-top left">
          <div class="talktext">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam praesentium, deserunt aliquam necessitatibus a aperiam in, atque officiis autem temporibus dolorem excepturi ab possimus nam eveniet voluptas mollitia minus.</p>
          </div>
        </div>
        <div class="talk-bubble tri-right round right-top right">
          <div class="talktext">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsam praesentium, deserunt aliquam necessitatibus a aperiam in, atque officiis autem temporibus dolorem excepturi ab possimus nam eveniet voluptas mollitia minus.</p>
          </div>
        </div>
      </div>
      <div class="chat-input-wrapper ">
        <i class="far fa-laugh-squint"></i>
        <i class="fas fa-paperclip"></i>
        <input type="text" class="round-input" placeholder="ketik pesan">
        <i class="fas fa-microphone"></i>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.content-wrapper').css('margin', '0px auto')
    })
    $(window).resize(function() {
      let windowSize = $(window).width();
      if (windowSize > 1364.2) {
        $('.content-wrapper').css('margin', '10px auto')
      } else {
        $('.content-wrapper').css('margin', '0px auto')
      }
    }).resize();
  </script>
</body>

</html>