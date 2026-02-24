<header class="main-header">
    <a href="/dashboard" class="logo">
      <span class="logo-mini"><?=$abouts['org_name']?></span>
      <span class="logo-lg"><b><?=$abouts['org_name']?></b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="user-image" alt="User Image">
                <?php if(session()->get('user_name') !=null): ?>
                    <?= session()->get('user_name'); ?>
                <?php endif;?>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="https://t4.ftcdn.net/jpg/02/29/75/83/360_F_229758328_7x8jwCwjtBMmC6rgFzLFhZoEpLobB6L8.jpg" class="img-circle" alt="User Image">
                <p>
                    <?php if(session()->get('user_name') !=null): ?>
                        <?= session()->get('user_name'); ?>
                    <?php endif;?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/1622de66d3ea3e8fd5727ee63525a8f33f839055/2576a1ab40267ffb5ffb6a5348dd6bc0" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a href="/1622de66d3ea3e8fd5727ee63525a8f33f839055/4236a440a662cc8253d7536e5aa17942" class="btn btn-default btn-flat">Logout</a>
                </div>
                <div class="pull-right" style="padding-top: 12px;">
                    <a href="/1622de66d3ea3e8fd5727ee63525a8f33f839055/8df25be65e2e6d9d13ad84cd96b7f528" style="padding-right: 70px; padding-left: 83px;" class="btn btn-default btn-flat bg-teal">Change Password</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
