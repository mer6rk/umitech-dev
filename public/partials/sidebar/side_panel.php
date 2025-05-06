<style>
    .sidebar {
        width: 250px;
        transition: width 0.3s;
    }
    .sidebar.collapsed {
        width: 80px;
    }
    .sidebar .text {
        display: inline-block;
    }
    .sidebar.collapsed .text {
        display: none;
    }
 </style>


<div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-lg-3 bg-light vh-100 sidebar" id="sidebar">
                <div class="p-3">
                    <button class="btn btn-primary mb-3" id="toggleSidebar">Toggle</button>
                    <?php include 'menu_items.php'; ?>
                </div>
            </nav>

            <?php include 'main_content.php'; ?>

        </div>
    </div>
</div>

<script>
    document.getElementById("toggleSidebar").addEventListener("click", function() {
        document.getElementById("sidebar").classList.toggle("collapsed");
    });
</script>
