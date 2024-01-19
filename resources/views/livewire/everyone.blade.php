<div >

<div class="p-4 flex justify-start items-center bg-white rounded-md h-28 mb-1.5x border-1 border-secondary-100">
    <div class="flex flex-row" style="width: 226px; min-width: 226px;">
    <div class="avatar">
  <i class="fas fa-user"></i>
</div>



        <!-- Placeholder for avatar -->
        <div class="flex flex-col ml-4">
        <div class="text-base font-semibold text-secondary-500 leading-4" style="width:150px">Hey A,</div>
       
        <!-- Greeting text -->
        <div class="w-28 text-xs font-normal text-secondary-500 leading-4 block" style="width:150px">Ready to dive in ?</div>
        <!-- Subtitle text -->
    </div>
       
    </div>
    
    <div class="mx-auto flex justify-center gap-1.5x w-full" style="width: calc(100% - 230px); margin-right: 17rem;">
        <!-- Placeholder -->
    </div>
</div>
<div style="display:flex" >
<div class="container" style="width:200px;background:white;border:1px solid silver;border-radius:5px;height:600px;margin-top:20px;margin-left:10px;overflow-y:auto;max-height:400px;max-width:200px;">
<b style="display: block; margin-top: 10px;">Filters</b>

<hr style="width: 180px; background: grey;margin-top:5px">
<gt-menu-item _ngcontent-fon-c558="" class="ng-star-inserted hydrated">
    <span _ngcontent-fon-c558="" class="flex items-center">
        <input _ngcontent-fon-c558="" type="radio" class="appearance-none default:ring-2 indeterminate:border-secondary-300 hover:border-primary-400 radio-btn" name="activityType">
        <div _ngcontent-fon-c558="" class="flex items-center justify-center ml-2 rounded-full h-6 w-6 bg-salmon-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello salmon stroke-1" _ngcontent-fon-c558="" style="width: 1rem; height: 1rem;">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <rect x="7" y="7" width="3" height="9"></rect>
                <rect x="14" y="7" width="3" height="5"></rect>
            </svg>
        </div>
        <span _ngcontent-fon-c558="" class="ml-2 text-xs font-normal text-secondary-500">All Activities</span>
    </span>
</gt-menu-item>
<gt-menu-item _ngcontent-fon-c558="" class="ng-star-inserted hydrated">
    <span _ngcontent-fon-c558="" class="flex items-center">
        <input _ngcontent-fon-c558="" type="radio" class="appearance-none default:ring-2 indeterminate:border-secondary-300 hover:border-primary-400 radio-btn" name="activityType">
        <div _ngcontent-fon-c558="" class="flex items-center justify-center ml-2 rounded-full h-6 w-6 bg-purple-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file purple stroke-1" _ngcontent-fon-c558="" style="width: 1rem; height: 1rem;">
                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                <polyline points="13 2 13 9 20 9"></polyline>
            </svg>
        </div>
        <span _ngcontent-fon-c558="" class="ml-2 text-xs font-normal text-secondary-500">Posts</span>
    </span>
</gt-menu-item>

<hr style="width: 180px; background:grey;margin-top:5px">

<div class="search-bar">
  <input type="text" placeholder="Search..." />
  <button type="submit">Search</button>
</div>

<div class="w-full visible mt-1x">
    <button type="button" class="button" onclick="toggleDropdown('dropdownContent1', 'arrowSvg1')">
        <span class="text-xs font-semibold leading-4 text-secondary-500" style="color:black" >Groups</span>
        <span class="arrow-icon" id="arrowIcon1" style="color:black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg1">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </span>
    </button>
    <div class="dropdown-content" id="dropdownContent1" style="display: none;">
        <ul style="font-size: 12px;">
      
 
          <a class="menu-item" href="/Feeds" style="margin-top:5px">
            All Feeds
          </a>
          <br>
 
          <a class="menu-item" href="/everyone" style="margin-top:5px" >
            Every One
          </a>
          <br>
          <a class="menu-item" href="/Feeds" style="margin-top:5px">
            Events
          </a>
 
          <a class="menu-item" href="/everyone" style="font-size:12px;margin-top:5px">
            Company News
          </a>
 
          <a class="menu-item" href="/everyone" style="margin-top:5px">
            Appreciation
          </a>
 
          <a class="menu-item" href="/everyone" style="margin-top:5px">
            Buy/Sell/Rent
          </a>
          
        </ul>
    </div>
