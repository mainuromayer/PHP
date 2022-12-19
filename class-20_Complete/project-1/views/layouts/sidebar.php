<nav id="sidebar">
            <div class="sidebar-header text-center">
                <h4><?php echo Config::getConfig('app.name'); ?></h4>
                <strong><?php echo Config::getConfig('app.short_code'); ?></strong>
            </div>

            <ul class="list-unstyled components">
                <li class="<?php echo Helper::setMenuActive('dashboard') ?>">
                    <a href="<?php echo BASE_URL;?>">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li class="<?php echo Helper::setMenuActive('product') ?>">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-archive" aria-hidden="true"></i>
                        Product
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="<?php echo BASE_URL.'?q=product/list';?>">Product list</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL.'?q=product/create';?>">Add new</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo Helper::setMenuActive('about') ?>">
                    <a href="<?php echo BASE_URL.'?q=about';?>">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                        About
                    </a>
                </li>
                <li class="<?php echo Helper::setMenuActive('contact') ?>">
                    <a href="<?php echo BASE_URL.'?q=contact';?>">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        Contact
                    </a>
                </li>
            </ul>
        </nav>