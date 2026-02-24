<section class="content">
    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" alt="User profile picture">
                    <h3 class="profile-username text-center"><?=$data['user_name']?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="false">Profile</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="settings">
                        <form class="form-horizontal">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="inputName">Name: </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="text-blue "><?=$data['user_name']?></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="inputName"> Email/User Name:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="text-blue "><?=$data['email']?></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="inputName"> Contact No:</label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="text-blue "><?=$data['contact_number']?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
