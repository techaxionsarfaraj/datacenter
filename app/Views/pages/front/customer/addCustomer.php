<?= $this->extend('templates/front/index') ?>
 
<?= $this->section('content') ?>

<div class="container-fluid">
    
    

    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add New Customer
        </button>
        <div class="table-responsive">
            <table id="example" class="display table table-responsive" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>$162,700</td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>$372,000</td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012-08-06</td>
                        <td>$137,500</td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010-10-14</td>
                        <td>$327,900</td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>$433,060</td>
                    </tr>
                </tbody>            
            </table>
        </div>
    </div> 
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="staticBackdropLabel">Add New Customer</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Main content -->
                <div class="row">
                    <!-- Left side -->
                    <div class="col-lg-8">
                        <!-- Basic information -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Basic information</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">First name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Address -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6 mb-4">Address</h3>
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control">
                                </div>                          
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Town</label>
                                            <input type="text" class="form-control" name="town">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control" name="city">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Pincode</label>
                                            <input type="text" class="form-control" class="pincode">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right side -->
                    <div class="col-lg-4">
                        <!-- Status -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Status</h3>
                                <select class="form-select">
                                    <option value="pending" selected="">Pending</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <!-- Category -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="h6">Category</h3>
                                <select class="form-select">
                                    <option value="daily" selected="">Daily</option>
                                    <option value="occasionally">Occasionally</option>                                    
                                </select>
                            </div>
                        </div>
                        <!-- Avatar -->
                        <div class="card mb-4 d-none" >
                            <div class="card-body">
                            <h3 class="h6">Avatar</h3>
                            <input class="form-control" type="file">
                            </div>
                        </div>
                        <!-- Notes -->
                        <div class="card mb-4">
                            <div class="card-body">
                            <h3 class="h6">Notes</h3>
                            <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <!-- Notification settings -->
                        <div class="card mb-4 d-none">
                            <div class="card-body">
                            <h3 class="h6">Notification Settings</h3>
                            <ul class="list-group list-group-flush mx-n2">
                                <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <h6 class="mb-0">News and updates</h6>
                                    <small>News about product and feature updates.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch">
                                </div>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <h6 class="mb-0">Tips and tutorials</h6>
                                    <small>Tips on getting more out of the platform.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" checked="">
                                </div>
                                </li>
                                <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <h6 class="mb-0">User Research</h6>
                                    <small>Get involved in our beta testing program.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch">
                                </div>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light btn-icon-text" data-bs-dismiss="modal"><i class="bi bi-x"></i> <span class="text">Cancel</span></button>
                <button class="btn btn-primary btn-icon-text"><i class="bi bi-save"></i> <span class="text">Save</span></button>
            </div>
        </div>
    </div>
</div>


<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BBBootstrap</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div>
    <!--Container Main end-->

<!-- Javascript -->
<script type="text/javascript">
$(document).ready( function () {
    $('#example').DataTable();
});
</script>

<?= $this->endSection() ?>