</div>

<div class="w-full visible mt-1x">
    <button type="button" class="button" onclick="toggleDropdown('dropdownContent2', 'arrowSvg2')">
        <span class="text-xs font-semibold leading-4 text-secondary-500"  style="overflow-y:auto;max-height:200px;color:black">Location</span>
        <span class="arrow-icon" id="arrowIcon2" style="color:black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg2">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </span>
    </button>
    <div class="dropdown-content" id="dropdownContent2" style="display: none;">
        <ul style="font-size: 12px;margin-top:3px">
            <p>Guntur</p>
            <p>Hyderabad</p>
            <p>Doddaballapur</p>
            <p>Tirupati</p>
            <p>Vijayavada</p>
            <p>Trivandrum</p>
            <p>Adilabad</p>
        </ul>
    </div>
</div>
<div class="w-full visible mt-1x">
    <button type="button" class="button" onclick="toggleDropdown('dropdownContent3', 'arrowSvg3')">
        <span class="text-xs font-semibold leading-4 text-secondary-500"  style="overflow-y:auto;max-height:200px;color:black">Depatment</span>
        <span class="arrow-icon" id="arrowIcon3" style="color:black">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg2">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </span>
    </button>
    <div class="dropdown-content" id="dropdownContent3" style="display: none;">
        <ul style="font-size: 12px;margin-top:3px">
            <p>HR</p>
            <p>Operations</p>
            <p>Operations Team</p>
            <p>Product</p>
            <p>Production Suppport</p>
            <p>QA</p>
            <p>Sales Team</p>
            <p>Technology</p>
            <p>Testing Team</p>
        </ul>
    </div>
</div>

 

