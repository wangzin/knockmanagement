<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="active" id="dashboardId">
                <a href="/1622de66d3ea3e8fd5727ee63525a8f33f839055/2938c7f7e560ed972f8a4f68e80ff834">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <!-- Admin menu bars -->
            <?php if(session()->get('role_id') ==1): ?>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>About</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/49295c3e3b4155411b8f0c3f0044a22f"><i class="fa fa-angle-double-right"></i>
                            <span>Logo & Contacts</span></a>
                        </li>
                        <li>
                            <a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/f5a2f5ad159726f17d1d81f3fd594aed"><i class="fa fa-angle-double-right"></i>
                            <span>About Company</span></a>
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/7462880e9eae014c37971f3760434652">
                        <i class="fa fa-laptop"></i>
                        <span>Website menu bar</span>
                    </a>
                </li> -->
                <li>
                    <a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/e9883d615ca4a5bc0d3d3c91afe2d881">
                        <i class="fa fa-laptop"></i>
                        <span>Manage Sliders</span>
                    </a>
                </li>
               <li>
                    <a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2ade8118c7e58315ea0ad1ee121e7256">
                        <i class="fa fa-laptop"></i>
                        <span>Manage Cleaning Services</span>
                    </a>
                </li>
                <li>
                    <a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/2ade8118c7e58315ea0ad1ee121e7297">
                        <i class="fa fa-laptop"></i>
                        <span>Manage Future Services</span>
                    </a>
                </li>
                <li>
                    <a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/866f61182ded2296d8d73bcbe8e24380">
                        <i class="fa fa-laptop"></i>
                        <span>Manage Excellence</span>
                    </a>
                </li>
                <li>
                    <a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/9ed6280103d930c543274dcb46af1fa9">
                        <i class="fa fa-laptop"></i>
                        <span>Manage Cleaning Process</span>
                    </a>
                </li>
                <li>
                    <a href="/529288ce6f5efcd3a2f57dea8f48fb4131f90c3e/9b4782210240dabe1ec496b29958f0b4">
                        <i class="fa fa-laptop"></i>
                        <span>Customer Testimony</span>
                    </a>
                </li>
            <?php endif;?>
        </ul>
    </section>
</aside>