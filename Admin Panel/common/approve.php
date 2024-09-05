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

        // Insert details into driver_details table
        $insertDriverQuery = "INSERT INTO driver_details (driver_id, full_name, address, post_code, phone, driving_license_no, cnic, driver_pic, driving_license_pic, cnic_front_pic, cnic_back_pic)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmtInsertDriver = $con->prepare($insertDriverQuery);
        $stmtInsertDriver->bind_param("issssssssss", $row['driver_id'], $row['full_name'], $row['address'], $row['post_code'], $row['phone'], $row['driving_license_no'], $row['cnic'], $row['driver_pic'], $row['driving_license_pic'], $row['cnic_front_pic'], $row['cnic_back_pic']);

        if ($stmtInsertDriver->execute()) {
            // Retrieve vehicle details from pending_vehicle_details
            $selectVehicleQuery = "SELECT * FROM pending_vehicle_details WHERE driver_id = ?";
            $stmtSelectVehicle = $con->prepare($selectVehicleQuery);
            $stmtSelectVehicle->bind_param("i", $row['driver_id']);
            $stmtSelectVehicle->execute();
            $resultVehicle = $stmtSelectVehicle->get_result();

            if ($resultVehicle->num_rows > 0) {
                $rowVehicle = $resultVehicle->fetch_assoc();

                // Insert vehicle details into vehicle_details table
                $insertVehicleQuery = "INSERT INTO vehicle_details (driver_id, name, model, make, registration, number, color, seating_capacity, front_pic, back_pic)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmtInsertVehicle = $con->prepare($insertVehicleQuery);
                $stmtInsertVehicle->bind_param("isssssisss", $rowVehicle['driver_id'], $rowVehicle['name'], $rowVehicle['model'], $rowVehicle['make'], $rowVehicle['registration'], $rowVehicle['number'], $rowVehicle['color'], $rowVehicle['seating_capacity'], $rowVehicle['front_pic'], $rowVehicle['back_pic']);

                if ($stmtInsertVehicle->execute()) {
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
                    echo "Error inserting vehicle record: " . $stmtInsertVehicle->error;
                }

                $stmtInsertVehicle->close();
            } else {
                echo "No pending vehicle details found for the driver.";
            }

            $stmtSelectVehicle->close();
        } else {
            echo "Error inserting driver record: " . $stmtInsertDriver->error;
        }

        $stmtInsertDriver->close();
    } else {
        echo "No pending driver details found for the given ID.";
    }

    $stmt->close();
    $con->close();
}
?>