</div>
 
   
 
      <div class="menu"  style="width:500px">
       <div class="container" style="background:white;border:1px solid silver;border-radius:5px;height:250px;width:400px;margin-top:10px;margin-left:-120px;">
 <image src="https://th.bing.com/th/id/OIP.38ZCPi6lui1g69EAvVZCjQAAAA?w=238&h=250&rs=1&pid=ImgDetMain" style="height:150px;width:250px;margin-left:30px">
 
 <br><b style="font-size:14px;margin-left:70px;margin-top:30px">It feels empty here!</b>
 <br>
 <button style="background:blue;width:80px;height:30px;border:1px solid grey;border-radius:5px;color:white;margin-top:20px;margin-left:100px" wire:click="addFeeds">Create Post</button>
 <!-- Begin the form outside the .form-group div -->
 @if($showFeedsDialog)
    <div class="modal" tabindex="-1" role="dialog" style="display: block;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Creating a Post</h5>
                   
                    <button wire:click="closeFeeds" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form wire:submit.prevent="submit">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="category">You are posting in:</label>
                            <select wire:model="category" class="form-select" id="category">
                                <option value="appreciations">Appreciations</option>
                                <option value="buy_sell_rent">Buy/Sell/Rent</option>
                                <option value="company_news">Company News</option>
                                <option value="events">Events</option>
                                <option value="everyone">Everyone</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Write something here:</label>
                            <textarea wire:model="description" class="form-control" id="content" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="attachment">Upload Attachment:</label>
                            <input wire:model="attachment" type="file" id="attachment" class="form-control-file">
                            @if ($attachment)
                                <p>File: {{ $attachment->getClientOriginalName() }}</p>
                            @endif
                            @if ($message)
                                <p>{{ $message }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Post</button>
                        <button wire:click="closeFeeds" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
@endif
    </div>
@foreach($posts as $post)
            <div class="birthday-card" style="margin-left:10px;margin-top:30px">
              <!-- Upcoming Birthdays List -->
              <div class="F" style="background-color: white; width: 400px; height: 250px; border-radius: 5px; border: 1px solid #CFCACA; margin-left: -130px; color: #3b4452; margin-top: 20px">
                <div style="display: flex;">
                  <div class="column" >
                    <div class="div" style="margin-left:20px;margin-top:10px;width:100px">
                    @livewire('company-logo')
                    </div>
                    
                    <div style="color: #677A8E; margin-left: 60px; font-size: 14px; font-family: Open Sans, sans-serif; font-weight: 100px;margin-top:20px"> </div>
                  </div>
                  <div class="c" style="font-size: 13px; font-weight: normal; margin-left: 150px; font-family: Open Sans, sans-serif; margin-top: 40px; font-weight: 100px; color: #9E9696;margin-top:20px">
                  {{ $post->category }}
                  </div>
                </div>
                <div style="display: flex;">
                <img src="{{ Storage::url($post->attachment) }}" alt="Post Image" style="height:70px;width:100px;margin-left:30px">



                  <div style="display: flex; flex-direction: column; margin-left: 70px;">
                    <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; margin-top: 10px; font-weight: 100; color: #677A8E;">
                    {{ $post->description }}
                    </p>
                    <div style="display: flex; align-items: center;">
     
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
                        <gt-button shade="primary" name ="Confirm" class="hydrated"></gt-button>
                      </div>
                    </div>
                  </gt-popup-modal>
                </confirmation-modal>
                <!-- Like Button -->
                <div style="display: flex;margin-top:40px">
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
            </div>
          
            @endforeach
 
     

    </div>
 



    <script>
    function formatText(style) {
        const textArea = document.getElementById('textArea');
        const start = textArea.selectionStart;
        const end = textArea.selectionEnd;
        const selectedText = textArea.value.substring(start, end);
        const replacement = style === 'bold' ? `<b>${selectedText}</b>` : `<i>${selectedText}</i>`;
        const newText = textArea.value.substring(0, start) + replacement + textArea.value.substring(end);
        textArea.value = newText;
    }
</script>
 

 
            <script>
              // JavaScript to toggle like/dislike and update the count
           // Get all cards
const cards = document.querySelectorAll('.card');

cards.forEach((card, index) => {
  let likeCount = 0;
  let commentCount = 0;

  const thumbIcon = card.querySelector('.thumb-icon');
  const likeCountSpan = card.querySelector('.like-count');

  thumbIcon.addEventListener('click', function() {
    likeCount++;
    likeCountSpan.textContent = likeCount + (likeCount === 1 ? ' Like' : ' Likes');

    // Simulate backend update (AJAX request can be used here to update the server)
    // This example only updates the frontend without actual server interaction
    // For server update, you'd need to send an AJAX request to update the database
    // Example: Send an AJAX request to a PHP endpoint passing the updated likeCount and the post ID
    // updateLikesOnServer(likeCount, postId);
  });

  // Other similar event listeners for comment section
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
            <script>
// JavaScript function to toggle arrow icon visibility
// JavaScript function to toggle arrow icon and dropdown content visibility
// JavaScript function to toggle dropdown content visibility and arrow rotation
function toggleDropdown(contentId, arrowId) {
    var dropdownContent = document.getElementById(contentId);
    var arrowSvg = document.getElementById(arrowId);

    if (dropdownContent.style.display === 'none') {
        dropdownContent.style.display = 'block';
        arrowSvg.style.transform = 'rotate(180deg)';
    } else {
        dropdownContent.style.display = 'none';
        arrowSvg.style.transform = 'rotate(0deg)';
    }
}





</script>
          </div>
  </body>
 
  </html>
</div>