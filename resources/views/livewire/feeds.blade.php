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
            border-right: 1px solid #ccc; /* Add a vertical line to the right of the left menu */
        }

        /* Content styles */
        .content {
            padding: 20px;
        }
        #hidden-content {
            display: none; /* Initially hide the content */
        }
        .top-menu {
            width: 600px;
            
            background-color: #fff;
            padding-right: 30px;
            margin-bottom:120px;
       /* Add a vertical line to the right of the left menu */
        }
        .confirmation-modal {
      /* Add your styles here */
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
      --tw-ring-inset: var(--tw-empty,);
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgba(59,130,246,0.5);
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
      font-style: normal;
      font-stretch: normal;
      letter-spacing: normal;
      text-align: left;
      visibility: inherit;
      --tw-bg-opacity: 1;
      --tw-border-opacity: 1;
      box-sizing: border-box;
      border: 0 solid;
      --tw-shadow: 0 0 transparent;
      --tw-ring-inset: var(--tw-empty,);
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgba(59,130,246,0.5);
      --tw-ring-offset-shadow: 0 0 transparent;
      --tw-ring-shadow: 0 0 transparent;
      border-radius: .25rem;
      cursor: pointer;
      font-size: .75rem;
      line-height: 1rem;
      padding: 5px;
      --tw-text-opacity: 1;
      color: rgba(163,179,200,var(--tw-text-opacity));
    }

    </style>
</head>
<body>
<div class="container">
        <!-- Left Menu and Content (Conditional) -->
        <div class="left-menu">
        <h2>Menu</h2>
        <!-- Add your menu items here -->
    </div>

    <!-- Content Area -->
    <div class="content">
        <div style="display: flex; align-items: center;">
            
        <div class="left-menu" style="height:400px;margin-bottom:170px;background-color: #f0f0f0;">
            <div>
            <p style="margin-top: 20px; font-size: 16px;  font-family: Open Sans, sans-serif;">
                 Groups
    </p>
                <p style="margin-top: 20px; font-size: 16px;  font-family: Open Sans, sans-serif;">
                   All Feeds
    </p>
    <p style="margin-top: 20px; font-size: 16px;  font-family: Open Sans, sans-serif;">
                  Everone
    </p>
    <p style="margin-top: 20px; font-size: 16px;  font-family: Open Sans, sans-serif;">
    Events
    </p>
    <p style="margin-top: 20px; font-size: 16px;  font-family: Open Sans, sans-serif;">
                   Company News
    </p>
    <p style="margin-top: 20px; font-size: 16px;  font-family: Open Sans, sans-serif;">
                  Appreciation
    </p>
    <p style="margin-top: 20px; font-size: 16px;  font-family: Open Sans, sans-serif;">
                Buy/Sell/Rent
    </p>
    
    </div>
    </div>
    <div class="top-menu" style="background-color: #f0f0f0;"  >
    <div class="B" style="width: auto; height: 50px; border: 1px solid #E0DDDD; border-radius: 5px 5px 0px 0px; background-color: #FFFFFF;font-size: 14px; font-family: Open Sans, sans-serif;padding:10px;">
   <b> All Feeds</b>
    <p>Groups</p>
</div>

        
    <p style="text-align: center; font-size: 14px; font-family: Open Sans, sans-serif;">sort: <strong style="font-weight: bold;">New posts</strong></p>
    <div style="background-color:white;width: 500px; height: 350px; border-radius: 5px; border: 1px solid #CFCACA;margin-left:70px;color:#3b4452">
        
     
        <!-- Upcoming Holidays List -->
        <div style="display:flex" >
       <div class="column">
        <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/2e383f1a48f91dbea7e6" alt="Image Description" style="height: 100px; width: 160px; margin-top: 1px; margin-left: 40px;">
        <div style="color: #677A8E; margin-left: 60px; font-size: 14px; font-family: Open Sans, sans-serif; font-weight:100px;" >Group Events</div>
    </div>
       
         

      <div class="c"style="font-size: 13px; font-weight: normal;margin-left: 200px;font-family: Open Sans, sans-serif;margin-top:40px;font-weight:100px;color:#9E9696">  23 Aug 2023
            
    </div>
        </div>
        <div style="display: flex;">
    <img src="https://i.pinimg.com/originals/20/7f/22/207f229952dc673e1e88be7134436497.jpg" alt="Image Description" style="height: 160px; width: 160px; margin-left: 40px;">
    <div style="display: flex; flex-direction: column; margin-left: 20px;">
    <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; margin-top: 10px; font-weight: 100; color: #677A8E;">Happy Birthday Archana, Have a great year ahead!</p>
        <div style="display: flex; align-items: center;">
            <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description" style="height: 25px; width: 20px;">
            <p style="margin-left: 10px;font-size: 14px; font-family: 'Open Sans', sans-serif;color: #677A8E;">Happy Birthday Archana!🎂</p>
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
  <div class="like-button">
    <i class="thumb-icon" style="margin-left:30px;margin-top:20px">👍</i>
    <span class="like-count" style="margin-left:30px;margin-top:20px">0 Likes</span>
  </div>

  <script>
    // JavaScript to increment the like count when the thumb icon is clicked
    const likeButton = document.querySelector('.like-button');
    const likeCount = likeButton.querySelector('.like-count');
    let likes = 0;

    likeButton.addEventListener('click', () => {
      likes++;
      likeCount.textContent = `${likes} Likes`;
    });
  </script>

    
    </div>
</body>
</html>
</div>