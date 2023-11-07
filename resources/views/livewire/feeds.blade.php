<div>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left Menu (Conditional)</title>
    <style>
      /* Add this CSS to your stylesheet or style tag */
      /* Container styles */
      .left-menu {
        width: 150px;
        background-color: #fff;
        padding-right: 30px;
        border-right: 1px solid #ccc;
        /* Add a vertical line to the right of the left menu */
      }

      /* Content styles */
      .content {
        padding: 20px;
      }

      #hidden-content {
        display: none;
        /* Initially hide the content */
      }

      .top-menu {
        width: 600px;

        background-color: #fff;
        padding-right: 30px;
        margin-bottom: 120px;
        /* Add a vertical line to the right of the left menu */
      }

      /* CSS for the like button */
      .like-button {
        display: flex;
        align-items: center;
        cursor: pointer;
        user-select: none;
      }

      .like-button .thumb-icon {
        margin-right: 5px;
        font-size: 16px;
      }

      .links:hover {
        color: #58DCE4;
        text-decoration: underline;
      }

      .comment-icon {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        tab-size: 4;
        -webkit-text-size-adjust: 100%;
        font-stretch: normal;
        letter-spacing: normal;
        text-align: left;
        color: #3b4452;
        visibility: inherit;
        --tw-bg-opacity: 1;
        --tw-border-opacity: 1;
        box-sizing: border-box;
        border: 0 solid;
        --tw-shadow: 0 0 transparent;
        --tw-ring-inset: var(--tw-empty, );
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 transparent;
        --tw-ring-shadow: 0 0 transparent;
        cursor: pointer;
        font-size: 1.25rem;
        margin-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-weight: 400;
        font-style: normal;
        text-decoration: inherit;
        -webkit-font-smoothing: antialiased;
        font-family: Greytip;
        display: inline;
        width: auto;
        height: auto;
        line-height: normal;
        vertical-align: initial;
        background-image: none;
        background-position: 0 0;
        background-repeat: repeat;
        margin-top: 0;
      }

      /* Apply the CSS styles for the comment count text */
      .comment-count {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        tab-size: 4;
        -webkit-text-size-adjust: 100%;
        font-family: Open Sans, sans-serif;
        font-weight: 400;
        text-align: left;
        box-sizing: border-box;
        border: 0 solid;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 transparent;
        --tw-ring-shadow: 0 0 transparent;
        border-radius: .25rem;
        cursor: pointer;
        font-size: .75rem;
        line-height: 1rem;
        padding: 5px;
        --tw-text-opacity: 1;
        color: rgba(163, 179, 200, var(--tw-text-opacity));
      }

      .comment-icon {
        cursor: pointer;
      }

      .comment-box {
        display: none;
      }

      .comments {
        margin-top: 10px;
      }

      .horizontal-menu {
        display: flex;
        margin-top: 20px;
        background: white;
        padding: 10px;
      }

      .menu-item {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        text-align: center;
        font-size: 14px;
        border-radius: 5px;
        font-family: 'Open Sans', sans-serif;
        background: #f7f7f7;
        margin-right: 10px;
        text-decoration: none;
        color: #333;
        transition: background 0.3s, color 0.3s;
      }

      .menu-item:hover {
        background: blue;
        color: white;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <!-- Left Menu and Content (Conditional) -->
      <div class="left-menu">
        <h3>Feeds</h3>
        <!-- Add your menu items here -->
      </div>

      <!-- Content Area -->
      <div class="content" style="margin-top: -20px">
        <div class="horizontal-menu" style="display: flex; margin-top: 30px; background: white; padding: 10px;height:60px">

          <div class="menu-item">
            <b class="links" style="font-size: 14px; font-family: 'Open Sans', sans-serif;">
              Groups
            </b>
          </div>

          <a class="menu-item" href="/Feeds">
            All Feeds
          </a>

          <a class="menu-item" href="/everyone">
            Every One
          </a>

          <a class="menu-item" href="/events">
            Events
          </a>

          <a class="menu-item" href="/company" style="font-size:12px">
            Company News
          </a>

          <a class="menu-item" href="/appreciation">
            Appreciation
          </a>

          <a class="menu-item" href="/buy-sell-rent">
            Buy/Sell/Rent
          </a>

        </div>
      </div>

     
          <div class="top-menu" style="background-color: #f0f0f0;">
            <div class="B" style="width: 750px; height: 70px; border-top: 1px solid #E0DDDD; border-bottom: 1px solid #E0DDDD; background-color: #FFFFFF;font-size: 14px; font-family: Open Sans, sans-serif;padding:10px;margin-left:40px">
              <b> All Feeds</b>
              <p>Groups</p>
            </div>


            <p style="text-align: center; font-size: 14px; font-family: Open Sans, sans-serif;margin-top:5px">sort: <strong style="font-weight: bold;">New posts</strong></p>
            <div style="display: flex; width:800px">
              <div class="F" style="background-color: white; width: 500px; height: 350px; border-radius: 5px; border: 1px solid #CFCACA; margin-left: 30px; color: #3b4452; padding-bottom: 40px">
                <!-- Upcoming Holidays List -->
                <div style="display: flex;">

                  <div class="column">
                    <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/2e383f1a48f91dbea7e6" alt="Image Description" style="height: 100px; width: 160px; margin-top: 5px; margin-left: 40px;">
                    <div style="color: #677A8E; margin-left: 60px; font-size: 14px; font-family: Open Sans, sans-serif; font-weight: 100px;">Group Events</div>
                  </div>
                  <div class="c" style="font-size: 13px; font-weight: normal; margin-left: 170px; font-family: Open Sans, sans-serif; margin-top: 40px; font-weight: 100px; color: #9E9696;">28 October 2023</div>
                </div>
                <div style="display: flex;">
                  <img src="https://i.pinimg.com/originals/20/7f/22/207f229952dc673e1e88be7134436497.jpg" alt="Image Description" style="height: 160px; width: 160px; margin-left: 40px;">
                  <div style="display: flex; flex-direction: column; margin-left: 20px;">
                    <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; margin-top: 10px; font-weight: 100; color: #677A8E;">Happy Birthday Archana, Have a great year ahead!</p>
                    <div style="display: flex; align-items: center;">
                      <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description" style="height: 25px; width: 20px;">
                      <p style="margin-left: 10px; font-size: 14px; font-family: 'Open Sans', sans-serif; color: #677A8E; margin-top: 10px;">Happy Birthday Archana!🎂</p>
                    </div>
                  </div>
                </div>

                <confirmation-modal class="confirmation-modal">
                  <gt-popup-modal label="modal" size="sm" class="hydrated">
                    <div class="body-content">
                        <div slot="modal-body"><!-- Content for modal body --></div>
                    </div>
                    <div slot="modal-footer">
                      <div class="flex justify-end">
                        <gt-button shade="secondary" name="Cancel" class="mr-2x hydrated"></gt-button>
                        <gt-button shade="primary" name="Confirm" class="hydrated"></gt-button>
                      </div>
                    </div>
                </gt-popup-modal>
            </confirmation-modal>
            <!-- Like Button -->
            <div style="display: flex;">
                <div class="like-button">
                    <i class="thumb-icon" style="margin-left: 20px;">👍</i>
                    <span class="like-count">0 Likes</span>
                </div>
                <div class ="comment-icon">
                    <i class="comment-icon" style="margin-left: 40px; margin-top: 20px;">💬</i>
                    <span class="comment-count">0 Comments</span>
                </div>
                <div class="comment-box">
                    <textarea id="comment-input" placeholder="Add your comment"></textarea>
                  </div>
                </div>
              </div>
              <div class="column" style="background-color: white; width: 200px; height: 300px;margin-left:10px;border-radius:10px;border:1px solid #A89F9F;margin-top:20px">
                <div style="color: #677A8E; margin-left: 20px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                  HIGHLIGHTS
                </div>
                <div class="row">
                  <img src="https://th.bing.com/th/id/OIP.quEUmw5-XtH8c1AhTN9dYQHaFh?pid=ImgDet&w=120&h=120&c=7&dpr=1.5&rs=1" style="height: 100px; width: 150px; margin-top: 10px; margin-left: 40px;">
                  <p style="color: black; margin-left: 40px;font-weight:normal; font-size: 13px; font-family: Open Sans, sans-serif;margin-top:20px">Keep looking here! :)</p>
                  <p style="color: #677A8E; margin-left: 10px; font-size: 10px; font-family: Open Sans, sans-serif;">We're rolling out Highlights help you stay tuned with events, birthdays, posts, and much more.</p>
                  <div>
                  </div>


                </div>
              </div>
            </div>
            <div class="F" style="background-color: white; width: 500px; height: 350px; border-radius: 5px; border: 1px solid #CFCACA; margin-left: 30px; color: #3b4452; margin-top: 20px">
              <!-- Upcoming Holidays List -->
              <div style="display: flex;">

                <div class="column">
                  <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/2e383f1a48f91dbea7e6" alt="Image Description" style="height: 100px; width: 160px; margin-top: 5px; margin-left: 40px;">
                  <div style="color: #677A8E; margin-left: 60px; font-size: 14px; font-family: Open Sans, sans-serif; font-weight: 100px;">Group Events</div>
                </div>
                <div class="c" style="font-size: 13px; font-weight: normal; margin-left: 170px; font-family: Open Sans, sans-serif; margin-top: 40px; font-weight: 100px; color: #9E9696;">23 Aug 2023</div>
              </div>
              <div style="display: flex;">
                <img src="https://cdn1.vectorstock.com/i/thumb-large/48/00/set-images-young-people-listening-to-music-vector-31034800.jpg" alt="Image Description" style="height: 160px; width: 160px; margin-left: 40px;">
                <div style="display: flex; flex-direction: column; margin-left: 20px;">
                  <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; margin-top: 10px; font-weight: 100; color: #677A8E;">Chirag Palagrahara has joined us in the company on 07 Sep 2023,
                    Please join us in welcoming our newest team member.
                  </p>
                  <div style="display: flex; align-items: center;">
                    <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description" style="height: 25px; width: 20px;">
                    <p style="margin-left: 10px; font-size: 14px;font-weight:normal;margin-top:10px; font-family: 'Open Sans', sans-serif; color: black; margin-top: 10px;">Chirag Palagrahara Just Joined Us!
                    </p>
                  </div>
                </div>
              </div>

              <confirmation-modal class="confirmation-modal">
                <gt-popup-modal label="modal" size="sm" class="hydrated">
                  <div class="body-content">
                    <div slot="modal-body"><!-- Content for modal body --></div>
                  </div>
                  <div slot="modal-footer">
                    <div class="flex justify-end">
                      <gt-button shade="secondary" name="Cancel" class="mr-2x hydrated"></gt-button>
                      <gt-button shade="primary" name="Confirm" class="hydrated"></gt-button>
                    </div>
                  </div>
                </gt-popup-modal>
              </confirmation-modal>
              <!-- Like Button -->
              <div style="display: flex;">
                <div class="like-button">
                  <i class="thumb-icon" style="margin-left: 20px;">👍</i>
                  <span class="like-count">0 Likes</span>
                </div>
                <div class="comment-icon">
                  <i class="comment-icon" style="margin-left: 40px; margin-top: 20px;">💬</i>
                  <span class="comment-count">0 Comments</span>
                </div>
                <div class="comment-box">
                  <textarea id="comment-input" placeholder="Add your comment"></textarea>
                </div>
              </div>
            </div>
            <div class="F" style="background-color: white; width: 500px; height: 350px; border-radius: 5px; border: 1px solid #CFCACA; margin-top: 30px; color: #3b4452; margin-left: 30px">
              <!-- Upcoming Holidays List -->
              <div style="display: flex;">

                <div class="column">
                  <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/2e383f1a48f91dbea7e6" alt="Image Description" style="height: 100px; width: 160px; margin-top: 5px; margin-left: 40px;">
                  <div style="color: #677A8E; margin-left: 60px; font-size: 14px; font-family: Open Sans, sans-serif; font-weight: 100px;">Group Events</div>
                </div>
                <div class="c" style="font-size: 13px; font-weight: normal; margin-left: 170px; font-family: Open Sans, sans-serif; margin-top: 40px; font-weight: 100px; color: #9E9696;">23 Aug 2023</div>
              </div>
              <div style="display: flex;">
                <img src="https://cdn1.vectorstock.com/i/thumb-large/48/00/set-images-young-people-listening-to-music-vector-31034800.jpg" alt="Image Description" style="height: 160px; width: 160px; margin-left: 40px;">
                <div style="display: flex; flex-direction: column; margin-left: 20px;">
                  <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; margin-top: 10px; font-weight: 100; color: #677A8E;">Chirag Palagrahara has joined us in the company on 07 Sep 2023,
                    Please join us in welcoming our newest team member.
                  </p>
                  <div style="display: flex; align-items: center;">
                    <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description" style="height: 25px; width: 20px;">
                    <p style="margin-left: 10px; font-size: 14px;font-weight:normal;margin-top:10px; font-family: 'Open Sans', sans-serif; color: black; margin-top: 10px;">Chirag Palagrahara Just Joined Us!
                    </p>
                  </div>
                </div>
              </div>

              <confirmation-modal class="confirmation-modal">
                <gt-popup-modal label="modal" size="sm" class="hydrated">
                  <div class="body-content">
                    <div slot="modal-body"><!-- Content for modal body --></div>
                  </div>
                  <div slot="modal-footer">
                    <div class="flex justify-end">
                      <gt-button shade="secondary" name="Cancel" class="mr-2x hydrated"></gt-button>
                      <gt-button shade="primary" name="Confirm" class="hydrated"></gt-button>
                    </div>
                  </div>
                </gt-popup-modal>
              </confirmation-modal>
              <!-- Like Button -->
              <div style="display: flex;">
                <div class="like-button">
                  <i class="thumb-icon" style="margin-left: 20px;">👍</i>
                  <span class="like-count">0 Likes</span>
                </div>
                <div class="comment-icon">
                  <i class="comment-icon" style="margin-left: 40px; margin-top: 20px;">💬</i>
                  <span class="comment-count">0 Comments</span>
                </div>
                <div class="comment-box">
                  <textarea id="comment-input" placeholder="Add your comment"></textarea>
                </div>
              </div>


            <script>
              // JavaScript to toggle like/dislike and update the count
              const likeButton = document.querySelector('.like-button');
              const likeCount = likeButton.querySelector('.like-count');

              let likes = 0;
              let isLiked = false;

              likeButton.addEventListener('click', () => {
                if (isLiked) {
                  likes--;
                  likeCount.textContent = `${likes} Likes`;
                } else {
                  likes++;
                  likeCount.textContent = `${likes} Likes`;
                }
                isLiked = !isLiked;
              });
            </script>

            <script>
              // JavaScript to toggle comment box and increment comment count
              const commentIcon = document.querySelector('.comment-icon');
              const commentBox = document.querySelector('.comment-box');
              const commentCount = commentIcon.querySelector('.comment-count');
              const commentInput = document.getElementById('comment-input');
              const commentsContainer = document.querySelector('.comments');

              let comments = 0;

              commentIcon.addEventListener('click', () => {
                commentBox.style.display = 'block';
              });

              commentInput.addEventListener('input', () => {
                // Count lines in the textarea as comments
                const lines = commentInput.value.split('\n').length;
                comments = lines;
                updateCommentCount();
              });

              commentInput.addEventListener('blur', () => {
                // Clear and hide the comment box when it loses focus
                commentInput.value = '';
                commentBox.style.display = 'none';
                // Display the comments
                displayComments();
              });

              function updateCommentCount() {
                commentCount.textContent = `${comments} Comment${comments !== 1 ? 's' : ''}`;
              }

              function displayComments() {
                commentsContainer.innerHTML = '';
                for (let i = 0; i < comments; i++) {
                  const commentElement = document.createElement('div');
                  commentElement.classList.add('comment');
                  commentElement.textContent = `Comment ${i + 1}`;
                  commentsContainer.appendChild(commentElement);
                }
              }
            </script>
          </div>
  </body>

  </html>
</div>