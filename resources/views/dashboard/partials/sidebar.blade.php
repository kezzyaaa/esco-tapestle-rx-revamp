<nav id="sidebar">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <div class="px-3 py-4">

        <ul class="list-unstyled components mb-5">
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard"><i class="fa fa-home" aria-hidden="true"></i>  Home</a>
            </li>
            <li class="{{ Request::is('dashboard/pages*') ? 'active' : '' }}">
                <a href="#"><i class="fa fa-file-o" aria-hidden="true"></i>  Pages</a>
            </li>
            <li>
                <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" class="dropdown-toggle dropdown-toggle2"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Products</a>
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                     <ul class="list-unstyled components pl-3">
                         <li><a href="/dashboard/product-model">Product Models</a></li>
                         <li><a href="#">Product Categories</a></li>
                         <li><a href="#">Product Application</a></li>
                         <li><a href="#">Containment Controls</a></li>
                     </ul>
                  </div>
            </li>
            <li class="{{ Request::is('dashboard/news*') ? 'active' : '' }}">
                <a href="/dashboard/news"><i class="fa fa-newspaper-o" aria-hidden="true"></i>  News</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>  Solutions</a>
            </li>
            <li class="{{ Request::is('dashboard/resources*') ? 'active' : '' }}">
                <a href="/dashboard/resources"><i class="fa fa-book" aria-hidden="true"></i>  Resources</a>
            </li>
            <li class="{{ Request::is('dashboard/images*') ? 'active' : '' }}">
                <a href="/dashboard/images" target="_blank"><i class="fa fa-file-image-o" aria-hidden="true"></i>  Images</a>
            </li>
            <li class="{{ Request::is('dashboard/configurations*') ? 'active' : '' }}">
                <a href="/dashboard/configurations"><i class="fa fa-cogs" aria-hidden="true"></i>  Configurations</a>
            </li>
            <li class="{{ Request::is('dashboard/leads*') ? 'active' : '' }}">
                <a href="/dashboard/leads"><i class="fa fa-line-chart" aria-hidden="true"></i>  Leads</a>
            </li>
            <li class="{{ Request::is('dashboard/mail-subscriber*') ? 'active' : '' }}">
                <a href="/dashboard/mail-subscriber"><i class="fa fa-users" aria-hidden="true"></i>  Mail Subscribers</a>
            </li>
        </ul>

    <img src="/images/core-img/ep logo v2-01.svg" alt="Esco Pharma logo" class="w-50 mb-2">

    <div class="footer">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy; 2020 All rights reserved
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>

    </div>
</nav>
