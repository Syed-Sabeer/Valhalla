<?php
include("../../utilities/connection.php");

if (isset($_GET['id'])) {
    $driverId = $_GET['id'];

    // Retrieve driver details from pending_driver_details
    $selectQuery = "SELECT * FROM pending_driver_details WHERE id = ?";
    $stmt = $con->prepare($selectQuery);
    $stmt->bind_param("i", $driverId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Delete record from pending_driver_details
        $deleteQuery = "DELETE FROM pending_driver_details WHERE id = ?";
        $stmtDelete = $con->prepare($deleteQuery);
        $stmtDelete->bind_param("i", $driverId);

        if ($stmtDelete->execute()) {
            // Delete record from pending_vehicle_details
            $deletePendingVehicleQuery = "DELETE FROM pending_vehicle_details WHERE driver_id = ?";
            $stmtDeletePendingVehicle = $con->prepare($deletePendingVehicleQuery);
            $stmtDeletePendingVehicle->bind_param("i", $row['driver_id']);
            $stmtDeletePendingVehicle->execute();

            // Redirect back to the admin panel or a confirmation page
            header("Location: admin_panel.php");
            exit;
        } else {
            echo "Error deleting record: " . $stmtDelete->error;
        }

        $stmtDelete->close();
    } else {
        echo "No pending driver details found for the given ID.";
    }

    $stmt->close();
    $con->close();
} else {
    echo "Driver ID not provided.";
}
?>
