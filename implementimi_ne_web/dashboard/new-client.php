<main class="content-wrap">
    <header class="content-head">
        <h1>Add a New Client</h1>
    </header>
<div class="ctn">
    <div class="content">
        <section class="form-section">
            <form action="/demo/fitness_app/queries/new-client.php" method="POST">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth:</label>
                    <input type="date" id="date_of_birth" name="date_of_birth" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="contact_info">Contact Info (Email):</label>
                    <input type="email" id="contact_info" name="contact_info" required>
                </div>
                <div class="form-group">
                    <label for="trainer_id">Trainer:</label>
                    <select id="trainer_id" name="trainer_id" required>
                        <?php
                        include_once __DIR__ . '/../logic/config.php';
                        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT id, CONCAT(first_name, ' ', last_name) AS trainer_name FROM trainers";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="' . $row['id'] . '">' . $row['trainer_name'] . '</option>';
                            }
                        } else {
                            echo '<option value="">No trainers available</option>';
                        }
                        $conn->close();
                        ?>
                    </select>
                </div>
                <button type="submit">Add Client</button>
            </form>
        </section>
    </div>
    </div>
</main>