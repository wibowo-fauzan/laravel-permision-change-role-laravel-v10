<style>
    * {}

    .custom-styling-docwibi-pedding {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    .custom-styling-ahref,
    .custom-styling-ahref:hover,
    .custom-styling-ahref:focus {
        text-decoration: none;
        transition: all 0.3s;
    }

    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
    }

    /* Sidebar Styles */
    .wrapper {
        display: flex;
        align-items: stretch;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: #7386D5;
        color: #fff;
        transition: all 0.3s;
        position: relative;
        z-index: 100;
    }

    #sidebar .custom-styling-ahref,
    #sidebar .custom-styling-ahref:hover,
    #sidebar .custom-styling-ahref:focus {
        color: inherit;
    }

    #sidebar.active {
        margin-left: -250px;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #eea236;
    }

    #sidebar ul.components {
        /* padding: 20px 0; */
        /* border-bottom: 1px solid #47748b; */
    }

    #sidebar ul .custom-styling-docwibi-pedding {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li .custom-styling-ahref {
        padding: 20px;
        font-size: 1.5em;
        display: block;
    }

    #sidebar ul li .custom-styling-ahref:hover {
        color: black;
        background: white;
    }

    #sidebar ul li.active>.custom-styling-ahref,
    a[aria-expanded="true"] {
        color: #fff;
        background: #eea236;
    }

    ul ul .custom-styling-ahref {
        font-size: 1.3em !important;
        padding-left: 30px !important;
        background: #eea236;
    }

    ul.CTAs {
        padding: 20px;
    }

    ul.CTAs .custom-styling-ahref {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    .custom-styling-ahref.download {
        background: #fff;
        color: #7386D5;
    }

    .custom-styling-ahref.article,
    .custom-styling-ahref.article:hover {
        background: #eea236 !important;
        color: #fff !important;
    }

    /* Content Styles */
    #content {
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
    }

    #content .custom-styling-docwibi-pedding .custom-styling-ahref {
        color: #7386D5;
    }

    /* Media Queries */
    @media (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
        }

        #sidebar.active {
            margin-left: 0;
        }

        #sidebarCollapse span {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .navbar {
            padding: 10px;
        }

        .navbar-header {
            font-size: 0.9em;
        }
    }
</style>
<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" role="navigation" class="bg-dark text-white">
        <ul class="list-unstyled components">
            <li>
                <a class="custom-styling-ahref" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">Home <span class="caret"></span></a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a class="custom-styling-ahref nav-link" data-target="#homeContent">Home 1</a></li>
                    <li><a class="custom-styling-ahref nav-link" data-target="#aboutContent">about</a></li>
                    <li><a class="custom-styling-ahref nav-link">Home 3</a></li>
                </ul>
            </li>
            <li>
                <a class="custom-styling-ahref nav-link">About</a>
            </li>
            <li>
                <a class="custom-styling-ahref" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                    class="dropdown-toggle">Pages <span class="caret"></span></a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a class="custom-styling-ahref nav-link" data-target="#page1Content">Page 1</a></li>
                    <li><a class="custom-styling-ahref nav-link">Page 2</a></li>
                    <li><a class="custom-styling-ahref nav-link">Page 3</a></li>
                </ul>
            </li>
            <li>
                <a class="custom-styling-ahref nav-link">Portfolio</a>
            </li>
            <li>
                <a class="custom-styling-ahref nav-link" data-target="#contactContent">Contact</a>
            </li>
        </ul>
    </nav>
</div>

<!-- JS Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Toggle Sidebar visibility on button click
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });

        // Toggle dropdown
        $('.dropdown-toggle').on('click', function() {
            var $this = $(this);
            var $target = $this.next();
            $this.attr('aria-expanded', $target.hasClass('collapse') ? 'true' : 'false');
            $target.toggleClass('collapse');
        });
    });
</script>
