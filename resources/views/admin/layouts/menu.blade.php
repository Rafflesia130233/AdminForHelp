</li><li {!! (Request::is('admin/membernetworks') || Request::is('admin/membernetworks/create') || Request::is('admin/membernetworks/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Membernetworks</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/membernetworks') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/membernetworks') }}">
                <i class="fa fa-angle-double-right"></i>
                Membernetworks
            </a>
        </li>
        <li {!! (Request::is('admin/membernetworks/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/membernetworks/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Membernetwork
            </a>
        </li>
    </ul>


</li><li {!! (Request::is('admin/ongoingprojects') || Request::is('admin/ongoingprojects/create') || Request::is('admin/ongoingprojects/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Ongoingprojects</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/ongoingprojects') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/ongoingprojects') }}">
                <i class="fa fa-angle-double-right"></i>
                Ongoingprojects
            </a>
        </li>
        <li {!! (Request::is('admin/ongoingprojects/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/ongoingprojects/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Ongoingproject
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/employedprojects') || Request::is('admin/employedprojects/create') || Request::is('admin/employedprojects/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Employedprojects</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/employedprojects') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/employedprojects') }}">
                <i class="fa fa-angle-double-right"></i>
                Employedprojects
            </a>
        </li>
        <li {!! (Request::is('admin/employedprojects/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/employedprojects/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Employedproject
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/donorandpartners') || Request::is('admin/donorandpartners/create') || Request::is('admin/donorandpartners/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Donorandpartners</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/donorandpartners') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/donorandpartners') }}">
                <i class="fa fa-angle-double-right"></i>
                Donorandpartners
            </a>
        </li>
        <li {!! (Request::is('admin/donorandpartners/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/donorandpartners/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Donorandpartner
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/programs') || Request::is('admin/programs/create') || Request::is('admin/programs/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Programs</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/programs') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/programs') }}">
                <i class="fa fa-angle-double-right"></i>
                Programs
            </a>
        </li>
        <li {!! (Request::is('admin/programs/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/programs/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Program
            </a>
        </li>
    </ul>
<li {!! (Request::is('admin/images') || Request::is('admin/images/create') || Request::is('admin/images/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Images</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/images') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/images') }}">
                <i class="fa fa-angle-double-right"></i>
                Images
            </a>
        </li>
        <li {!! (Request::is('admin/images/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/images/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Image
            </a>
        </li>
    </ul>
<li {!! (Request::is('admin/publications') || Request::is('admin/publications/create') || Request::is('admin/publications/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Publications</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/publications') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/publications') }}">
                <i class="fa fa-angle-double-right"></i>
                Publications
            </a>
        </li>
        <li {!! (Request::is('admin/publications/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/publications/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Publication
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/pressreleases') || Request::is('admin/pressreleases/create') || Request::is('admin/pressreleases/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Pressreleases</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/pressreleases') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/pressreleases') }}">
                <i class="fa fa-angle-double-right"></i>
                Pressreleases
            </a>
        </li>
        <li {!! (Request::is('admin/pressreleases/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/pressreleases/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Pressrelease
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/boardofadvisors') || Request::is('admin/boardofadvisors/create') || Request::is('admin/boardofadvisors/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Boardofadvisors</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/boardofadvisors') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/boardofadvisors') }}">
                <i class="fa fa-angle-double-right"></i>
                Boardofadvisors
            </a>
        </li>
        <li {!! (Request::is('admin/boardofadvisors/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/boardofadvisors/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Boardofadvisor
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/casestudies') || Request::is('admin/casestudies/create') || Request::is('admin/casestudies/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Casestudies</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/casestudies') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/casestudies') }}">
                <i class="fa fa-angle-double-right"></i>
                Casestudies
            </a>
        </li>
        <li {!! (Request::is('admin/casestudies/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/casestudies/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Casestudy
            </a>
        </li>
    </ul>
</li><li {!! (Request::is('admin/members') || Request::is('admin/members/create') || Request::is('admin/members/*') ? 'class="active"' : '') !!}>
    <a href="#">
        <i class="livicon" data-name="list-ul" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Members</span>
        <span class="fa arrow"></span>
    </a>
    <ul class="sub-menu">
        <li {!! (Request::is('admin/members') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/members') }}">
                <i class="fa fa-angle-double-right"></i>
                Members
            </a>
        </li>
        <li {!! (Request::is('admin/members/create') ? 'class="active" id="active"' : '') !!}>
            <a href="{{ URL::to('admin/members/create') }}">
                <i class="fa fa-angle-double-right"></i>
                Add New Member
            </a>
        </li>
    </ul>
</li>