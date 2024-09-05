<?php 
include("./common/nav.php");
include("./common/sidebar.php");

// Include your connection file
include("../utilities/connection.php");

// Check if a search query is provided
$searchQuery = isset($_GET['search']) ? '%' . $_GET['search'] . '%' : '%';

// Pagination
$perPage = 10; // Number of items per page
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page or default to 1
$offset = ($page - 1) * $perPage; // Calculate the offset

// Fetch users with pagination and search
$query = "SELECT * FROM drivers
          WHERE username LIKE ? 
          ORDER BY username
          LIMIT ?, ?";
$stmt = $con->prepare($query);
$stmt->bind_param("sii", $searchQuery, $offset, $perPage);
$stmt->execute();
$result = $stmt->get_result();

// Fetch total number of records for pagination
$totalRecordsQuery = "SELECT COUNT(*) AS total FROM drivers WHERE username LIKE ?";
$stmtTotal = $con->prepare($totalRecordsQuery);
$stmtTotal->bind_param("s", $searchQuery);
$stmtTotal->execute();
$totalResult = $stmtTotal->get_result();
$totalRecords = $totalResult->fetch_assoc()['total'];
$totalPages = ceil($totalRecords / $perPage);

?>
<div class="contents">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main user-member justify-content-sm-between">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title justify-content-center me-sm-25">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Drivers</h4>
                        </div>
                        <form method="GET" class="d-flex align-items-center user-member__form my-sm-0 my-2">
    <img src="img/svg/search.svg" alt="search" class="svg">
    <input class="form-control me-sm-2 border-0 box-shadow-none" type="search" name="search" placeholder="Search by Username" aria-label="Search">
    <button type="submit" style="display:none;"></button>
</form>


                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="userDatatable global-shadow border-light-0 p-30 bg-white radius-xl w-100 mb-30">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
                                <tr class="userDatatable-header">
                                <th>
                                        <span class="userDatatable-title">ID</span>
                                    </th>
                                    <th>
                                        <div class="d-flex align-items-center">
                                            <span class="userDatatable-title">Drivers</span>
                                        </div>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Email</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Password</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Account Created</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Total Orders</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title float-end">Action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) : ?>
                                    <tr>
                                    <td>
                                            <div class="userDatatable-content">
                                                <?= $row['id'] ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="userDatatable__imgWrapper d-flex align-items-center">
                                                    <a href="#" class="profile-image rounded-circle d-block m-0 wh-38" style="background-image:url('img/tm6.png'); background-size: cover;"></a>
                                                </div>
                                                <div class="userDatatable-inline-title">
                                                    <a href="#" class="text-dark fw-500">
                                                        <h6><?= $row['firstname'] ?> <?= $row['lastname'] ?></h6>
                                                    </a>
                                                    <p class="d-block mb-0"><?= $row['username'] ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e6461666023656b62626b7c4e69636f6762206d6163"><?= $row['email'] ?></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                <?= $row['password'] ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="userDatatable-content">
                                                <?= $row['date_created'] ?>
                                            </div>
                                        </td>
                                        
                                        <td>
                                            <div class="userDatatable-content">
                                               
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                <li>
                                                    <a href="#" class="remove">
                                                        <i class="uil uil-trash-alt"></i>
                                                      
                                                    </a>
                                                </li>
                                                <li>
                                                    <a <?php echo ' href="driver_details.php?id=' . $row['id'] . '"'  ?>class="">
                                                   
                                                        <i class="fa-solid fa-circle-info"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end pt-30">
                        <nav class="dm-page">
                            <ul class="dm-pagination d-flex">
                                <?php
                                // Display pagination links
                                for ($i = 1; $i <= $totalPages; $i++) {
                                    $activeClass = ($i == $page) ? 'active' : '';
                                    echo "<li class='dm-pagination__item'>
                                            <a href='?page=$i&search=$searchQuery' class='dm-pagination__link $activeClass'>
                                                <span class='page-number'>$i</span>
                                            </a>
                                          </li>";
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include("./common/footer.php");
?>
