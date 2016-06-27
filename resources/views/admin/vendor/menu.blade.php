
<div class="mobile-menu-left-overlay"></div>
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey">
	            <a href="{{ route('admin.home') }}">
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Anasayfa</span>
	            </a>
        </li>
        <li class="brown with-sub">
	            <span>
	                <i class="font-icon glyphicon glyphicon-tint"></i>
	                <span class="lbl">Diziler</span>
	            </span>
            <ul>
                <li><a href="{{ route('admin.series.index') }}"><span class="lbl">Dizileri Görüntüle</span></a></li>
                <li><a href="{{ route('admin.series.add') }}"><span class="lbl">Dizi Ekle</span></a></li>
            </ul>
        </li>
        <li class="purple with-sub">
	            <span>
	                <i class="glyphicon glyphicon-th"></i>
	                <span class="lbl">Sezonlar</span>
	            </span>
            <ul>
                <li><a href="{{ route('admin.seasons.index') }}"><span class="lbl">Sezonlar</span></a></li>
                <li><a href="{{ route('admin.seasons.add') }}"><span class="lbl">Sezon Ekle</span></a></li>
            </ul>
        </li>
        <li class="gold with-sub">
	            <span>
	                <i class="font-icon font-icon-edit"></i>
	                <span class="lbl">Bölümler</span>
	            </span>
            <ul>
                <li><a href="{{ route('admin.parts.index') }}"><span class="lbl">Bölümleri Gör</span></a></li>
                <li><a href="#"><span class="lbl">Bölüm Ekle</span></a></li>
            </ul>
        </li>
        <li class="blue-dirty">
            <a href="{{ route('admin.step.step1') }}">
                <span class="glyphicon glyphicon-th"></span>
                <span class="lbl">Adim Adim</span>
            </a>
        </li>
        <li class="magenta with-sub">
	            <span>
	                <span class="glyphicon glyphicon-list-alt"></span>
	                <span class="lbl">Datatables</span>
	            </span>
            <ul>
                <a href="datatables-net.html"><span class="lbl">Datatables.net</span></a></li>
                <a href="bootstrap-datatables.html"><span class="lbl">Bootstrap Table</span></a></li>

                <!--<li><a href="datatables.html"><span class="lbl">Default</span></a></li>
                <li><a href="datatables-fixed-columns.html"><span class="lbl">Fixed Columns</span></a></li>
                <li><a href="datatables-reorder-rows.html"><span class="lbl">Reorder Rows</span></a></li>
                <li><a href="datatables-reorder-columns.html"><span class="lbl">Reorder Columns</span></a></li>
                <li><a href="datatables-resize-columns.html"><span class="lbl">Resize Columns</span></a></li>
                <li><a href="datatables-mobile.html"><span class="lbl">Mobile</span></a></li>
                <li><a href="datatables-filter-control.html"><span class="lbl">Filters</span></a></li>-->
            </ul>
        </li>
        <li class="green with-sub">
	            <span>
	                <i class="font-icon font-icon-widget"></i>
	                <span class="lbl">Components</span>
	            </span>
            <ul>
                <li><a href="widgets.html"><span class="lbl">Widgets</span></a></li>
                <li><a href="elements.html"><span class="lbl">Bootstrap UI</span></a></li>
                <li><a href="ui-datepicker.html"><span class="lbl">Date and Time Pickers</span></a></li>
                <li><a href="components-upload.html"><span class="lbl">Upload</span></a></li>
                <li><a href="sweet-alerts.html"><span class="lbl">SweetAlert</span></a></li>
                <li><a href="tabs.html"><span class="lbl">Tabs</span></a></li>
                <li><a href="panels.html"><span class="lbl">Panels</span></a></li>
                <li><a href="notifications.html"><span class="lbl">Notifications</span></a></li>
                <li><a href="range-slider.html"><span class="lbl">Sliders</span></a></li>
                <li><a href="editor-summernote.html"><span class="lbl">Editors</span></a></li>
                <li><a href="nestable.html"><span class="lbl">Nestable</span></a></li>
                <li><a href="blockui.html"><span class="lbl">BlockUI</span></a></li>
                <li><a href="alerts.html"><span class="lbl">Alerts</span></a></li>
                <li><a href="player.html"><span class="lbl">Players</span></a></li>
            </ul>
        </li>
        <!--   <li class="gold">
               <a href="#">
                   <i class="font-icon font-icon-speed"></i>
                   <span class="lbl">Performance</span>
               </a>
           </li>-->
        <li class="pink-red">
            <a href="activity.html">
                <i class="font-icon font-icon-zigzag"></i>
                <span class="lbl">Activity</span>
            </a>
        </li>
        <li class="blue with-sub">
	            <span>
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">Profile</span>
	            </span>
            <ul>
                <li><a href="profile.html"><span class="lbl">Version 1</span></a></li>
                <li><a href="profile-2.html"><span class="lbl">Version 2</span></a></li>
            </ul>
        </li>
        <li class="orange-red with-sub">
	            <span>
	                <i class="font-icon font-icon-help"></i>
	                <span class="lbl">Support</span>
	            </span>
            <ul>
                <li><a href="documentation.html"><span class="lbl">Docs (example)</span></a></li>
                <li><a href="faq.html"><span class="lbl">FAQ Simple</span></a></li>
                <li><a href="faq-search.html"><span class="lbl">FAQ Search</span></a></li>
            </ul>
        </li>
        <li class="red">
            <a href="contacts.html" class="label-right">
                <i class="font-icon font-icon-contacts"></i>
                <span class="lbl">Contacts</span>
                <span class="label label-custom label-pill label-danger">35</span>
            </a>
        </li>
        <li class="magenta opened">
            <a href="scheduler.html">
                <i class="font-icon font-icon-calend"></i>
                <span class="lbl">Calendar</span>
            </a>
        </li>
        <li class="grey with-sub">
	            <span>
	                <span class="glyphicon glyphicon-duplicate"></span>
	                <span class="lbl">Pages</span>
	            </span>
            <ul>
                <li><a href="email_templates.html"><span class="lbl">Email Templates</span></a></li>
                <li><a href="blank.html"><span class="lbl">Blank</span></a></li>
                <li><a href="empty.html"><span class="lbl">Empty List</span></a></li>
                <li><a href="prices.html"><span class="lbl">Prices</span></a></li>
                <li><a href="typography.html"><span class="lbl">Typography</span></a></li>
                <li><a href="sign-in.html"><span class="lbl">Login</span></a></li>
                <li><a href="sign-up.html"><span class="lbl">Register</span></a></li>
                <li><a href="reset-password.html"><span class="lbl">Reset Password</span></a></li>
                <li><a href="new-password.html"><span class="lbl">New Password</span></a></li>
                <li><a href="error-404.html"><span class="lbl">Error 404</span></a></li>
                <li><a href="error-500.html"><span class="lbl">Error 500</span></a></li>
                <li><a href="cards.html"><span class="lbl">Cards</span></a></li>
                <li><a href="avatars.html"><span class="lbl">Avatars</span></a></li>
                <li><a href="ribbons.html"><span class="lbl">Ribbons</span></a></li>
                <li><a href="icons-startui.html"><span class="lbl">Icons</span></a></li>
                <li><a href="invoice.html"><span class="lbl">Invoice</span></a></li>
                <li><a href="helpers.html"><span class="lbl">Helpers</span></a></li>
            </ul>
        </li>
        <li class="blue-dirty">
            <a href="list-tasks.html">
                <i class="font-icon font-icon-notebook"></i>
                <span class="lbl">Tasks</span>
            </a>
        </li>
        <li class="aquamarine">
            <a href="contacts-page.html">
                <i class="font-icon font-icon-mail"></i>
                <span class="lbl">Contact form</span>
            </a>
        </li>
        <li class="blue">
            <a href="files.html">
                <i class="font-icon glyphicon glyphicon-paperclip"></i>
                <span class="lbl">File Manager</span>
            </a>
        </li>
        <li class="gold">
            <a href="gallery.html">
                <i class="font-icon font-icon-picture-2"></i>
                <span class="lbl">Gallery</span>
            </a>
        </li>
        <li class="red">
            <a href="project.html">
                <i class="font-icon font-icon-case-2"></i>
                <span class="lbl">Project</span>
            </a>
        </li>
        <li class="brown with-sub">
	            <span>
	                <span class="font-icon font-icon-chart"></span>
	                <span class="lbl">Charts</span>
	            </span>
            <ul>
                <li><a href="charts-c3js.html"><span class="lbl">C3.js</span></a></li>
                <li><a href="charts-peity.html"><span class="lbl">Peity</span></a></li>
                <li><a href="charts-plottable.html"><span class="lbl">Plottable.js</span></a></li>
            </ul>
        </li>
    </ul>

    <section>
        <header class="side-menu-title">Tags</header>
        <ul class="side-menu-list">
            <li>
                <a href="#">
                    <i class="tag-color green"></i>
                    <span class="lbl">Website</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tag-color grey-blue"></i>
                    <span class="lbl">Bugs/Errors</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tag-color red"></i>
                    <span class="lbl">General Problem</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tag-color pink"></i>
                    <span class="lbl">Questions</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="tag-color orange"></i>
                    <span class="lbl">Ideas</span>
                </a>
            </li>
        </ul>
    </section>
</nav><!--.side-menu-->