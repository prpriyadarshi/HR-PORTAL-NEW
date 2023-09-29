<div>
    <style>
    .search-icon {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        color: #999;
        cursor: pointer;
    }

    .filter-button {
        margin-left: 10px;
    }
    </style>
    <div class="container">
        <div class="row" style="width:20%;">
            <div class="col"
                style="margin-left:10%;text-align:center;background-color: white;border-radius: 5px;margin-right:10px;padding:2px">
                <a style="text-decoration: none;font-size:12px" onclick="toggleDetails('starred')"
                    class="links">Starred</a></div>
            <div class="col" style="text-align:center;background-color: white;border-radius: 5px;padding:2px"><a
                    style="text-decoration: none;font-size:12px" onclick="toggleDetails('everyone')"
                    class="links">Everyone</a></div>
        </div>
        <div class="container" id="starred" style="display: none;">
            <div class="row" style="margin-top:15px;width:100%;">
                <div class="col-6"
                    style="width:350px;background-color: white;border-radius:5px;height:420px;margin-right:20px;padding:5px">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-search">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                    <input style="font-size:10px" type="text" class="form-control"
                                        placeholder="Search for Emp.Name or ID" aria-label="Search"
                                        aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="col-md-4" style="display: flex; align-items: center; justify-content: center;">
                                <button style="height: 20px; text-align: center; line-height: 9px;"
                                    class="btn btn-primary filter-button">Filter</button>
                            </div>


                        </div>
                        <div class="row" style="margin-top: 15px;font-size:13px;margin-left:40px">
                            Looks like you don't have any records
                        </div>
                    </div>
                </div>
                <div class="col-6"
                    style="width:500px;background-color: white;border-radius:5px;height:420px;padding:5px">
                    <img style="margin-top: 80px;margin-left:100px"
                        src="https://www.bing.com/images/blob?bcid=qCaXNolimiIGdQ" alt="">
                </div>
            </div>
        </div>


        <div class="container" id="everyone" style="display: none;">
            <div class="row" style="margin-top:15px;width:100%;">
                <div class="col-6"
                    style="width: 350px; background-color: white; border-radius: 5px; height: 420px; margin-right: 20px; padding: 5px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-search">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                    <input wire:model="searchTerm" style="font-size: 10px" type="text"
                                        class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search"
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-4" style="display: flex; align-items: center; justify-content: center;">
                                <button wire:click="filter" style="height: 20px; text-align: center; line-height: 9px;"
                                    class="btn btn-primary filter-button">Filter</button>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 15px; font-size: 13px;">
                            @foreach($peoples as $people)
                            <!-- Render each person here -->
                            <div class="container"
                                style="background-color: darkgrey; margin-right: 20px; padding: 5px; border-radius: 5px; margin-bottom: 10px;">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img class="profile-image" src="{{ $people->image }}" alt="Profile Image">
                                    </div>
                                    <div class="col">
                                        <h6 class="username" style="font-size: 12px; color: white;">{{ $people->name }}
                                        </h6>
                                    </div>
                                    <div class="col">
                                        <p class="mb-0" style="font-size: 12px; color: white;">(#{{ $people->emp_id }})
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-6"
                    style="width: 500px; background-color: white; border-radius: 5px; height: 420px; padding: 5px">
                    <div class="row">
                        <style>
                        .people-image {
                            width: 150px;
                            height: 150px;
                            object-fit: cover;
                            border-radius: 50%;
                        }
                        </style>

                        <div class="col" style="margin-top: 50px;">
                            <img class="people-image" src="{{ $peoples->image }}" alt="Profile Image">
                        </div>
                        <div class="col" style="margin-top: 50px;margin-right:80px">
                            <div>{{ $peoples->name }}</div>
                            <div>(#{{ $peoples->emp_id }})</div>
                            <div>Contact Details ________________</div>
                            <div>Extension No </div>
                            <div>CATEGORY ________________</div>
                            <div>Location <strong>Hyderabad</strong></div>
                            <div>OTHER INFORMATION _______________</div>
                            <div>Joining Date <strong>02 Jan, 2023</strong></div>
                            <div>Date Of Birth <strong>28 Oct</strong></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
function toggleDetails(tabId) {
    const tabs = ['starred', 'everyone'];
    tabs.forEach(tab => {
        if (tab === tabId) {
            document.getElementById(tab).style.display = 'block';
        } else {
            document.getElementById(tab).style.display = 'none';
        }
    });
}
</script>